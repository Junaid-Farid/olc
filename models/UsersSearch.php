<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Users;

/**
 * UsersSearch represents the model behind the search form about `app\models\Users`.
 */
class UsersSearch extends Users
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'phone', 'edu_phone', 'emp_phone'], 'integer'],
            [['first_name', 'last_name', 'middle_name', 'ssn', 'address', 'city', 'state', 'zip', 'country', 'email', 'dob', 'gender', 'm_stautus', 'language', 'fluency', 'school', 'edu_address', 'edu_', 'edu_city', 'edu_state', 'edu_zip', 'edu_country', 'edu_startdate', 'graduation', 'graduation_date', 'degree', 'program_study', 'edu_url', 'edu_transcrip', 'edu_resume', 'employer', 'emp_address', 'emp_city', 'emp_state', 'emp_zip', 'emp_country', 'emp_job_role', 'emp_supervisor', 'emp_email', 'interest1', 'interest2', 'interest3', 'program1', 'program2', 'program3', 'planned1', 'planned2', 'planned3', 'curricula_owned', 'format', 'product1', 'product2', 'product3'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Users::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'user_id' => $this->user_id,
            'phone' => $this->phone,
            'edu_phone' => $this->edu_phone,
            'emp_phone' => $this->emp_phone,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name])
            ->andFilterWhere(['like', 'ssn', $this->ssn])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'zip', $this->zip])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'dob', $this->dob])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'm_stautus', $this->m_stautus])
            ->andFilterWhere(['like', 'language', $this->language])
            ->andFilterWhere(['like', 'fluency', $this->fluency])
            ->andFilterWhere(['like', 'school', $this->school])
            ->andFilterWhere(['like', 'edu_address', $this->edu_address])
            ->andFilterWhere(['like', 'edu_', $this->edu_])
            ->andFilterWhere(['like', 'edu_city', $this->edu_city])
            ->andFilterWhere(['like', 'edu_state', $this->edu_state])
            ->andFilterWhere(['like', 'edu_zip', $this->edu_zip])
            ->andFilterWhere(['like', 'edu_country', $this->edu_country])
            ->andFilterWhere(['like', 'edu_startdate', $this->edu_startdate])
            ->andFilterWhere(['like', 'graduation', $this->graduation])
            ->andFilterWhere(['like', 'graduation_date', $this->graduation_date])
            ->andFilterWhere(['like', 'degree', $this->degree])
            ->andFilterWhere(['like', 'program_study', $this->program_study])
            ->andFilterWhere(['like', 'edu_url', $this->edu_url])
            ->andFilterWhere(['like', 'edu_transcrip', $this->edu_transcrip])
            ->andFilterWhere(['like', 'edu_resume', $this->edu_resume])
            ->andFilterWhere(['like', 'employer', $this->employer])
            ->andFilterWhere(['like', 'emp_address', $this->emp_address])
            ->andFilterWhere(['like', 'emp_city', $this->emp_city])
            ->andFilterWhere(['like', 'emp_state', $this->emp_state])
            ->andFilterWhere(['like', 'emp_zip', $this->emp_zip])
            ->andFilterWhere(['like', 'emp_country', $this->emp_country])
            ->andFilterWhere(['like', 'emp_job_role', $this->emp_job_role])
            ->andFilterWhere(['like', 'emp_supervisor', $this->emp_supervisor])
            ->andFilterWhere(['like', 'emp_email', $this->emp_email])
            ->andFilterWhere(['like', 'interest1', $this->interest1])
            ->andFilterWhere(['like', 'interest2', $this->interest2])
            ->andFilterWhere(['like', 'interest3', $this->interest3])
            ->andFilterWhere(['like', 'program1', $this->program1])
            ->andFilterWhere(['like', 'program2', $this->program2])
            ->andFilterWhere(['like', 'program3', $this->program3])
            ->andFilterWhere(['like', 'planned1', $this->planned1])
            ->andFilterWhere(['like', 'planned2', $this->planned2])
            ->andFilterWhere(['like', 'planned3', $this->planned3])
            ->andFilterWhere(['like', 'curricula_owned', $this->curricula_owned])
            ->andFilterWhere(['like', 'format', $this->format])
            ->andFilterWhere(['like', 'product1', $this->product1])
            ->andFilterWhere(['like', 'product2', $this->product2])
            ->andFilterWhere(['like', 'product3', $this->product3]);

        return $dataProvider;
    }
}
