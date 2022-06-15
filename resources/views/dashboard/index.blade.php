<?php $document_root = $_SERVER['DOCUMENT_ROOT'];?>


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
        <div class="container">
          <div class="row">

            <?php foreach($eventos as $evento){?>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ asset('img\room.jpg')}}" style="width: 100%; height: auto;">
                <div class="card-body">
                <h5 class="card-title">{{$evento->nombre}}</h5>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a class="btn btn-sm btn-outline-secondary" href="/evento" role="button">Ver</a>
                    </div>
                    <small class="text-muted">Cupo: {{$evento->cupo}}</small>
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

    {{$eventos->links()}}

    <?php require_once($document_root.'/components/footer.php'); ?>
    <?php require_once($document_root.'/js/JS_scripts.php'); ?>
    
  </body>
</html>
