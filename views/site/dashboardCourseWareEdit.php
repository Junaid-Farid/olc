<div class="config">
    <div class="top-text">
        <div class="col-md-12">
            <h4>Edit courseware</h4>
            <p class="p5">Create, edit, print, and delete courseware document links .</p>

        </div>
    </div>  
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardcreate') ?>">Create</a></li>
                <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardusers') ?>">Users</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboarddefault') ?>">Default</a></li>
                <li id="li4"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardpolicy') ?>">Policies</a></li>
                <li id="li5" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardcourse') ?>">Courseware</a></li>
                <li id="li6"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardlibraries') ?>">Libraries</a></li>
                <li id="li7"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardassessments') ?>">Assessments</a></li>
            </ul>
        </div>
    </div>

    <div class="col-md-12">
        <form role="form" id="">
            <input type="button" class="btn btn-danger pull-right" value="Save"> 
        </form>
    </div>
    <div class="col-md-12 no-left-padding no-right-padding">
        <div class="col-md-3">
            <label class="control-label col-sm-6" for="">Program</label>
        </div>
        <div class="col-md-3">
            <label class="control-label col-sm-6" for="">eCourse</label>
        </div>
        <div class="col-md-1 no-right-padding">
            <label class="control-label no-left-padding no-right-padding" for="">ECO Code</label>
        </div>
        <div class="col-md-2">
            <label class="control-label col-sm-6" for="">Unit</label>
        </div>
        <div class="col-md-1">
            <label class="control-label" for="">EM Code</label>
        </div>
        <div class="col-md-2">
            <label class="control-label" for="">EC Code</label>
        </div>
    </div>
    <div class="col-md-12 no-left-padding no-right-padding">
        <div class="col-md-3">
            <p class="col-sm-12">Student Orientation</p>
        </div>
        <div class="col-md-3">
            <p class="col-sm-12">Exemplary Leadership Success</p>
        </div>
        <div class="col-md-1 no-right-padding">
            <p>SO101</p>
        </div>
        <div class="col-md-2">
            <p class="col-sm-12">eModule</p>
        </div>
        <div class="col-md-1">
            <p>SOEM102</p>
        </div>
        <div class="col-md-2">
        </div>
    </div>

    <div class="col-md-12 course">
        <div class="dashboard-course">
            <!--Section 1-->
            <div class="col-md-3 d-btns">
                <form class="form-horizontal" role="form" id="">
                    <div class="form-group">
                        <label class="control-label col-sm-6" for="">Program</label>
                        <div class="col-sm-6">
                            <div class="row">
                                <select class="form-control">
                                    <option>Select One</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6" for="">eCourse</label>
                        <div class="col-sm-6">
                            <div class="row">
                                <select class="form-control">
                                    <option>Select One</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6" for="">ECO Code</label>
                        <div class="col-sm-6">
                            <div class="row">
                                <select class="form-control">
                                    <option>System auto populates</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6" for="">Unit</label>
                        <div class="col-sm-6">
                            <div class="row">
                                <input type="text" class="form-control" id="" placeholder="Attach Link">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!--Section 2-->
            <div class="col-md-3 d-btns">
                <form class="form-horizontal" role="form" id="">
                    <div class="form-group">
                        <label class="control-label col-sm-5" for="">Outline</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <input type="text" class="form-control" id="" placeholder="Attach Link">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <input type="button" class="btn btn-danger" value="Add">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-5" for="">URL</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <input type="text" class="form-control" id="" placeholder="Enter/Select Link">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <input type="button" class="btn btn-danger" value="Add">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-5" for="">Facilitator Guide</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <input type="text" class="form-control" id="" placeholder="Attach Link">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <input type="button" class="btn btn-danger" value="Add">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-5" for="">Student Guide</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <input type="text" class="form-control" id="" placeholder="Attach Link">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <input type="button" class="btn btn-danger" value="Add">
                        </div>
                    </div>
                </form>
            </div>

            <!--Section 3-->
            <div class="col-md-3 d-btns">
                <form class="form-horizontal" role="form" id="">
                    <div class="form-group">
                        <label class="control-label col-sm-5" for="">Exam</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <input type="text" class="form-control" id="" placeholder="Attch Link">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <input type="button" class="btn btn-danger" value="Add">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-5" for="">Section 1</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <input type="text" class="form-control" id="" placeholder="Attch Link">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <input type="button" class="btn btn-danger" value="Add">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-5" for="">Section 2</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <input type="text" class="form-control" id="" placeholder="Attach Link">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <input type="button" class="btn btn-danger" value="Add">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-5" for="">Section 3</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <input type="text" class="form-control" id="" placeholder="Attach Link">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <input type="button" class="btn btn-danger" value="Add">
                        </div>
                    </div>

                </form>
            </div>

            <!--Section 4-->
            <div class="col-md-3 d-btns">
                <form class="form-horizontal" role="form" id="">
                    <div class="form-group">
                        <label class="control-label col-sm-5" for="">Section 4</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <input type="text" class="form-control" id="" placeholder="Attach Link">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <input type="button" class="btn btn-danger" value="Add">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-5" for="">Section 5</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <input type="text" class="form-control" id="" placeholder="Attach Link">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <input type="button" class="btn btn-danger" value="Add">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-5" for="">Section 6</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <input type="text" class="form-control" id="" placeholder="Attach Link">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <input type="button" class="btn btn-danger" value="Add">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="control-label col-sm-5" for="">Section 7</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <input type="text" class="form-control" id="" placeholder="Attach Link">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <input type="button" class="btn btn-danger" value="Add">
                        </div>
                    </div> 
                </form>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>

</div>



