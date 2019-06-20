<?php
class mealsModel extends Model{
	
	public function Index(){
		
		
	if ($_GET["id"] == "veg"){
		
		$this->query('SELECT * FROM recipes where veg = 1 ');
		$rows = $this->resultSet();
		return $rows;
	}else{
		
		$this->query('SELECT * FROM recipes');
		$rows = $this->resultSet();
		return $rows;
	}
	}
	
	public function Single(){	
		
		$this->query('SELECT * FROM recipes where id = '. $_GET["id"] .' ');
		$rows = $this->resultSet();
		return $rows;
		
	}
	
	public function weekly(){	
		$this->query('SELECT * FROM feature where wid = '. $_GET["id"] .'');
		$rows = $this->resultSet();
		
		$f1 = $rows[0]['f1'];
		$f2 = $rows[0]['f2'];
		$f3 = $rows[0]['f3'];
		$f4 = $rows[0]['f4'];
		$f5 = $rows[0]['f5'];
		
		$this->query('SELECT * FROM recipes where id = '.$f1.' OR id = '.$f2.' OR id = '.$f3.' OR id = '.$f4.' OR id = '.$f5.'  ');
		$rows = $this->resultSet();
		return $rows;
	}
	
		public function Veg(){	
		$this->query('SELECT * FROM recipes where veg = 1 ');
		$rows = $this->resultSet();
		return $rows;
	}
	
public function add(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			if($post['name'] == '' || $post['image'] == '' || $post['description'] == '' || $post['ingredients'] == '' || $post['ctime'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
			// Insert into MySQL
			$this->query('INSERT INTO recipes (name, image, description, ingredients, ctime, veg) VALUES(:name, :image, :description, :ingredients, :ctime, :veg)');
			$this->bind(':name', $post['name']);
			$this->bind(':image', $post['image']);
			$this->bind(':description', $post['description']);
			$this->bind(':ingredients', $post['ingredients']);
			$this->bind(':ctime', $post['ctime']);
			$this->bind(':veg', $post['veg']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'meals');
			}
		}
		return;
	}
	
		public function edit(){
		
		
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		
		
		
		if(isset($post['submit'])){
			
			$this->query('UPDATE recipes SET name="' . $post['name'] . '", image="' . $post['image'] . '", description="' . $post['description'] . '", ingredients="' . $post['ingredients'] . '", ctime="' . $post['ctime'] . '", veg="' . $post['veg'] . '" where id= '. $_GET["id"] .'');
			$this->execute();
			
			header('Location: '.ROOT_URL.'meals');
			
		}

		
		
			 			
		if(isset($post['delete'])){
			
			$this->query('DELETE FROM recipes WHERE id= '. $_GET["id"] .'');
			$this->execute();
			
			header('Location: '.ROOT_URL.'meals');
	
		}
		
		
		
		if ($_GET["id"] == ""){
			
			$this->query('SELECT * FROM recipes');
			$rows = $this->resultSet();
			return $rows;
			
		}
		
		
		
		$this->query('SELECT * FROM recipes where id = '. $_GET["id"] .'');
		$rows = $this->resultSet();
		return $rows;
		}
	
}
?>