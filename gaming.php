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
            <a class="nav-link" href="Index.php" style="font-size:17px">HOME</a>
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
            <a class="nav-link" href="#">
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
        <h1 class="mt-4">Gaming Products</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="Index.php">Home</a></li>
                            <li class="breadcrumb-item active">Gaming Products</li>
                        </ol>
              
        <div class="navbar navbar-expand-lg bg-secondary navbar-light">
        <div class="row"> 
            
		<?php
	//connection
	//include 
	include('connect.php');

	$sql = "SELECT * FROM gaming";

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
                    <img class="card-img-top" src="?php echo $record['product_image'] ?>" alt="Ps5">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $record['product_name'] ?></h5>
                        <p class="card-text"><?php echo $record['product_description'] ?></p>
                        <p class="card-text">Ksh.<?php echo $record['product_cost'] ?></p>
                        <a href="#" class="btn btn-primary" id="bottom-right" style="font-size:12px;">Buy Now</a> 
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
    </div>
 </body>
</html>