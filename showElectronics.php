<?php
require_once 'connect.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Homepage</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <style>
                #card:hover{
                    transform: scale(0.9);
                } 
                #bottom-right {
                    position: absolute;
                    bottom: 1px;
                    right: 1px;
                }
        </style>
    </head>
    <body>
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
				<img src="images/logo.jpg" class="img-fluid" width="100" height="50"> 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#" style="font-size:15px">HOME</a>
          </li>

       <li class="nav-item dropdown">
           <a class="nav-link" href="showElectronics.php">
          ELECTRONICS
           </a>
      </li>

      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             DRINKS
           </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#"></a>
              <a class="dropdown-item" href="#"></a>
        </div>
      </li>
            
      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             GAMING
           </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Playstation</a>
              <a class="dropdown-item" href="#">Accessories</a>
        </div>
      </li>
            
      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             PHONES & TABLETS
           </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Mobile phones</a>
              <a class="dropdown-item" href="#">Tablets</a>
              <a class="dropdown-item" href="#">Accessories</a>
        </div>
      </li>
      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             COMPUTING
           </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Laptops</a>
              <a class="dropdown-item" href="#">Accessories</a>
              <a class="dropdown-item" href="#">Computers</a>
        </div>
      </li>
            
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Log Out</a>
      </li>
            
    </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">SEARCH</button>
        </form>
  </div>
</nav>
        <div class="container-fluid">
        <h1 class="mt-4">Electronics</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="Index.php">Home</a></li>
                            <li class="breadcrumb-item active">Electronics</li>
                        </ol>
              
        <div class="navbar navbar-expand-lg bg-secondary navbar-light">
        <div class="row">
          <div class="col-md-6 col-sm-2">
            <div class="card" id="card" style="width: 12rem; height: 19rem;">
                    <img class="card-img-top" src="images/alcohol.jpg" alt="Alcohol">
                <div class="card-body">
                        <h4 class="card-title"><?php
                            //connect to the database
                            require_once 'connect.php';
                            
                            $sql="SELECT * FROM product";
                            ?></h4>
                        <p class="card-text">Burger with large..</p>
                        <p class="card-text">10,000</p>
                        <a href="#" class="btn btn-primary" id="bottom-right" style="font-size:12px;">Buy Now</a>
                </div>
            </div>
          </div>
            <div class="col-md-6 col-sm-2">
              <div class="card" id="card" style="width: 12rem; height: 19rem;">
                    <img class="card-img-top" src="images/burger.jpg" alt="Alcohol">
                <div class="card-body">
                        <h4 class="card-title">Burger<?ph?></h4>
                        <p class="card-text">Burger with large..</p>
                        <p class="card-text">10,000</p>
                        <a href="#" class="btn btn-primary" id="bottom-right" style="font-size:12px;">Buy Now</a>
                </div>
             </div>
         </div>
      </div>
    </div>
    </div>
 </body>
</html>