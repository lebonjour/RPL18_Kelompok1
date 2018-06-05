<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ObjekwisataSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="objekwisata-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_wisata') ?>

    <?= $form->field($model, 'nama_tempat') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'harga') ?>

    <?= $form->field($model, 'operasional') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
