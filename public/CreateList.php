
     <title>Lista de Reproducion</title>
     <link rel="stylesheet" href="CSS/fontello.css">
        <link rel="stylesheet" href="CSS/userprofile.css">
        <link rel="stylesheet" href="CSS/portada.css"> 
        <link rel="stylesheet" href="CSS/menuser.css">  
        <link rel="stylesheet" href="CSS/publicidad.css"> 
        <link rel="stylesheet" href="CSS/infomusica.css">  
     <!--[if lte IE 8]><script src="js/respond.js"></script><![endif]-->
        <script src="js/responsive-nav.js"></script>
        <link rel="stylesheet" href="CSS/styles.css">  
     <div>
    <form id="addsong" name="addsong" action="#" method="post">
    
  

                                    <h1>Agregar a Lista de Reproduccion</h1>
                                            <h2>Lista</h2>
                                <select name="Namalst" id="">
			       <option value="1" selected='selected'>"Lista</option>)
                                          		            
			        </select><br><br>   
 
                                   <h2>Canciones</h2>
                                <select name="Namae" id="">
			        
                               
                               <option value="2" selected='selected'>Cancion de Prueba</option>)");
                                                		            
			        </select><br><br>   

<input type="image" src="IMG/ready.png" onclick="submitForm('jsp/addtolist.jsp')" width="200" />
</from><br>
</div>
 
 
 <div>
<h1>Crear Lista de Reproduccion</h1>
<input type="text" id="nalis" name="nalis" placeholder="Nombre de Lista"><br>
<input type="image" src="IMG/ready.png" onclick="submitForm('php/newlist.php')" width="200" /><br>
<a href="UserProfile.php"><img src="IMG/cancelarbtn.png"width="200" /></a>

</form>
</div>
 
 <script>
    function submitForm(action)
    {
        document.getElementById('addsong').action = action;
        document.getElementById('addsong').submit();
    }
</script>

<input type="cancel" alt="cancel">

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