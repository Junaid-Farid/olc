<div class="config">
    <div class="top-text">
        <div class="col-md-12">
            <h4>PTL100: <span style="color: #2829A9">Live an Awakened Life</span></h4>
            <div class="col-sm-4 noLeftPaddingMargin removeBtnFloat">
                <p class="paragrahNoBottonMargin"><strong>Student Name</strong>: Joe Schmoe</p>
                <p class="paragrahNoBottonMargin"><strong>Student ID</strong>: CA50177211</p>
                <p class="paragrahNoBottonMargin"><strong>Instructor</strong>: T. Shinshuri, Ed.D.</p>
            </div>
            <div class="col-sm-4 noLeftPaddingMargin removeBtnFloat">
                <p class="paragrahNoBottonMargin"><strong>Start Date</strong>: XX-MO-XX</p>
                <p class="paragrahNoBottonMargin"><strong>End Date</strong>: XX-MO-XX</p>
                <p class="paragrahNoBottonMargin"><strong>eCourse Code</strong>: PTLEC100</p>
            </div>
        </div>

    </div>  
    <div class="col-md-12">
        <div class="col-md-8">
            <div class="row">
                <h4 class="text-left noLeftPaddingMargin removeBtnFloat"><strong>Learning Activities</strong></h4>
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
                        <span>Pre-Test</span>
                    </div>

                    <div class="wrap-course">
                        <div class="course-status dmt-ecourse-box">
                            <p>not started</p>
                        </div>
                        <span>eModule</span>
                    </div>

                    <div class="wrap-course">
                        <div class="course-status dmt-ecourse-box">
                            <p>not started</p>
                        </div>
                        <span>Knowledge Exam</span>
                    </div>

                    <div class="wrap-course">
                        <div class="course-status dmt-ecourse-box">
                            <p>not started</p>
                        </div>
                        <span>eClass</span>
                    </div>

                    <div class="wrap-course">
                        <div class="course-status dmt-ecourse-box">
                            <p>not started</p>
                        </div>
                        <span>Performance Exam</span>
                    </div>

                    <div class="wrap-course">
                        <div class="course-status dmt-ecourse-box">
                            <p>not started</p>
                        </div>
                        <span>Projects</span>
                    </div> 

                    <div class="wrap-course">
                        <div class="course-status dmt-ecourse-box">
                            <p>not started</p>
                        </div>
                        <span>OLC</span>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-3 pull-right" style=" width: 23%; padding-right: 30px;"> 
            <h4>Grading Scale</h4>
            <div style="border: 2px solid #009345; padding: 10px; text-align: left;">
                <p>eModule: 10%</p>
                <p>Knowledge Exams: 5%</p>
                <p>eClass: 20%</p>
                <p>Performance Exam: 5%</p>
                <p>Projects: 35%</p>
                <p>Forum: 25%</p>
            </div>

            <div id="smallBoxex">
                <ul><span class="pull-left" style="margin-right: 10px; margin-top: 13px;">Legend:</span>
                    <li style="border: 1px solid #009345;"></li>
                    <li style="background-color: #146734;"></li>
                    <li style="background-color: #eec41a;"></li>
                    <li style="background-color: #990000; margin-right: 0px;"></li>
                </ul>
            </div>
        </div>

    </div>

    <div class="col-md-12 fiftyMarginTopSide">
        <div id="centeredmenu" class="menuWithAllSideBorder">
            <ul class="top-ul">
                <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/progressemodule') ?>">eModule</a></li>
                <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/progressexams') ?>">Exams</a></li>
                <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/progresseclass') ?>">eClass</a></li>
                <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/progressprojects') ?>">Projects</a></li>
                <li id="li2" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/progressforum') ?>">Forum</a></li>
            </ul>
        </div>  
        <div class="col-md-12" style="border: 2px solid #999999;" >
            <div class="row"> 
                <div class="col-md-9 pLineHeight"> 
                    <div class="row">
                        <p class="graph-p">Progress Report by Sessions</p>
                        <p class="col-md-offset-2 bold">Participation Score: 9 | 12</p>
                        <div class="col-md-12"  id="ecourseForum" style="height: 450px;"> 
                            <div class="row">

                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-md-2 pLineHeight">
                    <div style="border: 2px solid #009345;text-align: left; padding: 20px;">
                        Grade(L): B+<br/>
                        Grade(L): 88.44<br/>
                        GPA: 3.33<br/>
                        <p>&nbsp;</p><br/>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <div class="col-md-12">
        <div class="noLeftPaddingMargin margingBottom30  removeBtnFloat">
            <p>Letter Grade: Grade (L); Percent Grade: Grade (%); Grade Point Average (GPA)</p>
        </div>
    </div>
</div>



