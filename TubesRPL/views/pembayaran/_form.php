<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pembayaran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembayaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pilihan_pembayaran')->dropDownList($model->dataPemilihanpembayaran(),[
        'class'=>'form-control','prompt'=>'- pilih Kategori -'
    ]) ?>

    <?= $form->field($model, 'status')->dropDownList($model->dataStatus(),[
        'class'=>'form-control','prompt'=>'- pilih Kategori -']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
