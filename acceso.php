<html>
	<head>
		    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		    <title>Pasantías | Universidad Zamorano</title>
		    <link rel="icon" href="./img/favicon.png" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="css/materialize/css/materialize.min.css">
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <script src="includes/js.js" charset="utf-8"></script>
        <style type="text/css">
            body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }

  footer.page-footer {
    
    background-color: #931919;
}
nav {
    background-color: #008341;
}
.body{
  display: inline-block;
    text-align: center;
    width: 60%;
    vertical-align: middle;
}
.container{text-align: center;}

.material-icons.orange600{color: #e8ac35}

@media only screen and (max-width: 800px) {
    .body{
  display: inline-block;
    text-align: center;
    width: 100%;
    vertical-align: middle;
}
.container{text-align: center;}
}
        </style>

		<!--  <link rel="stylesheet" href="css/style.css">-->
	</head>


	<body onload="getEstado();">


      <nav style="height: 150px">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo center">
      <img  src="img/logos-deptos-Blancos-10.png">
      </a>
    </div>
  </nav>


    

  <main class="container">
    <div>
    <div class="row">
    
      <div class="col s12 m12 l12"> <h4 align="center">Pasantías <?php echo date('Y'); ?></h4> </div>
    </div>
  
    <div id="login-page" class="row body">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" action="includes/login.php" method="POST">
        <div class="row">
          <div class="input-field col s12 center">
            <i class="large material-icons orange600">verified_user</i>
            <h5 class="center login-form-text">Iniciar Sesión</h5>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input name="user" id="username" type="text" placeholder="Nombre de Usuario">  
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input name="password" id="password" type="password" placeholder="Contraseña">
          </div>
        </div>
        
            <div class="row">
                <div class="input-field col s12">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Acceder
              <i class="material-icons right">check</i>
            </button>
              </div>
        </div>

      </form>
    </div>
  </div>
      </div>
               
  </main>


<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <a class="grey-text text-lighten-3" href="#!"><h5 class="white-text">Universidad Zamorano</h5>
                <p class="grey-text text-lighten-4">Comprometidos a Alimentar el Mundo</p></a>
              </div>
              
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 Copyright CPA, Universidad Zamorano.
           
            </div>
          </div>
        </footer> 
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

         <script type="text/javascript" src="css/materialize/js/materialize.min.js" ></script>
	</body>
</html>
