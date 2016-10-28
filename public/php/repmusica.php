<html lang="es">
<head>
    <title>Playlist</title>
     <meta charset="UTF-8">
     <script src="../js/jquery.js"></script>
</head>
<body bgcolor="#000000" onResize="window.resizeTo(250,500)">
    <img id="disco" src="../IMG/play1.png" height="200" width="300"><br>
    <audio id="player1" preload="auto" controls loop>
				<source src="../upload/yuriyuri.mp3">
			</audio>    

<table border=1>

<tr><th><font color='#FFFFFF'>Nombre</font></th><th><font color='#FFFFFF'>Reproducir</font></th><th><font color='#FFFFFF'>Agregar Carrito</font></th></tr>



<tr>
        
<td>   
        
<font color='#FFFFFF'>song</font>

</td><td>


<img id="upload/yuriyuri.mp3" src="../IMG/Play.png">

</td><td>

</table>




 <script>
      function CargarSong(input) {
  if (document.getElementById('player1').paused) {
          $('#player1').attr('src', input);
          document.getElementById('player1').play();        
      } else {
        document.getElementById('player1').pause();
        document.getElementById('player1').currentTime = 0;
      }
}  

function caratula(input) {
          $('#disco').attr('src', input);
}  

  
 </script>
 </body>
 </html>