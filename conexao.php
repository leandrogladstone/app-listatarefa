<?php

class Conexao {

	private $host = 'kingdev_leandro';
	private $dbname = '';
	private $user = 'kingdev_leandro';
	private $pass = '0n7$8V;XR.sJ';

	public function conectar() {
		try {

			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"
			);

			return $conexao;

		} catch(PDOException $e) {
			echo '<p>' . $e->getMessage(). '</p>';
		}

	}
}



?>