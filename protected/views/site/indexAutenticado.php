<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

    
    <!--<h2>Bienvenido al sistema de administración: <br> <i><?php //echo CHtml::encode(Yii::app()->name);  ?></i></h2>-->
       <center> 
<!--           <h2>SISMEDANT</h2> -->
       </center>

        <h4>
            <center>           
            <!--<br><br>-->
         <!--<img src="/sismedant/images/virtual.jpg" width="20%"/>--> 
       
        <!--<br><br><br><br>-->
        <MARQUEE BGCOLOR="#000"><h2> <font color="#FFF"> Bienvenid@ <?php echo Yii::app()->getSession()->get('nombre_usuario');?> al menú de administración "SISMEDANT"</font></h2></MARQUEE>
        <div class='fondo2'>
           <br>   Un sistema web moderno e innovador para la recolección y estudio de las medidas básicas antropométicas.
        <br>
        <br><br><br><br><br>
        
<!--        <a href="/sismedant/index.php/site/login">
            
        <img dynsrc="/sismedant/images/pagina/Minutos.mid" Loop=1 controls start=mouseover src="/sismedant/images/pagina/Login1.png" onmouseover="this.src='/sismedant/images/pagina/Login2.png';" onmouseout="this.src='/sismedant/images/pagina/Login1.png';" width="250px"/>  
        </a> -->
        <a href="/sismedant/index.php/estudiante/create">
            
        <img src="/sismedant/images/pagina/Ficha.png" onmouseover="this.src='/sismedant/images/pagina/Ficha3.png';" onmouseout="this.src='/sismedant/images/pagina/Ficha.png';" width="300px"/>  
        </a>           
             <a href="/sismedant/index.php/resultado/create">
        <img src="/sismedant/images/pagina/Informe0.png" onmouseover="this.src='/sismedant/images/pagina/Informe1.png';" onmouseout="this.src='/sismedant/images/pagina/Informe0.png';" width="300px"/>
        </a>
<br>
<br>
<br>
<br>
<br>
<!--    <a href="#">
        <img src="/sismedant/images/pagina/cinmet.jpg" onmouseover="this.src='/sismedant/images/pagina/cinta_metrica.jpg';" onmouseout="this.src='/sismedant/images/pagina/cinmet.jpg';" width="200px"/>
        </a>-->
        
        
      <br><br><br>
        <br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><b> 
            <!--<img src="/sismedant/images/foto_estudiante.jpg" width="50%">  </b><br>-->
    </center>
    </h4>
</div>