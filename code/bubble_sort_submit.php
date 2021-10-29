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

    bubbleSort($array);

    echo "Sorted array:\n";

    foreach ($array as $item) {
        echo $item . ' ';
    }

    echo "<br>";
    echo "<br>";
    echo "<a href='index.php'>Go to main menu</a>";
}

function bubbleSort(&$array): array
{
    $size = count($array) - 1;

    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size-$i; $j++) {
            $k = $j + 1;
            if ($array[$k] < $array[$j]) {
                list($array[$j], $array[$k]) = array($array[$k], $array[$j]);
            }
        }
    }

    return $array;
}
