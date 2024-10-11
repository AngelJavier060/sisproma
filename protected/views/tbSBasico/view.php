<?php
/** @var TbSBasicoController $this */
/** @var TbSBasico $model */
$this->breadcrumbs=array(
	'Tb Sbasicos'=>array('index'),
	$model->id_SBasico,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TbSBasico::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TbSBasico::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id_SBasico)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_SBasico), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . TbSBasico::label(); ?> <?php echo CHtml::encode($model) ?></legend>
 <table class="table table-striped table-bordered">    
     <thead>
         <tr>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('capacidad')); ?>
            </th>
             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Servicio_Basico')); ?>
            </th>
             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Descripcion')); ?>
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
                                    <?php echo CHtml::encode($model->Capacidad); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->Servicio_Basico); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->Descripcion); ?>
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
/*$this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id_SBasico',
        'Servicio_Basico',
        'Capacidad',
        'Precio',
        'Total',
        'Descripcion',
	),
    
)); 
 * 
 */
?>
    
</fieldset>