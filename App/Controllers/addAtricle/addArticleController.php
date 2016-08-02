<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\addArticleModel\addArticleModel;
use App\Models\NewCategories\newCategoriesModel;

class addArticleController extends Controller
{
     /**
     * @Route('/addArticle')
     * @Name('addArticle.index')
     */
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */

        $app = $this->getYee();
        $asd = new newCategoriesModel();
        $data = $asd->forCategories();

        $app->render('pages/addArticle.tpl', $data);
    }


    /**
     * @Route('/addArticle')
     * @Name('post.index')
     * @Method('post')
     */
    public function postAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        $category = $app->request()->post("category");
        $title = $app->request()->post("title");
        $uploadImage = $app->request()->post("fileInput");
        $article = $app->request()->post("newArticleText");
        $theNew = $app->request()->post("theNew");

        $table = $app->db['default']->get('categories');
        $endRow = end($table);
        $id = $endRow['id'];
        var_dump($id);

        if ($category <= $id){
            $newCategory = $app->request()->post("category");
            $addNew = new addArticleModel($newCategory, $title, $uploadImage, $article);
            $addNew->addNewArticle();
        } else {
            $addNew = new addArticleModel($category, $title, $uploadImage, $article);
            $addNew->addNewCategory($theNew);
        }

        $asd = new newCategoriesModel();
        $data = $asd->forCategories();

        $app->render('pages/addArticle.tpl', $data);
    }
}