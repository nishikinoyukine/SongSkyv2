<!DOCTYPE html>
<html lang="es">
    <head>
        <title>SONGSKY</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="CSS/fontello.css">
        <link rel="stylesheet" href="CSS/userprofile.css">
        <link rel="stylesheet" href="CSS/reporte.css">
        <link rel="stylesheet" href="CSS/buscador.css"> 
        <link rel="stylesheet" href="CSS/styles.css">
        <link rel="stylesheet" href="CSS/styleSupport.css">
        <!--[if lte IE 8]><script src="js/respond.js"></script><![endif]-->
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
   

<style>

div#tabla_dos{
width:300px;
position:relative;
float: left;
height: auto;
}
</style>

    <body>
        <main>
        <div class="contieneBusqueda">
            <section id="busqueda"> 
                <form action="#" method="get">	
                </form>



            <div class="songsky"> 
                <h3>SONGSKY</h3>
            </div>
                        
            <div class="resumen">
                <caption>Musica a tu estilo</caption>
            </div>
            <div>
            <table id="busqueda">
                <form action="{{url('busqueda')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input name="BUSCAR" type="search" placeholder="Audio o Artista"/>
                        <i class="icon-search" ></i>
                </form>           
            </table>
            </div>

            <div id="tabla_uno">
            <table class="usercomentario" width="40%" cellspacing="10" cellpadding="2">             

                <tr>
                    <th><i class="icon-user">Canciones:</i></th>
                    <th></th>
                    <th></th>
                </tr>
            </table>

             @foreach ($Music as $musica)


             <table class="publicacion" width width="40%" cellspacing="10" cellpadding="2">                                      
                <tr>
                    <th><a href="repind?id={{$musica->id}}" title="PlayList" onclick="NewWindow(this.href,'name','320','500','yes');return false">{{ $musica->Nombre}}</a></th>
                </tr>
             </table>


      @endforeach 
      <table class="publicacion" width width="40%" cellspacing="10" cellpadding="2">                                         
                <tr>
                    <th>{!! $Music->links('simple-default') !!}</th>
                </tr>
            </table>
            </div>

            <div id="tabla_dos">
            <table class="usercomentario" width="40%" cellspacing="10" cellpadding="2">             

                <tr>
                    <th><i class="icon-user">Usuarios:</i></th>
                    <th></th>
                    <th></th>
                </tr>
            </table>

             @foreach ($usersearch as $busq)

             @if($busq->id == 1)
            
            @else
            <table class="publicacion" width width="40%" cellspacing="10" cellpadding="2">                                         
                <tr>
                    <th><a href="vperfil?hash={{$busq->id}}">{{ $busq->name}}</th>
                </tr>
             </table>
             @endif

      @endforeach 
      <table class="publicacion" width width="40%" cellspacing="10" cellpadding="2">                                         
                <tr>
                    <th>{!! $Music->links('simple-default') !!}</th>
                </tr>
            </table>
            </div>
            <div style="clear: both;"></div> 
</main>

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