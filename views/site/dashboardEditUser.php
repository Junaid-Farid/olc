<div class="top-text">
    <div class="col-md-12">
        <h4>Edit User Dashboard</h4>
        <p class="p5">Configure dashboard setting for all user accounts. </p>

    </div>
</div>  
<div class="col-md-12">
    <div id="centeredmenu">
        <ul class="top-ul">
            <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardcreate') ?>">Create</a></li>
            <li id="li2" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardusers') ?>">Users</a></li>
            <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboarddefault') ?>">Default</a></li>
            <li id="li4"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardpolicy') ?>">Policies</a></li>
            <li id="li5"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardcourse') ?>">Courseware</a></li>
            <li id="li6"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardpolicy') ?>">Libraries</a></li>
            <li id="li7"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardpolicy') ?>">Assessments</a></li>

        </ul>
    </div>
</div>
<div class="config">
    <div class="col-md-12 d-set">
        <div class="col-md-4">
            <div class="wrapper-dashboard">
                <form class="form-horizontal" role="form" id="">
                    <div class="form-group">
                        <div class="col-sm-8 col-md-offset-4">
                            <h4 class="h-4">User Account Settings</h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">User Type</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Select One</option>
                                <option value="Administrator" selected="selected">Administrator</option>
                                <option>Instructor</option>
                                <option>Student</option>
                                <option>Partner</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">User Name</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Select One</option>
                                <option value="dr" selected="selected">Dr.Shinshuri</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">User ID</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" value="CA3009716502" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">First</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated" value="Tammé">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Last</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated" value="Shinshuri">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">SSN</label>
                        <div class="col-sm-8">
                            <input type="" class="form-control" id="" placeholder="System auto populated" value="XXX-XX-1234">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Quarter</label>
                        <div class="col-sm-8">
                            <input type="text" id="quarter" name="quarter" class="form-control" value="Q3"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">E-Date</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Select Enrollment Date</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">G-Date</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Select Graduation Date</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">G-Status</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Select Graduation Date</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-5">
            <form class="form-horizontal" role="form" id="">
                <div class="form-group">
                    <div class="col-sm-7 col-md-offset-5">
                        <h4 class="h-4">Dashboard Settings</h4>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="">Default Setting</label>
                    <div class="col-sm-7">
                        <input type="checkbox" class="checkbox-inline"> <span>Activate Default Features</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="">Profile Tab</label>
                    <div class="col-sm-7">
                        <input type="checkbox" class="checkbox-inline"> <span>Activate Policy links</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="">Policies Tab</label>
                    <div class="col-sm-7">
                        <input type="checkbox" class="checkbox-inline"> <span>Activate Policy Links</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="">Courseware Tab</label>
                    <div class="col-sm-7">
                        <input type="checkbox" class="checkbox-inline"> <span>Activate Courseware links</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="">Libraries Tab</label>
                    <div class="col-sm-7">
                        <input type="checkbox" class="checkbox-inline"> <span>Activate Assessments links</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="">Assessments Tab</label>
                    <div class="col-sm-7">
                        <input type="checkbox" class="checkbox-inline"> <span>Activate Assessments links</span>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-3">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-danger">Save</button>
            </div>
        </div>
    </div>
    
    <div class="col-md-12 d-set">
        <div class="col-md-4">
            <div class="wrapper-dashboard">
                <form class="form-horizontal" role="form" id="">
                    <div class="form-group">
                        <div class="col-sm-8 col-md-offset-4">
                            <h4 class="h-4">Programs</h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">College Prep</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Select One</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Orientation</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Select One</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Leadership</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Select One</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Vocation</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Select One</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Sequence</label>
                        <div class="col-sm-8">
                            <input type="checkbox" class="checkbox-inline"> <span>Activate Program Completion Sequence</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="wrapper-dashboard">
                <form class="form-horizontal" role="form" id="">
                    <div class="form-group">
                        <div class="col-sm-8 col-md-offset-4">
                            <h4 class="h-4">eCourses</h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">College Prep</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Select One</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Orientation</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Select One</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Leadership</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Select One</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Vocation</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Select One</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Sequence</label>
                        <div class="col-sm-8">
                            <input type="checkbox" class="checkbox-inline"> <span>Activate eCourse Completion Sequence (e.g Current, Completed, Retaken)</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="wrapper-dashboard">
                <form class="form-horizontal" role="form" id="">
                    <div class="form-group">
                        <div class="col-sm-7 col-md-offset-5">
                            <h4 class="h-4">System Role</h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-5" for="">Administration</label>
                        <div class="col-sm-7">
                            <input type="checkbox" class="checkbox-inline"> <span>Activate Administration Role</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-5" for="">Faculty</label>
                        <div class="col-sm-7">
                            <input type="checkbox" class="checkbox-inline"> <span>Activate Faculty Role</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-5" for="">Student</label>
                        <div class="col-sm-7">
                            <input type="checkbox" class="checkbox-inline"> <span>Activate Student Role</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-5" for="">Partner</label>
                        <div class="col-sm-7">
                            <input type="checkbox" class="checkbox-inline"> <span>Activate Partner Role</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>


