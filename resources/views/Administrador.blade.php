
<!DOCTYPE html>
<html>
    <head>
        <title>SONGSKY</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="CSS/fontello.css">
        <link rel="stylesheet" href="CSS/userprofile.css"> 
        <link rel="stylesheet" href="CSS/menuser.css">   
        <link rel="stylesheet" href="CSS/portada.css"> 
         <link rel="stylesheet" href="CSS/administrador.css">
         <script src="js/jquery.js"></script>
           <link rel="stylesheet" href="CSS/styles.css">
        <!--[if lte IE 8]><script src="js/respond.js"></script><![endif]-->
        <script src="js/responsive-nav.js"></script>
         

    </head>

 <body>
     
     
     
     
     
        <main>
            
         <hr color="dodgerblue" size=1>
               
                
         @php

function convertYoutube($string) {
  return preg_replace(
    "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
    "<iframe width=\"560\" height=\"390\" src=\"//www.youtube.com/embed/$2?autoplay=1&rel=0&showinfo=0&controls=1\" allowfullscreen></iframe>",
    $string
  );
}      
               
@endphp
 @foreach($pub as $item)
{{ $text = $item->url_video }}  
@endforeach      
          <section id="formulario"> 
      <div>
      <p id="info"> SUBIR VIDEO</p>
        <p id="videosemana">Video de la semana Actual</p>
                @php
                echo convertYoutube($text);
                @endphp
        </div>
        <form METHOD=POST ENCTYPE="multipart/form-data" action="{{ url('addpub') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <p>Url de Video de Portada</p><input type="text" name="videourl">
              
               <p id="info"> PORTADA PRINCIPAL </p>
              <div class="contenedor2">
               <img id="imgport" src="IMG/cloudb.png" height="100" width="400" class="imagen2" /> 
              </div>

    
    <div class="subirimagen">
      
          <input id="bannerp" TYPE=FILE NAME="Bannerp">
              <input TYPE=submit VALUE="Subir">
    </div>
                     </form>
            
    </section>     
        
        
        
        
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
        
         <script type="text/javascript" > 


function mostrarImagen(input) {
 if (input.files && input.files[0]) {
  var reader = new FileReader();
  reader.onload = function (e) {
   $('#imgport').attr('src', e.target.result);
  }
  reader.readAsDataURL(input.files[0]); //Llevame al error
 }
}

$("#bannerp").change(function(){
 mostrarImagen(this);
});

</script>
        
        
    </body>
</html>
