<?php

	var_dump($_POST);
?>

		<form action="job05.php" method="post">
			<label for="username">username</label>
			<input type="text" id="username" name="username"><br><br>
			<label for="password">password</label>
			<input type="text" id="password" name="password"><br><br>
			<input type="submit" value="Submit">
		</form>

<?php 
if($_POST['username'] == "John" && $_POST['password'] == "Rambo"){
	echo "C'est pas ma guerre";
}
else {
	echo "Votre Pire Cauchemars";
}
?>		