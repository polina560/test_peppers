<?php

namespace app\controllers;

use app\models\Post;
use yii\data\Pagination;
use yii\web\Controller;

class ContentController extends Controller
{
    public function actionContent()
    {
        return $this->render('index');
    }
}