<div class="config">
    <div class="top-text">
        <div class="col-md-12">
            <h4>Configure Transcript</h4>
            <p class="p5">View, edit, delete and archive user accounts.</p>
        </div>
    </div>
    
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptcreate') ?>">Create</a></li>
                <li id="li2" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptusers') ?>">Users</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptarchive') ?>">Archive</a></li>
            </ul>
        </div>
    </div>
    
    <div class="col-md-12 s-rol">
        <div class="col-md-5 col-md-offset-7">
            <div class="wrapper-dashboard">
                <form>          
                   <div class="form-group">
                       <label class="control-label col-sm-2" for="">Search</label>
                       <div class="col-sm-8">                   
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
            <h6 class="h-4">User Queue</h6>
            <div class="table-responsive">
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
                            <td>CA3009716502</td>
                            <td>tshinshuri</td>
                            <td>Tammé</td>
                            <td>Shinshuri</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptedit') ?>'" value="Edit"></td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptarchive') ?>'" value="Archive"></td>
                        </tr>
                        <tr>
                            <td>Admin</td>
                            <td>PA1782600451</td>
                            <td>kapopkave</td>
                            <td>KimAlyse</td>
                            <td>Popkave</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptedit') ?>'" value="Edit"></td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptarchive') ?>'" value="Archive"></td>
                        </tr>
                        <tr>
                            <td>Admin</td>
                            <td>CA2975311100</td>
                            <td>kgreen</td>
                            <td>Kimberly</td>
                            <td>Green</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptedit') ?>'" value="Edit"></td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptarchive') ?>'" value="Archive"></td>
                        </tr>
                        <tr>
                            <td>Admin</td>
                            <td>CA4300912704</td>
                            <td>esteponic</td>
                            <td>Erika</td>
                            <td>Steponic</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptedit') ?>'" value="Edit"></td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptarchive') ?>'" value="Archive"></td>
                        </tr>
                        <tr>
                            <td>Admin</td>
                            <td>CA0122256071</td>
                            <td>jmorrow</td>
                            <td>Jacqueline</td>
                            <td>Morrow</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptedit') ?>'" value="Edit"></td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptarchive') ?>'" value="Archive"></td>
                        </tr>
                        <tr>
                            <td>Faculty</td>
                            <td>DC8001572996</td>
                            <td>qstroud</td>
                            <td>Quenton</td>
                            <td>Stroud</td>
                            <td>Faculty</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptedit') ?>'" value="Edit"></td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptarchive') ?>'" value="Archive"></td>
                        </tr>
                        <tr>
                            <td>Faculty</td>
                            <td>PA1782600451</td>
                            <td>kapopkave</td>
                            <td>KimAlyse</td>
                            <td>Popkave</td>
                            <td>Faculty</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptedit') ?>'" value="Edit"></td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptarchive') ?>'" value="Archive"></td>
                        </tr>
                        <tr>
                            <td>Faculty</td>
                            <td>CA4029831474</td>
                            <td>ksolorio</td>
                            <td>Kathleen</td>
                            <td>Solorio</td>
                            <td>Faculty</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptedit') ?>'" value="Edit"></td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptarchive') ?>'" value="Archive"></td>
                        </tr>
                        <tr>
                            <td>Faculty</td>
                            <td>CA0278116210</td>
                            <td>mvilla</td>
                            <td>Michael</td>
                            <td>Villa</td>
                            <td>Faculty</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptedit') ?>'" value="Edit"></td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptarchive') ?>'" value="Archive"></td>
                        </tr>
                        <tr>
                            <td>Faculty</td>
                            <td>FL2276102367</td>
                            <td>lblake</td>
                            <td>Lorna</td>
                            <td>Blake</td>
                            <td>Faculty</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptedit') ?>'" value="Edit"></td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptarchive') ?>'" value="Archive"></td>
                        </tr>
                        <tr>
                            <td>Student</td>
                            <td>CA1457889021</td>
                            <td>bmjacobs</td>
                            <td>Benson</td>
                            <td>Jacobs</td>
                            <td>Student</td>
                            <td>NA</td>
                            <td style="padding-right: 0px;">Personal Transformation</td>
                            <td style="padding-right: 0px;">Instructional Design Technology</td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptedit') ?>'" value="Edit"></td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptarchive') ?>'" value="Archive"></td>
                        </tr>
                        <tr>
                            <td>Student</td>
                            <td>CA7501348920</td>
                            <td>tpeterson</td>
                            <td>Thomas</td>
                            <td>Peterson</td>
                            <td>Student</td>
                            <td>NA</td>
                            <td style="padding-right: 0px;">Personal Transformation</td>
                            <td style="padding-right: 0px;">Digital Media Technology</td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptedit') ?>'" value="Edit"></td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptarchive') ?>'" value="Archive"></td>
                        </tr>
                        <tr>
                            <td>Student</td>
                            <td>CA2020115673</td>
                            <td>mwalters</td>
                            <td>Mary</td>
                            <td>Walters</td>
                            <td>Student</td>
                            <td>College Readiness</td>
                            <td style="padding-right: 0px;">Personal Transformation</td>
                            <td style="padding-right: 0px;">Instructional Design Technology</td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptedit') ?>'" value="Edit"></td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptarchive') ?>'" value="Archive"></td>
                        </tr>
                        <tr>
                            <td>Student</td>
                            <td>CA5014077721</td>
                            <td>jschmoe</td>
                            <td>Joe</td>
                            <td>Schmoe</td>
                            <td>Student</td>
                            <td>College Readiness</td>
                            <td style="padding-right: 0px;">Personal Transformation</td>
                            <td style="padding-right: 0px;">Instructional Design Technology</td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptedit') ?>'" value="Edit"></td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptarchive') ?>'" value="Archive"></td>
                        </tr>
                        <tr>
                            <td>Student</td>
                            <td>CA7910405943</td>
                            <td>lrogers</td>
                            <td>Loraya</td>
                            <td>Rogers</td>
                            <td>Student</td>
                            <td>NA</td>
                            <td style="padding-right: 0px;">Personal Transformation</td>
                            <td style="padding-right: 0px;">Digital Media Technology</td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptedit') ?>'" value="Edit"></td>
                            <td><input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/transcriptarchive') ?>'" value="Archive"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
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