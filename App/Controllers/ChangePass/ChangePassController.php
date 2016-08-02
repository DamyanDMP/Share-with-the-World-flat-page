<?php
use Yee\Managers\Controller\Controller;
use App\Models\ChangePassModel\ChangePassModel;
use Yee\Managers\CacheManager;
class ChangePassController extends Controller
{
    /**
     * @Route('/changePass')
     * @Name('changePass.index')
     */
    public function indexAction()
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        $data = array(
            'title' => 'Change password'
        );
        $app->render('pages/changePass.tpl', $data);
    }

    /**
     * @Route('/changePass')
     * @Name('changePass.index')
     * @Method('POST')
     */
    public function postAction()
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        $password = $app->request()->post("editPassword");
        $confPass = $app->request()->post("editRepeatPassword");
        $changePass = new ChangePassModel($password, $confPass);
        if ($changePass->validatePass() == true){
                $changePass->updateDetails();
        }

        $data = array(
            'title' => 'Change password',
        );
        $app->render('pages/changePass.tpl', $data);
        var_dump($changePass);
    }
}