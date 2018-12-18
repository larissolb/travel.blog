<?php foreach ($articles as $article): ?>
<div class="article">
    <p>Название: <?php echo $article['title']; ?></p>
    <p>Описание: <?php echo $article['description']; ?></p>
    <p>
        <a href="articles/show/<?php echo $article['id'] ?>">
            Подробнее
        </a>
    </p>
</div>
<?php endforeach; ?>

<?php foreach ($goods as $good): ?>
<div class="goods">
    <p>Название: <?php echo $good['title']; ?></p>
    <p>Описание: <?php echo $good['description']; ?></p>
    <p>Подробнее: <?php echo $good['id']; ?></p>v
</div>
<?php endforeach; ?>