<?php
	require_once "../config/imports.all.php";
	session_start();
	if(isset($_GET['operation']))
	switch ($_GET['operation']) {
		case 'create':
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
				$contact->setIduser($_SESSION['user']->getId());

			if(DAOContact::create($contact)){
				header("Location:../views/contact-list.php");
			}else{
				echo "error";
			}

		} catch (Exception $e) {
			echo $e.getMessage();
		}
		break;
		case 'list':
			DAOContact::realAllByUserId($_SESSION['user']->getId());
			header("Location:../views/contact-list.php");
		break;
		case 'update':
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
				$contact->setIduser($_POST['iduser']);
				$contact->setId($_POST['id']);
				
				if(DAOContact::update($contact))
					header("Location:../views/contact-list.php");
				else
					echo "error";		
			} catch (Exception $e) {
				echo $e->getMessage();
			}
			
		break;
		case 'delete':
			
			if(DAOContact::delete($_POST['id'])){
				header("Location:../views/contact-list.php");
			}else{
				echo "error";
			}
			
		break;
		default:
			# code...
		break;
	}
	
?>