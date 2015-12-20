<div class="config">
    <div class="top-text">
        <div class="col-md-12 margingBottom30">
            <h4>Support</h4>
            <p style="padding-top: 10px;">Need Help? Reach out to us through one of our support methods and get the help you need when you need it.</p>

        </div>
    </div>  
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1" ><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/supportassignment') ?>">Assignment</a></li>
                <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/supportemail') ?>">Email</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/supportfaqs') ?>">FAQs</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/supportstartnewtopic') ?>">Forum</a></li>
                <li id="li3" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/supportstartnewticket') ?>">Tickets</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-12">
        <p> Send us an email if you can't find answers in one of the our additional support options. </p>
    </div>
    <div class="col-md-12 ec-create ass-create">
        <div class="col-md-8">
            <div class="wrapper-assignment">
                <form class="form-horizontal" role="form" id="">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">Topic Title</label>
                        <div class="col-sm-5">
                            <div class="row">
                                <input type="text" class="form-control"/>
                            </div>
                        </div>  

                        <div class="col-sm-5">
                            <p>Enter a Topic Title</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">Message</label>
                        <div class="col-sm-5">
                            <div class="row"> 
                                <textarea type="text" class="form-control" rows="4" id=""  style="height: 98px;"/></textarea>
                            </div>
                        </div>
                        <div class="col-sm-5">  
                            <p>Enter message</p>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">Post Topic in</label>
                        <div class="col-sm-5">
                            <div class="row">
                                <select class="form-control">
                                    <option>Select One</option>
                                    <option>Announcements</option>
                                    <option>Feature Requests</option>
                                    <option>General</option>
                                    <option>Knowledge Base</option>
                                    <option>OLC Portal</option>
                                    <option>Request a Problem</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-5">  
                            <p>Select Topic</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">Attach a file</label>

                        <div class="col-sm-5">
                            <div class="row">
                                <input type="text" class="form-control"/>
                            </div>
                        </div>  
                        <div class="col-sm-5">
                            <label class="myLabel btn btn-danger"><input type="file" required/><span>Browse</span></label>
                            <input type="submit" class="btn btn-danger" value="Upload">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for=""></label>

                        <div class="col-sm-5">
                            <div class="row">
                                <p><strong>File Types allowed: </strong> .doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf,.jpg, .png, .mov, .mp4, .wav, .mp3, .zip</p>
                            </div>
                        </div>  
                        <div class="col-sm-5">

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row col-sm-7 col-sm-offset-2 noLeftPaddingMargin">
                            <input type="submit" class="btn btn-danger" value="Post">
                            <input type="submit" class="btn btn-danger" value="Cancel">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>



