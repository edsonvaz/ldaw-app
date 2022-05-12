<?php

$NumOfEvents = ["col-md-4","col-md-4","col-md-4","col-md-4","col-md-4","col-md-4"]

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="\img\favico.png" sizes="32x32" />

    <title>CourseHall</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="/css/album.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">Acerca de nosotros</h4>
              <p class="text-white">Somos una empresa versatil de capacitación, dedicada a impartir cursos, talleres y conferencias para cubrir las necesidades de nuestros clientes.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Desarrolladores</h4>
              <ul class="list-unstyled">
                <li><a href="/team" class="text-white">Equipo 4 LDAW</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
          <img src="\img\logo.png" style="width: 20px; height: 20px;"><strong>&nbsp;CourseHall</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">

            <?php foreach($NumOfEvents as $NoE){?>

            <div class="<?php echo($NoE) ?>">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ asset('img\room.jpg')}}" style="width: 100%; height: auto;">
                <div class="card-body">
                <h5 class="card-title">Titulo de Evento</h5>
                  <p class="card-text">Descripcion de evento</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                    </div>
                    <small class="text-muted">Fecha Aquí</small>
                  </div>
                </div>
              </div>
            </div>

            <?php }?>             
            </div>
          </div>
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Volver al tope</a>
        </p>
        <p>Laboratorio de desarrollo de aplicaciones Web (Gpo 1)</p>
        <p>TC3052.1</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/js/jquery-slim.min.js"><\/script>')</script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/holder.min.js"></script>
  </body>
</html>
