<div class="config">
    <div class="top-text">
        <div class="col-md-12">
            <h4>Configure Assignments</h4>
            <p class="">Configure course assignments and assign due dates for the courses you teach in the learning community.</p>
            <p class="p-conf-2">Note: The system will auto populate the fields based on instructor name,Configure assignments by selecting the options presented in the each field.</p>
        </div>
    </div>  
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/assignmentcreate') ?>">Create</a></li>
                <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/assignmentview') ?>">View</a></li>
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
                        <label class="control-label col-sm-3" for="">Session</label>
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
                                <h5 class="margin-left-10px">Select a due date from the calender</h5>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-danger" value="Save">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-5 assignment">
            <h4>Configuring Assignments</h4>
            <!--<p>1.Select Instructor Name</p>
            <p>2.Select eCourse Name</p>
            <p>3.Select eClass ID</p>
            <p>4.Select Session</p>
            <p>5.Select Year</p>
            <p>6.Select Quarter</p>
            <p>7.Select Name of Assignment</p>
            <p>8.Edit or enter Assignment Link</p>
            <p>9.Select Due Date</p>
            <p>10.Click Submit button</p>-->
            
            <ol>
                <li>Select Instructor Name</li>
                <li>Select eCourse Name</li>
                <li>Select eClass ID</li>
                <li>Select Session</li>
                <li>Select Year</li>
                <li>Select Quarter</li>
                <li>Select Name of Assignment</li>
                <li>Edit or enter Assignment Link</li>
                <li>Select Due Date</li>
                <li>Click Submit button</li>
            </ol>
        </div>
    </div>
</div>

