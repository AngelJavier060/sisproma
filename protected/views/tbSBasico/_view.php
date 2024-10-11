<?php
/** @var TbSBasicoController $this */
/** @var TbSBasico $data */
?>
<div class="view">
                    
        <?php if (!empty($data->Servicio_Basico)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Servicio_Basico')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Servicio_Basico); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Capacidad)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Capacidad')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Capacidad); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Precio)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Precio')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Precio); ?>
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
                
        <?php if (!empty($data->Descripcion)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Descripcion); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>