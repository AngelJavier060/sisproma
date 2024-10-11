<?php
/** @var TbPersonalController $this */
/** @var TbPersonal $model */
$this->breadcrumbs = array( 
	'Tb Personals',
);

//$this->menu = array(
//    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TbPersonal::label(), 'icon' => 'plus', 'url' => array('create')),
//    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
//);
?>
<?php
//Creado para almacenar la suma, y se borrara al final

Yii::app()->getSession()->add('Suma_TbPersonal', 0);
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'List') ?> <?php echo TbPersonal::label(2) ?>    </legend>
<div class="table-responsive">
      <table class="table table-striped table-bordered"> 
            <thead>
                <tr>                    
                    <th style="width:300px">N° EMPLEADOS</th>
                    <th style="width:300px">CARGOS</th> 
                    <th style="width:300px">DIAS <br><br> LABORADOS</th>
                    <th style="width:300px">SUELDO <br><br> BÁSICO</th>                    
                    <th style="width:300px">SUELDO <br><br> NOMINAL</th> 
                    <th style="width:300px">H. <br> E.<br> 50%</th> 
                    <th style="width:300px">H. <br> E.<br> 100%</th> 
                    <th style="width:300px">T. <br> H.E.</th> 
                    <th style="width:300px">VALOR <br><br> H.E. </th> 
                    <th style="width:300px">PROV. <br><br> XIII</th> 
                    <th style="width:300px">PROV. <br><br> XIV</th> 
                    <th style="width:300px">F. DE <br><br> RESERVA</th> 
                    <th style="width:300px"><b>T. DE <br><br> INGRESOS</b></th> 
                    <th style="width:300px">A. <br><br> AL <br><br> IESS</th> 
                    <th style="width:300px"><B>T. DE <br><br> EGRESOS</B></th> 
                    <th style="width:300px">P. <br><br> TOTAL <br><br>  MENSUAL</th> 
                    <th style="width:300px">P. <br><br> ANUAL</th> 
                    
                </tr>
            </thead> 
            <tbody>
                <tr>
                    <td colspan="17">
                        <?php $this->widget('bootstrap.widgets.TbListView',array(
                                'dataProvider' => $dataProvider,
                                'itemView' => '_view',
                        )); ?>
                           </td>
                </tr>
                <tr>
                    <td  colspan="4" style="width:430px">
                        <b> TOTAL </b>
                    </td>
                    <td style="width:120px">  
                           <?php
                            //borrar 
                            echo  Yii::app()->getSession()->get('Suma_TbPersonal');
                            Yii::app()->getSession()->remove('Suma_TbPersonal');
                            ?>
                    </td>
                </tr>
            </tbody>
        </table>
     </div>
</fieldset>