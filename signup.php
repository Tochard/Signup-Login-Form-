<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp | Tochard Code-Planet</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

    <!-- <link rel="stylesheet" type="text/css" href="file:///C:\xampp\htdocs\ChatApp\css/all.css"> -->
</head>

<body>
    
<div class="wrapper">
	<section class="form signup">
		<header>SignUp</header>

		<form action="#" method="" enctype="multipart/form-data" autocomplete="off">
			<div class="error-txt"></div>
			<div class="name-details">
				<div class="field input">
					<label>First Name</label>
					<input type="text" name="firstName" placeholder="First Name" required>
				</div>
				<div class="field input">
					<label>Last Name</label>
					<input type="text" name="lastName" placeholder="Last Name" required>
				</div>
			</div>

			<div class="field input">
				<label>Email Address</label>
				<input type="text" name="email" placeholder="Enter your email" required>
			</div>
			<div class="field input">
				<label>Password</label>
				<input type="password" name="password" placeholder="Enter a new password" required>
				<i class="fas fa-eye"></i>
			</div>
			<div class="field image">
				<label>Profile Image</label>
				<input type="file" name="image" required>
			</div>
			<div class="field button">
				<input type="submit" name="" value="Sign Up">
			</div>
		</form>

		<div class="link">Already signed Up? <a href="login.php">Login Now</a></div>
		
	</section>
	
</div>


<script src="javascript/pass-show-hide.js"></script>
<script src="javascript/signup.js"></script>


</body>
</html> 