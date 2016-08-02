<?php
namespace App\Models\ArticlesModel;

class ArticlesModel
{
//    private $category;
//    public function __construct($category)
//    {
//        $this->category = $category;
//    }
    public function returnOptions()
    {
        $app = \Yee\Yee::getInstance();
        return $app->db['default']->get('categories');
//        $data = array(
//            "title" => "Articles",
//            "articleContent" => $result['articleContent'],
//            "titleArticle" => $result['title'],
//            "authorId" => $result['authorId'],
//            "date" => $result['date'],
//            "category" => $result['category']
//        );
    }
    public function returnCategory($id)
    {
        $app = \Yee\Yee::getInstance();
        return $app->db['default']->where("category", $id)->get('articles');
    }
}