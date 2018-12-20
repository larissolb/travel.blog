<?php
namespace Dasha\Travelblog\Controllers;
use Dasha\Travelblog\Base\Controller;
use Dasha\Travelblog\Models\ArticleModel;

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