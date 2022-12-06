<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/** @var yii\web\View $this */
/** @var backend\models\Curso $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="curso-form">
    <head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
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

    <?= $form->field($model, 'Nombre_Del_Curso')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Docente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Numero_De_Dias')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cupo')->textInput() ?>

    <?=$form->field($model, 'Fecha_De_Inicio')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Seleccionar ...'],
    'pluginOptions' => [
        'autoclose' => true,
        'format' => 'yyyy-mm-dd',
    ] 
    ]);?>

<?=$form->field($model, 'Fecha_De_Cierre')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Seleccionar ...'],
    'pluginOptions' => [
        'autoclose' => true,
        'format' => 'yyyy-mm-dd',
    ] 
    ]);?>


    <?= $form->field($model, 'Modalidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Precio_Del_Curso')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
