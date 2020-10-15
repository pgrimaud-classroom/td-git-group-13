<?php

$numbers = [];
for ($i = 1; $i <= 100; $i++) {
    $numbers[] = rand(10, 1000);
    if ($numbers[$i] > $numbers[$i+1]) {

    }
}
echo $numbers;

?>