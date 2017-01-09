<?php

$link = mysqli_connect("mysql.weblink.com.br", "u265443086_block", "t/n!02q9*T^Lo");

class Connection{

	private static $host;
	private static $user;
	private static $pass;
	private static $DB;
	private static $sql;
	public  static $instance;

	public function __construct(){
		date_default_timezone_set("America/Sao_Paulo");
	}

	public function setHost($host){
		self::$host = $host;
	}

	public function setLogin($user){
		self::$user = $user;
	}

	public function setPassword($pass){
		self::$pass = $pass;
	}

	public function setDB($DB){
		self::$DB = $DB;
	}

	public function getInstance(){
		$host = "mysql:host=".self::$host.";dbname=".self::$DB;
		if (!isset(self::$instance)) {
	    self::$instance = new PDO($host, self::$user, self::$pass,
	    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

	    self::$instance->setAttribute(PDO::ATTR_ERRMODE,
	      	PDO::ERRMODE_EXCEPTION);
    }
    return self::$instance;
	}
}


$connection = new Connection();
$connection->setHost("mysql.weblink.com.br");
$connection->setLogin("u265443086_block");
$connection->setPassword("t/n!02q9*T^Lo");
$connection->setDB("u265443086_block");
$instance = $connection->getInstance();


function searchCountry($id){
	global $instance;
	$select = $instance->prepare("SELECT * FROM country WHERE id = :p1");
	$select->bindParam(":p1",$id);
	$select->execute();
	if($select->rowCount() > 0){
		return $select->fetchAll()[0]["name"];
	}
}
