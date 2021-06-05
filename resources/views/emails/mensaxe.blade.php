<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mensaxe da tenda de Electrodomésticos Pazos</title>
</head>

<body>

	<h3>{{$detalles['titulo']}}</h3>
    <h4>{{$detalles['nome']}} {{$detalles['apelidos']}} co enderezo electrónico {{$detalles['email']}}<?php if (isset($detalles['telefono'])){
		echo " e co teléfono";
	}
	?>  {{$detalles['telefono']}} enviou a seguinte mensaxe:</h4>
    <p>{{$detalles['mensaxe']}}</p>
</body>
</html>