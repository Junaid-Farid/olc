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
            <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboard') ?>">Main</a></li>
            <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/profile') ?>">Profile</a></li>
            <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/policies') ?>">Policies</a></li>
            <li id="li4"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/courseware') ?>">Courseware</a></li>
            <li id="li5"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/libraries') ?>">Libraries</a></li>
            <li id="li6" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/assessments') ?>">Assessments</a></li>
        </ul>
    </div>
</div>


<div class="col-md-12 dashboard">
    <div class="col-md-4">
        <h5 class="d-heading">Assessment Links</h5>
        <div class="wrapper-assessment">
            <table class="table">
                <tr><td><a href="#">Readiness Assessments</a></td></tr>
                <tr><td><a href="#">Lifestyle Behaviorial Interview</a></td></tr>
                <tr><td><a href="#">Learning Style Inventory</a></td></tr>
                <tr><td><a href="#">Learning Technologist Inventory</a></td></tr>
                <tr><td><a href="#">Personal Leadership Readiness Inventory</a></td></tr>
            </table>
        </div>
    </div>
</div>

