<template>
<div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-12">

        
          <h3>Videos</h3>
            <div class="col-12">

                <div class="container col-10">
                    <div class="row">
                        <input type="text" class="form-control" placeholder="Search Video">
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

      </div>
  </div>

</template>

<script>
    export default{
        data(){
            return{
                endpoint:'./api/videos',
                list:[]
            };
        },

        methods:{
            getAll(){
                axios.get(this.endpoint).then(response=>this.list = response.data);
            }
        },

        created(){
            this.getAll();
        }
    }
</script>