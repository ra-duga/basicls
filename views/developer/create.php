<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Developers */

$this->title = 'Добавить застройщика';
$this->params['breadcrumbs'][] = ['label' => 'Застройщики', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Новый';
?>
<div class="developers-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
