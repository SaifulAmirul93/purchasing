<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?= site_url('purchase_v1/dashboard/page/a1'); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <?php $us_lvl = $this->session->userdata('ul_id');?>
                        <?php if($us_lvl != 4 ){?>
                         <li>
                            <a href="#"><i class="fa fa-shopping-cart fa-fw"></i> Purchase<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/a22'); ?>">Add Purchase</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/a29'); ?>">Purchase List</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php }?>
                         <!-- <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i> Purchasing<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                    
                                <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/a21'); ?>">Purchase Action</a>
                                </li>
                            </ul>
                            
                        </li> -->
                        
                        <?php if($us_lvl != 2 && $us_lvl != 3 ){?>
                         <li>
                            <a href="#"><i class="fa fa-calculator fa-fw"></i> Accounting<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                    
                                <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/acc1'); ?>">Purchase List</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php }?>
                      <?php if($us_lvl != 4 ){?>
                         <li>
                            <a href="#"><i class="fa fa-gift fa-fw"></i> Item<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/a26'); ?>">Add Item</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/a27'); ?>">Item List</a>
                                </li>
                            
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php } ?>
                        <?php if($us_lvl != 4 ){?>
                         <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i> Categories<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/e26'); ?>">Add categories</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/e27'); ?>">Catrgories List</a>
                                </li>
                            
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <?php } ?>
                         <?php if($us_lvl != 4 ){?>
                            <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Supplier<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/a6'); ?>">Supplier List</a>
                                </li>
                                
                            
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php } ?>
                        <?php if($us_lvl != 4){?>
                          <li>
                            <a href="#"><i class="fa fa-industry fa-fw"></i> Project<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/d1'); ?>">Add Project</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/d2'); ?>">Project List</a>
                                </li>
                                
                            
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-balance-scale fa-fw"></i> Quantity Unit<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/u1'); ?>">Add Unit</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/u2'); ?>">Unit List</a>
                                </li>
                                
                            
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php } ?>
                        <?php if($us_lvl != 2 && $us_lvl != 3 && $us_lvl != 4){?>
                             <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> User<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/a23'); ?>">User Information</a>
                                </li>
                                <!-- <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/a24'); ?>">Add user</a>
                                </li> -->
                                <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/a25'); ?>">User List</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php } ?>
<!-- 
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul> -->
                            <!-- /.nav-second-level -->
                        <!-- </li> -->
                     <!--    <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li> -->
                     <!--    <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                       <!-- </li> -->
                  <!--       <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul> -->
                                    <!-- /.nav-third-level -->
                                <!-- </li>
                            </ul> -->
                            <!-- /.nav-second-level -->
                        <!-- </li> -->
                   <!--      <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul> -->
                            <!-- /.nav-second-level -->
                        <!-- </li> -->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
     </nav>
