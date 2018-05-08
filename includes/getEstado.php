

<?php
	 //obtener pais

	require ('conexion.php');

	echo '<select  onChange="getMunicipio(this.value);" name="cbx_pais" id="cbx_pais" placeholder="Selecciona un País">';

	//$query = "SELECT `id-pais`, `pais-nom` FROM `pst-pais` ORDER BY `pais-nom`";
	$query = "SELECT `pais-id`, `pais-nom` FROM `pst-pais` ORDER BY `pais-nom`";

//	SELECT * FROM `pst-pais` WHERE `pais-id` = 2

	if($resultado=$mysqli->query($query))
	{
		?>
		<option value="" >Área Cobertura Región PGRD COPECO</option>

		<?php
		while($row = $resultado->fetch_assoc())
		{
		?>
		<option value="<?php echo $row['pais-id']; ?>"><?php echo $row['pais-nom']; ?></option></div>

		<?php
		}
	}
	echo '</select>';

?>
