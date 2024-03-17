<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\data\Pagination;
use yii\widgets\LinkPager;

/** @var yii\web\View $this */
/** @var app\models\ProductSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            [
                'attribute' => 'image_url',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::img(Yii::getAlias('@web') . '/upload/' . $model->image_url, ['width' => '100px']);
                },
            ],
            [
                'attribute' => 'name_product',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::a(Html::encode($model->name_product), ['view', 'id' => $model->id]);
                },
            ],
            'category_product',
            [
                'attribute' => 'price',
                'value' => function ($model) {
                    return Yii::$app->formatter->asCurrency($model->price, 'VND');
                },
            ],
            'description',

            [
                'class' => 'yii\grid\ActionColumn',
                'urlCreator' => function ($action, $model, $key, $index) {
                    return Url::to([$action, 'id' => $model->id]);
                },
            ],
        ],
       
    ]); ?>

 

</div>