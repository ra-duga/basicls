<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Developers */

$this->title = 'Редактировать застрощика: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Застройщик', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="developers-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
