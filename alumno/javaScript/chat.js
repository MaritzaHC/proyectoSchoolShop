

var datos;
var sid = -1;
var scant = 0;
var texto = "";
var tempScrollTop = 0;
var focused = null;

function actualizar(){
	$.ajax({
		url: "../php/base/jmensaje.php"
	}).done(function(data){
		datos = JSON.parse(data);
		titulos();
	});
}

function enviarr(tip){
	$.post( "../php/base/mensajesNF.php",
		 {
			modo: tip,
			text:  $("#" + sid + "c" + " .tb").val(),
			id: datos[sid].id
		}
	).done(function(data){
		 $("#" + sid + "c" + " .tb").val("");
		actualizar();
	});
}

function smostrar(id, cantidad){
	sid = id;
	scant = cantidad;
	mostrar(id, cantidad);
}

function getTexto(){
	if(sid == -1){
		texto = "";
		return;
	}
	texto = $("#" + sid + "c" + " .tb").val();
}

function titulos(){
	if(sid != -1)
	{
		tempScrollTop = $("#" + sid + "c").scrollTop();
	}
	

	var notifs = ".lasNotificaciones";
	$(notifs).html("");
	getTexto();
	var conv = "#lasConversaciones";
	$(conv).html("");

	for(var i = 0; i < datos.length; i++){
		$(notifs).append("<div class=\"notificacion\" id=" +
		 i + "n onclick=\"smostrar(" + 
		 i + ", " + datos.length + 
		 ")\"><p>"+ datos[i].usuarioU + "-" + 
		 datos[i].usuarioD + "</p></div>");
		contenido(i, i);
	}
}

function contenido(idx, idConv){
	conv = "#lasConversaciones";
	$(conv).append("<div class=\"contenidoNoti\" id="+idConv+
		"c>"
		);
	for(var i = 0; i < datos[idx].mensajes.length; i++){
		//alert(datos[idx].id + " " + JSON.stringify(datos[idx].mensajes[i]));
		var act = datos[idx].mensajes[i];
		if(act.usuario == usuario){
			$(conv + " .contenidoNoti#" + idConv + "c").append("<div class=\"tues\">" + 
			act.text + "</div><br><br>");	
		} else {
			$(conv + " .contenidoNoti#" + idConv + "c").append("<div class=\"tuno\">" + 
			act.text + "</div><br><br>");	
		}
		
	}
//alert("out");
	$(conv + " .contenidoNoti#" + idConv + "c").append("</div><input type=\"hidden\" name=\"idConvo\" value=\""+datos[idConv].id+"\"><input type=\"text\" class=\"tb\" name=\"nuevo\" value=\"\"><input type=\"submit\" name=\"enviar\" value=\"\" class=\"enviar\" onclick=\"enviarr(2)\">");
		$(conv + " .contenidoNoti#" + idConv + "c").append("<div class=\"boton1\" onclick=\"popup(1,'seguro',0)\">Eliminar</div><input type=\"number\" name=\""+idConv+"\" value="+ datos[idConv].id + " style=\"display: none;\"></div>");

	if(sid != -1){
		smostrar(sid, scant);
		 $("#" + sid + "c" + " .tb").val(texto);
		 $("#" + sid + "c").scrollTop(tempScrollTop);
		  $("#" + sid + "c" + " .tb").focus();
	}
	if(sid == -1) $(".contenidoNoti").css("display","none");

}

actualizar(); 

setInterval(actualizar, 5000);