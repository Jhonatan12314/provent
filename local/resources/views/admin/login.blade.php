<html class="black">
    <head lang="en" >
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="Mara Admin Templates">
        <title>VEAGN - Login</title>
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon32x32.ico">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{url('public/css/material-design-iconic-font.css')}}">

        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{{url('public/backend/css/mara.min.css')}}"  media="screen"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body class="black">
        <div class=" center signin-page"  id="full-page">
            <div class=" black white-text signin-content">
                <h1 class="center-align mTitle" style="font-family: BaronFont">VEAGN</h1>
                <div class=" white signUpContainer center">
                    <div class="signUpContent">
                        <form method="post">
                             @if(isset($_GET['error']))
                            <div class="card-panel white-text red lighten-2">Usuario o contrase&ntilde;a invalida</div>
                            @endif
                            <div class="input-field" style="margin-top: 50px;">
                                <input id="email" name="user" type="text" class="validate black-text">
                                <label for="email" class="left-align">Usuario</label>
                            </div>
                            <div class="input-field">
                                <input id="password" name="password" type="password" class="validate black-text">
                                <label for="password" class=" left-align">Contrase&ntilde;a</label>
                            </div>
                            <p>
                               
                            </p>

                           
                            <button type="submit" class="waves-effect waves-light btn signInButton">Entrar</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
       <script type="text/javascript" src="{{url('public/js/materialize.js')}}"></script>
        <script src="{{url('public/backend/js/mara.min.js')}}" type="text/javascript"></script>
    </body>
</html>

