<?php

/**
 * This is the model class for table "historia".
 *
 * The followings are the available columns in table 'historia':
 * @property integer $nro_historia
 * @property string $fecha_creacion
 * @property string $observaciones
 *
 * The followings are the available model relations:
 * @property Odontograma[] $odontogramas
 * @property Paciente[] $pacientes
 */
class Historia extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Historia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'historia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nro_historia, fecha_creacion', 'required'),
			array('nro_historia', 'numerical', 'integerOnly'=>true),
			array('observaciones', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nro_historia, fecha_creacion, observaciones', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'odontogramas' => array(self::HAS_MANY, 'Odontograma', 'nro_historia'),
			'pacientes' => array(self::HAS_MANY, 'Paciente', 'nro_historia'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nro_historia' => 'Nro Historia',
			'fecha_creacion' => 'Fecha Creacion',
			'observaciones' => 'Observaciones',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('nro_historia',$this->nro_historia);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('observaciones',$this->observaciones,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}