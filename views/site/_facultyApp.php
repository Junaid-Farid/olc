<?php
$this->title = 'OLC | Dashbord';
?>
<div class="top-text">
    <div class="col-md-12">
        <h4>Configure Accounts</h4>
        <p class="d-p">Configure user accounts, generate random IDs for each user type, and save from and application data to database. </p>
        <p class="p-conf-2">Note: The system will auto populate the fields based on Enrollment form, Faculty Application, Job Application, or any form data stored in the system.</p>
    </div>
</div>  
<div class="col-md-12">
    <div id="centeredmenu">
        <ul class="top-ul">
            <li id="li1" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/configureapplications') ?>">Applications</a></li>
            <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/configureprograms') ?>">Programs</a></li>
            <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('users/index') ?>">Users</a></li>
            <li id="li4"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/configurearchive') ?>">Archive</a></li>
        </ul>
    </div>
</div>

<div class="col-md-12 dashboard">
    <div class="col-md-12 bottom-border text-center">
        <h3>Faculty Application Data</h3>
    </div>
    
    <div class="col-md-12 view-tab">
        <div class="col-md-4">
            <div class="wrapper-faculty">
                <div class="row">
                    <div class="view">
                        <div class="col-md-12"><h4>Personal Information</h4></div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">First</div>
                        <div class="col-md-7 even">Irfan</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">Last</div>
                        <div class="col-md-7 odd">Ali</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">SSN</div>
                        <div class="col-md-7 second">CV346</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">Address</div>
                        <div class="col-md-7 second">Johar Town</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">City</div>
                        <div class="col-md-7">Lahore</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">State</div>
                        <div class="col-md-7 second">Pakistan</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">Zip</div>
                        <div class="col-md-7">9200</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">Country</div>
                        <div class="col-md-7 second">Pakistan</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">Phone</div>
                        <div class="col-md-7">92333749576</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">Email</div>
                        <div class="col-md-7 second">Irfan@yahoo.com</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">DOB</div>
                        <div class="col-md-7">12-09-2015</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">Gender</div>
                        <div class="col-md-7 second">Male</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">M-Status</div>
                        <div class="col-md-7">Single</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">Language</div>
                        <div class="col-md-7 second">English</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">Fluency</div>
                        <div class="col-md-7">Advance</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="row">

                <div class="view">
                    <div class="col-md-12"><h4>Education Information</h4></div>

                </div>
                <div class="view">
                    <div class="col-md-5 first">School</div>
                    <div class="col-md-7">Cordova high</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">Address</div>
                    <div class="col-md-7 second">Town</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">City</div>
                    <div class="col-md-7">Lahore</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">State</div>
                    <div class="col-md-7 second">Pakistan</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">Zip</div>
                    <div class="col-md-7">9200</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">Start Date</div>
                    <div class="col-md-7 second">12-09-2015</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">Graduated</div>
                    <div class="col-md-7">Yes</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">Graduated Date</div>
                    <div class="col-md-7 second">2015</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">Councelor</div>
                    <div class="col-md-7 ">John dev</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">Phone</div>
                    <div class="col-md-7 second">92333749576</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">Email</div>
                    <div class="col-md-7">Irfan@yahoo.com</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">Fax</div>
                    <div class="col-md-7 second">455-5676-878</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">Transcript</div>
                    <div class="col-md-7">Download</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">HSE Diploma</div>
                    <div class="col-md-7 second">Not Applicate</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">HSE Test</div>
                    <div class="col-md-7">Nill</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">HSE Score</div>
                    <div class="col-md-7 second">Nill</div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="row">
                <div class="view">
                    <div class="col-md-12"><h4>Program Interest</h4></div>

                </div>
                <div class="view">
                    <div class="col-md-5 first">Leadership</div>
                    <div class="col-md-7">Personal transformation</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">vocation</div>
                    <div class="col-md-7 second">Digital Media Technology</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">Quarter</div>
                    <div class="col-md-7">Q4-sept</div>
                </div>


            </div>
        </div>
    </div>
    <div class="col-md-12 last-pad-bottom d-set">
        <label>Generate random User ID 12 digit</label> <input type="checkbox" class="checkbox-inline" /><span>select checkbox</span>
        <div class="pull-right">
            <button type="submit" class="btn btn-danger ">Save</button>
        </div>
    </div>

</div>

