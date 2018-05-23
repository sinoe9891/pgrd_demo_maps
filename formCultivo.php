<?php session_start();
if( !isset( $_SESSION['uid'] ) )
{
  header('Location: acceso.php');
  die();

}?>

<html>
	<head>
		    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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


//////////////////////////////



</style>


		<!--  <link rel="stylesheet" href="css/style.css">-->
	</head>


	<body>


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
        
	<div>
		<h4>Datos de Nuevo Cultivo</h4>
		<p>Este Cultivo pertenece a : <strong><?php echo $_GET["aTName"]." ".$_GET["rubroName"] ;?></strong></p>
        <form method="POST" action="includes/new/nuevoCultivo.php">
            <input type="text" hidden name="id_rubro" value="<?php echo $_GET['id_rubro'] ;?>"> 
               
        		<input type="text" placeholder="Nombre del Cultivo" name="cultivo_nom" required>	
        		<input type="submit" value="Agregar Cultivo"  >
        </form>

		</div>


       </div>  
        
       <div class="row">
           
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




