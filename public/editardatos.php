
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <title>Datos de Usuario</title> 
         <link rel="stylesheet" href="CSS/registro.css">
        <link rel="stylesheet" href="CSS/styles.css">
        <link rel="stylesheet" href="CSS/fontello.css">
        <link rel="stylesheet" href="CSS/userprofile.css">
        <link rel="stylesheet" href="CSS/styleSupport.css">
        <script src="js/jquery.js"></script>
        <script src="js/sha1-min.js" type="text/javascript"></script>
        <script src="js/responsive-nav.js"></script>
    </head>
    
<body>
    
<section id="formulario"> 

<!-- ---- -->

<div class="contieneFormR">

    <p id="titulo"> Edicion de Datos de Usuario</p>
    <p id="titulo2"> Actualiza Tus Datos </p>

    <form METHOD=POST ENCTYPE="multipart/form-data" action="UpdateU">
        <input type="text" id="nick" name="nick" placeholder="Nombre de usuario">

         <input type="text" id="nombre" name="nombre" placeholder="Nombre">

        <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos">


    <p id="info"> Datos Personales </p>
    
        <input type="text" id="calle" name="calle" placeholder="Calle">
        <input type="text"  id="num" name="num" placeholder="Numero">
        <input type="text" id="col" name="col" placeholder="Colonia">
        <input type="text" id="municipio" name="municipio" placeholder="Municipio">
        <input type="text" id="edo" name="edo" placeholder="Estado">
        <input type="text" id="cp" name="cp" placeholder="Codigo Postal">
     
    
    
    
    
    
     <p id="info"> Personaliza tu Avatar </p>
     <div class="contenedor1">
    <img id="mostrarimagen" src="../IMG/PokeRadioStation.jpg" height="200" width="200" class="imagen" />     
    </div>
        
    
    <div class="subirimagen">
      
          <input id="profileimg" TYPE=FILE NAME="profileimg">
              
              
              </form>
    </div>

    <br>
              
               <p id="info"> Personaliza tu Portada </p>
              <div class="contenedor2">
                  <img id="mostrarim" src= "../IMG/lumiose_city_artwork.png" height="100" width="400" class="imagen2" /> 
              </div>
    
    <div class="subirimagen">
      
          <input id="perfilim" TYPE=FILE NAME="Portadaimg">

             
    </div>
              
    
    <div class="registracion">
        <p id="notice">Al hacer click en Registrarse, aceptas los <a href="Terminos/legal.php" target="_blank">términos y condiciones</a> y la <a href="Privacidad/privacity.php" target="_blank">política de privacidad de SongSky.</a></p>       
      </div>
    
         <!--<div class="registracion">
             
             <p id="notice">Actualizar Datos Aceptas que son Reales conforme a nuestros <a href="/mx/legal/end-user-agreement/" target="_blank">términos y condiciones</a> y la <a href="/mx/legal/privacy-policy/" target="_blank">política de privacidad de SongSky.</a></p>       
        </div>-->
    
    <div class="registrate">
    <input type="submit" value="Actualizar">
    </div>
       </form>

  <form
    id="js-register-with-facebook"
    method="post"
    role="form"
    action="/mx/xhr/json/sign-up-for-spotify-fb.php">

    
    <input id="creation_flow" name="creation_flow" type="hidden" value="">

    <div class="content">
     
    </div>
  </form>

</div>

<!-- ---- -->

    </section> 
    
<header>
            <div class="contenedor">
                <h1 class="icon-cloud-1">SONGSKY</h1>
                <div id="nav">
                  <ul>
                    <li><a href="index.php">Home</a></li> 
                    <li><a href="index.php">Logout</a></li>
                    <li><a href="UserProfile.php">Perfil</a></li>
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
<script>
      var navigation = responsiveNav("#nav", {
        customToggle: "#nav-toggle"
      });
    </script>


</body>        
</html>

