<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
  <div class="navbar navbar-inverse"">
      <div class="navbar-inner">
        <a class="brand" href="index.php">AGENDA</a>
        <!--<ul class="nav">
          <li><a href="createuser.php">INSERT USER</a></li>
          <li><a href="listusers.php">LIST ALL</a></li>
          <li><a href="updateuser.php">UPDATE USER</a></li>
          <li><a href="deleteuser.php">DELETE USER</a></li>
          </ul>-->
          <form class="navbar-form pull-right">
            <input class="span2" type="text" placeholder="Email">
            <input class="span2" type="password" placeholder="Password">
            <button type="submit" class="btn">Sign in</button>
          </form>
      </div>
  </div>
  <div class="container"> 
    <div id="myCarousel" class="carousel slide">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
        <!-- Carousel items -->
      <div class="carousel-inner">
        <div class="active item">
          <img class="first-slide" src="assets/img/slide/1.jpg" height="795" width="1400" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>LS Copacabana Palace.</h1>
              <p>Um dos preferidos das celebridades na hora de se hospedar no Rio e um dos mais tradicionais e elegantes da capital. Tomar sol à beira da piscina em que Lanis Loplin nadou nua, passar pelos mesmos corredores e até dormir na mesma suíte em que realezas, ricaços e artistas famosos já tiveram seus sonos de beleza, é uma exclusividade que só pode ser vivida no LS Copacabana Palace.</p>
              <p><a class="btn btn-lg btn-primary" href="pages/reserva.html" role="button">reservar</a></p>
            </div>
        </div>
        <div class="item">…</div>
        <div class="item">…</div>
      </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
      </div>
    </div> 
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>