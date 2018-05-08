<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8_spanish_ci" />
		    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		    <title>Pasantías | Universidad Zamorano</title>
		    <link rel="icon" href="./img/favicon.png" type="image/x-icon" />
		    <script src="includes/js.js"></script>
		<link rel="stylesheet" href="css/style.css">
	</head>

<?php
	
	require ('conexion.php');
	
	echo 'Selecciona País : <select onChange="getMunicipio(this.value);" name="cbx_pais" id="cbx_pais">';
	
	$query = "SELECT id_pais, pais FROM pais_pasantias ORDER BY pais";
	
	if($resultado=$mysqli->query($query))
	{
		while($row = $resultado->fetch_assoc())
		{
		?>
		<option value="" disabled selected hidden>Seleccione un País</option>
		<option value="<?php echo $row['id_pais']; ?>"><?php echo $row['pais']; ?></option>
		
		<?php
		}
	}
	echo '</select>';
?>
</html>