<div class="config">
    <div class="top-text">
        <div class="col-md-12">
            <h4>Edit Program</h4>
            <p class="p5">Edit and save the configured program.</p>
        </div>
    </div>  
    
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/programcreate') ?>">Create</a></li>
                <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/programview') ?>">View</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/programarchive') ?>">Archive</a></li>
                <li id="li4"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/programoption') ?>">Add Option</a></li>
            </ul>
        </div>
    </div>
    
    <div class="col-md-12 br-conf">
        <div class="wrapper-program">
            <div class="col-md-3">
                <h4 class="h-4">Default Program Settings</h4>
            </div>
            <div class="col-md-3 col-md-offset-6">
                <div class="btn-right">
                    <input type="button" class="btn btn-danger" value="Save">
                    <input type="button" class="btn btn-danger" value="Add eCourse"> 
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    
    <div class="col-md-12 ec-create">
        <div class="col-md-8">
            <div class="config-course">
                <form class="form-horizontal" role="form" id="">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">Group</label>
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
                        <div class="col-sm-6">
                            <div class="row">
                                <p>Select Group - System auto populates menu</p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">Program ID</label>
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
                        <div class="col-sm-6">
                            <div class="row">
                                <p>Select Program ID - System auto populates menu</p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">Title</label>
                        <div class="col-sm-4">
                            <div class="row">
                               <input type="text" class="form-control" id="" placeholder="Student Orientation">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <p>Enter Program Name</p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">Description</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <textarea class="form-control" rows="4" placeholder="Enter text here"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <p>Enter program description</p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">Image</label>
                        <div class="col-sm-2">
                            <div class="row ecourse">
                                <img src="#" alt="" class="img-thumbnail">                            
                            </div>
                        </div>
                        <div class="col-sm-2 col-sm-offset-right-6">
                            <div class="row ecourse">
                                <input type="button" class="btn btn-danger" value="Add">
                            </div>
                        </div>                  
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">Degree</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <select class="form-control">
                                    <option>NA</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <p>Select Degree - System auto populates menu</p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">Type</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <select class="form-control">
                                    <option>NA</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <p>Select Type - System auto populates menu</p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">Length</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <input type="text" class="form-control" id="" placeholder="Enter Program Length" value="6">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <p>Enter Length</p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">Time</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <select class="form-control">
                                    <option>Week</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <p>Enter Time - System auto populates menu</p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">&#35; eCourses</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <input type="text" class="form-control" id="" placeholder="Enter Number Of eCourses" value="3">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <p>Enter Number of eCourses</p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">Program Outline</label>
                        <div class="col-sm-4">
                            <div class="row">
                               <input type="text" class="form-control" id="" placeholder="Select File For URL Link">
                            </div>
                        </div>
                        <div class="col-sm-1">                 
                            <input type="button" class="btn btn-danger" value="Add">                  
                        </div>
                        <div class="col-sm-4">                   
                            <p>Select program outline to add URL link</p>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">eCourse 1</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <select class="form-control">
                                    <option>OLC Portal</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">                   
                            <input type="button" class="btn btn-danger" value="Edit">
                            <input type="button" class="btn btn-danger" value="Delete">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">eCourse 2</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <select class="form-control">
                                    <option>Being a Stellar Student</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">                   
                            <input type="button" class="btn btn-danger" value="Edit">
                            <input type="button" class="btn btn-danger" value="Delete">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">eCourse 3</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <select class="form-control">
                                    <option>ELS Strategies</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">                   
                            <input type="button" class="btn btn-danger" value="Edit">
                            <input type="button" class="btn btn-danger" value="Delete">
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>