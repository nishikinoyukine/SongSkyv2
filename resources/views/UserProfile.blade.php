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
        <link rel="stylesheet" href="CSS/styles.css">
         <link rel="stylesheet" href="CSS/audioplayer.css"> 
         <link rel="stylesheet" href="CSS/demo.css"> 
         <link rel="stylesheet" href="CSS/styleSupport.css">
         <script src="js/responsive-nav.js"></script>
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
<!-- ----------------------------------------------------------------------------------------------------------------------------------------
                                                                                    YA CON ESTILO CORREGIDO
     ----------------------------------------------------------------------------------------------------------------------------------------    -->
    <body>
        <main>
        <br><br>
            <section id="busqueda">
                        <!--<div><input class="homebtn" type="image" src="IMG/home2.png" height="50" width="50" name="commit" onclick="VolverHome()"></div>Agregado 16 de Septiembre, apv; Botón para volver al main; relacionada con css y js SUPPORT-->

                <form action="Buscador.php" method="get">	                           
                    <input type="search" name="BUSCAR" placeholder="Audio o Artista"><i class="icon-search" ></i>	                           
                </form>           
            </section>   

            <section id="portada">
                <img src="upload/{{ Auth::user()->Banner_Image }}">       
            </section>            
            <section id="batman">
                <div class="foto">
                   <img src="upload/{{ Auth::user()->Personal_Image }}" height="200" width="200" class="imagen" />                                
                </div>
            </section>
           
            <div class="usertext">                
                <h1>¡Hola de nuevo {{ Auth::user()->name }} ! </h1>
            </div> 

            <p id="recuerda">¡Recuerda que puedes empezar tu nueva experiencia Premium en tan solo unos pasos!</p>

            
             @if (Auth::guest())
             @else
                <hr color="dodgerblue" size=1>
                <div class="menudes">
                    <a href="editM">Administrar Grabaciones</a>
                    <a href="uploadM">Subir Contenido</a>
                    <a href="EditPi">Edicion de Imagenes Perfil</a>
                    <div class="marca"></div>
                </div>
                @endif
		<p id="idp" hidden="true" value="0">idm</p>

<br>

<section id="generosmusic">
                <h3>Playlist</h3>
                <div class="containergeneros">
                    <div class="info-generos">
                        <a href="php/repmusica.php?idp=1" title="PlayList" onclick="NewWindow(this.href,'name','240','500','yes');return false"><img src="IMG/list2.jpg"></a>
                        
                        <h5>PokeLista1</h5> 
                    </div>
                    
                     <div class="info-generos">
                     <a href="php/repmusica.php?idp=2" title="PlayList" onclick="NewWindow(this.href,'name','240','500','yes');return false"><img src="IMG/list3.jpg"></a>
                    
                         <h5>PokeLista2</h5> 
                    </div>
                    
                     <div class="info-generos">
                     <a href="php/repmusica.php?idp=3" title="PlayList" onclick="NewWindow(this.href,'name','240','500','yes');return false"><img src="IMG/list4.jpg"></a>
                    
                         <h5>PokeLista3</h5> 
                    </div>
                    
                     <div class="info-generos">
                        <a href="php/repmusica.php?idp=4" title="PlayList" onclick="NewWindow(this.href,'name','240','500','yes');return false"><img src="IMG/list5.jpg"></a>
                        
                         <h5>PokeLista4</h5> 
                    </div>
                    
                     <div class="info-generos">
                        <a href="php/repmusica.php?idp=5" title="PlayList" onclick="NewWindow(this.href,'name','240','500','yes');return false"><img src="IMG/list6.jpg"></a>
                       
                         <h5>PokeLista5</h5> 
                    </div>
                    
                     <div class="info-generos">
                        <a href="php/repmusica.php?idp=6" title="PlayList" onclick="NewWindow(this.href,'name','240','500','yes');return false"><img src="IMG/list7.jpg"></a>
                       
                         <h5>PokeLista7</h5> 
                    </div>
                    
                     <div class="info-generos">
                        <a href="php/repmusica.php?idp=7" title="PlayList" onclick="NewWindow(this.href,'name','240','500','yes');return false"><img src="IMG/list8.jpg"></a>
                        
                         <h5>PokeLista8</h5> 
                    </div>

                        <div class="info-generos">
                         <a href="Createlist.php"><img src="IMG/list1.jpg" alt=""></a>
                         <h5>Agregar Nueva Lista</h5> 
                         </div>
                         </div>   
              <hr color="dodgerblue" size=1>
</section>

<br><br>

<section id="artistas">
        <h4>Las Mas Nuevas</h4>
        <div class="containerartistas">
            <div class="info-artistas">
                <img src="IMG/NotesVortex.jpg" alt="">
                <h5>PokeSong1</h5> 
            </div>
                    
            <div class="info-artistas">
                <img src="IMG/rose-min.jpg" alt="">
                <h5>PokeSong2</h5> 
            </div>
                    
            <div class="info-artistas">
                <img src="IMG/NotesVortex.jpg" alt="">
                <h5>PokeSong3</h5> 
            </div>
                    
            <div class="info-artistas">
                <img src="IMG/rose-min.jpg" alt="">
                <h5>PokeSong4</h5> 
            </div>
                    
            <div class="info-artistas">
                <img src="IMG/NotesVortex.jpg" alt="">
                <h5>PokeSong5</h5>  
            </div>
                    
            <div class="info-artistas">
                <img src="IMG/rose-min.jpg" alt="">
                <h5>PokeSong7</h5>  
            </div>
                    
            <div class="info-artistas">
                <img src="IMG/NotesVortex.jpg" alt="">
                <h5>PokeSong8</h5>  
            </div>
                    
            <div class="info-artistas">
                <img src="IMG/rose-min.jpg" alt="">
                <h5>PokeSong9</h5> 
            </div>
            <hr color="dodgerblue" size=1>
        </div>




    <hr color="dodgerblue" size=1>
</section>

    <hr color="dodgerblue" size=1>

<!--     ----------------------------------------------------------------------------------------------------------------------     -->

<!--<form  name='comenta' action="jsp/comenta.php" method="post" >-->
<form  name='comenta' action="index.php" method="post" >
    <section id="comentarios" style="display:inline-block">
                         
        <div class="seccionComenta" style="display:inline-block">
            <h6>Caja De Comentarios</h6>                  
            <textarea class="txaCom" name='comentario' rows='15' cols='40' placeholder="Deja un comentario a Invitado ..."></textarea>
            <a href="#" class="button blue medium radius">
	           <span  class="icon-comment-empty" onclick="comenta.submit()">Enviar</span>        
            </a>
        </div> 


<!--     ----------------------------------------------------------------------------------------------------------------------     -->
        
        <br>

        <div class="listacomentarios"  style="display:inline-block">
            <table class="usercomentario" width="40%" cellspacing="10" cellpadding="2">             
                <tr>
                    <th><i class="icon-user">Anony1</i></th>
                    <th></th>
                    <th></th>
                </tr>
            </table>

            <table class="publicacion" width width="40%" cellspacing="10" cellpadding="2">                                         
                <tr>
                    <th>Comento algo Gracioso</th>
                </tr>
            </table>

            <table class="usercomentario" width="40%" cellspacing="10" cellpadding="2">        
                <tr>
                    <th><i class="icon-user">Anony2</i></th>
                    <th></th>
                    <th></th>
                </tr>
            </table>

            <table class="publicacion" width width="40%" cellspacing="10" cellpadding="2">                                         
                <tr>
                    <th>soy un anonimo xD</th>
                </tr>
            </table>            
        </div>    
    </section>
</form> 

<br><br>

 <header>
            <div class="contenedor">
                <h1 class="icon-cloud-1">SONGSKY</h1>
                <div id="nav">
                  <ul>
                    <li><a href="{{ url('/') }}">Home</a></li> 
                    @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a <a href="{{ url('/register') }}">Registrate</a></li>
                    @else
                            <li><a href="{{ url('/Perfil') }}">Perfil</a></li>
                            <li><a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a></li>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                    @endif
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

        <script src="js/scriptSupport.js"></script>           
    </body>
</html>