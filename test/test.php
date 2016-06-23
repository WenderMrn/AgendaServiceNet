<?php
	require_once "../config/imports.all.php";

	//$c = new Contact("Wender","91192046",new Address());
	//print_r($c);

	if(DAOUser::create(new User("Pedro Martins","mt@gmail.com","123"))){
		echo "Usuário criado com sucesso!";
	}else{
		echo "Erro ao criar usuário!";
	}

	if(DAOContact::create(new Contact("Wender","91192046","a","sds",23))){
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