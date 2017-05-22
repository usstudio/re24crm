<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
echo json_encode($countries);
foreach ($countries as $count){
    print_r((array)$count);
}
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>



    </div>
</div>
