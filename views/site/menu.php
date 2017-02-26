<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Меню';

?>
<div class="site-about">
    <!--<h1><?= Html::encode($this->title) ?></h1>-->

    <p class="tbl-main">Что у нас вкусного?</p>

    <table class="menu-table" border-spacing="1">
        <tbody>
        <?php 
            foreach($category_data as $category){ ?>
                <tr>
                    <td class="tbl-header" colspan="3"><?=$category->name?></td>
                </tr>
                <?php
                    foreach($item_data as $item){
                        if($category->id === $item->category_id){ ?>
                            <tr class="tbl-row">
                                <td class="tbl-name"><?=$item->name?></td>
                                <td class="tbl-weight"><?=$item->weight?></td>
                                <td class="tbl-price"><?=$item->price?></td>
                            </tr>
                    <?php
                    } 
                }
            } 
        ?>
        </tbody>
    </table>

</div>
