<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PemesananSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemesanan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_wisatawan') ?>

    <?= $form->field($model, 'jumlah_tiket') ?>

    <?= $form->field($model, 'kategori_pesanan') ?>

    <?= $form->field($model, 'tanggal_berkunjung') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
