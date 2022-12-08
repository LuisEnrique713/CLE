<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;

use yii\bootstrap5\Nav;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap5\NavBar;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>

<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="web/css/main.css">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

</header>


<header>


    <?php
    NavBar::begin([

        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);


    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],  
        ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
        


    ];



//MENU DEL ADMINISTRADOR

    if ( Yii::$app->user->can('sa') || Yii::$app->user->can('administrador') ){
        $menuItems[] = ['label' => 'Administrador', 
            'items' => [

            ['label' => '  Asignar Roles  ', 'url' => ['admin/assignment', 'tag' => 'new']],
            ['label' => '  ________________________________', '' => [' ', ]],
           
            
            ['label' => '  Administrar Avisos', 'url' => ['avisos/index']],
            ['label' => '  Administrar Convocatorias', 'url' => ['/convocatorias/index', 'tag' => 'new']],
            ['label' => '  Administrar Cursos', 'url' => ['curso/index', 'tag' => 'new']],
            ['label' => '  Administrar Horarios', 'url' => ['horario/index', 'tag' => 'new']],
            ['label' => '  Administrar Niveles MCER', 'url' => ['nivel/index']],
            ['label' => '  ________________________________', '' => [' ', ]],
        

            ['label' => '  Crear convocatorias', 'url' => ['/convocatorias/create', 'tag' => 'new']],
            ['label' => '  Crear Cursos', 'url' => ['curso/create', 'tag' => 'new']],
            ['label' => '  Crear Horarios', 'url' => ['horario/create', 'tag' => 'new']],
            ['label' => '  Crear Niveles MCER', 'url' => ['nivel/create']],
           

            
           
            //['label' => '  Mi perfil  ', 'url' => ['perfil/index', 'tag' => 'new']],

            ]


    ];


}

  if ( Yii::$app->user->can('sa') || Yii::$app->user->can('administrador') ){
        $menuItems[] = ['label' => 'Registros', 
            'items' => [

            ['label' => '  Administrar Perfiles  ', 'url' => ['perfil/index', 'tag' => 'new']],
            ['label' => '  Administrar Usuarios  ', 'url' => ['user/index', 'tag' => 'new']],
            ['label' => '  Administrar Calificaciones', 'url' => ['calificaciones/index', 'tag' => 'new']],
            ['label' => '  Alumnos Inscritos', 'url' => ['inscripcion/index', 'tag' => 'new']],

            ]


    ];


}

if ( Yii::$app->user->can('sa') || Yii::$app->user->can('administrador') ){
        $menuItems[] = ['label' => 'Crear avisos', 
            'items' => [
             ['label' => '  Crear Avisos  ', 'url' => ['avisos/create', 'tag' => 'new']],
             ['label' => '  Quejas o Sugerencias', 'url' => ['/contactanos/index']],

            ]


    ];



}


//MENU DE LOS ALUMNOS


 if ( Yii::$app->user->can('sa') || Yii::$app->user->can('alumno') ){
        $menuItems[] = ['label' => 'Curso de inglés', 
            'items' => [
            
            
           
            ['label' => '  Cursos Disponibles', 'url' => ['curso/index', 'tag' => 'new']],
            ['label' => '  Horarios de curso', 'url' => ['horario/index', 'tag' => 'new']],
            ['label' => '  Inscribirme a un curso', 'url' => ['inscripcion/create', 'tag' => 'new']], 
            ['label' => '  Mi perfil  ', 'url' => ['perfil/create', 'tag' => 'new']],
            ['label' => '  Niveles MCER', 'url' => ['nivel/index']],

            ]


    ];



}









if ( Yii::$app->user->can('sa') || Yii::$app->user->can('alumno') ){
        $menuItems[] = ['label' => 'Más Información', 
            'items' => [
           
            ['label' => ' Avisos y noticias', 'url' => ['/avisos/index']],
            ['label' => ' Contáctanos', 'url' => ['/contactanos/create']],
            
            ['label' => '  Convocatorias', 'url' => ['/convocatorias/index', 'tag' => 'new']],
            
            
            ]


    ];
}





//MENU DE LOS MAESTROS

if ( Yii::$app->user->can('sa') || Yii::$app->user->can('docente') ){
        $menuItems[] = ['label' => 'Docente', 
            'items' => [

            ['label' => '  Calificaciones  ', 'url' => ['calificaciones/index', 'tag' => 'new']],
            ['label' => '  Cursos', 'url' => ['curso/index', 'tag' => 'new']],
            ['label' => '  Horarios', 'url' => ['horario/index', 'tag' => 'new']],
            ['label' => '  Niveles MCER', 'url' => ['nivel/index']],


            ]


    ];



}


if ( Yii::$app->user->can('sa') || Yii::$app->user->can('docente') ){
        $menuItems[] = ['label' => 'Avisos', 
            'items' => [
           
           ['label' => ' Avisos y noticias', 'url' => ['/avisos/index']],
           ['label' => ' Contactanos', 'url' => ['/contactanos/create']], 

            ]


    ];
}





    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];

    }     
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0'],
        'items' => $menuItems,
    ]);
    if (Yii::$app->user->isGuest) {
        echo Html::tag('div',Html::a('Login',['/site/login'],['class' => ['btn btn-link login text-decoration-none']]),['class' => ['d-flex']]);
    } else {
        
        echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout text-decoration-none']
            )
            . Html::endForm();
    }
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>
<br>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
