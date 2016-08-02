<?php
namespace App\Models\MyAccount;
class MyAccountModel
{
//    private $firstName;
//    private $lastName;
//    public function __construct($firstName,$lastName)
//    {
//        $this->firstName = $firstName;
//        $this->lastName = $lastName;
//    }
//    public function validateFirstName($firstName){
//        if(($firstName != null ) && ($firstName != "" )){
//            return true;
//        }
//        else{
//            return false;
//        }
//    }
//    public function validateLastName($lastName){
//        if(($lastName != null ) && ($lastName != "" )){
//            return true;
//        }
//        else{
//            return false;
//        }
//    }

    public function updateFirstName($firstname) {
        $app = \Yee\Yee::getInstance();
        return $app->db['default']->where('email', $_SESSION['email'])->update('users', array("firstName" => $firstname));
    }

    public function updateLastName($lastname) {
        $app = \Yee\Yee::getInstance();
        return $app->db['default']->where('email', $_SESSION['email'])->update('users', array("lastName" => $lastname));
    }

    public function getDetails()
    {
        $javascript = array(
            "/css/js/login.js",
            "/css/xEditable/js/bootstrap-editable.js",
            "/css/xEditable/js/bootstrap-editable.min.js"
        );
        $app = \Yee\Yee::getInstance();
        $row = $app->db['default']->where('email', $_SESSION['email'])->getOne('users');
        $data = array(
            "title" => "My profile",
            "row" => $row,
            "javascript" => array(
                "/css/xEditable/js/bootstrap-editable.js",
                "/css/xEditable/js/bootstrap-editable.min.js"
            ),
            "css" => array(
                "/css/xEditable/css/bootstrap-editable.css"
            )
        );
        return $data;

    }
}