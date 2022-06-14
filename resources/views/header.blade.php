<header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">Acerca de nosotros</h4>
            <p class="text-white">Somos una empresa versatil de capacitación, dedicada a impartir cursos, talleres y conferencias para cubrir las necesidades de nuestros clientes.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Desarrolladores</h4>
            <ul class="list-unstyled">
              <li><a href="/team" class="text-white">Equipo 4 LDAW</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark box-shadow">
      <div class="container d-flex justify-content-between">
        <a href="/dashboard" class="navbar-brand d-flex align-items-center">
        <img src="\img\logo.png" style="width: 20px; height: 20px;"><strong>&nbsp;CourseHall</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        @guest
          <a class="btn btn-light" href="/login">Iniciar sesion</a>    
        @endguest
        @auth
        <form action="/logout" method="POST">
          @csrf
            <button class="btn btn-light">Cerrar sesion</button>
        </form>    
        @endauth
      </div>
    </div>
  </header>