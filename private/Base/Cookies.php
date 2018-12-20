<?php
namespace Dasha\Travelblog\Base;

class Cookies
{
    public function setCookie($name, $value, $time){
        // добавить возможность установки значений по умолчанию
        setcookie($name, $value, $time);
    }

    public function delCookie(){
        // реализовать удаление Cookie
    }

    // реализовать методы получения данных
}

