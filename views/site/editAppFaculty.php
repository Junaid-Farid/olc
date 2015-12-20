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
            <h4>Edit Application</h4>
            <p class="d-p">Edit and save configured account.</p>

        </div>
    </div>
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/configureapplications') ?>">Applications</a></li>
                <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/configureprograms') ?>">Programs</a></li>
                <li id="li3" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('users/index') ?>">Users</a></li>
                <li id="li4"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/configurearchive') ?>">Archive</a></li>
            </ul>
            <div class="pull-right">
                <span class="boldHeading">User ID:</span> CA1457888021 
            </div>
        </div>
    </div>

    <div class="col-md-12 margin-bottom-30">
        <div class="col-md-4">
            <form class="form-horizontal" role="form" id="">
                <div class="wrapper-manualEntry">
                    <div class="form-group">
                        <div class="col-sm-8 col-md-offset-4">
                            <h4 class="h-4">Personal Information</h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">First</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Last</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Middle</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="Middle Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">SSN</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="SSN #">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Address</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="12 Davdiv Streat">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">City</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="New York">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">State</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Select One</option>
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Zip</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="1245009">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Country</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Select One</option>
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Phone</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="1209787">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="Email@yahoo.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">DOB</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="SSN #">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Gender</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="Male">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">M-Status</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="Single">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Language</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="English">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Fluency</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="Good">
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!--Education Information-->
        <div class="col-md-4">
            <form class="form-horizontal" role="form" id="">
                <div class="wrapper-manualEntry">
                    <div class="form-group">
                        <div class="col-sm-8 col-md-offset-4">
                            <h4 class="h-4">Education Information</h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">School</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Address</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">City</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">State</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Select One</option>
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Zip</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Country</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Select One</option>
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Start Date</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="DOB">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Graduated</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 no-left-padding" for="">Graduation Date</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Degree</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 no-left-padding no-right-padding padding-right-13px" for="">Program of Study</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">URL</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Phone</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Transcript</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                        <div class="col-sm-2">
                            <input type="button" class="btn btn-danger btn-small" value="Upload">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Resume</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                        <div class="col-sm-2">
                            <input type="button" class="btn btn-danger btn-small" value="Upload">
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!--Current Employment-->
        <div class="col-md-4">
            <form class="form-horizontal" role="form" id="">   
                <div class="wrapper-manualEntry">
                    <div class="form-group">
                        <div class="col-sm-8 col-md-offset-4">
                            <h4 class="h-4">Current Employment</h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Employer</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Address</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">City</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">State</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">                    
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Zip</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Country</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Job Role</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Supervisor</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Phone</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                </div>
            </form>

            <!--Program Interest-->
            <form class="form-horizontal" role="form" id="">   
                <div class="wrapper-manualEntry">
                    <div class="form-group">
                        <div class="col-sm-8 col-md-offset-4">
                            <h4 class="h-4">Program Interest</h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Interest 1</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Interest 2</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Interest 3</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Program 1</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Program 2</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Program 3</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Planned 1</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Planned 2</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Planned 3</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Curricula Owned</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Format</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Product 1</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Product 2</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Product 3</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="System Auto Populated">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="col-md-12">
        <div class="load">
            <div class="row">
                <div class="form-group">
                    <div class="pull-right">
                        <label>Archive</label> 
                        <input type="checkbox" class="checkbox-inline" />
                        <label>Select to archive account</label>  
                    </div>
                </div>
            </div>
            <div class="row">
                <button type="submit" class="btn btn-danger">Update</button>
            </div>
        </div>
    </div>

</div><!-- config div end-->
