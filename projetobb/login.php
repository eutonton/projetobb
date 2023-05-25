<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title><p>Faça o Login</p>></title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: rgb(4, 0, 255);
		}
		
		.container {
			width: 300px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
		}
		
		.container h2 {
			text-align: center;
			margin-bottom: 20px;
		}
		
		.form-group {
			margin-bottom: 15px;
		}
		
		.form-group label {
			display: block;
			font-weight: bold;
		}
		
		.form-group input[type="text"],
		.form-group input[type="password"] {
			width: 100%;
			padding: 8px;
			border: 1px solid #ccc;
			border-radius: 3px;
		}
		
		.form-group button {
			width: 100%;
			padding: 8px;
			background-color: #4CAF50;
			border: none;
			color: #fff;
			cursor: pointer;
			border-radius: 3px;
		}
		
		.form-group button:hover {
			background-color: #45a049;
		}
		
		.switch-form {
			text-align: center;
			margin-top: 10px;
		}
		
		.switch-form a {
			color: #777;
			text-decoration: none;
		}
		
		.switch-form a:hover {
			color: #333;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Tela de Login </h2>
		<form id="login-form" action="validacao.php">
			<div class="form-group">
				<label for="email">E-mail:</label>
				<input type="email"  placeholder="fulano@mail.com" required="required" name="email" required><br>
			
			</div>
			<div class="form-group">
				<label for="senha">Senha:</label>
    		<input type="password"  placeholder="***********" required="required" name="senha" required><br>
			</div>
			<div class="form-group">
				<button type="submit">Entrar</button>
			</div>



	</body>

	</html>