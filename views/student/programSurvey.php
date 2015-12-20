<div class="config">
    <div class="top-text">
        <div class="col-md-12"  style="padding-bottom: 30px;">
            <h4>Feedback</h4>
            <p class="">Complete a survey below to let us know how we are doing and where we can make improvements.</p>
        </div>
    </div>  
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/ecoursesurvey') ?>">eCourse</a></li>
                <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/instructorsurvey') ?>">Instructor</a></li>
                <li id="li3" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/programsurvey') ?>">Program</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/residencysurvey') ?>">Residency</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/technologysurvey') ?>">Technology</a></li>
            </ul>
        </div>
    </div>
    <form class="form-horizontal" role="form" id="">
        <div class="col-md-12 ec-create ass-create">

            <div class="col-md-4">
                <div class="wrapper-faq">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="">Instructor</label>
                            <div class="col-sm-6">
                                <div class="row">
                                    <select class="form-control">
                                        <option>Select One</option>
                                        <option>Mustard</option>
                                        <option>herry</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="">eCourse</label>
                            <div class="col-sm-6">
                                <div class="row">
                                    <select class="form-control">
                                        <option>Select One</option>
                                        <option>Mustard</option>
                                        <option>herry</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="">Session ID</label>
                            <div class="col-sm-6">
                                <div class="row">
                                    <select class="form-control">
                                        <option>Select One</option>
                                        <option>Mustard</option>
                                        <option>herry</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="">ECO Code</label>
                            <div class="col-sm-6">
                                <div class="row">
                                    <select class="form-control">
                                        <option>Select One</option>
                                        <option>Mustard</option>
                                        <option>herry</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                </div>
            </div>

            <!--Section 2-->
            <div class="col-md-4">
                <div class="wrapper-faq">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="">Student</label>
                            <div class="col-sm-6">
                                <div class="row">
                                    <select class="form-control">
                                        <option>Select One</option>
                                        <option>Mustard</option>
                                        <option>herry</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="">User ID</label>
                            <div class="col-sm-6">
                                <div class="row">
                                    <input type="text" class="form-control" id="" placeholder="system auto populates">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="">Quarter</label>
                            <div class="col-sm-6">
                                <div class="row">
                                    <select class="form-control">
                                        <option>Select One</option>
                                        <option>Mustard</option>
                                        <option>herry</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="">Year</label>
                            <div class="col-sm-6">
                                <div class="row">
                                    <select class="form-control">
                                        <option>Select One</option>
                                        <option>Mustard</option>
                                        <option>herry</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

        </div>

        <div class="col-md-12 users">
            <div class="wrapper-assignment">
                <table class="table table-striped">
                    <thead>
                        <tr>                 
                            <th></th>
                            <th></th>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>                   
                            <th>5</th>   
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Program organization and sequence was easy to follow.</td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>

                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>I like the two programs one degree rule.</td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>

                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Two eCourses per quarter limit is adequate .</td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>

                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>The grading policy for eCourses enhances mastery.</td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>

                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Program supports my personal and professional goals.</td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>

                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Integrated projects improved my ability to perform the real world.</td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>

                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Blended learning enhanced the over all program experience.</td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>

                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Program compliments my learning style and preferences.</td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>
                            <td><input type="radio" class="Form-label-radio"/></td>

                        </tr>
                    </tbody>
                </table>

                <div class="col-md-7">
                    <div class="form-group">
                        <label class="col-sm-6 removeBtnFloat noLeftPaddingMargin" style="margin: 0px 0px 0px;">Comments</label>

                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <div class="row">
                                <textarea class="form-control" rows="4" id=""  style=" margin: 0px 0px 0px;"></textarea>
                            </div>
                        </div>  
                    </div>
                    <div class="form-group">
                        <div class="row col-sm-2 removeBtnFloat noLeftPaddingMargin" style="padding-top: 8px;">
                            <input type="submit" class="btn btn-danger" value="Submit"  style="padding-right:16px;">
                        </div>
                    </div>
                </div>
            </div>
</div>
</form>
    
    <div class="col-sm-12 margingBottom30">
        <div class="col-sm-7 col-sm-offset-5 pull-right" style="width: 52.333333%;">
            <strong>Rating Scale: </strong>1 - Strongly Disagree; 2 - Disagree; 3 - Neural; 4 - Agree; 5 - Strongly Agree 
        </div>
    </div>

</div>