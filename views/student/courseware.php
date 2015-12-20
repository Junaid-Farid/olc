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
            <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/student') ?>">Main</a></li>
            <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/profile') ?>">Profile</a></li>
            <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/policies') ?>">Policies</a></li>
            <li id="li4" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/courseware') ?>">Courseware</a></li>
            <li id="li5"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/libraries') ?>">Libraries</a></li>
            <li id="li6"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/assessments') ?>">Assessments</a></li>
        </ul>
    </div>
</div>


<div class="col-md-12 dashboard">
    <div class="col-md-12">
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <div class="courseware-filterArea">
                <form class="form-horizontal" role="form" id="">
                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">Program</label>
                        <div class="col-sm-6">
                            <select class="">
                                <option>Select One</option>
                                <option>Mustard</option>
                                <option>herry</option>
                            </select>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4 kill-padding" for="">eCourse</label>
                        <div class="col-sm-6">
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
        <div class="courseware-desp">
            <p><b>Program:</b> Student Orientation</p>
            <p><b>eCourse:</b> SO102 Exemplary Leadership Success</p>
        </div>
    </div>
    
    <div class="col-md-12 kill-padding">
        <div class="col-md-6">
            <div class="courseware-title">
                <p><b>eModule:</b> Exemplary Leadership Success</p>
            </div>
            <div class="wrapper-courseware">
                <table class="table">
                    <tr>
                        <td>Outline</td>
                        <td><a href="#">ELS Online &#40;eModule&#41;</a></td>
                    </tr>
                    <tr>
                        <td>eModule</td>
                        <td><a href="#">Exemplary Leadership Success</a></td>
                    </tr>
                    <tr>
                        <td>Knowledge Exam</td>
                        <td><a href="#">Knowledge Exam</a></td>
                    </tr>
                </table>
            </div>
        </div>
    
        <div class="col-md-6">   
            <div class="courseware-title">
                <p><b>eClass:</b> ELS Practicum</p>
            </div>
            <div class="wrapper-courseware">
                <table class="table">
                    <tr>
                        <td>Outline</td>
                        <td><a href="#">ELS Online &#40;eClass&#41;</a></td>
                    </tr>
                    <tr>
                        <td>Facilitator Guide</td>
                        <td><a href="#">Exemplary Leadership Success &#40;FG&#41;</a></td>
                    </tr>
                    <tr>
                        <td>Student Guide</td>
                        <td><a href="#">Exemplary Leadership Success &#40;SG&#41;</a></td>
                    </tr>
                    <tr>
                        <td>Session 1</td>
                        <td><a href="#">Being Responsible</a></td>
                    </tr>
                    <tr>
                        <td>Section 2</td>
                        <td><a href="#">Exercising Authority</a></td>
                    </tr>
                    <tr>
                        <td>Section 3</td>
                        <td><a href="#">Managing Resources</a></td>
                    </tr>
                    <tr>
                        <td>Section 4</td>
                        <td><a href="#">Being Accountable</a></td>
                    </tr>
                    <tr>
                        <td>Section 5</td>
                        <td><a href="#">Coaching Session &#40;Part 1&#41;</a></td>
                    </tr>
                    <tr>
                        <td>Section 6</td>
                        <td><a href="#">Coaching Session &#40;Part 2&#41;</a></td>
                    </tr>
                    <tr>
                        <td>Section 7</td>
                        <td><a href="#">Performance Exam</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
</div>

