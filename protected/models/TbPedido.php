<?php

Yii::import('application.models._base.BaseTbPedido');

class TbPedido extends BaseTbPedido
{
    /**
     * @return TbPedido
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Pedido|Pedidos', $n);
    }

}