<?php
$filas=$_POST["filas"];
$espacios=$filas-1;
for ($i=1; $i<=$filas; $i++){
    $x=$i;
    for($j=1; $j<=($filas+($filas-1)); $j++){
        if($j<=$espacios){
            echo "&nbsp;&nbsp;";
        }
        else if ($j<=$filas){
            echo $x;
            $x--;

        }else if ($j>$filas && $j<=($filas+($filas-1)-$espacios)){
            if($j==$filas+1){
                $x++;
            }
            $x++;
            echo $x;
        }
        else{
            echo "&nbsp;&nbsp;";
        }
        
    }
    echo "<br>";
    $espacios--;
}