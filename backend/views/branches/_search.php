<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\BranchesSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="branches-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'branch_id') ?>

    <?= $form->field($model, 'branch_name') ?>

    <?= $form->field($model, 'branch_address') ?>

    <?= $form->field($model, 'branch_created_date') ?>

    <?= $form->field($model, 'branch_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
