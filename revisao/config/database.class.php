<?php
/**
* @see:Classe DataBase, responsável por gerenciar conexão(s) com N host ou base
*/
class Database{

	const USER = 'root';
	const PASSWORD = 'elaborata';

	/*Atributo de controle a instancia unica da classe*/
	private static $instancia;

	public function __construct()
	{
		//$this->conecta($usuario);
	}

	/**
	* @see: Metodo Singleton de controle unico a new
	*/
	public static function conecta()
	{
		try {
			if(!isset(self::$instancia))
			{
				return self::$instancia = new Database();
			}
			return self::$instancia;
		} catch (Exception $e) {
			throw new Exception($e->getMessage());
		}
	}

	/**
	* @see: Metodo responsavel por verificar conexão com banco de dados
	* @return: (bool)True or False
	*/
	public function checkConnect()
	{
		try {
			$dsn = 'mysql:host=localhost;dbname=elaborata';
			//new PDO = cria objeto do tipo PDO
			$bd = new PDO($dsn, self::USER, self::PASSWORD);
			
			if($bd)
			{
				return true;
			}
			return false;

		} catch (Exception $e) {
			throw new Exception($e->getMessage());
		}
	}

}