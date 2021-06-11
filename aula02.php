<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 2</title>
</head>
<body>
	<?php
	/*
	INTEIROS (int) - qualquer numero sem decimais positivo ou negativo
	PONTO FLUTUANTE (float, double ou real) - número com decimais
	STRING - texto
	BOOLEANOS - verdadeiro (TRUE) ou falso (FALSE)
	ARRAYS - variáveis multidimensionais, vetores
	OBJETOS - instância de uma classe
	RECURSOS - variáveis especiais do PhP que referenciam recursos externos
	NULO (null) - variável sem nenhum valor, porém é diferente de ""
	*/

	$idade = 17;
	$altura = 1.75;
	$nome = "João Marcelo Raber Gomes";
	$casado = false;

	$numero = 50;

	define('CONFIG', 1500);

	//echo CONFIG;

	function calc(){
		global $numero;
		echo $numero;
	}

	//calc();

	//$cadastro = array('Cliente1', 'Cliente2', 'Cliente3');
	//$cadastro[] = 'Cliente1';
	//$cadastro[] = 'Cliente2';
	//$cadastro = array('cliente1' => 'João', 'cliente2' => 'Cléber');
	$cadastro = array(
		'cliente1' => array(
			'nome' => 'João',
			'idade' => '17',
		),
		'cliente2' => array(
			'nome' => 'Cléber',
			'idade' => '56,
		),
	);
	var_dump(get_defined_vars());
	//echo $cadastro['cliente1']['nome'];

	//echo "Opa, meu nome é $nome e eu tenho $idade anos.";
</body>
</html>