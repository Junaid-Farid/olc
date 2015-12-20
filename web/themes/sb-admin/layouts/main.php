
<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\widgets\Menu;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?= Html::encode($this->title) ?></title>
        <link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl; ?>/images/favicon.gif" type="image/x-icon" />

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo $this->theme->baseUrl . '/css/bootstrap.min.css'; ?>" rel="stylesheet" >

        <link href="<?php echo $this->theme->getUrl('/css/sb-admin.css'); ?>" rel="stylesheet">
        <link href="<?php echo $this->theme->getUrl('/css/plugins/morris.css'); ?>" rel="stylesheet">
        <link href="<?php echo $this->theme->getUrl('/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">




        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body id="body">
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar " role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

                <?php
                $role = Yii::$app->user->identity->getRole(Yii::$app->user->id);
                echo Menu::widget([
                    'options' => ['class' => 'nav navbar-nav'],
                    'activeCssClass' => 'active',
                    'activateParents' => true,
                    'encodeLabels' => false,
                    'items' => [
                        // Important: you need to specify url as 'controller/action',
                        // not just as 'controller' even if default action is used.
                        ['label' => '', 'template' => '<a id="img-logo" href="' . Yii::$app->getUrlManager()->createUrl('instructor/instructor') . '"><img src="' . Yii::$app->request->baseUrl . '/images/dashboard_logo.png"></a>', 'visible' => ($role == 'instructor' ? true : false)],
                        ['label' => '', 'template' => '<a id="img-logo" href="' . Yii::$app->getUrlManager()->createUrl('site/dashboard') . '"><img src="' . Yii::$app->request->baseUrl . '/images/dashboard_logo.png"></a>', 'visible' => ($role == 'admin' ? true : false)],
                        ['label' => '', 'template' => '<a id="img-logo" href="' . Yii::$app->getUrlManager()->createUrl('student/student') . '"><img src="' . Yii::$app->request->baseUrl . '/images/dashboard_logo.png"></a>', 'visible' => ($role == 'student' ? true : false)],
                        //['label' => 'DASHBOARD', 'url' => ['site/dashboard']],
                        // 'Products' menu item will be selected as long as the route is 'product/index'
                        ['submenuTemplate' => '<ul id="instructor_db" class="collapse">{items}</ul>', 'label' => 'DASHBOARD', 'url' => ['instructor/instructor', 'tag' => 'instr'],
                            'visible' => ($role == 'instructor' ? true : false),
                        ],
                        ['submenuTemplate' => '<ul id="instructor_db" class="collapse">{items}</ul>', 'label' => 'DASHBOARD', 'url' => ['student/student', 'tag' => 'std'],
                            'visible' => ($role == 'student' ? true : false),
                        ],
                        ['submenuTemplate' => '<ul id="dashboard" class="collapse">{items}</ul>', 'template' => '<a  data-toggle="collapse"  data-target="#dashboard" href="javascript:;"  >{label}</a>', 'label' => 'DASHBOARD', 'url' => ['#'], 'items' => [
                            ['label' => 'Administrator', 'url' => ['site/dashboard', 'tag' => 'ad'],
                                'items' => [
                                    ['label' => 'Main', 'url' => ['site/dashboard', 'tag' => 'adb1']],
                                    ['label' => 'Profile', 'url' => ['site/profile', 'tag' => 'adb2']],
                                    ['label' => 'Policies', 'url' => ['site/policies', 'tag' => 'adb3']],
                                    ['label' => 'Courseware', 'url' => ['site/courseware', 'tag' => 'adb4']],
                                    ['label' => 'Libraries', 'url' => ['site/libraries', 'tag' => 'adb5']],
                                    ['label' => 'Assessments', 'url' => ['site/assessments', 'tag' => 'adb6']],
                                ],
                                'visible' => ($role == 'admin' ? true : false),
                            ],
                            ['label' => 'Instructor', 'url' => ['instructor/instructor', 'tag' => 'id'],
                                'items' => [
                                    ['label' => 'Main', 'url' => ['instructor/instructor', 'tag' => 'iddb1']],
                                    ['label' => 'Profile', 'url' => ['instructor/profile', 'tag' => '1ddb2']],
                                    ['label' => 'Policies', 'url' => ['instructor/policies', 'tag' => 'iddb3']],
                                    ['label' => 'Courseware', 'url' => ['instructor/courseware', 'tag' => 'iddb4']],
                                    ['label' => 'Libraries', 'url' => ['instructor/libraries', 'tag' => 'iddb5']],
                                    ['label' => 'Assessments', 'url' => ['instructor/assessments', 'tag' => 'iddb6']],
                                ],
                                'visible' => ($role == 'admin' ? true : false),
                            ],
                            ['label' => 'Student', 'url' => ['site/student', 'tag' => 'sd'],
                                'items' => [
                                    ['label' => 'Main', 'url' => ['site/student', 'tag' => 'sddb1']],
                                    ['label' => 'Profile', 'url' => ['site/profile', 'tag' => 'sddb2']],
                                    ['label' => 'Policies', 'url' => ['site/policies', 'tag' => 'sddb3']],
                                    ['label' => 'Courseware', 'url' => ['site/courseware', 'tag' => 'sddb4']],
                                    ['label' => 'Libraries', 'url' => ['site/libraries', 'tag' => 'sddb5']],
                                    ['label' => 'Assessments', 'url' => ['site/assessments', 'tag' => 'sddb6']],
                                ],
                                'visible' => ($role == 'admin' ? true : false),
                            ],
                        ],
                            'visible' => ($role == 'admin' ? true : false),
                        ],
                        ['submenuTemplate' => '<ul id="admin" class="collapse">{items}</ul>', 'template' => '<a  data-toggle="collapse"  data-target="#admin" href="javascript:;"  >{label}</a>', 'label' => 'ADMINISTRATION', 'url' => ['#'], 'items' => [
                                ['label' => 'Configure Accounts', 'url' => ['site/configureapplications', 'tag' => 'ad1'],
                                    'items' => [
                                        ['label' => 'Application', 'url' => ['site/configureapplications', 'tag' => 'confAcc1']],
                                        ['label' => 'Programs', 'url' => ['site/configureprograms', 'tag' => 'confAcc2']],
                                        ['label' => 'Users', 'url' => ['users/index', 'tag' => 'confAcc3']],
                                        ['label' => 'Archive', 'url' => ['site/configurearchive', 'tag' => 'confAcc4']],
                                    ],
                                    'visible' => ($role == 'admin' ? true : false),
                                ],
                                ['label' => 'Configure Assignments', 'url' => ['site/assignmentcreate', 'tag' => 'ad7'],
                                    'items' => [
                                        ['label' => 'Create', 'url' => ['site/assignmentcreate', 'tag' => 'confAsg1']],
                                        ['label' => 'View', 'url' => ['site/assignmentview', 'tag' => 'confAsg2']],
                                        ['label' => 'Archive', 'url' => ['site/assignmentarchive', 'tag' => 'confAsg3']],
                                    ],
                                    'visible' => ($role == 'admin' || $role == 'instructor' ? true : false),
                                ],
                                ['label' => 'Configure Dashboard', 'url' => ['site/dashboardcreate', 'tag' => 'ad2'],
                                    'items' => [
                                        ['label' => 'Create', 'url' => ['site/dashboardcreate', 'tag' => 'confdb1']],
                                        ['label' => 'Users', 'url' => ['site/dashboardusers', 'tag' => 'confdb2']],
                                        ['label' => 'Default', 'url' => ['site/dashboarddefault', 'tag' => 'confdb3']],
                                        ['label' => 'Policies', 'url' => ['site/dashboardpolicy', 'tag' => 'confdb4']],
                                        ['label' => 'Courseware', 'url' => ['site/dashboardcourse', 'tag' => 'confdb5']],
                                        ['label' => 'Libraries', 'url' => ['site/dashboardlibraries', 'tag' => 'confdb6']],
                                        ['label' => 'Assessments', 'url' => ['site/dashboardassessments', 'tag' => 'confdb7']],
                                    ],
                                    'visible' => ($role == 'admin' ? true : false),
                                ],
                                ['label' => 'Configure eCourses', 'url' => ['site/ecoursecreate', 'tag' => 'ad5'],
                                    'items' => [
                                        ['label' => 'Create', 'url' => ['site/ecoursecreate', 'tag' => 'confECrs1']],
                                        ['label' => 'View', 'url' => ['site/ecourseview', 'tag' => 'confECrs2']],
                                        ['label' => 'Archive', 'url' => ['site/ecoursearchive', 'tag' => 'confECrs3']],
                                    ],
                                    'visible' => ($role == 'admin' ? true : false),
                                ],
                                ['label' => 'Configure My Account', 'url' => ['site/myaccountcreate', 'tag' => 'ad3'],
                                    'items' => [
                                        ['label' => 'Create', 'url' => ['site/ecoursecreate', 'tag' => 'confAcc1']],
                                        ['label' => 'myEduPlan', 'url' => ['site/ecourseview', 'tag' => 'confAcc2']],
                                        ['label' => 'Users', 'url' => ['site/ecoursearchive', 'tag' => 'confAcc3']],
                                    ],
                                    'visible' => ($role == 'admin' ? true : false),
                                ],
                                ['label' => 'Configure FAQs', 'url' => ['site/faqcreate', 'tag' => 'ad11'],
                                    'items' => [
                                        ['label' => 'Create', 'url' => ['site/faqcreate', 'tag' => 'confFaq1']],
                                        ['label' => 'View', 'url' => ['site/faqview', 'tag' => 'confFaq2']],
                                        ['label' => 'Archive', 'url' => ['site/faqarchive', 'tag' => 'confFaq3']],
                                    ],
                                    'visible' => ($role == 'admin' ? true : false),
                                ],
                                ['label' => 'Configure Feedback', 'url' => ['site/feedbackcreate', 'tag' => 'ad9'],
                                    'items' => [
                                        ['label' => 'Create', 'url' => ['site/feedbackcreate', 'tag' => 'confFdbk1']],
                                        ['label' => 'View', 'url' => ['site/feedbackview', 'tag' => 'confFdbk2']],
                                        ['label' => 'Archive', 'url' => ['site/feedbackarchive', 'tag' => 'confFdbk3']],
                                    ],
                                    'visible' => ($role == 'admin' ? true : false),
                                ],
                                ['label' => 'Configure Programs', 'url' => ['site/programcreate', 'tag' => 'ad4'],
                                    'items' => [
                                        ['label' => 'Create', 'url' => ['site/programcreate', 'tag' => 'confPrg1']],
                                        ['label' => 'View', 'url' => ['site/programview', 'tag' => 'confPrg2']],
                                        ['label' => 'Archive', 'url' => ['site/programarchive', 'tag' => 'confPrg3']],
                                        ['label' => 'Add Option', 'url' => ['site/programoption', 'tag' => 'confPrg4']],
                                    ],
                                    'visible' => ($role == 'admin' ? true : false),
                                ],
                                ['label' => 'Configure Transcripts', 'url' => ['site/transcriptcreate', 'tag' => 'ad6'],
                                    'items' => [
                                        ['label' => 'Create', 'url' => ['site/transcriptcreate', 'tag' => 'confTrp1']],
                                        ['label' => 'Users', 'url' => ['site/transcriptusers', 'tag' => 'confTrp2']],
                                        ['label' => 'Archive', 'url' => ['site/transcriptarchive', 'tag' => 'confTrp3']],
                                    ],
                                    'visible' => ($role == 'admin' ? true : false),
                                ],
                            ],
                                'visible' => ($role == 'admin' || $role == 'instructor' ? true : false),
                        ],
                        ['submenuTemplate' => '<ul id="admin1" class="collapse">{items}</ul>', 'template' => '<a  data-toggle="collapse"  data-target="#admin1" href="javascript:;">{label}</a>', 'label' => 'MY ACCOUNT', 'url' => ['#'], 'items' => [
                            ['label' => 'Invoices', 'url' => ['student/invoice', 'tag' => 'ac1']],
                            ['label' => 'myEduPlan Summary', 'url' => ['student/myeduplansummery', 'tag' => 'ac2']],
                            ['label' => 'Payment History', 'url' => ['student/paymenthistory', 'tag' => 'ac3']],
                            ['label' => 'Tax Forms', 'url' => ['student/taxform', 'tag' => 'ac4']],
                        ],
                            'visible' => ($role == 'admin' || $role == 'student' || $role == 'instructor' ? true : false),
                        ],
                        ['submenuTemplate' => '<ul id="admin2" class="collapse">{items}</ul>', 'template' => '<a  data-toggle="collapse"  data-target="#admin2" href="javascript:;"  >{label}</a>', 'label' => 'PROGRAMS', 'url' => ['#'], 'items' => [
                            ['label' => 'College Preparation', 'url' => ['student/programdescription', 'tag' => 'prg1'],
                                'items' => [
                                    ['label' => 'College Readiness ', 'url' => ['student/programdescription', 'tag' => 'cd01']],
                                    /*['label' => 'Progress', 'url' => ['student/programprogress', 'tag' => 'cd02']],*/
                                ]
                            ],
                            ['label' => 'Orientation', 'url' => ['student/facultydescription', 'tag' => 'prg2'],
                                'items' => [
                                    ['label' => 'Faculty Orientation', 'url' => ['student/facultydescription', 'tag' => 'prg011']],
                                    ['label' => 'Student Orientation', 'url' => ['student/studentdescription', 'tag' => 'prg02']],
                                ]
                            ],
                            ['label' => 'Leadership', 'url' => ['student/leadershipdescription', 'tag' => 'prg3'],
                                'items' => [
                                    ['label' => 'PACE', 'url' => ['student/leadershipdescription', 'tag' => 'prg04']],
                                    ['label' => 'Personal Transformation', 'url' => ['student/leadershipprogress', 'tag' => 'prg05']],
                                ]
                            ],
                            ['label' => 'Vocation', 'url' => ['student/idtdescription', 'tag' => 'prg4'],
                                'items' => [
                                    ['label' => 'Digital Media', 'url' => ['student/dmtdescription', 'tag' => 'prg05']],
                                    ['label' => 'Instructional Design', 'url' => ['student/idtdescription', 'tag' => 'prg04']],
                                ]
                            ],
                        ],
                            'visible' => ($role == 'admin' || $role == 'student' || $role == 'instructor' ? true : false),
                        ],
                        ['submenuTemplate' => '<ul id="admin3" class="collapse">{items}</ul>', 'template' => '<a  data-toggle="collapse"  data-target="#admin3" href="javascript:;"  >{label}</a>', 'label' => 'eCOURSES', 'url' => ['#'], 'items' => [
                            ['label' => 'eCourses in Facilitation', 'url' => ['instructor/ecoursefacilitation', 'tag' => 'ec1'],
                                'visible' => ($role == 'admin' || $role == 'instructor' ? true : false),
                            ],
                            ['label' => 'eCourses Facilitated', 'url' => ['instructor/ecoursefacilitated', 'tag' => 'ec2'],
                                'visible' => ($role == 'admin' || $role == 'instructor' ? true : false),
                            ],
                            ['label' => 'eCourses in Progress', 'url' => ['student/ecourseprogress', 'tag' => 'stdCrs01'],
                                'visible' => ($role == 'admin' ? true : false),
                            ],
                            ['label' => 'eCourses Completed', 'url' => ['student/ecoursecompleted', 'tag' => 'stdCrs02'],
                                'visible' => ($role == 'admin' ? true : false),
                            ],
                            ['label' => 'eCourse Forums', 'url' => "https://olc.oraclesoftruth.org/forum",
                                'visible' => ($role == 'admin' ? true : false),
                            ],
                        ],
                            'visible' => ($role == 'admin' || $role == 'instructor' ? true : false),
                        ],
                        ['submenuTemplate' => '<ul id="admin8" class="collapse">{items}</ul>', 'template' => '<a  data-toggle="collapse"  data-target="#admin8" href="javascript:;"  >{label}</a>', 'label' => 'eCOURSES', 'url' => ['#'], 'items' => [
                            ['label' => 'eCourses in Progress', 'url' => ['student/ecourseprogress', 'tag' => 'stdCrs01']],
                            ['label' => 'eCourses Completed', 'url' => ['student/ecoursecompleted', 'tag' => 'stdCrs02']],
                            ['label' => 'eCourse Forums', 'url' => "https://olc.oraclesoftruth.org/forum"],
                        ],
                            'visible' => ($role == 'student' ? true : false),
                        ],
                        ['submenuTemplate' => '<ul id="admin4" class="collapse">{items}</ul>', 'template' => '<a  data-toggle="collapse"  data-target="#admin4" href="javascript:;"  >{label}</a>', 'label' => 'TRANSCRIPT', 'url' => ['#'], 'items' => [
                            ['label' => 'Unofficial Transcript', 'url' => ['student/orientation', 'tag' => 'tr1'],
                                'items' => [
                                    ['label' => 'Orientation', 'url' => ['student/orientation', 'tag' => 'tra04']],
                                    ['label' => 'College Preparation', 'url' => ['student/collegeprepartion', 'tag' => 'tra03']],
                                    ['label' => 'Leadership', 'url' => ['student/leadershipprogram', 'tag' => 'tra01']],
                                    ['label' => 'Vocation', 'url' => ['student/vocationalprogram', 'tag' => 'tra02']],
                                ]
                            ],
                            ['label' => 'Official Transcript', 'url' => ['student/officialtranscript', 'tag' => 'tr2']],
                        ],
                            'visible' => ($role == 'admin' || $role == 'student' || $role == 'instructor' ? true : false),
                        ],
                        ['submenuTemplate' => '<ul id="admin5" class="collapse">{items}</ul>', 'template' => '<a  data-toggle="collapse"  data-target="#admin5" href="javascript:;"  >{label}</a>', 'label' => 'ASSIGNMENTS', 'url' => ['#'], 'items' => [
                            ['label' => 'Grade Assignments', 'url' => ['instructor/submissionqueue', 'tag' => 'asg1'],
                                'items' => [
                                    ['label' => 'Submission Queue', 'url' => ['instructor/submissionqueue', 'tag' => 'asgSub1']],
                                    ['label' => 'Gradebook', 'url' => ['instructor/gradebook', 'tag' => 'asgSub2']],
                                    ['label' => 'Graded', 'url' => ['instructor/graded', 'tag' => 'asgSub3']],
                                ],
                                'visible' => ($role == 'admin' || $role == 'instructor' ? true : false),
                            ],
                            ['label' => 'Graded Assignments', 'url' => ['student/leadershipassignment', 'tag' => 'stdAsg1'],
                                'items' => [
                                    ['label' => 'Orientation', 'url' => ['student/gradedorientation', 'tag' => 'stdAsg01']],
                                    ['label' => 'College Preparation', 'url' => ['student/gradedassignmentcollegepreparation', 'tag' => 'stdAsg02']],
                                    ['label' => 'Leadership', 'url' => ['student/leadershipassignment', 'tag' => 'stdAsg03']],
                                    ['label' => 'Vocation', 'url' => ['student/vocationassignment', 'tag' => 'stdAsg04']],
                                ],
                                'visible' => ($role == 'admin' ? true : false),
                            ],
                            ['label' => 'Submit Assignments', 'url' => ['student/submitassignment', 'tag' => 'stdAsg2'],
                                'visible' => ($role == 'admin' ? true : false),
                            ],
                        ],
                            'visible' => ($role == 'admin' || $role == 'instructor' ? true : false),
                        ],
                        ['submenuTemplate' => '<ul id="admin9" class="collapse">{items}</ul>', 'template' => '<a  data-toggle="collapse"  data-target="#admin9" href="javascript:;"  >{label}</a>', 'label' => 'ASSIGNMENTS', 'url' => ['#'], 'items' => [
                            ['label' => 'Graded Assignments', 'url' => ['student/leadershipassignment', 'tag' => 'stdAsg1'],
                                'items' => [
                                    ['label' => 'Leadership', 'url' => ['student/leadershipassignment', 'tag' => 'stdAsg01']],
                                    ['label' => 'Vocation', 'url' => ['student/vocationassignment', 'tag' => 'stdAsg02']],
                                ]
                            ],
                            ['label' => 'Submit Assignments', 'url' => ['student/submitassignment', 'tag' => 'stdAsg2']],
                        ],
                            'visible' => ($role == 'student' ? true : false),
                        ],
                        ['submenuTemplate' => '<ul id="admin6" class="collapse">{items}</ul>', 'label' => 'FEEDBACK', 'url' => ['student/ecoursesurvey'],
                            'visible' => ($role == 'admin' || $role == 'student' || $role == 'instructor' ? true : false),
                        ],
                        ['submenuTemplate' => '<ul id="admin7" class="collapse">{items}</ul>', 'label' => 'SUPPORT', 'url' => ['student/supportassignment'],
                            'visible' => ($role == 'admin' || $role == 'student' || $role == 'instructor' ? true : false),
                        ],                        
                    ],
                ]);
                ?>

                <!-- /.navbar-collapse -->
            </nav>
            <div id="page-wrapper">
                <!-- Top Menu Items -->
                <div class="nav navbar-right top-nav">
                    <b>Welcome</b><span class="login-name"> <?php echo Yii::$app->user->identity->username ?></span><br>
                    <a href="#"><i></i>edit profile |</a><a href="<?php echo Yii::$app->urlManager->createUrl('site/logout') ?>"><i></i> logout</a>
                </div>

                <div class="container-fluid">


                    <?= $content ?>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->


        <!-- jQuery -->
        <script src="<?php echo $this->theme->getUrl('/js/jquery.js'); ?>"></script>


        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo $this->theme->getUrl('/js/bootstrap.min.js'); ?>"></script> 
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script src="<?php echo $this->theme->getUrl('/js/custom.js'); ?>"></script>
    </body>

</html>

<script>

    $(document).ready(function () {
        /*$('.nav li').click(function(){
         var data = $(this).find("a").removeClass("collapsed");
         $(this).find("a").attr("aria-expanded","true");
         //$(".nav li ul").addClass("in");
         $(this).find("ul").addClass("in");
         },function(){
         var data = $(".nav li").addClass("collapsed");
         $(".nav li").attr("aria-expanded","false");
         //$(".nav li ul").removeClass("in");
         $(this).find("ul").removeClass("in");
         });*/

        $('.navbar-nav').on('click', 'li', function () {
            $('.collapse.in').collapse('hide');
            $('.navbar-nav li').removeClass('active');
        });

        var selecteditem = localStorage.getItem('selecteitem');
        if ($('.nav li').hasClass('active')) {
            $('.nav .active ul').removeClass('collapse');
            $('.nav .active ul').addClass('collapse in');
        }

        var minh = $(window).height();
        $('.navbar-nav').css('min-height', minh);
        $('.navbar-nav').css('min-height', $('#page-wrapper').height());

        /*$(".top-ul li").click(function () {
         var id = $(this).attr("id");
         
         $('.top-ul li').removeClass("activate");
         $('#' + id).addClass("activate");
         localStorage.setItem("selecteitem", id);
         });*/
        /*open select dialog box*/
        $("#change_img").click(function (e) {
            $("#profile_img").trigger("click");
            e.preventDefault();
        });
        /*Show and Hide the inline-menu*/
        $(".navbar-nav > li > ul > li").hover(function () {
            $(this).addClass("highlight-menu");
            $(this).find("ul").parent('li').addClass("highlight-menu");
            $(this).find("ul").show();
            $(this).find("ul").show();
            var position = $(this).position();

            $(this).find("ul").css("top", Math.round(position.top) + "px");
        }, function () {
            $(this).removeClass("highlight-menu");
            $(this).find("ul").hide();
        });

        $(".navbar-nav > li > ul > li > ul").css('display', 'none');

    });
</script>