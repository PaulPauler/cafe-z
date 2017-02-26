<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MenuCategory */

$this->title = 'Добавить категорию меню';
$this->params['breadcrumbs'][] = ['label' => 'Menu Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
