<?php
//class database geindent volgens voorbeel PPH website
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
		$this->$db = $db;

		try{
			//need to connect to db localhost idk how

		}
	};
};

?>
