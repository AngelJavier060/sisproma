<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

        <!-- AGREGAR PARA USAR BOOTSTRAP -->
 <?php
        echo Yii::app()->bootstrap->registerAllCss();
        echo Yii::app()->bootstrap->registerCoreScripts();
        ?>
        <!-- FIN PARA AGREGAR PARA USAR BOOTSTRAP -->
        
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
          <link rel="shortcut icon" href="/sispromaV0/images/pagina/icono.ico"> </link>
</head>

<body>

<!--    <div class="navbar navbar-inverse navbar-fixed-top">    INMOVILIZA EL TOP-->
  <div class="navbar navbar-inverse navbar-fixed-top"> 
                    <div class="navbar-inner">
<!--                         <div class="banner" align='center'>
                     <img src="/sispromaV0/images/pagina/banner3.png" width="70%"></img>                    
                </div>-->
                       
                
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toogle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    <a class="brand" href="<?php echo Yii::app()->homeUrl; ?>">
                        <?php echo CHtml::encode(Yii::app()->name); ?>  
                    </a>
                    <?php
                    //PARA ACCESO PÚBLICO                     
                    //PARA RSTRINGIR  EL ACCESO SOLO A LOS ADMINISTRADORES
                    if (!Yii::app()->user->isGuest && Usuario::model()->findByPk(Yii::app()->user->id)->esAdministrador()) {
                           $this->widget('bootstrap.widgets.TbButtonGroup', array(
                                    'type'=>'info', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
                                   //  'icon'=>'book',        
                                    'size'=>'50px', 
                                    'buttons'=>array(
                                        array('label'=>'Ingresar', 'items'=>array(
                                           array('label' => 'Maquinaria o Equipo', 'icon' => 'cog', 'url' => array('/tbMaquinariaEquipo/create')),                                  
                                           array('label' => 'Personal que labora en la empresa', 'icon' => 'check', 'url' => array('/tbPersonal/create')),     
                                             array('label' => 'Servicio Básico', 'icon' => 'check', 'url' => array('/tbSBasico/create')),     
                                             array('label' => 'Gastos', 'icon' => 'random', 'url' => array('/tbGastos/create')),     
                                              //array('label' => 'Balance de producción', 'icon' => 'tag', 'url' => array('/tbBalance/create')),
                                              array('label' => 'Consumo de Energia por B. de producción', 'icon' => 'fire', 'url' => array('/tbConsumoEnergia/create')),     
                                              array('label' => 'Materia prima e insumos por B. de producción', 'icon' => 'tint', 'url' => array('/tbMateriaPrima/create')),     
                                             array('label' => 'Producción por B. de producción', 'icon' => 'barcode', 'url' => array('/tbProduccion/create')),     
                                            '',
                                              array('label' => 'Cliente', 'icon' => 'user', 'url' => array('/tbCliente/create')),     
                                              array('label' => 'Pedido', 'icon' => 'barcode', 'url' => array('/tbPedido/create')), 
                                            '',
                                            array('label' => 'Plan Maestro de producción', 'icon' => 'barcode', 'url' => array('/tbPMPSemanal/create')), 
                                            
                                            '---',
                                           array('label' => 'Usuario', 'icon' => 'user', 'url' => array('/usuario/create')),
                                             ))
                                        )
                                  )); 
                           
                           $this->widget('bootstrap.widgets.TbButtonGroup', array(
                                    'type'=>'info', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
                                   //  'icon'=>'book',        
                                    'size'=>'50px', 
                                    'buttons'=>array(
                                        array('label'=>'Buscar', 'items'=>array(
                                           array('label' => 'Maquinaria o Equipo', 'icon' => 'cog', 'url' => array('/tbMaquinariaEquipo/admin')),                                  
                                           array('label' => 'Personal que labora en la empresa', 'icon' => 'check', 'url' => array('/tbPersonal/admin')),     
                                            array('label' => 'Servicio Básico', 'icon' => 'check', 'url' => array('/tbSBasico/admin')),  
                                             array('label' => 'Gastos', 'icon' => 'random', 'url' => array('/tbGastos/admin')),     
                                              //array('label' => 'Balance de producción', 'icon' => 'tag', 'url' => array('/tbBalance/admin')),
                                              array('label' => 'Consumo de Energia por B. de producción', 'icon' => 'fire', 'url' => array('/tbConsumoEnergia/admin')),     
                                              array('label' => 'Materia prima e insumos por B. de producción', 'icon' => 'tint', 'url' => array('/tbMateriaPrima/admin')),     
                                             array('label' => 'Producción por B. de producción', 'icon' => 'barcode', 'url' => array('/tbProduccion/admin')),     
                                            '',
                                              array('label' => 'Cliente', 'icon' => 'user', 'url' => array('/tbCliente/admin')),     
                                              array('label' => 'Pedido', 'icon' => 'barcode', 'url' => array('/tbPedido/admin')), 
                                            '',
                                            array('label' => 'Plan Maestro de producción', 'icon' => 'barcode', 'url' => array('/tbPMPSemanal/admin')), 
                                            
                                            '---',
                                           array('label' => 'Usuario', 'icon' => 'user', 'url' => array('/usuario/admin')),
                                             ))
                                        )
                                  )); 
                           
//                              $this->widget('bootstrap.widgets.TbButtonGroup', array(
//                                    'type'=>'info', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
//                                   //  'icon'=>'book',        
//                                    'size'=>'50px', 
//                                    'buttons'=>array(
//                                        array('label'=>'Ver', 'items'=>array(
//                                           array('label' => 'Maquinarias o Equipos', 'icon' => 'cog', 'url' => array('/tbMaquinariaEquipo/index')),                                  
//                                             array('label' => 'Personal', 'icon' => 'cog', 'url' => array('/tbPersonal/index')),                                  
//                                                ),
//                                            ))));
                           
                              $this->widget('bootstrap.widgets.TbButtonGroup', array(
                                    'type'=>'info', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
                                   //  'icon'=>'book',        
                                    'size'=>'50px', 
                                    'buttons'=>array(
                                      //  array('label'=>'Modificar', 'items'=>array(
                                                array('label' => 'Balance de producción', 'icon' => 'tag', 'url' => array('/tbBalance/view', 'id' => 1))
                                            
                                          //  array('label'=>'...', 'icon' => 'user', 'url'=>'#'), 
                                   //      )
                                  ),
                                    ));
                                $this->widget('bootstrap.widgets.TbButtonGroup', array(
                                    'type'=>'success', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
                                   //  'icon'=>'book',        
                                    'size'=>'50px', 
                                    'buttons'=>array(
                                      //  array('label'=>'Modificar', 'items'=>array(
                                               // array('label' => 'Salir', 'icon' => 'tag', 'url' => array('/tbBalance/view', 'id' => 1))
                                                array('label' => 'Salir (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                                            
                                          //  array('label'=>'...', 'icon' => 'user', 'url'=>'#'), 
                                   //      )
                                  ),
                                    ));
                                   
                    } else {
                        $this->widget('bootstrap.widgets.TbMenu', array(
                            'type' => '',
                            'items' => array(
                                array('label' => 'Inicio', 'url' => array('/')),
                               // array('label' => ':::', 'url' => '#'),
                                array('label' => 'Contactenos', 'url' => array('/site/contact')),
                               // array('label' => ':::', 'url' => '#'),
                                array('label' => 'Acerca de', 'url' => array('/site/page', 'view' => 'about')),
                               // array('label' => ':::', 'url' => '#'),
                                array('label' => 'Autenticar', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                                array('label' => 'Salir (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                            ),
                        ));
                    } //Fin de la condición si es administrador
                    ?>
                    
            </div>
        </div>
 </div><!-- mainmenu -->
 
        <div class="container">
            <div class="page-header">
                <br/><br/>
                    <?php if (isset($this->breadcrumbs)): ?>
                        <?php
                        $this->widget('zii.widgets.CBreadcrumbs', array(
                            'links' => $this->breadcrumbs,
                        ));
                        ?><!-- breadcrumbs -->                
<?php endif ?>
            </div>
           
            <div class="container fondoAdmin"> 
                <?php echo $content; ?>
            </div>
             <!--Despues del contentido-->
                         <!--BOTONES ANTERIOR Y SIGUIENTE-->
                            <ul class="pager in">
                            <li class="previous">
                            <a href="javascript:history.back()">&larr; Anterior</a>
                            </li>
                            <li class="next">
                            <a href="javascript:history.forward()">Siguiente &rarr;</a>
                            </li>
                            </ul>
            <br></br>
            <br><br>
                    <div class="footer text-center">

                        Copyright &copy; <?php echo gmdate('Y');       ?> JT<br/>
                        Todos los derechos reservados.<br/>
                <?php echo "Diseñado por   "; ?><a href="http://201.218.45.187/presencesystem/"> "PRESENCE SYSTEM"</a>
                    </div><!-- footer -->
                    </div>
         
                    <!--</div> page -->
</body>
</html>
