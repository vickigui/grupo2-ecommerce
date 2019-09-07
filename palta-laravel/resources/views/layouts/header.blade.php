
    <header>
     <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white">
       <a class="navbar-brand" href="/"><img src="/images/common/logo-palta.png" width=80px;></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarCollapse">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
             <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="{{ url('/nosotros') }}">NOSOTROS</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="{{ url('/productos') }}">PRODUCTOS</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="{{ url('/recetas') }}">RECETAS</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="{{ url('/contacto') }}">CONTACTO</a>
           </li>
         </ul>


         <div class="user">
           <div class="dropdown">
              <a class="nav-link dropdown-toggle user" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
              </a>
              <div class="dropdown-menu user-nav" aria-labelledby="dropdownMenuLink">
                @if($user = Auth::user())
                <a class="dropdown-item" href="{{ url('/perfil') }}">Mi Perfil</a>
                <a class="dropdown-item" href="{{ url('/logout') }}">Cerrar Sesión</a>
                @else
                <a class="dropdown-item" href="{{ url('/register') }}">Registrate</a>
                <a class="dropdown-item" href="{{ url('/login') }}">Login</a>

              @endif
              </div>
            </div>


         </div>

         <div class="carrito">
           <a class="nav-link" data-toggle="tooltip" title="Mi Carrito"  href="/carritos">
             <i class="fas fa-shopping-cart"></i>
           </a>
         </div>
       </div>
     </nav>
   </header>
