<?php

// comment out the following two lines when deployed to production


use app\models\Post;

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();


//$post = new Post;
//$post->category_id = 1;
//$post->title = 'Post 2';
//$post->excerpt = 'Excerpt for Post 2';
//$post->content = 'Content for Post 2';
//$post->img = 'img/post-image2.jpg';
//$post->save();
