<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Horario $model */

$this->title = Yii::t('app', 'Crear Horario');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Horarios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="horario-create">

<style>
body {
  background-image: url('https://static.wixstatic.com/media/a6f1e7_7dc1568d62734a679dbc27e7858f6006~mv2_d_5184_3456_s_4_2.jpg/v1/fill/w_1920,h_1280,al_c,q_90,usm_0.66_1.00_0.01/a6f1e7_7dc1568d62734a679dbc27e7858f6006~mv2_d_5184_3456_s_4_2.jpg');
}
</style> 

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
