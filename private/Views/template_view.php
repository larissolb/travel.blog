<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="/static/css/menu.css">
    <link rel="stylesheet" href="/static/css/slider.css">
    <link rel="stylesheet" href="/static/css/cards.css">
    <link rel="stylesheet" href="/static/css/articles.css">
    <link rel="stylesheet" href="/static/css/enter_account_modal.css">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,700'>

    <link rel="stylesheet" href="/static/css/tabs.css">
</head>

<body>
<!--<div class="container">-->
<!--    <ul>-->
<!--        <li class="one"><a href="#">Статьи</a></li>-->
<!--        <li class="two"><a href="#">Товары</a></li>-->
<!--        <li class="three"><a href="#">Войти</a></li>-->
<!--        <li class="four"><a href="#">?</a></li>-->
<!--        <hr />-->
<!--    </ul>-->
<!--</div>-->
<ul>
    <li>
        <a href="/">Главная
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </a>
    </li>
    <li>
        <a href="/articles">Статьи
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </a>
    </li>
    <li>
        <a href="/goods">Товары
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </a>
    </li>
    <li>
        <a href="#search">Поиск
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </a>
    </li>
    <li>
        <a href="#openModal">Войти
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </a>
    </li>
</ul>
<!--<a href="">Открыть модальное окно</a>-->

<div>
    <?php include_once "modal.php"; ?>
</div>
<div><?php include_once $view; ?></div>
<script  src="/static/js/enter_account_form.js"></script>
</body>

</html>
