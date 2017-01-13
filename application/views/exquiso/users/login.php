<!-- begin page title -->
    <section id="page-title">
      <div class="container clearfix">
            <h1><?php echo lang('login_heading');?></h1>
            <nav id="breadcrumbs">
                <ul>
                    <li><a href="#">Home</a> &rsaquo;</li>
                    <li>Login</li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- begin page title -->
    
      <!-- begin contact form -->
    <!-- begin content -->
    <section id="content" class="container clearfix">
    <!-- begin main content -->
        <section id="main" class="three-fourths" align="center">
          
              <div class="infobox">
                  <div class="infobox-inner">
                        <div>
                          <h4><?php echo lang('login_subheading');?></h4>
                          <h5><?php echo $message;?></h5>
                        </div>
                    </div>
                </div>
          <div class="one-fourth">&nbsp</div>
          <div class="one-half">
            <div class="infobox">
            <?php echo form_open("users/login");?>
            <table class="gen-table">
              <tbody>
                <tr>
                  <td><?php echo lang('login_identity_label', 'identity').'   ';?></td>
                  <td><?php echo form_input($identity);?></td>
                </tr>
                <tr>
                  <td><?php echo lang('login_password_label', 'password').'   ';?></td>
                  <td><?php echo form_input($password);?></td>
                </tr>
                <tr>
                  <td><?php echo lang('login_remember_label', 'remember').'   ';?></td>
                  <td><?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?></td>
                </tr>
                <tr>
                  <td><a href="<?php echo base_url(); ?>users/forgot_password"><?php echo lang('login_forgot_password');?></a></td>
                  <td><?php echo form_submit('submit', lang('login_submit_btn'));?></td>
                </tr>
              </tbody>
            </table>
            <?php echo form_close();?>
            </div>
          </div>
          <div class="one-fourth">&nbsp</div>
        </section>
        <!-- end main content -->
        <!-- end contact form -->
        
        <!-- begin sidebar -->
        <aside id="sidebar" class="one-fourth column-last">
            <div class="widget">
                <h3>Templates</h3>
                <nav>
                    <ul class="menu">
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="testimonials.html">Testimonials</a></li>
                        <li><a href="sitemap.html">Sitemap</a></li>
                        <li><a href="404-error-page.html">404 Error Page</a></li>
                        <li><a href="search-results.html">Search Results</a></li>
                        <li><a href="full-width-page.html">Full Width Page</a></li>
                        <li class="current-menu-item"><a href="page-right-sidebar.html">Page with Right Sidebar</a></li>
                        <li><a href="page-left-sidebar.html">Page with Left Sidebar</a></li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- end sidebar -->
    </section>
    <!-- end content -->  