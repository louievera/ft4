<template>  
  <div class="content">
    <div id="ftcarousel" class="carousel slide" data-ride="carousel" data-pause="hover">
      <ol class="carousel-indicators">
        <li data-target="#ftcarousel" data-slide-to="0" class="active"></li>
        <li data-target="#ftcarousel" data-slide-to="1"></li>
        <li data-target="#ftcarousel" data-slide-to="2"></li>
        <li data-target="#ftcarousel" data-slide-to="3"></li>
        <li data-target="#ftcarousel" data-slide-to="4"></li>
        <li data-target="#ftcarousel" data-slide-to="5"></li>
        <li data-target="#ftcarousel" data-slide-to="6"></li>
        <li data-target="#ftcarousel" data-slide-to="7"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href="/promos"><img class="d-block w-100" :src="'images/carousel/Unibersikulo6c.jpg'"></a>
        </div>
        <div class="carousel-item">
          <a href="/promos"><img class="d-block w-100" :src="'images/carousel/isabuhay2018_bracket_round2.jpg'"></a>
        </div>
        <div class="carousel-item">
          <a href="/fliptop_radio_station2" target="blank"><img class="d-block w-100" :src="'images/carousel/radio_playlists.jpg'"></a>
        </div>
        <div class="carousel-item">
          <a href="/videos"><img class="d-block w-100" :src="'images/carousel/new_vid_seg.jpg'"></a>
        </div>
        <div class="carousel-item">
          <a href="/register"><img class="d-block w-100" :src="'images/carousel/registernow.jpg'"></a>
        </div>
        <div class="carousel-item">
          <a href="/articles"><img class="d-block w-100" :src="'images/carousel/ftarticles.jpg'" alt="2"></a>
        </div>
        <div class="carousel-item">
          <a href="/video/loonie-vs-mark-grist"><img class="d-block w-100" :src="'images/carousel/loonie-vs-markgrist.jpg'"></a>
        </div>
        <div class="carousel-item">
          <a href="https://www.redbull.tv/film/AP-1TE4PK9292111/mark-grist-battles-the-world" target="_blank"><img class="d-block w-100" :src="'images/carousel/mg_redbull.jpg'"></a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#ftcarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#ftcarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </div>
</template>

<script>
  export default{

  }
</script>