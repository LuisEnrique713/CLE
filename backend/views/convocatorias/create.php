<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Convocatorias $model */

$this->title = Yii::t('app', 'Crear Convocatorias');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Convocatorias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="convocatorias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
