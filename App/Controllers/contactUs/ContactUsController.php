<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Libraries\SendEmail\SendEmail;

class contactUsController extends Controller
{
    /**
     * @Route('/contactUs')
     * @Name('contactUs.index')
     */
    public function indexAction()
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

//        $sendEmail = new SendEmail("damyan.pazvanski@gmail.com", "damian1599@gmail.com", "content", "Activate Account", 12345);
//        $sendEmail->createEmail();
//        $sendEmail->sendEmail();

        $data = array(
            "title" => "Contact us"
        );

        $app->render('pages/contactUs.tpl', $data);
    }

}