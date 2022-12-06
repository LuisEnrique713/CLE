<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\search\CursoSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="curso-search">

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

    <?= $form->field($model, 'Nombre_Del_Curso') ?>

    <?= $form->field($model, 'Docente') ?>

    <?= $form->field($model, 'Numero_De_Dias') ?>

    <?= $form->field($model, 'Cupo') ?>

    <?php // echo $form->field($model, 'Fecha_De_Inicio') ?>

    <?php // echo $form->field($model, 'Fecha_De_Cierre') ?>

    <?php // echo $form->field($model, 'Modalidad') ?>

    <?php // echo $form->field($model, 'Precio_Del_Curso') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
