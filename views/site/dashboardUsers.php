<div class="config">
    <div class="top-text">
        <div class="col-md-12">
            <h4>Configure Dashboard </h4>
            <p class="p5">Edit user dashboards.</p>
        </div>
    </div>  
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardcreate') ?>">Create</a></li>
                <li id="li2" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardusers') ?>">Users</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboarddefault') ?>">Default</a></li>
                <li id="li4"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardpolicy') ?>">Policies</a></li>
                <li id="li5"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardcourse') ?>">Courseware</a></li>
                <li id="li6"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardlibraries') ?>">Libraries</a></li>
                <li id="li7"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardassessments') ?>">Assessments</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-12 s-rol">
        <div class="col-md-5 col-md-offset-7">
            <div class="wrapper-dashboard">
                <form>          
                   <div class="form-group">
                       <label class="control-label col-sm-2" for="">Search:</label>
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
            <h4 class="h-4">Users Queue</h4>
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
                        <td>CA3009716502</td>
                        <td>tshinshuri</td>
                        <td>Tammé</td>
                        <td>Shinshuri</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q3</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>04-APR-17</td>
                        <td>No</td>
                        <td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardedituser') ?>" class="btn btn-danger btn-small" role="button">Edit</a></td>
                    </tr>
                    <tr>
                        <td>Admin</td>
                        <td>PA1782600451</td>
                        <td>kapopkave</td>
                        <td>KimAlyse</td>
                        <td>Popkave</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q3</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>04-SEP-17</td>
                        <td>No</td>
                        <td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardedituser') ?>" class="btn btn-danger btn-small" role="button">Edit</a></td>
                    </tr>
                    <tr>
                        <td>Admin</td>
                        <td>CA2975211100</td>
                        <td>KGREEN</td>
                        <td>Kimberly</td>
                        <td>Green</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q3</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>04-APR-17</td>
                        <td>No</td>
                        <td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardedituser') ?>" class="btn btn-danger btn-small" role="button">Edit</a></td>
                    </tr>
                    <tr>
                        <td>Admin</td>
                        <td>CA4300912704</td>
                        <td>estiponic</td>
                        <td>Erika</td>
                        <td>Steponic</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q3</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>04-APR-17</td>
                        <td>No</td>
                        <td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardedituser') ?>" class="btn btn-danger btn-small" role="button">Edit</a></td>
                    </tr>
                    <tr>
                        <td>Admin</td>
                        <td>CA0122256071</td>
                        <td>jmorrow</td>
                        <td>Jacqueline</td>
                        <td>Morrow</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q3</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>04-APR-17</td>
                        <td>No</td>
                        <td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardedituser') ?>" class="btn btn-danger btn-small" role="button">Edit</a></td>
                    </tr>
                    <tr>
                        <td>Faculty</td>
                        <td>DC8001572996</td>
                        <td>qstroud</td>
                        <td>Quenton</td>
                        <td>Stroud</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q3</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>04-APR-17</td>
                        <td>No</td>
                        <td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardedituser') ?>" class="btn btn-danger btn-small" role="button">Edit</a></td>
                    </tr>
                    <tr>
                        <td>Faculty</td>
                        <td>PA1782600451</td>
                        <td>kapopkave</td>
                        <td>KimAlyse</td>
                        <td>Popkave</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q3</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>04-SEP-17</td>
                        <td>No</td>
                        <td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardedituser') ?>" class="btn btn-danger btn-small" role="button">Edit</a></td>
                    </tr>
                    <tr>
                        <td>Faculty</td>
                        <td>CA4029831474</td>
                        <td>ksolorio</td>
                        <td>Kathleen</td>
                        <td>Solorio</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q3</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>04-APR-17</td>
                        <td>No</td>
                        <td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardedituser') ?>" class="btn btn-danger btn-small" role="button">Edit</a></td>
                    </tr>
                    <tr>
                        <td>Faculty</td>
                        <td>CA0270116210</td>
                        <td>mvilla</td>
                        <td>Michael</td>
                        <td>Villa</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q3</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>04-APR-17</td>
                        <td>No</td>
                        <td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardedituser') ?>" class="btn btn-danger btn-small" role="button">Edit</a></td>
                    </tr>
                    <tr>
                        <td>Faculty</td>
                        <td>FL2276102367</td>
                        <td>Iblake</td>
                        <td>Lorna</td>
                        <td>Blake</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q3</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>04-APR-17</td>
                        <td>No</td>
                        <td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardedituser') ?>" class="btn btn-danger btn-small" role="button">Edit</a></td>
                    </tr>
                    <tr>
                        <td>Student</td>
                        <td>CA1457889021</td>
                        <td>bmjacobs</td>
                        <td>Benson</td>
                        <td>Jcobs</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q3</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>04-APR-17</td>
                        <td>No</td>
                        <td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardedituser') ?>" class="btn btn-danger btn-small" role="button">Edit</a></td>
                    </tr>
                    <tr>
                        <td>Student</td>
                        <td>CA751348920</td>
                        <td>tpeterson</td>
                        <td>Thomas</td>
                        <td>Peterson</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q3</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>04-SEP-17</td>
                        <td>No</td>
                        <td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardedituser') ?>" class="btn btn-danger btn-small" role="button">Edit</a></td>
                    </tr>
                    <tr>
                        <td>Student</td>
                        <td>CA2020115673</td>
                        <td>mwalters</td>
                        <td>Mary</td>
                        <td>Walters</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q3</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>04-APR-17</td>
                        <td>No</td>
                        <td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardedituser') ?>" class="btn btn-danger btn-small" role="button">Edit</a></td>
                    </tr>
                    <tr>
                        <td>Student</td>
                        <td>CA5014077721</td>
                        <td>jschmoe</td>
                        <td>Joe</td>
                        <td>Schmoe</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q3</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>04-APR-17</td>
                        <td>No</td>
                        <td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardedituser') ?>" class="btn btn-danger btn-small" role="button">Edit</a></td>
                    </tr>
                    <tr>
                        <td>Student</td>
                        <td>CA7910405943</td>
                        <td>Irogers</td>
                        <td>Loraya</td>
                        <td>Rogers</td>
                        <td>XXX-XX-XXXX</td>
                        <td>Q3</td>
                        <td>2015</td>
                        <td>08-SEP-2015</td>
                        <td>04-APR-17</td>
                        <td>No</td>
                        <td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboardedituser') ?>" class="btn btn-danger btn-small" role="button">Edit</a></td>
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
