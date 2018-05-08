function getEstado() {
	
	if (window.XMLHttpRequest) {
		xmlhttp3 = new XMLHttpRequest();
		} else { 
		xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp3.onreadystatechange=function() {
		if (xmlhttp3.readyState==4 && xmlhttp3.status==200) {
			document.getElementById("estadoList").innerHTML=xmlhttp3.responseText;
		}
	}
	xmlhttp3.open("GET","includes/getEstado.php",true);
	xmlhttp3.send();
}

function getMunicipio(estado_id) {
	
	if (window.XMLHttpRequest) {
		xmlhttp3 = new XMLHttpRequest();
		} else { 
		xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp3.onreadystatechange=function() {
		if (xmlhttp3.readyState==4 && xmlhttp3.status==200) {
			document.getElementById("municipioList").innerHTML=xmlhttp3.responseText;
		}
	}
	xmlhttp3.open("GET","includes/getMunicipio.php?estado_id="+estado_id,true);
	xmlhttp3.send();
}

function getrubro(municipio_id, pais_id) {
	if (window.XMLHttpRequest) {
		xmlhttp3 = new XMLHttpRequest();
		} else { 
		xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp3.onreadystatechange=function() {
		if (xmlhttp3.readyState==4 && xmlhttp3.status==200) {
			document.getElementById("rubroList").innerHTML=xmlhttp3.responseText;
		}
	}
	xmlhttp3.open("GET","includes/getLocalidad.php?municipio_id="+municipio_id+"&pais_id="+pais_id+"");
	xmlhttp3.send();
}

function getempresa(empresa_id) {
	
	if (window.XMLHttpRequest) {
		xmlhttp3 = new XMLHttpRequest();
		} else { 
		xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp3.onreadystatechange=function() {
		if (xmlhttp3.readyState==4 && xmlhttp3.status==200) {
			document.getElementById("empresaList").innerHTML=xmlhttp3.responseText;
		}
	}
	xmlhttp3.open("GET","includes/getEmpresa.php?rubro_id="+rubro_id,true);
	xmlhttp3.send();
}
function getpasantia(rubroId, paisId, aretematicaId) {
	if (window.XMLHttpRequest) {
		xmlhttp3 = new XMLHttpRequest();
		} else { 
		xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp3.onreadystatechange=function() {
		if (xmlhttp3.readyState==4 && xmlhttp3.status==200) {
			document.getElementById("pasantiaList").innerHTML=xmlhttp3.responseText;
		}
	}
	xmlhttp3.open("GET","includes/getEmpresas.php?rubroId="+rubroId+"&paisId="+paisId+"&aretematicaId="+aretematicaId+"");
	xmlhttp3.send();
}