<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\NewCategories\newCategoriesModel;

class addCategoryController extends Controller
{
    /**
     * @Route('/addCategory')
     * @Name('addCategory.index')
     */
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */

        $app = $this->getYee();
        $app = \Yee\Yee::getInstance();
        $categoriesDate = $app->db['default']->get('categories');

        $asd = new newCategoriesModel();
        $data = $asd->forCategories();

        $app->render('pages/addCategory.tpl', $data );
    }

    /**
     * @Route('/addCategory')
     * @Name('post.index')
     * @Method('POST')
     */
    public function postAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        $newCategory = $app->request()->post('newCategory');
        $deleteCategory = $app->request()->post('deleteText');
        $changeName = $app->request()->post('editText');
        $categoryId = $app->request()->post('categoryId');
        $bool = false;

        $categoryProperties = new newCategoriesModel();
        $categoryProperties->newCategory($newCategory);
        $categoryProperties->deleteCategory($deleteCategory);
        $categoryProperties->editCategory($changeName, $categoryId);
        $data = $categoryProperties->forCategories();

        $app->render('pages/addCategory.tpl', $data);
    }
}