<?php
namespace Dasha\Travelblog\Controllers;
use Dasha\Travelblog\Base\Controller;
use Dasha\Travelblog\Models\ArticleModel;
use Dasha\Travelblog\Models\GoodsModel;

class IndexController extends Controller
{

    private $articleModel;
    private $goodsModel;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
        $this->goodsModel = new GoodsModel();
    }

    public function indexAction()
    {
        $title = 'Главная';
        $view = 'index_view.php';

        $articles = $this->articleModel->getArticles(5);
        $goods = $this->goodsModel->getgoods(10);

        $data = [
            'title' => $title,
            'articles' => $articles,
            'goods' => $goods,
        ];

        return parent::generateResponse($view, $data);
    }

}


