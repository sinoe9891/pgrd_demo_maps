

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
		<select  onchange="getpasantia(this.value, cbx_pais.value, cbx_areatematica.value);" name="cbx_rubro" id="cbx_rubro" placeholder="Selecciona Rubro" >
		<option value=""  >Seleccione un Rubro</option>
		<?php
			while($row = $resultado->fetch_assoc())
			{
			?>
			<option value="<?php echo $row['rb-id']; ?>"><?php echo $row['rb-nom']; ?></option>
		<?php
			}
			?></select><?php
	}

/*
<select onchange="getrubro(this.value, cbx_pais.value);" name="cbx_areatematica" id="cbx_areatematica">
		<option value="">Seleccione un Área Temática</option>
		<option value="1">Fitotecnia</option>
		<option value="2">Zootecnia</option>
		
</select>';



$sql = "select * from `pst-empresa` inner join `pst-inter-rb-emp` where `pst-inter-rb-emp`.`id-rb`=22 AND `pst-empresa`.`pst-emp-pais-id`= 1 AND `pst-inter-rb-emp`.`id-emp`=`pst-empresa`.`emp-id`";

$sql = "select * from `pst-pasantia` inner join `pst-detalle` inner join `pst-rubro` inner join `pst-inter-rb-emp`inner join `pst-empresa` where `pst-pasantia`.`pst-id` = `pst-detalle`.`id-pst` AND `pst-inter-rb-emp`.`id-emp`=`pst-empresa`.`emp-id` AND `pst-detalle`.`id-rb`= `pst-rubro`.`rb-id` AND `pst-rubro`.`rb-id` = `pst-inter-rb-emp`.`id-rb` AND `pst-pasantia`.`pst-pais-id`=`pst-empresa`.`pst-emp-pais-id` AND `pst-pasantia`.`pst-pais-id`= 1";


select * from `pst-pasantia` inner join `pst-detalle` inner join `pst-rubro` inner join `pst-inter-rb-emp`inner join `pst-empresa` where `pst-pasantia`.`pst-id` = `pst-detalle`.`id-pst` AND `pst-inter-rb-emp`.`id-emp`=`pst-empresa`.`emp-id` AND `pst-detalle`.`id-rb`= `pst-rubro`.`rb-id` AND `pst-rubro`.`rb-id` = `pst-inter-rb-emp`.`id-rb` AND `pst-pasantia`.`pst-pais-id` = `pst-inter-emp-pais`.`emp-pais-id` AND `pst-pasantia`.`pst-pais-id`= 1


por pais

select * from `pst-pasantia` inner join `pst-detalle` inner join `pst-rubro` inner join `pst-inter-rb-emp`inner join `pst-empresa` inner join `pst-inter-emp-pais` where `pst-pasantia`.`pst-id` = `pst-detalle`.`id-pst` AND `pst-inter-rb-emp`.`id-emp`=`pst-empresa`.`emp-id` AND `pst-detalle`.`id-rb`= `pst-rubro`.`rb-id` AND `pst-rubro`.`rb-id` = `pst-inter-rb-emp`.`id-rb` AND `pst-pasantia`.`pst-pais-id` = `pst-inter-emp-pais`.`emp-pais-id` AND `pst-pasantia`.`pst-pais-id`= 1 and `pst-empresa`.`emp-id` = `pst-inter-emp-pais`.`emp-id`

todas

select * from `pst-pasantia` inner join `pst-detalle` inner join `pst-rubro` inner join `pst-inter-rb-emp`inner join `pst-empresa` inner join `pst-inter-emp-pais` where `pst-pasantia`.`pst-id` = `pst-detalle`.`id-pst` AND `pst-inter-rb-emp`.`id-emp`=`pst-empresa`.`emp-id` AND `pst-detalle`.`id-rb`= `pst-rubro`.`rb-id` AND `pst-rubro`.`rb-id` = `pst-inter-rb-emp`.`id-rb` AND `pst-pasantia`.`pst-pais-id` = `pst-inter-emp-pais`.`emp-pais-id` and `pst-empresa`.`emp-id` = `pst-inter-emp-pais`.`emp-id`

select * from `pst-pasantia` inner join `pst-detalle` inner join `pst-rubro` inner join `pst-inter-rb-emp`inner join `pst-empresa` inner join `pst-inter-emp-pais` where `pst-pasantia`.`pst-id` = `pst-detalle`.`id-pst` AND `pst-inter-rb-emp`.`id-emp`=`pst-empresa`.`emp-id` AND `pst-detalle`.`id-rb`= `pst-rubro`.`rb-id` AND `pst-rubro`.`rb-id` = `pst-inter-rb-emp`.`id-rb` AND `pst-pasantia`.`pst-pais-id` = `pst-inter-emp-pais`.`emp-pais-id` and `pst-empresa`.`emp-id` = `pst-inter-emp-pais`.`emp-id` and `pst-pasantia`.`pst-emp-id`=`pst-empresa`.`emp-id`
*/



?>
