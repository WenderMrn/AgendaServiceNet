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
		              null,
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
		try {
		          $sql = "SELECT * FROM user WHERE name = :name";
		   
		          $p_sql = Conection::getInstance()->prepare($sql);
		   
		          $p_sql->bindValue(":name",$chave);
		          $p_sql->execute();

		          $p_sql->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"User");
		          
		          $result = $p_sql->fetch();
		          if($result instanceof User)
		          	return $result;
		      	  else
		      	  	return null;
		         
		    } catch (Exception $e) {
		      throw $e->getMessage();
		    }
		
	}
	public function readByEmail($chave){
		try {
		          $sql = "SELECT * FROM user WHERE email = :email";
		   
		          $p_sql = Conection::getInstance()->prepare($sql);
		   
		          $p_sql->bindValue(":email",$chave);
		          $p_sql->execute();

		          $p_sql->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"User");
		          
		          $result = $p_sql->fetch();
		          if($result instanceof User)
		          	return $result;
		      	  else
		      	  	return null;
		         
		    } catch (Exception $e) {
		      throw $e->getMessage();
		    }
		
	}
	public function update($obj){
		try {
		    $sql = "UPDATE user set address = :address,email = :email,password = :password WHERE name =:name";
		   
		    $p_sql = Conection::getInstance()->prepare($sql);
		   
		    $p_sql->bindValue(":name",$obj->getName());
		    $p_sql->bindValue(":address",$obj->getAddress());
		    $p_sql->bindValue(":email",$obj->getEmail());
		    $p_sql->bindValue(":password",$obj->getPassword());
		    
		    return $p_sql->execute();
   
		} catch (Exception $e) {
		   print $e->getMessage();
		}
	}
	public function delete($obj) {
		try {

		    $sql = "DELETE FROM user WHERE name =:name";
		   
		    $p_sql = Conection::getInstance()->prepare($sql);
		    $p_sql->bindValue(":name",$obj->getName());
		   	
		   	return $p_sql->execute();
   
		} catch (Exception $e) {
		  print $e->getMessage();
		}
	}
 }
?>