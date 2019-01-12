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

    public function showArticleAction($request){
        var_dump($request);
        $view = 'article_view.php';
        $article = $this->articleModel->getArticleById($request);
        $title =  $article['title'];
        $data = [
            'title' => $title,
            'article' => $article
        ];
        return parent::generateResponse($view, $data);
    }
}