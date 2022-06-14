<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="background-color:#0C7489;">
  <div>
    <br>
  </div>
  <section class="d-flex justify-content-center">
    <div class="card col-sm-4 p-4" style="background-color:#13505B;" color=white>  
      <div class="container">
        <form method="POST">
          @csrf
          <img src="\img\logo.png" style="width: 20px; height: 20px;"><strong>&nbsp;CourseHall</strong>
          <h1 color=white>Acceder</h1>
          <div class="form-group">
            <label for="exampleInputEmail1">Correo electronico</label>
            <input type="email" class="form-control" id="email" name="email" required aria-describedby="emailHelp" placeholder="Introduce tu correo electronico">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" id="password" required name="password" placeholder="Introduce tu contraseña">
            <a href="#">¿Olvidaste la contraseña?</a> <br>
            <small id="emailHelp" class="form-text text-muted">No compartas tu contraseña con nadie</small>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="recuerdame" name="recuerdame">
            <label class="form-check-label" for="exampleCheck1">Recuerdame</label>
          </div>
          <div class="row">
            <div class="col">
              <a href="#">Crear cuenta </a>
            </div>
            <div class="col">
              <button type="submit" class="btn btn-primary">Iniciar sesion</button>
            </div>
          </div>
        </form>    
      </div>
    </div>
  </section>
</body>
</html>