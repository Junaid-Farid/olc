<div class="config">
    <div class="top-text">
        <div class="col-md-12">
            <h4>Grade Assignments</h4>
            <p class="p5" style="margin-bottom: 0px; padding-bottom: 0px;">Grade student assignments submitted to the Submission Queue for feedback.</p>
            <p class="p-conf-2" style="margin-bottom: 50px;">Note: Tthe system will automatically timestamp assignments uploaded. Be sure to upload assignments by due date otherwise it will be marked late..</p>

        </div>
    </div>  
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/submissionqueue') ?>">Submission Queue</a></li>
                <li id="li2" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/gradebook') ?>">Gradebook</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/graded') ?>">Graded</a></li>
            </ul>

        </div>
    </div>
    <div class="config">
        <div class="col-sm-11">
            <div class="col-sm-12">
                <div class="wrapper-dashboard">
                    <form class="form-horizontal" role="form" id="">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="">eCourse Title</label>
                            <div class="col-sm-3">
                                <div class="row">
                                    <select class="form-control">
                                        <option>Select One</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <input type="button" class="btn btn-danger" value="Display Gradebook">
                            </div>
                            <div class="col-sm-5" style="padding-right: 80px;">
                                <strong>File type allowed:</strong> .doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf, .jpg, .png, .mp4, .wav, .mp3, .zip
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="">EC Code</label>
                            <div class="col-sm-3">
                                <div class="row">
                                    <select class="form-control">
                                        <option>Select One</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="">Session</label>
                            <div class="col-sm-3">
                                <div class="row">
                                    <select class="form-control">
                                        <option>Select One</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="">Assignment</label>
                            <div class="col-sm-3">
                                <div class="row">
                                    <select class="form-control">
                                        <option>Select One</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                    </form>

                </div>

            </div>



        </div>


    </div>

    <div class="config">
        <div class="top-text">
            <div class="col-md-12">
                <h4 style="font-size: 24px; padding-top: 30px;">Assignments Queue</h4>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="wrapper-assignment">
            <div class="table-responsive">
                <table class="table table-striped  d-btns" id="graded_book">
                    <thead>
                        <tr>                 
                            <th>User ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Program ID</th>
                            <th>ECO Code</th>
                            <th>Session ID</th>
                            <th>eCourse</th>
                            <th>Assignment</th>
                            <th>Due </th>
                            <th>Submitted</th>
                            <th class="set-width">L-Grade</th>
                            <th class="set-width">Grade(%)</th>
                            <th class="set-width">Graded</th> 
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>CA0000001500</td>
                            <td>Jacobs</td>
                            <td>Benson</td>
                            <td>PTL100</td>
                            <td>PTLECO100</td>
                            <td>000000010</td>
                            <td>Live Awakened Life</td>  
                            <td class="blueColor">Recognize</td> 
                            <td>2/20/15</td>
                            <td>2/18/15</td>
                            <td><input type="text" class="form-control" placeholder=""> </td>
                            <td><input type="text" class="form-control" placeholder=""> </td>
                            <td><input type="text" class="form-control" placeholder=""> </td>
                            <td><label class="myLabel btn pull-left btn-danger"><input type="file" required/> <span>Browse</span> </label></td>
                            <td><input type="button" class="btn pull-left btn-danger" value="Upload"></td>
                            <td><input type="button" class="btn pull-left btn-danger" value="Save"></td>
                        </tr>

                        <tr>
                            <td>CA0000007501</td>
                            <td>Peterson</td>
                            <td>Thomas</td>
                            <td>PTL100</td>
                            <td>PTLECO100</td>
                            <td>000000010</td>
                            <td>Live Awakened Life</td> 
                            <td class="blueColor">Recognize</td>
                            
                            <td>2/20/15</td>
                            <td>2/19/15</td>
                            <td><input type="text" class="form-control" placeholder=""> </td>
                            <td><input type="text" class="form-control" placeholder=""> </td>
                            <td><input type="text" class="form-control" placeholder=""> </td>
                            <td><label class="myLabel btn pull-left btn-danger"><input type="file" required/> <span>Browse</span> </label></td>
                            <td><input type="button" class="btn pull-left btn-danger" value="Upload"></td>
                            <td><input type="button" class="btn pull-left btn-danger" value="Save"></td>
                        </tr>
                        <tr>
                            <td>MI0000006432</td>
                            <td>Rodriquez</td>
                            <td>Jose</td>
                            <td>PTL100</td>
                            <td>PTLECO100</td>
                            <td>000000010</td>
                            <td>Live Awakened Life</td> 
                            <td class="blueColor">Recognize</td>
                            
                            <td>2/20/15</td>
                            <td>2/20/15</td>
                            <td><input type="text" class="form-control" placeholder=""> </td>
                            <td><input type="text" class="form-control" placeholder=""> </td>
                            <td><input type="text" class="form-control" placeholder=""> </td>
                            <td><label class="myLabel btn pull-left btn-danger"><input type="file" required/> <span>Browse</span> </label></td>
                            <td><input type="button" class="btn pull-left btn-danger" value="Upload"></td>
                            <td><input type="button" class="btn pull-left btn-danger" value="Save"></td>
                        </tr>
                        <tr>
                            <td>CA00009544</td>
                            <td>Schnoe</td>
                            <td>Joe</td>
                            <td>PTL100</td>
                            <td>PTLECO100</td>
                            <td>000000010</td>
                            <td>Live Awakened Life</td>  
                            <td class="blueColor">Recognize</td>
                            
                            <td>2/20/15</td>
                            <td>2/21/15</td>
                            <td><input type="text" class="form-control" placeholder=""> </td>
                            <td><input type="text" class="form-control" placeholder=""> </td>
                            <td><input type="text" class="form-control" placeholder=""> </td>
                            <td><label class="myLabel btn pull-left btn-danger"><input type="file" required/> <span>Browse</span> </label></td>
                            <td><input type="button" class="btn pull-left btn-danger" value="Upload"></td>
                            <td><input type="button" class="btn pull-left btn-danger" value="Save"></td>
                        </tr>
                        <tr>
                            <td>CA00002070</td>
                            <td>Walters</td>
                            <td>Mary</td>
                            <td>PTL100</td>
                            <td>PTLECO100</td>
                            <td>000000010</td>
                            <td>Live Awakened Life</td> 
                            <td class="blueColor">Recognize</td>
                            
                            <td>2/20/15</td>
                            <td>2/21/15</td>
                            <td><input type="text" class="form-control" placeholder=""> </td>
                            <td><input type="text" class="form-control" placeholder=""> </td>
                            <td><input type="text" class="form-control" placeholder=""> </td>
                            <td><label class="myLabel btn pull-left btn-danger"><input type="file" required/> <span>Browse</span> </label></td>
                            <td><input type="button" class="btn pull-left btn-danger" value="Upload"></td>
                            <td><input type="button" class="btn pull-left btn-danger" value="Save"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
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

