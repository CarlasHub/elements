



<div class="jumbotron bg-cover text-white">
  <div class="container-fluid">
  <!-- nav bar start -->
  <nav class="navbar navbar-expand-lg navbar navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
      <img class="logo-img" src="images/vintage-logo.png" width="150" height="150" alt="">
    </a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto ">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <!-- <input type="color" id="color" value="#49bc58" onchange="getColor()" /> -->
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
      <div id="searchOverlay" class="overlay">
          <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
          <div class="overlay-content">
              <form action="">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
              </form>
          </div>
      </div>
      <div class=" nav-right">
      
          <button class=" openBtn" onclick="openSearch()"><i class="fa fa-search"></i></button>
          <span class="fa-stack has-badge" data-count="5">
        
            <i class="fa fa-shopping-cart fa-stack-1x red-cart"></i>
          </span>
        </a>
          <a href="/shop" class=" btn btn-primary btn-lg btn-large">Start Here</a>
      </div>
    </div>
  </nav>
  <!-- nav bar end -->
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
<!-- /.container   -->
</div>
  

