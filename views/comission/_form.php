<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Objects;
use app\models\Agents;

/* @var $this yii\web\View */
/* @var $model app\models\Comission */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comission-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'objects_id')->dropDownList(ArrayHelper::map(Objects::getList(), 'id', 'name'))?>
    <?= $form->field($model, 'agents_id')->dropDownList(ArrayHelper::map(Agents::getList(), 'id', 'name'))?>
    <?= $form->field($model, 'value')->textInput() ?>

    <?= $form->field($model, 'is_episode')->checkBox(['checked'=>1]) ?>


    <?= $form->field($model, 'start_epizode')->textInput() ?>

    <?= $form->field($model, 'end_epizode')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
