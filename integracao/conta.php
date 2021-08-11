<?php
    include("../conexao.php");
    include("../componentes/credencial.php");

    $rdcomp = new Token(); 
    $rdcomp->link = $link;
    $rdcomp->setAtribute(); 

    $token = $rdcomp->access_token; 
    
    $uuid = "michael.reis@orit.com.br"; 
    $base_url = "https://api.rd.services";
    $options = array(
        'http' => array(
            'header' =>'Authorization: Bearer ' .$token."\r\n".
                "Content-Type: application/json\r\n",
            'method' => 'GET'
        )
    );

    $context = stream_context_create($options);
    $result = file_get_contents($base_url."/platform/contacts/${uuid}", false, $context); 
    $json = json_decode($result);

    print_r($json);

    if(isset($json->uuid)){
        print_r($json) ;
    }
    return false;


?>


