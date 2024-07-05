                    <div class="col-lg-3">
                            <div class="row">
                                <div class="row" style="margin-bottom:0px;">
                                    <div class="col-lg-12">
                                        <p class="cat">ALL CATEGORIES</p>
                                    
                                     <ul class="cat_list">
                                            <li><a href="/?page=men"> MEN</a> </li>
                                            <li><a href="/?page=women"> WOMEN</a> </li>
                                            <li><a href="/?page=others"> OTHERS CATEGORIES</a> </li>
                                            <li><a href="#"> </a> </li>
                                            <li><a href="#"> </a> </li>
                                            <li><a href="#"> </a> </li>
                                            <li><a href="#"> </a> </li>
                                            <li><a href="#"> </a> </li>
                                            <li><a href="/?page=normal"> SHOW ALL CATEGORIES</a> </li>
                                            
                                          
                                    </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top:10px;">
                                <div class="col-lg-12" style="padding:0px; margin:0px;">
                                    <?php include('latest_product.php'); ?>
                                </div>
                            </div>
                       </div>
                        <div class="col-lg-7">
                            <form role="form" id="frm" method="POST" action="search.php">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <input type="text" id="searchparam" name="searchparam" placeholder="what are you looking for? find it here "class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn btn-danger" id="sbtn" type="button">
                                                    Search
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                                                  
                            </form>
                            <div class="">
                                <div style="padding-top:10px;">
                                    <?php include('carousel.php') ?>
                                </div>
                            </div>  
                        </div>
                        <div class="col-lg-2" style="padding-right:0px; padding-left:0px;">
                            <div class="row">
                                <div class="col-lg-2" style="padding-right:0px;"><img src="images/user.png"></div>
                                <div class="col-lg-7" style="padding-right:0px;">
                                    <ul class="nav">
                                        <li class="dropdown"> 
                                            <a href="ulogin.php" class="dropdown-toggle" data-toggle="modal" data-target="#myModal"> LOGIN
                                            <b class="caret"></b> 
                                            </a> 
                                            
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 cartno" style="padding-right:0px; padding-left:0px;">
                                        <ul class="nav edit">
                                                <li class="dropdown"> 
                                                    
                                                     <span id="num"  class="dropdown-toggle" data-toggle="dropdown">
                                                        <?php 
                                                                if(isset($_SESSION['items'])) {
                                                                    $nofi = count($_SESSION['items']);
                                                                }else {
                                                                    $nofi = 0;
                                                                }
                                                                    echo $nofi;  
                                                        ?>      
                                                       
                                                    </span>                                                    
                                                    
                                                    <ul class="dropdown-menu sca pull-right" role="menu"> 
                                                        <li>
                                                            <div id="lstcart" class="panel panel-default" style="margin:0px; border-radius:0px; max-height:250px; overflow-y:auto; overflow-x:hidden;">
                                                                <img src="images/preloader.gif" id="loading" style="display:none;">
                                                            </div>
                                                        </li>
                                                    </ul> 
                                                </li>
                                            </ul>
                                       
                                </div>
                            </div>
                            <div class="row" style="margin-left:1px;">
                                <img src="images/side_ad.png" class="img-reponsive">
                            </div>
                            <div class="row" style="margin-left:1px;margin-top:5px;">
                                <img src="images/career.png" class="img-responsive">
                            </div>
                        </div>

                    <!--login modal -->

                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" style="width:75%;">
                            <div class="modal-content">
                            </div>
                        </div>
                    </div>
                    