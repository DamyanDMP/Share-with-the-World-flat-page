<?php
use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\ArticlesModel\ArticlesModel;
use App\Models\articleOptionModel\articleOptionModel;

class articlesController extends Controller
{
    /**
     * @Route('/articles')
     * @Name('articles.index')
     * @Method('get')
     */
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */

        $app = $this->getYee();

        //$category = $app->request()->post("option");

//        $select = new ArticlesModel();
//        $options = $select->returnOptions();
//
//        $selectArea = array(
//            "title" => "See Articles",
//            "select" => $options
//        );
        $app = \Yee\Yee::getInstance();
        $data = $app->db['default']->get('articles');
        $categories = $app->db['default']->get('categories');

        $news = array(
            "title" => "See Articles",
            "news" => $data,
            "categories" => $categories
        );

        $app->render('pages/Articles.tpl', $news);
    }

    /**
     * @Route('/articles2/:id')
     * @Name('articles2.index')
     * @Method('get')
     */
    public function articlesAction($id)
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        $article = new articleOptionModel($id);
        $data = $article->returnData();
        $news = array(
            "title" => "See Articles",
            "news" => $data,
        );

        $app->render('pages/Articles2.tpl', $news);
    }

    /**
     * @Route('/articles2/category/:id')
     * @Name('articles2/category.index')
     * @Method('get')
     */
    public function categoryAction($id)
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        $article = new ArticlesModel();
        $data = $article->returnCategory($id);
        $categories = $app->db['default']->get('categories');

        $news = array(
            "title" => "See Articles",
            "news" => $data,
            "categories" => $categories
        );

        $app->render('pages/Category.tpl', $news);
    }
}