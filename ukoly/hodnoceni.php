<?php
$studentName = "Jan Novák"; 
$test1 = 75; 
$test2 = 90; 
$test3 = 60;
$average = ($test1 + $test2 + $test3) / 3;
$celkem=$test1 + $test2 + $test3;
$uspesnost=$celkem*100;
if
(>$uspesnost=>90||$uspesnost<=100){
    $grade = 1;
}
elseif
($uspesnost<90 || $uspesnost<=80 && $uspesnost>75){
    $grade = 2;
}
elseif
($uspesnost<80 || $uspesnost<=75 && $uspesnost>60){
    $grade = 3;
}
else
($uspesnost<75 || $uspesnost<=60 && $uspesnost>40){
    $grade = 4;
}
elseif($uspesnost<40 || $uspesnost<=0 && $uspesnost>0){
    $grade = 5;
}

<h1>Hodnocení studenta: <?php echo $studentName; ?></h1>
<p>Test 1: <?php echo $test1; ?>%</p>
<p>Test 2: <?php echo $test2; ?>%</p>
<p>Test 3: <?php echo $test3; ?>%</p>
<p>Průměr: <?php echo $average; ?>%</p>
<p>Celkem: <?php echo $celkem; ?>%</p>
<p>Úspěšnost: <?php echo $uspesnost; ?>%</p>
<p>Známka: <?php echo $grade; ?></p>
if($grade<4){
    $message = "Student neuspěl.";
}
else{
    $message = "Student uspěl.";
}
