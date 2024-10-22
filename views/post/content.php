<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
$this->title = Yii::$app->name;

?>
<section class="blog-post-area">

    <section class="blog-post-area">
        <div class="container">
            <div class="row">
                <div class="blog-post-area-style">
                    <div class="col-md-12">
                        <div class="single-post-big">
                            <div class="big-image">
                                <img src="img/post-image1.jpg" alt="">
                            </div>
                            <div class="big-text">
                                <h3><a href="#">Post Title Goes Here.</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <h4><span class="date">25 February 2017</span><span class="author">Posted By: <span class="author-name">Kabbo Liate</span></span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <?php foreach ($posts as $post):?>
                        <div class="col-md-3">
                            <div class="single-post">
                                <?= \yii\helpers\Html::img("@web/{$post->img}")?>
                                <!--                        <img src="img/post-image2.jpg" alt="">-->
                                <h3><a href="<?= \yii\helpers\Url::to(['post/view', 'id' => $post->id])?>"><?= $post->title?>></a></h3>
                                <h4><span>Category: <span class="author-name">
                                    <a href="<?=\yii\helpers\Url::to(['category/view', 'alias'=>  $post->category->alias])?>">
                                        <?= $post->category->title ?>
                                    </a></span></span>
                                </h4>
                                <?= $post->excerpt?>
                                <h4><span>  <?= Yii::$app->formatter->asDate($post->created_at, 'php: d.m.Y') ?></span></h4>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </section>

</section>
