<?php

	require ('../conexion.php');

	$ctv_nom = $_GET['cultivo_nom'];
	$id_rubro = $_GET['id_rubro'];
	
	$nuevoCultivo =  "INSERT INTO `pst-cultivos`(`ctv-id`, `ctv-nom`, `ctv-dsc`) VALUES ('','".$ctv_nom."','CTV')";

	if ($mysqli->query($nuevoCultivo) === TRUE) {
     	$resultado = $mysqli->query("SELECT MAX(`ctv-id`) AS id FROM `pst-cultivos`");
		while($row = $resultado->fetch_assoc())
				{
				$id = $row['id'];
		
				}
				
				$nuevoInterm =  "INSERT INTO `pst-inter-emp-cv`(`id-emp`, `id-cv`, `id-pais`, `pst-id-rb`) VALUES ('','".$id."','','".$id_rubro."')";

				if ($mysqli->query($nuevoInterm) === TRUE) {
					echo '<div class="card">
							<div class="card-content" >                
								<span class="card-title">¡Cultivo Ingresado!</span>
							</div>
		    			</div>  ';
					} else {
			    		echo "Error: No se pudo insertar la tabla intermedia";
					}
	}else{
		echo "Error: No se pudo escribir el cultivo";
	}
	?>