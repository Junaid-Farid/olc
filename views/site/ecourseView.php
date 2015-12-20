<div class="config">
    <div class="top-text">
        <div class="col-md-12">
            <h4>Configure eCourses</h4>
            <p class="p5">View and edit eCourse options.</p>

        </div>
    </div>  
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/ecoursecreate') ?>">Create</a></li>
                <li id="li2" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/ecourseview') ?>">View</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/ecoursearchive') ?>">Archive</a></li>
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
                                    <option>Group</option>
                                    <option>ECO Code</option>
                                    <option>ECO#</option>                                    
                                    <option>EC Code</option>
                                    <option>EM Code</option>
                                    <option>FM Code</option>
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
        <div class="wrapper-users">
        <table class="table">
            <thead>
                <tr>                 
                    <th>ECO Code</th>
                    <th>ECO#</th>
                    <th>Group</th>
                    <th>eCourse Title</th>
                    <th>Length</th>
                    <th>Unit</th>
                    <th>C-Hrs</th>
                    <th>EM Code</th>
                    <th>EC Code</th>
                    <th>FM Code</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>CR1234</td>
                    <td>CF1234</td>
                    <td>College Prep</td>
                    <td>ELS Strategies</td>
                    <td>8</td>
                    <td>Weeks</td>
                    <td>0</td>
                    <td>EM-1232</td>
                    <td>EC-1232</td>
                    <td>FM-1232</td>
                    <td><input type="button" class="btn btn-danger" value="Edit" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/ecourseedit') ?>'"></td>
                </tr>
                <tr>
                     <td>CR1234</td>
                    <td>CF1234</td>
                    <td>College Prep</td>
                    <td>ELS Strategies</td>
                    <td>8</td>
                    <td>Weeks</td>
                    <td>0</td>
                    <td>EM-1232</td>
                    <td>EC-1232</td>
                    <td>FM-1232</td>
                    <td><input type="button" class="btn btn-danger" value="Edit" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/ecourseedit') ?>'"></td>
                </tr>
                <tr>
                    <td>CR1234</td>
                    <td>CF1234</td>
                    <td>College Prep</td>
                    <td>ELS Strategies</td>
                    <td>8</td>
                    <td>Weeks</td>
                    <td>0</td>
                    <td>EM-1232</td>
                    <td>EC-1232</td>
                    <td>FM-1232</td>
                    <td><input type="button" class="btn btn-danger" value="Edit" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/ecourseedit') ?>'"></td>
                </tr>
                <tr>
                    <td>CR1234</td>
                    <td>CF1234</td>
                    <td>College Prep</td>
                    <td>ELS Strategies</td>
                    <td>8</td>
                    <td>Weeks</td>
                    <td>0</td>
                    <td>EM-1232</td>
                    <td>EC-1232</td>
                    <td>FM-1232</td>
                    <td><input type="button" class="btn btn-danger" value="Edit" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/ecourseedit') ?>'"></td>
                </tr>
                <tr>
                   <td>CR1234</td>
                    <td>CF1234</td>
                    <td>College Prep</td>
                    <td>ELS Strategies</td>
                    <td>8</td>
                    <td>Weeks</td>
                    <td>0</td>
                    <td>EM-1232</td>
                    <td>EC-1232</td>
                    <td>FM-1232</td>
                    <td><input type="button" class="btn btn-danger" value="Edit" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/ecourseedit') ?>'"></td>
                </tr>
                <tr>
                   <td>CR1234</td>
                    <td>CF1234</td>
                    <td>College Prep</td>
                    <td>ELS Strategies</td>
                    <td>8</td>
                    <td>Weeks</td>
                    <td>0</td>
                    <td>EM-1232</td>
                    <td>EC-1232</td>
                    <td>FM-1232</td>
                    <td><input type="button" class="btn btn-danger" value="Edit" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/ecourseedit') ?>'"></td>
                </tr>
                <tr>
                   <td>CR1234</td>
                    <td>CF1234</td>
                    <td>College Prep</td>
                    <td>ELS Strategies</td>
                    <td>8</td>
                    <td>Weeks</td>
                    <td>0</td>
                    <td>EM-1232</td>
                    <td>EC-1232</td>
                    <td>FM-1232</td>
                    <td><input type="button" class="btn btn-danger" value="Edit" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/ecourseedit') ?>'"></td>
                </tr>
                <tr>
                   <td>CR1234</td>
                    <td>CF1234</td>
                    <td>College Prep</td>
                    <td>ELS Strategies</td>
                    <td>8</td>
                    <td>Weeks</td>
                    <td>0</td>
                    <td>EM-1232</td>
                    <td>EC-1232</td>
                    <td>FM-1232</td>
                    <td><input type="button" class="btn btn-danger" value="Edit" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/ecourseedit') ?>'"></td>
                </tr>
               
            </tbody>
        </table>
        </div>
    </div>
    </div>

