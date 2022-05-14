<?php $NumOfEvents = ["col-md-4","col-md-4","col-md-4","col-md-4","col-md-4","col-md-4"]; $document_root = $_SERVER['DOCUMENT_ROOT'];?>


<!doctype html>
<html lang="en">
  
  <?php require_once($document_root.'/components/head.php'); ?>

  <body>
    <?php require_once($document_root.'/components/header.php'); ?>

    <main role="main">
  <div class="card-group">

  <img class="card-img-top" src="{{ asset('img\room.jpg')}}" style="width: 50%; height: auto;">

  <div class="card mb-3">
  <div class="card-body">
    <h3 class="card-title">Nombre de evento aquí</h3>
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    <div class="btn-group">
                      <a class="btn btn-sm btn-outline-secondary" href="/evento" role="button">Registrarme</a>
                    </div>
  </div>

  </div>

    </main>

    <?php require_once($document_root.'/components/footer.php'); ?>
    <?php require_once($document_root.'/js/JS_scripts.php'); ?>
    
  </body>
</html>
