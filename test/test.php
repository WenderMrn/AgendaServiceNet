<?php
	require_once "../config/imports.all.php";

	if(DAOUser::create(new User("Pedro Martins","mt@gmail.com",crypt("123",CRYPT_SALT_LENGTH)))){
		echo "Usuário criado com sucesso!";
	}else{
		echo "Erro ao criar usuário!";
	}

	if(DAOContact::create(new Contact("Wender","0000000000","a","sds",23))){
		echo "Contato criado com sucesso!";
	}else{
		echo "Erro ao criar Contato!";
	}

	$con = DAOContact::read("Wender");
	if($con != null){
		print_r($con);
	}else{
		echo "Erro ao ler Contato!";
	}


?>