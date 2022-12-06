<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "horario".
 *
 * @property int $id
 * @property string $Dias_De_Clase
 * @property string $Hora_De_clase
 * @property int $curso_id
 *
 * @property Curso $curso
 */
class Horario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'horario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Dias_De_Clase', 'Hora_De_clase', 'curso_id'], 'required'],
            [['curso_id'], 'integer'],
            [['Dias_De_Clase', 'Hora_De_clase'], 'string', 'max' => 45],
            [['curso_id'], 'exist', 'skipOnError' => true, 'targetClass' => Curso::class, 'targetAttribute' => ['curso_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'Dias_De_Clase' => Yii::t('app', 'Dias De Clase'),
            'Hora_De_clase' => Yii::t('app', 'Hora De Clase'),
            'curso_id' => Yii::t('app', 'Curso ID'),
        ];
    }

    /**
     * Gets query for [[Curso]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurso()
    {
        return $this->hasOne(Curso::class, ['id' => 'curso_id']);
    }
}
