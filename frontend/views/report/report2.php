<?php

use kartik\grid\GridView;

$this->params['breadcrumbs'][] = ['label' => 'รายงาน', 'url' => ['report/index']];
$this->params['breadcrumbs'][] = 'รายงานนับถือศาสนา';

echo GridView::widget([
'dataProvider' => $dataProvider,
'panel' => [
    'before' => 'รายงานฝากครรภ์ 12 weeks',
    'after'=>'ประมวลผล ณ'. date('Y-m-d H:i:s')
]]
)
?>