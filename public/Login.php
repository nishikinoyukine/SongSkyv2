<html lang="es">
    <head>
        <title> SongSky </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="CSS/main.css">
        <link rel="stylesheet" href="CSS/styleSupport.css">   
        <script src="js/sha1-min.js" type="text/javascript"></script>        
    </head>
    
    <body>
         <video  src="Video/BGlogin01.mp4" autoplay loop muted></video>     
    
         <main>          
            
            <div class="content h1">         
			
		 <h1 align="center" >Bienvenido a SongSky</h1>
      <form  name="formLogIn" action="UserProfile.php" method="post" onsubmit="return validarLI()">
          <p align="center"><input class="textbox" type="text" name="login" value="" placeholder="Username or Email"></p>
          <p align="center"><input class="textbox" id="pass" type="password" name="password" value="" placeholder="Password"></p>
        <p align="center" class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Recordarme
            <input type="text" id="passhash" name="passwordhash" style="visibility:hidden">
          </label>
        
        </p>
      
        
      <p align="center" style="font-size:15px ; font-family :  tahoma ; color: cyan ">Olvidaste tu contraseña?
          <a href="#">Click aqui para recuperar</a>.</p>
    

      <p align="center" class="submit"><input class="loginbtn" type="image" src="IMG/login.png" name="commit" onclick="document.getElementById('passhash').value = hex_sha1(document.getElementById('pass').value)"></p>
         
         <br>
         <p align="center" style="font-size:15px ; font-family :  tahoma">
         SongSky &copy; 2016.
          <br>
         YukiSoft &reg; 2016.
         </p>
      </form>       
      
      <br>
      <div><input class="homebtn2" type="image" src="IMG/home2.png" height="50" width="50" onclick="VolverHome()"></div><!--Agregado 16 de Septiembre, apv; Botón para volver al main; relacionada con css y js SUPPORT-->

    </div>
            
            
            
        </main>
         
        <script src="js/scriptSupport.js"></script>
    </body> 
 </html>
