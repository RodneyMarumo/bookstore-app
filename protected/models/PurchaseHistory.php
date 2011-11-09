<?php

/**
 * This is the model class for table "purchasesHistory".
 *
 * The followings are the available columns in table 'purchasesHistory':
 * @property string $id
 * @property string $customerId
 * @property string $bookId
 * @property string $sellerId
 * @property string $quantity
 * @property string $price
 *
 * The followings are the available model relations:
 * @property Books $book
 * @property Customers $customer
 * @property Employees $seller
 */
class PurchaseHistory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return PurchaseHistory the static model class
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
		return 'purchasesHistory';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customerId, bookId, sellerId, quantity, price', 'required'),
			array('customerId, sellerId, price', 'length', 'max'=>10),
			array('bookId', 'length', 'max'=>13),
			array('quantity', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, customerId, bookId, sellerId, quantity, price', 'safe', 'on'=>'search'),
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
			'book' => array(self::BELONGS_TO, 'Books', 'bookId'),
			'customer' => array(self::BELONGS_TO, 'Customers', 'customerId'),
			'seller' => array(self::BELONGS_TO, 'Employees', 'sellerId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'customerId' => 'Customer',
			'bookId' => 'Book',
			'sellerId' => 'Seller',
			'quantity' => 'Quantity',
			'price' => 'Price',
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
		$criteria->compare('customerId',$this->customerId,true);
		$criteria->compare('bookId',$this->bookId,true);
		$criteria->compare('sellerId',$this->sellerId,true);
		$criteria->compare('quantity',$this->quantity,true);
		$criteria->compare('price',$this->price,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}