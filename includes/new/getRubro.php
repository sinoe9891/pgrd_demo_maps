<?php 
		require ('../conexion.php');


	$id_areatematica = $_GET['rubro_id'];
	
	$query =  "SELECT `rb-id`, `rb-nom`, `rd-dsc`, `rb-at` FROM `pst-rubro` WHERE `rb-at` = ".$id_areatematica." ORDER BY `rb-nom`";


	
	if($resultado=$mysqli->query($query))
	{
		?>
		<select  onchange="getCultivo(this.value, this.options[this.selectedIndex].text, new_aT.value, new_aT.options[new_aT.selectedIndex].text);" name="new_rubro" id="new_rubro" placeholder="Selecciona Rubro" >
		<option value=""  >Seleccione un Rubro</option>
		<?php
			while($row = $resultado->fetch_assoc())
			{
			?>
			<option value="<?php echo $row['rb-id']; ?>"><?php echo $row['rb-nom']." (".$row['rd-dsc'].")"; ?></option>
		<?php
			}
			?></select><?php
	}