<?php

// class Json{


function readData(){

    if(!file_exists('./../data/clients.json')){
        $data = json_encode([]);
        file_put_contents('./../data/clients.json',$data);
    }
    $data = file_get_contents('./../data/clients.json');
    $data = json_decode($data,1);
    return $data;
    
}
function writeData($data){
    $data = json_encode($data);
    file_put_contents('./../data/clients.json',$data);
}




// }











?>