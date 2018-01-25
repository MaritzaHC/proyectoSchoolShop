function vista(id){
	$("." + id + "p").css({"background-color":"#FAFAFA", "color":"#000000"});	
}
function irPagina(pagina){
	window.location = pagina+".html";
}
function mostrar(id, cantidad){
	for (var i = 0; i <=cantidad; i++) {
		if(i!=id){
			$("#"+i+"c").css("display","none");
			$("#"+i+"n").css("background-color","#FAFAFA");
		}
	}
	$("#"+id+"c").css("display","block");
	$("#"+id+"n").css("background-color","#f1a480");

}
