<div class="config">
    <div class="top-text">
        <div class="col-md-12">
            <h4>Digital Media Technology</h4>
            <div class="col-sm-4 noLeftPaddingMargin removeBtnFloat">
                <p class="paragrahNoBottonMargin"><strong>Enrolled</strong>: XX-MO-XX</p>
                <p class="paragrahNoBottonMargin"><strong>Graduation</strong>: XX-MO-XX</p>
                <p class="paragrahNoBottonMargin"><strong>Quarter</strong>: Fall, Winter, Spring, Summer</p>
                <p class="paragrahNoBottonMargin"><strong>Counselor</strong>: Enter Name</p>
            </div>
            <div class="col-sm-3 col-sm-offset-4" style="text-align: center; font-size: 17px !important;">
                <div id="smallBoxex">
                    <ul class="margin-bottom-13px"><span class="pull-left" style="margin-right: 10px; margin-top: 13px;">Legend:</span>
                        <li style="border: 1px solid #009345;"></li>
                        <li style="background-color: #146734;"></li>
                        <li style="background-color: #eec41a;"></li>
                        <li style="background-color: #990000;"></li>
                    </ul>
                </div>
                <p>You may <strong> print </strong> or <strong> download </strong>
                    program documents </p>

                <div class="form-group">
                    <div class="row" style="margin-left: 54px;">
                        <input type="submit" class="btn btn-danger pull-left" value="Print">
                        <input type="submit" class="btn btn-danger pull-left"  style="margin-left: 20px;" value="Download">
                    </div>
                </div>
            </div>

        </div>

    </div>  

    <div class="col-md-12"> 
        <h4 class="text-left noLeftPaddingMargin removeBtnFloat"><strong>eCourses</strong></h4>
        <div class="courses-listing">
            <!--
            * Apply classes to change course's status.
            * completed
            * inComplete
            * inProgress
            * notStarted
            -->

            <div class="wrap-course">
                <div class="course-status dmt-ecourse-box">
                    <p>not started</p>
                </div>
                <span>DMT100</span>
            </div>

            <div class="wrap-course">
                <div class="course-status dmt-ecourse-box">
                    <p>not started</p>
                </div>
                <span>DMT101</span>
            </div>

            <div class="wrap-course">
                <div class="course-status dmt-ecourse-box">
                    <p>not started</p>
                </div>
                <span>DMT102</span>
            </div>

            <div class="wrap-course">
                <div class="course-status dmt-ecourse-box">
                    <p>in complete</p>
                </div>
                <span>DMT103</span>
            </div>

            <div class="wrap-course">
                <div class="course-status dmt-ecourse-box">
                    <p>in progress</p>
                </div>
                <span>DMT104</span>
            </div>

            <div class="wrap-course">
                <div class="course-status dmt-ecourse-box">
                    <p>not started</p>
                </div>
                <span>DMT105</span>
            </div>

            <div class="wrap-course">
                <div class="course-status dmt-ecourse-box">
                    <p>completed</p>
                </div>
                <span>DMT106</span>
            </div>

            <div class="wrap-course">
                <div class="course-status dmt-ecourse-box">
                    <p>incomplete</p>
                </div>
                <span>DMT107</span>
            </div>

            <div class="wrap-course">
                <div class="course-status dmt-ecourse-box">
                    <p>in progress</p>
                </div>
                <span>DMT108</span>
            </div>

            <div class="wrap-course">
                <div class="course-status dmt-ecourse-box">
                    <p>not started</p>
                </div>
                <span>DMT109</span>
            </div> 
        </div> 
    </div>

    <div class="col-md-12 fiftyMarginTopSide">
        <div id="centeredmenu" class="menuWithAllSideBorder">
            <ul class="top-ul">
                <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/dmtdescription') ?>">Description</a></li>
                <li id="li2" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/dmtprogress') ?>">Progress</a></li>

            </ul>
        </div>
        <div class="col-md-12" style="border: 2px solid #999999;" >
            <div class="row"> 
                <div class="col-md-9 pLineHeight"> 
                    <div class="row">
                        <p class="graph-p">Progress Report by eCourse</p>
                        <div class="col-md-12"  id="dmt_progress" style="height: 400px;"> 
                            <div class="row">

                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-md-2 pLineHeight">
                    <div style="border: 2px solid #009345;text-align: left; padding: 20px;">
                        Grade(L): A-<br/>
                        Grade(L): 91.94<br/>
                        GPA: 3.33<br/>
                        <p>&nbsp;</p><br/>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="col-md-12">
        <div class="noLeftPaddingMargin margingBottom30  removeBtnFloat">
            <p>Letter Grade:  Grade (L); Percent Grade: Grade (%); Grade Point Average (GPA) </p>
        </div>
    </div>
</div>


