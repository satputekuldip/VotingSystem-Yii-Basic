<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "voter".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $UID
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $contact_no
 * @property string $email
 * @property integer $state_id
 * @property integer $dist_id
 * @property integer $city_id
 * @property string $address1
 * @property string $address2
 * @property integer $pincode
 *
 * @property Users $user
 */
class Voter extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'voter';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'UID', 'first_name', 'middle_name', 'last_name', 'contact_no', 'email', 'state_id', 'dist_id', 'city_id', 'address1', 'address2', 'pincode'], 'required'],
            [['user_id', 'UID', 'state_id', 'dist_id', 'city_id', 'pincode'], 'integer'],
            [['address1', 'address2'], 'string'],
            [['first_name', 'middle_name', 'last_name', 'contact_no'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 30],
            [['UID'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'UID' => 'Uid',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'contact_no' => 'Contact No',
            'email' => 'Email',
            'state_id' => 'State ID',
            'dist_id' => 'Dist ID',
            'city_id' => 'City ID',
            'address1' => 'Address1',
            'address2' => 'Address2',
            'pincode' => 'Pincode',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
    }
}
