<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Comission */

$this->title = 'Update Comission: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Comissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'objects_id' => $model->objects_id, 'agents_id' => $model->agents_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="comission-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
