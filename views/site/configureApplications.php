<?php
$this->title = 'OLC | Dashbord';
?>
<div class="top-text">
    <div class="col-md-12">
        <h4>Configure Accounts</h4>
        <p class="d-p">Configure user accounts, generate random IDs for each user type, and save form and application data to database.</p>
        <p class="p-conf-2">Note: The system will auto populate the fields based on Enrollment form, Faculty Application, Job Application, or any form data stored in the system.</p>
    </div>
</div>  
<div class="col-md-12">
    <div id="centeredmenu">
        <ul class="top-ul">
            <li id="li1" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/configureapplications') ?>">Applications</a></li>
            <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/configureprograms') ?>">Programs</a></li>
            <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('users/index') ?>">Users</a></li>
            <li id="li4"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/configurearchive') ?>">Archive</a></li>
        </ul>
        <div class="pull-right">
            <a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/appmanualentry') ?>" class="btn btn-danger btn-small" role="button">Manual Entry</a>
        </div>
    </div>
</div>

<div class="col-md-12 dashboard">
    <div class="courseware-filterArea">
        <form class="form-horizontal" role="form" id="">
            <div class="row">
                <div class="col-md-2">
                    <label class="control-label kill-padding pull-right" for="">Application ID</label>
                </div>
                <div class="col-md-4 kill-padding">
                    <select class="">
                        <option>Select One</option>
                        <option>options here</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <p><b>Application Type:</b> Enrollment Forum, Faculty Application, Job Application</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-2">
                    <label class="control-label kill-padding pull-right" for="">User Name</label>
                </div>
                <div class="col-md-4 kill-padding">
                    <select class="">
                        <option>Select One</option>
                        <option>options here</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <p>Select User ID</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-2">
                    <label class="control-label kill-padding pull-right" for="">Email</label>
                </div>
                <div class="col-md-4 kill-padding">
                    <input type="text" id="email" name="email" class="form-control"/>
                </div>
                <div class="col-md-6">
                    <p>Enter email address</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-2">
                    <label class="control-label kill-padding pull-right" for="">Role</label>
                </div>
                <div class="col-md-4 kill-padding">
                    <select class="">
                        <option>Select One</option>
                        <option>options here</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <p>Select Role: Student, Instructor, Administrator, Employee, Partner, Employeer, Alumni</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 kill-padding">
                    <div class="pull-right">
                        <a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/facultyapplication'); ?>" class="btn btn-danger btn-small">Load</a>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </form>
    </div>
</div>

