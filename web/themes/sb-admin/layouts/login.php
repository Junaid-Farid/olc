
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
        <link href="<?php echo $this->theme->baseUrl.'/css/bootstrap.min.css'; ?>" rel="stylesheet" >

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

    <body class="login-page">

        <div id="wrapper" style="padding-left: 0px">

            <!-- Navigation -->
           
            <div id="page-wrapper">

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
