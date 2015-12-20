<?php
$this->title = 'OLC | Dashbord';
?>
<div class="top-text">
    <div class="col-md-12">
        <h4>Dashboard</h4>
        <p class="d-p">This is your user profile. Edit or update your information.</p>

    </div>
</div>  
<div class="col-md-12">
    <div id="centeredmenu">
        <ul class="top-ul">
            <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/student') ?>">Main</a></li>
            <li id="li2" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/profile') ?>">Profile</a></li>
            <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/policies') ?>">Policies</a></li>
            <li id="li4"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/courseware') ?>">Courseware</a></li>
            <li id="li5"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/libraries') ?>">Libraries</a></li>
            <li id="li6"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/assessments') ?>">Assessments</a></li>
        </ul>
    </div>
</div>


<div class="col-md-12 dashboard">
    <!--Change Profile-->
    <div class="wrapper-profile">
        <div class="col-md-5">
            <div class="profile">
                <div class="profile-img">
                    <img src="<?php echo Yii::$app->request->baseUrl;?>/images/profile_dp.png"/>
                </div>
                <div class="pull-right change-pic">
                    <form action="#" style="display: none;">
                        <input type="file" id="profile_img" name="profile_img"/>
                    </form>
                    <a href="#" id="change_img">Change Photo</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="profile-detail">
                <table class="table">
                    <tr>
                        <td>Name</td>
                        <td class="readOnly">Tammé Shinshuri</td>
                    </tr>
                    <tr>
                        <td>User Name</td>
                        <td>Dr. Shinshuri</td>
                    </tr>
                    <tr>
                        <td>User ID</td>
                        <td class="readOnly">CA3009716502</td>
                    </tr>
                    <tr>
                        <td>Quarter</td>
                        <td class="readOnly">Fail</td>
                    </tr>
                    <tr>
                        <td>Enrollment</td>
                        <td class="readOnly">NA</td>
                    </tr>
                    <tr>
                        <td>Graduation</td>
                        <td class="readOnly">NA</td>
                    </tr>
                    <tr>
                        <td>Graduated</td>
                        <td class="readOnly">No</td>
                    </tr>
                    <tr>
                        <td>Role</td>
                        <td class="readOnly">Instructor</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>shinshuri@me.com</td>
                    </tr>
                    <tr>
                        <td>Company</td>
                        <td>Shinshuri Foundation</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>(916) 724-9554</td>
                    </tr>
                    <tr>
                        <td>Website</td>
                        <td><a href="#">www.shineshuri.com</a></td>
                    </tr>
                    <tr>
                        <td>Biography</td>
                        <td>
                            <p>Dr. Tammé Shinshuri holds a doctorate in Educational 
                                Leadership, Master of Education in 
                                Instructional Technology, and Bachelor of Science 
                                in Mechanical Engineering.
                            </p>
                            <p>Dr. Shinshuri is a Business Philanthropist devoted to human evolution. 
                                Her vision and mission is to ensure that more people, through authentic 
                                living and vocational and leadership development, are able to live 
                                empowered by eliminating the excuses that can get in the way of their 
                                human evolution and personal prosperity. 
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="pull-right">
                <button type="submit" class="btn btn-danger btn-small">Save</button>
                <button type="submit" class="btn btn-danger btn-small">Edit</button>
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="clearfix"></div>
    </div>
</div>

