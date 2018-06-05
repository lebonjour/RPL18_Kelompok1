<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Objekwisata */

$this->title = 'Create Objekwisata';
$this->params['breadcrumbs'][] = ['label' => 'Objekwisatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="objekwisata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
