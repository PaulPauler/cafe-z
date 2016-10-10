
<?php

	use yii\helpers\Html;
	use yii\widgets\ActiveForm;


	$form = ActiveForm::begin();

	echo $form->field($model, 'name');
	echo $form->field($model, 'email');
	echo $form->field($model, 'password');
	echo '<div class="form-group">';
	echo Html::submitButton('Отправить', ['class' => 'btn btn-primary']);
	echo '</div>';
	ActiveForm::end();