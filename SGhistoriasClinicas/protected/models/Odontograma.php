<?php

/**
 * This is the model class for table "odontograma".
 *
 * The followings are the available columns in table 'odontograma':
 * @property integer $nro_odontograma
 * @property integer $nro_piezaDental
 * @property integer $nrp_caraDental
 * @property integer $nro_historia
 * @property integer $id_afeccion
 * @property integer $nro_seguimiento
 *
 * The followings are the available model relations:
 * @property Afeccion $idAfeccion
 * @property Historia $nroHistoria
 * @property Seguimiento $nroSeguimiento
 */
class Odontograma extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Odontograma the static model class
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
		return 'odontograma';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nro_odontograma, nro_piezaDental, nrp_caraDental, nro_historia, id_afeccion, nro_seguimiento', 'required'),
			array('nro_odontograma, nro_piezaDental, nrp_caraDental, nro_historia, id_afeccion, nro_seguimiento', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nro_odontograma, nro_piezaDental, nrp_caraDental, nro_historia, id_afeccion, nro_seguimiento', 'safe', 'on'=>'search'),
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
			'idAfeccion' => array(self::BELONGS_TO, 'Afeccion', 'id_afeccion'),
			'nroHistoria' => array(self::BELONGS_TO, 'Historia', 'nro_historia'),
			'nroSeguimiento' => array(self::BELONGS_TO, 'Seguimiento', 'nro_seguimiento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nro_odontograma' => 'Nro Odontograma',
			'nro_piezaDental' => 'Nro Pieza Dental',
			'nrp_caraDental' => 'Nrp Cara Dental',
			'nro_historia' => 'Nro Historia',
			'id_afeccion' => 'Id Afeccion',
			'nro_seguimiento' => 'Nro Seguimiento',
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

		$criteria->compare('nro_odontograma',$this->nro_odontograma);
		$criteria->compare('nro_piezaDental',$this->nro_piezaDental);
		$criteria->compare('nrp_caraDental',$this->nrp_caraDental);
		$criteria->compare('nro_historia',$this->nro_historia);
		$criteria->compare('id_afeccion',$this->id_afeccion);
		$criteria->compare('nro_seguimiento',$this->nro_seguimiento);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}