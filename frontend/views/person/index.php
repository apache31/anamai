<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PersonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'People';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="person-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Person', ['create'], ['class' => 'btn btn-success']) ?>
        <?php
        $route= Yii::$app->urlManager->createUrl('person/create');
        ?>
        <a href="<?=$route?>" class="btn btn-primary">
            <i class="btn-danger"></i>    55555
        </a>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'panel'=>[
            'before'=>'Export'
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'HOSPCODE',
            'CID',
            //'PID',
            //'HID',
            'PRENAME',
            'NAME',
            'LNAME',
            // 'HN',
            'SEX',
            // 'BIRTH',
            // 'MSTATUS',
            // 'OCCUPATION_OLD',
            // 'OCCUPATION_NEW',
            // 'RACE',
            // 'NATION',
            // 'RELIGION',
            // 'EDUCATION',
            // 'FSTATUS',
            // 'FATHER',
            // 'MOTHER',
            // 'COUPLE',
            // 'VSTATUS',
            // 'MOVEIN',
            // 'DISCHARGE',
            // 'DDISCHARGE',
            // 'ABOGROUP',
            // 'RHGROUP',
            // 'LABOR',
            // 'PASSPORT',
            // 'TYPEAREA',
            // 'D_UPDATE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
