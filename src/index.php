<?php
echo "TASK 1"."<br><br>";

$number = array("1","2","3","4","5");
echo "Original Array is ";
for ($i=0; $i <5 ; $i++) {  
    echo $number[$i]; # code...
}
$insert = array("$");
array_splice($number,3,0,$insert);
echo "<br>"."Updated Array is ";
for ($i=0; $i <6 ; $i++) {  
    echo $number[$i]; # code...
}


echo "<br><br>"."TASK 2"."<br>";

$temperature=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

echo "<br>"."this is count of array ".count($temperature);
echo "<br>"."this is sum of array ".array_sum($temperature);
echo "<br>"."this is average temperature". array_sum($temperature)/count($temperature);

echo "<br><br>"."TASK 3"."<br>";

sort($temperature);
echo "seven lowest temp is ";
for ($i=0; $i <7; $i++) {
    echo $temperature[$i];# code...
}

echo "<br><br>"."TASK 4"."<br>";

rsort($temperature);
echo "seven highest temp is ";
for ($i=0; $i <7; $i++) {
    echo $temperature[$i]; # code...
}

echo "<br><br>"."TASK 5"."<br>";

$color = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
$color2 = array('c2','c4');
$result = array_diff_key( $color, array_flip( $color2));
print_r($result);

// foreach ($temperature as $key => $value) {
//     echo $value;# code...
// }



// echo "Original Array is:"."<br>".$number[0]." ".$number[1]." ".$number[2]." ".$number[3]." ".$number[4];

// array_push($number,"$");
// for ($i=0; $i<=6; $i++) {
//     echo $number[$i];
// }



// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// foreach ($a1 as $value) {
// echo "<ul>";
// echo "<li>";
//     echo $value;
// echo "</li>";
// echo "</ul>";
// }
// $a2=array("a"=>"purple","b"=>"orange");
// array_splice($a1,0,2,$a2);
// foreach ($a1 as $key => $value) {
//     echo "<ul>";
//     echo $value;
//     echo "</ul>";
// }
// print_r($a1);
?>