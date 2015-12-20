<div class="config">
    <div class="top-text">
        <div class="col-md-12">
            <h4>Student Orientation</h4>
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
                <div class="course-status notStarted">
                    <p>not started</p>
                </div>
                <span>SO100</span>
            </div>

            <div class="wrap-course">
                <div class="course-status notStarted">
                    <p>not started</p>
                </div>
                <span>SO101</span>
            </div>

            <div class="wrap-course">
                <div class="course-status notStarted">
                    <p>not started</p>
                </div>
                <span>SO102</span>
            </div>

        </div>
    </div>

    <div class="col-md-12 fiftyMarginTopSide margingBottom30">
        <div id="centeredmenu" class="menuWithAllSideBorder">
            <ul class="top-ul">
                <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/studentdescription') ?>">Description</a></li>
                <li id="li2" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/studentprogress') ?>">Progress</a></li>

            </ul>
        </div>
        <!-- for graph image apply this css class =>> graphImage--->
        <div class="col-md-12" style="border: 2px solid #999999;" >
            <div class="row"> 
                <div class="col-md-9 pLineHeight"> 
                    <div class="row">
                        <p class="graph-p">Progress Report by eCourse</p>
                        <div class="col-md-12"  id="studentProgress" style="height: 400px;"> 
                            <div class="row">
                                
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-md-2 pLineHeight">
                    <div style="border: 2px solid #009345;text-align: left; padding: 20px;">
                        Grade(L): A-<br/>
                        Grade(%): 91.94<br/>
                        GPA: 3.33<br/>
                        <p>&nbsp;</p><br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="noLeftPaddingMargin margingBottom30  removeBtnFloat" style="margin-top: -23px; padding-top: 0px;">
            <p>Letter Grade: Grade (L); Percent Grade: Grade (%); Grade Point Average (GPA)</p>
        </div>
    </div>
</div>


