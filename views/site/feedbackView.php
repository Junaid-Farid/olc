<?php
$this->title = 'OLC | Configure FAQs';
?>
<div class="top-text">
    <div class="col-md-12">
        <h4>Configure Feedback  </h4>
        <p class="p5">View, edit and archive Feedback surveys.</p>
    </div>
</div>  
<div class="col-md-12">
    <div id="centeredmenu">
        <ul class="top-ul">
            <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/feedbackcreate') ?>">Create</a></li>
            <li id="li2" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/feedbackview') ?>">View</a></li>
            <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/feedbackarchive') ?>">Archive</a></li>
        </ul>
    </div>
</div>

<div class="col-md-12 s-rol">
    <div class="col-md-5 col-md-offset-7">
        <div class="wrapper-role">
            <form>          
                <div class="form-group">
                    <label class="control-label col-sm-2" for="">Search</label>
                    <div class="col-sm-8">
                        <div class="row">
                            <input type="text" class="form-control" id="" placeholder="Enter a search term">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="row">
                            <input type="button" class="btn btn-danger btn-small" value="Load">                   
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div id="centeredmenu">
        <h4 class="h-4">FAQ Listing</h4>
    </div>
</div>

<div class="col-md-6 assigment-archive">
    <div class="wrapper-faq"> 
        <table class="table ">
            <thead>
                <tr>                 
                    <th>Survey ID</th>
                    <th>Title</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>000001</td>
                    <td>eCourse Survey</td>
                    <td>
                        <input type="button" class="btn btn-danger" value="View">
                        <input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/feedbackedit') ?>'" value="Edit">
                        <input type="button" class="btn btn-danger" value="Archive">
                    </td>
                </tr>
                <tr>
                    <td>000002</td>
                    <td>Instructor Survey</td>
                    <td>
                        <input type="button" class="btn btn-danger" value="View">
                        <input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/feedbackedit') ?>'" value="Edit">
                        <input type="button" class="btn btn-danger" value="Archive">
                    </td>
                </tr>
                <tr>
                    <td>000003</td>
                    <td>Program Survey</td>
                    <td>
                        <input type="button" class="btn btn-danger" value="View">
                        <input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/feedbackedit') ?>'" value="Edit">
                        <input type="button" class="btn btn-danger" value="Archive">
                    </td>
                </tr>
                <tr>
                    <td>000004</td>
                    <td>Residency Survey</td>
                    <td>
                        <input type="button" class="btn btn-danger" value="View">
                        <input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/feedbackedit') ?>'" value="Edit">
                        <input type="button" class="btn btn-danger" value="Archive">
                    </td>
                </tr>
                <tr>
                    <td>000005</td>
                    <td>Technology Survey</td>
                    <td>
                        <input type="button" class="btn btn-danger" value="View">
                        <input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/feedbackedit') ?>'" value="Edit">
                        <input type="button" class="btn btn-danger" value="Archive">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <!--Pagination-->
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


