<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			<style>
				.jumbotron  {
				margin-bottom: 0px;
				margin-top: 0px;
				background-repeat: no-repeat;
				color: black;
				background: white;
				border: 10px;
				}
            
				button    {
					margin: 20px;
				}
				
				.my-nav{background-color: #3cb371;}
				.my-nav .navbar-brand{color: aliceblue;}
				.my-nav .navbar-brand:hover{color: aquamarine;}
				.my-nav .nav-link{color: aliceblue;}
				.my-nav .nav-link:hover{color: aquamarine;}
				.my-nav .dropdown-menu{background-color: #3cb371;}
				
				.navbar-toggler-icon{color: white;}
				
				
				.my-nav2{background-color: forestgreen;}
				.my-nav2 .navbar-brand{color: aliceblue;}
				.my-nav2 .navbar-brand:hover{color: aquamarine;}
				.my-nav2 .nav-link{color: aliceblue;}
				.my-nav2 .nav-link:hover{color: aquamarine;}
				.my-nav2 .dropdown-menu{background-color: forestgreen;}
				
				.navbar-toggler-icon1{color: white;}
				
			</style>
			
	
			<title>Daily Fresh</title>
	</head>
	<body>
			<?php include("views/templates/header.php"); ?>
  
			<div class="container">
					<div class="row">
						<?php Messages::display(); ?> <!-- Message display -->
						<?php require($view); ?>
					</div>	
			</div><!-- /.container -->
    <footer>
			<?php include("views/templates/footer.php"); ?>
    </footer>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>