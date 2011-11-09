<?php

/**
 * This is the model class for table "books".
 *
 * The followings are the available columns in table 'books':
 * @property string $id
 * @property string $title
 * @property string $authorId
 * @property string $publisherId
 * @property string $year
 * @property string $genraId
 * @property string $description
 * @property string $conditionId
 * @property integer $quantity
 * @property integer $price
 *
 * The followings are the available model relations:
 * @property Authors $author
 * @property Publishers $publisher
 * @property Conditions $condition
 * @property PurchasesHistory[] $purchasesHistories
 */
class Book extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Book the static model class
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
		return 'books';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, title, authorId, publisherId, year, conditionId', 'required'),
			array('quantity, price', 'numerical', 'integerOnly'=>true),
			array('id', 'length', 'max'=>13),
			array('title', 'length', 'max'=>150),
			array('authorId, publisherId', 'length', 'max'=>10),
			array('year', 'length', 'max'=>4),
			array('genraId, conditionId', 'length', 'max'=>5),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, authorId, publisherId, year, genraId, description, conditionId, quantity, price', 'safe', 'on'=>'search'),
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
			'author' => array(self::BELONGS_TO, 'Authors', 'authorId'),
			'publisher' => array(self::BELONGS_TO, 'Publishers', 'publisherId'),
			'condition' => array(self::BELONGS_TO, 'Conditions', 'conditionId'),
			'purchasesHistories' => array(self::HAS_MANY, 'PurchasesHistory', 'bookId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'authorId' => 'Author',
			'publisherId' => 'Publisher',
			'year' => 'Year',
			'genraId' => 'Genra',
			'description' => 'Description',
			'conditionId' => 'Condition',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('authorId',$this->authorId,true);
		$criteria->compare('publisherId',$this->publisherId,true);
		$criteria->compare('year',$this->year,true);
		$criteria->compare('genraId',$this->genraId,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('conditionId',$this->conditionId,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('price',$this->price);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}