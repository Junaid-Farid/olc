<div class="config">
    <div class="top-text">
        <div class="col-md-12">
            <h4>Edit Feedback Survey</h4>
            <p class="">Edit Feedback survey content.</p>
        </div>
    </div>  
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/feedbackcreate') ?>">Create</a></li>
                <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/feedbackview') ?>">View</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/feedbackarchive') ?>">Archive</a></li>
            </ul>
        </div>
    </div>
    
    <div class="col-md-12 ec-create ass-create">
        <div class="col-md-6">
            <div class="wrapper-faq">
                <form class="form-horizontal" role="form" id="">
                    
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Title</label>
                        <div class="col-sm-6">
                            <div class="row">
                                <input type="text" class="form-control" id="" placeholder="eCourse Survey">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Survey ID</label>
                        <div class="col-sm-6">
                            <div class="row">
                                <input type="text" class="form-control" id="" placeholder="system auto populates">
                            </div>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    
    <div class="col-md-12 br-conf">
        <div class="wrapper-program">
            <div class="col-md-3">
                <h4 class="h-4">Default Settings</h4>
            </div>
            <div class="col-md-3 col-md-offset-6">
                <div class="btn-right">
                    <input type="button" class="btn btn-danger" value="Add">
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    
    <div class="col-md-12 ec-create ass-create">
        <!--Section 1-->
        <div class="col-md-4">
            <div class="wrapper-faq">
                <form class="form-horizontal" role="form" id="">

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
                    
                </form>
            </div>
        </div>
        
        <!--Section 2-->
        <div class="col-md-4">
            <div class="wrapper-faq">
                <form class="form-horizontal" role="form" id="">

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
                    
                </form>
            </div>
        </div>
        
        <!--Section 3-->
        <div class="col-md-4">
            <div class="wrapper-faq">
                <form class="form-horizontal" role="form" id="">

                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Comments</label>
                        <div class="col-sm-6">
                            <div class="row">
                                <textarea class="form-control" rows="5" id="" placeholder="Enter comments"></textarea>
                            </div>
                        </div>
                    </div>
                   
                </form>
            </div>
        </div>

    </div>
</div>

<div class="col-md-12 br-conf">
    <div class="wrapper-program">
        <div class="col-md-3">
            <h4 class="h-4">Feedback Questions</h4>
        </div>
        <div class="col-md-3 col-md-offset-6">
            <div class="btn-right">
                <input type="button" class="btn btn-danger" value="Add">
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="col-md-12 ec-create ass-create">
    <!--Section 1-->
    <div class="col-md-6">
        <div class="wrapper-faq">
            <form class="form-horizontal" role="form" id="">
                
                <div class="form-group">
                    <label class="control-label col-sm-2" for="">1</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <input type="text" class="form-control" id="" placeholder="Content supported stated learning outcomes and objectives.">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2" for="">2</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <input type="text" class="form-control" id="" placeholder="Content will be useful to my work and personal life.">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2" for="">3</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <input type="text" class="form-control" id="" placeholder="Content was organised in the way conductive to my learning.">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2" for="">4</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <input type="text" class="form-control" id="" placeholder="eCourse format was amenable to my schedule.">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2" for="">5</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <input type="text" class="form-control" id="" placeholder="Multimedia technolgies enhanced the learning experience.">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2" for="">6</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <input type="text" class="form-control" id="" placeholder="Pace of the eCourse was appropriate and flexible">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2" for="">7</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <input type="text" class="form-control" id="" placeholder="Assignments contributed to my knowledge and understanding.">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2" for="">8</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <input type="text" class="form-control" id="" placeholder="Evaluation and grading measurements were fair.">
                        </div>
                    </div>
                </div>
                
                <div class="pull-left">
                    <input type="button" class="btn btn-danger btn-small" value="Save">
                </div>
                
            </form>
        </div>
    </div>
    
    <!--Section 2-->
    <div class="col-md-5 col-md-offset-1">
        <div class="wrapper-faq">
            <form class="form-horizontal" role="form" id="">
                
                <div class="form-group margin-bottom-5px margin-top-ngtv-5px">
                    <label class="radio-inline col-sm-2" for="">Ratings</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 4
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 5
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group margin-bottom-5px">
                    <label class="radio-inline col-sm-2" for="">Ratings</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 4
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 5
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group margin-bottom-5px">
                    <label class="radio-inline col-sm-2" for="">Ratings</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 4
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 5
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group margin-bottom-5px">
                    <label class="radio-inline col-sm-2" for="">Ratings</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 4
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 5
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group margin-bottom-5px">
                    <label class="radio-inline col-sm-2" for="">Ratings</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 4
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 5
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group margin-bottom-5px">
                    <label class="radio-inline col-sm-2" for="">Ratings</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 4
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 5
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group margin-bottom-5px">
                    <label class="radio-inline col-sm-2" for="">Ratings</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 4
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 5
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group margin-bottom-5px">
                    <label class="radio-inline col-sm-2" for="">Ratings</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 4
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 5
                            </label>
                        </div>
                    </div>
                </div>
                              
            </form>
        </div>
    </div>
</div>