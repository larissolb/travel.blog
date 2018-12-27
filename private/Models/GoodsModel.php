<?php
namespace Dasha\Travelblog\Models;

class GoodsModel
{
    public function getgoods($count){
        $goods = [
            [
                'id' => 1,
                'title' => 'Товар 1',
                'description' => 'Описание товара'
            ],
            [
                'id' => 2,
                'title' => 'Товар 2',
                'description' => 'Описание товара'
            ],
            [
                'id' => 3,
                'title' => 'Товар 3',
                'description' => 'Описание товара'
            ]];
        // получение 5 последних товаров из бд
        return $goods;
    }
}