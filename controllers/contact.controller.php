<?php
	require_once "../config/imports.all.php";
	if(isset($_GET['operation'])){
		
		try {
			$contact = new Contact();
			$contact->setName($_POST['name']);
			$contact->setPhone($_POST['phone']);
			$contact->setStreet($_POST['street']);
			$contact->setCEP($_POST['CEP']);
			$contact->setNumber($_POST['number']);
			$contact->setDistrict($_POST['district']);
			$contact->setCity($_POST['city']);
			$contact->setState($_POST['state']);
			
			if(DAOContact::create($contact)){
				header("Location:../views/contact-list.php");
			}else{
				echo "error";
			}

		} catch (Exception $e) {
			echo $e.getMessage();
		}
	}

?>