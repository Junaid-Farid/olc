<?php
//use yii\helpers\Html;
//use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
?>

<div class="config">

    <div class="top-text">
        <div class="col-md-12">
            <h4>Edit Programs</h4>
            <p class="d-p">Edit and save configured programs for user account.</p>
        </div>
    </div>
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/configureapplications') ?>">Applications</a></li>
                <li id="li2" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/configureprograms') ?>">Programs</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('users/index') ?>">Users</a></li>
                <li id="li4"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/configurearchive') ?>">Archive</a></li>
            </ul>
        </div>
    </div>

    <div class="col-md-12 br-conf">
        <div class="col-md-3 col-md-offset-9">
            <div class="btn-right">
                <input type="button" class="btn btn-danger" value="Save">
            </div>
        </div>
    </div>
    <!--User Account-->
    <div class="col-md-12">
        <div class="col-md-5 kill-padding">
            <form class="form-horizontal" role="form" id="">
                <h4  class="h-4">User Account</h4>
                <div class="wrapper-settings">
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">User Name</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Select One</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">Application ID</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">User ID</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">Email</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">Role</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">First Name</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">Last Name</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">Quarter</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">Year</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!--Program Scheduled-->
        <div class="col-md-5 col-md-offset-2 kill-padding">
            <form class="form-horizontal" role="form">
                <h4  class="h-4">Programs Scheduled</h4>
                <div class="wrapper-settings">
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">Orientation</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Select One</option>
                                <option>Student</option>
                                <option>Faculty</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">College Prep</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Select One</option>
                                <option>College Readiness</option>
                                <option>Social Immersion</option>
                                <option>High School Equivalency</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">Leadership</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Select One</option>
                                <option>Personal Transformation</option>
                                <option>Business Philanthropy</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">Vocation</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Select One</option>
                                <option>Business Development & Management</option>
                                <option>CADAC</option>
                                <option>Digital Media</option>
                                <option>Graphic Design</option>
                                <option>Information Technology Design</option>
                                <option>Information Technology Development</option>
                                <option>Instructional Design</option>
                                <option>Multimedia & Gaming</option>
                                <option>Musicology</option>
                                <option>Performing Arts Production</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
            <!--Program Facilitated-->
            <form class="form-horizontal" role="form">
                <h4 class="h-4">Programs Facilitated</h4>
                <div class="wrapper-settings">
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">Orientation</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Select One</option>
                                <option>Student</option>
                                <option>Faculty</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">College Prep</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Select One</option>
                                <option>College Readiness</option>
                                <option>Social Immersion</option>
                                <option>High School Equivalency</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">Leadership</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Select One</option>
                                <option>Personal Transformation</option>
                                <option>Business Philanthropy</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">Vocation</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Select One</option>
                                <option>Business Development & Management</option>
                                <option>CADAC</option>
                                <option>Digital Media</option>
                                <option>Graphic Design</option>
                                <option>Information Technology Design</option>
                                <option>Information Technology Development</option>
                                <option>Instructional Design</option>
                                <option>Multimedia & Gaming</option>
                                <option>Musicology</option>
                                <option>Performing Arts Production</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--eCourse Grade-->
    <div class="col-md-12">
        <div class="col-md-4 kill-padding">
            <form class="form-horizontal" role="form" id="">
                <h4 class="h-4">eCourse Grades</h4>
                <div class="wrapper-settings">
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">&#37; Grade</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">L&#45;Grade</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">C&#45;Hrs</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">H&#45;Credits</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">GPA</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!--eModules Grade-->
        <div class="col-md-4">
            <form class="form-horizontal" role="form" id="">
                <h4 class="h-4">eModule Grades</h4>
                <div class="wrapper-settings">
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">Content</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">Exercises</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">Media</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">R&#45;Time</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">A&#45;Time</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">Quizzes</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">Pre Test</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">Post Test</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">EM &#37; Grade</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">EM L&#45;Grade</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">EM GPA</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!--eClass Grade-->
        <div class="col-md-4 kill-padding">
            <form class="form-horizontal" role="form" id="">
                <h4 class="h-4">eClass Grades</h4>
                <div class="wrapper-settings">
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">Sessions</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">Activities</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">Projects</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">Exams</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">Forums</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">EC &#37; Grade</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">EC L&#45;Grade</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">EC GPA</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>