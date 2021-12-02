<?php
//OBTIENE EL URL ABSOLUTO DE LA CARPETA SISTEMA
function url_site(){
    $host= $_SERVER["HTTP_HOST"];
    if (preg_match('#^(https?://|www\.)#i', $host) === 1){
        $url='http://'.$host.'/sistema/';
    } else{
        $url='http://'.$host.'/sistema/';        
    }    
    return $url;        
}
function  url_controllers(){
    $host= $_SERVER["HTTP_HOST"];
    if (preg_match('#^(https?://|www\.)#i', $host) === 1){
        $url='http://'.$host.'/sistema/'.'controllers/';
    } else{
        $url='http://'.$host.'/sistema/'.'controllers/';        
    }    
    return $url;        
}
function url_views(){
    $host= $_SERVER["HTTP_HOST"];
    if (preg_match('#^(https?://|www\.)#i', $host) === 1){
        $url='http://'.$host.'/sistema/'.'views/';
    } else{
        $url='http://'.$host.'/sistema/'.'views/';        
    }    
    return $url;        
}

?>

