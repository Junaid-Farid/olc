<div class="config">
    <div class="top-text">
        <div class="col-md-12">
            <h4>Edit FAQs</h4>
            <p class="">Create, edit, archive and add FAQ support options.</p>
        </div>
    </div>  
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/faqcreate') ?>">Create</a></li>
                <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/faqview') ?>">View</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/faqarchive') ?>">Archive</a></li>
            </ul>
        </div>
    </div>
    
    <div class="col-md-12 br-conf">
        <div class="wrapper-program">
            <div class="col-md-3">
                <h4 class="h-4">FAQ Settings</h4>
            </div>
            <div class="col-md-3 col-md-offset-6">
                <div class="btn-right">
                    <input type="button" class="btn btn-danger" value="New">
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    
    <div class="col-md-12 ec-create ass-create">
        <div class="col-md-7">
            <div class="wrapper-faq">
                <form class="form-horizontal" role="form" id="">

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">Topic</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <input type="text" class="form-control" id="" placeholder="" value="Leadership Program">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <p>Enter FAQ topic name</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">Item ID</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <input type="text" class="form-control" id="" placeholder="" value="000001">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <p>Select Program ID - System auto populates menu</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">Keyword</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <input type="text" class="form-control" id="" placeholder="" value="Pricing">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <p>Enter Program Name</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">Question</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <textarea class="form-control" rows="4" id="" placeholder="">How much do leadership programs cost?</textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <p>Enter FAQ question text here</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">Answer</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <textarea class="form-control" rows="4" id="" placeholder="">The Price for the personal leadership program is $2,875 per student.</textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <p>Enter FAQ answer response here</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2" for=""></label>
                        <div class="col-sm-4">
                            <div class="row">
                                <input type="submit" class="btn btn-danger" value="Save">
                            </div>
                        </div>
                        <div class="col-sm-6"></div>
                    </div>
                    
                </form>
            </div>
        </div>
        
    </div>
</div>

