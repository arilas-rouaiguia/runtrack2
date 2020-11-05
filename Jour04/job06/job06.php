<?php

	var_dump($_GET);
?>

		<form action="job06.php" method="get">
			<label for="nombre">Nombre</label>
			<input type="text" id="nombre" name="nombre"><br><br>
			<input type="submit" value="Submit">
		</form>

<?php 
if($_GET['nombre'] %2){
	echo "Nombre impair";
}
else {
	echo "Nombre pair";
}
?>		