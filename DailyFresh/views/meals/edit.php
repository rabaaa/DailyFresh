<?php

if ($_GET["id"] == ""){

?>
	<?php foreach($viewmodel as $item) : ?>
	
					<div class="col-md-6">
					<a href="<?php echo ROOT_URL; ?>meals/edit/<?=$item['id']?>">edit</a>
					<?php echo $item['name']; ?>
					</div>
					
	<?php endforeach; ?>
	
<?php 	
	
}else{

?>

<div class="panel panel-default col-md-6">
  <div class="panel-heading">
    <h3 class="panel-title">Edit</h3>
  </div>
  
  <div class="panel-body">
  
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
	<?php foreach($viewmodel as $item) : ?>
	    <div class="form-group">
    		<label>Name</label>
    		<input type="text" name="name" value="<?=$item['name']?>" class="form-control" />
    	</div>
		<div class="form-group">
    		<label>Image</label>
    		<input type="text" name="image" value="<?=$item['image']?>" class="form-control" />
    	</div>
		<div class="form-group">
    		<label>Description</label>
    		<input type="text" name="description" value="<?=$item['description']?>" class="form-control" />
    	</div>
		<div class="form-group">
    		<label>Ingredients</label>
    		<input type="text" name="ingredients" value="<?=$item['ingredients']?>" class="form-control" />
    	</div>
		
		<div class="form-group">
    		<label>Cooking time</label>
    		<input type="text" name="ctime" value="<?=$item['ctime']?>" class="form-control" />
    	</div>
		
		<div class="form-group">
    		<label>Veg</label>
    		<input type="text" name="veg" value="<?=$item['veg']?>" class="form-control" />
    	</div>
		
		
		<?php endforeach; ?>
		
    	<input class="btn btn-primary"  name="submit" type="submit" value="Edit" />
		<input class="btn btn-primary" name="delete" type="submit" value="Delete" />
    </form>
	
	
 
  
  </div>
  
 <?php 
 
}

?>