<div class="config">
    <div class="top-text">
        <div class="col-md-12">
            <h4>Configure Accounts</h4>
            <p class="p5">Restore archived accounts.</p>
        </div>
    </div>  
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/configureapplications') ?>">Applications</a></li>
                <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/configureprograms') ?>">Programs</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('users/index') ?>">Users</a></li>
                <li id="li4" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/configurearchive') ?>">Archive</a></li>
            </ul>
        </div>
    </div>
    <!--Roles-->
    <div class="col-md-12 s-rol">
        <div class="col-md-5 col-md-offset-7">
            <div class="wrapper-role">
                <form>          
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">Role</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <select class="form-control">
                                    <option>Select One</option>
                                    <option>Student</option>
                                    <option>Instructor</option>
                                    <option>Employee</option>
                                    <option>Administrator</option>
                                    <option>Employer</option>
                                    <option>Partner</option>
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
    
    <!--Users Listings-->
    <div class="col-md-12 users">
        <div class="wrapper-users">
            <h4 class="h-4">Records Queue</h4>
            <table class="table">
                <thead>
                    <tr>                 
                        <th>User ID</th>
                        <th>First</th>
                        <th>Last</th>
                        <th>Middle</th>
                        <th>SSN</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>CA1457889021</td>
                        <td>Benson</td>
                        <td>Jacobs</td>
                        <td>Michael</td>
                        <td>XXX-XX-2100</td>
                        <td>1435 Davidson Street</td>
                        <td>Rancho Cordova</td>
                        <td>CA</td>
                        <td>XXXXX</td>
                        <td><a href="#" class="btn btn-danger btn-small">Restore</a></td>
                    </tr>
                    <tr>
                        <td>CA7501348920</td>
                        <td>Thomas</td>
                        <td>Peterson</td>
                        <td>Lowel</td>
                        <td>XXX-XX-1245</td>
                        <td>125 Main Street</td>
                        <td>Sacramento</td>
                        <td>CA</td>
                        <td>XXXXX</td>
                        <td><a href="#" class="btn btn-danger btn-small">Restore</a></td>
                    </tr>
                    <tr>
                        <td>CA2020115673</td>
                        <td>Mary</td>
                        <td>Walters</td>
                        <td>Ann</td>
                        <td>XXX-XX-7824</td>
                        <td>23456 Globe Ave</td>
                        <td>Folsom</td>
                        <td>CA</td>
                        <td>XXXXX</td>
                        <td><a href="#" class="btn btn-danger btn-small">Restore</a></td>
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
