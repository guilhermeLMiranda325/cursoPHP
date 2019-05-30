<?php

	class Endereco
	{

		private $logradouro;
		private $numero;
		private $cidade;
		
		function __construct($a, $b, $c)
		{
			
			$this->logradouro = $a;
			$this->numero = $b;
			$this->cidade = $c;

		}

		function __destruct() 
		{

			//var_dump("DESTRUIR");

		}

		function __toString() 
		{

			return $this->logradouro.", ".$this->numero." - ".$this->cidade;

		}
	}

	$meuEndereco = new Endereco("Rua Ademar Saraiva Leão", "123", "Santos");

	/* var_dump($meuEndereco);

	unset($meuEndereco); */

	echo $meuEndereco;

?>