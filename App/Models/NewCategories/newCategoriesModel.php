<?php
namespace App\Models\NewCategories;

class newCategoriesModel
{
    function forCategories(){
        $app = \Yee\Yee::getInstance();
        $everyRow = $app->db['default']->get('categories');
        return $forCategories = array(
            "title" => "Add/Remove categories",
            "allRows" => $everyRow
        );
    }
    function newCategory($newCategory) {
        $app = \Yee\Yee::getInstance();
        $db = $app->db['default'];
        if (isset($newCategory) && $newCategory !== ""){
            $bool = true;
            if ($bool == true){
                $newArticle = array(
                    "category" => $newCategory,
                );
                $db->insert("categories", $newArticle);
                echo $_SESSION['email'] . " --- Posted successfull!";
            }
        }
    }
    function deleteCategory($delete) {
        if (isset($delete) && $delete !== ""){
            $bool = true;
            if ($bool == true) {
                $app = \Yee\Yee::getInstance();
                $app->db['default']->where("id", $delete)->delete('categories');
                $app->db['default']->where("category", $delete)->delete('articles');
                echo "Successfully deleted!";
            }
        }
    }
    function editCategory($changeName, $categoryId) {
        $app = \Yee\Yee::getInstance();
        if (isset($changeName) && $changeName !== ""){
            $bool = true;
            if ($bool == true){
                $newCategoryName = array(
                    "category" => $changeName
                );
                $app->db['default']->where('id', $categoryId)->update('categories', $newCategoryName);

                echo $_SESSION['email'] . " --- Edit successfull!";
            }
        }
    }
}