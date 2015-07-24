<?php
require_once('UsuarioFactory.class.php');

function loadClass($nameFile)
{
	if (!file_exists($nameFile)) {
		require ($nameFile.'.class.php');
	}
}

spl_autoload_register('loadClass');

try{
	$usuario = usuarioFactory::criaUsuario();
	$ad = new Ad();

	echo 'Usuario AD: '.$usuario->getUsuario();
	echo "<br>";
	echo 'Usuario AD: '.$ad->getUsuario();

} 
catch (Exception $e) 
{
	echo $e->getMessage();
}