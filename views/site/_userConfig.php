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
            <h4>Edit Program</h4>
            <p class="">Edit and save configured programs for user accounts.</p>

        </div>
    </div>
 <div class="col-md-12">
        <div id="centeredmenu">
                 <ul class="top-ul">
                <li id="li1" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/configure') ?>">Loud</a></li>
                <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/configaccount') ?>">Configure</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/userconfig') ?>">User</a></li>
                <li id="li4"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/userapplication') ?>">Archive</a></li>

            </ul>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-3 col-md-offset-9">
            <div class="btn-right">
                <input type="button" class="btn btn-danger" value="save">
                
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-5 d-set">

            <form class="form-horizontal" role="form" id="frm1">
                <h4  class="h-4">User Account</h4>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">User Name:</label>
                    <div class="col-sm-8">
                        <select class="form-control">
                            <option>Select One</option>
                            <option>Mustard</option>
                            <option>herry</option>
                            <option>Relish</option>
                        </select>
                    </div>
                </div>               
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">User ID:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" value="CE8748383" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Email:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" value="John@yahoo.com" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Role:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" value="Administrator" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">First Name:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" value="John" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Last Name:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" value="vixky" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Quarter:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" value="Q3" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Year:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" value="2015" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for=""> Load data:</label>
                    <div class="col-sm-8">
                        <input type="checkbox" class="checkbox-inline" /><span>Select checkbox </span> <button type="submit" class="btn btn-danger">Load</button>
                    </div>
                </div>


            </form>
        </div>

        <div class="col-md-5 col-md-offset-2">

            <form class="form-horizontal" role="form">
                <h4  class="h-4">Program Scheduled</h4>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Orientation:</label>
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
                    <label class="control-label col-sm-4" for="">College Prep:</label>
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
                    <label class="control-label col-sm-4" for="">Leadership:</label>
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
                    <label class="control-label col-sm-4" for="">Vocation:</label>
                    <div class="col-sm-8">
                        <select class="form-control">
                            <option>Select One</option>
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select>
                    </div>
                </div>

            </form>

            <form class="form-horizontal" role="form">
                <h4 class="h-4">Program Facilitated</h4>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Orientation:</label>
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
                    <label class="control-label col-sm-4" for="">College Prep:</label>
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
                    <label class="control-label col-sm-4" for="">Leadership:</label>
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
                    <label class="control-label col-sm-4" for="">Vocation:</label>
                    <div class="col-sm-8">
                        <select class="form-control">
                            <option>Select One</option>
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select>
                    </div>
                </div>

            </form>
        </div>

    </div>
  

    <div class="col-md-12 margin-bottom-30">
        <div class="col-md-4">
            <form class="form-horizontal" role="form" id="">

                <div class="form-group">
                    <div class="col-sm-8 col-md-offset-4">
                        <h4 class="h-4">eCourse Grade</h4>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">%Grade:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">L-Grade:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">C-Hrs:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">H-Credits:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">GPA:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <form class="form-horizontal" role="form" id="">

                <div class="form-group">
                    <div class="col-sm-8 col-md-offset-4">
                        <h4 class="h-4">eModules Grade</h4>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Content:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Exercise:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Media:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">R-Time:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">A-Time:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Quizzes:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Pre-Test:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Post-Test:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">EM %Grade:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">EM L-Grade:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">EM GPA:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <form class="form-horizontal" role="form" id="">             
                <div class="form-group">
                    <div class="col-sm-8 col-md-offset-4">
                        <h4 class="h-4">eClass Grade</h4>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Sessions:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Activities:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Projects:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Exams:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Forums:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">EC %Grade:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">EC L-Grade:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">EC GPA:</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
            </form>
        </div>
    </div>



</div><!-- config div end-->
