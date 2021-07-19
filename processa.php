<html>
<head>
<meta charset="UTF-8">
<title>Seus dados</title>
</head>

<body>
<h1>Seu resultado:</h1>

	<?php
		if(isset($_GET["nome"]) == true){
		$nome = $_GET["nome"];
		echo "Nome: " . $nome . "<br>";
		}
		
		if(isset($_GET["opção"]) == true){
		$opção = $_GET["opção"];
		echo "Sexo: " . $opção . "<br>";
		}
		
		if(isset($_GET["CorOlhos"]) == true){
		$corOlhos = $_GET["CorOlhos"];
		echo "Cor dos olhos: " . $corOlhos . "<br>";
		}
		
		if(isset($_GET["altura"]) == true){
		echo "Altura maior que 1,83 <br>";
		}else{echo "Altura é menor que 1,83 <br>";}
		
		if(isset($_GET["peso"]) == true){
		echo "Peso maior que 91kg <br>";
		}else{echo "Peso menor que 91kg <br>";}
		
		if(isset($_GET["fis"]) == true){
		$fis = $_GET["fis"];
		echo $nome . " descreve a própria capacidade física como: " . $fis . "<br>";
		}
	?>
</body>
</html>