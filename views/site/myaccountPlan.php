<div class="top-text">
    <div class="col-md-12">
        <h4>Configure My Account</h4>
        <p class="p5">Configure myEduPlan user settings, financial aid, and educational fees.</p>

    </div>
</div>  
<div class="col-md-12">
    <div id="centeredmenu">
        <ul class="top-ul">
            <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/myaccountcreate') ?>">Create</a></li>
            <li id="li1" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/myaccountplan') ?>">myEduPlan</a></li>
            <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/myaccountusers') ?>">Users</a></li>
        </ul>
    </div>
</div>

<div class="col-md-12 br-conf">
    <div class="wrapper-default">
        <div class="col-md-3">
            <h4  class="h-4">Default Sections</h4>
        </div>
        <div class="col-md-3 col-md-offset-6">
            <div class="btn-right">
                <input type="button" class="btn btn-danger" value="New Section">
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="col-md-12 myaccount">
    <!--User Settings-->
    <div class="col-md-4">
        <form class="form-horizontal" role="form" id="">
            <div class="form-group">
                <div class="col-sm-6">
                    <h6 class="h-6">User Settings</h6>
                </div>
                <div class="col-sm-6">
                    <h6 class="h-a">
                        <a href="#" class="d-a">Add</a><i> | </i>
                        <a href="#" class="d-a">Edit</a>
                    </h6>
                </div>
            </div>
            
            <div class="wrapper-settings">
                <div class="form-group">
                    <div class="col-sm-5">
                        <div class="row"><label class="control-label" for="">User Name</label></div>
                    </div>                
                    <div class="col-sm-7">
                        <select class="form-control">
                            <option>Select One</option>
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-5">
                        <div class="row"><label class="control-label" for="">First Name</label></div>
                    </div>                
                    <div class="col-sm-7">
                        <select class="form-control">
                            <option>System auto populates</option>
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-5">
                        <div class="row"><label class="control-label" for="">Last Name</label></div>
                    </div>                
                    <div class="col-sm-7">
                        <select class="form-control">
                            <option>System auto populates</option>
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-5">
                        <div class="row"><label class="control-label" for="">User ID</label></div>
                    </div>                
                    <div class="col-sm-7">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-5">
                        <div class="row"><label class="control-label" for="">SSN</label></div>
                    </div>                
                    <div class="col-sm-7">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-5">
                        <div class="row"><label class="control-label" for="">Degree</label></div>
                    </div>                
                    <div class="col-sm-7">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-5">
                        <div class="row"><label class="control-label" for="">Leadership Program</label></div>
                    </div>                
                    <div class="col-sm-7">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-5">
                        <div class="row"><label class="control-label" for="">Vocation Program</label></div>
                    </div>                
                    <div class="col-sm-7">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-5">
                        <div class="row"><label class="control-label" for="">Quarter</label></div>
                    </div>                
                    <div class="col-sm-7">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-5">
                        <div class="row"><label class="control-label" for="">E-Date</label></div>
                    </div>                
                    <div class="col-sm-7">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-5">
                        <div class="row"><label class="control-label" for="">G-Date</label></div>
                    </div>                
                    <div class="col-sm-7">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-5">
                        <div class="row"><label class="control-label" for="">G-Status</label></div>
                    </div>                
                    <div class="col-sm-7">
                        <input type="" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
            </div>
        </form>     
    </div>
    
    <!--Financial Aid Awards-->
    <div class="col-md-4 d-btns">
        <form class="form-horizontal" role="form" id="">
            <div class="form-group">
                <div class="col-sm-8">
                    <h6 class="h-6">Financial Aid Awards</h6>
                </div>
                <div class="col-sm-4">                 
                    <h6 class="h-a">
                        <a href="#" class="d-a">Add</a><i> | </i>
                        <a href="#" class="d-a">Edit</a>
                </div>
            </div>
            
            <div class="wrapper-settings">
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Pell Grant</label>
                    <div class="col-sm-3">
                        <div class="row">
                            <input type="" class="form-control" id="" placeholder="Award amount">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <input type="button" class="btn btn-danger" value="Edit">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Scholarship</label>
                    <div class="col-sm-3">
                        <div class="row">
                            <input type="" class="form-control" id="" placeholder="Award amount">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <input type="button" class="btn btn-danger" value="Edit">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Sponsorship</label>
                    <div class="col-sm-3">
                        <div class="row">
                            <input type="" class="form-control" id="" placeholder="Award amount">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <input type="button" class="btn btn-danger" value="Edit">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Other</label>
                    <div class="col-sm-3">
                        <div class="row">
                            <input type="" class="form-control" id="" placeholder="Award amount">
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
    
    <!--Educational Fee-->
    <div class="col-md-4 d-btns">
        <form class="form-horizontal" role="form" id="">
            <div class="form-group">
                <div class="col-sm-6">
                    <h6 class="h-6">Educational Fee</h6>
                </div>
                <div class="col-sm-6">
                    <h6 class="h-a">
                        <a href="#" class="d-a">Add</a><i> | </i>
                        <a href="#" class="d-a">Edit</a>
                    </h6>
                </div>
            </div>
            
            <div class="wrapper-settings">
                <div class="form-group">
                    <label class="control-label col-sm-5" for="">College Readiness</label>
                    <div class="col-sm-3">
                        <div class="row">
                            <input type="text" class="form-control" id="" placeholder="Enter amount">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <input type="button" class="btn btn-danger" value="Edit">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="">Student Orientation</label>
                    <div class="col-sm-3">
                        <div class="row">
                            <input type="text" class="form-control" id="" placeholder="Enter amount">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <input type="button" class="btn btn-danger" value="Edit">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="">Leadership</label>
                    <div class="col-sm-3">
                        <div class="row">
                            <input type="text" class="form-control" id="" placeholder="Enter amount">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <input type="button" class="btn btn-danger" value="Edit">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="">Vocation</label>
                    <div class="col-sm-3">
                        <div class="row">
                            <input type="text" class="form-control" id="" placeholder="Enter amount">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <input type="button" class="btn btn-danger" value="Edit">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="">Technology</label>
                    <div class="col-sm-3">
                        <div class="row">
                            <input type="text" class="form-control" id="" placeholder="Enter amount">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <input type="button" class="btn btn-danger" value="Edit">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="">Residency</label>
                    <div class="col-sm-3">
                        <div class="row">
                            <input type="text" class="form-control" id="" placeholder="Enter amount">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <input type="button" class="btn btn-danger" value="Edit">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="">Transportation</label>
                    <div class="col-sm-3">
                        <div class="row">
                            <input type="text" class="form-control" id="" placeholder="Enter amount">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <input type="button" class="btn btn-danger" value="Edit">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </div>
                </div>
            </div>
        </form>     
    </div>
</div>


<div class="col-md-12 myaccount">
    <!--Invoice Setting-->
    <div class="col-md-4">
        <form class="form-horizontal" role="form" id="">
            <div class="form-group">
                <div class="col-sm-8">
                    <h6 class="h-6">Invoice Settings</h6>
                </div>
                <div class="col-sm-4">
                    <h6 class="h-a">
                        <a href="#" class="d-a">Add</a><i> | </i>
                        <a href="#" class="d-a">Edit</a>
                    </h6>
                </div>
            </div>
            
            <div class="wrapper-settings">
                <div class="form-group">
                    <div class="col-sm-3">
                        <div class="row"><label class="control-label" for="">Invoice &#35;</label></div>
                    </div>                
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <div class="row"><label class="control-label" for="">Program</label></div>
                    </div>                
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <div class="row"><label class="control-label" for="">Year</label></div>
                    </div>                
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <div class="row"><label class="control-label" for="">Quarter</label></div>
                    </div>                
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <div class="row"><label class="control-label" for="">Amount</label></div>
                    </div>                
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <div class="row"><label class="control-label" for="">Date</label></div>
                    </div>                
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <div class="row"><label class="control-label" for="">File Type</label></div>
                    </div>                
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
            </div>
        </form>     
    </div>  
    
    <!--Invoice Summary Setting-->
    <div class="col-md-4">
        <form class="form-horizontal" role="form" id="">
            <div class="form-group">
                <div class="col-sm-8">
                    <h6 class="h-6">Invoice Summary Settings</h6>
                </div>
                <div class="col-sm-4">
                    <h6 class="h-a">
                        <a href="#" class="d-a">Add</a><i> | </i>
                        <a href="#" class="d-a">Edit</a>
                    </h6>
                </div>
            </div>
            
            <div class="wrapper-settings">
                <div class="form-group">
                    <div class="col-sm-3">
                        <div class="row"><label class="control-label" for="">Code</label></div>
                    </div>                
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <div class="row"><label class="control-label" for="">Program</label></div>
                    </div>                
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <div class="row"><label class="control-label" for="">eCourse</label></div>
                    </div>                
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <div class="row"><label class="control-label" for="">Year</label></div>
                    </div>                
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <div class="row"><label class="control-label" for="">Quarter</label></div>
                    </div>                
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <div class="row"><label class="control-label" for="">Date</label></div>
                    </div>                
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <div class="row"><label class="control-label" for="">Amount</label></div>
                    </div>                
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <div class="row"><label class="control-label" for="">File Type</label></div>
                    </div>                
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <div class="row"><label class="control-label" for="">Next Bill</label></div>
                    </div>                
                    <div class="col-sm-9">
                       <input type="checkbox" class="checkbox-inline"> <span>Activate Assessment Links</span>
                    </div>
                </div>
            </div>
        </form>     
    </div> 
    
    <!--Payment History Setting-->
    <div class="col-md-4">
        <form class="form-horizontal" role="form" id="">
            <div class="form-group">
                <div class="col-sm-8">
                    <h6 class="h-6">Payment History Settings</h6>
                </div>
                <div class="col-sm-4">
                    <h6 class="h-a">
                        <a href="#" class="d-a">Add</a><i> | </i>
                        <a href="#" class="d-a">Edit</a>
                    </h6>
                </div>
            </div>
            
            <div class="wrapper-settings">
                <div class="form-group">
                    <div class="col-sm-3">
                        <div class="row"><label class="control-label" for="">Transaction &#35;</label></div>
                    </div>                
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <div class="row"><label class="control-label" for="">Program</label></div>
                    </div>                
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <div class="row"><label class="control-label" for="">Quarter</label></div>
                    </div>                
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <div class="row"><label class="control-label" for="">Type</label></div>
                    </div>                
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <div class="row"><label class="control-label" for="">Amount</label></div>
                    </div>                
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <div class="row"><label class="control-label" for="">Date</label></div>
                    </div>                
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>           
                <div class="form-group">
                    <div class="col-sm-3">
                        <div class="row"><label class="control-label" for="">File Type</label></div>
                    </div>                
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="System auto populated">
                    </div>
                </div>
            </div>
        </form>     
    </div>  
    <div class="col-md-12">
        <div class="form-group pull-right">
            <input type="button" class="btn btn-danger btn-small" value="Save">
        </div>
    </div>
</div>

