<?php
/** @var TbGastosController $this */
/** @var TbGastos $data */
?>
<div class="view">
                    
        <?php if (!empty($data->Gasto)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Gasto')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Gasto); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Al_mes)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Al_mes')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Al_mes); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Cantidad_meses)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Cantidad_meses')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Cantidad_meses); ?>
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