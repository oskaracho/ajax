<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Ajax - Tuwebonada.com</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript">
	
			function EnviarDatos(){
		var datos= $('#formRegistro').serialize();
          datos += "&opcion=" + encodeURIComponent('registrar');
          console.log(datos);

				$.ajax({
            		type: $('#formRegistro').attr('method'),
					url:'envia.php',
            data: datos,
					success:function(respuesta){
						if (respuesta==1){
							$('#mensaje').html('Tu mensaje se ha enviado correctamente');
							document.getElementById('nombre').value="";
						}
						else{
							$('#mensaje').html('Tu mensaje no se ha podido enviar, inténtalo de nuevo...');
						}
					}

				})
			}
			
		</script>
</head>
<body>
	<div class="container">
		<h1>Tutorial - Envío de datos con Ajax</h1>
		<hr />

		<div class="formulario">
			<form method="post"  id="formRegistro">
				<label>Nombre:</label><br/>
				<input type="text" name="nombre" id="nombre" size="40"><br/>
				<label>Pregunta:</label><br/>
				<textarea name="pregunta"  rows="5" cols="32"></textarea><br/>
				<button type="button" value="Realizar pregunta" onclick="javascript:EnviarDatos()" >sr</button><br/>
			</form>
			<div id="mensaje">Escribe una pregunta</div>
		</div>
		
	</div>
</body>
</html>