<?php
    include("array.php");
    include("../conexao.php");
    include("../componentes/credencial.php");

    $rdcomp = new Token(); 
    $rdcomp->link = $link;
    $rdcomp->setAtribute(); 

    $token = $rdcomp->access_token;  
    
     
    $url = "https://api.rd.services/platform/events";

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
    
    $headers = array(
       "Content-Type: application/json",
       "Authorization: Bearer ${token}",
       'method'  => 'POST'
    );

    print_r($headers);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    
    $resp = curl_exec($curl);
    curl_close($curl);
    var_dump($resp);
    
    ?>





?>


