<?php
class Feature extends Controller{
	
	protected function Index(){
		$viewmodel = new FeatureModel();
		$this->returnView($viewmodel->Index(), true);
	}
	
	protected function Add(){
             if(!isset($_SESSION['is_logged_in'])){ // If not logged in then redirected to meals page
			header('Location: '.ROOT_URL.'feature');
			 }
		$viewmodel = new FeatureModel();
		$this->returnView($viewmodel->add(), true);
	}
	
	protected function edit(){
		 if(!isset($_SESSION['is_logged_in'])){ // If not logged in then redirected to meals page
			header('Location: '.ROOT_URL.'feature');
		 }
		$viewmodel = new FeatureModel();
		$this->returnView($viewmodel->edit(), true);
	}

        
      
	
	protected function show(){
		$viewmodel = new FeatureModel();
		$this->returnView($viewmodel->show(), true);
	}
	
}
?>
