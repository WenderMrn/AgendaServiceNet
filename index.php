<!DOCTYPE html>
<html>
  <head>
    <title>Agenda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="assets/css/carousel.css" rel="stylesheet" media="screen">
  </head>
  <body>
  <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="#">Agenda</a>
          <div class="nav-collapse in collapse" style="height: auto;">
            <form class="navbar-form pull-right" action="controllers/login.controller.php?operation=login" method="POST">
              <input class="span2" type="text" placeholder="Email" name="email">
              <input class="span2" type="password" placeholder="Password" name="password">
              <button type="submit" class="btn">Sign in</button>
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="assets/img/slide/1.jpg" alt="Chania" height="795" width="1400">
          </div>
          <div class="item">
            <img src="assets/img/slide/2.jpg" alt="Chania" height="795" width="1400">
          </div>

          <div class="item">
            <img src="assets/img/slide/3.jpg" alt="Chania" height="795" width="1400">
          </div>
        </div>
      </div>
    </div>
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
