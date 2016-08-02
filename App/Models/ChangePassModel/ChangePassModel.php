<?php

namespace App\Models\ChangePassModel;

class ChangePassModel
{
    private $password;
    private $repeatPassword;

    public function __construct($password, $repeatPassword)
    {
        $this->password = $password;
        $this->repeatPassword = $repeatPassword;
    }

    /**
     * @return boolean
     */
    public function validatePass()
    {
        $pass = trim($this->password);
        $repeatPassword = trim($this->repeatPassword);

        if ((strlen($pass) >= 6 && strlen($pass) <= 20))
        {
            if (preg_match("/[0-9A-Za-z]/", $pass))
            {
                if ($pass == $repeatPassword)
                {
                    return true;
                } else {
                    echo "Passwords are not same!";
                    return false;
                }
            } else {
                echo "Password have wrong symbol(s)!";
                return false;
            }
        }
        else
        {
            echo "Password must be between 6 and 20 symbols!";
            return false;
        }
    }
    public function updateDetails()
    {
        $app = \Yee\Yee::getInstance();

        if(true){
            $data = array(
                "password" => $this->password,
            );
            $app->db['default']->where('email', $_SESSION['email'])->update('users', $data);
            echo "Changed password successfully";
        } else {
            echo "Have any problem!";
        }




//        $user = array(
//            "password"=>$this->password,
//        );
//        $db->insert("users", $user);
    }
}