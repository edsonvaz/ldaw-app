<?php $NumOfEvents = ["col-md-4","col-md-4","col-md-4","col-md-4","col-md-4","col-md-4"]; $document_root = $_SERVER['DOCUMENT_ROOT'];?>


<!doctype html>
<html lang="en">
  
  <?php require_once($document_root.'/components/head.php'); ?>

  <body>
    <?php require_once($document_root.'/components/header.php'); ?>
    <main role="main">

    <h1 class="display-4" style="text-align:center">Proximos eventos</h1>

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
                      <a class="btn btn-sm btn-outline-secondary" href="/evento" role="button">Ver</a>
                    </div>
                    <small class="text-muted">12/04/2912</small>
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

    <?php require_once($document_root.'/components/footer.php'); ?>
    <?php require_once($document_root.'/js/JS_scripts.php'); ?>
    
  </body>
</html>
