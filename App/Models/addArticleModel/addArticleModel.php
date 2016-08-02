<?php
namespace App\Models\addArticleModel;

class addArticleModel
{
    private $category, $title, $uploadImage, $article;

    public function __construct( $category, $title, $uploadImage, $article )
    {
        $this->category = $category;
        $this->article = $article;
        $this->title = $title;
        $this->uploadImage = $uploadImage;
    }

    public function addNewArticle()
    {
        if ($this->title !== "" && $this->article !== "") {
            $app = \Yee\Yee::getInstance();
            $db = $app->db['default'];
            $emaila = $_SESSION['email'];
            $date = date('Y-m-d H:i:s');
            $newArticle = array(
                "title" => $this->title,
                "category" => $this->category,
                "authorId" => $emaila,
                "date" => $date,
                "articleContent" => $this->article,
                "picture" => $this->uploadImage
            );

            $db->insert("articles", $newArticle);
            echo $_SESSION['email'] . " --- Posted successfull!";
        } else {
            echo "Must fill fields with *!";
        }
    }

    public  function addNewCategory($value){
        if ($this->title !== "" && $this->article !== "") {
            $app = \Yee\Yee::getInstance();
            $db = $app->db['default'];

            $table = $app->db['default']->get('categories');
            $endRow = end($table);
            $id = $endRow['id'];

            $emaila = $_SESSION['email'];
            $date = date('Y-m-d H:i:s');
            $newArticle = array(
                "title" => $this->title,
                "category" => $id + 1,
                "authorId" => $emaila,
                "date" => $date,
                "articleContent" => $this->article,
                "picture" => $this->uploadImage
            );
            $newCategory = array(
                "category" => $value
            );

            $db->insert("articles", $newArticle);
            $db->insert("categories", $newCategory);

            echo $_SESSION['email'] . " --- Posted successfull with new category!";
        } else {
            echo "Must fill fields with * no category!";
        }
    }
}