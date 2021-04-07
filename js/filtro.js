$("#code").change(function(){ //Realiza la funcion cuando #code cambia en el html
	$.post(
		'ordenar.php', //sustituye el ~action del form~
		{idUser:$("#code").val()},
		function(data){ //trae el resultado de lo escrito arriba
			$("#tabla").fadeOut(1,"swing"); //Para que no se rpita la tabla al realizar una busqueda
			$("#resultado").html(data);
		}
	);
});
