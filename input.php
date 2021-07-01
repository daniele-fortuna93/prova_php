<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
        $file_name = 'input.json';
        $list = json_decode(file_get_contents($file_name), true);
        $input_text = json_decode(file_get_contents("php://input"), true);
        $list[] = $input_text['to_do'];

        $response = json_encode($list);
              
        file_put_contents($file_name, $response);

        echo $response;
    }



          