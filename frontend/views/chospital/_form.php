<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Chospital */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chospital-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'hoscode')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'hosname')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'hostype')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'road')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'mu')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'subdistcode')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'distcode')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'provcode')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'postcode')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'hoscodenew')->textInput(['maxlength' => 9]) ?>

    <?= $form->field($model, 'bed')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'level_service')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'bedhos')->textInput(['maxlength' => 5]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
