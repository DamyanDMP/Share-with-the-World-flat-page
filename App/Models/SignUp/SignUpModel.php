<?php

namespace App\Models\SignUp;


class signUpModel{
    private $email;
    private $password;
    private $confPassword;
    public $activationCode;

    public function __construct($email,$password,$confPassword)
    {
        $this->email = $email;
        $this->password = $password;
        $this->confPassword = $confPassword;
        $this->activationCode = sha1($email);
    }

    public function validateEmail($email){

        if(filter_var(trim($email), FILTER_VALIDATE_EMAIL)){
            return true;
        }
        else{
            return false;
        }
    }
    public function validatePass($pass,$confPass){
            $pass = trim($pass);
            $confPass = trim($confPass);
        if((strlen($pass) >= 6 && strlen($pass) <=20)){
          if(preg_match("/[0-9A-Za-z]/",$pass)){
                if($pass == $confPass){
                    return true;
                }
            }
        }
        else{
            return false;
        }
    }

    public function validate(){
        if(!$this->validateEmail($this->email)){
            return false;
        }
       else if($this->validatePass($this->password,$this->confPassword)){
           return false;
       }
       return true;
    }
    public function CheckDB()
    {
        $app = \Yee\Yee::getInstance();
        if(!$app->db['default']->where('email', $this->email)->getOne('users') == null) {
            return false;
        }
        return true;
    }

    public function Register()
    {
        $app = \Yee\Yee::getInstance();
        $db = $app->db['default'];
        $date = date('Y-m-d H:i:s');
        $user = array(
                "email" => $this->email,
                "password" => $this->password,
                "active" => 1,
                "signupDate" => $date,
                "ip" => "85.187.98.103",
        );
        $db->insert("users", $user);
    }
}