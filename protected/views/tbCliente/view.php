<?php
/** @var TbClienteController $this */
/** @var TbCliente $model */
$this->breadcrumbs=array(
	'Tb Clientes'=>array('index'),
	$model->id_cliente,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TbCliente::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TbCliente::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id_cliente)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_cliente), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . TbCliente::label(); ?> <?php echo CHtml::encode($model) ?></legend>

    
     <table class="table table-striped table-bordered">    
     <thead>
         <tr>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Nombre_Comercial')); ?>
            </th>
             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Cliente')); ?>
            </th>
             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Telefono')); ?>
            </th>
             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Provincia')); ?>
            </th>
             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Ciudad')); ?>
            </th>
             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Direccion')); ?>
            </th>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('email')); ?>
            </th>
               
         </tr>
     </thead>
                <tbody>
                    <tr>
                            <td>      
                                    <?php echo CHtml::encode($model->Nombre_Comercial); ?>
                            </td>
                              <td>      
                                    <?php echo CHtml::encode($model->Cliente); ?>
                            </td>
                              <td>      
                                    <?php echo CHtml::encode($model->Telefono); ?>
                            </td>
                              <td>      
                                    <?php echo CHtml::encode($model->Provincia); ?>
                            </td>
                              <td>      
                                    <?php echo CHtml::encode($model->Ciudad); ?>
                            </td>
                              <td>      
                                    <?php echo CHtml::encode($model->Dirección); ?>
                            </td>
                             <td>      
                                    <?php echo CHtml::encode($model->email); ?>
                            </td>
                    </tr>
                </tbody>
</table>
    
    
    
<?php 
/*$this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id_cliente',
        'Nombre_Comercial',
        'Cliente',
        'Telefono',
        'Provincia',
        'Ciudad',
        'Direccion',
           // 'email'
        array(
                'name'=>'email',
                'type'=>'email'
            ),
	),
)); 
 * 
 */


?>
</fieldset>