<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use backend\models\Calificaciones;


/** @var yii\web\View $this */
/** @var backend\models\Calificaciones $model */


/** @var yii\web\View $this */
/** @var backend\models\Perfil $model */

$this->title = $model->id;

$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="perfil-view">

<style>
body {
    font-family: 'Poppins', sans-serif;
     font-size: 16px;
    color: #050505;
    outline: none;
    border: none;
  background-image: url('https://static.wixstatic.com/media/a6f1e7_7dc1568d62734a679dbc27e7858f6006~mv2_d_5184_3456_s_4_2.jpg/v1/fill/w_1920,h_1280,al_c,q_90,usm_0.66_1.00_0.01/a6f1e7_7dc1568d62734a679dbc27e7858f6006~mv2_d_5184_3456_s_4_2.jpg');
}

body {
    font: 15px Tahoma;
}

h1 {
    font: bold 37px Times;
    color: #666;
    
    padding: 20px 0;
}

#container {
    width: 700px;
    margin: 10px auto;
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
            'Matricula',
            'Nombre_Estudiante',
            'Genero',
            'Fecha_De_Nacimiento',
            'Correo',
            'Telefono',
            'Lugar_De_Origen',
            'Grupo_Etnico',
            'Porcentaje_Idioma',
            'user_id',
            'curso_id',


            
        ],
    ]) ?>





</div>
