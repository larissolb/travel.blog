<?php
/**
 * Created by PhpStorm.
 * User: dasha
 * Date: 18.12.2018
 * Time: 20:16
 */

class ArticlesController extends Controller
{
    private $articleModel;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
    }

    public function showAction($get){
        $view = 'article_view.php';
        $article = $this->articleModel->getArticleById($get);
        $title =  $article['title'];
        $data = [
            'title' => $title,
            'article' => $article
        ];
        parent::generateResponse($view, $data);
    }
}