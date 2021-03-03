<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oadode".
 *
 * @property int $id
 * @property int|null $application_id
 * @property int|null $customer_id
 * @property int|null $user_id
 * @property string|null $legal_name
 * @property string|null $business_name
 * @property string|null $business_address
 * @property string|null $business_mailing_address
 * @property string|null $business_phone
 * @property string|null $business_fax
 * @property string|null $business_email
 * @property int|null $application_type
 * @property string|null $business_title
 * @property int|null $lang
 */
class Oadode extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oadode';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['application_id', 'customer_id', 'user_id', 'application_type', 'lang'], 'integer'],
            [['legal_name', 'business_name', 'business_address', 'business_mailing_address', 'business_phone', 'business_fax', 'business_email', 'business_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'application_id' => 'Application ID',
            'customer_id' => 'Customer ID',
            'user_id' => 'User ID',
            'legal_name' => 'Legal Name',
            'business_name' => 'Business Name',
            'business_address' => 'Business Address',
            'business_mailing_address' => 'Business Mailing Address',
            'business_phone' => 'Business Phone',
            'business_fax' => 'Business Fax',
            'business_email' => 'Business Email',
            'application_type' => 'Application Type',
            'business_title' => 'Business Title',
            'lang' => 'Lang',
        ];
    }
}
