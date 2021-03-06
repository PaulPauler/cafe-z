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
        <div class="container-top-wrap">
            <div class="container-top">
                <div class="header-logo">
                    <a href="/"><img height="178" width="225" src="/img/logo.png"/></a>
                </div>
                <div class="neon"></div>
            </div>
        </div>
        <div class="menu-line-wrap">
            <div class="menu-line">
                <?php
                echo Nav::widget([
                    'options' => ['class' => 'navbar-menu'], //navbar-menu
                    'items' => [
                        ['label' => 'Главная', 'url' => ['/site/index']],
                        ['label' => 'Меню', 'url' => ['/site/menu']],
                        ['label' => 'Фотографии', 'url' => ['/site/gallery']],
                        ['label' => 'Контакты', 'url' => ['/site/about']],
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
        </div>
        <div class="container">
            <div class="site-content">
                <?= $content ?>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <p class="pull-left"><i style="color:#ddd">Лучшая в мире</i> Столовая Застольник, г.Ейск &copy; <?= date('Y') ?></p>

            <p class="pull-right">Звоните: +7 (86132) 3-81-14</p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
