<?php

/* @var $this yii\web\View */

$this->title = 'Столовая "Застольник"';
?>
<div class="site-index">


<!--
    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

-->

    <div class="body-content">

        <div class="slideshow-wrapper">
            <div class="simple-slide-show loading" style="height:330px">
                <ul>
                    <li class="on">
                        <figure class="msc">
                            <div class="slide_left">
                                <h1 style="padding-left:40px">Супер сосиски!</h1>
                                <p>Самые вкусные сосиски с пюрешкой и огуречно-помидорным салатом ищите в столовой "Застольник" в городе Ейске. Только в ноябре скидка 20% при покупке трех сосисок и компота. Спешите!<i style="color:#ccc">*</i></p>
                                <p style="padding-top:10px;color:#bbb;font-size: 90%;float:right">*Предложение ограничено</p>
                            </div>
                            <div class="slide_right">
                                <img height="310" width="450" src="/img/slide1.png"/>
                            </div>
                        </figure>
                    </li>
                    <li>
                        <figure class="msc">
                            <div class="slide2_left">
                                <img height="282" width="450" src="/img/slide2.png"/>
                            </div>
                            <div class="slide2_right">
                                <h1>Пироги с доставкой</h1>
                                <p>Разнообразные начинки, три вида теста. Эти свежие, горячие и такие манящие пироги никого не оставят равнодушными!</p>
                            </div>
                        </figure>
                    </li>
                    <li>
                        <figure class="msc">
                            <h1>Вкусная газировка :)</h1>
                            <p> ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- -- </p>
                        </figure>
                    </li>
                </ul>
            </div>
        </div>

        <div class="interior">
            <img height="400" width="760" src="/img/interior.png"/>
        </div>

        <div class="note">
            <p style="color:#aaa;">Краснодарский край, г. Ейск, ул. Вильгельма Де Геннина, 37. тел. +7(86132) 74-74-73<br/><a href="/about">Как нас найти</a></p>
        </div>


    </div>
</div>

<script>
    $( '.simple-slide-show' ).simpleSlideShow({
      autoplay: 5000,
      effect: 'slide', //fade,slide
      controls: true,
      index: false,
      autosize: false
    });
</script>

<?php

    //var_dump(Yii::$app->request);

 ?>