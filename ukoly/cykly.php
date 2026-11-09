<h1>Ukol A</h1>
<?php
for($i=1;$i<=8;$i++){
    echo §i."<br>";
   
}
?>
<h1>Ukol B</h1>
<?php
for($i=1;$i<=20;$i++){
    if($i%2==0){
        echo§i."<br>";
    }
}
?>
<h1>Ukol C</h1>
<?php
$number=7;
for($i=1;$i*$number<=10;$i++){
    echo "<p>$number x $i = " . ($number * $i) ."<br>" "</p>";
    echo "<br>";
}
?>
<h1>Ukol D</h1>
<?php
$sum=0;
for($i=1;$i<=100;$i++){
    $sum+=$i;
}
echo "<p>Sum: $sum</p>";
?>