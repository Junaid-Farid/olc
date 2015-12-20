<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin([]); ?>

             <div class="col-md-4">
                <h3>Personal Information</h3>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'username'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'username', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'username'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'password'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'password', ['class' => 'form-control', 'type'=>'password']); ?>
                        <?= Html::error($model, 'password'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'first_name'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'first_name', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'first_name'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'last_name'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'last_name', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'last_name'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'middle_name'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'middle_name', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'middle_name'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'ssn'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'ssn', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'ssn'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'address'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'address', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'address'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'city'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'city', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'city'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'state'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeDropDownList($model, 'state', ['Pakistan' => 'Pakistan', 'America' => 'America'], ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'state'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'zip'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'zip', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'zip'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'country'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeDropDownList($model, 'country', ['Pakistan' => 'Pakistan', 'America' => 'America'], ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'country'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'phone'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'phone', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'phone'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'email'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'email', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'email'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'dob'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'dob', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'dob'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'gender'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'gender', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'gender'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'language'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'language', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'language'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'fluency'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'fluency', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'fluency'); ?>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <h3>Education Information</h3>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'school'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'school', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'school'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'edu_address'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'edu_address', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'edu_address'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'edu_city'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'edu_city', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'edu_city'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'edu_state'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeDropDownList($model, 'edu_state', ['Pakistan' => 'Pakistan', 'America' => 'America'], ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'edu_state'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'edu_zip'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'edu_zip', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'edu_zip'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'edu_country'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeDropDownList($model, 'edu_country', ['Pakistan' => 'Pakistan', 'America' => 'America'], ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'edu_country'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'edu_startdate'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'edu_startdate', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'edu_startdate'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'graduation'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'graduation', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'graduation'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'graduation'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'graduation', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'graduation'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'graduation_date'); ?>
                        </div>

                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'graduation_date', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'graduation_date'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'program_study'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'program_study', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'program_study'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'edu_url'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'edu_url', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'edu_url'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'edu_phone'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'edu_phone', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'edu_phone'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'edu_transcrip'); ?>
                        </div>          
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'edu_transcrip', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'edu_transcrip'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'edu_resume'); ?>
                        </div>                
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'edu_resume', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'edu_resume'); ?>
                    </div>
                </div>


            </div>

            <!-- Current Employment start here-->


            <div class="col-md-4">
                <h3>Current Employment</h3>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'employer'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'employer', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'employer'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'emp_address'); ?>
                        </div>

                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'emp_address', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'emp_address'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'emp_city'); ?>
                        </div>

                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'emp_city', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'emp_city'); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'emp_state'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'emp_state', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'emp_state'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'emp_zip'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'emp_zip', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'emp_zip'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'emp_country'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'emp_country', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'emp_country'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'emp_job_role'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'emp_job_role', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'emp_job_role'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'emp_supervisor'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'emp_supervisor', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'emp_supervisor'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'emp_phone'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'emp_phone', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'emp_phone'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'emp_email'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'emp_email', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'emp_email'); ?>
                    </div>
                </div>

                <!-- program interest start here-->

                <h3>Program Interest</h3>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'interest1'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'interest1', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'interest1'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'interest2'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'interest2', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'interest2'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'interest3'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'interest3', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'interest3'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'program1'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'program1', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'program1'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'program2'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'program2', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'program2'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'program3'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'program3', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'program3'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'planned1'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'planned1', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'planned1'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'planned2'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'planned2', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'planned2'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'planned3'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'planned3', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'planned3'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'curricula_owned'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'curricula_owned', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'curricula_owned'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'format'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'format', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'format'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'product1'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'product1', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'product1'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'product2'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'product2', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'product2'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <?= Html::activeLabel($model, 'product3'); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <?= Html::activeTextInput($model, 'product3', ['class' => 'form-control']); ?>
                        <?= Html::error($model, 'product3'); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4 margin-bottom-30 user-update">
                
                Archive <input type="checkbox"> select to archive account <br>
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
            </div>

    <?php ActiveForm::end(); ?>

</div>
