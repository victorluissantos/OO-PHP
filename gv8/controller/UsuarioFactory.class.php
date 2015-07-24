<?php
//require_once('usuario.class.php');
class UsuarioFactory
{
	public function criaUsuario()
	{
		return new Usuario();
	}

}