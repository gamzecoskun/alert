<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Alert */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alert-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'turu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icerigi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ismi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Kaydet', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
