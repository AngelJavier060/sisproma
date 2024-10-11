<?php

Yii::import('application.models._base.BaseTbCliente');

class TbCliente extends BaseTbCliente
{
    /**
     * @return TbCliente
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Cliente|Clientes', $n);
    }

}