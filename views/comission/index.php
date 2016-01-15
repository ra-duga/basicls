<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comissions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comission-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Comission', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'objects.name:text:Объект',
            'agents.name:text:Агент',
            'value:percent:Значение',
            'create_data',
            'update_data',
            // 'is_episode',
            // 'start_epizode',
            // 'end_epizode',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
