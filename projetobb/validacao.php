   <?PHP

   $servidor ="localhost";
   $usuario = "root";
   $senha = "123456";
   $dbname="cadastro";

   $conn= new mysqli($servidor,$usuario,$senha,$dbname);

   if ($conn -> connect_error) {
    die('Erro na cenexão com o banco de dados: ' . $conn->connect_error);
   }
   
 if (isset($_POST['email']) && isset($_POST['senha'])) {
   $email = $_POST['email'];
   $senha = $_POST['senha'];


   $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0) {
    echo '<script>window.location.href = "index.php"; </script>';

    exit;
   } else {
    echo "Usuário ou senha inválidos.";
   }



 }

 mysqli_close($conn);
 ?>