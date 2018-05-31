function vista(id){
	$("." + id + "p").css({"background-color":"#FAFAFA", "color":"#000000"});	
}

function ar(evt) {
    var files = evt.target.files; // FileList object
             
      // Obtenemos la imagen del campo "file".
      for (var i = 0, f; f = files[i]; i++) {
        //Solo admitimos imágenes.
        if (!f.type.match('image.*')) {continue;}
            
        var reader = new FileReader();
             
        reader.onload = (function(theFile) {
            return function(e) { // Insertamos la imagen
             document.getElementById("list").innerHTML = 
             ['<img src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
            };
        })(f);
             
        reader.readAsDataURL(f);
    }
}
