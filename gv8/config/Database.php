<?php

define('USER','root');
define('PASSWORD','elaborata');

class Database{

	protected static $conexao;

	// const USER = 'root';
	// const PASSWORD = 'elaborata';

	public function __construct()
	{	
		try {
			$dsn = 'mysql:host=localhost;dbname=elaborata';
			//$db = new PDO($dsn, self::USER, self::PASSWORD);
			$db = new PDO($dsn, USER, PASSWORD);

		} catch (Exception $e) {
			throw new Exception($e->getMessage(), 1);	
		}
	
	}

	public static function conecta(){

		try {
			if (!isset(self::$conexao)) {
				self::$conexao = new Database();
			
			}

			return self::$conexao;	

		} catch (Exception $e) {
			throw new Exception($e->getMesage(), 1);
		}
	}
	/**
	* @see Retorna se conecctou ou não no banco
	*/
	public static function chckConnect()
	{
		if(self::conecta())
			return true;
		else
			return false;
	}
}