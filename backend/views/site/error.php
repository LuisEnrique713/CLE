<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception $exception*/


use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $name;
?>
<div class="site-error">
<Center>
    <h2><u>ERROR ACCESO DENEGADO!</u></h2>

<style>
body {
  background-image: url('https://static.wixstatic.com/media/a6f1e7_7dc1568d62734a679dbc27e7858f6006~mv2_d_5184_3456_s_4_2.jpg/v1/fill/w_1920,h_1280,al_c,q_90,usm_0.66_1.00_0.01/a6f1e7_7dc1568d62734a679dbc27e7858f6006~mv2_d_5184_3456_s_4_2.jpg');
}
</style> 


<br>
    <div class="alert alert-primary">
        <h5>
        El error anterior ocurrió mientras el servidor web procesaba su solicitud.
    </h5>
    <p>
        Póngase en contacto con nosotros si cree que se trata de un error del servidor. Gracias.
</p>
    </div>

    
    <img style="width:40%;" src=<?php echo Url::to('@web/imagenes/candado.jpg', true); ?> />
     </Center>   

</div>
