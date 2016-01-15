<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Comission */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Comissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comission-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'objects_id' => $model->objects_id, 'agents_id' => $model->agents_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'objects_id' => $model->objects_id, 'agents_id' => $model->agents_id], [
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
            'id',
            'objects_id',
            'agents_id',
            'value',
            'create_data',
            'update_data',
            'is_episode',
            'start_epizode',
            'end_epizode',
        ],
    ]) ?>

</div>
