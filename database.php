<?php
//class database geindent volgens voorbeel PHP website
class database{

	private $host;
	private $username;
	private $password;
	private $database;
	private $charset;
	private $db;

	public function __construct($host, $username, $password, $database, $charset, $db){
		$this->$host = $host;
		$this->$username = $username;
		$this->$password = $password;
		$this->$database = $database;
		$this->$charset = $charset;
		$this->$db = $db; // weet niet of die moet blijven.

	try {
		//indented with tab, beginnen aan connectie Database
		$dsn = "mysql:host-$this->$host;dbname-$this->$database;charset-$this->charset";
		$this->db = new PDO($dsn, $this->$username, $this->$password);
		echo 'Succesfully connected';
	} //error opvangen
	catch(PDOexception $e){
		$e->getMessage();
		exit('an error occured');
	}
	//account aanmaken moet in signup worden aangeroepen, en insert into ook gebruikt worden. TBA Singup checken of hij word aangeroepen, en afstemmen met.
	public function addAcount($voornaam, $tussenvoegsel, $achternaam, $email, $username, $password){ //error hierzo
		try{
			$this->db = new PDO($dsn, $this->$username, $this->$password); //nog bijwerken voor deze functie.

		}

	}

};

?>
