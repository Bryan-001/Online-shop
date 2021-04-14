<?php

session_start();
//connect to the database

 require_once 'connect.php';
if(isset($_POST['Login'])){
    
    $email = $_POST['email'];
    $password =md5($_POST['password']);
    
    $encryptedPassword=password_hash($password,PASSWORD_DEFAULT);

    $sql="SELECT * FROM users WHERE Email='$email' AND Password='$password'";
    
    $result=mysqli_query($db,$sql);
    
    if(mysqli_num_rows($result) == 1){
        
        while($row = mysqli_fetch_assoc($result)){
           
            if($row["position"] == "Admin"){
                $_SESSION['LoginUser'] = $row["username"];
                header("location:Admin.php");
            }
            else{
                $_SESSION['LoginUser'] = $row["username"];
                header("location:index.php");
            }
        }
    }
    else{
        echo "<h4 style='color:red'>Invalid Login.Try again</h4>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  
</head>
<body>

	<div class="container">

	<div class="bg-info text-white">
		
		<center>
            <h1>Welcome to Phonica Online Shop</h1>
			<span style="font-size:35px">Login Here</span> 
		</center>

	</div>

		<div class="row">
			<div class="col-4">
					<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzdOXQTO_XYzVFcpKL-aoF6qEMt8SNSSjtPQ&usqp=CAU" alt="logo"  class="img-fluid">
			</div>
			<div class="col">

					<form method="POST" action="login.php">
					  

					   <div class="mb-3">
                        
					    <label for="exampleInputEmail1" class="form-label" style="font-size:24px">Email Address</label>
					    <input type="email"  class="form-control" placeholder="Email Address" name="email" required>
                       
					  </div>
					    <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label" style="font-size:24px" >Password</label>
					    <input type="password" class="form-control" placeholder="Password" name="password" id="myInput" pattern=".{6,}" title="Must contain at least 6 or more characters" required>
                        </div>
		                <div class="mb-3">
                         <input type="checkbox" onclick="myFunction()"><span style="color:dodgerblue"> Show Password</span>
                            <script>
                                function myFunction() {
                                var x = document.getElementById("myInput");
                                if (x.type === "password") {
                                x.type = "text";
                                } 
                                    else{
                                x.type = "password";
                                        }
                                    }
                            </script>

                        </div>
                        <button name="Login" type="submit" class="btn btn-primary">Login</button>
                        <br>
                        <p><a href="forgot.php"style="text-decoration:none;color:dodgerblue;">Forgotten Password</a></p>
                         <p>Not a member?<a href="Register.php"style="text-decoration:none;color:dodgerblue;"> Register</a> </p>
                        <br>              
                                                 
			</form>
        </div>
    </div>
    </div>
    </body>
</html>


