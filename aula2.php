<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Aula 2</title>
</head>
<body>
	<?php

		$idade = 18;
		$altura = 1.68;
		$nome = "Fernanda Maldaner Prediger";
		$casado = false;

		$numero = 12;

		define('CONFIG', 1500);

		//echo CONFIG;

		function calc(){
			global $numero;
			echo $numero;
		}

		//calc();

		//$cadastro = array('Cliente 1', 'Cliente 2', 'Cliente 3');
		//$cadastro[] = 'Cliente 1';
		//$cadastro[] = 'Cliente 2';
		//$cadastro = array('cliente1' => 'Fernanda', 'cliente2' => 'Isabela');
		$cadastro = array(
			'cliente1' => array(
				'nome' => 'Fernanda',
				'idade' => 18,
			),
			'cliente2' => array(
				'nome' => 'Isabela',
				'idade' => 12,
			),
		);

		var_dump(get_defined_vars());

		//echo $cadastro['cliente1']['nome'];

		//echo "Olá, meu nome é $nome e eu tenho $idade anos.";
	?>
</body>
</html>