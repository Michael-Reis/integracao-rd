<?php
    include("../conexao.php");
    include("../componentes/credencial.php");

    $rdcomp = new Token(); 
    $rdcomp->link = $link;
    $rdcomp->setAtribute(); 

    //print_r($rdcomp);
    date_default_timezone_set('America/Sao_Paulo');
    $params["client_id"] = $rdcomp->clientid;
    $params["client_secret"] = $rdcomp->client_secret;
    $params["refresh_token"] = $rdcomp->refresh_token; 
 

    $url = "https://api.rd.services"  . "/auth/token";
    ob_start();

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    curl_exec($ch);
 
    // JSON de retorno  
    $resposta = json_decode(ob_get_contents());
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    ob_end_clean();
    curl_close($ch);

    //print_r($resposta);
    $rdcomp->access_token = $resposta->access_token;
    
    $rdcomp->AtualizarToken(); 

?>