<?php $NumOfEvents = ["col-md-4","col-md-4","col-md-4","col-md-4","col-md-4","col-md-4"]; $document_root = $_SERVER['DOCUMENT_ROOT'];?>


<!doctype html>
<html lang="en">
  @include('header')
  <?php require_once($document_root.'/components/head.php'); ?>
  <body>
    
    
    <main role="main">
    
      <div class="container">
        <h1 class="display-4" style="text-align:center">Proximos eventos</h1>
      </div>
    <div class="album py-5 bg-light">
      @auth
        <div class="row justify-content-center"> 
          <a class="btn btn-success col-1" href="/addevent">Añadir evento</a>
        </div>
      @endauth
        <br><br>
        
        <ul>
          @foreach ($eventos as $evento)
          <div class="row">
              <div class="card" style="width: 18rem;">
                <img src="{{ asset('img\room.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$evento->nombre}}</h5>
                  <p class="card-text">{{$evento->descripcion}}</p>
                  <a href="{{route('eventos.detalles', $evento->id_evento)}}" class="btn btn-primary">Más información</a>
                </div>
              </div>
          @endforeach
        </div>
        </ul>
        </div>
      </div>
 
    </main>

    <?php require_once($document_root.'/components/footer.php'); ?>
    <?php require_once($document_root.'/js/JS_scripts.php'); ?>
    
  </body>
</html>
