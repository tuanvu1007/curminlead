<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\posts\models\TagsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Từ khóa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tags-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tạo mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'description:ntext',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update}{delete}',
            
            ],
        ],
    ]); ?>

</div>
