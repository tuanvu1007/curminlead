<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\posts\models\Posts */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Tất cả', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="posts-update">
    <p>
        <?= Html::a('Tạo mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
