# Image galary widget for Yii2 Framework

The Yii2 extension uses jQuery PrettyPhoto and OwlCarousel js and makes image galary from php array of structure defined.

[Image galary PHP Array generator](http://yii2.kadastrcard.ru/imagegalary).

![Image galary](http://yii2.kadastrcard.ru/uploads/imagegalary.jpg)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run:

```bash
composer require slavkovrn/yii2-imagegalary
```

or add

```bash
"slavkovrn/yii2-imagegalary": "*"
```

to the require section of your `composer.json` file.

Usage
-----

Set link to extension in your view:

```php
<?php

use slavkovrn\imagegalary\ImageGalaryWidget;

?>

<?= ImageGalaryWidget::widget([
    'id' =>'imagegalary',       // id of plugin should be unique at page
    'class' =>'imagegalary',    // class of div to define style
    'css' => 'border:white;',   // css commands of class (for example - border-radius:5px;)
    'image_width' => 320,       // height of image visible in widget
    'image_height' => 240,      // width of image visible in widget
    'thumb_width' => 80,        // height of thumb images
    'thumb_height' => 50,       // width of thumb images
    'items' => 3,               // number of thumb items
    'images' => [               // images of galary
        [
                'src' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image1.jpg',
                'title' => 'Image visible in widget',
        ],
        [
                'src' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image2.jpg',
                'title' => 'image 1',
        ],
        [
                'src' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image3.jpg',
                'title' => 'image 2',
        ],
        [
                'src' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image4.jpg',
                'title' => 'image 3',
        ],
    ]
]) ?>
```
<a href="mailto:slavko.chita@gmail.com">write comments to admin</a>
