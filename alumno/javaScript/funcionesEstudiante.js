//reemplazar ini
function iniOtra(id){
	window.location="inicio.php?i="+id;
}
function nuevasPaginas(id){
	window.open(id+".php");// reemplazo notificaciones, menuMiCuenta, publicacion
}
function informacionProducto(tipo,cual){
	window.open("infomracion"+tipo+".php?i="+cual+"");
}
function vista(id){
	if (id!="pedidos" && id!="compras" && id!="objetos") {
		id = variable("i");
	}
	if(id != "pedidos"){vistaNo("pedidos");}
	if(id != "compras"){vistaNo("compras");}
	if(id != "objetos"){vistaNo("objetos");}
	$("." + id + " p").css({"background-color":"#fffade", "color":"#af5145"});	
	$("#op"+id).css("display","block");
	//return id;
}
function vistaNo(id){
	$("." + id + " p").css({"background-color":"#f29657", "color":"#FFFFFF"}); 	
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
