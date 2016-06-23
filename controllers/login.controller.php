<?php
	require_once "../config/imports.all.php";
	if(isset($_GET['operation'])){
		
		try {
			$user = DAOUser::readByEmail($_POST['email']);
			if($user != null){
				if($user->getPassword() == crypt($_POST['password'],CRYPT_SALT_LENGTH)){
					header("Location: ../views/home.php");
				}
			}else{
				header("Location: ../index.php");
			}
		} catch (Exception $e) {
			echo $e.getMessage();
		}
	}

?>