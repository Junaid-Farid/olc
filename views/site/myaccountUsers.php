<div class="top-text">
    <div class="col-md-12">
        <h4>Configure My Account</h4>
        <p class="p5">Review and edit user My Accounts.</p>

    </div>
</div>  
<div class="col-md-12">
    <div id="centeredmenu">
        <ul class="top-ul">
            <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/myaccountcreate') ?>">Create</a></li>
            <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/myaccountplan') ?>">myEduPlan</a></li>
            <li id="li3" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/myaccountusers') ?>">Users</a></li>
        </ul>
    </div>
</div>

<div class="config">    
    <div class="col-md-12 s-rol">
        <div class="col-md-5 col-md-offset-7">
            <div class="wrapper-dashboard">
                <form>          
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">Search</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <select class="form-control">
                                    <option>Select One</option>
                                    <option>User ID</option>
                                    <option>Role</option>
                                    <option>Admin</option>
                                    <option>Faculty</option>
                                    <option>Student</option>
                                    <option>Username</option>
                                    <option>Quarter</option>
                                    <option>Year</option>
                                    <option>E-Date</option>
                                    <option>G-Date</option>
                                    <option>G-Status</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="row">
                                <input type="button" class="btn btn-danger" value="Load">                   
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="col-md-12 users">
        <div class="wrapper-users">
            <h4 class="h-4">User Queue</h4>
            <table class="table">
                <thead>
                    <tr>                 
                        <th>Role</th>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>First</th>
                        <th>Last</th>
                        <th>SSN</th>
                        <th>Quarter</th>
                        <th>Year</th>
                        <th>E-Date</th>
                        <th>G-Date</th>
                        <th>G-Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Admin</td>
                        <td>CF12345</td>
                        <td>John</td>
                        <td>Hery</td>
                        <td>John</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q4</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>15-JUN-2015</td>
                        <td>No</td>
                        <td><input type="button" class="btn btn-danger" value="Edit" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/myaccounteditplan') ?>'"></td>
                    </tr>
                    <tr>
                        <td>Admin</td>
                        <td>CF12345</td>
                        <td>John</td>
                        <td>Hery</td>
                        <td>John</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q4</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>15-JUN-2015</td>
                        <td>No</td>
                        <td><input type="button" class="btn btn-danger" value="Edit" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/myaccounteditplan') ?>'"></td>
                    </tr>
                    <tr>
                        <td>Faculty</td>
                        <td>CF12345</td>
                        <td>John</td>
                        <td>Hery</td>
                        <td>John</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q4</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>15-JUN-2015</td>
                        <td>No</td>
                        <td><input type="button" class="btn btn-danger" value="Edit" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/myaccounteditplan') ?>'"></td>
                    </tr>
                    <tr>
                        <td>Faculty</td>
                        <td>CF12345</td>
                        <td>John</td>
                        <td>Hery</td>
                        <td>John</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q4</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>15-JUN-2015</td>
                        <td>No</td>
                        <td><input type="button" class="btn btn-danger" value="Edit" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/myaccounteditplan') ?>'"></td>
                    </tr>
                    <tr>
                        <td>Admin</td>
                        <td>CF12345</td>
                        <td>John</td>
                        <td>Hery</td>
                        <td>John</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q4</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>15-JUN-2015</td>
                        <td>No</td>
                        <td><input type="button" class="btn btn-danger" value="Edit" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/myaccounteditplan') ?>'"></td>
                    </tr>
                    <tr>
                        <td>Admin</td>
                        <td>CF12345</td>
                        <td>John</td>
                        <td>Hery</td>
                        <td>John</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q4</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>15-JUN-2015</td>
                        <td>No</td>
                        <td><input type="button" class="btn btn-danger" value="Edit" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/myaccounteditplan') ?>'"></td>
                    </tr>
                    <tr>
                        <td>Admin</td>
                        <td>CF12345</td>
                        <td>John</td>
                        <td>Hery</td>
                        <td>John</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q4</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>15-JUN-2015</td>
                        <td>No</td>
                        <td><input type="button" class="btn btn-danger" value="Edit" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/myaccounteditplan') ?>'"></td>
                    </tr>
                    <tr>
                        <td>Admin</td>
                        <td>CF12345</td>
                        <td>John</td>
                        <td>Hery</td>
                        <td>John</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q4</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>15-JUN-2015</td>
                        <td>No</td>
                        <td><input type="button" class="btn btn-danger" value="Edit" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/myaccounteditplan') ?>'"></td>
                    </tr>
                    <tr>
                        <td>Admin</td>
                        <td>CF12345</td>
                        <td>John</td>
                        <td>Hery</td>
                        <td>John</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q4</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>15-JUN-2015</td>
                        <td>No</td>
                        <td><input type="button" class="btn btn-danger" value="Edit" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/myaccounteditplan') ?>'"></td>
                    </tr>
                    <tr>
                        <td>Admin</td>
                        <td>CF12345</td>
                        <td>John</td>
                        <td>Hery</td>
                        <td>John</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q4</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>15-JUN-2015</td>
                        <td>No</td>
                        <td><input type="button" class="btn btn-danger" value="Edit" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/myaccounteditplan') ?>'"></td>
                    </tr>
                    <tr>
                        <td>Admin</td>
                        <td>CF12345</td>
                        <td>John</td>
                        <td>Hery</td>
                        <td>John</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q4</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>15-JUN-2015</td>
                        <td>No</td>
                        <td><input type="button" class="btn btn-danger" value="Edit" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/myaccounteditplan') ?>'"></td>
                    </tr>
                    <tr>
                        <td>Admin</td>
                        <td>CF12345</td>
                        <td>John</td>
                        <td>Hery</td>
                        <td>John</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q4</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>15-JUN-2015</td>
                        <td>No</td>
                        <td><input type="button" class="btn btn-danger" value="Edit" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/myaccounteditplan') ?>'"></td>
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


