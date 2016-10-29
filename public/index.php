<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>SONGSKY</title>
        <link rel="stylesheet" href="CSS/fontello.css">
        <link rel="stylesheet" href="CSS/userprofile.css">
        <link rel="stylesheet" href="CSS/banner.css">   
        <link rel="stylesheet" href="CSS/publicidad.css"> 
        <link rel="stylesheet" href="CSS/demo.css"> 
        <link rel="stylesheet" href="CSS/infomusica.css"> 
        <link rel="stylesheet" href="CSS/styleartistas.css">
        <link rel="stylesheet" href="CSS/styles.css">
        <link rel="stylesheet" href="CSS/menuser.css">
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
                <p id='invitado' > BIENVENIDO: <a href='index.php'> Invitado.</a> </p>  
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
                    <li><a href="index.php">Home</a></li> 
                    <li><a href="Login.php">Login</a></li>
                    <li><a href="registro.php">Registrate</a></li>
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
