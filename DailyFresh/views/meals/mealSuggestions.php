<div class="container">

	<?php
			/*
				This is the logic:
				- The operation $i%3 means remaining of the division of $i by 3. Which means if $i is a multiple of 3, it will return 0
				- Because we need to start a new row (div class="row align-items-start") every 3 items, that means we need to start it at index 0,3,6,9. Those are multiples of 3, so we already know when to print out one of those divs.
				- I chose to close the row (div class="row align-items-start") before starting a new one. That makes it easy for us to know when to close it, because we only need to close it when we start a new one or when we finish the loop. Except for the first iteration (when $i=0), because at that point we haven't created a row yet.
			*/
	?>

	<?php for($i=0; $i<sizeof($viewmodel);$i++) {
				$item = $viewmodel[$i];
				if($i%3 == 0) { 
					if($i != 0){ 
					?>
</div>
<?php
				} //end if ?>	
		
		<div class="row align-items-start">
			<?php 	} //end if ?>	
				<div class="col">
					<div class="jumbotron">
						<img class="card-img-top" src="<?php echo ROOT_PATH."assets/img/".$item['image']; ?>">
						<h1 class="display-4"><?php echo $item['name']; ?></h1>
						<p class="lead"><?php echo $item['description']; ?> </p>						
						<hr class="my-4">
						<p>Click the button below for more information.</p>
						<p class="lead">
						<a class="btn btn-primary btn-lg" href="<?php echo ROOT_PATH; ?>meals/single/<?php echo $item['id']; ?>" role="button">See more</a></p>	
					</div>
				</div>
	<?php 
			} //end for ?>
		</div>
</div>