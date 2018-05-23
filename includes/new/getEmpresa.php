<?php
// Coneccion base de datos 
	require ('../conexion.php');
	


		$pais_id = $_GET['pais_id'];
	

// Select Empresa directo de la base de datos 

	echo '<select onchange="getAreaTematica();" name="new-empresa" id="new-empresa" placeholder="Selecciona una Empresa">';
	
	$query = "SELECT * FROM `pst-empresa` INNER JOIN `pst-inter-emp-pais` WHERE `pst-empresa`.`emp-id` = `pst-inter-emp-pais`.`emp-id` AND `pst-inter-emp-pais`.`emp-pais-id`=".$pais_id."";


	if($resultado=$mysqli->query($query))
	{
		?>
		<option value="" >Seleccione una Empresa</option>
		
		<?php
		while($row = $resultado->fetch_assoc())
		{
		?>
		<option value="<?php echo $row['emp-id']; ?>"><?php echo $row['emp-nom']; ?></option></div>
		
		<?php
		}
	}
	echo '</select>
			 <a class="waves-effect waves-light btn" onclick="getFormEmpresa(newpais.value,newpais.options[newpais.selectedIndex].text);">Nueva Empresa</a>
	';

?>