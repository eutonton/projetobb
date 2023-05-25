<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    

  <title>Pesquisa de Academias</title>
</head>
<body>
  <div id="header">
    <h1>Pesquisa de Hoteis</h1>
  </div>
  
  <div id="search-form">
    <form>
      <input type="text" placeholder="Digite o nome da cidade, destino ou hotel">
      <input type="submit" value="Pesquisar">
    </form>
  </div>
  
  
  <div id="results">
    <div class="hotel">
        <img src="./img01.png" alt="Imagem academia">
      <h2><a href="https://www.instagram.com/smartfit/">Visite a SmartFit</a></h2>
      <p>Descrição da academia.</p>
      <p>Preco: R$100 por noite</p>
    </div>
    
    
    <div class="hotel">
      <h2>Hotel 2</h2>
      <p>Descrição do hotel 2.</p>
      <p>Preco: R$150 por noite</p>


  <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg']."<br><br>";
			unset($_SESSION['msg']);
		}
		?>
		
			<div class="estrelas">
				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>

        
				
        
        <button onclick="enviar()">Cadastrar</button><br>
<script>

let resultado = enviar();
  function enviar() {
    var estrelas = document.getElementsByName("estrela");
    var valorTotal = 0;

    for (var i = 0; i < estrelas.length; i++) {
      if (estrelas[i].checked) {
        valorTotal += parseInt(estrelas[i].value);
      }
    }

    ("Valor total das estrelas: " + valorTotal);
  }
</script>
        


        
      </div>
    </div>

    </label>

  
    <button onclick="cadastro()">Cadastrar</button><br>

    <button onclick="redirecionar()">Login</button>
  
    <script>
      function redirecionar() {
        // Redireciona para a outra página
        window.location.href = 'login.php';
      }
    </script>


<script src="script.js"></script>
  </div>
</body>
</html>