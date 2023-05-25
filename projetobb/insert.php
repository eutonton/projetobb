<?php
	include("conexao.php");
	$nome=$_POST['nome'];
	$email=$_POST['email'];
	$senha=$_POST['senha'];
	$hash = hash('sha256', $senha);
	
	//Inserindo dados no Banco de Dados
	$sql = "INSERT INTO usuario(nome, email, senha)
	VALUES ('$nome', '$email', 
	'$hash')";
	if(mysqli_query($mysqli, $sql)){
		echo  "<script>alert('Usuario Cadastrado');</script>"; 
		echo '<script>window.location.href = "login.php"; </script>';
	}else{
		echo "Erro". mysqli_connect_error($mysqli);
	}
	
	mysqli_close($mysqli);
?>