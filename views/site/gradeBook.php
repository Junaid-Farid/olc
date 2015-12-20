<div class="config">
    <div class="top-text">
        <div class="col-md-12">
            <h4>Grade Assignments</h4>
            <p class="p5">Grade student assignments submitted to the Submission Queue for feedback.</p>
            <p class="p-conf-2">Note: Tthe system will automatically timestamp assignments uploaded. Be sure to upload assignments by due date otherwise it will be marked late..</p>

        </div>
    </div>  
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/gradeassignment') ?>">Submission Queue</a></li>
                <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/gradebook') ?>">Gradebook</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/gradedgradeassignment') ?>">Graded</a></li>
            </ul>

        </div>
    </div>
    <div class="config">
        <div class="col-sm-11">
            <div class="col-sm-6">
                <div class="wrapper-dashboard">
                    <form class="form-horizontal" role="form" id="">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">eCourse Title</label>
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
                            <div class="col-sm-3">
                                <input type="button" class="btn btn-danger" value="Display Gradebook">
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
                        </div>
                       

                    </form>

                </div>

            </div>



        </div>


    </div>

    <div class="config">
        <div class="top-text">
            <div class="col-md-12">
                <h4 style="font-size: 24px;">Assignments Queue</h4>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="wrapper-assignment">
            <table class="table table-striped  d-btns">

                <thead>
                    <tr>                 
                        <th> User ID</th>
                        <th> Last Name </th>
                        <th> First Name </th>
                        <th>Program ID</th>
                        <th> ECO Code</th>
                        <th> Session ID </th>
                        <th> eCourse </th>
                        <th> Assignment</th>
                        <th> </th>
                        <th> Due </th>
                        <th> Submitted </th>
                        <th> Grade(%) </th>
                        <th> Graded File </th>
                        <th> </th>
                        <th> </th>


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
                        <td>Recognize</td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Download"></td>
                        <td>2/20/15</td>
                        <td>2/18/15</td>
                        <td><input type="text" class="form-control" placeholder=""> </td>
                        <td><input type="text" class="form-control" placeholder=""> </td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Browse"></td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Upload"></td>
                    </tr>

                    <tr>
                        <td>CA0000007501</td>
                        <td>Peterson</td>
                        <td>Thomas</td>
                        <td>PTL100</td>
                        <td>PTLECO100</td>
                        <td>000000010</td>
                        <td>Live Awakened Life</td> 
                        <td>Recognize</td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Download"></td>
                        <td>2/20/15</td>
                        <td>2/19/15</td>
                        <td><input type="text" class="form-control" placeholder=""> </td>
                        <td><input type="text" class="form-control" placeholder=""> </td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Browse"></td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Upload"></td>
                    </tr>
                    <tr>
                        <td>MI0000006432</td>
                        <td>Rodriquez</td>
                        <td>Jose</td>
                        <td>PTL100</td>
                        <td>PTLECO100</td>
                        <td>000000010</td>
                        <td>Live Awakened Life</td> 
                        <td>Recognize</td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Download"></td>
                        <td>2/20/15</td>
                        <td>2/20/15</td>
                        <td><input type="text" class="form-control" placeholder=""> </td>
                        <td><input type="text" class="form-control" placeholder=""> </td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Browse"></td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Upload"></td>
                    </tr>
                    <tr>
                        <td>CA00009544</td>
                        <td>Schnoe</td>
                        <td>Joe</td>
                        <td>PTL100</td>
                        <td>PTLECO100</td>
                        <td>000000010</td>
                        <td>Live Awakened Life</td>  
                        <td>Recognize</td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Download"></td>
                        <td>2/20/15</td>
                        <td>2/21/15</td>
                        <td><input type="text" class="form-control" placeholder=""> </td>
                        <td><input type="text" class="form-control" placeholder=""> </td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Browse"></td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Upload"></td>
                    </tr>
                    <tr>
                        <td>CA00002070</td>
                        <td>Walters</td>
                        <td>Mary</td>
                        <td>PTL100</td>
                        <td>PTLECO100</td>
                        <td>000000010</td>
                        <td>Live Awakened Life</td> 
                        <td>Recognize</td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Download"></td>
                        <td>2/20/15</td>
                        <td>2/21/15</td>
                        <td><input type="text" class="form-control" placeholder=""> </td>
                        <td><input type="text" class="form-control" placeholder=""> </td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Browse"></td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Upload"></td>
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

