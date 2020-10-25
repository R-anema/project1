<?php
//login form, password, login knop, link met account aanmaken, lost password link.
// check the signup.php file for explanation on code
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']) && !empty($_POST['submit'])){
    $fields = ['uname', 'pwd'];

    $obj2 = new Helper();
    $fields_validated = $obj2->field_validation($fields);

    if($fields_validated){
        $uname = trim($_POST['uname']);
        $password = trim($_POST['pwd']);
        
        $obj = new database('localhost', 'root', '', 'project1', 'utf8');

        // user redirected to welcome page in case of succesful login.
        // unsuccessfull login results in an error message (string)
        $loginError = $obj->login($uname, $password);
    }
}

 ?>

<!DOCTYPE html>
<html>
<form action="index.php" method="POST">

		<label> Username </label>
			<input id="username" value="" name="username" type="text" required="required"><br>

		<label> Password </label>
			<input id="password" value="" name="password" type="text" required="required"><br>

<input type="sumbit" name="login" value="login"><span>Login</span></button>
<a href="lostpsw.php"> Watchwoord veloren?</a>
<a href="signup.php"> Ik heb nog geen account.</a>

</form>
</html>
