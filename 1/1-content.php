  <?php
  $url_host = 'http://' . $_SERVER['HTTP_HOST'];
  $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
  $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

  preg_match_all($pattern_uri, __DIR__, $matches);
  $url_path = $url_host . $matches[1][0];
  $url_path = str_replace('\\', '/', $url_path);
  ?>
  <div class="type-1">
    <div class="container pd">
      <div class="row reponsive">
        <div class="col-md-4 col-sm-12">
         <a class="logo" href="#">
          <img class="images" src="./images/restaurant-logo.png" alt="">
        </a>
        
      </div>
      <div class=" col-md-8 col-sm-12">
        <div class="row ">
          <div class="line">
            <div class="col-md-4">
             <span>
              <i class="fa fa-phone"></i>   
              <a href="#">+31 (0)70 1234567</a>
            </span>

          </div>
          <div class="col-md-4">
            <span>
              <i class="fa fa-envelope-o"></i>   
              <a href="#">info@therestaurant.com</a>
            </span>

          </div>
          <div class="col-md-4">
           <span>
            <i class="fa fa-map-marker"></i>   
            Restaurant street 1, NYC
          </span>

        </div>
      </div>
    </div>

  </div>

</div>
</div>
<div id="menu">
  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#" >Home</a></li>
            <li class="dropdown">
              <a href="#" class="items" >Menu</a>
            </li>
            <li><a href="http://localhost/6/6.php" class="items" >News</a></li>
            <li><a href="#" class="items" >Reviews</a></li>
            <li><a href="#" class="items" >Contact us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</div>

</div>





