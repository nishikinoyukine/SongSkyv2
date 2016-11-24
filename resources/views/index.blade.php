<!DOCTYPE html>
<html>
    <head>
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>SONGSKY</title>
        <link href="{{ asset('css/fontello.css') }}" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="css/userprofile.css">
        <link rel="stylesheet" href="css/banner.css">   
        <link rel="stylesheet" href="css/publicidad.css"> 
        <link rel="stylesheet" href="css/demo.css"> 
        <link rel="stylesheet" href="css/infomusica.css"> 
        <link rel="stylesheet" href="css/styleartistas.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/menuser.css">
        <!--[if lte IE 8]><script src="js/respond.js"></script><![endif]-->
        <script src="js/responsive-nav.js"></script>
               
    </head>
    <body>
        <?php
        ?>
        <main>
            <section id="banner">
                <img src="IMG/mak.png" alt="Banner"> 
            <div class="container">
                <h2>Musica a tu manera</h2>
                <p>Escucha tus canciones favoritas como nunca antes</p>
                <a href="#">Premium</a>
            </div>               
            </section> 
            
            <section id="bienvenidos">

            <br>
            
                <hr color="dodgerblue" size=1>
                 @if (Auth::guest())
                <p id='invitado' > BIENVENIDO: <a href="{{ url('/') }}"> Invitado.</a> </p> 
                @else
                <p id='invitado' > BIENVENIDO: <a href="{{ url('/Perfil') }}"> {{ Auth::user()->name }} </a> </p> 
                @endif
                <br>      
                <h2>Encuentra y crea tus playlist favoritos en un solo click</h2>     
            </section>
            
            <section id="busqueda">             
                <form action="#" method="get">
                        <input name="BUSCAR" type="search" placeholder="Audio o Artista"/>
                        <i class="icon-search" ></i>
                </form>           
            </section> 
            
            <br><br>

            <div id="containergeneral">
                <hr color="dodgerblue" size=1>
            <div id="textovideo">
                         <h5 id="videosemana">Video de la semana.</h5>
                <iframe class="ytb-embed" width="560" height="390" src="https://www.youtube.com/embed/-luZrricHSY?autoplay=1&rel=0&showinfo=0&controls=1" frameborder="0" allowfullscreen></iframe>
            </div>
            
            <br>
                
             <section id="artistas">
                <audio id="player" src="#" hidden="true"> </audio>
                <br>
                <h4>Nuevas Canciones</h4>
                <div class="containerartistas">
                    <div class="info-artistas">
                        <img id="song1" src="IMG/rose-min.jpg"  alt="">
                        <h5>test</h5> 
                    </div>
                 
                     <div class="info-artistas">
                        <img id="song2" src="IMG/NotesVortex.jpg" alt="">
                         <h5>test</h5> 
                    </div>
                    
                     <div class="info-artistas">
                        <img id="song3" src="IMG/rose-min.jpg" alt="">
                         <h5>test</h5>  
                    </div>
                    
                     <div class="info-artistas">
                        <img id="song4" src="IMG/NotesVortex.jpg" alt="">
                         <h5>test</h5>                         
                    </div>
                    
                     <div class="info-artistas">
                        <img id="song5" src="IMG/rose-min.jpg" alt="">
                         <h5>test</h5> 
                    </div>
                    
                     <div class="info-artistas">
                        <img id="song6" src="IMG/NotesVortex.jpg" alt="">
                         <h5>test</h5> 
                    </div>
                <hr color="dodgerblue" size=1>
                </div>
                
                 <hr color="dodgerblue" size=1>

                 <br>

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
            
    </body>
</html>