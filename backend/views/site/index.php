<?php
use kv4nt\owlcarousel\OwlCarouselWidget;
/** @var yii\web\View $this */

$this->title = 'CLE';
?>
<div class="site-index">

<center> 
<link rel="stylesheet" href="https://cdn.rawgit.com/zkreations/SheetSlider/master/dist/sheetslider.min.css"/>

<center> <link rel="stylesheet" href="https://cdn.rawgit.com/zkreations/SheetSlider/master/dist/sheetslider.min.css"/>
                <img src="https://sgi.valladolid.tecnm.mx/Imagenes/Escudo_ITSVA_registrado_copia.png" class="mx-auto d-block left-block" style= "width:100px; height:100px;"/img></center>

</center>

 <!-- ==== FONDO ==== -->  
<style>
body {
    
  background-image: url('https://static.wixstatic.com/media/a6f1e7_7dc1568d62734a679dbc27e7858f6006~mv2_d_5184_3456_s_4_2.jpg/v1/fill/w_1920,h_1280,al_c,q_90,usm_0.66_1.00_0.01/a6f1e7_7dc1568d62734a679dbc27e7858f6006~mv2_d_5184_3456_s_4_2.jpg');
}


</style> 



<center>
    <div class="jumbotron">
        <h1>Coordinación de Lenguas Extranjeras</h1>
        <p class="lead"> Instituto Tecnológico Superior De Valladolid</p>

    </div>
</center>



<br>

<?php


OwlCarouselWidget::begin([
    'container' => 'div',
    'containerOptions' => [
        'id' => 'container-id',
        'class' => 'container-class'
    ],
    'pluginOptions'    => [
        'autoplay'          => true,
        'autoplayTimeout'   => 4000,
        'items'             => 3,
        'loop'              => true,
        'itemsDesktop'      => [1199, 3],
        'itemsDesktopSmall' => [979, 3]
    ]
]);
?>


<div class="item-class"><img src="https://educacion30.b-cdn.net/wp-content/uploads/2021/11/english-british-england-language-education-concept-1-min-978x652.jpg" alt="Image 3" style= "width:400px; height:300px;"></div>
<div class="item-class"><img src="https://yucataninforma.org/wp-content/uploads/2021/08/240908061.jpg" alt="Image 2" style= "width:400px; height:300px;"></div>
<div class="item-class"><img src="https://colombianabroad.com/wp-content/uploads/aprender-ingles-online.jpg" alt="Image 4" style= "width:400px; height:300px;"></div>
<div class="item-class"><img src="https://www.elpuntosobrelai.com/wp-content/uploads/2021/01/140422706_1439605329578945_4663778482269476324_o.jpg" alt="Image 1" style= "width:400px; height:300px"></div>




<?php OwlCarouselWidget::end(); ?>


    

</div>
