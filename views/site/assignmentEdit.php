<div class="config">
    <div class="top-text">
        <div class="col-md-12">
            <h4>Edit Assignments</h4>
            <p class="">Edit configured course assignment.</p>
        </div>
    </div>  
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/assignmentcreate') ?>">Create</a></li>
                <li id="li2" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/assignmentview') ?>">View</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/assignmentarchive') ?>">Archive</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-12 ec-create ass-create">
        <div class="col-md-7">
            <div class="wrapper-assignment">
                <form class="form-horizontal" role="form" id="">
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Instructor Name</label>
                        <div class="col-sm-4 col-sm-offset-right-5">
                            <div class="row">
                                <select class="form-control">
                                    <option>Select One</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                        </div>                 
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">eCourse Title</label>
                        <div class="col-sm-4 col-sm-offset-right-5">
                            <div class="row">
                                <select class="form-control">
                                    <option>Select One</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                        </div>                 
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">EC Code</label>
                        <div class="col-sm-4 col-sm-offset-right-5">
                            <div class="row">
                                <select class="form-control">
                                    <option>Select One</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                        </div>                 
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Session ID</label>
                        <div class="col-sm-4 col-sm-offset-right-5">
                            <div class="row">
                                <select class="form-control">
                                    <option>System auto populates</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                        </div>                 
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Year</label>
                        <div class="col-sm-4 col-sm-offset-right-5">
                            <div class="row">
                                <select class="form-control">
                                    <option>Select One</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                        </div>                 
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Quarter</label>
                        <div class="col-sm-4 col-sm-offset-right-5">
                            <div class="row">
                                <select class="form-control">
                                    <option>Select One</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                        </div>                 
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Assignment</label>
                        <div class="col-sm-4 col-sm-offset-right-5">
                            <div class="row">
                                <select class="form-control">
                                    <option>Select One</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                        </div>                 
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Link</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <input type="text" class="form-control" placeholder="Edit or enter Assignment Link"/>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="row">
                                <input type="submit" class="btn btn-danger btn-small margin-left-15px" value="Upload">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Due Date</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <select class="form-control">
                                    <option>Select One</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="row">
                                <h5 class="margin-left-10px">Select a Due Date from the calender</h5>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-danger" value="Update">
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</div>

