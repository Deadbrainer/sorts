<html lang="en">
<style>
    a {
        color: black;
        text-decoration: none;
        margin-left: 10px;
        padding: 10px;
    }
    a:hover{
        border-radius: 20px;
        border: black solid 1px;
        padding: 9px;
        transition: 2ms;
    }
</style>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $array = explode(',', $_POST['array']);
    echo "Entered array:\n";

    foreach ($array as $item) {
        echo $item . " ";
    }

    echo "<br>";

    $array = mergeSort($array);

    echo "Sorted array:\n";

    foreach ($array as $item) {
        echo $item . ' ';
    }

    echo "<br>";
    echo "<br>";
    echo "<a href='index.php'>Go to main menu</a>";
}

function mergeSort($array): array
{
    if (count($array) == 1) {
        return $array;
    }

    $middle = count($array) / 2;
    $left   = array_slice($array, 0, $middle);
    $right  = array_slice($array, $middle);

    return merge(mergeSort($left), mergeSort($right));
}

function merge($left, $right): array
{
    $sortedArray = [];
    $leftSize = count($left);
    $rightSize = count($right);

    for (;$leftSize > 0 && $rightSize > 0;) {
        if ($left[0] < $right[0]) {
            array_push($sortedArray, array_shift($left));
            $leftSize--;
        } else {
            array_push($sortedArray, array_shift($right));
            $rightSize--;
        }
    }

    foreach ($left as $leftItem) {
        array_push($sortedArray, $leftItem);
    }

    foreach ($right as $rightItem) {
        array_push($sortedArray, $rightItem);
    }

    return $sortedArray;
}