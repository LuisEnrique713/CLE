<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "contactanos".
 *
 * @property int $id
 * @property string $Nombre
 * @property string $Correo
 * @property string $Quejas_o_Sugerencias
 */
class Contactanos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contactanos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nombre', 'Correo', 'Quejas_o_Sugerencias'], 'required'],
            [['Quejas_o_Sugerencias'], 'string'],
            [['Nombre', 'Correo'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'Nombre' => Yii::t('app', 'Nombre'),
            'Correo' => Yii::t('app', 'Correo'),
            'Quejas_o_Sugerencias' => Yii::t('app', 'Quejas O Sugerencias'),
        ];
    }
}
