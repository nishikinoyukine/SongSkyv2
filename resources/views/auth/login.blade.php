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
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>    
      
      <br>
      <div><input class="homebtn2" type="image" src="IMG/home2.png" height="50" width="50" href="{{ url('/home') }}"></div><!--Agregado 16 de Septiembre, apv; Botón para volver al main; relacionada con css y js SUPPORT-->

    </div>
            
            
            
        </main>
         
        <script src="js/scriptSupport.js"></script>
    </body> 
 </html>

