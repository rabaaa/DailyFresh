<?php
abstract class Controller{
	protected $request;
	protected $action;
	protected $id;

	public function __construct($action, $request, $id){
		$this->action = $action;
		$this->request = $request;
		
		/* Default id is null. Only set the id attribute if the $id attribute is not null, and if the action requires a parameter */
		$this->id = null;
		if($id && $this->takes_params($action)){
			$this->id = $id;	
		}
	}

	public function executeAction(){
		return $this->{$this->action}($this->id);
	}

	protected function returnView($viewmodel, $fullview){
		$view = 'views/'. strtolower(get_class($this)) . '/' . $this->action. '.php';
		if($fullview){
			require('views/main.php');
		} else {
			require($view);
		}
	}

	/* 
		The ReflectionMethod class returns information about a method from a certain class.
		This function takes in a class name and a method name, and returns true if that method takes parameters or false if it doesn't
	 */
	protected function takes_params($func) {
	    $reflection = new ReflectionMethod($this, $func);
	    return ($reflection->getNumberOfParameters() > 0)?true:false;
	}
}
?>