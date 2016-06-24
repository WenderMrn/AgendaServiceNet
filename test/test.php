<?php
	require_once "../config/imports.all.php";

	DAOUser::create(new User("Administrador","admin@gmail.com",crypt("123",CRYPT_SALT_LENGTH)));
	DAOUser::create(new User("Joao da Silva","joao@gmail.com",crypt("123",CRYPT_SALT_LENGTH)));

?>