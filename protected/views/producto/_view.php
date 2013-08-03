<?php
/** @var ProductoController $this */
/** @var Producto $data */
?>
<div class="view">
                    
        <?php if (!empty($data->categoria->nombre)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('categoria_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->categoria->nombre); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->nombre)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->nombre); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->marca)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('marca')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->marca); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>