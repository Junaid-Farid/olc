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
                <li id="li1" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/supportassignment') ?>">Assignment</a></li>
                <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/supportemail') ?>">Email</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/supportfaqs') ?>">FAQs</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/supportstartnewtopic') ?>">Forum</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/supportstartnewticket') ?>">Tickets</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-12">
        <p> Send us an email to your instructor if you need help on an assignment or project. </p>
    </div>
    <div class="col-md-12 ec-create ass-create">
        <div class="col-md-8">
            <div class="wrapper-assignment">
                <form class="form-horizontal" role="form" id="">
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">User ID </label>
                        <div class="col-sm-4">
                            <div class="row">
                                <input type="text" class="form-control"/>
                            </div>
                        </div>  

                        <div class="col-sm-5">
                            <p>Enter Student ID, Faculty ID, Employee ID</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Instructor Title</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <select class="form-control">
                                    <option>Select One</option>
                                    <option>Caple, C. Ed.D</option>
                                    <option>Morrow, J.</option>
                                    <option>Popkave, K.</option>
                                    <option>Shinshuri, T.Ed.D.</option>
                                    <option>McClure, D.</option>
                                    <option>Stone, T.</option>
                                </select>
                            </div>
                        </div>  
                        <div class="col-sm-5">  
                            <p>Select Instructor</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">eCourse</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <select class="form-control">
                                    <option>Select One</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-5">  
                            <p>Select eCourse Name</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">EC Code</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <select class="form-control">
                                    <option>Select One</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                        </div> 

                        <div class="col-sm-5">  
                            <p>Select eCourse Code</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Session</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <select class="form-control">
                                    <option>Select One</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                        </div>  

                        <div class="col-sm-5">  
                            <p>Select Session</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Assignment</label>
                        <div class="col-sm-4">
                            <div class="row">
                                <select class="form-control">
                                    <option>Select One</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                        </div> 

                        <div class="col-sm-5">  
                            <p>Assignment</p>
                        </div>
                    </div>
                    
                    <div class="form-group" style="margin-top: 50px;">
                        <label class="col-sm-2 col-sm-offset-1">Message</label>
                        
                    </div>

                    <div class="form-group">
                        <div class="col-sm-3 col-sm-offset-1">
                            <div class="row">
                                <textarea class="form-control" rows="4" id=""  style="height: 98px; width: 369px; margin: 0px 274.828px 5px 15px;"></textarea>
                            </div>
                        </div>  

                        <div class="col-sm-5 pull-right">  
                            <p>Enter Message</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row col-sm-2 col-sm-offset-1">
                        <input type="submit" class="btn btn-danger" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
