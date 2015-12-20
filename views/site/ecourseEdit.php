<div class="config">
    <div class="top-text">
        <div class="col-md-12">
            <h4>Edit eCourse</h4>
            <p class="p5">Edit eCourse options.</p>

        </div>
    </div>  
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/ecoursecreate') ?>">Create</a></li>
                <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/ecourseview') ?>">View</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/ecoursearchive') ?>">Archive</a></li>
            </ul>
            <div class="pull-right">
                <a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/appmanualentry') ?>" class="btn btn-danger btn-small" role="button">Save</a>
            </div>
        </div>
    </div>
    
    <div class="col-md-12 br-conf">
        <div class="wrapper-program">
            <div class="col-md-3">
                <h4  class="h-4">Default eCourse Settings</h4>
            </div>
            <div class="col-md-3 col-md-offset-6">
                <div class="btn-right">
                    <input type="button" class="btn btn-danger" value="Add">
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    
    <div class="col-md-12 ec-create">
        <div class="config-course">
            <div class="col-md-7">
                <form class="form-horizontal" role="form" id="">
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Group</label>
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
                        <label class="control-label col-sm-3" for="">Program Code</label>
                        <div class="col-sm-4 col-sm-offset-right-5">
                            <div class="row">
                                <select class="form-control">
                                    <option>Select Program Code</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Program</label>
                        <div class="col-sm-4 col-sm-offset-right-5">
                            <div class="row">
                                <input type="" class="form-control" id="" placeholder="System auto populates">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">ECO&#35;</label>
                        <div class="col-sm-4 col-sm-offset-right-5">
                            <div class="row">
                                <input type="" class="form-control" id="" placeholder="Enter eCourse Number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">ECO Code</label>
                        <div class="col-sm-4 col-sm-offset-right-5">
                            <div class="row">
                                <input type="" class="form-control" id="" placeholder="System auto populates code">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Title</label>
                        <div class="col-sm-4 col-sm-offset-right-5">
                            <div class="row">
                                <input type="" class="form-control" id="" placeholder="Enter title here">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Description</label>
                        <div class="col-sm-4 col-sm-offset-right-5">
                            <div class="row">
                                <textarea class="form-control" rows="4" placeholder="Enter discription text"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Image</label>
                        <div class="col-sm-3">
                            <div class="row ecourse">
                                <img src="#" alt="" class="img-thumbnail">                            
                            </div>
                        </div>
                        <div class="col-sm-2 col-sm-offset-right-5">
                            <div class="row ecourse">
                                <input type="button" class="btn btn-danger" value="Add">
                            </div>
                        </div>                  
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Instructor</label>
                        <div class="col-sm-4 col-sm-offset-right-5">
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
                        <label class="control-label col-sm-3" for="">Session</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <input type="" class="form-control" id="" placeholder="Generate Session Number">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <input type="button" class="btn btn-danger" value="Generate">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Length</label>
                        <div class="col-sm-4 col-sm-offset-right-5">
                            <div class="row">
                                <input type="" class="form-control" id="" placeholder="Enter eCourse length">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Unit</label>
                        <div class="col-sm-3">
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
                                <h5>Select unit of time(eg. days, weeks, months, years)</h5>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">C-Hrs</label>
                        <div class="col-sm-3 col-sm-offset-right-6">
                            <div class="row">
                                <input type="" class="form-control" id="" placeholder="Enter credit hours">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">eCourse Outline</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <input type="" class="form-control" id="" placeholder="Select File For URL Link">
                            </div>
                        </div>
                        <div class="col-sm-4">

                            <input type="button" class="btn btn-danger" value="Select">
                            <input type="button" class="btn btn-danger" value="Remove">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">eModule</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <input type="" class="form-control" id="" placeholder="Select URL Link">
                            </div>
                        </div>
                        <div class="col-sm-4">

                            <input type="button" class="btn btn-danger" value="Select">
                            <input type="button" class="btn btn-danger" value="Remove">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">EM Code</label>
                        <div class="col-sm-4 col-sm-offset-right-5">
                            <div class="row">
                               <input type="" class="form-control" id="" placeholder="System auto populated">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">eClass</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <input type="" class="form-control" id="" placeholder="Select URL Link">
                            </div>
                        </div>
                        <div class="col-sm-4">

                            <input type="button" class="btn btn-danger" value="Select">
                            <input type="button" class="btn btn-danger" value="Remove">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">EC Code</label>
                        <div class="col-sm-4 col-sm-offset-right-5">
                            <div class="row">
                               <input type="" class="form-control" id="" placeholder="System auto populated">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Forum</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <input type="" class="form-control" id="" placeholder="Select URL Link">
                            </div>
                        </div>
                        <div class="col-sm-4">

                            <input type="button" class="btn btn-danger" value="Select">
                            <input type="button" class="btn btn-danger" value="Remove">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">FM Code</label>
                        <div class="col-sm-4 col-sm-offset-right-5">
                            <div class="row">
                               <input type="" class="form-control" id="" placeholder="System auto populated">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

