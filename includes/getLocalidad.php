

<?php
	// obtener rubro

	require ('conexion.php');

	$id_areatematica = $_GET['municipio_id'];
	$id_pais = $_GET['pais_id'];
	//echo '<select name="cbx_rubro" id="cbx_rubro">';

	$query =  "SELECT `pst-rubro`.`rb-id`,`pst-rubro`.`rb-nom` FROM `pst-rubro` INNER JOIN `pst-inter-pais-rubro` where `pst-rubro`.`rb-at`=".$id_areatematica." and `pst-inter-pais-rubro`.`pais-id`=".$id_pais." AND `pst-rubro`.`rb-id`=`pst-inter-pais-rubro`.`rubro-id`";



	if($resultado=$mysqli->query($query))
	{
		?>
		<select  onchange="getpasantia(this.value, cbx_pais.value, cbx_areatematica.value);" name="cbx_rubro" id="cbx_rubro" placeholder="Selecciones No. de área" >
		<option value=""  >Selecciones No. de área</option>
		<?php
			while($row = $resultado->fetch_assoc())
			{
			?>
			<option value="<?php echo $row['rb-id']; ?>"><?php echo $row['rb-nom']; ?></option>
		<?php
			}
			?></select><?php
	}
?>
