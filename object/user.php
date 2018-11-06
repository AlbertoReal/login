<?php
//usuarios
class User{

	//conexion a la base de datos y la tabla de usuarios
	private $conn;
	private $table_name="users";

	//propiedaddes de los objetos de dicha tabla

	public $id;
	public $firstname;
	public $lastname;
	public $email;
	public $contact_number;
	public $address;
	public $password;
	public $access_level;
	public $access_code;
	public $status;
	public $created;
	public $modified;

	//constructor
	public function __construct($db){
		$this->conn = $db;
	}
}