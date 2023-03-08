<?php

/** @var yii\web\View $this */
use kv4nt\owlcarousel\OwlCarouselWidget;

$this->title = 'CLE';
?>
<div class="site-index">
      
  <center> 
<link rel="stylesheet" href="https://cdn.rawgit.com/zkreations/SheetSlider/master/dist/sheetslider.min.css"/>


</center>
 <!-- ==== FONDOS ==== -->  
<style>
body {
  background-image: url('https://static.wixstatic.com/media/a6f1e7_7dc1568d62734a679dbc27e7858f6006~mv2_d_5184_3456_s_4_2.jpg/v1/fill/w_1920,h_1280,al_c,q_90,usm_0.66_1.00_0.01/a6f1e7_7dc1568d62734a679dbc27e7858f6006~mv2_d_5184_3456_s_4_2.jpg');
}
</style> 
<center>

    <img src="https://i.pinimg.com/564x/6b/db/cb/6bdbcb16360f7694e0d60cce0494fc8f.jpg" style= "width:100px; height:100px;"/img>
    <div class="jumbotron">
        
        <p class="lead"> Instituto Tecnológico Superior De Valladolid</p>
        <h1>Coordinación de Lenguas Extranjeras</h1>
    </div>

</center>
</body>
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


<div class="item-class"><img src="https://i.pinimg.com/564x/3c/ef/2a/3cef2ab9874bd16bb69b9b512353f316.jpg" alt="Image 1" style= "width:400px; height:300px;"></div>
<div class="item-class"><img src="https://i.pinimg.com/564x/14/97/3f/14973f85b23c311d43dfaaacb5e817e5.jpg" alt="Image 2" style= "width:400px; height:300px;"></div>
<div class="item-class"><img src="https://i.pinimg.com/564x/d0/19/11/d019118f562ca13f8b38284e96dd5200.jpg" alt="Image 3" style= "width:400px; height:300px;"></div>
<div class="item-class"><img src="https://i.pinimg.com/564x/7c/9f/91/7c9f91d13cc66599dab6a472d86e8d33.jpg" alt="Image 4" style= "width:400px; height:300px"></div>
<div class="item-class"><img src="https://i.pinimg.com/564x/38/11/1a/38111aff616c90b464e4bd6dae009a18.jpg" alt="Image 5" style= "width:400px; height:300px;"></div>
<div class="item-class"><img src="https://i.pinimg.com/564x/92/ce/78/92ce7800af21b5efe7d0a89e3b6e5215.jpg " alt="Image 6" style= "width:400px; height:300px;"></div>
<?php OwlCarouselWidget::end(); ?>





