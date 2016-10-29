<!DOCTYPE html>
<head>
     <title>Lista de Reproducion</title>
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
</head>

<body>
<main>
  <div class="contieneCreaLista">
  <section>
  <div>
    <div class="carritodecomprita">
      <a class="home" href="index.php" title="Volver a Inicio"><i class="icon-home"></i></a>
      <span class="navigation-pipe">&gt;</span>
          Crear lista de reproduccion
    </div>
    <br>

    <form id="addsong" name="addsong" action="#" method="post">
    <div class="estiloDiv01">
    <div class="dentroCreaLista">
      <h3>Agregar a Lista de Reproduccion</h3>
      <h2>Lista</h2>
      <select name="Namalst" id="">
			  <option value="1" selected='selected'>"Lista</option>
      </select>

      <br><br>   
 
      <h2>Canciones</h2>
      <select name="Namae" id="">
		    <option value="2" selected='selected'>Cancion de Prueba</option>
      </select>

      <br><br>   

      <!--<input type="image" src="IMG/ready.png" onclick="submitForm('jsp/addtolist.jsp')" width="200" />-->
      <input type="image" src="IMG/ready.png" onclick="submitForm('index.jsp')" width="200" />
    </div>
    </div>
    </form>

    <br>
    <br>

  </div>
  
  <div>
    <form>
      <div class="estiloDiv01">
      <div class="dentroCreaLista">
      <h3>Crear Lista de Reproduccion</h3><br>
      <input type="text" id="nalis" name="nalis" placeholder="Nombre de Lista"><br><br>
      <input type="image" src="IMG/ready.png" onclick="submitForm('php/newlist.php')" width="200" /><br>
      </div></div>
    </form>

    <br><br>
      <a href="UserProfile.php"><img src="IMG/cancelarbtn_02.png"width="200" /></a>
    
  </div>

  <!--<input type="cancel" alt="cancel">-->
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
  function submitForm(action){
    document.getElementById('addsong').action = action;
    document.getElementById('addsong').submit();
  }
</script>

<script>
  var navigation = responsiveNav("#nav", {
    customToggle: "#nav-toggle"
  });
</script>

</body>
</html>