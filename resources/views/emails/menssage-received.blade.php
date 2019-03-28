<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Correo electronico</title>
</head>
<body>
	<h2>Recibiste un mensaje de: {{$msg['nombre']}}</h2>
	<br>
	<p>Mensaje: {{$msg['mensaje']}}</p>
	<p>Su contacto telefonico es: <strong>{{$msg['celular']}}</strong></p>
</body>
</html>