


<div class="panel panel-default col-md-6">
  <div class="panel-heading">
    <h3 class="panel-title">Edit</h3>
  </div>
  
  <div class="panel-body">
  
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
	<?php foreach($viewmodel as $item) : ?>
	    <div class="form-group">
    		<label>Week ID</label>
    		<input type="text" name="wid" value="<?=$item['wid']?>" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Day 1</label>
    		<input type="text" name="f1" value="<?=$item['f1']?>" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Day 2</label>
    		<input type="text" name="f2" value="<?=$item['f2']?>" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Day 3</label>
    		<input type="text" name="f3" value="<?=$item['f3']?>" class="form-control" />
    	</div>
		    	<div class="form-group">
    		<label>Day 4</label>
    		<input type="text" name="f4" value="<?=$item['f4']?>" class="form-control" />
    	</div>
		    	<div class="form-group">
    		<label>Day 5</label>
    		<input type="text" name="f5" value="<?=$item['f5']?>" class="form-control" />
    	</div>

		
		<div class="form-check">
	  <input class="form-check-input position-static" name="live" type="checkbox" id="blankCheckbox" value="1" aria-label="..." <?php if($item['live'] == 1) echo 'checked'; ?>>
	</div>
			
		<?php endforeach; ?>
		
		
    	<input class="btn btn-primary"  name="submit" type="submit" value="Edit" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>weeklymeals/edit">Cancel</a>
    </form>
  </div>
  
 


  
  