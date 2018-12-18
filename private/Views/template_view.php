<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>

<body>
<nav>
    <ul>
        <li><a href="/">Главная</a></li>
        <li><a href="/articles">Статьи</a></li>
        <li><a href="/goods">Товары</a></li>
        <li><a href="/search">Поиск</a></li>
        <li><a href="/account">Личный кабинет</a></li>
<!--        <li><a href="/goods">Страны</a></li>-->
    </ul>
</nav>

<div><?php include_once $view; ?></div>

</body>

</html>
