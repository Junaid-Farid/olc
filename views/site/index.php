<?php
$this->title = 'OLC | Dashbord';
?>
<div class="top-text">
    <div class="col-md-12">
        <h4>Dashboard</h4>
        <p class="d-p">This is the home page for your administrator profile.Access any thing learning resources and other administrative items for student and faculty accounts.</p>

    </div>
</div>  
<div class="col-md-12">
    <div id="centeredmenu">
        <ul class="top-ul">
            <li id="li1" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboard') ?>">Main</a></li>
            <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboard') ?>">Profile</a></li>
            <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboard') ?>">Policies</a></li>
            <li id="li4"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboard') ?>">Courseware</a></li>
            <li id="li5"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboard') ?>">Libraries</a></li>
            <li id="li6"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/dashboard') ?>">Assessments</a></li>

        </ul>
    </div>
</div>
<div class="col-md-12 dashboard">
    <div class="col-md-4">
        <h5 class="d-heading">Enrollment Status</h5>
        <div class="bg-tbl">
            <p>Personal Transformation Leadership</p>
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
            <p>Instruction Design Technology</p>
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
        <div class="bg-tbl">
            <p><span>Name:</span>John Devid</p>
            <p><span>User ID:</span>SP1234</p>
            <p><span>Quarter:</span>Fall</p>
            <p><span>Enrollment Date:</span> NA</p>
            <p><span>Graduation Date:</span> NA</p>
            <p><span>Graduated:</span> NO</p>
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
            <p><a href="#">Faculty Handbook</a></p>
            <p><a href="#">Student Handbook</a></p>
            <p><a href="#">MarketPlace</a></p>
            <p><a href="#">Newsletter</a></p>          
        </div>
        <h5 class="d-heading">Announcements</h5>
        <div class="bg-tbl announcement">
            <p>Student can submit their FASFA Applications beginning Q3 2016</p>         
        </div>
    </div>
</div>

