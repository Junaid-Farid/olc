<div class="config">
    <div class="top-text">
        <div class="col-md-12">
            <h4>Configure Programs</h4>
            <p class="p5">View and edit configured programs.</p>

        </div>
    </div>  
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/programcreate') ?>">Create</a></li>
                <li id="li2" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/programview') ?>">View</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/programarchive') ?>">Archive</a></li>
                <li id="li4"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/programoption') ?>">Add Option</a></li>
            </ul>
        </div>
    </div>
    
    <div class="col-md-12 s-rol">
        <div class="col-md-5 col-md-offset-7">
            <div class="wrapper-archive">
                <form>          
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">Search</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <select class="form-control">
                                    <option>Select One</option>
                                    <option>Group</option>
                                    <option>Program ID</option>
                                    <option>Title</option>
                                    <option>#eCourses</option>
                                    <option>Degree</option>
                                    <option>Type</option>
                                    <option>Length</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="row">
                                <input type="button" class="btn btn-danger" value="Add">                   
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
    <div class="col-md-12 users">
        <div class="wrapper-archive">
        <h4 class="h-4">Program Listing</h4>
            <table class="table">
                <thead>
                    <tr>                                     
                        <th>Group</th> 
                        <th>Program ID</th>
                        <th>Title</th>
                        <th>#eCourses</th>  
                        <th>Degree</th>
                        <th>Type</th>
                        <th>Length</th>                   
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>College Prep</td>
                        <td>CR</td>
                        <td>College Readiness</td>
                        <td>2</td>
                        <td>NA</td>
                        <td>NA</td>
                        <td>12 Weeks</td>
                        <td>
                           <input type="button" class="btn btn-danger" value="Archive">
                           <input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/programedit') ?>'" value="Edit">
                        </td>
                    </tr>
                    <tr>
                        <td>Orientation</td>
                        <td>SO</td>
                        <td>Student Orientation</td>
                        <td>3</td>
                        <td>NA</td>
                        <td>NA</td>
                        <td>6 Weeks</td>
                        <td>
                           <input type="button" class="btn btn-danger" value="Archive">
                           <input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/programedit') ?>'" value="Edit">
                        </td>
                    </tr>
                    <tr>
                        <td>Orientation</td>
                        <td>FO</td>
                        <td>Faculty Orientation</td>
                        <td>3</td>
                        <td>NA</td>
                        <td>NA</td>
                        <td>6 Weeks</td>
                        <td>
                           <input type="button" class="btn btn-danger" value="Archive">
                           <input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/programedit') ?>'" value="Edit">
                        </td>
                    </tr>
                    <tr>
                        <td>Leadership</td>
                        <td>PTL</td>
                        <td>Personal Transformation Leadership</td>
                        <td>9</td>
                        <td>Integrated</td>
                        <td>AA, AS</td>
                        <td>22 months</td>
                        <td>
                           <input type="button" class="btn btn-danger" value="Archive">
                           <input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/programedit') ?>'" value="Edit">
                        </td>
                    </tr>
                    <tr>
                        <td>Vocation</td>
                        <td>DMT</td>
                        <td>Digital Media Technology</td>
                        <td>10</td>
                        <td>Associates</td>
                        <td>AA</td>
                        <td>24 months</td>
                        <td>
                           <input type="button" class="btn btn-danger" value="Archive">
                           <input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/programedit') ?>'" value="Edit">
                        </td>
                    </tr>
                    <tr>
                        <td>Vocation</td>
                        <td>IDT</td>
                        <td>Instructional Design Technology</td>
                        <td>10</td>
                        <td>Associates</td>
                        <td>AA</td>
                        <td>24 months</td>
                        <td>
                           <input type="button" class="btn btn-danger" value="Archive">
                           <input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/programedit') ?>'" value="Edit">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--Pagination-->
    <div class="col-md-12">
        <div class="wrapper-pagination">
            <div class="pagination pull-right">
                <span class="back">
                    <a href="#">&nbsp;</a>
                </span>
                <p>Page: <span>1</span> of <span>3</span></p>
                <span class="forward">
                    <a href="#">&nbsp;</a>
                </span>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>