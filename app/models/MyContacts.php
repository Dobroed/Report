<?php

/**
 * This is the model class for table "{{my_contacts}}".
 *
 * The followings are the available columns in table '{{my_contacts}}':
 * @property integer $contact_id
 * @property string $last_name
 * @property string $first_name
 * @property string $phone
 * @property string $email
 * @property string $gender
 * @property string $bithday
 * @property integer $prof_id
 * @property integer $zip_code
 * @property integer $status_id
 *
 * The followings are the available model relations:
 * @property Interests[] $tblInterests
 * @property Seeking[] $tblSeekings
 * @property Profession $prof
 * @property Status $status
 * @property ZipCode $zipCode
 */
class MyContacts extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{my_contacts}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('prof_id, zip_code, status_id', 'numerical', 'integerOnly'=>true),
			array('last_name, first_name, email', 'length', 'max'=>45),
			array('phone', 'length', 'max'=>11),
			array('gender', 'length', 'max'=>10),
			array('bithday', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('contact_id, last_name, first_name, phone, email, gender, bithday, prof_id, zip_code, status_id', 'safe', 'on'=>'search'),
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
			'tblInterests' => array(self::MANY_MANY, 'Interests', '{{contact_interest}}(contact_id, interest_id)'),
			'tblSeekings' => array(self::MANY_MANY, 'Seeking', '{{contact_seeking}}(contact_id, seeking_id)'),
			'prof' => array(self::BELONGS_TO, 'Profession', 'prof_id'),
			'status' => array(self::BELONGS_TO, 'Status', 'status_id'),
			'zipCode' => array(self::BELONGS_TO, 'ZipCode', 'zip_code'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'contact_id' => 'Contact',
			'last_name' => 'Last Name',
			'first_name' => 'First Name',
			'phone' => 'Phone',
			'email' => 'Email',
			'gender' => 'Gender',
			'bithday' => 'Bithday',
			'prof_id' => 'Prof',
			'zip_code' => 'Zip Code',
			'status_id' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('contact_id',$this->contact_id);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('bithday',$this->bithday,true);
		$criteria->compare('prof_id',$this->prof_id);
		$criteria->compare('zip_code',$this->zip_code);
		$criteria->compare('status_id',$this->status_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MyContacts the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public static function getZipcode() {
        $st = array('1', '2', '3', '4', '5');
       
        return $st;
    }
}
