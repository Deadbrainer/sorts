<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $array = explode(',', $_POST['array']);
    foreach ($array as $key){
        echo $key . " ";
    }
    echo "<br>";
    bubble_sort($array);
    foreach ($array as $item) {
        echo $item . ' ';
    }
}

function bubble_sort(&$arr) {
    $size = count($arr)-1;
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size-$i; $j++) {
            $k = $j + 1;
            if ($arr[$k] < $arr[$j]) {
                // Swap elements at indices: $j, $k
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
            }
        }
    }
    return $arr;
}
