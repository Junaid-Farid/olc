<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\helpers\Security;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "users".
 *
 * @property string $userid
 * @property string $username
 * @property string $password
 */
class Users extends \yii\db\ActiveRecord implements IdentityInterface {

    public $authKey;
    public $accessToken;

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['username', 'password'], 'required'],
            [['first_name', 'last_name', 'middle_name', 'ssn', 'address', 'city', 'state', 'zip', 'country', 'phone', 'email', 'dob', 'gender', 'm_stautus', 'language', 'fluency', 'school', 'edu_address', 'edu_', 'edu_city', 'edu_state', 'edu_zip', 'edu_country', 'edu_startdate', 'graduation', 'graduation_date', 'degree', 'program_study', 'edu_url', 'edu_phone', 'edu_transcrip', 'edu_resume', 'employer', 'emp_address', 'emp_city', 'emp_state', 'emp_zip', 'emp_country', 'emp_job_role', 'emp_supervisor', 'emp_phone', 'emp_email', 'interest1', 'interest2', 'interest3', 'program1', 'program2', 'program3', 'planned1', 'planned2', 'planned3', 'curricula_owned', 'format', 'product1', 'product2', 'product3'], 'safe'],
            [['phone', 'edu_phone', 'emp_phone'], 'integer'],
            [['first_name', 'last_name', 'middle_name', 'ssn', 'address', 'city', 'state', 'zip', 'country', 'email', 'dob', 'gender', 'm_stautus', 'language', 'fluency', 'school', 'edu_address', 'edu_', 'edu_city', 'edu_state', 'edu_zip', 'edu_country', 'edu_startdate', 'graduation', 'graduation_date', 'degree', 'program_study', 'edu_url', 'edu_transcrip', 'edu_resume', 'employer', 'emp_address', 'emp_city', 'emp_state', 'emp_zip', 'emp_country', 'emp_job_role', 'emp_supervisor', 'emp_email', 'interest1', 'interest2', 'interest3', 'program1', 'program2', 'program3', 'planned1', 'planned2', 'planned3', 'curricula_owned', 'format', 'product1', 'product2', 'product3'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     * */
    public function attributeLabels() {
        return [
            'user_id' => 'User ID',
            'username' => 'User Name',
            'password' => 'Password',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'middle_name' => 'Middle Name',
            'ssn' => 'Ssn',
            'address' => 'Address',
            'city' => 'City',
            'state' => 'State',
            'zip' => 'Zip',
            'country' => 'Country',
            'phone' => 'Phone',
            'email' => 'Email',
            'dob' => 'Dob',
            'gender' => 'Gender',
            'm_stautus' => 'M Stautus',
            'language' => 'Language',
            'fluency' => 'Fluency',
            'school' => 'School',
            'edu_address' => 'Edu Address',
            'edu_' => 'Edu',
            'edu_city' => 'Edu City',
            'edu_state' => 'Edu State',
            'edu_zip' => 'Edu Zip',
            'edu_country' => 'Edu Country',
            'edu_startdate' => 'Edu Startdate',
            'graduation' => 'Graduation',
            'graduation_date' => 'Graduation Date',
            'degree' => 'Degree',
            'program_study' => 'Program Study',
            'edu_url' => 'Edu Url',
            'edu_phone' => 'Edu Phone',
            'edu_transcrip' => 'Edu Transcrip',
            'edu_resume' => 'Edu Resume',
            'employer' => 'Employer',
            'emp_address' => 'Emp Address',
            'emp_city' => 'Emp City',
            'emp_state' => 'Emp State',
            'emp_zip' => 'Emp Zip',
            'emp_country' => 'Emp Country',
            'emp_job_role' => 'Emp Job Role',
            'emp_supervisor' => 'Emp Supervisor',
            'emp_phone' => 'Emp Phone',
            'emp_email' => 'Emp Email',
            'interest1' => 'Interest1',
            'interest2' => 'Interest2',
            'interest3' => 'Interest3',
            'program1' => 'Program1',
            'program2' => 'Program2',
            'program3' => 'Program3',
            'planned1' => 'Planned1',
            'planned2' => 'Planned2',
            'planned3' => 'Planned3',
            'curricula_owned' => 'Curricula Owned',
            'format' => 'Format',
            'product1' => 'Product1',
            'product2' => 'Product2',
            'product3' => 'Product3',
        ];
    }

    /** INCLUDE USER LOGIN VALIDATION FUNCTIONS* */

    /**
     * @inheritdoc
     */
    public static function findIdentity($id) {
        return Users::findOne(['user_id' => $id]);
        //return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    /**
     * @inheritdoc
     */
    /* modified */
    public static function findIdentityByAccessToken($token, $type = null) {
        return static::findOne(['access_token' => $token]);
    }

    /* removed
      public static function findIdentityByAccessToken($token)
      {
      throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
      }
     */

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username) {
        return Users::findOne(['username' => $username]);
    }

    /**
     * Finds user by password reset token
     *
     * @param  string      $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token) {
        $expire = \Yii::$app->params['user.passwordResetTokenExpire'];
        $parts = explode('_', $token);
        $timestamp = (int) end($parts);
        if ($timestamp + $expire < time()) {
            // token expired
            return null;
        }

        return static::findOne([
                    'password_reset_token' => $token
        ]);
    }

    /**
     * @inheritdoc
     */
    public function getId() {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey() {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey) {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password) {
        return $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /* public function beforeSave($insert){
      if(isset($this->password_field)){
      $this->password = Security::generatePasswordHash($this->password_field);
      return parent::beforeSave($insert);
      }
      } */

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password) {
        return $this->password === sha1($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey() {
        $this->auth_key = Security::generateRandomKey();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken() {
        $this->password_reset_token = Security::generateRandomKey() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken() {
        $this->password_reset_token = null;
    }

    public function getRole($id) {
        $data=AuthAssignment::findOne(['user_id' => $id]);
        return $data->item_name;
    }

    /** EXTENSION MOVIE * */
}
