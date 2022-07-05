<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Tochard Code-Planet</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

    <!-- <link rel="stylesheet" type="text/css" href="file:///C:\xampp\htdocs\ChatApp\css/all.css"> -->
</head>

<body>
    
<div class="wrapper">
	<section class="form login">
		<header>tLogin</header>

		<form action="" method="">
			<div class="error-txt"></div>
			
			<div class="field input">
				<label>Email Address</label>
				<input type="text" name="email" placeholder="Enter your email" required>
			</div>
			<div class="field input">
				<label>Password</label>
				<input type="password" name="password" placeholder="Enter password" required>
				<i class="fas fa-eye"></i>
			</div>
			
			<div class="field button">
				<input type="submit" name="" value="Login">
			</div>
		</form>

		<div class="link">Not Registered? <a href="signup.php">Sign Up Now</a></div>
		
	</section>
	
</div>	


<script src="javascript/pass-show-hide.js"></script>
<script src="javascript/login.js"></script>

</body>
</html>