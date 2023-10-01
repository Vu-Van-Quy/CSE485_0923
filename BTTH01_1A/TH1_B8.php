<?php
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
    $maxLenght = 0;
    $maxString ='';
    $minLenght = PHP_INT_MAX;
    $minString = '';


    foreach($array as $string){
        $lenght = strlen($string);
        if($lenght > $maxLenght){
            $maxLenght = $lenght;
            $maxString = $string;
        }

        if($lenght < $minLenght){
            $minLenght = $lenght;
            $minString = $string;        
        }
    }
    echo "Chuỗi lớn nhất là " .$maxString .", độ dài là = " .$maxLenght."<br>";
    echo "Chuỗi nhỏ nhất là " .$minString .", độ dài là = " .$minLenght;
?>