<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use backend\models\Curso;
use backend\models\User;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

/** @var yii\web\View $this */
/** @var backend\models\Perfil $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perfil-form">

    
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
<style>
body {
  background-image: url('https://static.wixstatic.com/media/a6f1e7_7dc1568d62734a679dbc27e7858f6006~mv2_d_5184_3456_s_4_2.jpg/v1/fill/w_1920,h_1280,al_c,q_90,usm_0.66_1.00_0.01/a6f1e7_7dc1568d62734a679dbc27e7858f6006~mv2_d_5184_3456_s_4_2.jpg');
}


</style> 

    <?php $form = ActiveForm::begin(); ?>

    <p> 

<img src="imagenes/111.png" align="right" style= "width:550px; height:550px;"/img>
</p>
    
    <div class="col-lg-5">

    <?= $form->field($model, 'Matricula')->textInput(['maxlength' => true]) ?>
    </div>
<div class="col-lg-5">
    <?= $form->field($model, 'Nombre_Estudiante')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-lg-5">
    <?= $form->field($model, 'Genero')->dropDownList([ 'Femenino' => 'Femenino', 'Masculino' => 'Masculino', ], ['prompt' => '']) ?>
</div>
<div class="col-lg-5">
    <?=$form->field($model, 'Fecha_De_Nacimiento')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Seleccionar ...'],
    'pluginOptions' => [
        'autoclose' => true,
        'format' => 'yyyy-mm-dd',
    ] 
    ]);?>
 </div>

<div class="col-lg-5">

    <?= $form->field($model, 'Correo')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-lg-5">
    <?= $form->field($model, 'Telefono')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-lg-5">
    <?= $form->field($model, 'Lugar_De_Origen')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-lg-5">
    <?= $form->field($model, 'Grupo_Etnico')->dropDownList([ 'Chol' => 'Chol', 'Maya' => 'Maya','Mazahuas' => 'Mazahuas','Mixteca' => 'Mixteca','Náhualt' => 'Náhualt','Otomí' => 'Otomí','´Totonaca' => 'Totonaca','Tsotsil' => 'Tsotsil', 'Zapoteca' => 'Zapoteca', 'Ninguna' => 'Ninguna', ], ['prompt' => '']) ?>

</div>
<div class="col-lg-5">
    <?= $form->field($model, 'Porcentaje_Idioma')->dropDownList([ 'No hablo' => 'No hablo', 'Menos de 10%' => 'Menos de 10%','Entre el 11% al 30%' => 'Entre el 11% al 30%','Entre el 31% al 50%' => 'Entre el 31% al 50%','Entre el 51% al 70%' => 'Entre el 51% al 70%','Entre el 71% al 90%' => 'Entre el 71% al 90%','Mas del 90%' => 'Mas del 90%', ], ['prompt' => '']) ?>

</div>
<div class="col-lg-5">

    <?= $form->field($model, 'user_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(User::find()->all(), 'id', 'username'),

        'theme' => Select2::THEME_BOOTSTRAP,

        'size' => Select2::LARGE,

        'options' => ['placeholder' => Yii::t('app', 'Seleccionar')],

        'pluginOptions' => [

            'allowClear' => true

        ],

        ]);?>
</div>
        <div class="col-lg-5">

<?= $form->field($model, 'curso_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Curso::find()->all(), 'id', 'Nombre_Del_Curso'),

        'theme' => Select2::THEME_BOOTSTRAP,

        'size' => Select2::LARGE,

        'options' => ['placeholder' => Yii::t('app', 'Seleccionar')],

        'pluginOptions' => [

            'allowClear' => true

        ],

        ]);?>

   
</div>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>



    <?php ActiveForm::end(); ?>

</div>
