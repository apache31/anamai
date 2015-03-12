<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ChospitalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Chospitals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chospital-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Chospital', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'hoscode',
            'hosname',
            'hostype',
            'address',
            'road',
            // 'mu',
            // 'subdistcode',
            // 'distcode',
            // 'provcode',
            // 'postcode',
            // 'hoscodenew',
            // 'bed',
            // 'level_service',
            // 'bedhos',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
