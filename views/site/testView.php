<div class="config">
    <div class="top-text">
        <div class="col-md-12">
            <h4>Grade Assignments</h4>
            <p class="p5">Grade course assignments submitted to the DropBox for grading and feedback.</p>
        </div>
    </div>  
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/assignmentcreate') ?>">Create</a></li>
                <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/assignmentview') ?>">View</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/assignmentarchive') ?>">Archive</a></li>
            </ul>
        </div>
    </div>
    
    <div class="col-md-12 s-rol">
        <div class="col-md-4 col-md-offset-8">
            <div class="wrapper-assignment">
                <form>          
                   <div class="form-group">
                       <label class="control-label col-sm-2" for="">Sort:</label>
                       <div class="col-sm-10">
                           <select class="form-control">
                               <option>Select One</option>
                               <option>option1</option>
                               <option>option2</option>
                               <option>option3</option>
                           </select>
                       </div> 
                   </div>
               </form>
            </div>
        </div>
    </div>
    
    <div class="col-md-12 users">
       <div class="wrapper-assignment">
           <table class="table table-striped">
               <thead>
                   <tr>                 
                       <th>Program ID</th>
                       <th>EC Code</th>
                       <th>Title</th>
                       <th>Year</th>
                       <th>Quarter</th>
                       <th>Assignment link</th>                   
                       <th>Due Date</th>                
                       <th></th>   
                   </tr>
               </thead>
               <tbody>
                   <tr>
                       <td>PTL100</td>
                       <td>PTL100</td>
                       <td>Live Awakened Life</td>
                       <td>2015</td>
                       <td>Fall</td>
                       <td><a href="#">Recognize your Inner Essence</a></td>
                       <td>9/15/15</td>
                       <td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/assignmentedit') ?>" class="btn btn-danger btn-small" role="button">Edit</a></td>
                   </tr>
                   <tr>
                       <td>PTL100</td>
                       <td>PTL100</td>
                       <td>Live Awakened Life</td>
                       <td>2015</td>
                       <td>Fall</td>
                       <td><a href="#">Recognize your Inner Essence</a></td>
                       <td>9/15/15</td>
                       <td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/assignmentedit') ?>" class="btn btn-danger btn-small" role="button">Edit</a></td>
                   </tr>
                   <tr>
                       <td>PTL100</td>
                       <td>PTL100</td>
                       <td>Live Awakened Life</td>
                       <td>2015</td>
                       <td>Fall</td>
                       <td><a href="#">Recognize your Inner Essence</a></td>
                       <td>9/15/15</td>
                       <td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/assignmentedit') ?>" class="btn btn-danger btn-small" role="button">Edit</a></td>
                   </tr>
                   <tr>
                       <td>PTL100</td>
                       <td>PTL100</td>
                       <td>Live Awakened Life</td>
                       <td>2015</td>
                       <td>Fall</td>
                       <td><a href="#">Recognize your Inner Essence</a></td>
                       <td>9/15/15</td>
                       <td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/assignmentedit') ?>" class="btn btn-danger btn-small" role="button">Edit</a></td>
                   </tr>
                   <tr>
                       <td>PTL100</td>
                       <td>PTL100</td>
                       <td>Live Awakened Life</td>
                       <td>2015</td>
                       <td>Fall</td>
                       <td><a href="#">Recognize your Inner Essence</a></td>
                       <td>9/15/15</td>
                       <td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/assignmentedit') ?>" class="btn btn-danger btn-small" role="button">Edit</a></td>
                   </tr>
                   <tr>
                       <td>PTL100</td>
                       <td>PTL100</td>
                       <td>Live Awakened Life</td>
                       <td>2015</td>
                       <td>Fall</td>
                       <td><a href="#">Recognize your Inner Essence</a></td>
                       <td>9/15/15</td>
                       <td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/assignmentedit') ?>" class="btn btn-danger btn-small" role="button">Edit</a></td>
                   </tr>
                   <tr>
                       <td>PTL100</td>
                       <td>PTL100</td>
                       <td>Live Awakened Life</td>
                       <td>2015</td>
                       <td>Fall</td>
                       <td><a href="#">Recognize your Inner Essence</a></td>
                       <td>9/15/15</td>
                       <td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/assignmentedit') ?>" class="btn btn-danger btn-small" role="button">Edit</a></td>
                   </tr>
                   <tr>
                       <td>PTL100</td>
                       <td>PTL100</td>
                       <td>Live Awakened Life</td>
                       <td>2015</td>
                       <td>Fall</td>
                       <td><a href="#">Recognize your Inner Essence</a></td>
                       <td>9/15/15</td>
                       <td><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/assignmentedit') ?>" class="btn btn-danger btn-small" role="button">Edit</a></td>
                   </tr>
               </tbody>
            </table>
        </div>
    </div>
    
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