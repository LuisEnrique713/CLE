<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Nivel $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="nivel-form">

    <style>
body {
  background-image: url('https://static.wixstatic.com/media/a6f1e7_7dc1568d62734a679dbc27e7858f6006~mv2_d_5184_3456_s_4_2.jpg/v1/fill/w_1920,h_1280,al_c,q_90,usm_0.66_1.00_0.01/a6f1e7_7dc1568d62734a679dbc27e7858f6006~mv2_d_5184_3456_s_4_2.jpg');
}

form * {
    font-family: 'Poppins', sans-serif;
    color: #050505;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
    
}
</style> 

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombre_Mcer')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
