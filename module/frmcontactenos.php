<form class="b_form">
  <div class="row">
    <div class="col-xs-12 col-md-6">
      <div class="form-group">
        <input type="text" class="form-control" id="nombre" placeholder="Nombre">
      </div>
    </div>
    <div class="col-xs-12 col-md-6">
      <div class="form-group">
        <input type="text" class="form-control" id="telefono" placeholder="Teléfono">
      </div>
    </div>
  </div>
  <div class="row"> 
    <div class="col-xs-12 col-md-6">
      <div class="form-group">
        <input type="text" class="form-control" id="celular" placeholder="celular">
      </div>
    </div>
    <div class="col-xs-12 col-md-6">
      <div class="form-group">
        <input type="email" class="form-control" id="correo" placeholder="Correo">
      </div>
    </div>
  </div>
  <div class="form-group">
    <textarea  class="form-control textar" id="mensaje" placeholder="Mensaje:"></textarea>
  </div>
  <button type="submit" id="EnviarForm" class="btn-send">Enviar</button>
  <div id="dialog" title="Mensaje Contáctenos" style="display:none;">
    <p id="rpta"></p>
  </div>
</form>

<link rel="stylesheet" href="common/lib/jqueryui/css/ui-lightness/jquery-ui-1.9.2.custom.min.css"/>
<script src="common/lib/jqueryui/js/jquery-ui-1.9.2.custom.min.js"></script>
<script>
<!--
$(document).ready(function(){
	$("#telefono").keypress(function(e){
		var tecla = document.all?tecla=e.keyCode:tecla=e.which;
		return ((tecla>47 && tecla<58)||tecla==46);
	});
	$("#EnviarForm").click(function(e){
		e.preventDefault();
		var nombre = $("#nombre").val();
		var telefono = $("#telefono").val();
		var correo = $("#correo").val();
		var mensaje = $("#mensaje").val(); 
		if(nombre.length < 1){
			alert("El nombre es obligatorio");
			return false;
		}
		if(telefono.length < 1){
			alert("El telefono es obligatorio");
			return false;
		}
		if(celular.length < 1){
			alert("El celular es obligatorio");
			return false;
		}
		if(correo.length < 1){
			alert("El correo es obligatorio");
			return false;
		} else {
			var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
			if(filter.test(correo)){
			} else {
				alert("El correo no es válido");
				return false;
			}
		}
		if(mensaje.length < 1){
			alert("El mensaje es obligatorio");
			return false;
		}
		$.ajax({
			url:'module/frmcontactenos.php',
			type:'POST',
			data:{nombre:nombre, telefono:telefono,  correo:correo, mensaje:mensaje},
			datatype:'html',
			beforeSend:function(){
				$("#dialog").dialog({
					resizable:false,
					modal:true,
					autoOpen:true,
					width:350,
					height:120
				});
				$("#dialog #rpta").html("Enviando...");
			},
			success:function(html){
				$("#dialog #rpta").html(html);
			}
		});
	});
});
//-->
</script>