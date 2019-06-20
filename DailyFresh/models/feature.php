<?php
class FeatureModel extends Model{
	public function Index(){
		
	}
	
	public function edit(){
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		if($post['submit']){
			
			if (isset($post['live'])){
			$live = 1;	
			}else{
			$live = 0;
			}
			
			
			$this->query('UPDATE feature SET f1='. $post['f1'].', f2='. $post['f2'].', f3='. $post['f3'].', f4='. $post['f4'].', f5='. $post['f5'].', live='. $live.' where wid= '. $post['wid'].' ');
			$this->execute();
			
		}
		
       
		$this->query('SELECT * FROM feature where wid = '. $_GET["id"] .'');
		$rows = $this->resultSet();
		return $rows;

		}

		
				
			
	
	

		
		
		
			
	    public function show(){

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


	
	public function add(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			// Insert into MySQL
			$this->query('INSERT INTO feature (wid, f1, f2, f3, f4, f5) VALUES(:wid, :f1, :f2, :f3, :f4, :f5)');
			$this->bind(':wid', $post['wid']);
			$this->bind(':f1', $post['f1']);
			$this->bind(':f2', $post['f2']);
			$this->bind(':f3', $post['f3']);
			$this->bind(':f4', $post['f4']);
			$this->bind(':f5', $post['f5']);
			$this->execute();
			// Verify
			
				if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'feature/show');
				}
			}
			
		$this->query('SELECT * FROM recipes');
		$rows = $this->resultSet();
		return $rows;
			
		return;
		
		}
	

		
		

}