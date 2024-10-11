<?php

Yii::import('application.models._base.BaseTbBalance');

class TbBalance extends BaseTbBalance
{
    /**
     * @return TbBalance
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Balance|Balances', $n);
    }

}