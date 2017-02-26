<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\MenuItem */
/* @var $form yii\widgets\ActiveForm */
?>

<?php 

    // FK category_id
    $categoryArray = ArrayHelper::map(\app\models\MenuCategory::find()->orderBy('name')->all(), 'id', 'name');
?>


<div class="menu-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_active')->dropDownList([
                                                '0' => 'Нет',
                                                '1' => 'Да',
                                            ]) ?>

    <?= $form->field($model, 'action_enabled')->dropDownList([
                                                '0' => 'Нет',
                                                '1' => 'Да',
                                            ]) ?>

    <?=$form->field($model, 'position')->textInput(['type' => 'number']) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'category_id')->dropDownList($categoryArray, ['prompt' => '---- Select category ----']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
