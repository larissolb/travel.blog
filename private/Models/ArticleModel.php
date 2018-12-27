<?php
namespace Dasha\Travelblog\Models;

//use Dasha\Travelblog\Base\DBConnection;
//
class ArticleModel
{
    private $db;
    public function __construct()
    {
//        $this->db = new DBConnection();
    }

    public function getArticles($count){
        $articles = [
            [
                'id' => 1,
                'title' => 'Статья 1',
                'description' => 'Описание статьи',
//                'img'=> 'https://images.unsplash.com/photo-1480365192324-83232188157e?ixlib=rb-0.3.5&s=49d223053e253418171da623e660a1ba&auto=format&fit=crop&w=1050&q=80'
            ],
            [
                'id' => 2,
                'title' => 'Статья 2',
                'description' => 'Описание статьи',
                'img'=> 'https://images.unsplash.com/photo-1464746133101-a2c3f88e0dd9?ixlib=rb-0.3.5&s=d5b622e2ea747f0eaa17e73a2040031a&auto=format&fit=crop&w=1027&q=80'
            ],
            [
                'id' => 3,
                'title' => 'Статья 3',
                'description' => 'Описание статьи',
                'img'=>'https://images.unsplash.com/photo-1473294312123-83488e2f8e8f?ixlib=rb-0.3.5&s=69871c86b65827ddfd9685024c00e562&auto=format&fit=crop&w=1052&q=80'
            ]
        ];
        // получение 5 последних статей из бд
        return $articles;
    }

    public function getArticleById($id){
        $sql = "SELECT * FROM Article WHERE id >:id AND price < 23";
        $params = ['id'=>$id];
//
        return $this->db->execute($sql, $params);
    }
}



