<?php
//foreach ($user as $key => $value) {
//	echo json_encode(array("id"=>"1"));
//}

foreach ($user as $key => $value) {
    if(verificaPlataforma() == true){

        echo json_encode(array("erro"=>"false","id"=>$value['id'],"login"=>$value['login']));

    }
    else{
        echo "LOGADO";
}


}

function verificaPlataforma(){

    $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
    $ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
    $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
    $palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    $berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
    $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
    $symbian =  strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
    if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true){
        return true;
    } else{

        return false;
    }
}