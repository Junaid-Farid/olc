<?php
$this->title = 'OLC | Dashbord';
?>
<div class="top-text">
    <div class="col-md-12">
        <h4>Dashboard</h4>
        <p class="d-p">This is your student home page. Access any learning resources you need to interact, participate, and complete eCourses in the learning community.</p>

    </div>
</div>  
<div class="col-md-12">
    <div id="centeredmenu">
        <ul class="top-ul">
            <li id="li1" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/student') ?>">Main</a></li>
            <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/profile') ?>">Profile</a></li>
            <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/policies') ?>">Policies</a></li>
            <li id="li4"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/courseware') ?>">Courseware</a></li>
            <li id="li5"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/libraries') ?>">Libraries</a></li>
            <li id="li6"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/assessments') ?>">Assessments</a></li>
        </ul>
    </div>
</div>
<div class="col-md-12 dashboard">
    <div class="col-md-4">
        <h5 class="d-heading">Programs</h5>
        <div class="student-desp bg-tbl">
            <p>Orientation</p>
            <p>Personal Transformation Leadership</p>
            <p>Instructional Design Technology</p>
        </div>
        
        <h5 class="d-heading">Current eCourses</h5>
        <div class="student-desp bg-tbl">
            <p>Power to know</p>
            <p>Instructional Design Application I</p>
        </div>
        
        <h5 class="d-heading">Completed eCourses</h5>
        <div class="student-desp bg-tbl">
            <p>live an Awakened Life</p>
            <p>Instructional Design Fundamentals</p>
        </div>
    </div>
    
    <div class="col-md-4">
        <h5 class="d-heading">Personal Information</h5>
        <div class="bg-tbl">
            <p><span>Name:</span> Tammé Shinshuri</p>
            <p><span>Student ID:</span> CA3009716502</p>
            <p><span>Counselor:</span> Tim Graystone</p>
            <p><span>Enrollment Date:</span> 9/9/2015</p>
            <p><span>Graduation Date:</span> 12/10/2015</p>
            <p><span>Graduated:</span> No</p>
        </div>

        <h5 class="d-heading">Mini Transcript</h5>
        <div class="bg-tbl">
            <p>Personal Transformation Leadership</p>
            <table class="table borderless">
                <thead>
                    <tr>                 
                        <th>eCourse</th>
                        <th>Grade</th>
                        <th>GPA</th>                     
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>DI100</td>
                        <td>B+</td>
                        <td>3.33</td>
                    </tr>
                    <tr>
                        <td>DI103</td>
                        <td>A+</td>
                        <td>3.40</td>
                    </tr>
                </tbody>
            </table>
            <p>Instruction Design Technology</p>
            <table class="table borderless">
                <thead>
                    <tr>                 
                        <th>eCourse</th>
                        <th>Grade</th>
                        <th>GPA</th>      
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>DI100</td>
                        <td>B+</td>
                        <td>3.33</td>
                    </tr>
                    <tr>
                        <td>DI100</td>
                        <td>B+</td>
                        <td>3.33</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-4">
        <h5 class="d-heading">Educational Resources</h5>
        <div class="bg-tbl">
            <p><a href="#">Bookstore</a></p>
            <p><a href="#">eCourse Catalog</a></p>
            <p><a href="#">Student Handbook</a></p>
            <p><a href="#">Marketplace</a></p>
            <p><a href="#">Newsletters</a></p>          
        </div>
        <h5 class="d-heading">Announcements</h5>
        <div class="bg-tbl announcement">
            <p>Students can submit their FASFA applications beginning Q3 2016</p>         
        </div>
    </div>
</div>

