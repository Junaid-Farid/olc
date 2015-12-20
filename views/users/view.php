<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Users */

$this->title = $model->first_name.''.$model->last_name;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->user_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'get',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'user_id',
            'username',
            'first_name',
            'last_name',
            'middle_name',
            'ssn',
            'address',
            'city',
            'state',
            'zip',
            'country',
            'phone',
            'email:email',
            'dob',
            'gender',
            'm_stautus',
            'language',
            'fluency',
            'school',
            'edu_address',
            'edu_',
            'edu_city',
            'edu_state',
            'edu_zip',
            'edu_country',
            'edu_startdate',
            'graduation',
            'graduation_date',
            'degree',
            'program_study',
            'edu_url:url',
            'edu_phone',
            'edu_transcrip',
            'edu_resume',
            'employer',
            'emp_address',
            'emp_city',
            'emp_state',
            'emp_zip',
            'emp_country',
            'emp_job_role',
            'emp_supervisor',
            'emp_phone',
            'emp_email:email',
            'interest1',
            'interest2',
            'interest3',
            'program1',
            'program2',
            'program3',
            'planned1',
            'planned2',
            'planned3',
            'curricula_owned',
            'format',
            'product1',
            'product2',
            'product3',
        ],
    ]) ?>

</div>
