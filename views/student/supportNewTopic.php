<div class="config">
    <div class="top-text">
        <div class="col-md-12">
            <h4>Support</h4>
            <p>Need Help? Reach out to us through one of our support methods and get the help you need when you need it.</p>

        </div>
    </div>  
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/supportassignment') ?>">Assignment</a></li>
                <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/supportemail') ?>">Email</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/supportfaqs') ?>">FAQs</a></li>
                <li id="li3" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/supportforum') ?>">Forum</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/supporttickets') ?>">Tickets</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-12">
        <p> Send an email if you can't find answers in one of the our additional support options. </p>
    </div>
    <div class="col-md-12 ec-create ass-create noLeftPaddingMargin">
        <div class="col-md-8 noLeftPaddingMargin" >
            <div class="wrapper-assignment">
                <form class="form-horizontal" role="form" id="">
                    <div class="form-group">
                        <label class="leftControlLable col-sm-3" for="" style="width: 15%;">Topic Title</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <input type="text" class="form-control"/>
                            </div>
                        </div>  

                        <div class="col-sm-5">
                            <p>Enter a Topic Title</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="leftControlLable col-sm-3" for=""  style="width: 15%;">Message</label>
                        <div class="col-sm-4">
                            <div class="row"> 
                                <textarea type="text" class="form-control" rows="4" id=""  style="height: 98px;"/></textarea>
                            </div>
                        </div>
                        <div class="col-sm-5">  
                            <p>Enter message</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="leftControlLable col-sm-3" for=""  style="width: 15%;">Post Topic in</label>
                        <div class="col-sm-4">
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
                        <label class="leftControlLable col-sm-3" for=""  style="width: 15%;"></label>

                        <div class="col-sm-4">
                            <div class="row">
                                <input type="text" class="form-control"/>
                            </div>
                        </div>  
                        <div class="col-sm-5">
                            <input type="submit" id="get_file" class="btn btn-danger" value="Browse">
                            <input type="file" id="my_file"/>
                            <input type="submit" class="btn btn-danger" value="Upload">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="leftControlLable col-sm-3" for=""  style="width: 15%;"></label>

                        <div class="col-sm-4">
                            <div class="row">
                                <p><strong>File Types allowed: </strong> .doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf,.jpg, .png, .mov, .mp4, .wav, .mp3, .zip</p>
                            </div>
                        </div>  
                        <div class="col-sm-5">

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-4" style="padding-left: 129px;">
                            <div class="row">
                                <input type="submit" class="btn btn-danger" value="Post">
                                <input type="submit" class="btn btn-danger" value="Cancel">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<script>
document.getElementById('get_file').onclick = function() {
    document.getElementById('my_file').click();
};
</script>