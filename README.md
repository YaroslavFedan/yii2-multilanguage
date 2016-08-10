Installation
------------

####Download:

Download from [Github](https://github.com/YaroslavFedan/yii2-multilanguage).

**Composer**
```
composer require dongrim/language
```


Подключаем модуль
```
'language' => [
    'class' => 'dongrim\language\Module',
    //'customWidgetView' => '/views'
],
```

Database migrations
--------
```
php yii migrate/up --migrationPath=@dongrim/language/migrations
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
    'class'=>'dongrim\language\components\LangUrlManager',
    ...
]
```
Добавляем в request конфигурационного файла config/web.php :

```
'request' => [
    'class' => 'dongrim\language\components\LangRequest'
    ...  
],
```

Usage
--------

```
use dongrim\language\widgets\WLang;
<?= WLang::widget();?>
```