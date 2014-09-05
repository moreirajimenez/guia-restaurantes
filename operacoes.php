<?php
function soma($x, $y){
    $soma = $x + $y;
    return $soma;
}
function sub($x, $y){
    $sub = $x - $y;
    return $sub;
}
function mult($x, $y){
    $mult = $x*$y;
    return $mult;
}
function div($x, $y){
    if ($y==0){
        echo "não existe";
    }
    else{
    $div = $x/$y;
}
    return $div;
}
$valorX =  4;
$valorY = 2;
echo "o resultado da soma é ".soma($valorX, $valorY);
echo "<br><br>";
echo "o resultado da subtração é ".sub($valorX, $valorY);
echo "<br><br>";
echo "o resultado da multipliacação é ".mult($valorX, $valorY);
echo"<br><br>";
echo "o resultado da divisão é ".div($valorX, $valorY);
?>