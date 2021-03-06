<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Как нас найти?';

?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <br />

    <p>
        <i>Наш адрес:</i> &nbsp;&nbsp;Краснодарский край, г. Ейск, ул. Армавирская, 206
        <br/>
        <i>Часы работы:</i> &nbsp;&nbsp;пн-пт с 9:00 до 20:00
        <br/><br/>
        Воспользуйтесь интерактивной картой:
    </p>

    <div style="height:504px;border:2px solid #ef7f1a">
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=SUYJPjZPyWbUsyWBHJ5G9DCktT1GGgWZ&amp;width=870&amp;height=500&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
	</div>

	<br/>

    <p>
        Если все еще остались вопросы, Вы всегда можете позвонить или <a href="/contact">написать нам.</a>
    </p>

	<!-- <iframe width="870" height="500" frameborder="0" style="border:2px solid #ef7f1a" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJZWHKnJcu5EARgAoebAxjuJY&key=AIzaSyBq3T23dV52IqZN3BbkiDRH76oqPSOjNJ0" allowfullscreen></iframe> -->

</div>
