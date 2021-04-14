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
            <a class="nav-link" href="#" style="font-size:17px">HOME</a>
          </li>

       <li class="nav-item dropdown">
           <a class="nav-link" href="ShopElectronics.php">
          ELECTRONICS
           </a>
      </li>

      <li class="nav-item dropdown">
            <a class="nav-link" href="gaming.php">
             GAMING
           </a>
      </li>
            
      <li class="nav-item dropdown">
            <a class="nav-link" href="drinks.php">
             DRINKS
           </a>
      </li>
            
      <li class="nav-item dropdown">
            <a class="nav-link" href="#">
             PHONES & TABLETS
           </a>
      </li>
      <li class="nav-item dropdown">
            <a class="nav-link" href="#">
             COMPUTING
           </a>
            </li>      
    </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control ml-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">SEARCH</button>
        </form>
          <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Log Out</a>
                    </div>
                </li>
            </ul>
  </div>
</nav>
                <div class="col-sm-12">

                    <div class="carousel slide" id="slider" data-ride="carousel">
                        
                        <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#slider" data-slide-to="0" class="active"></li>
                        <li data-target="#slider" data-slide-to="1"></li>
                        <li data-target="#slider" data-slide-to="2"></li>
                        <li data-target="#slider" data-slide-to="3"></li>
                    </ol>
                        
                        <!--The slideshow-->
                        
                        <div class="carousel-inner" role="listbox">
                         <div class="carousel-item active">
                              <img src="images/Apple%20ipad.jpg" alt="Laptop" width="1400" height="500">
                             <div class="carousel-caption">
                                 <h3 class="text-primary"></h3>
                                 <h4><span class="text-primary"></span></h4>
                             </div>
                        </div>
                            
                            <div class="carousel-item">
                            <img src="images/Asus.jpg" alt="Code" width="1400" height="500">
                             <div class="carousel-caption">
                                  <h3 class="text-primary"></h3>
                                 <h4><span class="text-primary"></span></h4>
                             </div>
                        </div>  
                            <div class="carousel-item">
                            <img src="images/AppleDesktop.jpg" alt="Covid_Research" width="1400" height="500">
                             <div class="carousel-caption">
                                  <h3 class="text-primary"></h3>
                                 <h4><span class="text-primary"></span></h4>
                             </div>
                        </div> 
                            <div class="carousel-item">
                            <img src="images/cocktail.jpg" alt="Covid_Research" width="1400" height="500">
                             <div class="carousel-caption">
                                  <h3 class="text-primary"></h3>
                                 <h4><span class="text-primary"></span></h4>
                             </div>
                        </div> 
                            
                    </div>
          
                     <!--Left and right controls-->
                     
                    <a class="carousel-control-prev" href="#slider" data-slide="prev">
                             <span class="carousel-control-prev-icon"></span>
                        </a>
                    <a class="carousel-control-next" href="#slider" data-slide="next">
                             <span class="carousel-control-next-icon"></span>
                   </a>
                
            </div>
        </div>
        <div class="navbar navbar-expand-lg bg-secondary navbar-light">
        <div class="row">
            
          <?php

	//connection
	//include 
	include('connect.php');

	$sql = "SELECT * FROM cardheading";

		$result = mysqli_query($db,$sql);
		if ($result) {
			# code...
			//check if the resullts
			//mysqli_num_rows($result)
			//
			$rows = mysqli_num_rows($result);//returns the rows 
			if ($rows > 0) {
				# code...
				//echo "$rows";
				//we can go ahead get the records
				
				while($record = mysqli_fetch_assoc($result)){
						/*echo $record['name'].$record['cost'];
						echo "<br>";*/
                    ?>
            <h5><?php echo $record['card_title']; ?></h5>
            <?php
                    
				}

			}
		}
		?>
            </div>
        </div>
<div class="navbar navbar-expand-lg bg-secondary navbar-light">
        <div class="row">
        <?php

	//connection
	//include 
	include('connect.php');

	$sql = "SELECT * FROM product";

		$result = mysqli_query($db,$sql);
		if ($result) {
			# code...
			//check if the resullts
			//mysqli_num_rows($result)
			//
			$rows = mysqli_num_rows($result);//returns the rows 
			if ($rows > 0) {
				# code...
				//echo "$rows";
				//we can go ahead get the records
				
				while($record = mysqli_fetch_assoc($result)){
						/*echo $record['name'].$record['cost'];
						echo "<br>";*/
                    ?>
            <form>
            <div class="col-md-8 col-sm-8">
                <div class="card" style="width: 10rem;height: 15rem" id="card">
                    <img class="card-img-top" src="?php echo $record['product_image'] ?>" alt="Electronics">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $record['product_name'] ?></h5>
                        <p class="card-text"><?php echo $record['product_description'] ?></p>
                        <p class="card-text">Ksh.<?php echo $record['product_cost'] ?></p>
                        <a href="cart.php" class="btn btn-primary" id="bottom-right" style="font-size:12px;">see more</a> 
                    </div>
                </div>
            </div>
                </form>
            <?php
                    
				}

			}
		}
		?>

      </div>
    </div>
        <br>
        
 </body>
</html>