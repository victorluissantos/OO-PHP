<?php
require_once('config/Database.php');

Class Usuario extends Database
{
	protected $usuario = 'Root';

	public function __construct()
	{
		parent::__construct();
	}

	public function getUsuario()
	{	
		try {
			if ($this->chckConnect()) {
				return $this->usuario;
			}else{
				return "Não capturado";
			}
		} catch (Exception $e) {
			throw new Exception($e->getMessage());
		}
	}
}