<?php
	session_start();
	require_once "../config/imports.all.php";
	if(isset($_GET['operation'])){
		switch ($_GET['operation']) {
			case 'login':
				try {
					$user = DAOUser::readByEmail($_POST['email']);
					if($user != null){
						if($user->getPassword() == crypt($_POST['password'],CRYPT_SALT_LENGTH)){
							$_SESSION['user'] = $user;
							print_r($_SESSION['user']);
							header("Location: ../views/contact-list.php");
						}else{
							header("Location: ../index.php?alert=invalid_password");
						}
					}else{
						header("Location: ../index.php?alert=invalid_password");
					}
				} catch (Exception $e) {
					echo $e.getMessage();
				}
			break;
			case 'logout';
				session_destroy();
				header("Location:../index.php");
			break;
		}
		
	}

?>