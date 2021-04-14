<?php
//connect to the database
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <link href="styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="Admin.php">Admin Page</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
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
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="Admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">ONLINE SHOP</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-tv"></i></div>
                                Electronics
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="Addproduct.php">Show Electronics</a>
                                    <a class="nav-link" href="Addproduct.php">Add Electronics</a>
                                    <a class="nav-link" href="editProduct.php">Edit Electronics</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-gamepad"></i></div>
                                Gaming
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <a class="nav-link" href="#">Show Gaming Products</a>                              
                                        <a class="nav-link" href="#">Add Gaming Products</a>                              
                                        <a class="nav-link" href="#">Edit Gaming Products</a>                              
                                </nav>
                            </div>
                           <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDrinks" aria-expanded="false" aria-controls="collapseDrinks">
                                <div class="sb-nav-link-icon"><i class="fas fa-wine-glass-alt"></i></div>
                                Drinks
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseDrinks" aria-labelledby="headingThree" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionDrinks">
                                        <a class="nav-link" href="showDrinks.php">Show Drinks</a>                              
                                        <a class="nav-link" href="addDrinks.php">Add Drinks</a>                              
                                        <a class="nav-link" href="editDrinks.php">Edit Drinks</a>                              
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePhones" aria-expanded="false" aria-controls="collapsePhones">
                                <div class="sb-nav-link-icon"><i class="fas fa-mobile"></i></div>
                                Phones & Tablets
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePhones" aria-labelledby="headingFour" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPhones">
                                        <a class="nav-link" href="#">Show Phones & Tablets</a>                             
                                        <a class="nav-link" href="#">Add Phones & Tablets</a>                             
                                        <a class="nav-link" href="#">Edit Phones & Tablets</a>                             
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseComputing" aria-expanded="false" aria-controls="collapseComputing">
                                <div class="sb-nav-link-icon"><i class="fas fa-laptop"></i></div>
                                Computing
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseComputing" aria-labelledby="headingFive" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionComputing">
                                        <a class="nav-link" href="#">Show Computer and Accessories</a>                
                                        <a class="nav-link" href="#">Add Computer and Accessories</a>                
                                        <a class="nav-link" href="#">Edit Computer and Accessories</a>                        
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">CAROUSEL</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSliders" aria-expanded="false" aria-controls="collapseSliders">
                                <div class="sb-nav-link-icon"><i class="fas fa-slider-h"></i></div>
                                Slider
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseSliders" aria-labelledby="headingSix" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionSliders">
                                        <a class="nav-link" href="#">Show Sliders</a>                
                                        <a class="nav-link" href="#">Add Sliders</a>                
                                        <a class="nav-link" href="#">Edit Sliders</a>                        
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">CARDS</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCardHeadings" aria-expanded="false" aria-controls="collapseCardHeadings">
                                <div class="sb-nav-link-icon"><i class="fas fa-heading"></i></div>
                                Card Headings
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseCardHeadings" aria-labelledby="headingSeven" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionCardHeadings">
                                        <a class="nav-link" href="showSlider.php">Show Headings</a>                
                                        <a class="nav-link" href="addSlider.php">Add Headings</a>                
                                        <a class="nav-link" href="editSlider.php">Edit Headings</a>                        
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCards" aria-expanded="false" aria-controls="collapseCards">
                                <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>
                                Cards
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseCards" aria-labelledby="headingEight" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionCards">
                                        <a class="nav-link" href="#">Show Cards</a>                
                                        <a class="nav-link" href="#">Add Cards</a>                
                                        <a class="nav-link" href="#">Edit Cards</a>                        
                                </nav>
                            </div>
                            <div class="footer">
                                <p class="bg-info">Online Shop @ copyright.AllRights Reserved</p>
                            </div>
                          </div>
                    </div>
               </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Add Slider</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="Admin.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add Slider</li>
                        </ol>
                        <div class="row">
				<div class="col-4">
					<img src="images/logo.jpg" width="500" height="700" class="img-fluid">
				</div>
				<div class="col-6">
					<form method="POST" action="">
                        
                         <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Id</label>
					    <input type="number" class="form-control" name="id">
					  </div>
                        
                      <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Slider Image</label>
					    <input type="file" class="form-control" name="slider_image">
					  </div>
                        
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Slider Name</label>
					    <input type="text" class="form-control" name="slider_name">
					  </div>

					   <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Slider Description</label>
					    <input type="text" class="form-control" name="slider_description">
					  </div>

					   
			  
			  <button name="save" type="submit" class="btn btn-primary">ADD</button>
			</form>
				</div>
				
			</div>

        <?php
        //connect to the database
        require_once 'connect.php';
        
        if(isset($_POST['save'])){
            //Declare variables
            $slider_id=$_POST['slider_id'];
            $slider_image=$_POST['slider_image'];
            $slider_name=$_POST['slider_name'];
            $slider_description=$_POST['slider_description'];
            
    $sql_n = "SELECT * FROM slider WHERE slider_name='$slider_name'";
      
  	$res_u = mysqli_query($db, $sql_n);

  	if (mysqli_num_rows($res_u) > 0) {
  	  $product_name_error = "<font color=red>Slider Name exists!</font>";
    }
      else{
           $query = "INSERT INTO slider (slider_id,slider_image,slider_name,slider_description) 
      	    	  VALUES ('$slider_id','$slider_image','$slider_name','$slider_description')";
           $results = mysqli_query($db, $query);
           echo "<script> ('Product Sucessfully Added'); window.location='showSlider.php'
           </script>";
     exit();
  	}
        }
        ?>
                  </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
