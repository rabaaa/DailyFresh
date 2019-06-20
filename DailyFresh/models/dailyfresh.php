<?php
class dailyfreshModel extends Model{
	
	
	public function Index($day=null){
		/* If no $day is selected, no need to restrict the query */
		$condition = "";
		$limit = "";
		/* This is for the daily meals */
		if($day){
			$condition = " WHERE day = ".$day;
			$limit = " LIMIT 4";
		}
		$this->query('SELECT * FROM recipes '.$condition.' ORDER BY id DESC '.$limit);
		$rows = $this->resultSet();
		return $rows;
	}
	
	public function Weekly($week=null){
		/* If no $day is selected, no need to restrict the query */
		$condition = "";
		$limit = "";
		/* This is for the daily meals */
		if($week){
			$condition = " WHERE week = ".$week;
			$limit = " LIMIT 5";
		}
		$this->query('SELECT * FROM recipes '.$condition.' ORDER BY id DESC '.$limit);
		$rows = $this->resultSet();
		return $rows;
	}


	/* Takes in a meal id, builds the query, binds the parameter and returns a single result (id is unique) 
	This is called by the controller.
	*/

	public function get($recipes_id){
		$this->query('SELECT * FROM recipes WHERE id = :id');
		$this->bind(':id', $recipes_id);
		$row = $this->single();
		return $row;	
	}

	public function add(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			if($post['Name'] == '' || $post['description'] == '' || $post['ingredients'] == '' || $post['cooking time'] == ''){
				Messages::setMsg('Please fill in all required fields', 'error'); // passes in text for message
				return;
			}
			// Insert into MySQL
			$this->query('INSERT INTO meals (Name, image, description, ingredients, cooking time, day, week, create_date) VALUES(:Name, :image, :description, :ingredients, :cooking_method, :day, :week, :create_date NOW())');
			$this->bind(':name', 			$post['name']);
			$this->bind(':description',	 	$post['description']);
			$this->bind(':image', 			$post['image']);
			$this->bind(':ingredients', 	$post['ingredients']);
			$this->bind(':cooking_method',  $post['cooking time']);
			$this->bind(':day', 			$post['day']);
			$this->bind(':week', 	$post['week']);
			$this->bind(':create_date',  $post['create_date']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'recipes'); // redirects to the specified url location
			}
		}
		return;
	}
}
?>