<?php

/** @var yii\web\View $this */
use kv4nt\owlcarousel\OwlCarouselWidget;

$this->title = 'CLE';
?>
<div class="site-index">
      
  <center> 
<link rel="stylesheet" href="https://cdn.rawgit.com/zkreations/SheetSlider/master/dist/sheetslider.min.css"/>


</center>
 <!-- ==== FONDO ==== -->  
<style>
body {
  background-image: url('https://static.wixstatic.com/media/a6f1e7_7dc1568d62734a679dbc27e7858f6006~mv2_d_5184_3456_s_4_2.jpg/v1/fill/w_1920,h_1280,al_c,q_90,usm_0.66_1.00_0.01/a6f1e7_7dc1568d62734a679dbc27e7858f6006~mv2_d_5184_3456_s_4_2.jpg');
}
</style> 
<center>

    <img src="../imagenes/escudo.png" style= "width:100px; height:100px;"/img>
    <div class="jumbotron">
        
        <p class="lead"> Instituto Tecnológico Superior De Valladolid</p>
        <h1>Coordinación de Lenguas Extranjeras</h1>
    </div>

</center>
</body>

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


<div class="item-class"><img src="../imagenes/ing1.jpeg" alt="Image 3" style= "width:407px; height:300px;"></div>
<div class="item-class"><img src="../imagenes/rompecabeza.jpg" alt="Image 4" style= "width:407px; height:300px;"></div>
<div class="item-class"><img src="../imagenes/fondo.jpeg" alt="Image 1" style= "width:407px; height:300px"></div>
<div class="item-class"><img src="../imagenes/fondo2.jpg" alt="Image 2" style= "width:407px; height:300px;"></div>



<?php OwlCarouselWidget::end(); ?>





