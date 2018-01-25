function ini(){
	id="compras";
	window.location="inicio.html?i="+id;
}
function iniOtra(id){
	window.location="inicio.html?i="+id;
}
function notifica(){
	window.open("notificaciones.html");
}
function cuenta(){
	window.open("menuMiCuenta.html");
}
function publica(){
	window.open("publicacion.html");
}
function informacionCompra(){
	window.open("informacionCompra.html");
}
function informacionPedido(){
	window.open("informacionPedido.html");
}
function informacionOferta(){
	window.open("informacionOferta.html");
}
function informacionObjeto(){
	window.open("informacionObjeto.html");
}
function vista(id){
	if (id!="pedidos" && id!="compras" && id!="objetos") {
		id = variable("i");
	}
	if(id != "pedidos"){vistaNo("pedidos");}
	if(id != "compras"){vistaNo("compras");}
	if(id != "objetos"){vistaNo("objetos");}
	$("." + id + " p").css({"background-color":"#FAFAFA", "color":"#000000"});	
	$("#op"+id).css("display","block");
}
function vistaNo(id){
	$("." + id + " p").css({"background-color":"#543222", "color":"#FFFFFF"}); 	
	$("#op"+id).css("display","none");
}
function reportar(){
$(".razones").css("display","block");
}
function vistaTipos(id){
	if(id == "venta"){$(".datosPublica .objeto").css("display","none");}
	if(id == "objeto"){$(".datosPublica .venta").css("display","none");}
	$(".datosPublica ."+id).css("display","block");
}
function variable(variable) {
   var query = window.location.search.substring(1);
   var vars = query.split("&");
   for (var i=0; i < vars.length; i++) {
       var pair = vars[i].split("=");
       if(pair[0] == variable) {
           return pair[1];
       }
   }
   return false;
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