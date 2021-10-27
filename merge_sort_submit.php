<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $array = explode(',', $_POST['array']);
    foreach ($array as $key){
        echo $key . " ";
    }
    echo "<br>";
    merge_sort($array);
    foreach ($array as $item) {
        echo $item . ' ';
    }
}
function merge_sort(&$array){
    if(count($array) == 1){
        return $array;
    }

    $middle = count($array)/2;
    $left = array_slice($array, 0, $middle);
    $right = array_slice($array, $middle);

    return merge(merge_sort($left), merge_sort($right));
}

function merge($left, $right): array
{
    $res = array();
    $indexLeft = 0;
    $indexRight = 0;

    while ($indexLeft < count($left) && $indexRight < count($right)){
        if($left[$indexLeft] < $right[$indexRight]){
            array_push($res, $left[$indexLeft]);
            $indexLeft++;
        }
        else{
            array_push($res, $right[$indexRight]);
            $indexRight++;
        }
    }

    while($indexLeft < count($left)){
        array_push($res, $left[$indexLeft]);
        $indexLeft++;
    }
    while ($indexRight < count($right)){
        array_push($res, $right[$indexRight]);
        $indexRight++;
    }

    return $res;
}