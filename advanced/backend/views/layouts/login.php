<?php
use yii\helpers\Html;
?>
<header>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
    <?=Html::jsFile('@web/assets/html/lib/html5shiv.js')?>
    <?=Html::jsFile('@web/assets/html/lib/respond.min.js')?>
    <!--<script type="text/javascript" src="lib/html5shiv.js"></script>-->
    <!--    <script type="text/javascript" src="lib/respond.min.js"></script>-->
    <![endif]-->
    <?=Html::cssFile('@web/assets/html/static/h-ui/css/H-ui.min.css')?>
    <?=Html::cssFile('@web/assets/html/static/h-ui.admin/css/style.css')?>
    <?=Html::cssFile('@web/assets/html/lib/Hui-iconfont/1.0.8/iconfont.css')?>
</header>
<div class="wrap">
    <div class="container">
        <?= $content ?>
    </div>
</div>
<footer class="footer">
    <div>

    </div>
</footer>


