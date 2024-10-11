<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
..
<center>
<?php
    $this->widget(
    'bootstrap.widgets.TbCarousel',
    array( 
    'items' => array(
    array(
    'image' => 'images/carousel/m.jpg',
    'label' => 'Cultivo de malanga', 
    'caption' => 'Desde hace cuatro años se cultiva este tubérculo en el país y se exporta a países de Europa y Asia. 
Los cultivos se dan en toda época del año en la Amazonia, y se lo va intercalado con café, cacao, cítricos o plátano, es decir, se aprovecha el terreno cultivando malanga durante el ciclo hasta que estén listos los otros productos.
La madurez se produce entre los  9-12 meses, pero la recolección puede hacerse en forma paulatina, de acuerdo a las exigencias del mercado. 
 Es conveniente dejar al sol por uno o dos días los cormos recién cosechados para facilitar la limpieza de la tierra que pueden llevar adheridos. '
    ),
    array(
    'image' => 'images/carousel/malanga_p.jpg',
    'label' => 'Variedades   ',
    'caption' => 'En Ecuador, existen dos variedades de malanga disponibles que cuentan con características exportables:  Blanca (Xanthosoma), originaria de las Antillas; y Amarilla o Lila (Colacasia), originaria de Asia.  De ambas, la variedad más apetecida en el mercado exterior es la Xanthosoma, la diferencia de consumo de esta variedad es de alrededor de cinco a uno.'
    ),
         array( 
    'image' => 'images/carousel/chifles.jpg',
    'label' => 'Chifles de Malanga',
    'caption' => 'Una variedad de chifles, elaborados a partir de malanga.'
    ),
            array( 
    'image' => 'images/carousel/ch.jpg',
    'label' => 'Chifles de Malanga',
    'caption' => 'Una variedad de chifles, elaborados a partir de malanga.'
    ),
//    array(
//    'image' => 'http://201.218.45.187/sispromaV0/images/carousel/malanga.jpg',  
//    'label' => 'Third Thumbnail label',
//    'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
//    ),
    ),
    )
    );
    ?>
</center>
  <img  src="images/pagina/portada.jpg" width="100%"> 
<!--  <img  src="/sispromaV0/images/pagina/12.jpg" width="160px">  -->
  