<?php

/**
 * This is the model class for table "customers".
 *
 * The followings are the available columns in table 'customers':
 * @property string $id
 * @property string $firstName
 * @property string $lastName
 * @property string $address
 * @property string $phoneNumber
 *
 * The followings are the available model relations:
 * @property PurchasesHistory[] $purchasesHistories
 */
class Customer extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Customer the static model class
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
		return 'customers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('firstName, lastName, address, phoneNumber', 'required'),
			array('firstName, lastName', 'length', 'max'=>45),
			array('phoneNumber', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, firstName, lastName, address, phoneNumber', 'safe', 'on'=>'search'),
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
			'purchasesHistories' => array(self::HAS_MANY, 'PurchasesHistory', 'customerId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'firstName' => 'First Name',
			'lastName' => 'Last Name',
			'address' => 'Address',
			'phoneNumber' => 'Phone Number',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('firstName',$this->firstName,true);
		$criteria->compare('lastName',$this->lastName,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phoneNumber',$this->phoneNumber,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}