<?php
require __DIR__ . '/../vendor/autoload.php';


$request = new \Dasha\Travelblog\Base\Request(); // получаем запрос

$file = __DIR__ . '/../config.json';
$app = new \Dasha\Travelblog\Base\Application($file);




function createRoute(FastRoute\RouteCollector $r) {
    $file = __DIR__ . '/../config.json';
    $config = json_decode(file_get_contents($file), true);
    $urls = $config['urls'];

    foreach ($urls as $name => $data) {
        $arr = explode("::", $data['controller']);
        $r->addRoute($data['method'], $data['path'],
            [$arr[0], $arr[1]]);
    }

    // {id} must be a number (\d+)
//    $r->addRoute('GET', '/user/{id:\d+}', 'get_user_handler');
//    // The /{title} suffix is optional
//    $r->addRoute('GET', '/articles/{id:\d+}[/{title}]', 'get_article_handler');
};
//json_decode("json string", true);
//json_encode();
$dispatcher = FastRoute\simpleDispatcher('createRoute');

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        var_dump("404 Not Found");
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        var_dump("405 Method Not Allowed");
        break;
    case FastRoute\Dispatcher::FOUND:

        $handler = $routeInfo[1];
        $controller = $handler[0];
        $action = $handler[1];

        $vars = $routeInfo[2];

        $controller = new $controller();
        $controller->$action();
        // ... call $handler with $vars
        break;
}










//
//
//run();
//
//function run() {
//    $controller = 'Index';
//    $action = 'index';
//    $get = null;
//
//    $routes = explode('/', $_SERVER['REQUEST_URI']); // /
////    var_dump($routes);
//    if($routes[1]) {
//        $controller = $routes[1]; // имя контроллера goods
//    }
//    if($routes[2]) {
//        $action = $routes[2]; // имя метода index
//    }
//    if($routes[3]) {
//        $get = $routes[3]; // условно: параметры get запроса
//    }
//    $controller = 'Dasha\Travelblog\Controllers\\' . ucfirst(strtolower($controller)) . 'Controller';
//    // Dasha\Travelblog\Controllers\IndexController
//    // IndexController
////    var_dump("Controller: $controller");
//
//    $action = strtolower($action) . 'Action';
//    // index . Action
//    //  indexAction
////    var_dump("Action: $action");
//
//
//
//    if (!class_exists($controller)) {
//        // выбросить исключение класс не найден
//        var_dump("класс не найден");
//        return false;
//    }
//    if (!method_exists($controller, $action)) {
//        // выбросить исключение метод не найден
//        var_dump("метод не найден");
//        return false;
//    }
//
//    $controller = new $controller(); // IndexController
////    $controller = new IndexController();
//
//    $controller->$action($get); // indexAction
////    $controller->indexAction();
//
//}
//
////ini_set('display_errors', 'On');
////sudo apt install composer
//
////composer init
////composer dump-autoload
