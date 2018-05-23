<?php

	require ('../conexion.php');

	$id_rubro = $_GET['rubro_id'];
	$rubroName = $_GET['rubroName'];
	$id_areaTematica = $_GET['aT'];
	$aTName = $_GET['aTName'];

	if ($id_areaTematica == 1) {
		$query =  "SELECT DISTINCT `pst-cultivos`.`ctv-id`, `pst-cultivos`.`ctv-nom` FROM `pst-cultivos` INNER JOIN `pst-inter-emp-cv` WHERE `pst-cultivos`.`ctv-id`=`pst-inter-emp-cv`.`id-cv` and `pst-inter-emp-cv`.`pst-id-rb`=".$id_rubro." ORDER BY `pst-cultivos`.`ctv-nom` ASC";
	
	if($resultado=$mysqli->query($query))
	{
		
			$cont = 0;
			echo "<p>Selecciona un Cultivo </p>";
			while($row = $resultado->fetch_assoc())
				{
				?>
				 <p> 	
                     <input id="<?php echo 'cultivo'.$cont;?>" name="<?php echo 'cultivo'.$cont;?>" type="checkbox" value="<?php echo $row['ctv-id'];?>">              
                     <label for="<?php echo 'cultivo'.$cont;?>"><?php echo $row["ctv-nom"];?></label>

                  </p>

				<?php $cont++;?>

				<?php
		
				}

		echo '	</br><input  name="cont" id="cont" type="text" value="'.$cont.'" hidden>
				<a class="waves-effect waves-light btn" onclick="formCultivo(new_rubro.value, new_rubro.options[new_rubro.selectedIndex].text, new_aT.options[new_aT.selectedIndex].text);"><i class="material-icons left">add</i>Agregar Nuevo Cultivo</a>
				</br>
				<div class="file-field input-field">
      
      <div class="btn">
        <span>Subir PDF</span>
        <input type="file" required name="archivo" id="archivo">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload file" name="archivo" id="archivo">
      </div></div></br>';
		echo '<button class="waves-effect waves-light btn-large" type="submit">
    	<i class="material-icons left">send</i>Agregar Pasantía
 		</button>';
	}
			
}elseif ($id_areaTematica == 2){

	echo '
<div class="file-field input-field">
      <div class="btn">
        <span>Subir PDF</span>
        <input type="file" required name="archivo">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload file" name="archivo" id="archivo">
      </div>
</div>
      </br>
       	<button class="waves-effect waves-light btn-large" type="submit">
    	<i class="material-icons left">send</i>Agregar Pasantía
 		</button>
';
	}
?>

<?php 	
		/*$contado = 5;

		for ($i=0; $i < 5; $i++) { 
		 	$cultivos[$i] = $_GET["cultivo".$i.""]
		 }*/ 
 ?>