<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
 $f_usuario=isset($_POST['f_usuario'])? $_POST['f_usuario'] : NULL;
 $f_contra=isset($_POST['f_contra'])? $_POST['f_contra'] : NULL;
 echo $f_usuario." ".$f_contra;

 ?>
</body>
</html>
