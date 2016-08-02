<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Libraries\SendEmail\SendEmail;

class EmailController extends Controller
{
    /**
     * @Route('/email')
     * @Name('email.index')
     */
    public function indexAction()
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        $data = array();

        $sendEmail = new SendEmail("damyan.pazvanski@gmail.com","damian1599@gmail.com","content",$data,"Activate Account",12345);
        $sendEmail->createEmail();
        $sendEmail->sendEmail();

        $app->render('mail/content.tpl', $data);
    }
}