<?php
//login form
//password, login knop, link met account aanmaken, lost password link

 ?>

<!DOCTYPE html>
<html>
<form action="index.php" method="POST">
	<p>
		<label> Username </label>
			<input id="username" value="" name="username" type="text" required="required">
		<br>
	</p>

	<p>
		<label> Password </label>
			<input id="password" value="" name="password" type="text" required="required">
		<br>
	</p>

<button type="submit"><span>Login</span></button>
<br>
<button type="submit"><span>Create Account</span></button>
<button type="submit"><span>Lost Password Link</span></button>

</form>

</html>
