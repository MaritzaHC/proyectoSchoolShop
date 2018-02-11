function popup(OFF,que){
	if (OFF==1) {
		$("#"+que).css({"display":"block","opacity":"1","position":" fixed","top":"0","left":"0","right":"0","bottom":"0","margin":"0","z-index":" 999","transition":"all 1s"});
	}
	else{
		$("#"+que).css({"display": "none"});
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