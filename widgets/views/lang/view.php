<?php
use yii\helpers\Html;
 \iutbay\yii2fontawesome\FontAwesomeAsset::register($this);;
?>
<li class="dropdown">
    <a class="dropdown-toggle language" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-dribbble"></i>
    </a>
    <ul class="dropdown-menu">
        <?php foreach ($langs as $lang):?>
            <?php $current->url == $lang->url ? $class='current' : $class = ''; ?>
            <li class="item-lang " >
                <?= Html::a($lang->name, '/'.$lang->url.Yii::$app->getRequest()->getLangUrl()) ?>
            </li>
        <?php endforeach;?>
    </ul>
</li>
