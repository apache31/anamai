<?php

use kartik\grid\GridView;
use yii\helpers\Html;

$this->params['breadcrumbs'][] = ['label' => 'รายงาน', 'url' => ['report/index']];
$this->params['breadcrumbs'][] = 'รายบุคคล';

echo GridView::widget([
'dataProvider' => $dataProvider,
'panel' => [
    'before' => 'รายงานการนับถือศาสนา',
    'after'=>$sql
],
      
]
)
?>