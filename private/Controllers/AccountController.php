<?php
/**
 * Created by PhpStorm.
 * User: BB
 * Date: 27.12.2018
 * Time: 12:28
 */

namespace Dasha\Travelblog\Controllers;


use Dasha\Travelblog\Base\Controller;

class AccountController extends Controller
{
    public function accountAction(){
        $view = 'account_view.php';
        $title =  "Аккаунт";
        $data = [
            'title' => $title
        ];
        parent::generateResponse($view, $data);
    }

    public function registrationAction(){

        return parent::generateAjaxResponse($_POST['login']);
    }

    public function authAction(){
        echo $_POST['login'];
    }

}