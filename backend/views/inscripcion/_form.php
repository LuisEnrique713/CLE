<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use backend\models\Curso;
use backend\models\Perfil;
use backend\models\Nivel;
use yii\helpers\ArrayHelper;
use kartik\file\FileInput;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var backend\models\Inscripcion $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="inscripcion-form">

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

<img src="https://cdn-icons-png.flaticon.com/512/3188/3188168.png" align="right" style= "width:420px; height:380px;"/img>

</p>
    
    <div class="col-lg-7">


    <?= $form->field($model, 'Nombre_Del_Estudiante')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'matricula')->textInput(['maxlength' => true]) ?>


    

      </div>
<div class="col-lg-7">

      <?= $form->field($model, 'nivel_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Nivel::find()->all(), 'id', 'Nombre_Mcer'),

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

<?= $form->field($model, 'perfil_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Perfil::find()->all(), 'id', 'Nombre_Estudiante'),

        'theme' => Select2::THEME_BOOTSTRAP,

        'size' => Select2::LARGE,

        'options' => ['placeholder' => Yii::t('app', 'Seleccionar')],

        'pluginOptions' => [

            'allowClear' => true

        ],

        ]);?>


<?= $form->field($model, 'comprobante')->widget(FileInput::classname(), [
                'options' => ['accept' => 'file/*'],
                'pluginOptions' => [
                    'allowedFileExtensions' => ['pdf'],
                    'showUpload' => false
                ]
              ])?>

 <br>             
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar Inscripción'), ['class' => 'btn btn-success']) ?>
        
    </div>
</div>


    <?php ActiveForm::end(); ?>

   
        

</div>
