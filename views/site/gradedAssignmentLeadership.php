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
                <li id="li1" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/gradedassignmentleadership') ?>">Leadership</a></li>
                <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/gradebook') ?>">Vocation</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/gradedgradeassignment') ?>">Graded</a></li>
            </ul>

        </div>
    </div>



    <div class="col-md-12 users">
        <div class="wrapper-assignment">
            <table class="table table-striped a_Blue">

                <thead>
                    <tr>                 
                        <th> Program ID</th>
                        <th> ECO Code</th>
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
                        <td>PTL100</td>
                        <td>PTLECO100</td>
                        <td>Live Awakened Life</td>
                        <td><a href="#">Recognize Your Inner Essence</a></td>
                        <td>2/20/15</td>
                        <td>2/18/15</td>
                        <td>A</td>
                        <td>98.80</td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Download"></td>
                        
                    </tr>

                    <tr>
                        <td>PTL100</td>
                        <td>PTLECO100</td>
                        <td>Live Awakened Life</td>
                        <td><a href="#">Surrender Your Outer Essence</a></td>
                        <td>3/5/15</td>
                        <td>3/4/15</td>
                        <td>B-</td>
                        <td>81.15</td>
                        <td><input type="button" class="btn pull-left btn-danger" value="Download"></td>
                    </tr>
                    
                    <tr>
                        <td>PTL100</td>
                        <td>PTLECO100</td>
                        <td>Live Awakened Life</td>
                        <td><a href="#">Accept Your Innate Power</a></td>
                        <td>3/17/15</td>
                        <td>3/15/15</td>
                        <td>B</td>
                        <td>85.15</td>
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

