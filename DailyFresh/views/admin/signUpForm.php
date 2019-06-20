<div class="container">
	<div class="jumbotron">
	<h1>Sign-up Today</h1>
	<br>
		<form  method="post" action="<?php $_SERVER['PHP_SELF']; ?>">	
			<div class="form-row">
				<div class="form-group col-md-3">
					<label for="text-field">Name</label>
					<input name="name" type="text" class="form-control" id="inputname" ">
				</div>
				<div class="form-group col-md-6">
					<label for="inputEmail4">Email</label>
					<input name="email" type="email" class="form-control" id="inputEmail4" ">
				</div>
					<div class="form-group col-md-3">
					<label for="inputPassword4">Password</label>
					<input name="password" type="password" class="form-control" id="inputPassword4" ">
				</div>
			
				 <div class="form-group">
					<!-- start<div class="form-check">
						<input class="form-check-input" type="checkbox" id="gridCheck">
						<label class="form-check-label" for="gridCheck">
							Keep me loged in
						</label>
					</div>end -->
				</div> 
				<button name="submit" value="submit" type="submit" class="btn btn-primary">Sign Up</button>	
		</form>
	</div>
</div>