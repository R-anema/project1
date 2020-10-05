<?php
//login form
//password, login knop, link met account aanmaken, lost password link

 ?>

<!DOCTYPE html>
<html>
<form action="index.php" method="POST">
	<p>
		<label> Username </label>
			<input id="username" value="" name="username" type="text" required="required"><br>
	</p>

	<p>
		<label> Password </label>
			<input id="password" value="" name="password" type="text" required="required"><br>
	</p>

<input type="sumbit" name="login" value="login"><span>Login</span></button>
<a href="lostpsw.php"> Watchwoord veloren?</a>
<a href="signup.php"> Ik heb nog geen account.</a>

</form>
</html>
