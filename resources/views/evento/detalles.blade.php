<?php $NumOfEvents = ["col-md-4","col-md-4","col-md-4","col-md-4","col-md-4","col-md-4"]; $document_root = $_SERVER['DOCUMENT_ROOT'];?>


<!doctype html>
<html lang="en">
  
  <?php require_once($document_root.'/components/head.php'); ?>

  <body>
    @include('header')

    <main role="main">
  <div class="card-group">

  <img class="card-img-top" src="{{ asset('img\room.jpg')}}" style="width: 50%; height: 100%;">

  <div class="card mb-3">
  <div class="card-body">
    <h3 class="card-title">{{$event->nombre}}</h3>
    <p class="card-text">{{$event->descripcion}}</p>
    <div class="btn-group">
                      <a class="btn btn-sm btn-outline-secondary" href="/evento/registra" role="button">Registrarme</a>
                      <a class="btn btn-sm btn-outline-secondary" href="/evento" role="button">Actualizar</a>
    </div>
  </div>

  </div>

    </main>

    <?php require_once($document_root.'/components/footer.php'); ?>
    <?php require_once($document_root.'/js/JS_scripts.php'); ?>
    
  </body>
</html>
