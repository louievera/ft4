<template>
<div class="content">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
        <h3>Featured Articles:</h3>
            <div class="card-columns">            
                <div class="card bg-inverse" v-for="post in posts">
                    <img class="card-img" :src="'/storage/'+post.image">
                    <a href="post.slug">
                    <div class="card-img-overlay d-flex align-items-end">
                        <p class="card-title">{{ post.title }}</p>
                    </div>
                    </a>
                </div>
            </div>
            <div class="float-right">
                <a href="/articles">Check more Articles...</a>
            </div>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-10">
            <h3>Featured Videos:</h3>                
            <div class="container col-12">    
                <div class="row">
                    <div class="col-4" v-for="vid in vids">
                        <img class="card-img" :src="'https://img.youtube.com/vi/'+vid.embedlink+'/mqdefault.jpg'">
                        <a href="vid.slug">
                        <div class="card-img-overlay">
                            <p class="card-title d-inline-flex">{{vid.title}}</p>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="float-right">
                    <a href="/videos">Check more videos...</a>
                </div>
            </div>    
            <hr>
        </div>
    </div>
</div>
</template>


<script>
  export default{

    data(){
        return{
            posts:[],
            vids:[]            
        }
    },

    methods:{
      getPosts(){
        axios.get('./api/welcomeposts').then(response => this.posts = response.data);
      },

      getVid()
      {
        axios.get('./api/welcomevids').then(response => this.vids = response.data);
          
      }
    },

    created(){
      this.getPosts();
      this.getVid();

    }
  }
</script>
