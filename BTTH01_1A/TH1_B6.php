<?php
    $keys = array(
        "field1"=>"first",
        "field2"=>"second",
        "field3"=>"third"
    );
    $values = array(
        "field1value"=>"dinosaur",
        "field2value"=>"pig",
        "field3value"=>"platypus"
    );

    //Tạo mảng thứ 3 từ 2 mảng trên

    $keysAndValues = array_combine($keys, $values);

    print_r($keysAndValues);

?>