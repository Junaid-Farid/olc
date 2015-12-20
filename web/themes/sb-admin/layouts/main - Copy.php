
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
                echo Menu::widget([
                    'options' => ['class' => 'nav navbar-nav'],
                    'activeCssClass' => 'active',
                    'activateParents' => true,
                    'encodeLabels' => false,
                    'items' => [
                        // Important: you need to specify url as 'controller/action',
                        // not just as 'controller' even if default action is used.
                        ['label' => '', 'template' => '<a id="img-logo" href="' . Yii::$app->getUrlManager()->createUrl('site/dashboard') . '"><img src="' . Yii::$app->request->baseUrl . '/images/dashboard_logo.png"></a>'],
                        //['label' => 'DASHBOARD', 'url' => ['site/dashboard']],
                        // 'Products' menu item will be selected as long as the route is 'product/index'
                        ['submenuTemplate' => '<ul id="dashboard" class="collapse">{items}</ul>', 'template' => '<a  data-toggle="collapse"  data-target="#dashboard" href="javascript:;"  >{label}</a>', 'label' => 'DASHBOARD', 'url' => ['#'], 'items' => [
                                ['label' => 'Administrator', 'url' => ['site/dashboard', 'tag' => 'ad'],
                                    'items' => [
                                        ['label' => 'Main', 'url' => ['site/dashboard', 'tag' => 'adb1']],
                                        ['label' => 'Profile', 'url' => ['site/profile', 'tag' => 'adb2']],
                                        ['label' => 'Policies', 'url' => ['site/policies', 'tag' => 'adb3']],
                                        ['label' => 'Courseware', 'url' => ['site/courseware', 'tag' => 'adb4']],
                                        ['label' => 'Libraries', 'url' => ['site/libraries', 'tag' => 'adb5']],
                                        ['label' => 'Assessments', 'url' => ['site/assessments', 'tag' => 'adb6']],
                                    ]
                                ],
                                ['label' => 'Instructor', 'url' => ['site/instructor', 'tag' => 'id'],
                                    'items' => [
                                        ['label' => 'Main', 'url' => ['site/instructor', 'tag' => 'iddb1']],
                                        ['label' => 'Profile', 'url' => ['site/profile', 'tag' => '1ddb2']],
                                        ['label' => 'Policies', 'url' => ['site/policies', 'tag' => 'iddb3']],
                                        ['label' => 'Courseware', 'url' => ['site/courseware', 'tag' => 'iddb4']],
                                        ['label' => 'Libraries', 'url' => ['site/libraries', 'tag' => 'iddb5']],
                                        ['label' => 'Assessments', 'url' => ['site/assessments', 'tag' => 'iddb6']],
                                    ]
                                ],
                                ['label' => 'Student', 'url' => ['site/student', 'tag' => 'sd'],
                                    'items' => [
                                        ['label' => 'Main', 'url' => ['site/student', 'tag' => 'sddb1']],
                                        ['label' => 'Profile', 'url' => ['site/profile', 'tag' => 'sddb2']],
                                        ['label' => 'Policies', 'url' => ['site/policies', 'tag' => 'sddb3']],
                                        ['label' => 'Courseware', 'url' => ['site/courseware', 'tag' => 'sddb4']],
                                        ['label' => 'Libraries', 'url' => ['site/libraries', 'tag' => 'sddb5']],
                                        ['label' => 'Assessments', 'url' => ['site/assessments', 'tag' => 'sddb6']],
                                    ]
                                ],
                            ]],
                        ['submenuTemplate' => '<ul id="admin" class="collapse">{items}</ul>', 'template' => '<a  data-toggle="collapse"  data-target="#admin" href="javascript:;"  >{label}</a>', 'label' => 'ADMINISTRATION', 'url' => ['#'], 'items' => [
                                ['label' => 'Configure Accounts', 'url' => ['site/configureapplications', 'tag' => 'ad1'],
                                    'items' => [
                                        ['label' => 'Application', 'url' => ['site/configureapplications', 'tag' => 'confAcc1']],
                                        ['label' => 'Programs', 'url' => ['site/configureprograms', 'tag' => 'confAcc2']],
                                        ['label' => 'Users', 'url' => ['users/index', 'tag' => 'confAcc3']],
                                        ['label' => 'Archive', 'url' => ['site/configurearchive', 'tag' => 'confAcc4']],
                                    ]
                                ],
                                ['label' => 'Configure Assignments', 'url' => ['site/assignmentcreate', 'tag' => 'ad7']],
                                ['label' => 'Configure Dashboard', 'url' => ['site/dashboardcreate', 'tag' => 'ad2']],
                                ['label' => 'Configure eCourses', 'url' => ['site/ecoursecreate', 'tag' => 'ad5']],
                                ['label' => 'Configure My Account', 'url' => ['site/myaccountcreate', 'tag' => 'ad3']],
                                ['label' => 'Configure FAQs', 'url' => ['site/faqcreate', 'tag' => 'ad11']],
                                ['label' => 'Configure Feedback', 'url' => ['site/feedbackedit', 'tag' => 'ad9']],
                                ['label' => 'Configure Programs', 'url' => ['site/programcreate', 'tag' => 'ad4']],
                                ['label' => 'Configure Transcript', 'url' => ['site/transcriptcreate', 'tag' => 'ad6']],
                                ['label' => 'Configure Forums', 'url' => ['site/emptypage', 'tag' => 'ad8']],
                                ['label' => 'Configure support', 'url' => ['site/emptypage', 'tag' => 'ad10']],
                            ]],
                        ['submenuTemplate' => '<ul id="admin1" class="collapse">{items}</ul>', 'template' => '<a  data-toggle="collapse"  data-target="#admin1" href="javascript:;">{label}</a>', 'label' => 'MY ACCOUNT', 'url' => ['#'], 'items' => [
                                ['label' => 'Invoices', 'url' => ['site/emptypage', 'tag' => 'ac1']],
                                ['label' => 'myEduPlan Summary', 'url' => ['site/emptypage', 'tag' => 'ac2']],
                                ['label' => 'Payment History', 'url' => ['site/emptypage', 'tag' => 'ac3']],
                                ['label' => 'Tax Forms', 'url' => ['site/emptypage', 'tag' => 'ac4']],
                            ]],
                        ['submenuTemplate' => '<ul id="admin2" class="collapse">{items}</ul>', 'template' => '<a  data-toggle="collapse"  data-target="#admin2" href="javascript:;"  >{label}</a>', 'label' => 'PROGRAMS', 'url' => ['#'], 'items' => [
                                ['label' => 'College Readiness', 'url' => ['site/emptypage', 'tag' => 'pr1']],
                                ['label' => 'Orientation', 'url' => ['site/emptypage', 'tag' => 'pr2']],
                                ['label' => 'Leadership', 'url' => ['site/emptypage', 'tag' => 'pr3']],
                                ['label' => 'Vocation', 'url' => ['site/emptypage', 'tag' => 'pr4'],
                                    'items' => [
                                        ['label' => 'Business Development', 'url' => ['site/dashboard', 'tag' => 'pr5']],
                                        ['label' => 'Digital Media', 'url' => ['site/dashboard', 'tag' => 'pr6']],
                                        ['label' => 'Insstructional Design', 'url' => ['site/dashboard', 'tag' => 'pr7']],
                                        ['label' => 'Miltimedia & Gaming', 'url' => ['site/dashboard', 'tag' => 'pr8']],
                                        ['label' => 'Web Design', 'url' => ['site/dashboard', 'tag' => 'pr9']],
                                    ]
                                ],
                            ]],
                        ['submenuTemplate' => '<ul id="admin3" class="collapse">{items}</ul>', 'template' => '<a  data-toggle="collapse"  data-target="#admin3" href="javascript:;"  >{label}</a>', 'label' => 'eCOURSES', 'url' => ['#'], 'items' => [
                                ['label' => 'eCourses in Progress', 'url' => ['site/emptypage', 'tag' => 'ec1']],
                                ['label' => 'eCourses Completed', 'url' => ['site/emptypage', 'tag' => 'ec2']],
                                ['label' => 'eCourses in Facilitation', 'url' => ['site/emptypage', 'tag' => 'ec3']],
                                ['label' => 'eCourses Facilitated', 'url' => ['site/emptypage', 'tag' => 'ec4']],
                            ]],
                        ['submenuTemplate' => '<ul id="admin4" class="collapse">{items}</ul>', 'template' => '<a  data-toggle="collapse"  data-target="#admin4" href="javascript:;"  >{label}</a>', 'label' => 'TRANSCRIPT', 'url' => ['#'], 'items' => [
                                ['label' => 'Unofficial Transcript', 'url' => ['site/emptypage', 'tag' => 'tr1']],
                                ['label' => 'Official Transcript', 'url' => ['site/emptypage', 'tag' => 'tr2']],
                            ]],
                        ['submenuTemplate' => '<ul id="admin5" class="collapse">{items}</ul>', 'template' => '<a  data-toggle="collapse"  data-target="#admin5" href="javascript:;"  >{label}</a>', 'label' => 'ASSIGNMENTS', 'url' => ['#'], 'items' => [
                                ['label' => 'Grade Assignments', 'url' => ['site/emptypage', 'tag' => 'ass1']],
                                ['label' => 'Submit Assignments', 'url' => ['site/emptypage', 'tag' => 'ass2']],
                                ['label' => 'Graded Assignments', 'url' => ['site/emptypage', 'tag' => 'ass3']],
                            ]],
                        ['submenuTemplate' => '<ul id="admin6" class="collapse">{items}</ul>', 'template' => '<a  data-toggle="collapse"  data-target="#admin6" href="javascript:;"  >{label}</a>', 'label' => 'FEEDBACK', 'url' => ['#'], 'items' => [
                                ['label' => 'eCourse Survey', 'url' => ['site/emptypage', 'tag' => 'fb1']],
                                ['label' => 'Instructor Survey', 'url' => ['site/emptypage', 'tag' => 'fb2']],
                                ['label' => 'Program Survey', 'url' => ['site/emptypage', 'tag' => 'fb3']],
                                ['label' => 'Employer Project Survey', 'url' => ['site/emptypage', 'tag' => 'fb4']],
                                ['label' => 'Technology Survey', 'url' => ['site/emptypage', 'tag' => 'fb5']],
                            ]],
                        ['submenuTemplate' => '<ul id="admin7" class="collapse">{items}</ul>', 'template' => '<a  data-toggle="collapse"  data-target="#admin7" href="javascript:;"  >{label}</a>', 'label' => 'SUPPORT', 'url' => ['#'], 'items' => [
                                ['label' => 'Assignment', 'url' => ['site/emptypage', 'tag' => 'sp1']],
                                ['label' => 'Email', 'url' => ['site/emptypage', 'tag' => 'sp2']],
                                ['label' => 'FAQs', 'url' => ['site/emptypage', 'tag' => 'sp3']],
                                ['label' => 'Live Chat', 'url' => ['site/emptypage', 'tag' => 'sp4']],
                                ['label' => 'Forums', 'url' => ['site/emptypage', 'tag' => 'sp5']],
                            ]],
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
    </body>

</html>

<script>

    $(document).ready(function () {
        var selecteditem = localStorage.getItem('selecteitem');
        if (selecteditem != null) {
            $('.top-ul li').removeClass("activate");
            $('#'+selecteditem).addClass("activate");
        }
        
        if ($('.nav li').hasClass('active')) {
            $('.nav .active ul').removeClass('collapse');
            $('.nav .active ul').addClass('collapse in');
        }
        var minh = $(window).height();
        $('.navbar-nav').css('min-height', minh);
        $('.navbar-nav').css('min-height', $('#page-wrapper').height());

        $(".top-ul li").click(function () {
            var id = $(this).attr("id");
           
            $('.top-ul li').removeClass("activate");
            $('#'+id).addClass("activate");
            localStorage.setItem("selecteitem", id);
        });
        /*open select dialog box*/
        $("#change_img").click(function(e){
            $("#profile_img").trigger("click");
            e.preventDefault();
        });
        /*Show and Hide the inline-menu*/
        $(".navbar-nav > li > ul > li.inline-menu > a,.navbar-nav > li > ul > li.inline-menu > ul").hover(function(){
            $(".navbar-nav > li > ul > li.inline-menu").addClass("highlight-menu");
            $("#admin2 ul").show();
         },function(){
            $(".navbar-nav > li > ul > li.inline-menu").removeClass("highlight-menu");
            $("#admin2 ul").hide();
        });
        
        $(".navbar-nav > li > ul > li.db-item1, .navbar-nav > li > ul > li.db-item1 > ul").hover(function(){
            $(".navbar-nav > li > ul > li.db-item1").addClass("highlight-menu");
            $("#dashboard ul").show();
        },function(){
             $(".navbar-nav > li > ul > li.db-item1").removeClass("highlight-menu");
            $("#dashboard ul").hide();
        });
        
        $(".navbar-nav > li > ul > li > ul").hide();
        
    });
</script>