<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;


/** @var yii\web\View $this */
/** @var backend\models\Curso $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cursos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="curso-view">

    <style>
body {
  background-image: url('https://static.wixstatic.com/media/a6f1e7_7dc1568d62734a679dbc27e7858f6006~mv2_d_5184_3456_s_4_2.jpg/v1/fill/w_1920,h_1280,al_c,q_90,usm_0.66_1.00_0.01/a6f1e7_7dc1568d62734a679dbc27e7858f6006~mv2_d_5184_3456_s_4_2.jpg');
}
</style> 

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'Nombre_Del_Curso',
            'Docente',
            'Numero_De_Dias',
            'Cupo',
            'Fecha_De_Inicio',
            'Fecha_De_Cierre',
            'Modalidad',
            'Precio_Del_Curso',
        ],
    ]) ?>
<br>
<br>
<h3>Calificaciones del Curso</h3>
<br>

<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            ['attribute' => 'perfil_id',
                'value' => 'perfil.Nombre_Estudiante',],
            [
                'attribute' => 'curso_id',
                'value' => 'curso.Nombre_Del_Curso',],
            'Parcial_1',
            'Parcial_2',
            'Parcial_3',
            'Parcial_4',
            'Promedio_Total',

            [
                
            ],
        ],

    ]); ?>


</div>
