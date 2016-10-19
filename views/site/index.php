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
            <div class="simple-slide-show loading" style="height:400px">
                <ul>
                    <li class="on">
                        <figure>
                            <div class="slide_left">
                                <h1>Супер сосиски!</h1>
                                <p>Самые вкусные сосиски с пюрешкой и огуречно-помидорным салатом ищите в столовой "Застольник" в городе Ейске. Только в ноябре скидка 20% при покупке трех сосисок и компота. Спешите!</p>
                            </div>
                            <div class="slide_right">
                                <img src="/img/slide1.png" />
                            </div>
                        </figure>
                    </li>
                    <li class="off">
                        <figure>
                            <h1>Пироги с доставкой</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam felis quam, sodales eget efficitur quis, imperdiet vel massa. Proin malesuada mattis est sit amet rhoncus. Sed molestie, velit id iaculis ultricies, risus dui rhoncus nunc, a posuere libero velit tempor diam. Morbi lectus justo, rhoncus nec pulvinar in, pellentesque nec risus. Phasellus at arcu congue, eleifend leo sed, lacinia nisl. Phasellus eget tellus vel lectus tincidunt tempor. Nam ac odio at ligula luctus finibus. Curabitur leo turpis, sodales non efficitur a, auctor vel enim. Donec eu lacus tempus, blandit velit ut, porttitor justo. Morbi consectetur leo eu aliquet faucibus. Aliquam suscipit malesuada tellus, sit amet feugiat nisl.</p>
                        </figure>
                    </li>
                    <li class="off2">
                        <figure>
                            <h1>Газировка</h1>
                            <p> ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- --  ---- --- ---- -- </p>
                        </figure>
                    </li>
                </ul>
            </div>
        </div>


        <div class="interior_warp"></div>
        <div class="interior"></div>
        <div class="interior_warp"></div>

    </div>
</div>

<script>
    $( '.simple-slide-show' ).simpleSlideShow({
      autoplay: 3000,
      effect: 'slide', //fade,slide
      controls: true,
      index: false,
      autosize: false
    });
</script>

<?php

    //var_dump(Yii::$app->request);

 ?>