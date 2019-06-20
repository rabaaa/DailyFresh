<?php
class Weeklymeals extends Controller{
	
	protected function Index(){
		$viewmodel = new weeklymealsModel();
		$this->returnView($viewmodel->Index(), true);
	}
	
	protected function Add(){
		$viewmodel = new weeklymealsModel();
		$this->returnView($viewmodel->add(), true);
	}
	
	protected function edit(){
		$viewmodel = new weeklymealsModel();
		$this->returnView($viewmodel->edit(), true);
	}
	
}
?>
