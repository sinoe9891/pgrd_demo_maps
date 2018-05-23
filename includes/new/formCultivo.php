<?php  
echo '<div class="card">
	<div class="card-content" >                
		<span class="card-title">Datos de Nuevo Cultivo</span>
		<p>Este Cultivo pertenece a : <strong>'.$_GET["aTName"].' '.$_GET["rubroName"].'</strong></p>
        <form method="POST" action="includes/new/nuevoCultivo.php">
            <input type="text" hidden name="id_rubro" id="id_rubro" value="'.$_GET['id_rubro'].'"> 
            <input type="text" hidden name="aTName" id="aTName" value="'.$_GET['aTName'].'"> 
            <input type="text" hidden name="rubroName" id="rubroName" value="'.$_GET['rubroName'].'">    
        	<input type="text" placeholder="Nombre del Cultivo" name="cultivo_nom" id="cultivo_nom" required>
        	<a class="waves-effect waves-light btn" onclick="nuevoCultivo(id_rubro.value,rubroName.value,aTName.value,cultivo_nom.value);" >Agregar Cultivo</a>	
        </form>
		      </div>
		    </div>  
';  

	
 ?> 