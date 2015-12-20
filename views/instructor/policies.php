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
            <li id="li3" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/policies') ?>">Policies</a></li>
            <li id="li4"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/courseware') ?>">Courseware</a></li>
            <li id="li5"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/libraries') ?>">Libraries</a></li>
            <li id="li6"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/assessments') ?>">Assessments</a></li>
        </ul>
    </div>
</div>


<div class="col-md-12 dashboard">
    <div class="col-md-6">
        <h5 class="d-heading">Policy Links</h5>
        <div class="wrapper-policies">
            <table class="table">
                <tr><td><a href="#">Academic Policy</a></td></tr>
                <tr><td><a href="#">Alumni Giving Policy</a></td></tr>
                <tr><td><a href="#">Employment Services Policy</a></td></tr>
                <tr><td><a href="#">FERPA Policy</a></td></tr>
                <tr><td><a href="#">Graduation Policy</a></td></tr>
                <tr><td><a href="#">myEduPlan<sup>TM</sup> Policy</a></td></tr>
            </table>
        </div>
    </div>
    
    <div class="col-md-6">
        <h5 class="d-heading">Handbooks &AMP; Program Guides</h5>
        <div class="wrapper-policies">
            <table class="table">
                <tr><td><a href="#">Faculty Handbook</a></td></tr>
                <tr><td><a href="#">Student Handbook</a></td></tr>
                <tr><td><a href="#">College Readiness</a></td></tr>
                <tr><td><a href="#">Faculty Orientation</a></td></tr>
                <tr><td><a href="#">Digital Media Technology</a></td></tr>
                <tr><td><a href="#">Instructional Design Technology</a></td></tr>
                <tr><td><a href="#">Personal Transformational Leadership</a></td></tr>
                <tr><td><a href="#">Student Orientation</a></td></tr>
            </table>
        </div>
    </div>
</div>

