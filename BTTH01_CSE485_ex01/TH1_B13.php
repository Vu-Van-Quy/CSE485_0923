<?php

$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72,
65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$sum = array_sum($numbers);
$count = count($numbers);
$TB = $sum/$count;
echo "Trung bình mảng = ".$TB.'<br>';
echo "Các số lớn hơn giá trị TB:";
foreach($numbers as $i){
    if($i > $TB){
        echo $i .',';
    }
}

echo '<br>';
echo "Các số nhỏ hơn hoặc bằng Tb: ";
foreach($numbers as $i){
    if($i <= $TB){
        echo $i .',';
    }
}
?>