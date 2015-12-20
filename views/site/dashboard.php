<?php
$this->title = 'OLC | Dashbord';
?>
<div class="top-text">
    <div class="col-md-12">
        <h4>Dashboard</h4>
        <p class="d-p">This is your administrator home page. Access any learning resources and other administrative items for all user accounts.</p>
    </div>
</div>  
<div class="col-md-12">
    <div id="centeredmenu">
        <ul class="top-ul">
            <li id="li1" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboard') ?>">Main</a></li>
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
        <h5 class="d-heading">Enrollment Status</h5>
        <div class="bg-tbl">
            <p class="heading">Personal Transformation Leadership</p>
            <table class="table borderless">
                <thead>
                    <tr>                 
                        <th>eCourse</th>
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
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>PTL103</td>
                        <td>28</td>
                        <td>3</td>
                        <td>4</td>
                    </tr>
                </tbody>
            </table>
            <p class="heading">Instructional Design Technology</p>
            <table class="table borderless">
                <thead>
                    <tr>                 
                        <th>eCourse</th>
                        <th>Active</th>
                        <th>Drop</th>
                        <th>Risk</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>IDT100</td>
                        <td>23</td>
                        <td>2</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>IDT103</td>
                        <td>28</td>
                        <td>3</td>
                        <td>4</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
    <div class="col-md-4">
        <h5 class="d-heading">Personal Information</h5>
        <div class="bg-tbl user_info block-small">
            <p><span>Name:</span> Tammé Shinshuri</p>
            <p><span>Admin ID:</span> CA3009716502</p>
            <p><span>Counselor:</span> NA</p>
            <p><span>Creation Date:</span> 9/9/2015</p>
            <p><span>Enrollment Date:</span> NA</p>
            <p><span>Graduation Date:</span> NA</p>
            <p><span>Graduated:</span> NA</p>
        </div>

        <h5 class="d-heading">Mini Transcript</h5>
        <div class="bg-tbl block-large">
            <p class="heading">Personal Transformation Leadership</p>
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
                        <td>PTL100</td>
                        <td>B+</td>
                        <td>3.33</td>
                    </tr>
                    <tr>
                        <td>PTL101</td>
                        <td>A+</td>
                        <td>3.40</td>
                    </tr>
                </tbody>
            </table>
            <p class="heading">Instructional Design Technology</p>
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
                        <td>IDT100</td>
                        <td>B+</td>
                        <td>3.33</td>
                    </tr>
                    <tr>
                        <td>IDT101</td>
                        <td>B+</td>
                        <td>3.33</td>
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
            <p><a href="#">MarketPlace</a></p>
            <p><a href="#">Newsletters</a></p>
        </div>
        <h5 class="d-heading">Announcements</h5>
        <div class="bg-tbl block-large">
            <p>Students can submit their FASFA applications beginning Q3 2016</p>
        </div>
    </div>
</div>

