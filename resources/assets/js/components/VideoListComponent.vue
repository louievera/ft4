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
                        <div class="col-4" v-for="vid in list.data">
                            <img class="card-img" :src="'https://img.youtube.com/vi/'+vid.embedlink+'/mqdefault.jpg'">
                            <a href="vid.slug">
                            <div class="card-img-overlay">
                                <p class="card-title d-inline-flex">{{vid.title}}</p>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>   

            </div>
            <hr>

        <!-- <p class="bg-dark text-center">{{ $videos->links() }}</p> -->
       
        <div class="pagination">
            <a href="" v-for="page in pageNumbers">{{page.counter}}</a>
        </div>
        {{list.last_page}}
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
                lastPage: 0,
                pageUrl:''
            };
        },

        computed:{
            filterList(){
                return this.list.data;
            }
        },
        methods:{
            getAll(endpoint){                
                if(this.search){
                    this.pageUrl = this.endpoint+"?search="+this.search;
                    // axios.get(this.endpoint+"?search="+this.search).then(response=>this.list = response.data);
                }
                else{
                    // axios.get(this.endpoint).then(response=>this.list = response.data);
                    this.pageUrl = this.endpoint;
                }
                axios.get(this.pageUrl).then(response=>this.list = response.data);

                console.log(this.list.last_page);
            },

            pages(){
                for(var i = 1; i <= this.list.last_page; i++){
                    this.pageNumbers.push({counter:i});
                }
            }
        },

        created(){
            this.getAll();
            this.pages();
            console.log(this.list.last_page);
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