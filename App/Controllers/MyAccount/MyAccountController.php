<?php
use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\MyAccount\MyAccountModel;
class MyAccountController extends Controller
{
    /**
     * @Route('/myAccount')
     * @Name('myAccount.index')
     */
    public function indexAction()
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true){
            $row = new MyAccountModel();
            $data = $row->getDetails();

            $app->render('pages/myAccount.tpl', $data);
        } else{
            $app->redirect('/');
        }
    }
}