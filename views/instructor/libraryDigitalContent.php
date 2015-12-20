<?php
$this->title = 'OLC | Dashbord';
?>
<div class="top-text">
    <div class="col-md-12">
        <h4>Dashboard</h4>
        <p class="d-p">This is the home page for your administrator profile.Access any thing learning resources and other administrative items for student and faculty accounts.</p>

    </div>
</div>  
<div class="col-md-12">
    <div id="centeredmenu">
        <ul class="top-ul">
            <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/instructor') ?>">Main</a></li>
            <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/profile') ?>">Profile</a></li>
            <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/policies') ?>">Policies</a></li>
            <li id="li4"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/courseware') ?>">Courseware</a></li>
            <li id="li5" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/libraries') ?>">Libraries</a></li>
            <li id="li6"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/assessments') ?>">Assessments</a></li>
        </ul>
    </div>
</div>


<div class="col-md-12 dashboard">
    <div class="col-md-12">
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <div class="library-filterArea">
                <form class="form-horizontal" role="form" id="">
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">Program</label>
                        <div class="col-sm-8 col-md-6">
                            <select class="">
                                <option>Select One</option>
                                <option>Mustard</option>
                                <option>herry</option>
                            </select>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">eClass</label>
                        <div class="col-sm-8 col-md-6">
                            <select class="">
                                <option>Select One</option>
                                <option>Mustard</option>
                                <option>herry</option>
                            </select>
                        </div>
                        <div class="col-sm-2 kill-padding">
                            <button type="submit" class="btn btn-danger btn-small">Load</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="col-md-12">
        <div class="library-desp">
            <p><b>Library:</b> Student Orientation</p>
            <p><b>eClass</b> SO102 Exemplary Leadership Success</p>
        </div>
    </div>
    
    <div class="col-md-12 kill-padding">
        <div class="col-md-6">
            <h5 class="d-heading">Documentation</h5>
            <div class="wrapper-libraries">
                <table class="table">
                    <tr>
                        <td>Handout</td>
                        <td><a href="#">ELS Online &#40;eModule&#41;</a></td>
                    </tr>
                    <tr>
                        <td>Project</td>
                        <td><a href="#">Exemplary Leadership Success</a></td>
                    </tr>
                    <tr>
                        <td>Assignment</td>
                        <td><a href="#">Knowledge Exam</a></td>
                    </tr>
                </table>
            </div>
        </div>
    
        <div class="col-md-6">
            <h5 class="d-heading">Media</h5>
            <div class="wrapper-libraries">
                <table class="table">
                    <tr>
                        <td>Video</td>
                        <td><a href="#">ELS Online &#40;eClass&#41;</a></td>
                    </tr>
                    <tr>
                        <td>Audio</td>
                        <td><a href="#">Exemplary Leadership Success &#40;FG&#41;</a></td>
                    </tr>
                    <tr>
                        <td>Demonstration</td>
                        <td><a href="#">Exemplary Leadership Success &#40;SG&#41;</a></td>
                    </tr>
                    <tr>
                        <td>Tutorial</td>
                        <td><a href="#">Being Responsible</a></td>
                    </tr>
                    <tr>
                        <td>Practice</td>
                        <td><a href="#">Exercising Authority</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
</div>

