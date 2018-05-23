<?php echo '
<div class="card">
	<div class="card-content" >                
		<span class="card-title">Datos de Nueva Empresa</span>

		    <p>Esta empresa esta ubicada en: <strong>'.$_GET['pais_name'].'</strong></p>
		      <form method="POST" action="nuevaEmpresa.php">
		          <input type="text" hidden name="pais_id" id="pais_id" value="'.$_GET['pais_id'].'">  
		          <input type="text" placeholder="Nombre de la empresa" name="empresanom" id="empresanom" required>  
		          <a class="waves-effect waves-light btn" onclick="nuevaEmpresa(pais_id.value,empresanom.value);" >Agregar empresa</a>
		      </form>
		      <div id="nuevaEmpresaDatos"></div>

		      </div>
		    </div>  

'; ?>