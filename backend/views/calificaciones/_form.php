<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use backend\models\Curso;
use backend\models\Perfil;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var backend\models\Calificaciones $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="calificaciones-form">
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
    <?= $form->field($model, 'perfil_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Perfil::find()->all(), 'id', 'Nombre_Estudiante'),

        'theme' => Select2::THEME_BOOTSTRAP,

        'size' => Select2::LARGE,

        'options' => ['placeholder' => Yii::t('app', 'Seleccionar')],

        'pluginOptions' => [

            'allowClear' => true

        ],

        ]);?>

    <?= $form->field($model, 'curso_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Curso::find()->all(), 'id', 'Nombre_Del_Curso'),

        'theme' => Select2::THEME_BOOTSTRAP,

        'size' => Select2::LARGE,

        'options' => ['placeholder' => Yii::t('app', 'Seleccionar')],

        'pluginOptions' => [

            'allowClear' => true

        ],

        ]);?>

    <?= $form->field($model, 'Parcial_1')->textInput() ?>

    <?= $form->field($model, 'Parcial_2')->textInput() ?>

    <?= $form->field($model, 'Parcial_3')->textInput() ?>

    <?= $form->field($model, 'Parcial_4')->textInput() ?>

    <?= $form->field($model, 'Promedio_Total')->textInput() ?>


    

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
