<?php

$link = mysqli_connect("mysql.weblink.com.br", "u265443086_block", "t/n!02q9*T^Lo");

class Conexao{

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


$conexao = new Conexao();
$conexao->setHost("mysql.weblink.com.br");
$conexao->setLogin("u265443086_block");
$conexao->setPassword("t/n!02q9*T^Lo");
$conexao->setDB("u265443086_block");
$instancia = $conexao->getInstance();
