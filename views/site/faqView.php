<?php
$this->title = 'OLC | Configure FAQs';
?>
<div class="top-text">
    <div class="col-md-12">
        <h4>Configure FAQs</h4>
        <p class="p5">View, edit and archive saved FAQs.</p>
    </div>
</div>  
<div class="col-md-12">
    <div id="centeredmenu">
        <ul class="top-ul">
            <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/faqcreate') ?>">Create</a></li>
            <li id="li2" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/faqview') ?>">View</a></li>
            <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/faqarchive') ?>">Archive</a></li>
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

<div class="col-md-12 assigment-archive">
    <div class="wrapper-faq"> 
        <table class="table ">
            <thead>
                <tr>                 
                    <th>Item ID</th>
                    <th>Keyword</th>
                    <th>Topic</th>
                    <th>Question</th>
                    <th>Answer</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>000001</td>
                    <td>Pricing</td>
                    <td>Leadership Programs</td>
                    <td>How much do leadership programs cost?</td>
                    <td>The Price for each leadership...</td>
                    <td>
                        <input type="button" class="btn btn-danger" value="View"/>
                        <input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/faqedit') ?>'" value="Edit"/>
                        <input type="button" class="btn btn-danger" value="Archive"/>
                    </td>
                </tr>
                <tr>
                    <td>000001</td>
                    <td>Pricing</td>
                    <td>Leadership Programs</td>
                    <td>How much do leadership programs cost?</td>
                    <td>The Price for each leadership...</td>
                    <td>
                        <input type="button" class="btn btn-danger" value="View"/>
                        <input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/faqedit') ?>'" value="Edit"/>
                        <input type="button" class="btn btn-danger" value="Archive"/>
                    </td>
                </tr>
                <tr>
                    <td>000001</td>
                    <td>Pricing</td>
                    <td>Leadership Programs</td>
                    <td>How much do leadership programs cost?</td>
                    <td>The Price for each leadership...</td>
                    <td>
                        <input type="button" class="btn btn-danger" value="View"/>
                        <input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/faqedit') ?>'" value="Edit"/>
                        <input type="button" class="btn btn-danger" value="Archive"/>
                    </td>
                </tr>
                <tr>
                    <td>000001</td>
                    <td>Pricing</td>
                    <td>Leadership Programs</td>
                    <td>How much do leadership programs cost?</td>
                    <td>The Price for each leadership...</td>
                    <td>
                        <input type="button" class="btn btn-danger" value="View"/>
                        <input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/faqedit') ?>'" value="Edit"/>
                        <input type="button" class="btn btn-danger" value="Archive"/>
                    </td>
                </tr>
                <tr>
                    <td>000001</td>
                    <td>Pricing</td>
                    <td>Leadership Programs</td>
                    <td>How much do leadership programs cost?</td>
                    <td>The Price for each leadership...</td>
                    <td>
                        <input type="button" class="btn btn-danger" value="View"/>
                        <input type="button" class="btn btn-danger" onclick="location.href='<?php echo Yii::$app->getUrlManager()->createUrl('site/faqedit') ?>'" value="Edit"/>
                        <input type="button" class="btn btn-danger" value="Archive"/>
                    </td>
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