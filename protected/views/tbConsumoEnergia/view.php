<?php
/** @var TbConsumoEnergiaController $this */
/** @var TbConsumoEnergia $model */
$this->breadcrumbs=array(
	'Tb Consumo Energias'=>array('index'),
	$model->id_Consumo_Energia,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TbConsumoEnergia::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TbConsumoEnergia::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id_Consumo_Energia)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_Consumo_Energia), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . TbConsumoEnergia::label(); ?> <?php echo CHtml::encode($model) ?></legend>
    <b>  <?php // echo CHtml::encode($model->getAttributeLabel('id_Balance')); ?> </b>
    <?php echo CHtml::encode($model->idBalance->Producto); ?>
<table class="table table-striped table-bordered">    
     <thead>
         <tr>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Cantidad')); ?>
            </th>
                <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Detalle')); ?>
            </th>
             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Kv_por_Hora')); ?>
            </th>
             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Total')); ?>
            </th>
         </tr>
     </thead>
                <tbody>
                    <tr>
                            <td>      
                                    <?php echo CHtml::encode($model->Cantidad); ?>
                            </td>
                             <td>      
                                    <?php echo CHtml::encode($model->Detalle); ?>
                            </td>
                             <td>      
                                    <?php echo CHtml::encode($model->Kv_por_Hora); ?>
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
        'id_Consumo_Energia',
        array(
			'name'=>'id_Balance',
			'value'=>($model->idBalance !== null) ? CHtml::link($model->idBalance, array('/tbBalance/view', 'id_Balance' => $model->idBalance->id_Balance)).' ' : null,
			'type'=>'html',
		),
        'Cantidad',
        'Detalle',
        'Kv_por_Hora',
        'Total',
	),
)); 
 * 
 */
?>
</fieldset>