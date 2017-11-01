<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse side-nav">
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
                        <?php $us_lvl = $this->my_func->scpro_decrypt($this->session->userdata('ul_id'));?>
                        <?php if($us_lvl != 4 ){?>
                         <li>
                            <a href="#"><i class="fa fa-shopping-cart fa-fw"></i> Purchase<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            <?php if($us_lvl != 3 ){?>
                                <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/a22'); ?>">Add Purchase</a>
                                </li>
                                <?php }else{?>
                                 <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/a22.1'); ?>">Add Purchase</a>
                                </li>
                                <?php } ?>
                                <?php if($us_lvl != 3 ){?>
                                <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/a29'); ?>">Purchase List</a>
                                </li>
                                <?php }?>
                                <?php if($us_lvl != 1 && $us_lvl != 2 && $us_lvl != 4){?>
                                <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/a30'); ?>">Your Purchase</a>
                                </li>
                                <?php }?>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php }?>
                         
                        
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
                  
                         <li>
                            <a href="#"><i class="fa fa-gear fa-fw"></i> Settings<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <?php if($us_lvl != 4 ){?>
                                <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/a27'); ?>"><i class="fa fa-gift fa-fw"></i> Item</a>
                                </li>
                                <?php } ?>
                                <?php if($us_lvl != 4 ){?>
                                <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/e27'); ?>"><i class="fa fa-tag fa-fw"></i> Categories</a>
                                </li>
                                <?php } ?>
                                <?php if($us_lvl != 4 ){?>

                                <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/e27'); ?>"><i class="fa fa-tags fa-fw"></i> Type</a>
                                </li>
                                <?php } ?>
                                <?php if($us_lvl != 4 ){?>
                                <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/a6'); ?>"><i class="fa fa-users fa-fw"></i> Supplier</a>
                                </li>
                                <?php } ?>
                                <?php if($us_lvl != 4 ){?>
                                <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/d2'); ?>"><i class="fa fa-tasks fa-fw"></i> Project</a>
                                </li>
                                <?php } ?>
                                <?php if($us_lvl != 4 ){?>
                                <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/u2'); ?>"><i class="fa fa-balance-scale fa-fw"></i> Quantity Unit</a>
                                </li>
                                <?php } ?>
                                <?php if($us_lvl != 2 && $us_lvl != 3 && $us_lvl != 4){?>
                                <li>
                                    <a href="<?= site_url('purchase_v1/dashboard/page/a25'); ?>"><i class="fa fa-user fa-fw"></i> Users</a>
                                </li>
                                <?php } ?>

                            </ul>
                           
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
     </nav>
