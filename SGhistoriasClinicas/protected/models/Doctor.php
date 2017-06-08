<?php

/**
 * This is the model class for table "doctor".
 *
 * The followings are the available columns in table 'doctor':
 * @property string $nombre
 * @property integer $id_doctor
 * @property string $direccion
 * @property integer $telefono
 * @property integer $nit
 * @property string $sexo
 *
 * The followings are the available model relations:
 * @property Paciente[] $pacientes
 * @property Seguimiento[] $seguimientos
 */
class Doctor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Doctor the static model class
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
		return 'doctor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, id_doctor, direccion, telefono, nit, sexo', 'required'),
			array('id_doctor, telefono, nit', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>50),
			array('direccion', 'length', 'max'=>100),
			array('sexo', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nombre, id_doctor, direccion, telefono, nit, sexo', 'safe', 'on'=>'search'),
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
			'pacientes' => array(self::HAS_MANY, 'Paciente', 'id_doctor'),
			'seguimientos' => array(self::HAS_MANY, 'Seguimiento', 'id_doctor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nombre' => 'Nombre',
			'id_doctor' => 'Id Doctor',
			'direccion' => 'Direccion',
			'telefono' => 'Telefono',
			'nit' => 'Nit',
			'sexo' => 'Sexo',
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

		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('id_doctor',$this->id_doctor);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('nit',$this->nit);
		$criteria->compare('sexo',$this->sexo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}