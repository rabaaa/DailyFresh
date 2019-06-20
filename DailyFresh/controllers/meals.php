<?php
class Meals extends Controller{
	protected function Index(){
		$viewmodel = new mealsModel();
		$this->returnView($viewmodel->Index(), true);
	}
	
	protected function Single(){
		$viewmodel = new MealsModel();
		$this->returnView($viewmodel->single(), true);
	}	
	
	protected function create(){
		if(!isset($_SESSION['is_logged_in'])){ // If not logged in then redirected to meals page
			header('Location: '.ROOT_URL.'meals');
		}
		$viewmodel = new mealsModel();
		$this->returnView($viewmodel->add(), true);
	}	
	
	protected function edit(){
		$viewmodel = new mealsModel();
		$this->returnView($viewmodel->edit(), true);
	}
	
	protected function weekly(){
		$viewmodel = new MealsModel();
		$this->returnView($viewmodel->weekly(), true);
	}	

}
?>