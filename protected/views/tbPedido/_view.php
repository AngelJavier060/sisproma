<?php
/** @var TbPedidoController $this */
/** @var TbPedido $data */
?>
<div class="view">
                    
        <?php if (!empty($data->idProduccion->Producto)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('id_Produccion')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->idProduccion->Producto); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->idCliente->Nombre_Comercial)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('id_Cliente')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->idCliente->Nombre_Comercial); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Cantidad)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Cantidad')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Cantidad); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php /* if (!empty($data->Fecha_pedido)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_pedido')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->Fecha_pedido, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->Fecha_pedido)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Fecha_entrega)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_entrega')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->Fecha_entrega, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->Fecha_entrega)); ?>
                            </div>
        </div>

        <?php endif; */ ?>
                
        <?php if (!empty($data->Valor_Total)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Valor_Total')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Valor_Total); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Estado)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Estado')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Estado); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>