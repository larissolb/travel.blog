<?php
namespace Dasha\Travelblog\Base;

class Controller
{
    public function generateResponse($view, array $data,
                                     $template='template_view.php')
    {
        extract($data);

        require_once __DIR__ . '/../Views/' . $template;
    }
}