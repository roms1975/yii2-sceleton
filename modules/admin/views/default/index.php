<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\SearchPhotos */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="photos-index">
    <p>
        <?= Html::a('Create Track', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'track_number',
            'created_at',
            'updated_at',
            'status',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
