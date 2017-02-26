<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Меню';
$this->params['breadcrumbs'][] = $this->title;


// FK category_id

$categoryArray = ArrayHelper::map(\app\models\MenuCategory::find()->orderBy('id')->all(), 'id', 'name');

?>
<div class="menu-item-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить пункт меню', ['/admin/menu/item/create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Вернуться на главную', ['/admin'], ['class' => 'btn btn-warning']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => "Отображено {begin} - {end} из {count} элементов меню",
        'emptyText' => "Элементов не найдено",
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'weight',
            'price',
            // 'action_enabled',
            'position',
            'is_active',
            // 'created_at',
            //'comment:ntext',
            // [
            //     'attribute' => 'category.name',
            //     'label' => 'Категория'
            // ],

            [
                'class' => 'yii\grid\ActionColumn',
                //'label' => 'Действия',
            ],
        ],
    ]); ?>

</div>


