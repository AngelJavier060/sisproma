<?php

/**
 * This is the model base class for the table "tb_Pedido".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "TbPedido".
 *
 * Columns in table "tb_Pedido" available as properties of the model,
 * followed by relations of table "tb_Pedido" available as properties of the model.
 *
 * @property integer $id_Pedido
 * @property integer $id_Produccion
 * @property integer $id_Cliente
 * @property string $Cantidad
 * @property string $Fecha_pedido
 * @property string $Fecha_entrega
 * @property double $Valor_Total
 * @property string $Estado
 *
 * @property TbCliente $idCliente
 * @property TbProduccion $idProduccion
 */
abstract class BaseTbPedido extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'tb_Pedido';
    }

    public static function representingColumn() {
        return 'Cantidad';
    }

    public function rules() {
        return array(
            array('id_Produccion, id_Cliente, Cantidad, Fecha_pedido', 'required'),
            array('id_Produccion, id_Cliente', 'numerical', 'integerOnly'=>true),
            array('Valor_Total', 'numerical'),
            array('Cantidad, Estado', 'length', 'max'=>45),
            array('Fecha_entrega', 'safe'),
            array('Fecha_entrega, Valor_Total, Estado', 'default', 'setOnEmpty' => true, 'value' => null),
            array('id_Pedido, id_Produccion, id_Cliente, Cantidad, Fecha_pedido, Fecha_entrega, Valor_Total, Estado', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'idCliente' => array(self::BELONGS_TO, 'TbCliente', 'id_Cliente'),
            'idProduccion' => array(self::BELONGS_TO, 'TbProduccion', 'id_Produccion'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id_Pedido' => Yii::t('app', 'Id Pedido'),
                'id_Produccion' => Yii::t('app', 'Id Produccion'),
                'id_Cliente' => Yii::t('app', 'Id Cliente'),
                'Cantidad' => Yii::t('app', 'Cantidad'),
                'Fecha_pedido' => Yii::t('app', 'Fecha Pedido'),
                'Fecha_entrega' => Yii::t('app', 'Fecha Entrega'),
                'Valor_Total' => Yii::t('app', 'Valor Total'),
                'Estado' => Yii::t('app', 'Estado'),
                'idCliente' => null,
                'idProduccion' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id_Pedido', $this->id_Pedido);
        $criteria->compare('id_Produccion', $this->id_Produccion);
        $criteria->compare('id_Cliente', $this->id_Cliente);
        $criteria->compare('Cantidad', $this->Cantidad, true);
        $criteria->compare('Fecha_pedido', $this->Fecha_pedido, true);
        $criteria->compare('Fecha_entrega', $this->Fecha_entrega, true);
        $criteria->compare('Valor_Total', $this->Valor_Total);
        $criteria->compare('Estado', $this->Estado, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}