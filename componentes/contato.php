<?php

class Contato{
    
    public $link;
    public $idcontato;
    public $uuid;
    public $name;
    public $email;
    public $bio;
    public $website;
    public $job_title;
    public $personal_phone;
    public $mobile_phone;
    public $city;
    public $state;
    public $twitter;
    public $facebook;
    public $linkedin;

    public function GetAll(){

        $qry = "
                SELECT * FROM CONTATO
        ";

        $result = mysqli_query($this->link, $qry);
        $resultado = mysqli_fetch_array($result);
    }

    public function insereContato(){
        

        $qryValida = "SELECT uuid FROM contato WHERE uuid = '$this->uuid'";
        $result = mysqli_query($this->link, $qryValida);  
        $qntResultado = mysqli_num_rows($result);
        
        if($qntResultado < 1){

            $qry = "INSERT INTO contato(uuid, 
            name, 
            email, 
            bio, 
            website,
            job_title,
            personal_phone,
            mobile_phone,
            city,
            state,
            twitter,
            facebook,
            linkedin) VALUES ('$this->uuid', 
            '$this->name',
            '$this->email',
            '$this->bio',
            '$this->website',
            '$this->job_title',
            '$this->personal_phone',
            '$this->mobile_phone',
            '$this->city',
            '$this->state',
            '$this->twitter',
            '$this->facebook', 
            '$this->linkedin')";  

            mysqli_query($this->link, $qry);  
            return $qry;  
            //$result = mysqli_query($this->link, $qry);
        }else{
            $qry = "UPDATE contato SET name = '$this->name', 
            email = '$this->email',
            bio = '$this->bio',
            website = '$this->website',
            job_title = '$this->job_title',
            personal_phone = '$this->personal_phone',
            mobile_phone = '$this->mobile_phone',
            city = '$this->city',
            state = '$this->state',
            twitter = '$this->twitter',
            facebook = '$this->facebook', 
            linkedin = '$this->linkedin'
            WHERE uuid = '$this->uuid'";  
            mysqli_query($this->link, $qry);   
            //echo "atualizando esse <br><br>";
           
        } 

              




    }

}

?>