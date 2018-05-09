

<?php
	// obtener rubro

	require ('conexion.php');

	$id_rubro = $_GET['rubroId'];
	$id_pais = $_GET['paisId'];
if ($id_rubro==4 or $id_rubro==6 or $id_rubro==8 or $id_rubro==15 or $id_rubro==7 or $id_rubro==10) {
	$query =  "select `pst-pasantia`.`pst-doc-id`, `pst-pais`.`pais-nom`, `pst-rubro`.`rb-at`, `pst-rubro`.`rb-nom`, `pst-rubro`.`rd-dsc`, `pst-empresa`.`emp-nom`, `pst-cultivos`.`ctv-nom` from `pst-pasantia` inner join `pst-detalle` inner join `pst-rubro` inner join `pst-inter-rb-emp`inner join `pst-empresa` inner join `pst-inter-emp-pais` INNER JOIN `pst-pais` inner JOIN `pst-cultivos` INNER JOIN `pst-inter-emp-cv` where `pst-pasantia`.`pst-id` = `pst-detalle`.`id-pst` AND `pst-inter-rb-emp`.`id-emp`=`pst-empresa`.`emp-id` AND `pst-detalle`.`id-rb`= `pst-rubro`.`rb-id` AND `pst-rubro`.`rb-id` = `pst-inter-rb-emp`.`id-rb` AND `pst-pasantia`.`pst-pais-id` = `pst-inter-emp-pais`.`emp-pais-id` and `pst-empresa`.`emp-id` = `pst-inter-emp-pais`.`emp-id` and `pst-pasantia`.`pst-emp-id`=`pst-empresa`.`emp-id` and `pst-pasantia`.`pst-pais-id` = ".$id_pais." and `pst-detalle`.`id-rb` = ".$id_rubro." and `pst-pais`.`pais-id` = `pst-pasantia`.`pst-pais-id` AND `pst-rubro`.`rb-id`=`pst-cultivos`.`ctv-rubro-id` AND `pst-empresa`.`emp-id`=`pst-inter-emp-cv`.`id-emp` AND `pst-inter-emp-cv`.`id-cv`=`pst-cultivos`.`ctv-id` and `pst-pasantia`.`pst-pais-id`=`pst-inter-emp-cv`.`id-pais`";


	if($resultado=$mysqli->query($query))
	{
		?>
		<h4>Mapa de Proyectos</h4>
			<?php
			while($row = $resultado->fetch_assoc())
			{
			?>
		<div class="col s12 m4 l4">
          <div class="card">
            <div class="card-content ">
              <span class="card-title">Proyecto ID: <?php echo $row['pst-doc-id']; print_r ($row);?></span>
				<p>País: <?php echo $row['pais-nom']; ?></p>
				<p>Municipio: <?php  if($row['rb-at']==3){
																		echo 'El Progreso';
																	}
																	if($row['rb-at']==2){
																		echo "El Negrito";
																	}
																	if($row['rb-at']==4){
																		echo "Zootecnia1";
																	}?></p>
				<p>Rubro: <?php echo $row['rb-nom']." (". $row['rd-dsc'].")" ; ?></p>
				<p>Cultivo: <?php echo $row['ctv-nom']; ?></p>
				<p>Empresa: <?php echo $row['emp-nom']; ?></p>

            </div>
            <div class="card-action">
	            <a class="waves-effect waves-light btn-large ripple-effect" target="_blank" style="background-color:#e8ac35" href="docs/<?php echo $row['pst-doc-id']; ?>.pdf"><i class="material-icons right">library_books</i>Información de Proyecto</a>
	        </div>

          </div>
        </div>

		<?php
			}
			?>



		<?php
	}
}elseif ($id_rubro!=4 or $id_rubro!=6 or $id_rubro!=8 or $id_rubro!=15 or $id_rubro!=7 or $id_rubro!=10){
	//echo 'Selecciona Rubro:';
	///     pst-id   pais-nom   rb-at   rb-nom   rd-dsc   emp-nom
	$query =  "select `pst-pasantia`.`pst-doc-id`, `pst-pais`.`pais-nom`, `pst-rubro`.`rb-at`, `pst-rubro`.`rb-nom`, `pst-rubro`.`rd-dsc`, `pst-empresa`.`emp-nom` from `pst-pasantia` inner join `pst-detalle` inner join `pst-rubro` inner join `pst-inter-rb-emp`inner join `pst-empresa` inner join `pst-inter-emp-pais` INNER JOIN `pst-pais` where `pst-pasantia`.`pst-id` = `pst-detalle`.`id-pst` AND `pst-inter-rb-emp`.`id-emp`=`pst-empresa`.`emp-id` AND `pst-detalle`.`id-rb`= `pst-rubro`.`rb-id` AND `pst-rubro`.`rb-id` = `pst-inter-rb-emp`.`id-rb` AND `pst-pasantia`.`pst-pais-id` = `pst-inter-emp-pais`.`emp-pais-id` and `pst-empresa`.`emp-id` = `pst-inter-emp-pais`.`emp-id` and `pst-pasantia`.`pst-emp-id`=`pst-empresa`.`emp-id` and `pst-pasantia`.`pst-pais-id` = ".$_GET['paisId']." and `pst-detalle`.`id-rb` = ".$_GET['rubroId']." and `pst-pais`.`pais-id` = `pst-pasantia`.`pst-pais-id`";



	if($resultado=$mysqli->query($query))
	{

		?>

		<h4>Mapa de Proyectos</h4>

			<?php
			while($row = $resultado->fetch_assoc())
			{
			?>
        <div class="col s12 m4 l4">
          <div class="card z-depth-2">
            <div class="card-content ">
              <span class="card-title">Proyecto ID: <?php echo $row['pst-doc-id']; print_r ($row); ?></span>
				<p>País: <?php echo $row['pais-nom']; ?></p>
				<p>Municipio: <?php  if($row['rb-at']==3){
												echo 'El Progreso';
											}
											if($row['rb-at']==2){
												echo "El Negrito";
											}
											if($row['rb-at']==4){
												echo "El Negrito";
											}?></p>
				<p>Rubro: <?php echo $row['rb-nom']." (". $row['rd-dsc'].")" ; ?></p>
				<p>Empresa: <?php echo $row['emp-nom']; ?></p>

            </div>
            <div class="card-action">
	            <a class="waves-effect waves-light btn btn-large ripple-effect" target="_blank" style="background-color:#e8ac35" href="docs/<?php echo $row['pst-doc-id']; ?>.pdf"><i class="material-icons right">library_books</i>Información de Proyecto</a>
	        </div>

          </div>
        </div>
		<?php
			}
			?>



		<?php



	}
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

select `pst-pasantia`.`pst-id`, `pst-pais`.`pais-nom`, `pst-rubro`.`rb-at`, `pst-rubro`.`rb-nom`, `pst-rubro`.`rd-dsc`, `pst-empresa`.`emp-nom` from `pst-pasantia` inner join `pst-detalle` inner join `pst-rubro` inner join `pst-inter-rb-emp`inner join `pst-empresa` inner join `pst-inter-emp-pais` INNER JOIN `pst-pais` where `pst-pasantia`.`pst-id` = `pst-detalle`.`id-pst` AND `pst-inter-rb-emp`.`id-emp`=`pst-empresa`.`emp-id` AND `pst-detalle`.`id-rb`= `pst-rubro`.`rb-id` AND `pst-rubro`.`rb-id` = `pst-inter-rb-emp`.`id-rb` AND `pst-pasantia`.`pst-pais-id` = `pst-inter-emp-pais`.`emp-pais-id` and `pst-empresa`.`emp-id` = `pst-inter-emp-pais`.`emp-id` and `pst-pasantia`.`pst-emp-id`=`pst-empresa`.`emp-id` and `pst-pasantia`.`pst-pais-id` = 10 and `pst-detalle`.`id-rb` = 8 and `pst-pais`.`pais-id` = `pst-pasantia`.`pst-pais-id`


sin cultivo

	$query =  "select `pst-pasantia`.`pst-id`, `pst-pais`.`pais-nom`, `pst-rubro`.`rb-at`, `pst-rubro`.`rb-nom`, `pst-rubro`.`rd-dsc`, `pst-empresa`.`emp-nom` from `pst-pasantia` inner join `pst-detalle` inner join `pst-rubro` inner join `pst-inter-rb-emp`inner join `pst-empresa` inner join `pst-inter-emp-pais` INNER JOIN `pst-pais` where `pst-pasantia`.`pst-id` = `pst-detalle`.`id-pst` AND `pst-inter-rb-emp`.`id-emp`=`pst-empresa`.`emp-id` AND `pst-detalle`.`id-rb`= `pst-rubro`.`rb-id` AND `pst-rubro`.`rb-id` = `pst-inter-rb-emp`.`id-rb` AND `pst-pasantia`.`pst-pais-id` = `pst-inter-emp-pais`.`emp-pais-id` and `pst-empresa`.`emp-id` = `pst-inter-emp-pais`.`emp-id` and `pst-pasantia`.`pst-emp-id`=`pst-empresa`.`emp-id` and `pst-pasantia`.`pst-pais-id` = ".$_GET['paisId']." and `pst-detalle`.`id-rb` = ".$_GET['rubroId']." and `pst-pais`.`pais-id` = `pst-pasantia`.`pst-pais-id`";


con cultivo
	select `pst-pasantia`.`pst-id`, `pst-pais`.`pais-nom`, `pst-rubro`.`rb-at`, `pst-rubro`.`rb-nom`, `pst-rubro`.`rd-dsc`, `pst-empresa`.`emp-nom`, `pst-cultivos`.`ctv-nom` from `pst-pasantia` inner join `pst-detalle` inner join `pst-rubro` inner join `pst-inter-rb-emp`inner join `pst-empresa` inner join `pst-inter-emp-pais` INNER JOIN `pst-pais` inner JOIN `pst-cultivos` where `pst-pasantia`.`pst-id` = `pst-detalle`.`id-pst` AND `pst-inter-rb-emp`.`id-emp`=`pst-empresa`.`emp-id` AND `pst-detalle`.`id-rb`= `pst-rubro`.`rb-id` AND `pst-rubro`.`rb-id` = `pst-inter-rb-emp`.`id-rb` AND `pst-pasantia`.`pst-pais-id` = `pst-inter-emp-pais`.`emp-pais-id` and `pst-empresa`.`emp-id` = `pst-inter-emp-pais`.`emp-id` and `pst-pasantia`.`pst-emp-id`=`pst-empresa`.`emp-id` and `pst-pasantia`.`pst-pais-id` = ".$_GET['paisId']." and `pst-detalle`.`id-rb` = ".$_GET['rubroId']." and `pst-pais`.`pais-id` = `pst-pasantia`.`pst-pais-id` AND `pst-rubro`.`rb-id`=`pst-cultivos`.`ctv-rubro-id` AND `pst-empresa`.`emp-id`=`pst-cultivos`.`ctv-emp-id`


cultivo
	select `pst-pasantia`.`pst-doc-id`, `pst-pais`.`pais-nom`, `pst-rubro`.`rb-at`, `pst-rubro`.`rb-nom`, `pst-rubro`.`rd-dsc`, `pst-empresa`.`emp-nom`, `pst-cultivos`.`ctv-nom` from `pst-pasantia` inner join `pst-detalle` inner join `pst-rubro` inner join `pst-inter-rb-emp`inner join `pst-empresa` inner join `pst-inter-emp-pais` INNER JOIN `pst-pais` inner JOIN `pst-cultivos` INNER JOIN `pst-inter-emp-cv` where `pst-pasantia`.`pst-id` = `pst-detalle`.`id-pst` AND `pst-inter-rb-emp`.`id-emp`=`pst-empresa`.`emp-id` AND `pst-detalle`.`id-rb`= `pst-rubro`.`rb-id` AND `pst-rubro`.`rb-id` = `pst-inter-rb-emp`.`id-rb` AND `pst-pasantia`.`pst-pais-id` = `pst-inter-emp-pais`.`emp-pais-id` and `pst-empresa`.`emp-id` = `pst-inter-emp-pais`.`emp-id` and `pst-pasantia`.`pst-emp-id`=`pst-empresa`.`emp-id` and `pst-pasantia`.`pst-pais-id` = 2 and `pst-detalle`.`id-rb` = 8 and `pst-pais`.`pais-id` = `pst-pasantia`.`pst-pais-id` AND `pst-rubro`.`rb-id`=`pst-cultivos`.`ctv-rubro-id` AND `pst-empresa`.`emp-id`=`pst-inter-emp-cv`.`id-emp` AND `pst-inter-emp-cv`.`id-cv`=`pst-cultivos`.`ctv-id` and `pst-pasantia`.`pst-pais-id`=`pst-inter-emp-cv`.`id-pais`
*/



?>
