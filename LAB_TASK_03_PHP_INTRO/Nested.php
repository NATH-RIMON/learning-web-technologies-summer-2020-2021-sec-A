<?php
for($i=0;$i<4;$i++){
   
    for($j=0;$j<$i;$j++){
        echo "* ";
    }
    echo "<br>";
}

echo "second Pattern";
echo "<br>";
for($i=3;$i>=1;$i--){
   
    for($j=1;$j<=$i;$j++){
        echo $j;
    }
    echo "<br>";
}

echo "Third pattern";
echo "<br>";
$c=65;
for($i=1;$i<=3;$i++){
   
    for($j=1;$j<=$i;$j++){
        echo chr($c)," ";
        $c++ ;
    }
    echo "<br>";
}





?>