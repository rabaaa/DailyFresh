<div>
	<?php foreach($viewmodel as $item) : ?>
		<div class="well">
			<h3><?php echo $item['name']; ?></h3>
			<hr />
			<img class="card-img-top" src="<?php echo ROOT_PATH."assets/img/".$item['image']; ?>">
			<?php echo "<h3>How to cook</h3>"; ?>
             <p><?php echo $item['description']; ?></p>
			<hr />
			<?php echo "<h3>Ingredients</h3>"; ?>
			<p><?php echo $item['ingredients']; ?></p>
			<?php echo "<h3>Cooking time</h3>"; ?>
            <p><?php echo $item['ctime']; ?></p>
			<hr />
			<?php echo "<h3>Veg</h3>"; ?>
			<p><?php echo $item['veg']; ?></p>
			<br />
		</div>
	<?php endforeach; ?>
</div>