<!DOCTYPE html>
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
        <link rel="stylesheet" href="CSS/styleartistas.css"> 
         <link rel="stylesheet" href="CSS/audioplayer.css"> 
         <link rel="stylesheet" href="CSS/demo.css"> 
         <link rel="stylesheet" href="CSS/styleSupport.css">
         <script language="javascript">
function NewWindow(mypage,myname,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
win = window.open(mypage,myname,settings)             
}
</script>

    </head>
    <body>
        <main>
             <section id="busqueda">
                        <div><input class="homebtn" type="image" src="IMG/home2.png" height="50" width="50" name="commit" onclick="VolverHome()"></div><!--Agregado 16 de Septiembre, apv; Botón para volver al main; relacionada con css y js SUPPORT-->

                        <form action="Buscador.php" method="get">	                           
                        <input type="search" name="BUSCAR" placeholder="Audio o Artista"><i class="icon-search" ></i>	                           
                </form>           
                </section>               
            <section id="portada">
            <img src="IMG/lumiose_city_artwork.png">       
            </section>            
            <section id="batman">
            <div class="foto">
                   <img src="IMG/PokeRadioStation.jpg" height="200" width="200" class="imagen" />                                
                   </div>
                
                
            </section>
           
            <div class="usertext">                
                   <a href='Index.jsp'></h1></a>                   
                    <h1>¡Hola de nuevo Invitado! </h1>

                </div>  
            <p id="recuerda">¡Recuerda que puedes empezar tu nueva experiencia Premium en tan solo unos pasos!</p>

        <script src="js/scriptSupport.js"></script>           
    </body>
</html>
