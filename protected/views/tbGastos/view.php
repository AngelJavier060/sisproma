<?php
/** @var TbGastosController $this */
/** @var TbGastos $model */
$this->breadcrumbs=array(
	'Tb Gastoses'=>array('index'),
	$model->id_Gastos,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TbGastos::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TbGastos::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id_Gastos)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_Gastos), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . TbGastos::label(); ?> <?php echo CHtml::encode($model) ?></legend>
<table class="table table-striped table-bordered">    
     <thead>
         <tr>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Cantidad_meses')); ?>
            </th>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Gasto')); ?>
            </th>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Al_mes')); ?>
            </th>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Total')); ?>
            </th>
               
         </tr>
     </thead>
                <tbody>
                    <tr>
                            <td>      
                                    <?php echo CHtml::encode($model->Cantidad_meses); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->Gasto); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->Al_mes); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->Total); ?>
                            </td>
                    </tr>
                </tbody>
</table>
<?php 
/*$this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id_Gastos',
        'Gasto',
        'Al_mes',
        'Cantidad_meses',
        'Total',
	),
)); 
 * 
 */

?>
</fieldset>