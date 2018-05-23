<?php

	require_once ('../conexion.php');
	// $_POST['cont'];
	$areatematica_id = $_POST['new_aT'];
	$errors = "";
	$pais_id = $_POST['newpais'];
	$empresa_id = $_POST['new-empresa'];
	$rubro_id = $_POST['new_rubro'];
	$date = date("Y");
	$documento = '';
//INICIO Area tematica 2 = Zootecnia	
if ($areatematica_id==2) {
	$datos_pais=datos_pais($pais_id);
 	//INICIO Crear nombre documento	
	$documento = ''.$datos_pais.''.$date.''.$pais_id.''.$empresa_id.''.$rubro_id.''.$areatematica_id;	
	
					//INICIO Crear pasantías

	if (mysqli_num_rows(selectPasantia($documento))==0) {

		if (mysqli_num_rows(selectRubrEmp($rubro_id,$empresa_id))==0) {if (insertRubrEmp($rubro_id,$empresa_id)) {echo "ok";}else{echo "ERROR: insertRubrEmp ". $mysqli->error ;}}else{ echo "YA EXISTE: selectRubrEmp";}
		 
		if (mysqli_num_rows(selectPaisRubr($pais_id,$rubro_id))==0) {if (insertPaisRubr($pais_id,$rubro_id)) {echo "ok";}else{echo "ERROR: insertPaisRubr ". $mysqli->error;}}else{echo "YA EXISTE: selectPaisRubr";}
			
		if (insertPasantia($pais_id,$empresa_id,$date,$documento)) {echo "ok";}else{echo "ERROR: insertPasantia ". $mysqli->error;}

		if (insertDetalle($rubro_id)) {echo "ok";}else{echo "ERROR: insertDetalle ". $mysqli->error;}

		if (archivo($documento,$empresa_id,$pais_id,$rubro_id)) {
			echo "archivo subido CORRECTAMNETE";
		}

	}else{echo "pasantia existe";}
			
//FIN Area tematica 2 = Zootecnia	

//INICIO Area tematica 1 = Fitotecnia

}elseif($areatematica_id==1) {

	//INICIO obtener Pais basados en su ID
	$datos_pais=datos_pais($pais_id);
	//FIN obtener Pais basados en su ID

	//INICIO Manejo de cultivos al ingresarlos
	for ($i=0; $i < $_POST['cont']; $i++) { 
		if(isset($_POST["cultivo".$i.""])){$cultivos[$i] = $_POST["cultivo".$i.""];}
	 }
	//FIN Manejo de cultivos al ingresarlos 

/*foreach ($cultivos as $id => $value) {
	echo "{$id} => {$value} </br>";
	
}*/
  	//INICIO Crear nombre documento			
	$documento = ''.$datos_pais.''.$date.''.$pais_id.''.$empresa_id.''.$rubro_id.''.$areatematica_id.''.$_POST['cont'];	

	if (mysqli_num_rows(selectPasantia($documento))==0)  {
		if (mysqli_num_rows(selectRubrEmp($rubro_id,$empresa_id))==0) {if (insertRubrEmp($rubro_id,$empresa_id)) {echo "ok";}else{echo "ERROR: insertRubrEmp ". $mysqli->error ;}}else{ echo "YA EXISTE: selectRubrEmp";}
		 
		if (mysqli_num_rows(selectPaisRubr($pais_id,$rubro_id))==0) {if (insertPaisRubr($pais_id,$rubro_id)) {echo "ok";}else{echo "ERROR: insertPaisRubr ". $mysqli->error;}}else{echo "YA EXISTE: selectPaisRubr";}
			
		if (insertPasantia($pais_id,$empresa_id,$date,$documento)) {echo "ok";}else{echo "ERROR: insertPasantia ". $mysqli->error;}

		if (insertDetalle($rubro_id)) {echo "ok";}else{echo "ERROR: insertDetalle ". $mysqli->error;}

		if (archivo($documento,$empresa_id,$pais_id,$rubro_id)) {
			echo "archivo subido CORECTAMNETE";
		}
		if (insertCultivos($cultivos)) {
			echo "Cultivos ingresados correctamente";
		}
	}else{echo "pasantia existe";} 	

}

	function datos_pais($pais_id){
		//INICIO obtener Pais basados en su ID
		GLOBAL $mysqli;
		$queryPaisDsc = "";
		$queryPaisDsc = "SELECT `pais-dsc` FROM `pst-pais` WHERE `pais-id`=".$pais_id."";
		if ($resultado=$mysqli->query($queryPaisDsc)) {
			while($row = $resultado->fetch_assoc())
			{
			$pais_dsc = $row['pais-dsc'];
			}
		return $pais_dsc;
		}else{ 
			echo $mysqli->error;
		}
		//FIN obtener Pais basados en su ID

	}

	function archivo($documento){
		$nombre = $_FILES['archivo']['name'];
		$tipo = $_FILES['archivo']['type'];
		$tamanio = $_FILES['archivo']['size'];
		$ruta = $_FILES['archivo']['tmp_name'];
		$destino = "../../docs/".$documento.".pdf";
		$errors = "";
		if ($tipo=="application/pdf") {
		echo "pdf";
			if ($tamanio<500000) {
			echo "ACEPTADO: menos de 500kb";
			    if(!copy($ruta, $destino))
			    {
					$errors= error_get_last();
					echo "COPY ERROR: ".$errors['type'];
					echo "<br />\n".$errors['message'];
				} elseif(copy($ruta, $destino)) {
					return TRUE;
				}
			}else{echo "no es del tamaño";}
		}else{echo "no es pdf";}
	}

	function selectRubrEmp($rubro_id,$empresa_id){
		GLOBAL $mysqli;
		$selectRbEmp = "SELECT `id-rb`, `id-emp` FROM `pst-inter-rb-emp` WHERE `id-rb` = ".$rubro_id." AND `id-emp` = ".$empresa_id."";
		$hola=$mysqli -> query($selectRbEmp);
		var_dump($hola->fetch_assoc());
		return $mysqli->query($selectRbEmp);
	}

	function insertRubrEmp($rubro_id,$empresa_id){
		GLOBAL $mysqli;
		$intermediRbEmp = "";
		$intermediRbEmp= "INSERT INTO `pst-inter-rb-emp`(`id-rb`, `id-emp`) VALUES ('".$rubro_id."','".$empresa_id."')";
		return $mysqli->query($intermediRbEmp);
	}

	function selectPaisRubr($pais_id,$rubro_id){
		GLOBAL $mysqli;
		$selectPaisRb = "SELECT `pais-id`, `rubro-id`  FROM `pst-inter-pais-rubro` WHERE `pais-id` = ".$pais_id." AND `rubro-id` = ".$rubro_id."";
		$hola=$mysqli -> query($selectPaisRb);
		var_dump($hola->fetch_assoc());
		return $mysqli->query($selectPaisRb);
	}	

	function insertPaisRubr($pais_id,$rubro_id){
		GLOBAL $mysqli;
		$intermediPaisRb= "INSERT INTO `pst-inter-pais-rubro`(`pais-id`, `rubro-id`) VALUES ('".$pais_id."','".$rubro_id."')";
		return $mysqli->query($intermediPaisRb);
	}

	

	function insertPasantia($pais_id,$empresa_id,$date,$documento){
		GLOBAL $mysqli;
		$pasantiaquery= "INSERT INTO `pst-pasantia`(`pst-id`, `pst-pais-id`, `pst-emp-id`, `pst-anio`, `pst-doc-id`) VALUES ('','".$pais_id."','".$empresa_id."','".$date."','".$documento."')";
		return $mysqli->query($pasantiaquery);
	}

	function selectPasantia($documento){
		GLOBAL $mysqli;
		$selectPasantia = "SELECT * FROM `pst-pasantia` WHERE `pst-doc-id` LIKE '%".$documento."%'";
		$hola=$mysqli -> query($selectPasantia);
		var_dump($hola->fetch_assoc());
		return $mysqli -> query($selectPasantia);
	}

	function insertDetalle($rubro_id){
		GLOBAL $mysqli;
		$resultado = $mysqli->query("SELECT MAX(`pst-id`) AS id FROM `pst-pasantia`");
		
		while($row = $resultado->fetch_assoc())
		{	$pst_id = $row['id'];	}

		$detallequery= "INSERT INTO `pst-detalle`(`id-pst`, `id-dtll`, `id-rb`) VALUES ('".$pst_id."','','".$rubro_id."')";

		return $mysqli->query($detallequery);
	}

function insertCultivos($value){
	GLOBAL $mysqli;
	GLOBAL $pais_id;
	GLOBAL $empresa_id; 
	GLOBAL $rubro_id;
	var_dump($value);
	foreach ($value as $key => $value){

		if (mysqli_num_rows(selectCultivo($value,$empresa_id,$pais_id,$rubro_id))==0){
			$intermcultivo= "INSERT INTO `pst-inter-emp-cv`(`id-emp`, `id-cv`, `id-pais`, `pst-id-rb`) VALUES ('".$empresa_id."','".$value."','".$pais_id."','".$rubro_id."')";
			if ($mysqli->query($intermcultivo) === TRUE) {
				echo "cultivo ".$value." Ingresado Correctamente ";
			}else{echo  "cultivo ".$value." NO Ingresado Correctamente  ".$mysqli->error;}
		}else{echo "Cultivo existe";}
	}
		
	}



	function selectCultivo($value,$empresa_id,$pais_id,$rubro_id){
		GLOBAL $mysqli;
		$selectCultivo="SELECT `id-emp`, `id-cv`, `id-pais`, `pst-id-rb` FROM `pst-inter-emp-cv` WHERE `id-emp` = ".$empresa_id." AND `id-cv` = ".$value." AND `id-pais` = ".$pais_id." AND `pst-id-rb` = ".$rubro_id;
			$hola=$mysqli -> query($selectCultivo);
		return $mysqli->query($selectCultivo);
	}
?>
