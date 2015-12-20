<div class="config">
    <div class="top-text">
        <div class="col-md-12">
            <h4>Graded Assignments</h4>
            <p class="p5">Review assignment grades for work completed.</p>
            <p class="p-conf-2">Note: Tthe system will automatically calculates your letter grade based on the numerical grade earned on each assignment.</p>

        </div>
    </div>  
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/gradedassignmentleadership') ?>">Leadership</a></li>
                <li id="li2" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/gradebook') ?>">Vocation</a></li>
                
            </ul>

        </div>
    </div>



    <div class="col-md-12 users">
        <div class="wrapper-assignment">
            <table class="table table-striped a_Blue">

                <thead>
                    <tr>                 
                        <th> Program ID</th>
                        <th> eCourse Name</th>
                        <th> Assignment </th>
                        <th> Due </th>
                        <th> Submitted </th>
                        <th> Grade(L) </th>
                        <th> Grade(%) </th>
                        <th> File </th>


                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>IDT100</td>
                        <td>ID Fundamentals</td>
                        <td><a href="#">Ananlyzing Instructional Situations</a></td>
                        <td>2/22/15</td>
                        <td>2/21/15</td>
                        <td>A-</td>
                        <td>92.20</td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Download"></td>
                        
                    </tr>

                    <tr>
                        <td>IDT100</td>
                        <td>ID Fundamentals</td>
                        <td><a href="#">Designing Instruction</a></td>
                        <td>3/8/15</td>
                        <td>3/8/15</td>
                        <td>A</td>
                        <td>81.15</td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Download"></td>
                    </tr>
                    
                    <tr>
                        <td>IDT100</td>
                        <td>ID Fundamentals</td>
                        <td><a href="#">Developing Instructional Materials</a></td>
                        <td>3/15/15</td>
                        <td>3/14/15</td>
                        <td>B+</td>
                        <td>89.75</td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Download"></td>
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

