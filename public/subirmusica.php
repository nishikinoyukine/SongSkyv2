
<!DOCTYPE html>
<head>
        <title>SONGSKY</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="CSS/fontello.css">
        <link rel="stylesheet" href="CSS/userprofile.css">
        <link rel="stylesheet" href="CSS/portada.css"> 
        <link rel="stylesheet" href="CSS/menuser.css">  
        <link rel="stylesheet" href="CSS/publicidad.css"> 
        <link rel="stylesheet" href="CSS/infomusica.css"> 
             <!--[if lte IE 8]><script src="js/respond.js"></script><![endif]-->
        <script src="js/responsive-nav.js"></script>
        <link rel="stylesheet" href="CSS/styles.css">  
    
        <link rel="stylesheet" href="CSS/reporte.css">
         <link rel="stylesheet" href="CSS/editormusica.css"> 
    </head>
    <body>
    <main>
        
         <section id="busqueda"> 
             <hr color="dodgerblue" size=3>
                        <form action="#" method="get">	
                            
                        
                           
                </form>           
                </section>  
        
        <div class="carritodecomprita">
			<a class="home" href="index.php" title="Volver a Inicio"><i class="icon-home"></i></a>
			<span class="navigation-pipe">&gt;</span>
					Subir Cancion
</div>

        
        
        <h3>Creador de Contenido</h3>
        
        <div class="resumen">
        <caption>01. Rellena todos los campos</caption>
            </div>
        
        
     <div class="contenido">
			<br><br>
			<div class="formulario">
			    <form method="post" action="UserProfile.php" ENCTYPE="multipart/form-data">
			        Archivo: 
			        <input type="file" name="archivo" /> <br><br>
			        Titulo:
			        <input type="text" name="titulo" /> <br><br>
			        Imagen Disco: 
			        <input type="file" name="Disco" /> <br><br>
			        Tipo:
			         <select name="genero" id="">
			            <option value=“1” selected="selected"> Público </option>
                        <option value=“2”> Premium </option>                     		            
			        </select><br><br>
			           Precio:
			            <input type="text" name="precio"><br><br>
			            <a href="UserProfile.php"><img src="IMG/cancelarbtn_02.png" alt="" width="200"></a>
                                    <input type="image" src="IMG/ready.png" alt="Submit Form" width="200" />
			          
			        
			    </form>
			</div>
			
		</div>
        
            
            
            
            
            
            
            
            
       
        
        
        
        
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
    </main>
</html>