<?php
/** @var TbProduccionController $this */
/** @var TbProduccion $model */
$this->breadcrumbs=array(
	'Tb Produccions'=>array('index'),
	$model->id_Produccion,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TbProduccion::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TbProduccion::label(), 'icon' => 'plus', 'url' => array('create')),
    	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id_Produccion)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_Produccion), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>
<br><br><br><br>
<br><br>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . TbProduccion::label(); ?> <?php echo CHtml::encode($model) ?></legend>
<br><br>
<br><br>

    
     <table class="table table-striped table-bordered">    
     <thead>
         <tr>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Producto')); ?>
            </th>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Porcentaje')); ?>
            </th>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Kg')); ?>
            </th>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('gr_funda')); ?>
            </th>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Unidades_dia')); ?>
            </th>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Valor_unitario')); ?>
            </th>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Valor_Total_dia')); ?>
            </th>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Unidades_mes')); ?>
            </th>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Valor_Total_mes')); ?>
            </th>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Unidades_anio')); ?>
            </th>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Valor_Total_anio')); ?>
            </th>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Stock')); ?>
            </th>
               
         </tr>
     </thead>
                <tbody>
                    <tr>
                            <td>      
                                    <?php echo CHtml::encode($model->Producto); ?>
                            </td>
             <td>      
                                    <?php echo CHtml::encode($model->Porcentaje); ?>
                            </td>
             <td>      
                                    <?php echo CHtml::encode($model->Kg); ?>
                            </td>
             <td>      
                                    <?php echo CHtml::encode($model->gr_funda); ?>
                            </td>
             <td>      
                                    <?php echo CHtml::encode($model->Unidades_dia); ?>
                            </td>
             <td>      
                                    <?php echo CHtml::encode($model->Valor_unitario); ?>
                            </td>
             <td>      
                                    <?php echo CHtml::encode($model->Valor_Total_dia); ?>
                            </td>
             <td>      
                                    <?php echo CHtml::encode($model->Unidades_mes); ?>
                            </td>
             <td>      
                                    <?php echo CHtml::encode($model->Valor_Total_mes); ?>
                            </td>
             <td>      
                                    <?php echo CHtml::encode($model->Unidades_anio); ?>
                            </td>
             <td>      
                                    <?php echo CHtml::encode($model->Valor_Total_anio); ?>
                            </td>
             <td>      
                                    <?php echo CHtml::encode($model->Stock); ?>
                            </td>
                    </tr>
                </tbody>
</table>
    
<?php 
/*$this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id_Produccion',
        array(
			'name'=>'id_Balance',
			'value'=>($model->idBalance !== null) ? CHtml::link($model->idBalance, array('/tbBalance/view', 'id_Balance' => $model->idBalance->id_Balance)).' ' : null,
			'type'=>'html',
		),
        'Producto',
        'Porcentaje',
        'Kg',
        'gr_funda',
        'Unidades_dia',
        'Valor_unitario',
        'Valor_Total_dia',
        'Unidades_mes',
        'Valor_Total_mes',
        'Unidades_anio',
        'Valor_Total_anio',
           'Stock',
	),
)); 
 * 
 */
?>
</fieldset>