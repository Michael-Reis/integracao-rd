<?php

class Token{

    public $link;
    public $code;
    public $refresh_token;
    public $access_token;
    public $clientid;
    public $client_secret;

    public function getAll(){

        $qry = "
                SELECT * FROM acessord
            ";
        $result = mysqli_query($this->link, $qry);
        return $result;
    
    }

    public function getCode(){
        return $this->code;
    }
    public function getRefreshToken(){
        return $this->refresh_token;
    }
    public function getAcessToken(){
        return $this->access_token;
    }
    public function getClientId(){
        return $this->clientid;
    }
    public function getClientSecret(){
        return $this->client_secret;
    }

    public function AtualizarToken(){

        $qry = " UPDATE acessord 
            SET access_token =    '$this->access_token'    ";            
        echo $qry;
        $result = mysqli_query($this->link, $qry); 

    }

    public function setAtribute(){
         
        $au = $this->getAll();
        while($du = mysqli_fetch_array($au, MYSQLI_ASSOC))
        {

            $this->code = $du['code'];
            $this->refresh_token = $du['refresh_token'];
            $this->access_token = $du['access_token'];
            $this->clientid = $du['clientid'];
            $this->client_secret = $du['client_secret'];
        
        }


    }
    
}

?>