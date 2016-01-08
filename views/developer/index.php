<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Застройщики';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="developers-index">


    <p>
        <?= Html::a('Добавить застройщика', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'create_date',
            'logotype',
            'descripition',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
