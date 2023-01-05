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
<div class="item-class"><img src="https://scontent.fmex32-1.fna.fbcdn.net/v/t39.30808-6/319768994_1836976176662731_1759022053186632892_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGVU4Q5zGpyud5fr4089f4dXHqHOW_CLLJceoc5b8Issra9TOegdDNEHLKkmmdX0c-XbL-tTXxRnHNnOTx8OOdX&_nc_ohc=EtcpcWTE1gkAX-1couU&_nc_ht=scontent.fmex32-1.fna&oh=00_AfCxTc6p_FI9400zRA8QCMl7oEWw_PTCZhCmrvOzumR0Gg&oe=63BB9D6B" alt="Image 1" style= "width:400px; height:300px"></div>
<div class="item-class"><img src="https://scontent.fmex32-1.fna.fbcdn.net/v/t39.30808-6/310819362_115602877970005_8176352758588763202_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeEmbrUDuwLhFAM3zvztVmL6wFBOB73wv23AUE4HvfC_bYMt8Q2QAh2w6-axfDZ755XB5HHoCeW2fk_2tg82dgkK&_nc_ohc=TGgq1-v6GcsAX9SM7DZ&_nc_ht=scontent.fmex32-1.fna&oh=00_AfAyFu4jjI-XKXWQzd_3gINz5bjIZwLSWsp-7hxFqdq49Q&oe=63BBEF98" alt="Image 5" style= "width:400px; height:300px;"></div>
<div class="item-class"><img src="https://scontent.fmex32-1.fna.fbcdn.net/v/t39.30808-6/310059160_114963978033895_8662542642385807604_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeF8Ijvw4BjDWFT7W8WCED2ooUdH6iM2zP-hR0fqIzbM_w1Q0iqKeJIK_bgta2NDQzMnwvyccGidrHcQsu8VeaoE&_nc_ohc=zRuGm9pRuTgAX_sDJ9Z&_nc_ht=scontent.fmex32-1.fna&oh=00_AfCWK5H9-3LugwTj-_2gjOz9Pf5p07W9NKetzNUVsnna0g&oe=63BC6869" alt="Image 6" style= "width:400px; height:300px;"></div>



<?php OwlCarouselWidget::end(); ?>


    

</div>
