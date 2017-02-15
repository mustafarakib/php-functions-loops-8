<?php
$exp = true;

//start of while loop
$count = 0;
$i = 1;
    while($i<=10){
        $count = $count +1;
        echo "i'm inside the while loop$i<br>";
        $i++;
    }
echo "count = $count<br><br>";
// end while loop


$count = 0;
$i = 100;

    // start of do while loop
    do{
        $count = $count +1;
        echo "i'm inside the do while loop$i<br>";
        $i++;
    }
    while($i<=10);
    // end of do while loop

echo "count = $count<br><br>";


for($i=1,$j=10,$k=20; $k>$i; $i++,$j+=2,$k-- ){
    if($j>$k) break;
    echo "$i";
}
echo "<br><br>";


$ageArray = array("Jorinar Bap"=>52, "Abul"=>35, "Kuddus"=>45);
foreach($ageArray as $key=>$value){
    echo   " $key => $value<br>";
}
