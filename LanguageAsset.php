<?php

namespace dongrim\language;

use yii\web\AssetBundle;

class LanguageAsset extends AssetBundle
{
    public $sourcePath = '@dongrim/language/assets';

    public $css = [
        'css/lang.css',
    ];

    public $js = [];

    public $depends = [
        'yii\web\YiiAsset',
    ];

}