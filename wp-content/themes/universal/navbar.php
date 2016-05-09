                    <div class="container">
                        <div class="navbar-header">

                            <a class="navbar-brand home" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Universal logo" class="hidden-xs hidden-sm">
                                <img src="<?php echo get_template_directory_uri();?>/img/logo-small.png" alt="Universal logo" class="visible-xs visible-sm"><span class="sr-only">Universal - go to homepage</span>
                            </a>
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>
                        <!--/.navbar-header -->

                        <div class="navbar-collapse collapse" id="navigation">

                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown active">
                                    <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown">Home <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Option 1: Default Page</a></li>
                                        <?php 
                                            $pages = get_pages(array(
                                                'child_of' => 48            
                                            ));                                                  
                                            foreach ( $pages as $page ) {
                                                    echo '<li><a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a></li>';                                                    
                                            }
                                        ?>                                    
                                    </ul>
                                </li>
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img src="<?php echo get_template_directory_uri();?>/img/template-easy-customize.png" class="img-responsive hidden-xs" alt="">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Shortcodes</h5>
                                                        <ul>
                                                            <?php 
                                                                $pages = get_pages(array(
                                                                    'child_of' => 89            
                                                                ));                                                  
                                                                foreach ( $pages as $page ) {
                                                                        echo '<li><a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a></li>';                                                    
                                                                }
                                                            ?>                                                                 
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Header variations</h5>
                                                        <ul>
                                                            <?php 
                                                                $pages = get_pages(array(
                                                                    'child_of' => 131            
                                                                ));                                                  
                                                                foreach ( $pages as $page ) {
                                                                        echo '<li><a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a></li>';                                                    
                                                                }
                                                            ?>  
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img src="<?php echo get_template_directory_uri();?>/img/template-homepage.png" class="img-responsive hidden-xs" alt="">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Portfolio</h5>
                                                        <ul>
                                                            <?php 
                                                                $pages = get_pages(array(
                                                                    'child_of' => 145            
                                                                ));                                                  
                                                                foreach ( $pages as $page ) {
                                                                        echo '<li><a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a></li>';                                                    
                                                                }
                                                            ?>  
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>About</h5>
                                                        <ul>
                                                            <?php 
                                                                $pages = get_pages(array(
                                                                    'child_of' => 27            
                                                                ));                                                  
                                                                foreach ( $pages as $page ) {
                                                                        echo '<li><a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a></li>';                                                    
                                                                }
                                                            ?>  
                                                        </ul>
                                                        <h5>Marketing</h5>
                                                        <ul>
                                                            <?php 
                                                                $pages = get_pages(array(
                                                                    'child_of' => 188            
                                                                ));                                                  
                                                                foreach ( $pages as $page ) {
                                                                        echo '<li><a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a></li>';                                                    
                                                                }
                                                            ?>  
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!-- ========== FULL WIDTH MEGAMENU ================== -->
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">All Pages <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h5>Home</h5>
                                                        <ul>
                                                            <?php 
                                                                $pages = get_pages(array(
                                                                    'child_of' => 48            
                                                                ));                                                  
                                                                foreach ( $pages as $page ) {
                                                                        echo '<li><a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a></li>';                                                    
                                                                }
                                                            ?>
                                                        </ul>
                                                        <h5>About</h5>
                                                        <ul>
                                                            <?php 
                                                                $pages = get_pages(array(
                                                                    'child_of' => 27            
                                                                ));                                                  
                                                                foreach ( $pages as $page ) {
                                                                        echo '<li><a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a></li>';                                                    
                                                                }
                                                            ?>  
                                                        </ul>
                                                        <h5>Marketing</h5>
                                                        <ul>
                                                            <?php 
                                                                $pages = get_pages(array(
                                                                    'child_of' => 188            
                                                                ));                                                  
                                                                foreach ( $pages as $page ) {
                                                                        echo '<li><a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a></li>';                                                    
                                                                }
                                                            ?> 
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Portfolio</h5>
                                                        <ul>
                                                            <?php 
                                                                $pages = get_pages(array(
                                                                    'child_of' => 145            
                                                                ));                                                  
                                                                foreach ( $pages as $page ) {
                                                                        echo '<li><a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a></li>';                                                    
                                                                }
                                                            ?> 
                                                        </ul>
                                                        <h5>User pages</h5>
                                                        <ul>                                                        
                                                            <?php 
                                                                $pages = get_pages(array(
                                                                    'child_of' => 217            
                                                                ));                                                  
                                                                foreach ( $pages as $page ) {
                                                                        echo '<li><a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a></li>';                                                    
                                                                }
                                                            ?> 
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Shop</h5>
                                                        <ul>
                                                            <?php 
                                                                $pages = get_pages(array(
                                                                    'child_of' => 239            
                                                                ));                                                  
                                                                foreach ( $pages as $page ) {
                                                                        echo '<li><a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a></li>';                                                    
                                                                }
                                                            ?> 
                                                        </ul>
                                                        <h5>Shop - order process</h5>
                                                        <ul>
                                                            <?php 
                                                                $pages = get_pages(array(
                                                                    'child_of' => 249            
                                                                ));                                                  
                                                                foreach ( $pages as $page ) {
                                                                        echo '<li><a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a></li>';                                                    
                                                                }
                                                            ?> 
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Contact</h5>
                                                        <ul>
                                                            <?php 
                                                                $pages = get_pages(array(
                                                                    'child_of' => 203            
                                                                ));                                                  
                                                                foreach ( $pages as $page ) {
                                                                        echo '<li><a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a></li>';                                                    
                                                                }
                                                            ?> 
                                                        </ul>
                                                        <h5>Pages</h5>
                                                        <ul>
                                                            <?php 
                                                                $pages = get_pages(array(
                                                                    'child_of' => 264            
                                                                ));                                                  
                                                                foreach ( $pages as $page ) {
                                                                        echo '<li><a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a></li>';                                                    
                                                                }
                                                            ?> 
                                                        </ul>
                                                        <h5>Blog</h5>
                                                        <ul>
                                                            <?php 
                                                                $pages = get_pages(array(
                                                                    'child_of' => 277            
                                                                ));                                                  
                                                                foreach ( $pages as $page ) {
                                                                        echo '<li><a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a></li>';                                                    
                                                                }
                                                            ?> 
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.yamm-content -->
                                        </li>
                                    </ul>
                                </li>
                                <!-- ========== FULL WIDTH MEGAMENU END ================== -->

                                <li class="dropdown">
                                    <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown">Contact <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <?php 
                                            $pages = get_pages(array(
                                                'child_of' => 203            
                                            ));                                                  
                                            foreach ( $pages as $page ) {
                                                echo '<li><a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a></li>';                                                    
                                            }
                                        ?>  
                                    </ul>
                                </li>
                            </ul>

                        </div>
                        <!--/.nav-collapse -->



                        <div class="collapse clearfix" id="search">

                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>

                        </div>
                        <!--/.nav-collapse -->

                    </div>


                