<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\MenuCategory;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Админка';
$this->params['breadcrumbs'][] = $this->title;


$categories = ArrayHelper::map(\app\models\MenuCategory::find()->where('is_active = 1')->orderBy('id')->all(), 'id', 'name');


?>
<div class="menu-item-index">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <?php 
        foreach($categories as $key=>$value){ ?>
            <p>
                <?= Html::a('Редактировать категорию меню - '.$value, ['/admin/menu/item/index?&id='.$key], ['class' => 'btn btn-success']) ?>
            </p>
    <?php } ?>

    <p>
        <?= Html::a('Изменить категории', ['/admin/menu/category/index'], ['class' => 'btn btn-warning']) ?>
    </p>

    <p>
        <?= Html::a('Выйти', ['/site/logout'], ['class' => 'btn btn-danger']) ?>
    </p>

</div>
