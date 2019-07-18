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
                            <a href="vid.slug">
                            <div class="card-img-overlay">
                                <p class="card-title d-inline-flex">{{vid.title}}</p>
                            </div>
                            </a>
                        </div>
                     
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                               
                                    <li class="page-item" v-for="count in pageNumbers">
                                        <a class="page-link" href="#" >
                                            {{count.counter}}
                                        </a>
                                    </li>       
                                
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                        {{this.list.last_page}}
                    </div>
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
            getAll(endpoint){                
                if(this.search){
                    this.pageUrl = this.endpoint+"?search="+this.search;
                }
                else{
                    this.pageUrl = this.endpoint;
                }
                axios.get(this.pageUrl).then(response=>this.list = response.data);
            },

            pages(){
                this.pageNumbers = [];
                var count = 0;
                for(var i = 1; i <= this.list.last_page; i++){
                    count +=1;
                    this.pageNumbers.push({
                        isActive: "", 
                        counter: count
                        });                    
                }

                    console.log(this.list.last_page);

            }
        },

        mounted(){
            this.pages();
        },

        created(){
            this.getAll();
        },

        watch:{
            search(){
                this.getAll(this.endpoint);
                this.pageNum = 1;
                this.pages();

            }
        },
    }
</script>