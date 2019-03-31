<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Correo electronico</title>
</head>
<body>
	<h3>Recibiste un mensaje de: {{$msg['nombre']}}</h3>
	<br>
	<p>{{$msg['mensaje']}}</p>
	<p>Información de contacto: {{$msg['celular']}}</p>
</body>
</html>