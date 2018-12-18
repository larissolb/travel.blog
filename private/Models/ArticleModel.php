<?php
/**
 * Created by PhpStorm.
 * User: dasha
 * Date: 18.12.2018
 * Time: 19:24
 */



class ArticleModel
{
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
        // получение статьи из бд
        return [
            'id' => $id,
            'title' => 'Статья ' . $id,
            'description' => 'Описание статьи'
        ];
    }
}