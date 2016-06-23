<?php
abstract class  DAOContact implements IDAO{
	public function create($obj){
		try {
		    $sql = "INSERT INTO contact(
		      	id,  
		        name,
		        phone,
		      	street,
		      	CEP,
		      	number,
		      	district,
		      	city,
		      	state,
		      	iduser)
		       VALUES (
		        null,
		        :name,
		        :phone,
		        :street,
		      	:CEP,
		      	:number,
		      	:district,
		      	:city,
		      	:state,
		      	:iduser)";
		   
		    $p_sql = Conection::getInstance()->prepare($sql);
		   
		    $p_sql->bindValue(":name", $obj->getName());
		    $p_sql->bindValue(":phone", $obj->getPhone());
		    $p_sql->bindValue(":street",$obj->getStreet());
		    $p_sql->bindValue(":CEP",$obj->getCEP());
		    $p_sql->bindValue(":number",$obj->getNumber());
		    $p_sql->bindValue(":district",$obj->getDistrict());
		    $p_sql->bindValue(":city",$obj->getCity());
		    $p_sql->bindValue(":state",$obj->getState());
		    $p_sql->bindValue(":iduser",$obj->getIduser());
		        
		  return $p_sql->execute();      

		} catch (Exception $e) {
		  throw $e->getMessage();
		}
	}
	public function read($chave){
		try {
		        $sql = "SELECT * FROM contact WHERE name = :name";
		   
		        $p_sql = Conection::getInstance()->prepare($sql);
		   
		        $p_sql->bindValue(":name",$chave);
		        $p_sql->execute();

		        $p_sql->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"Contact");
		          
		        $result = $p_sql->fetch();
		        if($result instanceof User)
		        	return $result;
		      	else
		      	 	return null;
		         
		} catch (Exception $e) {
		   throw $e->getMessage();
		}
	}
	public function realAllByUserId($id){
		try {
		        $sql = "SELECT * FROM contact WHERE iduser = :id";
		   
		        $p_sql = Conection::getInstance()->prepare($sql);
		        $p_sql->bindValue(":id",$id);
		        $p_sql->execute();

		        return $p_sql->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"Contact");
		         
		} catch (Exception $e) {
		   throw $e->getMessage();
		}
	}
	public function readAll(){
		try {
		        $sql = "SELECT * FROM contact";
		   
		        $p_sql = Conection::getInstance()->prepare($sql);
		        $p_sql->execute();

		        return $p_sql->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"Contact");
		         
		} catch (Exception $e) {
		   throw $e->getMessage();
		}
	}
	public function update($obj){
		try {
		    $sql = "UPDATE contact set 
			    name = :name,
			    phone = :phone,
			    street = :street,
			    CEP = :CEP,
			    number = :number,
			    district = :district,
			    city = :city,
			    state = :state
		     WHERE iduser =:iduser AND id = :id";
		   
		   $p_sql = Conection::getInstance()->prepare($sql);
		   $p_sql->bindValue(":iduser", $obj->getIduser());
		   $p_sql->bindValue(":id", $obj->getId());
		   $p_sql->bindValue(":name", $obj->getName());
		   $p_sql->bindValue(":phone", $obj->getPhone());
		   $p_sql->bindValue(":street",$obj->getStreet());
		   $p_sql->bindValue(":CEP",$obj->getCEP());
		   $p_sql->bindValue(":number",$obj->getNumber());
		   $p_sql->bindValue(":district",$obj->getDistrict());
		   $p_sql->bindValue(":city",$obj->getCity());
		   $p_sql->bindValue(":state",$obj->getState());
		    
		   
		   return $p_sql->execute();
   
		} catch (Exception $e) {
		   throw $e->getMessage();
		}		
	}
	public function delete($key) {
		try {

		    $sql = "DELETE FROM contact WHERE id =:id";
		   
		    $p_sql = Conection::getInstance()->prepare($sql);
		    $p_sql->bindValue(":id",$key);
		   	
		   	return $p_sql->execute();
   
		} catch (Exception $e) {
		  throw $e->getMessage();
		}
	}
}
?>