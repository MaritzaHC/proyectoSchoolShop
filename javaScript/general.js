function popup(OFF,que,sino){
	if (OFF==1) {//solo muestra la ventana
		$("#"+que).css({"display":"block","opacity":"1","position":" fixed","top":"0","left":"0","right":"0","bottom":"0","margin":"0","z-index":" 999","transition":"all 1s"});
	}
	else{//va a cerrar la ventana
		$("#"+que).css({"display": "none"});
		if (sino==1) { //verifica que sea la ventana de aceptar o cancelar
			var rutaAbsoluta = self.location.href;        
			var posicionUltimaBarra = rutaAbsoluta.lastIndexOf("/");
			var rutaRelativa = rutaAbsoluta.substring( posicionUltimaBarra + "/".length , rutaAbsoluta.length );       
			if (rutaRelativa=="nuevoObjeto.php"||rutaRelativa=="publicacion.php") {
			}
			else window.location = "base/"+rutaRelativa;
		}
		else return false;
	}
}

function mostrar(id, cantidad){
	for (var i = 0; i <=cantidad; i++) {
		if(i!=id){
			$("#"+i+"c").css("display","none");
			$("#"+i+"n").css("background-color","white");
		}
	}
	$("#"+id+"c").css("display","block");
	$("#"+id+"n").css({"background-color":"#f29657","color":"#af5145"});
}
function vista(id){
	$("." + id + "p").css({"background-color":"white", "color":"#af5145"});	
}
function irPagina(pagina){
	window.location = pagina+".php";
}
/*
if (tipo==1) {document.publica.submit();}//si es un formulario
			else{//si es una eliminacion 
				var rutaAbsoluta = self.location.href;        
				var posicionUltimaBarra = rutaAb	soluta.lastIndexOf("/");
				var rutaRelativa = rutaAbsoluta.substring( posicionUltimaBarra + "/".length , rutaAbsoluta.length );       
				window.location = "base/"+rutaRelativa;
			}
*/