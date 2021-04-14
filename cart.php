<!DOCTYPE html>
<html>
<head>
	<title>Purchase</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<?php
		
			//connection
			require('connect.php');
                //Declare variables
                $id="";
                $product_name="";
                $product_cost="";
			//select
			$sql = "SELECT * FROM product WHERE id=$id";

			//execute
			$result = mysqli_query($db,$sql);
			if ($result) {
				# code...
				$productRecord = mysqli_fetch_assoc($result);
				//echo "".$productRecord['name'];
			}else{
				echo "Something went wrong";
			}
	?>

	<div class="container-fluid">

		<div class="row">
			<div class="col-3">
				<img src="images/logo.jpg" class="img-fluid">
			</div>
			<div class="col-6">
				<form method="POST" action="">
                    
					  <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Id</label>
					    <input type="number"  class="form-control" name="id"  value="<?php echo "".$productRecord['id'];?>">
					  </div>
                    
                      <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Product Name</label>
					    <input type="text"  class="form-control" name="product_name">
					
					  </div>

					
					 <div class="mb-3">
					    <label for="exampleInputEmail1"  class="form-label">Product Cost</label>
					    <input type="number" class="form-control"  name="product_cost" disabled>
					
					  </div>

					    <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Product Quantity</label>
					    <input type="number" class="form-control" name="product_quantity">
					
					  </div>
					  
			  
			  <button name="buy" type="submit" class="btn btn-primary">BUY</button>
			</form>

			<?php

			if (isset($_POST['buy'])) {
				# code...
				//capture the values from the form
				$id = $_POST['id'];
				$productName = $_POST['product_name'];
				$productCost = $_POST['product_cost'];
				$productQuantity = $_POST['product_quantity'];
                
				$sql = "INSERT INTO `sales`(`id`,`product_name`, `product_cost`, `product_quantity`) VALUES (?,?,?,?)";

				//prepare
				if ($stmt = mysqli_prepare($db,$sql)) {
					# code...
					//bind
					mysqli_stmt_bind_param($stmt,"issd",$param_id,$param_product_name,$param_quantity,$param_cost);
					$param_id = $Id;
					$param_product_name = $productName;
					$param_quantity = $productQuantity;
					$param_cost = $productCost;

					//execute
					if (mysqli_stmt_execute($stmt)) {
							# code...
							echo "Purchase Made successfully ";
							//redirect go to my products
							header("location:mypurchases.php");
						}else{
							echo "Something went wrong.Try again.".mysqli_error($db);
						}
				}else{
					echo "Something went wrong.";
				}

			}

			?>
			</div>
			
		</div>
		
	</div>

</body>
</html>