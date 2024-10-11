<?php
/** @var TbPMPSemanalController $this */
/** @var TbPMPSemanal $model */
$this->breadcrumbs=array(
	'Tb Pmpsemanals'=>array('index'),
	$model->id_PMPSemanal,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TbPMPSemanal::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TbPMPSemanal::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id_PMPSemanal)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_PMPSemanal), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>
<br><br><br><br>
<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . TbPMPSemanal::label(); ?> <?php echo CHtml::encode($model) ?></legend>

    <br><br><br><br><br><br>
    
     <table class="table table-striped table-bordered">    
     <thead>
         <tr>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('id_Produccion')); ?>
            </th>
             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Mes')); ?>
            </th>
             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('S1')); ?>
            </th>
             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('S2')); ?>
            </th>
             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('S3')); ?>
            </th>
             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('S4')); ?>
            </th>
             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Total_Produccion')); ?>
            </th>
             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Estandar_Produccion')); ?>
            </th>
             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Porcentaje')); ?>
            </th>
             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Produciendo_Planta')); ?>
            </th>
               
         </tr>
     </thead>
                <tbody>
                    <tr>
                            <td>      
                                    <?php echo CHtml::encode($model->idProduccion->Producto); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->Mes); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->S1); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->S2); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->S3); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->S4); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->Total_Produccion); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->Estandar_Produccion); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->Porcentaje); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->Produciendo_Planta); ?>
                            </td>
                    </tr>
                </tbody>
</table>
<?php
/* $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id_PMPSemanal',
        'id_Produccion',
        'Mes',
        'S1',
        'S2',
        'S3',
        'S4',
        'Total_Produccion',
        'Estandar_Produccion',
        'Porcentaje',
        'Produciendo_Planta',
	),
)); 
 * 
 */
?>
</fieldset>