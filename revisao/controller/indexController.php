<?php
require_once('config/database.class.php');
function carregaClass($nameFile)
{
	if(!file_exists($nameFile))
	{
		include($nameFile.'.class.php');
	}
}

spl_autoload_register('carregaClass');

try {
	$usuario = Factory::criaUsuario();
	echo 'Usuario do banco: '; echo $usuario->getUsuario()?'root':'{nao capiturado}';
	//Instancia a Classe Ad gerando o objeto $ad
	echo '<br />';
	$ad = new Ad();
	//Chamando a função getUsuario pelo objeto $ad;
	echo 'Usuario do AD: '.$ad->getUsuario();

} catch (Exception $e) {
	echo $e->getMessage();
}