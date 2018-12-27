<div class="cards">
    <?php foreach ($goods as $good): ?>
    <div id="card" class="card">
        <img src="http://s4c.cymru/temp/wave1.jpg">
        <div class="card-title">
            <a href="#card" class="toggle-info btn">
                <span class="left"></span>
                <span class="right"></span>
            </a>
            <h2>
                <?php echo $good['title'];?>
<!--                <small>Image from unsplash.com</small>-->
            </h2>
        </div>
        <div class="card-flap flap1">
            <div class="card-description">
                <?php echo $good['description'];?>
            </div>
            <div class="card-flap flap2">
                <div class="card-actions">
                    <a href="goods/show/<?php echo $good['id'];?>" class="btn">Read more</a>
                </div>
            </div>
        </div>
    </div>

<?php endforeach; ?>
</div>