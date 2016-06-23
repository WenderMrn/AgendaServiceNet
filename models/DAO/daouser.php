<?php
 abstract class DAOUser implements IDAO{
 	public function create($obj){
		try {
		          $sql = "INSERT INTO user(
		          	  id,  
		              name,
		              email,
		              password)
		              VALUES (
		              1,
		              :name,
		              :email,
		              :password)";
		   
		          $p_sql = Conection::getInstance()->prepare($sql);
		   
		          $p_sql->bindValue(":name", $obj->getName());
		          $p_sql->bindValue(":email", $obj->getEmail());
		          $p_sql->bindValue(":password", $obj->getPassword());
		        
		      return $p_sql->execute();      

		    } catch (Exception $e) {

		      print $e->getMessage();
		    }
	}
	public function read($chave){
		
		
	}
	public function update($obj){
		
	}
	public function delete($obj) {
		
	}
	public function refresh($obj){
		
	}
 }
?>