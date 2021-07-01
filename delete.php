<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
    $file_name = 'input.json';
    $list = json_decode(file_get_contents($file_name), true);
    $index = json_decode(file_get_contents("php://input"), true);
    $index = intval($index);
    unset($list[$index]);
    $list = array_values($list);

    $response = json_encode($list);
          
    file_put_contents($file_name, $response);

    echo $response;
}