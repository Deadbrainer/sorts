<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Merge Sort</title>
</head>
<body>
<h1>Merge Sort</h1>
<form action="merge_sort_submit.php" method="post">
    <label>
        <p>Enter array of number separated by ','.</p>
        <input name="array" type="text">
    </label>
    <button type="submit">Ok</button>
</form>
<a href="index.php">Go to main menu</a>
</body>
</html>

<style>
    button {
        background: white;
        border: none;
        cursor: pointer;
    }
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
<?php

