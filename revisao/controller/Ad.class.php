<?php
/**
* @see: Classe Ad responsável por gerenciar os emails e logins de rede interno
*/
class Ad{

	private static $usuario = 'Aluno';

	/**
	* @return:(String) $usuario
	* @see: Retorna o atributo usuario da classe Ad
	*/
	public function getUsuario()
	{
		return self::$usuario;
	}

}