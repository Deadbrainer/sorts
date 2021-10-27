<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $array = explode(',', $_POST['array']);
    foreach ($array as $key){
        echo $key . " ";
    }
    echo "<br>";
    linear_Sort($array);
    foreach ($array as $item) {
        echo $item . ' ';
    }
}

function linear_Sort(&$array)
{
    for($i = 0; $i < count($array); $i++){
        $val = $array[$i];
        $j = $i-1;
        while($j >= 0 && $array[$j] > $val){
            $array[$j+1] = $array[$j];
            $j--;
        }
        $array[$j+1] = $val;
    }
    return $array;
}