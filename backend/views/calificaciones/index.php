<?php

use backend\models\Calificaciones;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var backend\models\search\CalificacionesSearch $searchModel */
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

$this->title = Yii::t('app', 'Calificaciones');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calificaciones-index">

<style>
body {
  background-image: url('https://static.wixstatic.com/media/a6f1e7_7dc1568d62734a679dbc27e7858f6006~mv2_d_5184_3456_s_4_2.jpg/v1/fill/w_1920,h_1280,al_c,q_90,usm_0.66_1.00_0.01/a6f1e7_7dc1568d62734a679dbc27e7858f6006~mv2_d_5184_3456_s_4_2.jpg');
}

* {
    padding: 0;
    margin: 0;
}

body {
     font-family: 'Poppins', sans-serif;
}

h1 {
    font: bold 37px Times;
    color: #666;
    text-align: center;
    padding: 20px 0;
}

#container {
    width: 700px;
    margin: 10px auto;
}

.mGrid {
    width: 100%;
    background-color: #fff;
    margin: 5px 0 10px 0;
    border: solid 1px #525252;
    border-collapse: collapse;
}

    .mGrid td {
        padding: 2px;
        border: solid 1px #c1c1c1;
        color: #717171;
    }

    .mGrid th {
        padding: 4px 2px;
        color: #fff;
        background: #424242 url(grd_head.png) repeat-x top;
        border-left: solid 1px #525252;
        font-size: 0.9em;
    }

    .mGrid .alt {
        background: #fcfcfc url(grd_alt.png) repeat-x top;
    }

    .mGrid .pgr {
        background: #424242 url(grd_pgr.png) repeat-x top;
    }

        .mGrid .pgr table {
            margin: 5px 0;
        }

        .mGrid .pgr td {
            border-width: 0;
            padding: 0 6px;
            border-left: solid 1px #666;
            font-weight: bold;
            color: #fff;
            line-height: 12px;
        }

        .mGrid .pgr a {
            color: #666;
            text-decoration: none;
        }

            .mGrid .pgr a:hover {
                color: #000;
                text-decoration: none;
            }
</style> 

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'Parcial_1',
            'Parcial_2',
            'Parcial_3',
            'Parcial_4',
            'Promedio_Total',

            'perfil_id',
            
            'curso_id',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Calificaciones $model, $key, $index, $column) {
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
            'before'=>Html::a(Yii::t('app', 'Asignar Calificación'), ['create'], ['class' => 'btn btn-success']),
            'footer'=>false
        ],

    ]); ?>


</div>
