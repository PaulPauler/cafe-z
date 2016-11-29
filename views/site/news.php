<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Фотографии';

?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Новостная лента с картинками, либо фотографии в виде галереи.
    </p>


	<div id="gallery" style="display:none;">

		<a href="#">
		<img alt="Мы всегда Вам рады"
		     src="img/thumbs/001.jpg"
		     data-image="img/big/001.jpg"
		     data-description="This is a Lemon Slice"
		     style="display:none">
		</a>

		<a href="#">
		<img alt="Обед"
		     src="img/thumbs/002.jpg"
		     data-image="img/big/002.jpg"
		     data-description="Those are peppers"
		     style="display:none">
		</a>

		<a href="#">
		<img alt="Хлебцы с травами"
		     src="img/thumbs/003.jpg"
		     data-image="img/big/003.jpg"
		     data-description="Those are keys"
		     style="display:none">
		</a>

		<a href="#">
		<img alt="Улитки"
		     src="img/thumbs/004.jpg"
		     data-image="img/big/004.jpg"
		     data-description="Those are friuts in a cup"
		     style="display:none">
		</a>

		<a href="#">
		<img alt="Свежие кексы"
		     src="img/thumbs/005.jpg"
		     data-image="img/big/005.jpg"
		     data-description="Those are yellow flowers"
		     style="display:none">
		</a>

		<a href="#">
		<img alt="Еще более свежие кексы"
		     src="img/thumbs/006.jpg"
		     data-image="img/big/006.jpg"
		     data-description="This is butterfly"
		     style="display:none">
		</a>

		<a href="#">
		<img alt="Круассаны со сгущенкой"
		     src="img/thumbs/007.jpg"
		     data-image="img/big/007.jpg"
		     data-description="This is a boat"
		     style="display:none">
		</a>

		<a href="#">
		<img alt="Ароматные слойки"
		     src="img/thumbs/008.jpg"
		     data-image="img/big/008.jpg"
		     data-description="This is a woman"
		     style="display:none">
		</a>

		<a href="#">
		<img alt="Пельмешки"
		     src="img/thumbs/009.jpg"
		     data-image="img/big/009.jpg"
		     data-description="This is cup of coffee"
		     style="display:none">
		</a>

		<a href="#">
		<img alt="Рагу"
		     src="img/thumbs/010.jpg"
		     data-image="img/big/010.jpg"
		     data-description="This is iphone back"
		     style="display:none">
		</a>
		<a href="#">
		<img alt="Запеченая говядина"
		     src="img/thumbs/011.jpg"
		     data-image="img/big/011.jpg"
		     data-description="This is a Lemon Slice"
		     style="display:none">
		</a>

		<a href="#">
		<img alt="Котлеты"
		     src="img/thumbs/012.jpg"
		     data-image="img/big/012.jpg"
		     data-description="Those are peppers"
		     style="display:none">
		</a>

	</div>

	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery("#gallery").unitegallery({
				tiles_type:"nested"
			});
		});
	</script>

</div>
