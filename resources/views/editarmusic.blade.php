
<!DOCTYPE html>
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
             <!--[if lte IE 8]><script src="js/respond.js"></script><![endif]-->
        <script src="js/responsive-nav.js"></script>
        <link rel="stylesheet" href="CSS/styles.css">
        <link rel="stylesheet" href="CSS/reporte.css">
         <link rel="stylesheet" href="CSS/editormusica.css"> 
    </head>\
    <body>
        <main>
            <section id="busqueda"> 
                <hr color="dodgerblue" size=3>
                <form action="#" method="get">	
                            
                </form>           
            </section>  
        
            <div class="carritodecomprita">
			     <a class="home" href="{{ url('/') }}" title="Volver a Inicio"><i class="icon-home"></i></a>
			     <span class="navigation-pipe">&gt;</span>
					Editar Cancion
            </div>

            <h3>EDITOR DE CONTENIDO</h3>
        
            <div class="resumen">
                <caption>01. Rellena todos los campos</caption>
            </div>
    
            <div class="contenido">
			     <!--<hr>--><br><br>
			     <div class="formulario">

			        <form class="form-horizontal" role="form" method="POST" action="{{ url('editupsong') }}">
                        {{ csrf_field() }}
			            <div class="form-group">
  {!! Form::Label('item', 'Cancion:') !!}
  <select class="form-control" name="item_id">
    @foreach($items as $item)
      <option value="{{$item->id}}">{{$item->Nombre}}</option>
    @endforeach
  </select>
</div>

                    <br><br>
			        
                        Titulo:
			             <input type="text" name="titulo" /> <br><br>
			             Tipo:
			             <select name="genero" id="">
			                 <option value=“Publico” selected="selected"> Público </option>
                            <option value=“Premium”> Premium </option>                     		            
			             </select><br><br>
			             Precio:
			             <input type="text" name="precio"><br><br>
			             <a href="{{ url('/Perfil') }}"><img src="IMG/cancelarbtn_02.png" alt="" width="200"></a>
			             <input type="image" src="IMG/ready.png" alt="Submit Form" width="200" />
			        
			        </form>
			    </div>			
		    </div>

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
    </body>
</html>