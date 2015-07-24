<?php
/**
* @see: Class Factory, responsável por controlar a criação de objetos diretos (new)
*/
class Factory{

	/**
	* @see: Cria um objeto do tipo Usuario
	* @return: (Object) Usuario
	*/
	public function criaUsuario()
	{
		return new Usuario();
	}

}