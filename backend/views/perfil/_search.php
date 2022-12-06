<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\search\PerfilSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perfil-search">

    <style>
body {
  background-image: url('https://static.wixstatic.com/media/a6f1e7_7dc1568d62734a679dbc27e7858f6006~mv2_d_5184_3456_s_4_2.jpg/v1/fill/w_1920,h_1280,al_c,q_90,usm_0.66_1.00_0.01/a6f1e7_7dc1568d62734a679dbc27e7858f6006~mv2_d_5184_3456_s_4_2.jpg');
}
</style> 

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Matricula') ?>

    <?= $form->field($model, 'Nombre_Estudiante') ?>

    <?= $form->field($model, 'Genero') ?>

    <?= $form->field($model, 'Fecha_De_Nacimiento') ?>

    <?php // echo $form->field($model, 'Correo') ?>

    <?php // echo $form->field($model, 'Telefono') ?>

    <?php // echo $form->field($model, 'Lugar_De_Origen') ?>

    <?php // echo $form->field($model, 'Grupo_Etnico') ?>

    <?php // echo $form->field($model, 'Porcentaje_Idioma') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'curso_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
