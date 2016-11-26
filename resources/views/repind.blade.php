<html lang="es">
<head>
    <title>Playlist</title>
     <meta charset="UTF-8">
     <script src="../js/jquery.js"></script>
</head>
<body bgcolor="#000000" onResize="window.resizeTo(325,500)">
    <img id="disco" src="../IMG/play1.png" height="200" width="300"><br>
    <audio id="player1" preload="auto" controls loop>
				<source src="">
			</audio>    

<table border=1>

<tr><th><font color='#FFFFFF'>Nombre</font></th><th><font color='#FFFFFF'>Reproducir</font></th><th><font color='#FFFFFF'>Agregar Carrito</font></th></tr>



<?php $sum = 1; ?>
 @foreach($items as $item)
<tr>
        
<td>   
        
<font color='#FFFFFF'>{{$item->Nombre}}</font>

</td><td>


<img id="Song{{$sum}}" src="../IMG/Play.png">
<?php $sum += 1; ?>
</td><td>                  
 @endforeach
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

 <?php $sum = 1; ?>
                   @foreach($items as $item)
                   $('#Song{{$sum}}').click(function() {
                   $(this).toggleClass("down");
                   CargarSong("upload/{{$item->url_song}}");
                   caratula("upload/{{$item->url_image}}")
                    });
                        <?php $sum += 1; ?>
                   @endforeach
  
 </script>
 </body>
 </html>