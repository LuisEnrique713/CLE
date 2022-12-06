<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Convocatorias $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="convocatorias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Convocatoria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Archivo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
