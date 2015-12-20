<?php
$this->title = 'OLC | Configure FAQs';
?>
<div class="top-text">
    <div class="col-md-12">
        <h4>Configure Feedback  </h4>
        <p class="p5">Restore and delete an archived Feedback surveys.</p>
    </div>
</div>  
<div class="col-md-12">
    <div id="centeredmenu">
        <ul class="top-ul">
            <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/feedbackcreate') ?>">Create</a></li>
            <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/feedbackview') ?>">View</a></li>
            <li id="li3" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/feedbackarchive') ?>">Archive</a></li>
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
        <h4 class="h-4">Feedback Listing</h4>
    </div>
</div>

<div class="col-md-5 assigment-archive">
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
                    <td>000006</td>
                    <td>Project Survey</td>
                    <td>
                        <input type="button" class="btn btn-danger" value="Restore">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </td>
                </tr>
                <tr>
                    <td>000007</td>
                    <td>Partner Survey</td>
                    <td>
                        <input type="button" class="btn btn-danger" value="Restore">
                        <input type="button" class="btn btn-danger" value="Delete">
                    </td>
                </tr>
                <tr>
                    <td>000008</td>
                    <td>Employer Survey</td>
                    <td>
                        <input type="button" class="btn btn-danger" value="Restore">
                        <input type="button" class="btn btn-danger" value="Delete">
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


