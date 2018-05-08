<html>
	<head>
		<meta charset="utf-8" />
		    <meta http-equiv="Content-Type" content="text/html; charset=utf-8_spanish_ci" />
		    <title>Pasantías | Universidad Zamorano</title>
		    <link rel="icon" href="./img/favicon.png" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="css/materialize/css/materialize.min.css">
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <script src="includes/js.js"></script>
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
    
      <div class="col s12 m12 l12"> <h4 align="center">Búsqueda de Pasantías </br><?php echo date('Y'); ?></h4> </div>
    </div>
  
        <form name="form1" action="">

        <div class="row">

          <div class="input-field col s4 m12 l4" id="estadoList"></div> 
          
          <div class="input-field col s4 m12 l4" id="municipioList"></div>
          
          <div class="input-field col s4  m12 l4" id="rubroList"></div>

    </div>


          <div class="row" id="pasantiaList"></div> 
  
        
  
      </form>           
         
      </div>
               
  </main>


<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <a class="grey-text text-lighten-3" href="#!"><h5 class="white-text">Universidad Zamorano</h5>
                <p class="grey-text text-lighten-4">Comprometidos a Alimentar el Mundo</p></a>
              </div>
              <div class="col l4 offset-l2 s12">
               
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Login</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Zamomail</a></li>
                 
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 Copyright CPA, Universidad Zamorano.
           
            </div>
          </div>
        </footer> 
         <script type="text/javascript" src="css/materialize/js/materialize.min.js" ></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


	</body>
</html>
