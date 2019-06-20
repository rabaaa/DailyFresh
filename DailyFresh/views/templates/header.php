<nav class="navbar my-nav navbar-expand-lg ">
	<a class="navbar-brand" href="<?php echo ROOT_URL; ?>">Daily Fresh</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="<?php echo ROOT_URL; ?>home">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo ROOT_URL; ?>pages/about/">About DailyFresh</a>
			</li>
			
			
			
			     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Our Meals
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo ROOT_URL; ?>meals">All Meals</a>
          <a class="dropdown-item" href="http://localhost/meals/index/veg">veg Meals</a>
          <a class="dropdown-item" href="http://localhost/meals/chinese">Chinese Meals</a>
        </div>
      </li>
	  
	  
	   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Weeklymeals
        </a>
		
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            
          <a class="dropdown-item" href="<?php echo ROOT_URL; ?>feature/show/1">Show week1</a>
          <a class="dropdown-item" href="<?php echo ROOT_URL; ?>feature/show/2">Show week2</a>
		  <a class="dropdown-item" href="<?php echo ROOT_URL; ?>feature/show/3">Show week3</a>
          <a class="dropdown-item" href="<?php echo ROOT_URL; ?>feature/show/4">Show week4</a>
		 
      </li>
			
			
			
		</ul>
						

	</div>		
</nav>	

<!DOCTYPE html>
<html>
<head>

<?php if(isset($_SESSION['is_logged_in'])) : ?>

		<nav class="navbar my-nav2 navbar-expand-lg">
			<a class="navbar-brand" href="<?php echo ROOT_URL; ?>">Administration</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon1"><i class="fa fa-bars" aria-hidden="true"></i></span>
				
				
			</button>
			
			<div class="collapse navbar-collapse" id="navbarSupportedContent1">
			<ul class="navbar-nav mr-auto">
		
		
			<?php if(isset($_SESSION['is_logged_in'])) : ?>
			<?php echo "Hello " . $_SESSION['admin_data']['name'] . "  " ?>  
		
		
			<a class="btn btn-warning btn-m" href="<?php echo ROOT_URL; ?>admin/logout" role="button">Logout</a>
			<a class="nav-link" href="<?php echo ROOT_URL; ?>meals/create">Create Meal</a>
			<a class="nav-link" href="<?php echo ROOT_URL; ?>meals/edit/">Edit</a
			
			</div>
			
			
	   <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Weeklymeals
        </a>
		
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
	    <a class="dropdown-item" href="<?php echo ROOT_URL; ?>feature/add">Add new weekly meal set</a>
		<a class="dropdown-item" href="<?php echo ROOT_URL; ?>feature/edit/1">Edit weekly meal set 1</a>
		<a class="dropdown-item" href="<?php echo ROOT_URL; ?>feature/edit/2">Edit weekly meal set 2</a>
		<a class="dropdown-item" href="<?php echo ROOT_URL; ?>feature/edit/3">Edit weekly meal set 3</a>
		<a class="dropdown-item" href="<?php echo ROOT_URL; ?>feature/edit/4">Edit weekly meal set 4</a>
		
	
		
		</ul>
		
		<?php else : ?>
		
			
		<?php endif; ?>
		
				<?php else : ?>
		
				
		
		<?php endif; ?>				
			
		


	</div>		
</nav>	




