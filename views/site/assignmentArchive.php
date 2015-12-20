<?php
$this->title = 'OLC | Configure Assignments';
?>
<div class="top-text">
    <div class="col-md-12">
        <h4>Configure Assignments</h4>
        <p class="p5">A listing of archived assignments. You can restore, copy, and delete archived assignments. Copied assignments are automatically restored to the View Tab after updated.</p>
    </div>
</div>  
<div class="col-md-12">
    <div id="centeredmenu">
        <ul class="top-ul">
            <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/assignmentcreate') ?>">Create</a></li>
            <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/assignmentview') ?>">View</a></li>
            <li id="li3" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/assignmentarchive') ?>">Archive</a></li>
        </ul>
    </div>
</div>
<div class="col-md-12 s-rol">
    <div class="col-md-4 col-md-offset-8">
        <div class="wrapper-assignment">
            <form>          
               <div class="form-group">
                    <label class="control-label col-sm-2" for="">Sort</label>
                    <div class="col-sm-10">
                        <select class="form-control">
                            <option>Select One</option>
                            <option>option1</option>
                            <option>option2</option>
                            <option>option3</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-md-12 assigment-archive">
    <div class="wrapper-assignment"> 
        <table class="table ">
            <thead>
                <tr>                 
                    <th>Program ID</th>
                    <th>EC Code</th>
                    <th>Session ID</th>
                    <th>Title</th>
                    <th>Year</th>
                    <th>Quarter</th>
                    <th>Assignment link</th>                   
                    <th>Due Date</th>                   
                    <th>Revise</th>                   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>PR234</td>
                    <td>1234</td>
                    <td>00879</td>
                    <td>Live Awankend</td>
                    <td>2015</td>
                    <td>Winter</td>
                    <td><a href="#">Recognize Your Inner Essence</a></td>
                    <td>2/20/15</td>
                    <td>
                        <input type="button" class="btn btn-danger" value="Restore">
                        <input type="button" class="btn btn-danger" value="Copy">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </td>
                </tr>
                <tr>
                    <td>PR234</td>
                    <td>1234</td>
                    <td>00879</td>
                    <td>Live Awankend</td>
                    <td>2015</td>
                    <td>Winter</td>
                    <td><a href="#">Recognize Your Inner Essence</a></td>
                    <td>2/20/15</td>
                    <td>
                        <input type="button" class="btn btn-danger" value="Restore">
                        <input type="button" class="btn btn-danger" value="Copy">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </td>
                </tr>
                <tr>
                    <td>PR234</td>
                    <td>1234</td>
                    <td>00879</td>
                    <td>Live Awankend</td>
                    <td>2015</td>
                    <td>Winter</td>
                    <td><a href="#">Recognize Your Inner Essence</a></td>
                    <td>2/20/15</td>
                    <td>
                        <input type="button" class="btn btn-danger" value="Restore">
                        <input type="button" class="btn btn-danger" value="Copy">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </td>
                </tr>
                <tr>
                    <td>PR234</td>
                    <td>1234</td>
                    <td>00879</td>
                    <td>Live Awankend</td>
                    <td>2015</td>
                    <td>Winter</td>
                    <td><a href="#">Recognize Your Inner Essence</a></td>
                    <td>2/20/15</td>
                    <td>
                        <input type="button" class="btn btn-danger" value="Restore">
                        <input type="button" class="btn btn-danger" value="Copy">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </td>
                </tr>
                <tr>
                    <td>PR234</td>
                    <td>1234</td>
                    <td>00879</td>
                    <td>Live Awankend</td>
                    <td>2015</td>
                    <td>Winter</td>
                    <td><a href="#">Recognize Your Inner Essence</a></td>
                    <td>2/20/15</td>
                    <td>
                        <input type="button" class="btn btn-danger" value="Restore">
                        <input type="button" class="btn btn-danger" value="Copy">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </td>
                </tr>
                <tr>
                    <td>PR234</td>
                    <td>1234</td>
                    <td>00879</td>
                    <td>Live Awankend</td>
                    <td>2015</td>
                    <td>Winter</td>
                    <td><a href="#">Recognize Your Inner Essence</a></td>
                    <td>2/20/15</td>
                    <td>
                        <input type="button" class="btn btn-danger" value="Restore">
                        <input type="button" class="btn btn-danger" value="Copy">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </td>
                </tr>
                <tr class="red-txt">
                    <td>PR234</td>
                    <td>1234</td>
                    <td>00879</td>
                    <td>Live Awankend</td>
                    <td>2015</td>
                    <td>Winter</td>
                    <td><a href="#">Recognize Your Inner Essence</a></td>
                    <td>2/20/15</td>
                    <td>
                        <input type="button" class="btn btn-danger" value="Restore">
                        <input type="button" class="btn btn-danger" value="Copy">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </td>
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