<div class="config">
    <div class="top-text">
        <div class="col-md-12">
            <h4>Configure Programs</h4>
            <p class="p5">Add additional fields, categories, and labels foe programs.</p>
        </div>
    </div>  
    
    <div class="col-md-12">
        <div id="centeredmenu">
            <ul class="top-ul">
                <li id="li1"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/programcreate') ?>">Create</a></li>
                <li id="li2"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/programview') ?>">View</a></li>
                <li id="li3"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/programarchive') ?>">Archive</a></li>
                <li id="li4" class="activate"><a href="<?php echo Yii::$app->getUrlManager()->createUrl('site/programoption') ?>">Add Option</a></li>
            </ul>
        </div>
    </div>
    
    <div class="col-md-12 poption">
        <div class="col-md-7">
            <form class="form-horizontal" role="form" id="">
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-8">
                        <input type="button" class="btn btn-danger" value="Add">
                        <input type="button" class="btn btn-danger" value="Save">                 
                    </div>
                </div>
                
                <div class="wrapper-program" style="margin: 0 60px 0 0;">
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Group</label>
                        <div class="col-sm-5">
                            <div class="row">
                                <select class="form-control">
                                    <option>Select One</option>
                                    <option>Group</option>
                                    <option>ECO Code</option>
                                    <option>ECO#</option>
                                    <option>EM Code</option>
                                    <option>EC Code</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">                       
                            <input type="button" class="btn btn-danger" value="Edit">
                            <input type="button" class="btn btn-danger" value="Delete">                 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Degree</label>
                        <div class="col-sm-5">
                            <div class="row">
                                <select class="form-control">
                                    <option>Select One</option>
                                    <option>Group</option>
                                    <option>ECO Code</option>
                                    <option>ECO#</option>
                                    <option>EM Code</option>
                                    <option>EC Code</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">                       
                            <input type="button" class="btn btn-danger" value="Edit">
                            <input type="button" class="btn btn-danger" value="Delete">                 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Program ID</label>
                        <div class="col-sm-5">
                            <div class="row">
                                <input type="" class="form-control" id="" placeholder="Enter program name">
                            </div>
                        </div>
                        <div class="col-sm-4">                       
                            <input type="button" class="btn btn-danger" value="Edit">
                            <input type="button" class="btn btn-danger" value="Delete">                 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Title</label>
                        <div class="col-sm-5">
                            <div class="row">
                                <input type="" class="form-control" id="" placeholder="Select One">
                            </div>
                        </div>
                        <div class="col-sm-4">                       
                            <input type="button" class="btn btn-danger" value="Edit">
                            <input type="button" class="btn btn-danger" value="Delete">                 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Type</label>
                        <div class="col-sm-5">
                            <div class="row">
                                <select class="form-control">
                                    <option>Select One</option>
                                    <option>Group</option>
                                    <option>ECO Code</option>
                                    <option>ECO#</option>
                                    <option>EM Code</option>
                                    <option>EC Code</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">                       
                            <input type="button" class="btn btn-danger" value="Edit">
                            <input type="button" class="btn btn-danger" value="Delete">                 
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Length</label>
                        <div class="col-sm-3">
                            <div class="row">
                                <input type="" class="form-control" id="" placeholder="Enter Length">
                            </div>
                        </div>
                        <div class="col-sm-4 col-sm-offset-2">                       
                            <input type="button" class="btn btn-danger" value="Edit">
                            <input type="button" class="btn btn-danger" value="Delete">                 
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">Unit</label>
                        <div class="col-sm-3">
                            <div class="row">
                                <select class="form-control">
                                    <option>Select One</option>
                                    <option>Group</option>
                                    <option>ECO Code</option>
                                    <option>ECO#</option>
                                    <option>EM Code</option>
                                    <option>EC Code</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-sm-offset-2">                       
                            <input type="button" class="btn btn-danger" value="Edit">
                            <input type="button" class="btn btn-danger" value="Delete">                 
                        </div>
                    </div>
                </div>
            </form>   
        </div>
        
        <!--Search-->
        <div class="col-md-5">
            <div class="wrapper-dashboard">
                <form>          
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="">Search</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <select class="form-control">
                                    <option>Select One</option>
                                    <option>Name</option>
                                    <option>Field</option>
                                    <option>Options</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-2">                   
                            <input type="button" class="btn btn-danger" value="Load">                   
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
    <div class="col-md-12">
        <div id="centeredmenu" style="margin-top: 50px;">
            <h4 class="h-4">Options List</h4>
        </div>
    </div>
    
    <div class="col-md-12 users">
        <div class="wrapper-faq"> 
            <table class="table table-striped">
                <thead>
                    <tr>                 
                        <th>No</th>
                        <th>Name</th>
                        <th>Field</th>
                        <th>Options</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Group</td>
                        <td>Drop Menu</td>
                        <td>Orientation,College Preparation,Leadership,Vocation</td>
                        <td>
                            <input type="button" class="btn btn-danger" value="Save">
                            <input type="button" class="btn btn-danger" value="Edit">
                        </td>
                    </tr>              
                    <tr>
                        <td>2</td>
                        <td>Degree</td>
                        <td>Drop Menu</td>
                        <td>Associate,Bachelor,Master,Doctorate</td>
                        <td>
                            <input type="button" class="btn btn-danger" value="Save">
                            <input type="button" class="btn btn-danger" value="Edit">
                        </td>
                    </tr>              
                    <tr>
                        <td>3</td>
                        <td>Group</td>
                        <td>Drop Menu</td>
                        <td>Orientation,College Preparation,Leadership,Vocation</td>
                        <td>
                            <input type="button" class="btn btn-danger" value="Save">
                            <input type="button" class="btn btn-danger" value="Edit">
                        </td>
                    </tr>              
                    <tr>
                        <td>4</td>
                       <td>Degree</td>
                        <td>Drop Menu</td>
                        <td>Associate,Bachelor,Master,Doctorate</td>
                        <td>
                            <input type="button" class="btn btn-danger" value="Save">
                            <input type="button" class="btn btn-danger" value="Edit">
                        </td>
                    </tr>              
                    <tr>
                        <td>5</td>
                        <td>Group</td>
                        <td>Drop Menu</td>
                        <td>Orientation,College Preparation,Leadership,Vocation</td>
                        <td>
                            <input type="button" class="btn btn-danger" value="Save">
                            <input type="button" class="btn btn-danger" value="Edit">
                        </td>
                    </tr>              
                    <tr>
                        <td>6</td>
                       <td>Degree</td>
                        <td>Drop Menu</td>
                        <td>Associate,Bachelor,Master,Doctorate</td>
                        <td>
                            <input type="button" class="btn btn-danger" value="Save">
                            <input type="button" class="btn btn-danger" value="Edit">
                        </td>
                    </tr>              
                    <tr>
                        <td>7</td>
                        <td>Group</td>
                        <td>Drop Menu</td>
                        <td>Orientation,College Preparation,Leadership,Vocation</td>
                        <td>
                            <input type="button" class="btn btn-danger" value="Save">
                            <input type="button" class="btn btn-danger" value="Edit">
                        </td>
                    </tr>              

                </tbody>
            </table>
        </div>
    </div>
    <!--Pagination-->
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