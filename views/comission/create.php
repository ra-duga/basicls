<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Comission */

$this->title = 'Create Comission';
$this->params['breadcrumbs'][] = ['label' => 'Comissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comission-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
