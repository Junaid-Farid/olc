<?php
$this->title = 'OLC | Dashbord';
?>
<div class="top-text">
    <div class="col-md-12">
        <h4>Configure Accounts</h4>
        <p class="d-p">Configure user accounts, generate random IDs for each user type, and save form and application data to database.</p>
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
        <div class="pull-right">
            <a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/appmanualentry') ?>" class="btn btn-danger btn-small" role="button">Manual Entry</a>
        </div>
    </div>
</div>
<div class="col-md-12 dashboard">
    <div class="courseware-filterArea">
        <form class="form-horizontal" role="form" id="">
            <div class="row">
                <div class="col-md-2">
                    <label class="control-label kill-padding pull-right" for="">Application ID</label>
                </div>
                <div class="col-md-4 kill-padding">
                    <select class="">
                        <option>Select One</option>
                        <option>options here</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <p><b>Application Type:</b> Enrollment Forum, Faculty Application, Job Application</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-2">
                    <label class="control-label kill-padding pull-right" for="">User Name</label>
                </div>
                <div class="col-md-4 kill-padding">
                    <select class="">
                        <option>Select One</option>
                        <option>options here</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <p>Select User ID</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-2">
                    <label class="control-label kill-padding pull-right" for="">Email</label>
                </div>
                <div class="col-md-4 kill-padding">
                    <input type="text" id="email" name="email" class="form-control"/>
                </div>
                <div class="col-md-6">
                    <p>Enter email address</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-2">
                    <label class="control-label kill-padding pull-right" for="">Role</label>
                </div>
                <div class="col-md-4 kill-padding">
                    <select class="">
                        <option>Select One</option>
                        <option>options here</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <p>Select Role: Student, Instructor, Administrator, Employee, Partner, Employeer, Alumni</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 kill-padding">
                    <div class="pull-right">
                        <button type="submit" class="btn btn-danger btn-small">Load</button>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </form>
    </div>
    
    <!--Faculty Application Data-->
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
                        <div class="col-md-7 odd">Tamme</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">Last</div>
                        <div class="col-md-7 even">Shinshuri</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">SSN</div>
                        <div class="col-md-7 odd">347-07-9431</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">Address</div>
                        <div class="col-md-7 even">1001 15th Street &#35;308</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">City</div>
                        <div class="col-md-7 odd">Sacramento</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">State</div>
                        <div class="col-md-7 even">CA</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">Zip</div>
                        <div class="col-md-7 odd">95814</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">Country</div>
                        <div class="col-md-7 even">USA</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">Phone</div>
                        <div class="col-md-7 odd">916-734-7665</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">Email</div>
                        <div class="col-md-7 even">Shinshuri@gmail.com</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">DOB</div>
                        <div class="col-md-7 odd">12-09-1970</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">Gender</div>
                        <div class="col-md-7 even">Female</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">M-Status</div>
                        <div class="col-md-7 odd">Single</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">Language</div>
                        <div class="col-md-7 even">English</div>
                    </div>
                    <div class="view">
                        <div class="col-md-5 first">Fluency</div>
                        <div class="col-md-7 odd">Advance</div>
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
                    <div class="col-md-7 odd">Cordova high</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">Address</div>
                    <div class="col-md-7 even">2239 Chase Drive</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">City</div>
                    <div class="col-md-7 odd">Rancho Cordova</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">State</div>
                    <div class="col-md-7 even">CA</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">Zip</div>
                    <div class="col-md-7 odd">95670</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">Country</div>
                    <div class="col-md-7 even">USA</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">Start Date</div>
                    <div class="col-md-7 odd">2004</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">Graduated</div>
                    <div class="col-md-7 even">Yes</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">Graduated Date</div>
                    <div class="col-md-7 odd">2008</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">Counselor</div>
                    <div class="col-md-7 even">Joseph Brenham</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">Email</div>
                    <div class="col-md-7 odd">brenhamj@cordovahigh.ca.gov</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">Phone</div>
                    <div class="col-md-7 even">916-294-2450</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">Fax</div>
                    <div class="col-md-7 odd">XXX-XXX-XXXX</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">Transcript</div>
                    <div class="col-md-7 even"><a href="#">Download</a></div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">HSE Diploma</div>
                    <div class="col-md-7 odd">Not Applicable</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">HSE Test</div>
                    <div class="col-md-7 even">Nill</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">HSE Score</div>
                    <div class="col-md-7 odd">Nill</div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="row">
                <div class="view">
                    <div class="col-md-12"><h4>Program Interests</h4></div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">Leadership</div>
                    <div class="col-md-7 odd">Personal Transformation</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">Vocation</div>
                    <div class="col-md-7 even">Digital Media Technology</div>
                </div>
                <div class="view">
                    <div class="col-md-5 first">Quarter</div>
                    <div class="col-md-7 odd">Q4:September</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 last-pad-bottom d-set">
        <label>Generate random User ID 12 digit</label> <input type="checkbox" class="checkbox-inline" /><span>select checkbox</span>
        <div class="pull-right">
            <button type="submit" class="btn btn-danger btn-small">Save</button>
        </div>
    </div>

</div>

