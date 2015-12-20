<div class="top-text">
    <div class="col-md-12">
        <h4>Configure Dashboard</h4>
        <p class="p5">Configure default dashboard settings for all user accounts.</p>
    </div>
</div>  
<div class="col-md-12">
    <div id="centeredmenu">
       <ul class="top-ul">
            <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardcreate') ?>">Create</a></li>
            <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardusers') ?>">Users</a></li>
            <li id="li3" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboarddefault') ?>">Default</a></li>
            <li id="li4"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardpolicy') ?>">Policies</a></li>
            <li id="li5"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardcourse') ?>">Courseware</a></li>
            <li id="li6"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardlibraries') ?>">Libraries</a></li>
            <li id="li7"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardassessments') ?>">Assessments</a></li>
        </ul>
    </div>
</div>

<div class="col-md-12 br-conf">
    <div class="wrapper-default">
        <div class="col-md-3">
            <h4 class="h-4">Default Sections</h4>
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
    <!--Personal Information-->
    <div class="col-md-4">
        <form class="form-horizontal" role="form" id="">
            <div class="form-group">
                <div class="col-sm-8">
                    <h6 class="h-6">Personal Information</h6>
                </div>
                <div class="col-sm-4">
                    <h6 class="h-a">
                        <a href="#" class="d-a">Add</a><i> | </i>
                        <a href="#" class="d-a">Delete</a>
                    </h6>
                </div>
            </div>
            
            <div class="wrapper-settings">
                <div class="form-group">
                    <label class="control-label col-sm-4 kill-padding" for="">User name</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4 kill-padding" for="">User ID</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4 kill-padding" for="">Quarter</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4 kill-padding" for="">Enrollment Date</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4 kill-padding" for="">Graduation Date</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4 kill-padding" for="">Graduated</label>
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
            </div>
        </form>     
    </div>
    <!--Education Resources-->
    <div class="col-md-4 d-btns">
        <form class="form-horizontal" role="form" id="">
            <div class="form-group">
                <div class="col-sm-8">
                    <h6 class="h-6">Educational Resources</h6>
                </div>
                <div class="col-sm-4">    
                    <h6 class="h-a">
                        <a href="#" class="d-a">Add</a><i> | </i>
                        <a href="#" class="d-a">Delete</a>
                    </h6>
                </div>
            </div>
            
            <div class="wrapper-settings">
                <div class="form-group">
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <input type="button" class="btn btn-danger" value="Edit">
                            <input type="button" class="btn btn-danger" value="Delete">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                    <div class="col-sm-4 ">
                        <div class="row">
                            <input type="button" class="btn btn-danger" value="Edit">
                            <input type="button" class="btn btn-danger" value="Delete">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                    <div class="col-sm-4 ">
                        <div class="row">
                            <input type="button" class="btn btn-danger" value="Edit">
                            <input type="button" class="btn btn-danger" value="Delete">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                    <div class="col-sm-4 ">
                        <div class="row">
                            <input type="button" class="btn btn-danger" value="Edit">
                            <input type="button" class="btn btn-danger" value="Delete">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                    <div class="col-sm-4 ">
                        <div class="row">
                            <input type="button" class="btn btn-danger" value="Edit">
                            <input type="button" class="btn btn-danger" value="Delete">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                    <div class="col-sm-4 ">
                        <div class="row">
                            <input type="button" class="btn btn-danger" value="Edit">
                            <input type="button" class="btn btn-danger" value="Delete">
                        </div>
                    </div>
                </div>
            </div>
        </form>     
    </div>
    <!--Enrollment Status-->
    <div class="col-md-4 d-btns">
        <form class="form-horizontal" role="form" id="">
            <div class="form-group">
                <div class="col-sm-8">
                    <h6 class="h-6">Enrollment Status</h6>
                </div>
                <div class="col-sm-4">
                    <h6 class="h-a">
                        <a href="#" class="d-a">Add</a><i> | </i>
                        <a href="#" class="d-a">Delete</a>
                    </h6>
                </div>
            </div>
            
            <div class="wrapper-settings">
                <div class="form-group">
                    <label class="control-label col-sm-3" for="">Program</label>
                    <div class="col-sm-4">
                        <div class="row">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <input type="button" class="btn btn-danger" value="Edit">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="">eCourse</label>
                    <div class="col-sm-4">
                        <div class="row">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <input type="button" class="btn btn-danger" value="Edit">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="">Active</label>
                    <div class="col-sm-4">
                        <div class="row">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <input type="button" class="btn btn-danger" value="Edit">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="">Drop</label>
                    <div class="col-sm-4">
                        <div class="row">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <input type="button" class="btn btn-danger" value="Edit">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="">Risk</label>
                    <div class="col-sm-4">
                        <div class="row">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <input type="button" class="btn btn-danger" value="Edit">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </div>
                </div>
            </div>
        </form>     
    </div>
</div>

<div class="col-md-12" style="margin:20px 0 40px 0;">
    <!--Mini Transcript-->
    <div class="col-md-4 d-btns">
        <form class="form-horizontal" role="form" id="">
            <div class="form-group">
                <div class="col-sm-6">
                    <h6 class="h-6">Mini Transcript</h6>
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
                    <label class="control-label col-sm-3" for="">Program</label>
                    <div class="col-sm-4">
                        <div class="row">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <input type="button" class="btn btn-danger" value="Edit">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="">eCourse</label>
                    <div class="col-sm-4">
                        <div class="row">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <input type="button" class="btn btn-danger" value="Edit">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="">Grade</label>
                    <div class="col-sm-4">
                        <div class="row">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <input type="button" class="btn btn-danger" value="Edit">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="">GPA</label>
                    <div class="col-sm-4">
                        <div class="row">
                            <input type="" class="form-control" id="" placeholder="System auto populated">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <input type="button" class="btn btn-danger" value="Edit">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </div>
                </div>
            </div>
        </form>     
    </div>
    <!--Announcements-->
    <div class="col-md-4 d-btns">
        <form class="form-horizontal" role="form" id="">
            <div class="form-group">
                <div class="col-sm-8">
                    <h6 class="h-6">Announcements</h6>
                </div>
                <div class="col-sm-4"> 
                    <h6 class="h-a">
                        <a href="#" class="d-a">Add</a><i> | </i>
                        <a href="#" class="d-a">Delete</a>
                    </h6>   
                </div>
            </div>
            
            <div class="wrapper-settings">
                <div class="form-group">
                    <label class="control-label col-sm-3" for="">Campaign</label>
                    <div class="col-sm-7">
                        <select class="form-control">
                            <option>Select One</option>
                            <option>CF234</option>
                            <option>CF345</option>
                            <option>CF543</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <div class="row">
                            <input type="button" class="btn btn-danger" value="Add">                   
                        </div>
                    </div>
                </div>
                <div class="form-group">                
                    <div class="col-sm-3">
                        <div class="compaign-btn">
                            <input type="button" class="btn btn-danger" value="Edit">
                            <input type="button" class="btn btn-danger" value="Delete">
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <textarea class="form-control" rows="4" id=""></textarea>
                    </div>
                </div>
            </div>
        </form>     
    </div>
    <!--Programs-->
    <div class="col-md-4 d-btns">
        <form class="form-horizontal" role="form" id="">
            <div class="form-group">
                <div class="col-sm-6">
                    <h6 class="h-6">Programs</h6>
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
                    <div class="col-sm-8">
                        <input type="" class="form-control" id="" placeholder="System auto populated"/>
                    </div>
                    <div class="col-sm-4 kill-padding">
                        <input type="button" class="btn btn-danger" value="Edit"/>
                        <input type="button" class="btn btn-danger" value="Delete"/>
                    </div>
                </div>
                <div class="form-group">               
                    <div class="col-sm-8">                  
                        <input type="" class="form-control" id="" placeholder="System auto populated"/>                  
                    </div>
                    <div class="col-sm-4 kill-padding">
                        <input type="button" class="btn btn-danger" value="Edit"/>
                        <input type="button" class="btn btn-danger" value="Delete"/>
                    </div>
                </div>
                <div class="form-group">               
                    <div class="col-sm-8">                   
                        <input type="" class="form-control" id="" placeholder="System auto populated"/>                  
                    </div>
                    <div class="col-sm-4 kill-padding">
                        <input type="button" class="btn btn-danger" value="Edit"/>
                        <input type="button" class="btn btn-danger" value="Delete"/>
                    </div>
                </div>
            </div>
        </form>     
    </div>
</div>

<div class="col-md-12" style="margin:20px 0 40px 0;">
    <!--Current eCourse-->
    <div class="col-md-4">
        <div class="form-group">
            <div class="col-sm-6">
                <div class="row">
                    <h6 class="h-6">Current eCourse</h6>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <h6 class="h-a">
                        <a href="#" class="d-a">Add</a><i> &nbsp; </i>
                        <a href="#" class="d-a">Delete</a>
                    </h6>
                </div>
            </div>
        </div>
        
        <div class="wrapper-course">
            <div class="view">
                <div class="col-md-12">
                    <div class="row">
                        <div class="course-types odd">
                            <a href="#" class=""> Live Awakened Life</a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="view">
                <div class="col-md-12">
                    <div class="row">
                        <div class="course-types even">
                            <a href="#" class=""> ID Fundamentals</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--Completed eCourse-->
    <div class="col-md-4">
        <div class="form-group">
            <div class="col-sm-6">
                <div class="row">
                    <h6 class="h-6">Completed eCourse</h6>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <h6 class="h-a">
                        <a href="#" class="d-a">Add</a><i> &nbsp; </i>
                        <a href="#" class="d-a">Delete</a>
                    </h6>
                </div>
            </div>
        </div>
        
        <div class="wrapper-course">
            <div class="view">
                <div class="col-md-12">
                    <div class="row">
                        <div class="course-types odd">
                            <a href="#" class="">OLC Portal Faculty</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view">
                <div class="col-md-12">
                    <div class="row">
                        <div class="course-types even">
                            <a href="#" class="">Being A Stellar Student</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view">
                <div class="col-md-12">
                    <div class="row">
                        <div class="course-types odd">
                            <a href="#" class=""> ELS Strategies</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--Retaken eCourse-->
    <div class="col-md-4">
        <div class="form-group">
            <div class="col-sm-6">
                <div class="row">
                    <h6 class="h-6">Retaken eCourse</h6>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <h6 class="h-a">
                        <a href="#" class="d-a">Add</a><i> &nbsp; </i>
                        <a href="#" class="d-a">Delete</a>
                    </h6>
                </div>
            </div>
        </div>
        
        <div class="wrapper-course">
            <div class="view">
                <div class="col-md-12">
                    <div class="row">
                        <div class="course-types odd">
                            <a href="#" class=""> TBD</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view">
                <div class="col-md-12 second">
                    <div class="row">
                        <div class="course-types even">
                            <a href="#" class=""> TBD</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view">
                <div class="col-md-12">
                    <div class="row">
                        <div class="course-types odd">
                            <a href="#" class=""> TBD</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
