<?php

	var_dump($_POST);
?>

		<form action="job04.php" method="post">
			<label for="argument">argument</label>
			<input type="text" id="argument" name="argument"><br><br>
			<label for="argument2">argument2</label>
			<input type="text" id="argument2" name="argument2"><br><br>
			<input type="submit" value="Submit">
		</form>
		
		
<table> <tr>Argument</tr> <tr>Valeurs</tr>
<tr>
<td><?php echo $_POST["argument"]; ?></td>
<td><?php echo $_POST["argument2"]; ?></td>
</tr>
</table>
	
		