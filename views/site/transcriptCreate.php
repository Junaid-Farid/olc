<div class="top-text">
    <div class="col-md-12">
        <h4>Create User Transcript</h4>
        <p class="p5">Edit User Transcript for user settings, grades, credit hours, and other grading information.</p>
        <p class="p-conf-2">Note: System auto populates all non-editable fields.</p>
    </div>
</div>

<div class="col-md-12">
    <div id="centeredmenu">
        <ul class="top-ul">
            <li id="li1" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptcreate') ?>">Create</a></li>
            <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptusers') ?>">Users</a></li>
            <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptarchive') ?>">Archive</a></li>
        </ul>
    </div>
</div>

<div class="col-md-12 br-conf">
    <div class="wrapper-program">
        <div class="col-md-3">
            <h4 class="h-4">Default Settings</h4>
        </div>
        <div class="col-md-3 col-md-offset-6">
            <div class="btn-right">
                <input type="button" class="btn btn-danger" value="New Section">
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="col-md-12">
    <div class="col-md-7 d-btns">
        <form class="form-horizontal" role="form" id="">
            <div class="form-group">
                <div class="col-sm-6">
                    <h6 class="h-6">User Settings</h6>
                </div>
                <div class="col-sm-6">
                    <h6 class="h-a">
                        <a href="#" class="d-a">Add</a><i> | </i>
                        <a href="#" class="d-a">Delete</a>
                    </h6>
                </div>
            </div>
            
            <div class="wrapper-settings">
                <div class="form-group">
                    <label class="control-label col-sm-3" for="">Role</label>
                    <div class="col-sm-4">
                        <div class="row">
                            <select class="form-control">
                                <option>Select One</option>
                                <option>Administrator</option>
                                <option>Instructor</option>
                                <option>Student</option>
                                <option>Partner</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="">User Name</label>
                    <div class="col-sm-4">
                        <div class="row">
                            <select class="form-control">
                                <option>Select One</option>
                                <option>Gerfon</option>
                                <option>Herry</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="">First Name</label>
                    <div class="col-sm-4 col-sm-offset-right-4">
                        <div class="row">
                            <input type="text" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="">Last Name</label>
                    <div class="col-sm-4 col-sm-offset-right-4">
                        <div class="row">
                            <input type="text" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="">User ID</label>
                    <div class="col-sm-4 col-sm-offset-right-4">
                        <div class="row">
                            <input type="text" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="">Degree</label>
                    <div class="col-sm-4 col-sm-offset-right-4">
                        <div class="row">
                            <input type="text" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="">E-Date</label>
                    <div class="col-sm-4 col-sm-offset-right-4">
                        <div class="row">
                            <input type="text" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="">G-Date</label>
                    <div class="col-sm-4 col-sm-offset-right-4">
                        <div class="row">
                            <input type="text" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="">Unofficial</label>
                    <div class="col-sm-4">
                        <div class="row">
                            <input type="text" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <input type="button" class="btn btn-danger" value="View">
                        <input type="button" class="btn btn-danger" value="Edit">
                        <input type="button" class="btn btn-danger" value="Print">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="">Official</label>
                    <div class="col-sm-4">
                        <div class="row">
                            <input type="text" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <input type="button" class="btn btn-danger" value="View">
                        <input type="button" class="btn btn-danger" value="Edit">
                        <input type="button" class="btn btn-danger" value="Print">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="col-md-12 transcript">
    <form class="form" role="form" id="">
        <div class="form-group">
            <div class="col-sm-6">
                <h6 class="h-6">Orientation</h6>
            </div>
            <div class="col-sm-6">
                <h6 class="h-a">
                    <a href="#" class="d-a">Delete</a>
                </h6>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="wrapper-settings">
            <div class="form-group col-md-2">
                <label class="control-label" for="">Program</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1 no-right-padding no-left-padding">
                <label class="control-label" for="">ECO Code</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-2">
                <label class="control-label" for="">eCourses</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">Quarter</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">Year</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">&#37; Grade</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">L-Grade</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">C-Hrs</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">H-Credits</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">GPA</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>  
            <div class="clearfix"></div>
        </div>
    </form> 

    
    <form class="form" role="form" id="">
        <div class="form-group">
            <div class="col-sm-6">
                <h6 class="h-6">College Preparation</h6>
            </div>
            <div class="col-sm-6">
                <h6 class="h-a">
                    <a href="#" class="d-a">Delete</a>
                </h6>
            </div>
        </div>
        <div class="clearfix"></div>
        
        <div class="wrapper-settings">
            <div class="form-group col-md-2">
                <label class="control-label" for="">Program</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1 no-right-padding no-left-padding">
                <label class="control-label" for="">ECO Code</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-2">
                <label class="control-label" for="">eCourses</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">Quarter</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">Year</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">&#37; Grade</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">L-Grade</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">C-Hrs</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">H-Credits</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">GPA</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>
            <div class="clearfix"></div>
        </div>
    </form>  
    
    
    <form class="form" role="form" id="">
        <div class="form-group">
            <div class="col-sm-6">
                <h6 class="h-6">Leadership</h6>
            </div>
            <div class="col-sm-6">
                <h6 class="h-a">
                    <a href="#" class="d-a">Delete</a>
                </h6>
            </div>
        </div>
        <div class="clearfix"></div>
        
        <div class="wrapper-settings">
            <div class="form-group col-md-2">
                <label class="control-label" for="">Program</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1 no-right-padding no-left-padding">
                <label class="control-label" for="">ECO Code</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-2">
                <label class="control-label" for="">eCourses</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">Quarter</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">Year</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">&#37; Grade</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">L-Grade</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">C-Hrs</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">H-Credits</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">GPA</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>
            <div class="clearfix"></div>
        </div>   
    </form>  
    
    
    <form class="form" role="form" id="">
        <div class="form-group">
            <div class="col-sm-6">
                <h6 class="h-6">Vocation</h6>
            </div>
            <div class="col-sm-6">
                <h6 class="h-a">
                    <a href="#" class="d-a">Delete</a>
                </h6>
            </div>
        </div>
        <div class="clearfix"></div>
        
        <div class="wrapper-settings">
            <div class="form-group col-md-2">
                <label class="control-label" for="">Program</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1 no-right-padding no-left-padding">
                <label class="control-label" for="">ECO Code</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-2">
                <label class="control-label" for="">eCourses</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">Quarter</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">Year</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">&#37; Grade</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">L-Grade</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">C-Hrs</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">H-Credits</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>

            <div class="form-group col-md-1">
                <label class="control-label" for="">GPA</label>
                <div class="col-sm-12">
                    <div class="row">
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </div>              
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="form-group">
            <div class="col-sm-12">
                <div class="btn-right">
                    <input type="button" class="btn btn-danger" value="Save">
                </div>
            </div>
        </div>
    </form>  
</div>
