Installation
------------

####Download:

Download from [Github](https://almsaeedstudio.com).

**Composer**
```
composer require "almasaeed2010/adminlte=~2.0"
```


Подключаем модуль
```
'language' => [
    'class' => 'app\modules\language\Module',
    //'customWidgetView' => '/views'
],
```

Database migrations
--------
```
php yii migrate/up --migrationPath=@app/modules/language/migrations
```


Config
-------

Устанавливаем язык пользователя (language)
и исходный язык приложения (sourceLanguage)

```
'language'=>'ru-RU',
'sourceLanguage'=>'en-US',
```

В блок components - urlManager конфигурационного файла config/web.php добавляем:

```
'urlManager' => [
    'class'=>'app\modules\language\components\LangUrlManager',
    ...
]
```
Добавляем в request конфигурационного файла config/web.php :

```
'request' => [
    'class' => 'app\modules\language\components\LangRequest'
    ...  
],
```

Usage
--------

```
use app\modules\language\widgets\WLang;
<?= WLang::widget();?>
```