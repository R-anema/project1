<?php
//new user form
include 'database.php';

$db = new database('localhost', 'root', '', 'project1', 'utf8_decode(data)');

 ?>

<html>
  <form action="signup.php" method="POST">
    <p>
      <label> Username </label>
        <input id="username" value="" name="username" type="text" required="required"><br>
    </p>

    <p>
    <label> Tussenvoegsel </label>
        <input id="tussenvoegsel" value="" name="tussenvoegsel" type="text"><br>
    </p>

  <p>
    <label> Achternaam </label>
      <input id="achternaam" value="" name="achternaam" type="text" required="required"><br>
  </p>

  <p>
    <label> Email </label>
      <input id="email" value="" name="email" type="text" required="required"><br>
  </p>

  <p>
    <label> Gebruikersnaam </label>
      <input id="gebruikersnaam" value="" name="gebruikersnaam" type="text" required="required"><br>
  </p>

    <p>
    <label> wachtwoord </label>
      <input id="wachtwoord" value="" name="wachtwoord" type="text" required="required"><br>
  </p>

  <p>
    <label> herhaal wachtwoord </label>
      <input id="hwachtwoord" value="" name="hwachtwoord" type="text" required="required"><br>
  </p>

  <button type="submit"><span>Word Gebruiker</span></button>
  <a href="index.php"> Ik heb al een account. </a>
</form>
</html>
