
<!DOCTYPE html>
<html>
<head>
	<title>Add electronics</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<div class="container">
			<div class="row">
				<div class="col-4">
					<img src="images/logo.jpg" width="500" height="700" class="img-fluid">
				</div>
				<div class="col-6">
					<form method="POST" action="">
                        
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Product Name</label>
					    <input type="text" class="form-control" name="product_name">
					
					  </div>

					   <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Product Description</label>
					    <input type="text" class="form-control" name="product_description">
					
					  </div>

					   <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Product Cost</label>
					    <input type="number" class="form-control" name="product_cost">
					
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
            
            $product_name=$_POST['product_name'];
            $product_description=$_POST['product_description'];
            $product_cost=$_POST['product_cost'];
            
    $sql_n = "SELECT * FROM product WHERE product_name='$product_name'";
      
  	$res_u = mysqli_query($db, $sql_n);

  	if (mysqli_num_rows($res_u) > 0) {
  	  $product_name_error = "<font color=red>Product Name exists!</font>";
    }
      else{
           $query = "INSERT INTO product (product_name,product_description,product_cost) 
      	    	  VALUES ('$product_name','$product_description','$product_cost')";
           $results = mysqli_query($db, $query);
           echo "<script> ('Product Sucessfully Added'); window.location='showproduct.php'
           </script>";
     exit();
  	}
        }
        ?>
		
	</div>

</body>
</html>