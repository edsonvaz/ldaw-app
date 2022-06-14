<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="bg-secondary">
  <div>
    <br>
  </div>
  <section class="d-flex justify-content-center">
    <div class="card col-sm-4 p-4">  
      <div class="container">
        <form method="POST">
          @csrf
          <h1>Acceder</h1>
          <div class="form-group">
            <label for="exampleInputEmail1">Correo electronico</label>
            <input type="email" class="form-control" id="email" name="email" required aria-describedby="emailHelp" placeholder="Introduce tu correo electronico">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" id="password" required name="password" placeholder="Introduce tu contraseña">
            <small id="emailHelp" class="form-text text-muted">No compartas tu contraseña con nadie</small>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="recuerdame" name="recuerdame">
            <label class="form-check-label" for="exampleCheck1">Recuerdame</label>
          </div>
          <div class="row">
            <div class="col">
              <a class="btn btn-dark" href="/registrarse">Crear cuenta </a>
            </div>
            <div class="col">
              <button type="submit" class="btn btn-primary">Iniciar sesion</button>
            </div>
            <div class="col">
              <a class="btn btn-danger" href="/dashboard">Regresar</a>
            </div>
          </div>
        </form>    
      </div>
    </div>
  </section>
</body>
</html>