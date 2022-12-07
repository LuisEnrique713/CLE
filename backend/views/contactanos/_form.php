<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Contactanos $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="contactanos-form">

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

<p> 
<p align="right">Numero de Teléfono :  983 86 78 212 </p> 
<p align="right">Horario de oficina de  12:00 – 16:00</p> 
<img src="https://cdn-icons-png.flaticon.com/512/2343/2343694.png" align="right" style= "width:420px; height:380px;"/img>
</p>

    <div class="col-lg-7">
    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Correo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Quejas_o_Sugerencias')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>
</div>
    <?php ActiveForm::end(); ?>

</div>
