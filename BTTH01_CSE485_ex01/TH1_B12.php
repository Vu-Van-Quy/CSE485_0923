<?php
$numbers = [
 'key1' => 12,
 'key2' => 30,
 'key3' => 4,
 'key4' => -123,
 'key5' => 1234,
 'key6' => -12565,
];
//Phần tử đầu và phần tử cuối
echo "Phần tử đầu tiên: ".reset($numbers) .'<br>';
echo "Phần tử cuối cùng: ".end($numbers).'<br>' ;
//Sô lớn nhất, nhỏ nhát, tổng các giá trị
$max = 0;
$min=PHP_INT_MAX;
foreach($numbers as $key => $value){
    if($value > $max){
        $max = $value;
    }
    if($value < $min){
        $min = $value;
    }
}
echo "Số lớn nhất là: ".$max.'<br>';
echo "Số nhỏ nhất là: ".$min.'<br>';

//Sắp xếp mảng tăng giảm theo giá trị
asort($numbers);
$values = array_values($numbers);
echo "sắp xếp tăng dàn theo giá trị:";
foreach ($values as $value) {
    echo $value . "\n";
}
echo '<br>';
arsort($numbers);
$values = array_values($numbers);
echo "sắp xếp giảm dần theo giá trị:";
foreach ($values as $value) {
    echo $value . "\n";
}
?>