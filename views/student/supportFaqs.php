<div class="config">
    <div class="top-text">
        <div class="col-md-12 margingBottom30">
            <h4>Support</h4>
            <p style="padding-top: 10px;">Need Help? Reach out to us through one of our support methods and get the help you need when you need it.</p>

        </div>
    </div>  
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/supportassignment') ?>">Assignment</a></li>
                <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/supportemail') ?>">Email</a></li>
                <li id="li3" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/supportfaqs') ?>">FAQs</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/supportforum') ?>">Forum</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('student/supporttickets') ?>">Tickets</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
        <p> Review the list of frequently asked questions here or search the database to get answers to questions most frequently asked. 
        Enter a keyword(e.g. general, costs, pricing, programs, services, sponsorship, ads, financial aid, etc.)</p>
    </div>

    <div class="col-md-12 s-rol">
        <div class="col-md-5 col-md-offset-7">
            <div class="wrapper-role">
                <form>          
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">Search</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <input type="text" class="form-control" id="" placeholder="Enter your search term here...">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="row">
                                <input type="button" class="btn btn-danger btn-small" value="Submit">                   
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div id="centeredmenu">
            <h4 class="h-4">Search Results</h4>
        </div>
    </div>

    <div class="col-md-12 assigment-archive">
        <div class="wrapper-faq"> 
            <table class="table ">
                <thead>
                    <tr>                 
                        <th>Item ID</th>
                        <th>Keyword</th>
                        <th>Topic</th>
                        <th>Question</th>
                        <th>Answer</th>
                        <th class="pull-right">Open</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>000001</td>
                        <td>Pricing</td>
                        <td>Leadership Programs</td>
                        <td>TBD</td>
                        <td>TBD</td>
                        <td><input type="button" class="btn btn-danger" value="View"/></td>
                    </tr>
                    <tr>
                        <td>000002</td>
                        <td>Pricing</td>
                        <td>Vocational Programs</td>
                        <td>TBD</td>
                        <td>TBD</td>
                        <td><input type="button" class="btn btn-danger" value="View"/></td>
                    </tr>
                    <tr>
                        <td>000003</td>
                        <td>Pricing</td>
                        <td>Financial Planning</td>
                        <td>TBD</td>
                        <td>TBD</td>
                        <td><input type="button" class="btn btn-danger" value="View"/></td>
                    </tr>
                    <tr>
                        <td>000004</td>
                        <td>Pricing</td>
                        <td>Financial Aid</td>
                        <td>TBD</td>
                        <td>TBD</td>
                        <td><input type="button" class="btn btn-danger" value="View"/></td>
                    </tr>
                    <tr>
                        <td>000005</td>
                        <td>Pricing</td>
                        <td>Sponsorship</td>
                        <td>TBD</td>
                        <td>TBD</td>
                        <td><input type="button" class="btn btn-danger" value="View"/></td>
                    </tr>
                    
                    <tr>
                        <td>000006</td>
                        <td>Pricing</td>
                        <td>Academic Fees</td>
                        <td>TBD</td>
                        <td>TBD</td>
                        <td><input type="button" class="btn btn-danger" value="View"/></td>
                    </tr>
                    <tr>
                        <td>000007</td>
                        <td>Pricing</td>
                        <td>Technology Fees</td>
                        <td>TBD</td>
                        <td>TBD</td>
                        <td><input type="button" class="btn btn-danger" value="View"/></td>
                    </tr>
                    <tr>
                        <td>000008</td>
                        <td>Pricing</td>
                        <td>Residency Fees</td>
                        <td>TBD</td>
                        <td>TBD</td>
                        <td><input type="button" class="btn btn-danger" value="View"/></td>
                    </tr>
                    <tr>
                        <td>000009</td>
                        <td>Pricing</td>
                        <td>Transportation Fees</td>
                        <td>TBD</td>
                        <td>TBD</td>
                        <td><input type="button" class="btn btn-danger" value="View"/></td>
                    </tr>
                    <tr>
                        <td>000010</td>
                        <td>Pricing</td>
                        <td>Donation Options</td>
                        <td>TBD</td>
                        <td>TBD</td>
                        <td><input type="button" class="btn btn-danger" value="View"/></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

