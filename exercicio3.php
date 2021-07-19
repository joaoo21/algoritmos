  
<!DOCTYPE html>
<html>
<head>
	
    <meta charset="UTF-8">
</head>
  
<?php
$i = 1;
$vet = array();
$men = 10;
$pos = 0;
$exc = array();
while ($i <= 5) {
	$vet[] = mt_rand(0,10);
	$i++;
}
$i=0;
foreach($vet as $v){
	if ($v < $men){
	$men = $v;
	$pos = $i;
	} elseif ($v == $men){
	$exc[] = $i;
	}
	$i++;
}
echo("Menor número é: ".$men . "<br>");
echo("E está na posição: ".$pos);
?>
