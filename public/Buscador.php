<%-- 
    Document   : Buscador
    Created on : 14/05/2016, 07:36:30 AM
    Author     : Yukine Sugiura
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>SONGSKY</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="CSS/fontello.css">
        <link rel="stylesheet" href="CSS/userprofile.css">
        <link rel="stylesheet" href="CSS/reporte.css">
        <link rel="stylesheet" href="CSS/buscador.css"> 
        <link rel="stylesheet" href="CSS/styles.css">
        <link rel="stylesheet" href="CSS/styleSupport.css">
        <!--[if lte IE 8]><script src="js/respond.js"></script><![endif]-->
        <script src="js/responsive-nav.js"></script>
    </head>
    
    <body>
        <main>
        <div class="contieneBusqueda">
            <section id="busqueda"> 
                <form action="#" method="get">	
                </form>


            <div class="carritodecomprita">
			     <a class="home" href="https://google.com/" title="Volver a Inicio"><i class="icon-home"></i></a>
			     <span class="navigation-pipe">&gt;</span>			
            </div>

            <div class="songsky"> 
                <h3>SONGSKY</h3>
            </div>
                        
            <div class="resumen">
                <caption>Musica a tu estilo</caption>
            </div>
        
            <table id="busqueda">
                <form action="#" method="get">	
                    <input type="search" placeholder="Audio o Artista" class="busqMarq">		    	
                    <i class="icon-search" ></i>
                </form>  
            </table>

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
            
        </section>
        </div>
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