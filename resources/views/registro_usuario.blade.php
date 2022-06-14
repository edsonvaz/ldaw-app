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
                <h1>
                    Crea tu cuenta
                </h1>
                <form method="POST" class="row g-2 needs-validation" novalidate>
                    @csrf
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Introduce tu nombre" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Introduce tu apellido" required>
                    </div>
                    <div class="col-md-12">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Introduce tu correo electronico" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="celular" name="celular" placeholder="Telefono" required>
                    </div>
                    <div class="col-md-8">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Escribe una contraseña" required>
                    </div>
                    <div class="col">
                        <a class="btn btn-danger" href="/dashboard">Cancelar</a>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary" type="submit">Registrarse</button>
                    </div>
                </form>    
            </div>
        </div>
    </section>
</body>
</html>