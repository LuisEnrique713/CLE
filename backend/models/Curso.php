<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "curso".
 *
 * @property int $id
 * @property string $Nombre_Del_Curso
 * @property string $Docente
 * @property string $Numero_De_Dias
 * @property int $Cupo
 * @property string $Fecha_De_Inicio
 * @property string $Fecha_De_Cierre
 * @property string $Modalidad
 * @property float $Precio_Del_Curso
 *
 * @property Calificaciones[] $calificaciones
 * @property Horario[] $horarios
 * @property Inscripcion[] $inscripcions
 * @property Perfil[] $perfils
 */
class Curso extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'curso';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nombre_Del_Curso', 'Docente', 'Numero_De_Dias', 'Cupo', 'Fecha_De_Inicio', 'Fecha_De_Cierre', 'Modalidad', 'Precio_Del_Curso'], 'required'],
            [['Cupo'], 'integer'],
            [['Fecha_De_Inicio', 'Fecha_De_Cierre'], 'safe'],
            [['Precio_Del_Curso'], 'number'],
            [['Nombre_Del_Curso', 'Docente', 'Numero_De_Dias', 'Modalidad'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'Nombre_Del_Curso' => Yii::t('app', 'Nombre Del Curso'),
            'Docente' => Yii::t('app', 'Docente'),
            'Numero_De_Dias' => Yii::t('app', 'Numero De Dias'),
            'Cupo' => Yii::t('app', 'Cupo'),
            'Fecha_De_Inicio' => Yii::t('app', 'Fecha De Inicio'),
            'Fecha_De_Cierre' => Yii::t('app', 'Fecha De Cierre'),
            'Modalidad' => Yii::t('app', 'Modalidad'),
            'Precio_Del_Curso' => Yii::t('app', 'Precio Del Curso'),
        ];
    }

    /**
     * Gets query for [[Calificaciones]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCalificaciones()
    {
        return $this->hasMany(Calificaciones::class, ['curso_id' => 'id']);
    }

    /**
     * Gets query for [[Horarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHorarios()
    {
        return $this->hasMany(Horario::class, ['curso_id' => 'id']);
    }

    /**
     * Gets query for [[Inscripcions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInscripcions()
    {
        return $this->hasMany(Inscripcion::class, ['curso_id' => 'id']);
    }

    /**
     * Gets query for [[Perfils]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerfil()
    {
        return $this->hasMany(Perfil::class, ['curso_id' => 'id']);
    }


    public function getIdPerfil()
    {
        return $this->hasOne(Perfil::className(), ['perfil_id' => 'perfil_id']);
    }

}
