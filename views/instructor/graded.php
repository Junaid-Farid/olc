<div class="config">
    <div class="top-text">
        <div class="col-md-12">
            <h4>Grade Assignments</h4>
            <p class="p5" style="margin-bottom: 0px; padding-bottom: 0px;">Grade course assignments submitted to the DropBox of grading for grading feedback.</p>
            <p class="p-conf-2" style="margin-bottom: 50px;">Note: Tthe system will automatically timestamp assignments uploaded. Be sure to upload assignments by due date otherwise it will be marked late.</p>

        </div>
    </div>  
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/submissionqueue') ?>">Submission Queue</a></li>
                <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/gradebook') ?>">Gradebook</a></li>
                <li id="li3" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/graded') ?>">Graded</a></li>
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
                        <th>Program ID</th>
                        <th> ECO Code</th>
                        <th> Session ID </th>
                        <th> eCourse</th>
                        <th> Assignment </th>
                        <th> Due </th>
                        <th> Submitted </th>
                        <th> Grade(L) </th>
                        <th> Grade(%) </th>
                        <th> Revise </th>


                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>CA0001500</td>
                        <td>Jacobs</td>
                        <td>Benson</td>
                        <td>PTL100</td>
                        <td>PTLECO100</td>
                        <td>0000000010</td>  
                        <td>Live Awakened Life</td>
                        <td class="blueColor">Recognize Your Inner Essence</td>
                        <td>2/20/15</td>
                        <td>2/18/15</td>
                        <td>A</td>
                        <td>98.80</td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Edit" onclick="location.href = 'editgradedassignment'"></td>
                    </tr>

                    <tr>
                        <td>CA0007501</td>
                        <td>Peterson</td>
                        <td>Thomas</td>
                        <td>PTL100</td>
                        <td>PTLECO100</td>
                        <td>0000000011</td> 
                        <td>Live Awakened Life</td> 
                        <td class="blueColor">Surrender Your Outer Essence</td>
                        <td>3/5/15</td>
                        <td>3/4/15</td>
                        <td>B-</td>
                        <td>81.15</td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Edit"></td>
                    </tr>
                    <tr>
                        <td>TX0006432</td>
                        <td>Rodriquez</td>
                        <td>Jose</td>
                        <td>PTL100</td>
                        <td>PTLECO100</td>
                        <td>0000000012</td>  
                        <td>Live Awakened Life</td>
                        <td class="blueColor">Accept Your Innate Power</td>
                        <td>3/17/15</td>
                        <td>3/15/15</td>
                        <td>B</td>
                        <td>85.15</td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Edit"></td>
                    </tr>
                    <tr>
                        <td>CA0009544</td>
                        <td>Schnoe</td>
                        <td>Joe</td>
                        <td>IDT100</td>
                        <td>IDTECO100</td>
                        <td>0000000013</td> 
                        <td>ID Fundamentals</td> 
                        <td class="blueColor">Analyzing Instructional Situations</td>
                        <td>2/22/15</td>
                        <td>2/21/15</td>
                        <td>A-</td>
                        <td>92.00</td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Edit"></td>
                    </tr>
                    <tr>
                        <td>CA0002070</td>
                        <td>Walters</td>
                        <td>Mary</td>
                        <td>IDT100</td>
                        <td>IDTECO100</td>
                        <td>0000000014</td>  
                        <td>ID Fundamentals</td> 
                        <td class="blueColor">Designing Instruction</td>
                        <td>3/8/15</td>
                        <td>3/8/15</td>
                        <td>A</td>
                        <td>100.00</td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Edit"></td>
                    </tr>
                    <tr>
                        <td>CA0009989</td>
                        <td>Barns</td>
                        <td>Samantha</td>
                        <td>IDT100</td>
                        <td>IDTECO100</td>
                        <td>0000000015</td> 
                        <td>ID Fundamentals</td> 
                        <td class="blueColor">Developing Instructional Materials</td>
                        <td>3/15/15</td>
                        <td>3/14/15</td>
                        <td>B+</td>
                        <td>89.75</td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Edit"></td>
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

