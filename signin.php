<?php 
include("connection.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="signin.css">
    <img src="./Images/logo.png" width="100px" height="75px">

	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
    <h3 class="second">Sign In </h3>
</head>
<body>
<br><br>
	<h3 class="page">Create Account to Start Watching Netflix</h3><br>

	
	<form action="" method="post">
		<input type="text" name="Username" placeholder="USERNAME..." required><br><br>
		<input type="Password" name="Password" placeholder="PASSWORD..."required><br><br>
		<input type="text" name="Email" placeholder="EMAIL ADDRESS..." required><br><br>
		<input type="int" name="Phone_number" placeholder="PHONE NUMBER..." required><br><br>
		<input type="submit" name="submit" placeholder="Submit" display="inline-block" border-radius="8px"><br>
	</form>
<?php
                if(isset($_POST["submit"])){
                     $username=$_POST["Username"];
                     $password=$_POST["Password"];
                     $email=$_POST["Email"];
                     $phone=$_POST["Phone_number"];
                     $q=$db->prepare("INSERT INTO user (username, password, email, phone) VALUES (:Username , :Password , :Email , :Phone_number)");
                     $q-> bindValue('Username', $username);
                     $q-> bindValue('Password', $password);
                     $q-> bindValue('Email', $email);
                     $q-> bindValue('Phone_number', $phone);
                     if($q->execute()){
                        echo "<script>
                              alert('User Registered Successfully')
                        </script>";
                        // header("Location:index.php");
                    }
                    else{
                        echo "<script>
                        alert('User Register Unsuccessfull')
                        </script>";
                    }    
                }
                ?>
</body>
</html>