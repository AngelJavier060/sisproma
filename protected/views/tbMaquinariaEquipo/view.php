<?php
/** @var TbMaquinariaEquipoController $this */
/** @var TbMaquinariaEquipo $model */
$this->breadcrumbs=array(
	'Tb Maquinaria Equipos'=>array('index'),
	$model->id_Maquinaria_Equipo,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TbMaquinariaEquipo::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TbMaquinariaEquipo::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id_Maquinaria_Equipo)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_Maquinaria_Equipo), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . TbMaquinariaEquipo::label(); ?> <?php echo CHtml::encode($model) ?></legend>
 
    <table class="table table-striped table-bordered">    
     <thead>
         <tr><th>
         Cantidad
            </th>
            <th>
         Maquinaria o Equipo
            </th>
            <th>
         Precio Unitario
            </th>
             <th>
         Total
            </th>
         </tr>
     </thead>
                <tbody>
                    <tr>
                            <td>      
                                    <?php echo CHtml::encode($model->Cantidad); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->Maquinaria_o_Equipo); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->Precio_Unitario); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->Total); ?>
                            </td>
                        
                    </tr>
                </tbody>
        </table>
<?php /* $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id_Maquinaria_Equipo',
        'Maquinaria_o_Equipo',
        'Cantidad',
        'Precio_Unitario',
        'Total',
	),
)); 
 */ ?>
 
</fieldset>