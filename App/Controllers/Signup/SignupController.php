<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\SignUp\SignupModel;
use App\Libraries\SendEmail\SendEmail;

class SignupController extends Controller
{
     /**
     * @Route('/signup')
     * @Name('signup.index')
     */
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */

        $app = $this->getYee();

        $data = array("title"=>"Sign Up");

        $app->render('pages/signup.tpl', $data );
    }

    /**
     * @Route('/signup')
     * @Name('post.index')
     * @Method('post')
     */
    public function postAction( )
    {
        $success = false;
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        $email = $app->request()->post("email");
        $password = $app->request()->post("password");
        $confPass = $app->request()->post("confirm-password");
        $signUpModel = new signUpModel($email,$password,$confPass);

        if(!$signUpModel->validate()){
            if($signUpModel->CheckDB()){
                $success = true;
            }
            else{
                echo $email . " already exist!";
            }
        }
        else{
            echo "Have wrong email/pass";
        }

        $data = array("title"=>"Sign Up","activationCode"=>$signUpModel->activationCode);
        if($success == true){
            $signUpModel->Register();

            $app->redirect("/login", $data );
//            $sendEmail = new SendEmail("damyan.pazvanski@gmail.com",$email,"content",$data,"Activate Account");
//            $sendEmail->createEmail();
//            $sendEmail->sendEmail();
        }else{
            $app->render('pages/signup.tpl', $data );
        }
    }
}