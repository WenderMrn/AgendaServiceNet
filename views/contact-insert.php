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
		        <li class="active"><a href="insert.php">Adicionar Contato</a></li>
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
      	<div class="col-md-6 col-md-offset-3">
      		<h2>Adicionar novo contato</h2>
	   		<form>
        <div class="form-group">
          <label for="name">Nome</label>
          <input type="text" class="form-control" id="name" placeholder="Nome" name="name">
        </div>
        <div class="form-group">
          <label for="phone">Telefone</label>
          <input type="text" class="form-control" id="phone" placeholder="Telefone" name="phone">
        </div>
        <div class="form-group">
          <label for="cep">CEP</label>
          <input type="text" class="form-control" id="cep" placeholder="CEP">
        </div>
        <div class="row">
          <div class="col-xs-5">
          <label for="city">Cidade</label>
          <input type="text" class="form-control" id="city" placeholder="Cidade" name="city">
        </div>
        <div class="col-xs-5">
          <label for="state">Estado</label>
          <input type="text" class="form-control" id="state" placeholder="Estado" name="state">
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
			  <div class="form-group">
			    <label for="exampleInputFile"></label>
        </div> 
			  <button type="submit" class="btn btn-default">Adicionar</button>
			</form>
	  	</div>
	  </div>
    </div> 
  <script type="text/javascript" src="../assets/js/script.js"></script>
</body>
</html>