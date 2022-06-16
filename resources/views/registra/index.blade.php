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
            
            <form method="POST">
              @csrf
              <div class="form-group">
                
                <label for="">Nombre(s)</label>
                <input type="text" class="form-control" id="nombres" name="nombres" placeholder="River">
                
                <label for="">Apellido(s)</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Song">
                
                <label for="">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad" placeholder="23">
                
                <label for="">Celular</label>
                <input type="text" class="form-control" id="celular" name="celular" placeholder="4423456781">
                
                <label for="">Lugar de residencia</label>
                <input type="text" class="form-control" id="estado_residencia" name="estado_residencia" placeholder="Cd. Juarez">
                
                <label for="">Email</label>
                <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" placeholder="nombre@ejemplo.com">
                
                <label for="">Institucion</label>
                <input type="text" class="form-control" id="instituto" name="instituto">
                
              </div>
              <button type="submit" class="btn btn-success">Registrar asistencia</button>
              
            </form>
            
          </div>
        </div>
        
      </div>
      
    </main>
    
    <?php require_once($document_root.'/components/footer.php'); ?>
    <?php require_once($document_root.'/js/JS_scripts.php'); ?>
    
  </body>
  </html>
  