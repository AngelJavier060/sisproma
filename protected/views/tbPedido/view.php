<?php
/** @var TbPedidoController $this */
/** @var TbPedido $model */
$this->breadcrumbs=array(
	'Tb Pedidos'=>array('index'),
	$model->id_Pedido,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TbPedido::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TbPedido::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id_Pedido)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_Pedido), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . TbPedido::label(); ?> <?php echo CHtml::encode($model) ?></legend>

    
    
     <table class="table table-striped table-bordered">    
     <thead>
         <tr>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('id_Produccion')); ?>
            </th>
             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('id_Cliente')); ?>
            </th>
             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Cantidad')); ?>
            </th>
             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Fecha_pedido')); ?>
            </th>
             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Fecha_entrega')); ?>
            </th>
             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Valor_Total')); ?>
            </th>
             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Estado')); ?>
            </th>
               
         </tr>
     </thead>
                <tbody>
                    <tr>
                            <td>      
                                    <?php echo CHtml::encode($model->idProduccion->Producto); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->idCliente->Cliente); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->Cantidad); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->Fecha_pedido); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->Fecha_entrega); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->Valor_Total); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->Estado); ?>
                            </td>
                    </tr>
                </tbody>
</table>
    
<?php 
/*$this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id_Pedido',
        array(
			'name'=>'id_Produccion',
			'value'=>($model->idProduccion !== null) ? CHtml::link($model->idProduccion, array('/tbProduccion/view', 'id_Produccion' => $model->idProduccion->id_Produccion)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'id_Cliente',
			'value'=>($model->idCliente !== null) ? CHtml::link($model->idCliente, array('/tbCliente/view', 'id_cliente' => $model->idCliente->id_cliente)).' ' : null,
			'type'=>'html',
		),
        'Cantidad',
        'Fecha_pedido',
        'Fecha_entrega',
        'Valor_Total',
        'Estado',
	),
)); 
 * 
 */
?>
</fieldset>