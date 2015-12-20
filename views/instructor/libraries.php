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
            <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/instructor') ?>">Main</a></li>
            <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/profile') ?>">Profile</a></li>
            <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/policies') ?>">Policies</a></li>
            <li id="li4"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/courseware') ?>">Courseware</a></li>
            <li id="li5" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/libraries') ?>">Libraries</a></li>
            <li id="li6"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/assessments') ?>">Assessments</a></li>
        </ul>
    </div>
</div>


<div class="col-md-12 dashboard">
    <div class="col-md-5">
        <h5 class="d-heading">Research Libraries</h5>
        <div class="wrapper-policies">
            <table class="table">
                <tr><td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/librarydigitalcontent') ?>">ABSCO Host</a></td></tr>
                <tr><td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/librarydigitalcontent') ?>">Library and Information Resources Network</a></td></tr>
                <tr><td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/librarydigitalcontent') ?>">ProQuest Dissertationsa and Theses</a></td></tr>
            </table>
        </div>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-5">
        <h5 class="d-heading">Digital Libraries</h5>
        <div class="wrapper-policies">
            <table class="table">
                <tr><td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/librarydigitalcontent') ?>">Student Orientation</a></td></tr>
                <tr><td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/librarydigitalcontent') ?>">Faculty Orientation</a></td></tr>
                <tr><td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/librarydigitalcontent') ?>">College Readiness</a></td></tr>
                <tr><td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/librarydigitalcontent') ?>">Instructional Design</a></td></tr>
                <tr><td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/librarydigitalcontent') ?>">Digital Media</a></td></tr>
            </table>
        </div>
    </div>
</div>

