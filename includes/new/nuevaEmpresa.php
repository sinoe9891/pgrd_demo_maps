<?php

	require ('../conexion.php');

	$pais_id = $_GET['pais_id'];
	$empresa_nom = $_GET['empresa_nom'];
	
	$query =  "INSERT INTO `pst-empresa`(`emp-id`, `emp-nom`, `emp-dsc`) VALUES ('','".$empresa_nom."','EMP')";

	if ($mysqli->query($query) === TRUE) {
     	$resultado = $mysqli->query("SELECT MAX(`emp-id`) AS id FROM `pst-empresa`");
		while($row = $resultado->fetch_assoc())
				{
				$id = $row['id'];
				}
				
				$query =  "INSERT INTO `pst-inter-emp-pais`(`emp-pais-id`, `emp-id`) VALUES (".$pais_id.",".$id.")";

				if ($mysqli->query($query) === TRUE) {
					echo '<div class="card">
							<div class="card-content" >                
							<span class="card-title">Empresa Ingresada!</span>
					      </div>
					    </div> ';
					} else {
			    		echo "Error: No se pudo insertar la tabla intermedia";
					}
	}else{
		echo "Error: No se pudo escribir la empresa";
	}
	?>