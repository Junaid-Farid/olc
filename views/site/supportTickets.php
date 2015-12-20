<div class="config">
    <div class="top-text">
        <div class="col-md-12">
            <h4>Support</h4>
            <p>Need Help? Reach out to us through one of our support methods and get the help you need when you need it.</p>

        </div>
    </div>  
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1" ><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/supportassignment') ?>">Assignment</a></li>
                <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/supportemail') ?>">Email</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/supportfaqs') ?>">FAQs</a></li>
                <li id="li3" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/supportstartnewtopic') ?>">Forum</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/supportstartnewticket') ?>">Tickets</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-12">
                <div class="pull-right">
                    <span class="p5"><strong><a class="a_Blue" href="<?php echo Yii::$app->getUrlManager()->createUrl('site/supportstartnewtopic') ?>">start a new topic</a></strong> </span> 
                </div>         
    </div>


</div>


<div class="col-md-12">
    <div class="col-md-4 fiftyMarginTopSide">
        <div class="col-sm-12">
            <div class="knowledgeIcon"></div><h6 class="boldHeading"> Open </h6>
            <div class="chatIcon">
                <ul>
                    <li> No Open tickets </li>
<!--                    <p></p>
                    <li> </li>
                    <p></p>
                    <li></li>
                    <p></p>
                    <li></li>
                    <p></p>-->
                </ul>
            </div>
        </div>

    </div>

    <div class="col-md-4 fiftyMarginTopSide">
        <div class="col-sm-12">
            <div class="knowledgeIcon"></div><h6 class="boldHeading"> Pending </h6>
            <div class="chatIcon">
                <ul>
                    <li> No Pending tickets</li>
<!--                    <p></p>
                    <li> </li>
                    <p></p>
                    <li> </li>
                    <p></p>-->
                </ul>
            </div>
        </div>

    </div>
    <div class="col-md-4 fiftyMarginTopSide">
        <div class="col-sm-12">
            <div class="knowledgeIcon"></div><h6 class="boldHeading"> Closed </h6>
            <div class="chatIcon">
                <ul>
                    <li> Change Payment Due </li>
                    <p>Posted by User ID about 5 month ago</p>
                    <li> Order ID Card </li>
                    <p>Posted by User ID about 1 year ago</p>
                    <li> Forgotten Password </li>
                    <p>Posted by User ID about 2 hour ago</p>
                    <li> Name Change </li>
                    <p>Posted by User ID about 5 days ago</p>
                </ul>
            </div>
        </div>

    </div>
</div>

