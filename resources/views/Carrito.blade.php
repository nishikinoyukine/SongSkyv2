<html lang="es">
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
        <link rel="stylesheet" href="CSS/styleSupport.css"> 
        <!--[if lte IE 8]><script src="js/respond.js"></script><![endif]-->
        <script src="js/responsive-nav.js"></script>
        <link rel="stylesheet" href="CSS/styles.css">
        <link rel="stylesheet" href="CSS/reporte.css">
        <link rel="stylesheet" href="CSS/editormusica.css">
        <link rel="stylesheet" href="CSS/carrito.css"> 
    </head>


    <body>
        <main>
            <section id="busqueda"> 
                <hr color="dodgerblue" size=3>
                <form action="#" method="get">	
                </form>           
              
        
            <div class="carritodecomprita">
		        <a class="home" href="#" title="Volver a Inicio"><i class="icon-home"></i></a>
			    <span class="navigation-pipe">&gt;</span>
					Tu carrito de compra	
            </div>

            <h3>RESUMEN DE COMPRA</h3>
        
            <div class="resumen">
                <caption>01. Resumen</caption>
            </div>
        
            <div class="contieneTablaCarrito">
            <section id="tablacarrito">
                <table summary="Tabla">
                    <tr>
                        <th scope="row" abbr="producto">Producto</th>
                        <th scope="row" abbr="descripcion">Descripcion</th>
                        <th scope="row" abbr="disponibilidad">Disponibilidad</th>
                        <th scope="row" abbr="total">Total</th>
                    </tr>
            
                    <TR>
                        <TD><img src="../IMG/PokeRadioStation.jpg" height='200' width='300'></TD>
                        <TD>Pokemon Sol</TD>
                        <TD>Descarga Premium</TD>
                        <TD>$100</TD>
                    </TR>
                    
                    <tr>
                        <th colspan="2" ></th>
                        <td>Subtotal</td>
                        <td>100</td>
                    </tr>
 
                    <tr>
                        <th colspan="2" ></th>
                        <td>IVA</td>
                        <td>16</td>
                    </tr>
 
                    <tr>
                        <th colspan="2" ></th>
                        <td>TOTAL</td>
                        <td>116</td>
                    </tr>
                </table>
            
            </section>
            </div>

            <a href="index.php" class="button blue medium radius">
		        <span class="icon-check"></span>Borrar Carrito
	        </a>    
            
            <!--<a href="CTarjeta.php" class="button blue medium radius">-->
            <a href="#" class="button blue medium radius">
		        <span class="icon-check"></span>Pasar a Pagar
	        </a>

            <header>
                <div class="contenedor">
                    <h1 class="icon-cloud-1">SONGSKY</h1>
                    <div id="nav">
                        <ul>
                            <li><a href="index.php">Home</a></li> 
                            <li><a href="Login.php">Login</a></li>
                            <li><a href="UserProfile.php">Perfil</a></li>
                            <li><a href="#">About</a></li>
                        </ul>
                    </div>  
                    <button id="nav-toggle">Menu</button>
                </div>    
            </header>
            
        </section>    
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
