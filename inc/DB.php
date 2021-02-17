<?php

class DB
{
	static $con;

	function __construct()
	{
		if (self::$con == null) {
			self::$con = $this->conectar();
		}
	}

	public function getCon()
	{
		return self::$con;
	}

	private function conectar()
	{
		try {
			return new PDO(
				'mysql' .
					':host=localhost' .
					';dbname=homework' .
					';user=root' .
					';password='
			);
		} catch (\PDOException $e) {
			echo 'ERRO DE CONEXÃO COM O BANCO:';
			echo '<pre>';
			var_dump($e);
			echo '</pre>';
			exit;
		}
	}
}
