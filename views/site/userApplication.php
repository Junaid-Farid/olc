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
            <h4>Edit Account</h4>
            <p class="">Edit and save configured account.</p>

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
        </div>
    </div>

    <div class="col-md-12 margin-bottom-30">
        <div class="col-md-4">
            <form class="form-horizontal" role="form" id="">

                <div class="form-group">
                    <div class="col-sm-8 col-md-offset-4">
                        <h4 class="h-4">Personal Information</h4>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">First:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="First Name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Last:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Middle:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="Middle Name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">SSN:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="SSN #">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Address:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="12 Davdiv Streat">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">City:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="New York">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">State:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="Spain">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Zip:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="1245009">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Country:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="Spain">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Phone:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="1209787">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Email:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="Email@yahoo.com">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">DOB:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="15-Aug-2015">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Gender:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="Male">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">M-Status:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="Single">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Language:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="English">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Fluency:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="Good">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <form class="form-horizontal" role="form" id="">

                <div class="form-group">
                    <div class="col-sm-8 col-md-offset-4">
                        <h4 class="h-4">Education Information</h4>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">School:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System Auto Populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Address:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System Auto Populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">City:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System Auto Populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">State:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System Auto Populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Zip:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System Auto Populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Country:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System Auto Populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Start Date:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System Auto Populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Graduation:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System Auto Populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4 no-left-padding" for="">Graduation Date:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System Auto Populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Counselor:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System Auto Populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Email:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System Auto Populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Phone:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System Auto Populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Fax:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System Auto Populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Transcript:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System Auto Populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">HSE Diploma:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System Auto Populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">HSE Test:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System Auto Populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">HSE Scores:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System Auto Populated">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <form class="form-horizontal" role="form" id="">             
                <div class="form-group">
                    <div class="col-sm-8 col-md-offset-4">
                        <h4 class="h-4">Program Interest</h4>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Leadership:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System Auto Populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Vocation:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System Auto Populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Quater:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System Auto Populated">
                    </div>
                </div>
                <div class="form-group load">
                    <div class="col-sm-9 col-sm-offset-3">
                        <label>Archive</label> <input type="checkbox" class="checkbox-inline" />
                        <label>Select to archive account</label>  
                        <button type="submit" class="btn btn-danger">Update</button>
                    </div>
                </div>



            </form>
        </div>
    </div>
</div><!-- config div end-->
