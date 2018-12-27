<?php
/**
 * Created by PhpStorm.
 * User: dasha
 * Date: 27.12.2018
 * Time: 20:26
 */

namespace Dasha\Travelblog\Base;


class Application
{


    public function __construct($config)
    {
//        $this->config_file = $config;
        $file = __DIR__ . '/../config.json';
        $config = json_decode(file_get_contents($file), true);
        $urls = $config['urls'];
        startRouter($urls);
    }

    public function startRouter($urls){
        $router = new Router();
    }

}