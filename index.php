<?php include("pages/header.php"); ?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li> 
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="width: " class="d-block w-100" src="images/carousel_ebd.jpg">
    </div>
    <div class="carousel-item ">
      <img style="width: 1080px" class="d-block w-100" src="images/carousel_missoes.jpg">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php include("pages/footer.php"); ?>