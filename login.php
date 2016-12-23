<?php  
session_start();
include ('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h1>Login</h1>
					</div>
					<div class="panel-body">
					<?php
					if($_POST){
						$email = $_POST['email'];
						
						$password = $_POST['pass'];

						$sql = "select * from users where email='$email' and password=SHA1('$password')";
						$result = mysqli_query($dbc,$sql);
						$num = mysqli_num_rows($result);
						if($num==1){
							$_SESSION['username'] = $email;
							header("location:first.php");
						}
					} 
					?>
						<form action="login.php" method="post">
						<div class="form-group">
							<label>Email Address</label>
							<input type="text" class="form-control" placeholder="Enter Email" name="email">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" placeholder="Enter Password" name="pass">
						</div>
						<button type="submit" class="btn btn-success">Login</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		
	</div>
</body>
	<script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>