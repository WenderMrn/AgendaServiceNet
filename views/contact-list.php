<?php
require_once "../config/imports.all.php";
session_start();
  if(!isset($_SESSION['user']))
    header("Location:../index.php");
?>
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
          <a class="navbar-brand" href="contact-list.php" id="home">
            <!--<img alt="Home" src="#">-->
            Agenda
          </a>
        </div>
       <div class="nav-collapse in collapse" style="height: auto;">
       		<ul class="nav navbar-nav">
            <li class="active"><a href="#">Meus contatos</a></li>
		        <li><a href="contact-insert.php">Adicionar Contato</a></li>
		     </ul>
         <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['user']->getEmail();?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><b class="col-md-10"><?php echo $_SESSION['user']->getName();?></b></li>
            <li role="separator" class="divider"></li> 
            <li><a href="../controllers/login.controller.php?operation=logout">sair</a></li>                   
          </ul>
        </li>
      </ul>
  			<form class="navbar-form navbar-right" role="search">
  			  <div class="form-group">
  			    <input type="text" class="form-control" placeholder="buscar" onkeyup="filterContact(this)">
  			  </div>
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
              $contacts = DAOContact::readAllByUserId($_SESSION['user']->getId());
              if(count($contacts) > 0){
                foreach ($contacts as $contact) {
                  echo "<form action='../controllers/contact.controller.php?operation=delete' method='POST'>";
                  echo "<input type='hidden' value=".$contact->getId()." name='id'>";
                  echo "<div class='list-group-item'>";
                  echo "<h4 class='list-group-item-heading'>Nome</h4>";
                  echo "<p class='list-group-item-text contact-name'>".$contact->getName()."</p>";
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
                  echo "<button type='button' class='btn btn-info' data-toggle='modal' data-target='#myModal' onclick='OpenEditModal(".json_encode($contact).")'>editar</button>";

                  echo  "<button type='submit' class='btn btn-danger'>remover</button>";
                  echo "</div>";
                  echo "</form>";
                }
              }else{
                echo "<div class='list-group-item'><h5 class='col-md-offset-5'>você ainda não possui contatos</h5></div>";
              }
              
            ?>
          </div>
	  	</div>
      <!-- Modal -->
     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <form action="../controllers/contact.controller.php?operation=update" method="POST">
          <input type="hidden" id="id" name="id">
          <input type="hidden" id="iduser" name="iduser">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Editar Contato</h4>
            </div>
            <div class="modal-body" id="modalbody">               
                <div class="form-group">
                  <label for="name">Nome</label>
                  <input type="text" class="form-control" id="name" placeholder="Nome" name="name">
                </div>
                <div class="form-group">
                  <label for="phone">Telefone</label>
                  <input type="text" class="form-control" id="phone" placeholder="Telefone" name="phone">
                </div>
                <div class="row">
                  <div class="col-xs-5">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control" id="cep" placeholder="CEP" name="CEP" onblur="searchCEP(this.value)">
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-10">
                  <label for="city">Cidade</label>
                  <input type="text" class="form-control" id="city" placeholder="Cidade" name="city">
                </div>
                <div class="col-xs-2">
                  <label for="state">UF</label>
                  <select class="form-control" name="state" id="state" placeholder="UF"></select>
                </div>  
                </div>
                <div class="form-group">
                  <label for="district">Bairro</label>
                  <input type="text" class="form-control" id="district" placeholder="Bairro" name="district">
                </div>
                <div class="row">
                  <div class="col-xs-9">
                    <label for="street">Logradouro</label>
                    <input type="text" class="form-control" id="street" placeholder="Logradoudo" name="street">
                  </div>
                  <div class="col-xs-3">
                      <label for="number">Número</label>
                      <input type="number" class="form-control" id="number" name="number">
                  </div>
                </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          </form>
        </div>
        </div>
  	  </div>
    </div> 
  <script type="text/javascript" src="../assets/js/script.js"></script>
</body>
</html>