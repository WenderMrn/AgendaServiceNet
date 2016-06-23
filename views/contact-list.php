<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Agenda</title>
  <!-- CSS app-->
  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="../assets/lib/bootstrap/dist/css/bootstrap.css">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="../assets/css/carousel.css">

  <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>

  <!-- Optional theme -->
  <!--<link rel="stylesheet" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">-->
  <!-- JQuery -->
  <script src="../assets/lib/jquery/dist/jquery.js"></script>
  <script src="../assets/js/jquery.maskedinput.min.js"></script>
  <script src="../assets/js/estados-cidades.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="../assets/lib/bootstrap/dist/js/bootstrap.js" ></script>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php" id="home">
            <!--<img alt="Home" src="#">-->
            Agenda
          </a>
        </div>
       <div class="nav-collapse in collapse" style="height: auto;">
       		<ul class="nav navbar-nav">
            <li class="active"><a href="#">Meus contatos</a></li>
		        <li><a href="contact-insert.php">Adicionar Contato</a></li>
		        <li><a href="#">Editar</a></li>
		     </ul>
			<form class="navbar-form navbar-right" role="search">
			  <div class="form-group">
			    <input type="text" class="form-control" placeholder="Search">
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
       </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container">
      <div class="row">
      	<div class="col-md-8 col-md-offset-2">
         <h1>Minha lista de contatos</h1>
          <div class="list-group">
      		  <?php
              require_once "../config/imports.all.php";
              $contacts = DAOContact::readAll();
              foreach ($contacts as $contact) {
                echo "<a href='#' class='list-group-item'>";
                echo "<h4 class='list-group-item-heading'>Nome</h4>";
                echo "<p class='list-group-item-text'>".$contact->getName()."</p>";
                echo "<h4 class='list-group-item-heading'>Telefone</h4>";
                echo "<p class='list-group-item-text'>".$contact->getPhone()."</p>";
                echo "<h4 class='list-group-item-heading'>Endereço</h4>";
                echo "<ul class='list-inline'>";
                echo "<li><b>CEP</b></li><li>".$contact->getCEP()."</li>";
                echo "<li><b>Cidade</b></li><li>".$contact->getCity()."</li>";
                echo "<li><b>UF</b></li><li>".$contact->getState()."</li>";
                echo "</ul>";
                echo "<ul class='list-inline'>";
                echo "<li><b>Logradouro</b></li><li>".$contact->getStreet().", nº ".$contact->getNumber()."</li>";
                echo "<li><b>Bairro</b></li><li>".$contact->getDistrict()."</li>";
                echo "</ul>";
                echo "<button type='button' class='btn btn-info'>editar</button>";
                echo  "<button type='button' class='btn btn-danger'>remover</button>";
                echo "</a>";
              }
            ?>
          </div>
	  	</div>
	  </div>
    </div> 
  <script type="text/javascript" src="../assets/js/script.js"></script>
</body>
</html>