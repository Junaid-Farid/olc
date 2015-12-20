<div class="config">
    <div class="top-text">
        <div class="col-md-12">
            <h4>Grade Assignments</h4>
            <p class="p5" style="margin-bottom: 0px; padding-bottom: 0px;">You can grade student assignments submitted to the Submission Queue.</p>
            <p class="p-conf-2" style="margin-bottom: 50px;">Note: Tthe system will automatically timestamp assignments uploaded. Submitted and Time data will display red when an assignment is submitted late.</p>

        </div>
    </div>  
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/submissionqueue') ?>">Submission Queue</a></li>
                <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/gradebook') ?>">Gradebook</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/graded') ?>">Graded</a></li>
            </ul>

        </div>
    </div>


    <div class="col-md-12 s-rol">
        <div class="col-md-4 col-md-offset-8 pull-right" style="margin-right: -42px; padding-right: 0px;">
            <div class="wrapper-assignment">
                <form>          
                    <div class="form-group">
                        <label class="control-label col-sm-1 col-sm-offset-3" for="">Sort:</label>
                        <div class="col-sm-7">
                            <select class="form-control">
                                <option>Select One</option>
                                <option>option1</option>
                                <option>option2</option>
                                <option>option3</option>
                            </select>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="col-md-12 users">
        <div class="wrapper-assignment">
            <table class="table table-striped">

                <thead>
                    <tr>                 
                        <th> User ID</th>
                        <th> Last Name </th>
                        <th> First Name </th>
                        <td>Program ID</td>
                        <th> eCourse </th>
                        <th> ECO Code</th>
                        <th> Session ID </th>
                        <th> Assignment</th>
                        <th> Due </th>
                        <th> Submitted </th>
                        <th> Time </th>
                        <th>  </th>


                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>CA0000001500</td>
                        <td>Jacobs</td>
                        <td>Benson</td>
                        <td>PTL100</td>
                        <td>Live Awakened Life</td>
                        <td>PTLECO100</td>
                        <td>000000020</td>  
                        <td class="blueColor">Recognize</td>
                        <td>2/20/15</td>
                        <td>2/18/15</td>
                        <td>8:15AM</td>
                        <td><input type="button" class="btn pull-left btn-danger" value="View"></td>
                    </tr>

                    <tr>
                        <td>CA0000007501</td>
                        <td>Peterson</td>
                        <td>Thomas</td>
                        <td>PTL100</td>
                        <td>Live Awakened Life</td>
                        <td>PTLECO100</td>
                        <td>000000021</td>  
                        <td class="blueColor">Recognize</td>
                        <td>2/20/15</td>
                        <td>2/19/15</td>
                        <td>2:34PM</td>
                        <td><input type="button" class="btn pull-left btn-danger" value="View"></td>
                    </tr>
                    <tr>
                        <td>MI0000006432</td>
                        <td>Rodriquez</td>
                        <td>Jose</td>
                        <td>PTL100</td>
                        <td>Live Awakened Life</td>
                        <td>PTLECO100</td>
                        <td>000000022</td>  
                        <td class="blueColor">Recognize</td>
                        <td>2/20/15</td>
                        <td>2/20/15</td>
                        <td>5:01PM</td>
                        <td><input type="button" class="btn pull-left btn-danger" value="View"></td>
                    </tr>
                    <tr>
                        <td>CA00009544</td>
                        <td>Schnoe</td>
                        <td>Joe</td>
                        <td>PTL100</td>
                        <td>Live Awakened Life</td>
                        <td>PTLECO100</td>
                        <td>000000023</td>  
                        <td class="blueColor">Recognize</td>
                        <td>2/20/15</td>
                        <td class="text-danger">2/21/15</td>
                        <td class="text-danger"> 2:00PM</td>
                        <td><input type="button" class="btn pull-left btn-danger" value="View"></td>
                    </tr>
                    <tr>
                        <td>CA00002070</td>
                        <td>Walters</td>
                        <td>Mary</td>
                        <td>PTL100</td>
                        <td>Live Awakened Life</td>
                        <td>PTLECO100</td>
                        <td>000000024</td>  
                        <td class="blueColor">Recognize</td>
                        <td>2/20/15</td>
                        <td class="text-danger">2/21/15</td>
                        <td class="text-danger">1:34PM</td>
                        <td><input type="button" class="btn pull-left btn-danger" value="View"></td>
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

