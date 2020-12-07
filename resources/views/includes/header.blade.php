<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index">INICIO</a>
  @yield('index')
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">


            <li class="nav-item active">
              <a class="nav-link" href="usuarios">USUARIOS <span class="sr-only">(current)</span></a>
          @yield('usuarios')
            </li>



            <li class="nav-item active"> 
              <a class="nav-link" href="clientes">CLIENTES<phpspan class="sr-only">(current)</span></a>
          @yield('clientes')
          </li>



            <li class="nav-item active">
              <a class="nav-link" href="salones">SALONES <span class="sr-only">(current)</span></a>
          @yield('salones')
            </li>




            <li class="nav-item active">
              <a class="nav-link" href="tiposervicios">TIPO DE SERVICIOS <span class="sr-only">(current)</span></a>
              <ul>


<li class="nav-item active">
<a class="nav-link" href="tiposervicios">TIPO DE SERVICIOS <span class="sr-only">(current)</span></a>
@yield('usuarios')
</li>

</ul>
            </li>




            <li class="nav-item active">
              <a class="nav-link" href="servicios"> SERVICIOS  <span class="sr-only">(current)</span></a>
              

          @yield('servicios')
            </li>

      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      