A Javascript plugin for cross-browser Ajax file uploading. Supports multiple file uploading with progress bars.
===============================================================================================================
Javascript plugin for cross-browser Ajax file uploading with progress bar support. Works in all major browsers, including IE7+, Chrome, Firefox, Safari, and Opera. No dependencies - use it with or without jQuery.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).
Full api https://www.lpology.com/code/ajaxuploader/docs.php
Either run

```
php composer.phar require --prefer-dist skeeks/yii2-widget-simpleajaxuploader "*"
```

or add

```
"skeeks/yii2-widget-simpleajaxuploader": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by :

```
<?php
namespace bla\bla;
use skeeks\widget\simpleajaxuploader\Widget;

echo Widget::widget({
      "clientOptions" =>
      [
          "name" => ""
      ]
 });
?>
```


> [![skeeks!](https://gravatar.com/userimage/74431132/13d04d83218593564422770b616e5622.jpg)](http://www.skeeks.com)  
<i>Web development has never been so fun!</i>  
[www.skeeks.com](http://www.skeeks.com)
