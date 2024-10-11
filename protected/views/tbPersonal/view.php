<?php
/** @var TbPersonalController $this */
/** @var TbPersonal $model */
$this->breadcrumbs=array(
	'Tb Personals'=>array('index'),
	$model->id_Personal,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TbPersonal::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TbPersonal::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id_Personal)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_Personal), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . TbPersonal::label(); ?> <?php echo CHtml::encode($model) ?></legend>

    <br><br><br><br><br><br><br><br>
    <table class="table table-striped table-bordered">    
     <thead>
         <tr>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Cargo')); ?>
                            </th>
                            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Numero_Empleados')); ?>
                            </th>
                            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Dias_laborados')); ?>
                            </th>
                            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Sueldo_Basico')); ?>
                            </th>
                              <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Sueldo_Nominal')); ?>
                            </th>
                              <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('HE_50')); ?>
                            </th>
                              <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('HE_100')); ?>
                            </th>
                              <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('HE_Total')); ?>
                            </th>
                              <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Valor_HE')); ?>
                            </th>
                              <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Provisiones_XIII')); ?>
                            </th>
                              <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Fondo_Reserva')); ?>
                            </th>
                              <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Total_Ingresos')); ?>
                            </th>
                         <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Aporte_IESS')); ?>
                            </th>
                             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Total_Egresos')); ?>
                            </th>
                             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Pago_Total_Mensual')); ?>
                            </th>
                             <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('Pago_Anual')); ?>
                            </th>

         </tr>
     </thead>
                <tbody>
                    <tr>
                            <td>      
                                    <?php echo CHtml::encode($model->Cargo); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->Numero_Empleados); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->Dias_laborados); ?>
                            </td>
                            <td>      
                                    <?php echo CHtml::encode($model->Sueldo_Basico); ?>
                            </td>
                              <td>      
                                    <?php echo CHtml::encode($model->Sueldo_Nominal); ?>
                            </td>
                              <td>      
                                    <?php echo CHtml::encode($model->HE_50); ?>
                            </td>
                              <td>      
                                    <?php echo CHtml::encode($model->HE_100); ?>
                            </td>
                              <td>      
                                    <?php echo CHtml::encode($model->HE_Total); ?>
                            </td>
                              <td>      
                                    <?php echo CHtml::encode($model->Valor_HE); ?>
                            </td>
                              <td>      
                                    <?php echo CHtml::encode($model->Provisiones_XIII); ?>
                            </td>
                              <td>      
                                    <?php echo CHtml::encode($model->Fondo_Reserva); ?>
                            </td>
                              <td>      
                                    <?php echo CHtml::encode($model->Total_Ingresos); ?>
                            </td>
                         <td>      
                                    <?php echo CHtml::encode($model->Aporte_IESS); ?>
                            </td>
                             <td>      
                                    <?php echo CHtml::encode($model->Total_Egresos); ?>
                            </td>
                             <td>      
                                    <?php echo CHtml::encode($model->Pago_Total_Mensual); ?>
                            </td>
                             <td>      
                                    <?php echo CHtml::encode($model->Pago_Anual); ?>
                            </td>
                            
                    </tr>
                </tbody>
        </table>
<?php 
/*$this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id_Personal',
        'Cargo',
        'Numero_Empleados',
        'Dias_laborados',
        'Sueldo_Basico',
        'Sueldo_Nominal',
        'HE_50',
        'HE_100',
        'HE_Total',
        'Valor_HE',
        'Provisiones_XIII',
        'Provisiones_XIV',
            'Fondo_Reserva',
        'Total_Ingresos',
        'Aporte_IESS',
        'Total_Egresos',
        'Pago_Total_Mensual',
        'Pago_Anual',
	),
)); 
 */ ?>
 
</fieldset>