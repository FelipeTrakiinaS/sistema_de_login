<?php
	// $servidor = "localhost";
	// $usuario = "root";
	// $senha = "";
	// $dbname = "funvildevendas";

	$servidor = "sql3.tpa.com.br";
	$usuario = "felipe";
	$senha = "cd1926";
	$dbname = "felipeittnerdb";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	
?>