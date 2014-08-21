<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="StyleSheet" href="style.css" type="text/css">
<script type="text/javascript" src="js/jquery-2.1.1.min (1).js"></script>
</head>

<body>
<div id="login">
<div id="formulario">
<form id="f_acceso" name="f_acceso" action="" method="POST"  onSubmit="return validarFormulario();"> 
  <div id="nombre">
      <input type="text" name="f_usuario" id="f_usuario">  
   </div>
   <div id="contraseña">
      <input type="password" name="f_contra" id="f_contra">
   </div>
   <div id="enviar">
     <input type="submit" name="f_boton" id="f_boton" value="Enviar">
   </div>
   <div> <a href="#" class="a">Ha olvidado su contraseña</a></div></form></div></div>
   <div id="mensajeError" style="color:#F00;font-size:12px;"></div>
   
   <script>
   
   $("#f_usuario").focus();
   function validarFormulario(){
	   var f_usuario = $("#f_usuario").val();
	   var f_contra = $("#f_contra").val();
	   
	   var f_usuario_cantidad = f_usuario.length;
	   var f_contra_cantidad = f_contra.lenght;  
	   
	if (f_usuario == ""){
		$("#mensajeError").html("<strong>ALERTA</strong> Usted no ingreso el usuario");
		return false;
        }
   if (f_contra == "") {
	   $("#mensajeError").html("<strong>ALERTA</strong> Usted no ingreso la contraseña");
	   return false;
   }
   return true;
   }
   </script>
</body>
</html>
