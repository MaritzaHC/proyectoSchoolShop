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