<?php
// Coneccion base de datos 
	require ('../conexion.php');
	


// Select de País directo de la base de datos
	echo '<select onchange="getEmpresa(this.value);" name="newpais" id="newpais" placeholder="Selecciona un País">';
	
	$query = "SELECT `pais-id`, `pais-nom` FROM `pst-pais` ORDER BY `pais-nom`";


	if($resultado=$mysqli->query($query))
	{
		?>
		<option value="" >Seleccione un País</option>
		
		<?php
		while($row = $resultado->fetch_assoc())
		{
		?>
		<option value="<?php echo $row['pais-id']; ?>"><?php echo $row['pais-nom']; ?></option></div>
		
		<?php
		}
	}
	echo '</select>';
//this.options[this.selectedIndex].text

?>