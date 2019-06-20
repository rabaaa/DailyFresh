<div class="container">
	<div class="jumbotron">
	<h1>New Meal</h1>
	<br>
		<form  method="post" action="<?php $_SERVER['PHP_SELF']; ?>">	
			<div class="form-group">
				<label for="name">Name</label>
				<input name="name" type="text" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="image">Image</label>
				<input name="image" type="text" class="form-control" >
			</div>
			<div class="form-group">
				<label for="description">Description</label>
				<input name="description" type="text" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="ingredients">Ingredients</label>
				<input name="ingredients" type="text" class="form-control" required >
			</div>
			<div class="form-group">
				<label for="ctime">Cooking time</label>
				<input name="ctime" type="text" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="day">Veg</label>
				<input name="veg" type="text" class="form-control" required>
				</select>
			</div>
			<button name="submit" value="submit" type="submit" class="btn btn-primary">Create Meal</button>	
		</form>
	</div>
</div>