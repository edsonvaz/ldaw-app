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
    <h3 class="card-title">Registrar evento:</h3>
    <form method="POST">
        @csrf
        <div class="form-group">
            <label for="">Escribe el nombre del evento</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Evento de Navidad">
            
            <label for="">Escribe las siglas</label>
            <input type="text" class="form-control" id="siglas" name="siglas" placeholder="EDN">
            
            <label for=""> Escribe la descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Este evento consiste en...">
            
            <label for="">Escribe la duracion (en minutos)</label>
            <input type="number" class="form-control" id="duracion" name="duracion" placeholder="90">
            
            <label for="">Escribe el numero de cupos del evento</label>
            <input type="number" class="form-control" id="cupo" name="cupo" placeholder="25">
            
            <label for="">Escribe el costo del evento</label>
            <input type="number" class="form-control" id="costo" name="costo" placeholder="150">

            <label for="">Escribe el lugar del evento</label>
            <input type="text" class="form-control" id="lugar" name="lugar" placeholder="Nuevo Mexico...">

            <input type="text" id="activo" name="activo" value="1" hidden>
        </div>
        <button type="submit" class="btn btn-success">Registrar</button>
    </form>

    </div>
  </div>

  </div>

    </main>

    <?php require_once($document_root.'/components/footer.php'); ?>
    <?php require_once($document_root.'/js/JS_scripts.php'); ?>
    
  </body>
</html>
