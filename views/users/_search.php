<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'middle_name') ?>

    <?= $form->field($model, 'ssn') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'zip') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'dob') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'm_stautus') ?>

    <?php // echo $form->field($model, 'language') ?>

    <?php // echo $form->field($model, 'fluency') ?>

    <?php // echo $form->field($model, 'school') ?>

    <?php // echo $form->field($model, 'edu_address') ?>

    <?php // echo $form->field($model, 'edu_') ?>

    <?php // echo $form->field($model, 'edu_city') ?>

    <?php // echo $form->field($model, 'edu_state') ?>

    <?php // echo $form->field($model, 'edu_zip') ?>

    <?php // echo $form->field($model, 'edu_country') ?>

    <?php // echo $form->field($model, 'edu_startdate') ?>

    <?php // echo $form->field($model, 'graduation') ?>

    <?php // echo $form->field($model, 'graduation_date') ?>

    <?php // echo $form->field($model, 'degree') ?>

    <?php // echo $form->field($model, 'program_study') ?>

    <?php // echo $form->field($model, 'edu_url') ?>

    <?php // echo $form->field($model, 'edu_phone') ?>

    <?php // echo $form->field($model, 'edu_transcrip') ?>

    <?php // echo $form->field($model, 'edu_resume') ?>

    <?php // echo $form->field($model, 'employer') ?>

    <?php // echo $form->field($model, 'emp_address') ?>

    <?php // echo $form->field($model, 'emp_city') ?>

    <?php // echo $form->field($model, 'emp_state') ?>

    <?php // echo $form->field($model, 'emp_zip') ?>

    <?php // echo $form->field($model, 'emp_country') ?>

    <?php // echo $form->field($model, 'emp_job_role') ?>

    <?php // echo $form->field($model, 'emp_supervisor') ?>

    <?php // echo $form->field($model, 'emp_phone') ?>

    <?php // echo $form->field($model, 'emp_email') ?>

    <?php // echo $form->field($model, 'interest1') ?>

    <?php // echo $form->field($model, 'interest2') ?>

    <?php // echo $form->field($model, 'interest3') ?>

    <?php // echo $form->field($model, 'program1') ?>

    <?php // echo $form->field($model, 'program2') ?>

    <?php // echo $form->field($model, 'program3') ?>

    <?php // echo $form->field($model, 'planned1') ?>

    <?php // echo $form->field($model, 'planned2') ?>

    <?php // echo $form->field($model, 'planned3') ?>

    <?php // echo $form->field($model, 'curricula_owned') ?>

    <?php // echo $form->field($model, 'format') ?>

    <?php // echo $form->field($model, 'product1') ?>

    <?php // echo $form->field($model, 'product2') ?>

    <?php // echo $form->field($model, 'product3') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
