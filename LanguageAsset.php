<?php

namespace dongrim\language;

use yii\web\AssetBundle;

class LanguageAsset extends AssetBundle
{
    public $sourcePath = '@dongrim/language/assets';

    public $css = [
        'css/lang.css',
        '//netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'
    ];

    public $js = [];

    public $depends = [
        'yii\web\YiiAsset',
    ];

}