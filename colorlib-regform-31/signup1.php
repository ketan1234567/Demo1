<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v5 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="signup1.php" method="post">
				<h2>Register Account Form</h2>
				<div class="form-row">
					   <label for="name">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" name="name" required >
					<i class="fas fa-user"></i>
				</div>
				<br>
				<div class="form-row">
					   <label for="contact_number">Contact Number</label>
                <input type="text" class="form-control" id="contact_number" aria-describedby="emailHelp" placeholder="Enter Number" name="contact_number" >
					<i class="fas fa-envelope"></i>
				</div>
				<br>
				<div class="form-row">
				 <label for="exampleFormControlTextarea1">Address</label>
            <textarea class="form-control" id="address" name="address" rows="6" style="width:570px;"></textarea>
					<i class="fas fa-lock"></i>
				</div>
				<br>
					<div class="form-row">
				   <select class="form-control" name="designation" id="designation" style="width:570px; height:50px;"> 
                       <option value="admin" class="form-control">Admin</option> 
                      <option value="user" class="form-control">User</option>
                   </select>
					
				</div>
				<br>
					<div class="form-row">
				   <label for="email">Email</label>
                <input type="email" class="form-control" id="email"naria-describedby="emailHelp" placeholder="Enter Number" name="email" required>
					<i class="fas fa-lock"></i>
				</div>
				<br>
					<div class="form-row">
				    <label for="password">Password</label>
                <input type="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Enter Number" name="password">
					<i class="fas fa-lock"></i>
				</div>
				<br>
				<div class="form-row">
				     <label for="confirm_password">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" aria-describedby="emailHelp" placeholder="Enter password" name="confirm_password">
					<i class="fas fa-lock"></i>
				</div>
				<br>
				<div class="form-row-last">
					<input type="submit" name="submit" class="" value="submit" style="background-color:green; color:white;">
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<?php
$connect=mysqli_connect("localhost","root","" ,"Customization_db");
if(isset($_POST['submit']))
 {
  $name=$_POST['name'];
  $contact_number=$_POST['contact_number'];
  $address=$_POST['address'];
  $designation=$_POST['designation'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $confirm_password=$_POST['confirm_password'];

  $sql="INSERT INTO signup(name,contact_number,address,designation,email,password,confirm_password)VALUES('$name','$contact_number','$address','$designation','$email','$password','$confirm_password') ";
  $result=mysqli_query($connect,$sql);
  if($result==true)
  {
    echo'
    <script>
    alert("Data added");
    window.location.href="../login/login.php";
    </script>';
  }
  else
  {
    echo'
    <script>
    alert("Try again");
    window.location.href="index.php";
    </script>';
  }
 }

?>


