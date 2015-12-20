<div class="config">
    <div class="top-text">
        <div class="col-md-12">
            <h4>Grade Assignments</h4>
            <p class="p5">Grade course assignments submitted to the DropBox of grading for grading feedback.</p>
            <p class="p-conf-2">Note: Tthe system will automatically timestamp assignments uploaded. Be sure to upload assignments by due date otherwise it will be marked late.</p>

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
                        <td>CA0000001500</td>
                        <td>Jacobs</td>
                        <td>Benson</td>
                        <td>PTL100</td>
                        <td>PTLECO100</td>
                        <td>000000010</td>  
                        <td>Live Awakened Life</td>
                        <td>Recognize Your Inner Essence</td>
                        <td>2/20/15</td>
                        <td>2/18/15</td>
                        <td>A</td>
                        <td>98.80</td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Edit" onclick="location.href='editgradeassignment'"></td>
                    </tr>

                    <tr>
                        <td>CA0000007501</td>
                        <td>Peterson</td>
                        <td>Thomas</td>
                        <td>PTL100</td>
                        <td>PTLECO100</td>
                        <td>000000011</td> 
                        <td>Live Awakened Life</td> 
                        <td>Surrender Your Outer Essence</td>
                        <td>3/5/15</td>
                        <td>3/4/15</td>
                        <td>B-</td>
                        <td>81.15</td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Edit"></td>
                    </tr>
                    <tr>
                        <td>TX0000006432</td>
                        <td>Rodriquez</td>
                        <td>Jose</td>
                        <td>PTL100</td>
                        <td>PTLECO100</td>
                        <td>000000012</td>  
                        <td>Live Awakened Life</td>
                        <td>Accept Your Innate Power</td>
                        <td>3/17/15</td>
                        <td>3/15/15</td>
                        <td>B</td>
                        <td>85.15</td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Edit"></td>
                    </tr>
                    <tr>
                        <td>CA00009544</td>
                        <td>Schnoe</td>
                        <td>Joe</td>
                        <td>IDT100</td>
                        <td>IDTECO100</td>
                        <td>000000013</td> 
                        <td>ID Fundamentals</td> 
                        <td>Analyzing Instructional Situations</td>
                        <td>2/22/15</td>
                        <td>2/21/15</td>
                        <td>A-</td>
                        <td>92.00</td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Edit"></td>
                    </tr>
                    <tr>
                        <td>CA00002070</td>
                        <td>Walters</td>
                        <td>Mary</td>
                        <td>IDT100</td>
                        <td>IDTECO100</td>
                        <td>000000014</td>  
                        <td>ID Fundamentals</td> 
                        <td>Designing Instruction</td>
                        <td>3/8/15</td>
                        <td>3/8/15</td>
                        <td>A</td>
                        <td>100.00</td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Edit"></td>
                    </tr>
                    <tr>
                        <td>CA00009989</td>
                        <td>Barns</td>
                        <td>Samantha</td>
                        <td>IDT100</td>
                        <td>IDTECO100</td>
                        <td>000000015</td> 
                        <td>ID Fundamentals</td> 
                        <td>Developing Instructional Materials</td>
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

