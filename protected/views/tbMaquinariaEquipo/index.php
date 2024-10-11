<?php
/** @var TbMaquinariaEquipoController $this */
/** @var TbMaquinariaEquipo $model */
$this->breadcrumbs = array(
    'Tb Maquinaria Equipos',
);

$this->menu = array(
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TbMaquinariaEquipo::label(), 'icon' => 'plus', 'url' => array('create')),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>
<?php
//Creado para almacenar la suma, y se borrara al final

Yii::app()->getSession()->add('Suma_TbMaquinariaEquipo', 0);
?>

<div class="view">
    <fieldset>
        
              <legend>
                <?php echo Yii::t('AweCrud.app', 'List') ?> <?php echo TbMaquinariaEquipo::label(2) ?>    </legend>
        <div class="table-responsive">
      <table class="table table-striped table-bordered">
            <thead>
                <tr>                    
                    <th>Maquinaria/Equipo</th>
                    <th>Cantidad</th> 
                    <th>Precio Unit.</th>
                    <th>Total.</th>                    
                </tr>
            </thead> 
            <tbody>
                <tr>
                    <td colspan="4">
                    <?php

                    $this->widget('bootstrap.widgets.TbListView', array(                         
                        'dataProvider' => $dataProvider,
                       //  'template' => "{summary}\n{pager}\n{items}\n{summary}\n{pager}",
                         'summaryText'=>false, //make it for hide summary text
                        'itemView' => '_view',
                       
                    ));
                    ?>
                        </td>
                </tr>
                <tr>
                    <td  colspan="3" style="width:430px">
                        <b> TOTAL </b>
                    </td>
                    <td style="width:120px">  
                           <?php
                            //borrar 
                            echo  Yii::app()->getSession()->get('Suma_TbMaquinariaEquipo');
                            Yii::app()->getSession()->remove('Suma_TbMaquinariaEquipo');
                            ?>
                    </td>
                </tr>
            </tbody>
        </table>
     </div>
    </fieldset> 
</div>
