<?php
require_once "models/contact.class.php";
session_start();
  if(isset($_SESSION['user']))
    header("Location:views/contact-list.php");
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Agenda</title>
  <!-- CSS app-->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="assets/lib/bootstrap/dist/css/bootstrap.css">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="assets/css/carousel.css">

  <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>

  <!-- Optional theme -->
  <!--<link rel="stylesheet" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">-->
  <!-- JQuery -->
  <script src="assets/lib/jquery/dist/jquery.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="assets/lib/bootstrap/dist/js/bootstrap.js" ></script>
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
          <a class="navbar-brand" href="index.php" id="home">
            <!--<img alt="Home" src="#">-->
            Agenda
          </a>
        </div>
       <div class="nav-collapse in collapse" style="height: auto;">
            <form class="navbar-form navbar-right" action="controllers/login.controller.php?operation=login" method="POST">
              <div class="form-group">
              <input class="form-control" type="email" placeholder="Email" name="email">
              <input class="form-control" type="password" placeholder="Password" name="password">
              </div>
              <button type="submit" class="btn">logar</button>
            </form>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <?php
      if(isset($_GET['alert']))
        if($_GET['alert'] == "invalid_password"){
          require_once "views/alert.html";  
        } 
    ?>
     <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="assets/img/slide/1.jpg" height="795" width="1400" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Nunca mais perca seus contatos</h1>
              <p>Cadastre-se e leve seus contatos para onde quiser</p>
              <!--<p><a class="btn btn-lg btn-primary" href="pages/reserva.html" role="button">cadastrar</a></p>-->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="assets/img/slide/2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Maias comodidade.</h1>
              <p>Ideal para quem procura praticidade em uma agenda.</p>
              <!--<p><a class="btn btn-lg btn-primary" href="pages/reserva.html" role="button">cadastrar</a></p>-->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="assets/img/slide/3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Agenda ServiceNet.</h1>
              <p>Agenda ServiceNet é uma agenda de contatos eletronica</p>
              <!--<p><a class="btn btn-lg btn-primary" href="pages/reserva.html" role="button">cadastrar</a></p>-->
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>
    </div> 
  <!--<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <img alt="Home" src="#">
        </a>
      </div>
    </div>
  </nav>
  <div class="jumbotron" id="presentation">
    <div class="container">
      <h1>Hello, world!</h1>
      <p>...</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
    </div>
  </div>-->
  <script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>
