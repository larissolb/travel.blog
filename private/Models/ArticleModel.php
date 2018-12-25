<?php
namespace Dasha\Travelblog\Models;

use Dasha\Travelblog\Base\DBConnection;

class ArticleModel
{
    private $db;
    public function __construct()
    {
        $this->db = new DBConnection();
    }

    public function getArticles($count){
        $articles = [
            [
                'id' => 1,
                'title' => 'Статья 1',
                'description' => 'Описание статьи'
            ],
            [
                'id' => 2,
                'title' => 'Статья 2',
                'description' => 'Описание статьи'
            ],
            [
                'id' => 3,
                'title' => 'Статья 3',
                'description' => 'Описание статьи'
            ],
            [
                'id' => 4,
                'title' => 'Статья 4',
                'description' => 'Описание статьи'
            ],
            [
                'id' => 5,
                'title' => 'Статья 5',
                'description' => 'Описание статьи'
            ]
        ];
        // получение 5 последних статей из бд
        return $articles;
    }

    public function getArticleById($id){
        $sql = "SELECT * FROM Article WHERE id:id";
        $params = ['id'=>$id];

        return $this->db->execute($sql, $params);
    }
}



