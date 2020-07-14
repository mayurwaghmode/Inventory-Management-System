<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><i class="fas fa-store" style="font-size:25px;color:#81b1dc;"></i></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="profile.php"><i class="fa fa-user fa-fw"></i> My Profile</a></li>
                        
                        <li class="divider"></li>
                        <li><a href="index.php?logout='1'"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                   
                </li>
            
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li id="username"><i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['username']; ?></li>
                        <li>
                            <a href="index.php"><i class="fas fa-chart-line"></i> Dashboard</a>
                        </li>
                      
                        <li style="cursor: pointer"><a data-toggle="collapse" data-target="#product"><i class="fa fa-caret-down"></i> Products</a></li>
                        <div id="product" class="collapse" style="padding-left: 20px">
                             <li style="padding: 10px">
                                <a href="manage_products.php" style="text-decoration: none; padding: 10px 50px"><i class="fa fa-product-hunt" aria-hidden="true"></i>Issue Products</a>
                            </li>
                            <li style="padding: 10px">
                                <a href="add_item.php" style="text-decoration: none; padding: 10px 50px"><i class="fas fa-edit"></i> Add Products</a>
                            </li>
                            <li style="padding: 10px">
                                <a href="datatable_inventory.php" style="text-decoration: none; padding: 10px 50px"><i class="fas fa-table"></i> View Products</a>
                            </li>
                        </div>
                      
                        <li style="cursor: pointer"><a data-toggle="collapse" data-target="#cat"><i class="fa fa-caret-down"></i> Categories</a></li>
                        <div id="cat" class="collapse" style="padding-left: 20px">

                            <li style="padding: 10px">
                                <a href="add_category.php" style="text-decoration: none; padding: 10px 50px"><i class="fas fa-certificate"></i> Add Category</a>
                            </li>
                            <li style="padding: 10px">
                                <a href="datatable_categories.php" style="text-decoration: none; padding: 10px 50px"><i class="fas fa-table"></i> View Category</a>
                            </li>
                        </div>

                        <li><a href="index.php?logout='1'"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>


                </div>
               
            </div>
            
        </nav>