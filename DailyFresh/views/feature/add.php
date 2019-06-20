

<div class="panel panel-default col-md-6">
  <div class="panel-heading">
    <h3 class="panel-title">Add Weekly Meal</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	 <div class="form-group">
    		<label>Week ID</label>
    		<input type="text" name="wid" class="" />
    	</div>
		<div class="form-group">
    		<label>Day 1</label>
    		<input type="text" name="f1" class="" />
    	</div>
    	<div class="form-group">
    		<label>Day 2</label>
    		<input type="text" name="f2" class="" />
    	</div>
		<div class="form-group">
    		<label>Day 3</label>
    		<input type="text" name="f3" class="" />
    	</div>
		<div class="form-group">
    		<label>Day 4</label>
    		<input type="text" name="f4" class="" />
    	</div>
		<div class="form-group">
    		<label>Day 5</label>
    		<input type="text" name="f5" class="" />
    	</div>
    	<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
    </form>
	
	 </div>
</div>

	
	
<div class="col-md-6">
<span>List of meals </span>

	<?php foreach($viewmodel as $item) : ?>
		
		<div class="col-md-12">
		
			id:<?php echo $item['id']; ?>
			<?php echo $item['name']; ?>
		
		</div>
		
	<?php endforeach; ?>
</div>