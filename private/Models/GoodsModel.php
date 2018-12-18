<?php
/**
 * Created by PhpStorm.
 * User: dasha
 * Date: 18.12.2018
 * Time: 19:24
 */

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
            ],
            [
                'id' => 4,
                'title' => 'Товар 4',
                'description' => 'Описание товара'
            ],
            [
                'id' => 5,
                'title' => 'Товар 5',
                'description' => 'Описание товара'
            ]
        ];
        // получение 5 последних товаров из бд
        return $goods;
    }
}