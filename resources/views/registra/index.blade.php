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
    <h3 class="card-title">Registro para:</h3>
    <h5 class="card-title">'Nombre de evento'</h3> 

    <form>
  <div class="form-group">
  <label for="exampleFormControlInput1">Nombre(s)</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="River">
    <label for="exampleFormControlInput1">Apellido(s)</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Song">
    <label for="exampleFormControlInput1">Edad</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="23">
    <label for="exampleFormControlInput1">Celular</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="4423456781">
    <label for="exampleFormControlInput1">Lugar de residencia</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Cd. Juarez">
    <label for="exampleFormControlInput1">Email</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Selecciona tu institucion</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>

  <div class="btn-group">
                      <a class="btn btn-sm btn-outline-secondary" href="/evento/registra" role="button">Registrar</a>
    </div> 

</form>

    </div>
  </div>

  </div>

    </main>

    <?php require_once($document_root.'/components/footer.php'); ?>
    <?php require_once($document_root.'/js/JS_scripts.php'); ?>
    
  </body>
</html>
