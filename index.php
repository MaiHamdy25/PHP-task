<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //firt task;
    $text = "first line \n second line";
    echo nl2br($text);
    echo "<br/>";
    //second task
    foreach ( $_SERVER as $key => $value){
        print "$key = $value <br/>";
    }
    // third task
    $myName = "mai hamdy hussien";
    echo strtr($myName,"mai","no"); //replace string with another string
    echo "<br/>";
    echo strrev($myName); //reverse string 
    echo "<br/>";
    echo substr_count($myName,"a");//Count the number of times "a" occurs in the string
    echo "<br/>";
    //forth task
    $indexedArray = array(12,45,10,25);
    echo array_sum($indexedArray); //sum
    echo "<br/>";
    $average = array_sum($indexedArray)/count($indexedArray);
    echo $average;//avg
    echo "<br/>";
    rsort($indexedArray); //reverse order
    foreach ($indexedArray as $value) {
        echo $value . " ";
    }
    echo "<br/>";
    //fifth task
    $associativeArray = array(
        "sara" => 31,
        "john" => 41,
        "walaa" => 39,
        "ramy" => 40
    );
    asort($associativeArray); //value in ascending order
    foreach ($associativeArray as $key => $value) {
        echo "$key: $value<br/>";
    }
    echo "<br/>";
    ksort($associativeArray); //key in ascending order
    foreach ($associativeArray as $key => $value) {
        echo "$key: $value<br/>";
    }
    echo "<br/>";
    arsort($associativeArray); //value in descending order
    foreach ($associativeArray as $key => $value) {
        echo "$key: $value<br/>";
    }
    echo "<br/>";
    krsort($associativeArray); //key in descending order
    foreach ($associativeArray as $key => $value) {
        echo "$key: $value<br/>";
    }
    ?>
</body>
</html>