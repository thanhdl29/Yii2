<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Welcome to our Online Store!</h1>

        <p class="lead">Browse through our collection of products.</p>

        <p><a class="btn btn-lg btn-success" href="https://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <?php if (is_string($product['image_url']) && !empty($product['image_url'])) : ?>
                            <img src="<?= Yii::getAlias('@web') . '/upload/' . $product['image_url'] ?>" class="card-img-top" alt="<?= $product['name_product'] ?>" width="100px">
                        <?php else : ?>
                            <img src="<?= Yii::getAlias('@web') . '/upload/default.jpg' ?>" class="card-img-top" alt="Default Image" width="100px">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?= $product['name_product'] ?></h5>
                            <p class="card-text"><?= $product['description'] ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-sm btn-outline-secondary">View details</a>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Add to cart</a>
                                </div>
                                <small class="text-muted">Price: <?= $product['price'] ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>