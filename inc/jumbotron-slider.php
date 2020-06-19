
<!-- slider starts -->
<div id="carouselExampleIndicators" class="carousel slide" data-interval="false">
  
  <ul class="sliders-id">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">About</li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1">For you</li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2">24/7</li>
      
  </ul>
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" style= "background-image:url('https://placeimg.com/1000/480/nature')">
      <!-- <img class="d-block w-100" src="https://placeimg.com/1000/480/nature" alt="First slide"> -->
      <div class="overlayer"></div>
         <div class="jumbotron-content text-center">
            <h1 class="display-4 title">Retro Inspiration</h1>
            <?php
                $crumbs = explode("/",$_SERVER["REQUEST_URI"]);
                foreach($crumbs as $crumb){
                    echo ucfirst(str_replace(array(".php","_"),array(""," "),$crumb) . ' ');
                }
            ?>
          
          </div>
    </div>
    <div class="carousel-item" style="background-image:url('https://placeimg.com/1000/480/nature')">
      <!-- <img class="d-block w-100" src="https://placeimg.com/1000/480/nature" alt="Second slide"> -->
      <div class="overlayer"></div>
      <div class="jumbotron-content text-center">
            <h1 class="display-4 title">Retro Inspiration</h1>
            <?php
                $crumbs = explode("/",$_SERVER["REQUEST_URI"]);
                foreach($crumbs as $crumb){
                    echo ucfirst(str_replace(array(".php","_"),array(""," "),$crumb) . ' ');
                }
            ?>
          
          </div>
    </div>
    <div class="carousel-item" style="background-image:url('https://placeimg.com/1000/480/nature')">
      <!-- <img class="d-block w-100" src="https://placeimg.com/1000/480/nature" alt="Third slide"> -->
      <div class="overlayer"></div>
      <div class="jumbotron-content text-center">
            <h1 class="display-4 title">Retro Inspiration</h1>
            <?php
                $crumbs = explode("/",$_SERVER["REQUEST_URI"]);
                foreach($crumbs as $crumb){
                    echo ucfirst(str_replace(array(".php","_"),array(""," "),$crumb) . ' ');
                }
            ?>
          
          </div>
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

<!-- slider ends -->
  