<template>
<div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-12">
          <h3>Videos</h3>
            <div class="col-12">

                <div class="container col-10">
                    <div class="row">
                        <input type="text" class="form-control" placeholder="Search Video" v-model="search">
                        <div class="col-4" v-for="vid in list.data" id="video-list">
                            <img class="card-img" :src="'https://img.youtube.com/vi/'+vid.embedlink+'/mqdefault.jpg'">
                            
                            <a :href="'video/'+vid.slug">
                            <div class="card-img-overlay">
                                <p class="card-title d-inline-flex">{{vid.title}}</p>
                            </div>
                            </a>
                        </div>
                    </div>
                    <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous" @click="getAll(list.current_page-1)">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>                               
                                  
                                    <li class="page-item" v-for="num in pageNumbers">
                                        <a class="page-link" href="#" @click="getAll(num.counter)" id="pageNumsLink">
                                            {{num.counter}}
                                        </a>
                                    </li>       
                                
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next" @click="getAll(list.current_page+1)">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                </div>  

            </div>
            <hr>
      </div>
     
  </div>

</template>

<script>
    export default{
        data(){
            return{
                endpoint:'./api/videos',
                list:[],
                search: "",
                pageNum: 1,
                pageNumbers: [],
                lastPage: "",
                pageUrl:'',

                perPage:9,
                currentPage:1,

                lastPage:0,
                ajaxLoad: 0
            };
        },

        computed:{
            filterList(){
                return this.list.data;
            },

            rows(){
                return this.list.length;
            }
        },
        methods:{           
            getAll(page){
                var output = [];
                var pageUrl = this.endpoint+"?page="+page;
                if(this.search){
                    pageUrl = pageUrl+"&search="+this.search;

                }
               
                axios.get(pageUrl)
                    .then(response=> {this.list = response.data; 
                                        this.lastPage = response.data.last_page;
                                        if(this.ajaxLoad == 0 ){
                                            this.pages();
                                        }
                                        this.ajaxLoad = 1;
                                    }).catch(err => console.error(err));
            },

            pages(){
                var count = 1;
                var lastPage = this.lastPage

                for(var i = 1; i <= lastPage; i++){
                    this.pageNumbers.push({
                        isActive: false,  
                        counter: i
                        });

                    if(this.list.currnetPage == count){
                        this.pageNumbers.push({
                            isActive: true, 
                            counter: i
                        });
                    }

                    if(count == 7){
                        this.pageNumbers.push({
                            isActive: true, 
                            counter: '...'
                        });
                        count = 1
                    }
                count +=1;                        
                }
            },
        },

        created(){
            this.getAll(1);
            // this.pages();
        },

        mounted(){
            // this.pages();
            // console.log(this.lastPage);
        },

        watch:{
            search(){
                this.getAll(1);
                this.pageNum = 1;
            }
        },
    }
</script>