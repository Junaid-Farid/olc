<div class="config">
    <div class="top-text">
        <div class="col-md-12">
            <h4>Configure Transcript</h4>
            <p class="p5">Configure Transcript using user settings, grades, credit hours, and other information.</p>
        </div>
    </div>  
    
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptcreate') ?>">Create</a></li>
                <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptusers') ?>">Users</a></li>
                <li id="li3" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptarchive') ?>">Archive</a></li>
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
                                   <option>Orientation College Preparation</option>
                                   <option>Leadership</option>
                                   <option>Vocation</option>
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
        <div class="wrapper-archive">
            <h6 class="h-4">User Queue</h6>
            <table class="table">
                <thead>
                    <tr>                 
                        <th>Role</th>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>First</th>
                        <th>Last</th>
                        <th>Orientation</th>
                        <th>College Preparation</th>
                        <th>Leadership</th>
                        <th>Vocation</th>
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
                        <td>NA</td>
                        <td>NA</td>
                        <td>NA</td>
                        <td>NA</td>
                        <td><input type="button" class="btn btn-danger" value="Restore"></td>
                    </tr>
                    <tr>
                       <td>Admin</td>
                        <td>CF12345</td>
                        <td>John</td>
                        <td>Hery</td>
                        <td>John</td>
                        <td>NA</td>
                        <td>NA</td>
                        <td>NA</td>
                        <td>NA</td>
                        <td><input type="button" class="btn btn-danger" value="Restore"></td>
                    </tr>
                    <tr>
                        <td>Admin</td>
                        <td>CF12345</td>
                        <td>John</td>
                        <td>Hery</td>
                        <td>John</td>
                        <td>NA</td>
                        <td>NA</td>
                        <td>NA</td>
                        <td>NA</td>
                        <td><input type="button" class="btn btn-danger" value="Restore"></td>
                    </tr>
                    <tr>
                        <td>Admin</td>
                        <td>CF12345</td>
                        <td>John</td>
                        <td>Hery</td>
                        <td>John</td>
                        <td>NA</td>
                        <td>NA</td>
                        <td>NA</td>
                        <td>NA</td>
                        <td><input type="button" class="btn btn-danger" value="Restore"></td>
                    </tr>
                    <tr>
                        <td>Admin</td>
                        <td>CF12345</td>
                        <td>John</td>
                        <td>Hery</td>
                        <td>John</td>
                        <td>NA</td>
                        <td>NA</td>
                        <td>NA</td>
                        <td>NA</td>
                        <td><input type="button" class="btn btn-danger" value="Restore"></td>
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