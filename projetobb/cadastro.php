<!DOCTYPE html>

<html lang="pt-br">
<link rel="stylesheet" href="style2.css">

<head>
<meta charset="utf-8"/>
<title>CADASTRO</title>
</head>

<body>

       <!-- cadastro -->
   
	<div class="container">
     <form action="insert.php" method="POST">

    <h2>CADASTRO</h2>
    <label for="nome">Nome:</label>
    <input type="text" placeholder="Ex: Wellington Araújo" required="required" name="nome" required><br>

    <label for="email">E-mail:</label>
    <input type="email"  placeholder="fulano@mail.com" required="required" name="email" required><br>

    <label for="senha">Senha:</label>
    <input type="password"  placeholder="***********" required="required" name="senha" required><br>
    
    
</br>

     <!-- botao de cadastro -->

     <button type="submit">Cadastrar</button><br>

</br>

     <!-- botao de limpar o cadastro -->
<!-- 
<button type="submit">Já possui uma conta? Faça login!</button> -->

<button onclick="redirecionar()">Já possui uma conta? Faça login!</button>
  
    <script>
      function redirecionar() {
        // Redireciona para a outra página
        window.location.href = 'login.php';
      }
    </script>
<br>
</br>
</form>
</div>
</body>
</html>