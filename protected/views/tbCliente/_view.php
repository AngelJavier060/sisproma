<?php
/** @var TbClienteController $this */
/** @var TbCliente $data */
?>
<div class="view">
                    
        <?php if (!empty($data->Nombre_Comercial)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Nombre_Comercial')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Nombre_Comercial); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Cliente)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Cliente')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Cliente); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Telefono)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Telefono); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Provincia)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Provincia')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Provincia); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Ciudad)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Ciudad')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Ciudad); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Dirección)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Dirección')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Dirección); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->email)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::mailto($data->email); ?>
                            </div>
        </div>

        <?php endif; ?>
    </div>