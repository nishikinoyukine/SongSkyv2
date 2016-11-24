<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Edicion de Imagenes</title> 
        <link rel="stylesheet" href="CSS/registro.css">
        <link rel="stylesheet" href="CSS/styles.css">
        <link rel="stylesheet" href="CSS/fontello.css">
        <link rel="stylesheet" href="CSS/userprofile.css">
        <link rel="stylesheet" href="CSS/styleSupport.css">
        <script src="js/jquery.js"></script>
        <script src="js/sha1-min.js" type="text/javascript"></script>
        <script src="js/responsive-nav.js"></script>
        <script src="js/live.js"></script>
    
<body>
  <section id="formulario"> 
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="contieneFormR">

    <p id="titulo"> BIENVENIDO A SONGSKY</p>
    <p id="titulo2"> Perzonaliza tu Perfil </p>

          <form method="POST" action="/uploadi" accept-charset="UTF-8" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <p id="info"> Personaliza tu Avatar </p>
        
        <div class="contenedor1">
          <img id="mostrarimagen" src="IMG/avatar.png" height="200" width="200" class="imagen" />     
        </div>

        <div class="subirimagen">
          <input class="profileimg" id="profileimg" TYPE=FILE NAME="profileimg">
        </div> 
      

      <br><br>
    
      <p id="info"> Personaliza tu Portada </p>
      <div class="contenedor2">
        <img id="mostrarim" src="IMG/cloudb.png" height="100" width="400" class="imagen2" /> 
      </div>
    
      <div class="subirimagen">
        <input class="Portadaimg" id="perfilim" TYPE=FILE NAME="Portadaimg">
      </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Subir Imagenes
                                </button>
                            </div>
                        </div>
                  </form>

  </div>
<!-- ----------------------------------------------------------------------------------------------------------- -->

  </section>

 <header>
            <div class="contenedor">
                <h1 class="icon-cloud-1">SONGSKY</h1>
                <div id="nav">
                  <ul>
                    <li><a href="{{ url('/') }}">Home</a></li> 
                    @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a <a href="{{ url('/register') }}">Registrate</a></li>
                    @else
                            <li><a href="{{ url('/Perfil') }}">Perfil</a></li>
                            <li><a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a></li>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                    @endif
                    <li><a href="#">About</a></li>
                  </ul>
                </div>  
                <button id="nav-toggle">Menu</button>
            </div>    
        </header>
            
        </main>
        
        <footer>
            <div class="containerfooter">
                <p class="copy">SONGSKY &copy; 2016.</p><br>
                <p class="copy"> YukiSoft &reg; 2016.</p>
                <div class="redessociales">
                    <a class="icon-facebook" href="#"></a>
                    <a class="icon-twitter" href="#"></a>
                    <a class="icon-youtube" href="#"></a>
                    <a class="icon-instagram" href="#"></a>
                    <a class="icon-vimeo" href="#"></a>
                </div>
            </div>    
        </footer>
        
<script>
      var navigation = responsiveNav("#nav", {
        customToggle: "#nav-toggle"
      });
</script>

<script type="text/javascript" > 
  function mostrarImagen(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $('#mostrarimagen').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
 
  $("#profileimg").change(function(){
    mostrarImagen(this);
  });

  function mostrarImagen1(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $('#mostrarim').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
 
  $("#perfilim").change(function(){
    mostrarImagen1(this);
  });
</script>

</body>        

</html>