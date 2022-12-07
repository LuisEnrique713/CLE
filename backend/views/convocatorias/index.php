<?php

use backend\models\Convocatorias;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\search\ConvocatoriasSearch $searchModel */
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


$this->title = Yii::t('app', 'Convocatorias');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="convocatorias-index">

 <style>
body {
  background-image: url('https://static.wixstatic.com/media/a6f1e7_7dc1568d62734a679dbc27e7858f6006~mv2_d_5184_3456_s_4_2.jpg/v1/fill/w_1920,h_1280,al_c,q_90,usm_0.66_1.00_0.01/a6f1e7_7dc1568d62734a679dbc27e7858f6006~mv2_d_5184_3456_s_4_2.jpg');
}

* {
    padding: 0;
    margin: 0;
}

body {
    font: 15px Tahoma;
}

h1 {
    font: bold 37px Times;
    color: #666;
    text-align: center;
    padding: 20px 0;
}

p{
    font:  Times;
   
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

.button {
    background-color: #008CBA; 
    border: none;
    color: white;
    padding: 11px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}   

.button4 {border-radius: 12px;}

</style> 


    <h1><?= Html::encode($this->title) ?></h1>

    

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'Convocatoria',
            'Archivo:url',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Convocatorias $model, $key, $index, $column) {
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



<!-- ==== certificaciones ==== -->


<div id="greywrap" name="greywrap">
    <div class="row">
        <div class="container center-block">
            <div class="container" id="greywrap" name="greywrap">
<div class="row">
    <div class="container">
        <div class="TECNOLÓGICO">
<br>
<br> 

            
        </div>
        <div class="text-justify">
        <article>
            <p style="text-align: center;"><strong><em><br></em></strong></p>
<table style="width: 100%;"><tbody>
<tr>
    <td style="width: 40.8421%; background-color: rgb(61, 133, 198);"><br></td>
    <td style="width: 59.0526%; background-color: rgb(7, 55, 99);"><span style="color: rgb(255, 255, 255);"><strong><br></strong></span></td></tr></tbody></table><p style="text-align: center;"></p>

<p style="text-align:justify"></p>
</div>


<br>
 
<div class="row">

            <div class="col-lg-4">
               <center> <h4>Certificación Cambridge</h4></center>
                <img src="https://cenathalie.com/wp-content/uploads/2017/06/niveles-certificados-cambridge.jpg" class="mx-auto d-block left-block" style= "width:325px; height:210px;">
                <br>

                <p>Estos exámenes de inglés tienen la particularidad que la certificación de inglés alcanzada es válida de por vida. Esto los hace bastante atractivos para personas que buscan una certificación oficial sin caducidad. </p>

               

                <center><p><a class="button button4" href="https://www.ef.com.mx/certificados-ingles/examenes-cambridge/">Más Información</a></p></center>





            </div>
            <div class="col-lg-4">
               <center> <h4>Certificación Toelf</h4></center>
                <img src="https://www.abaenglish.com/es/wp-content/uploads/sites/2/2022/06/Screenshot_36-1.png" class="mx-auto d-block left-block" style= "width:325px; height:210px;">
                <br>

                <p>Es la contraparte estadounidense del IELTS. Es gestionado por Educational Testing Service y está especializado en evaluar el nivel de posesión general del inglés americano en hablantes no nativos. </p>

                <center><p><a class="button button4" href="https://www.ef.com.mx/certificados-ingles/toefl/">Más Información</a></p></center>


            </div>
            <div class="col-lg-4">
                <center><h4>Certificación Ielts</h4></center>
                <img src="https://f9y7c7c2.rocketcdn.me/wp-content/uploads/2022/07/%C2%BFQue-es-IELTS-Todo-sobre-el-este-examen-de-ingles-con-certificacion.png" class="mx-auto d-block left-block" style= "width:305px; height:200px;">
                <br>
                

                <p>Sin duda alguna, es la certificación de inglés más prestigiosa a nivel mundial. Es utilizada por instituciones de migración, empresas trasnacionales y cientos de universidades como comprobante del idioma.</p>


                <center><p><a class="button button4" href="https://www.ef.com.mx/certificados-ingles/ielts/">Más Información</a></p></center>

                
            </div>
        </div>
        <br />
        <br />

            </div>
        </div>

    </div>
</div>











</div>
