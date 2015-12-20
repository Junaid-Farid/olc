<?php
$this->title = 'OLC | Dashbord';
?>
<div class="top-text">
    <div class="col-md-12">
        <h4>Dashboard</h4>
        <p class="d-p"></p>

    </div>
</div>  
<div class="col-md-12">
    <div id="centeredmenu">
        <ul class="top-ul">
            <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/student') ?>">Main</a></li>
            <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/profile') ?>">Profile</a></li>
            <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/policies') ?>">Policies</a></li>
            <li id="li4"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/courseware') ?>">Courseware</a></li>
            <li id="li5" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/libraries') ?>">Libraries</a></li>
            <li id="li6"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/assessments') ?>">Assessments</a></li>
        </ul>
    </div>
</div>


<div class="col-md-12 dashboard">
    <div class="col-md-5">
        <h5 class="d-heading">Research Libraries</h5>
        <div class="wrapper-policies">
            <table class="table">
                <tr><td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/librarydigitalcontent') ?>">ABSCO Host</a></td></tr>
                <tr><td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/librarydigitalcontent') ?>">Library and Information Resources Network</a></td></tr>
                <tr><td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/librarydigitalcontent') ?>">ProQuest Dissertationsa and Theses</a></td></tr>
            </table>
        </div>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-5">
        <h5 class="d-heading">Digital Libraries</h5>
        <div class="wrapper-policies">
            <table class="table">
                <tr><td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/librarydigitalcontent') ?>">Student Orientation</a></td></tr>
                <tr><td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/librarydigitalcontent') ?>">Faculty Orientation</a></td></tr>
                <tr><td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/librarydigitalcontent') ?>">College Readiness</a></td></tr>
                <tr><td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/librarydigitalcontent') ?>">Instructional Design</a></td></tr>
                <tr><td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/librarydigitalcontent') ?>">Digital Media</a></td></tr>
            </table>
        </div>
    </div>
</div>

