<?php

    $start = $_GET['start'];
    $len = $_GET['long'];
    $items = array();
    for($i = 0; $i < $len; $i++){
        array_push($items, '内容' . ($start+$i+1));
    }
    echo json_encode($items);

?>