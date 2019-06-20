
asd

<div>
	<?php if(isset($_SESSION['is_logged_in'])) : ?> 
	<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>meals/add">Create Meal</a>
	<?php endif; ?>
	<?php foreach($viewmodel as $item) : ?>
		<div class="well">
			<h3><?php echo $item['name']; ?></h3> 
			<hr />
			<p><?php echo $item['description']; ?></p>
			<br />
			
	<?php endforeach; ?>
</div>