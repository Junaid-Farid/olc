<?php
$this->title = 'OLC | Dashbord';
?>
<div class="top-text">
    <div class="col-md-12">
        <h4>Dashboard</h4>
        <p class="d-p font-size-16px">This is your instructor home page.  Access any learning resources you need to interact, participate, and facilitate eCourses in the learning community.</p>

    </div>
</div>  
<div class="col-md-12">
    <div id="centeredmenu">
        <ul class="top-ul">
            <li id="li1" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/instructor') ?>">Main</a></li>
            <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/profile') ?>">Profile</a></li>
            <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/policies') ?>">Policies</a></li>
            <li id="li4"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/courseware') ?>">Courseware</a></li>
            <li id="li5"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/libraries') ?>">Libraries</a></li>
            <li id="li6"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('instructor/assessments') ?>">Assessments</a></li>
        </ul>
    </div>
</div>
<div class="col-md-12 dashboard">
    <div class="col-md-4">
        <h5 class="d-heading">Facilitated Programs</h5>
        <div class="student-desp bg-tbl">
            <p>Orientation</p>
            <p>Personal Transformation Leadership</p>
            <p>Instructional Design Technology</p>
        </div>
        
        <h5 class="d-heading">Facilitated eCourses &#40;current&#41;</h5>
        <div class="student-desp bg-tbl">
            <p>Power to know</p>
            <p>Instructional Design Applications I</p>
        </div>
        
        <h5 class="d-heading">Facilitated eCourses &#40;completed&#41;</h5>
        <div class="student-desp bg-tbl">
            <p>Live an Awakened Life</p>
            <p>Instructional Design Fundamentals</p>
        </div>
    </div>
    
    <div class="col-md-4">
        <h5 class="d-heading">Personal Information</h5>
        <div class="bg-tbl block-small">
            <p><span>Faculty Name:</span> Tammé Shinshuri</p>
            <p><span>Faculty ID:</span>CA3009716502</p>
            <p><span>Counselor:</span> NA</p>
            <p><span>Enrollment Date:</span> 9/9/2015</p>
            <p><span>Graduation Date:</span> NA</p>
            <p><span>Graduated:</span> NA</p>
        </div>

        <h5 class="d-heading">Enrollment Status</h5>
        <div class="bg-tbl block-large">
            <p class="heading">Program Name</p>
            <table class="table borderless">
                <thead>
                    <tr>                 
                        <th>Code</th>
                        <th>Active</th>
                        <th>Drop</th>
                        <th>Risk</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PTL100</td>
                        <td>23</td>
                        <td>2</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>PTL101</td>
                        <td>25</td>
                        <td>0</td>
                        <td>1</td>
                    </tr>
                </tbody>
            </table>
            <p class="heading">Program Name</p>
            <table class="table borderless">
                <thead>
                    <tr>                 
                        <th>Code</th>
                        <th>Active</th>
                        <th>Drop</th>
                        <th>Risk</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>IDT100</td>
                        <td>15</td>
                        <td>1</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>IDT101</td>
                        <td>25</td>
                        <td>0</td>
                        <td>1</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>
    <div class="col-md-4">
        <h5 class="d-heading">Educational Resources</h5>
        <div class="bg-tbl block-small">
            <p><a href="#">Bookstore</a></p>
            <p><a href="#">eCourse Catalog</a></p>
            <p><a href="#">Faculty Handbook</a></p>
            <p><a href="#">Student Handbook</a></p>
            <p><a href="#">Marketplace</a></p>
            <p><a href="#">Newsletters</a></p>          
        </div>
        <h5 class="d-heading">Announcements</h5>
        <div class="bg-tbl block-large">
            <p>Students can submit their FASFA applications beginning Q3 2016</p>         
        </div>
    </div>
</div>

