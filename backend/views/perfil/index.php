<?php

use backend\models\Perfil;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var backend\models\search\PerfilSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */


$this -> registerCss("
.text-dark {
    color: white !important;
}

td.kv-group-even {
    background-color: #f0f1ff !important;
    font-size: 20px;
    text-align: justify;
    font-weight: bold; 
}

.btn-warning {
    color: white;
    background-color: #C0392B !important;
    border-color: #922B21;
}

.bg-info {
    background-color: #212F3C !important;
}

.border-info {
    border-color: black !important;
}
");

$this->title = Yii::t('app', 'Perfiles');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfil-index">

    <style>
body {
  background-image: url('https://static.wixstatic.com/media/a6f1e7_7dc1568d62734a679dbc27e7858f6006~mv2_d_5184_3456_s_4_2.jpg/v1/fill/w_1920,h_1280,al_c,q_90,usm_0.66_1.00_0.01/a6f1e7_7dc1568d62734a679dbc27e7858f6006~mv2_d_5184_3456_s_4_2.jpg');
}


</style> 

    <h1><?= Html::encode($this->title) ?></h1>


    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

            'id',
            'Matricula',
            'Nombre_Estudiante',
            //'Genero',
            //'Fecha_De_Nacimiento',
            'Correo',
            'Telefono',
            'Lugar_De_Origen',
            //'Grupo_Etnico',
            //'Porcentaje_Idioma',
            //'user_id',
            [
                'attribute' => 'curso_id',
                'value' => 'curso.Nombre_Del_Curso',
            ],

            
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Perfil $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],

'pjax' => true,
        'responsive' => true,
        'hover' => true,
        'toggleDataOptions' => [
            'maxCount' => true,
            ],
        'toolbar' => [
            '{export}',
            '{toggleData}'
        ],
        
        'panel' => [
            'heading'=>$this->title,
            'type'=>'info',
            'footer'=>false
        ],




    ]); ?>





</div>
