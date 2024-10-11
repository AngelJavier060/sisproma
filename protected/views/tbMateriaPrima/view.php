<?php
/** @var TbMateriaPrimaController $this */
/** @var TbMateriaPrima $model */
$this->breadcrumbs=array(
	'Tb Materia Primas'=>array('index'),
	$model->id_MateriaPrima,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TbMateriaPrima::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TbMateriaPrima::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id_MateriaPrima)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_MateriaPrima), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . TbMateriaPrima::label(); ?> <?php echo CHtml::encode($model) ?></legend>

    <table class="table table-striped table-bordered">    
     <thead>
         <tr>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Capacidad_mes')); ?>
            </th>
                <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Materia_Prima_e_Insumos')); ?>
            </th>
             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Precio')); ?>
            </th>
             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Total')); ?>
            </th>
         </tr>
     </thead>
                <tbody>
                    <tr>
                            <td>      
                                    <?php echo CHtml::encode($model->Capacidad_mes); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->Materia_Prima_e_Insumos); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->Precio); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->Total); ?>
                            </td>
                    </tr>
                </tbody>
</table>
    
<?php 
/* $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id_MateriaPrima',
        'id_Balance',
        'Materia_Prima_e_Insumos',
        'Capacidad_mes',
        'Precio',
        'Total',
	
  ),
 
));
 *  
 */ ?>
</fieldset>