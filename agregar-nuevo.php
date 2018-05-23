
<?php session_start();
if( !isset( $_SESSION['uid'] ) )
{
  header('Location: acceso.php');
  die();

}?>
<html>
	<head>
		<meta charset="utf-8" />
		    <meta http-equiv="Content-Type" content="text/html; charset=utf-8_spanish_ci" />
		    <title>Pasantías | Universidad Zamorano</title>
		    <link rel="icon" href="./img/favicon.png" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="css/materialize/css/materialize.min.css">
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <script src="includes/js.js" charset=utf-8></script>
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

select{margin-top: 15px;}
//////////////////////////////



</style>


		<!--  <link rel="stylesheet" href="css/style.css">-->
	</head>


	<body onload="getPais();">


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
        <div class="col s12 m12 l12">
        <h4 align="center">Pasantías <?php echo date('Y');?></h4> 
        </div>
    </div>


        <div class="row" >
              <div class="input-field col s12  m12 l6">
              <div class="card">
                <div class="card-content">
                <span class="card-title">Agregar Nueva </span>
                     <form method="POST" action="includes/new/nuevaPasantia.php" enctype="multipart/form-data" >
                        <div id="paisList"></div> 

                        <div id="empresaList"></div> 

                        <div id="atlist"></div> 

                        <div id="rubroList"></div>

                        <div id="cultivoList"></div>

                         <div id="buttonnew"></div>
                       </form>
                 </div>
                </div> 
              </div>
          
            <div class="input-field col s12  m12 l6" id="formEmpresa"> 

              
                
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
              <div class="col l4 offset-l2 s12">
               
                <ul>
                  <?php if (!isset( $_SESSION['uid'] )) {?>
                  # code...
                
                  <li><a class="grey-text text-lighten-3" href="acceso.php">Log in</a></li>
                <?php }elseif (isset( $_SESSION['uid'] )) {?> 
                  <li><a class="grey-text text-lighten-3" href="logout.php">Log out</a></li>
                <?php } ?>  
                  <li><a class="grey-text text-lighten-3" href="index.php">Buscar Pasantías</a></li>
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
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

         <script type="text/javascript" src="css/materialize/js/materialize.min.js" ></script>
	</body>
</html>
