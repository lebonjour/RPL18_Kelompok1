<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Objekwisata */

$this->title = $model->id_wisata;
$this->params['breadcrumbs'][] = ['label' => 'Objekwisatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="objekwisata-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_wisata], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_wisata], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_wisata',
            'nama_tempat',
            'alamat',
            'harga',
            'operasional',
        ],
    ]) ?>

</div>
