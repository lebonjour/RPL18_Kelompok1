<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pemesanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemesanan-form">
    

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jumlah_tiket')->textInput() ?>

    <?= $form->field($model, 'kategori_pesanan')->dropDownList($model->dataKategoripesanan(),[
        'class'=>'form-control','prompt'=>'- pilih Kategori -'
    ]) ?>

    <?= $form->field($model, 'tanggal_berkunjung')->textInput() ?>
 
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
