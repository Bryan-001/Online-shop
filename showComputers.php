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
                                        <a class="nav-link" href="showGamingProducts.php">Show Gaming Products</a>                              
                                        <a class="nav-link" href="addGamingProducts.php">Add Gaming Products</a>                              
                                        <a class="nav-link" href="editGamingProducts.php">Edit Gaming Products</a>                              
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
                                <div class="sb-nav-link-icon"><i class="fas fa-book-mobile"></i></div>
                                Phones & Tablets
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePhones" aria-labelledby="headingFour" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPhones">
                                        <a class="nav-link" href="showPhones.php">Show Phones & Tablets</a>                             
                                        <a class="nav-link" href="addPhones.php">Add Phones & Tablets</a>                             
                                        <a class="nav-link" href="editPhones.php">Edit Phones & Tablets</a>                             
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseComputing" aria-expanded="false" aria-controls="collapseComputing">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-laptop"></i></div>
                                Computing
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseComputing" aria-labelledby="headingFive" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionComputing">
                                        <a class="nav-link" href="showComputers.php">Show Computer and Accessories</a>                
                                        <a class="nav-link" href="addComputers.php">Add Computer and Accessories</a>                
                                        <a class="nav-link" href="editComputers.php">Edit Computer and Accessories</a>                        
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">CAROUSEL</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSliders" aria-expanded="false" aria-controls="collapseSliders">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-slider-h"></i></div>
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
                                        <a class="nav-link" href="showHeadings.php">Show Headings</a>                
                                        <a class="nav-link" href="addHeadings.php">Add Headings</a>                
                                        <a class="nav-link" href="editHeadings.php">Edit Headings</a>                        
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
                        <h1 class="mt-4">Computers & Computer Accesories</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="Admin.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Show Computers & Computer Accesories</li>
                        </ol>
                        <table class="table table-bordered">
			
			<tr>
				<th>Image</th>
				<th>Id</th>
				<th>Name</th>
				<th>Description</th>
				<th>Cost</th>
				<th colspan="2">Action</th>
			</tr>

		<?php

	//connection
	//include 
	require('connect.php');

	$sql = "SELECT * FROM computers";

		$result = mysqli_query($db,$sql);
		if ($result) {
			# code...
			//check if the resullts
			//mysqli_num_rows($result)
			//
			$rows = mysqli_num_rows($result);//returns the rows 
			if ($rows>0) {
				# code...
				//echo "$rows";
				//we can go ahead get the records
				//if we get them associate array id - 1
				
				while($record = mysqli_fetch_assoc($result)){
						/*echo $record['name'].$record['cost'];
						echo "<br>";*/
						echo "<tr>";
						echo "<td>".$record['product_image']."</td>";
						echo "<td>".$record['id']."</td>";
						echo "<td>".$record['product_name']."</td>";
						echo "<td>".$record['product_description']."</td>";
						echo "<td>".$record['product_cost']."</td>";
						echo "<td>
							<a href='editComputers.php?id=".$record['id']."' class='btn btn-primary'>Edit</a>

							<form method='POST' action=''>
							<input type='hidden' value='".$record['id']."'name='productId'>
							<button type='submit' name='delete' class='btn btn-danger' >Delete</button>
							</form>
						</td>";
						echo "</tr>";
				}

			}else{
				echo "<h4>No products available</h4>";
			}
		}else{
			echo "Something went wrong.Try again ".mysqli_error($db);
		}


		?>

		<?php
		//delete
		if (isset($_POST['delete'])) {
			$productId = $_POST['productId'];

			require_once('connect.php');

			//
			$sql = "DELETE FROM computers WHERE id = ".$productId;

			$result = mysqli_query($db,$sql);
			if ($result) {
				# code...
				echo '<div class="alert alert-success" role="alert">
					  Product Deleted Successfully
						</div>	';
			}else{
				echo '<div class="alert alert-danger" role="alert">
					  Something went wrong.
						</div>	';
			}

			# code...
		}

		?>


	</table>
           
         </div>
        </main>
         </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>


