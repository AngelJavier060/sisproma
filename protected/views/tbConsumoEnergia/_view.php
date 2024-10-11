<?php
/** @var TbConsumoEnergiaController $this */
/** @var TbConsumoEnergia $data */
?>
<div class="view">
                    
        <?php if (!empty($data->idBalance->Producto)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('id_Balance')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->idBalance->Producto); ?>
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
                
        <?php if (!empty($data->Detalle)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Detalle')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Detalle); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Kv_por_Hora)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Kv_por_Hora')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Kv_por_Hora); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Total)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Total')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Total); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>