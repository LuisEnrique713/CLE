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

    <img src="https://drive.google.com/file/d/1jrws7jeyAb2e6yKMMrjrXbs7TSeJOBFV/view?usp=share_link" style= "width:100px; height:100px;"/img>
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


<div class="item-class"><img src="https://drive.google.com/file/d/1nDBRGc7LrXlEECv3-OW0Rqdodh_nnBHP/view?usp=share_link" alt="Image 1" style= "width:400px; height:300px;"></div>
<div class="item-class"><img src="https://drive.google.com/file/d/1X9jEymHPzybc2HdNnfgaXGvim8CAf9JX/view?usp=share_link " alt="Image 2" style= "width:400px; height:300px;"></div>
<div class="item-class"><img src="https://drive.google.com/file/d/101MWRSjfsQw-P-dW6MljqWLDtK5jFckY/view?usp=share_link " alt="Image 3" style= "width:400px; height:300px;"></div>
<div class="item-class"><img src="https://drive.google.com/file/d/19to34CpHa2sr8V3oNsfi6QFggo371fk6/view?usp=share_link " alt="Image 4" style= "width:400px; height:300px"></div>
<div class="item-class"><img src="https://drive.google.com/file/d/16cuexxEcbMxxSPaR95-5jlmkXnAPhsgZ/view?usp=share_link " alt="Image 5" style= "width:400px; height:300px;"></div>
<div class="item-class"><img src="https://drive.google.com/file/d/1A7DcFBZ38857EzXkDZOYCQA0rr_BMcIR/view?usp=share_link " alt="Image 6" style= "width:400px; height:300px;"></div>

<?php OwlCarouselWidget::end(); ?>





