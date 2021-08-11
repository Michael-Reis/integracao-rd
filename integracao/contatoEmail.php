<?php

    function salvaContato($emailrecebido)
    {  
        include("../componentes/credencial.php");
        include("../componentes/contato.php");
        include("../conexao.php");
        $rdcomp = new Token(); 
        $rdcomp->link = $link;
        $rdcomp->setAtribute(); 
    
        $contatocomp = new Contato(); 
        $contatocomp->link = $link;
    
        $token = $rdcomp->access_token; 
        

        if(isset($emailrecebido)){

            $email = $emailrecebido;   
            $base_url = "https://api.rd.services";
            $options = array(
                'http' => array(
                    'header' =>'Authorization: Bearer ' .$token."\r\n".
                        "Content-Type: application/json\r\n",
                    'method' => 'GET'
                ) 
            ); 
            //echo $token;
            $context = stream_context_create($options);
            $result = file_get_contents($base_url."/platform/contacts/email:".$email, false, $context);
            $json = json_decode($result, true); 
            //print_r($result); 
            $contatocomp->email = isset($json['email']) ? $json['email'] : null;
            $contatocomp->name = isset($json['name']) ? $json['name'] : null;
            $contatocomp->job_title = isset($json['job_title']) ? $json['job_title'] : null;
            $contatocomp->bio = isset($json['bio']) ? $json['bio'] : null;
            $contatocomp->uuid = isset($json['uuid']) ? $json['uuid'] : null;
            $contatocomp->state = isset($json['state']) ? $json['state'] : null;
            $contatocomp->city = isset($json['city']) ? $json['city'] : null;
            $contatocomp->mobile_phone = isset($json['mobile_phone']) ? $json['mobile_phone'] : null;
            $contatocomp->linkedin = isset($json['linkedin']) ? $json['linkedin'] : null;
            $contatocomp->facebook = isset($json['facebook']) ? $json['facebook'] : null;
            $contatocomp->twitter = isset($json['twitter']) ? $json['twitter'] : null;
            $contatocomp->website = isset($json['website']) ? $json['website'] : null;
            $contatocomp->personal_phone = isset($json['personal_phone']) ? $json['personal_phone'] : null;
            $contatocomp->insereContato();   
  
        }else{ 
            return "não existe email";
        }
        
    }

       
    // }



?>


