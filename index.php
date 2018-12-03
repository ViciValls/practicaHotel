<?php
	session_start();
	header("Content-Type: text/html;charset=utf-8");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Prova AJAX</title>
	<script src="funcions.js"></script>
	<style>
		.pagact {
			color: #F22;
		}
		.pagnact {
			color: #22F;
		}
	</style>	
</head>
<body>
	<h1>Llista d'empleats</h1>
	<table id="llista">
	<tr>
		<th>Codi</th>
		<th>Nom d'empleat</th>
		<th>Funci&oacute;</th>
		<th>Departament</th>
		<th>Sou</th>
		<th>Comissi&oacute;</th>
		<th colspan="2">&nbsp;</th>
	</tr>
	</table>
	<div id="paginacio"></div>
	<h2>Afegir Empleat</h2>
	<form>
	<p>
		<label>Codi</label>
		<input type="text" name="codi" id="codi" />
	</p>
	<p>
		<label>Nom</label>
		<input type="text" name="nom" id="nom" />
	</p>
	<p>
		<label>Funci&oacute;</label>
		<input type="text" name="funcio" id="funcio" />
	</p>
	<p>
		<label>Sou</label>
		<input type="text" name="sou" id="sou" />
	</p>
	<p>
		<label>Data de contracte</label>
		<input type="date" name="datac" id="datac" />
	</p>
	<p>
		<label>Departament</label>
		<select name="dept" id="dept">
		<option value="">&nbsp;</option>
		</select>
	</p>
	<p>
		<input type="button" value="Afegir" onclick="afegirregistre(this.form)" />
	</p>
	</form>
	<script>
		inicia();
	</script>
</body>
</html>