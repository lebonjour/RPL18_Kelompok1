<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Objekwisata */

$this->title = 'Update Objekwisata: ' . $model->id_wisata;
$this->params['breadcrumbs'][] = ['label' => 'Objekwisatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_wisata, 'url' => ['view', 'id' => $model->id_wisata]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="objekwisata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
