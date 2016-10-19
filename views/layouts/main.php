<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>



    <div class="wrap">

        <div class="container">

            <?php //echo Breadcrumbs::widget([
                //'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                //]) 
            ?>

            <div class="container-top">
                <div class="header-logo"></div>
                <div class="neon"></div>
            </div>
            <div class="menu-line">
                <?php
                echo Nav::widget([
                    'options' => ['class' => 'navbar-menu'], //navbar-menu
                    'items' => [
                        ['label' => 'Главная', 'url' => ['/site/index']],
                        ['label' => 'Меню', 'url' => ['/site/about']],
                        ['label' => 'Фотографии', 'url' => ['/site/about']],
                        ['label' => 'Контакты', 'url' => ['/site/contact']],
                        ['label' => 'Обратная связь', 'url' => ['/site/contact']],
                        // Yii::$app->user->isGuest ? (
                        //     ['label' => 'Login', 'url' => ['/site/login']]
                        // ) : (
                        //     '<li>'
                        //     . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                        //     . Html::submitButton(
                        //         'Logout (' . Yii::$app->user->identity->username . ')',
                        //         ['class' => 'btn btn-link']
                        //     )
                        //     . Html::endForm()
                        //     . '</li>'
                        // )
                    ],
                ]);
                ?>
            </div>

            <div class="site-content">
                <?= $content ?>
            </div>

        </div>
        
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">Застольник, г.Ейск &copy; <?= date('Y') ?></p>

            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
