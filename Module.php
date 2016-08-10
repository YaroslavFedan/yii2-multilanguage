<?php

namespace dongrim\language;
use Yii;

/**
 * language module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'dongrim\language\controllers';

    public $customWidgetView = '@dongrim/language/widgets/views/lang/view';

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->registerAssets();
        parent::init();

        // custom initialization code goes here
    }

    private $_view;

    /**
     * Returns the view object that can be used to render views or view files.
     * The [[render()]] and [[renderFile()]] methods will use
     * this view object to implement the actual view rendering.
     * If not set, it will default to the "view" application component.
     * @return \yii\web\View the view object that can be used to render views or view files.
     */
    public function getView()
    {
        if ($this->_view === null) {
            $this->_view = Yii::$app->getView();
        }

        return $this->_view;
    }

    protected function registerAssets()
    {
        $view = $this->getView();
        LanguageAsset::register($view);
    }

}
