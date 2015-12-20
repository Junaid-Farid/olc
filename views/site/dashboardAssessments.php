<div class="top-text">
    <div class="col-md-12">
        <h4>Configure Dashboard</h4>
        <p class="p5">Create, edit, print, and delete assessment document links.</p>
    </div>
</div>  
<div class="col-md-12">
    <div id="centeredmenu">
        <ul class="top-ul">
            <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardcreate') ?>">Create</a></li>
            <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardusers') ?>">Users</a></li>
            <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboarddefault') ?>">Default</a></li>
            <li id="li4"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardpolicy') ?>">Policies</a></li>
            <li id="li5"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardcourse') ?>">Courseware</a></li>
            <li id="li6"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardlibraries') ?>">Libraries</a></li>
            <li id="li7" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardassessments') ?>">Assessments</a></li>
        </ul>
    </div>
</div>

<div class="col-md-12">
    <div class="col-md-6 tbl-d">
        <h5 class="d-heading">Assessments Links</h5>
        <div class="wrapper-policies">
            <table class="table">
                <tbody>
                    <tr>
                        <td><a href="#">Readiness Assessment</a></td>
                        <td>
                            <input type="button" class="btn btn-danger" value="Delete">
                            <input type="button" class="btn btn-danger" value="Edit">
                        </td>
                    </tr>
                    <tr>
                       <td><a href="#">Lifestyle Behavioral Interview</a></td>
                        <td>
                            <input type="button" class="btn btn-danger" value="Delete">
                            <input type="button" class="btn btn-danger" value="Edit">
                        </td>
                    </tr>
                    <tr>
                       <td><a href="#">Learning Styles Inventory</a></td>
                        <td>
                            <input type="button" class="btn btn-danger" value="Delete">
                            <input type="button" class="btn btn-danger" value="Edit">
                        </td>
                    </tr>
                    <tr>
                       <td><a href="#">Learning Technologist Inventory</a></td>
                        <td>
                            <input type="button" class="btn btn-danger" value="Delete">
                            <input type="button" class="btn btn-danger" value="Edit">
                        </td>
                    </tr>
                    <tr>
                       <td><a href="#">Personal Leadership Readiness Inventory</a></td>
                        <td>
                            <input type="button" class="btn btn-danger" value="Delete">
                            <input type="button" class="btn btn-danger" value="Edit">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="col-md-5 col-md-offset-1">
        <div class="wrapper-dashboard">
            <form class="form-horizontal" role="form">
                <div class="form-group">
                   <label class="control-label col-sm-3" for="">Label Name</label>
                   <div class="col-sm-6">
                       <div class="row">
                            <input type="text" class="form-control" id="" placeholder="Enter File Name">
                       </div>
                   </div>
                   <div class="col-sm-3"></div>
                </div>
                <div class="form-group">
                   <label class="control-label col-sm-3" for="">Link Type</label>
                   <div class="col-sm-6">
                       <div class="row">
                           <select class="form-control">
                                <option>Select One</option>
                                <option>Assessment</option>
                                <option>Interview</option>
                                <option>Inventory</option>
                            </select>
                       </div>
                   </div>
                   <div class="col-sm-3"></div>
                </div>
                <div class="form-group">
                   <label class="control-label col-sm-3" for="">URL</label>
                   <div class="col-sm-6">
                       <div class="row">
                           <input type="text" class="form-control" id="" placeholder="Enter URL">
                       </div>
                   </div>
                   <div class="col-sm-3 tbl-d">
                       <div class="row">
                            <input type="button" class="btn btn-danger" value="Save">
                            <input type="button" class="btn btn-danger" value="Add">
                       </div>
                   </div>
               </div>
            </form>
        </div>
    </div>
</div>
