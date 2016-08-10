<?php

namespace dongrim\language\widgets;

use dongrim\language\models\Language;
use yii\bootstrap\Widget;

class WLang extends Widget
{
    public function init(){}

    public function run() {
        $module  = \Yii::$app->getModule('language');
        return $this->render($module->customWidgetView, [
            'current' => Language::getCurrent(),
            'langs' => Language::find()->all(), // or show all except current
            //'langs' => Language::find()->where('id != :current_id', [':current_id' => Language::getCurrent()->id])->all(),
        ]);
    }
}