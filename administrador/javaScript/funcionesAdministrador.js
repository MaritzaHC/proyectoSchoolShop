function vistaSelec(id){
	if (id==2) {
		$('#ur').css("display","none");
		$('#no').css("display","inline-block");
	}
	else {
		$("#no").css("display","none");
		$('#ur').css("display","inline-block");
	}
}
function pagina(cual,tipo){
  var id = variable("pag");

      if (cual==1){id++;window.location=tipo+'.php?'+'pag='+id;}
      if (cual==0){id--;;window.location=tipo+'.php?'+'pag='+id;}

}