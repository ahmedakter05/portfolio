    <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script> <!-- Google maps -->
    <!-- begin page title -->
    <section id="page-title">
        <div class="container clearfix">
            <h1><?php echo $activepage; ?></h1>
            <nav id="breadcrumbs">
                <ul>
                    <li><a href="<?php echo base_url(); ?>">Home</a> &rsaquo;</li>
                    <li><?php echo $activepage; ?></li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- begin page title -->
    
    <!-- begin content -->
    <section id="content" class="container clearfix">
        <!-- begin google map --> 
        <section>
            <div id="map"
                <?php echo $map['js']; ?>
                <?php echo $map['html']; ?>
            </div>
            <br> </ br>
            <br> </ br>
            <br> </ br>
        </section>
        <!-- end google map -->
        
        <!-- begin main -->
        <section id="main" class="three-fourths">
        <!-- begin contact form -->
        <h2>Contact Me</h2>
        <p>We would be glad to have feedback from you. Drop us a line, whether it is a comment, a question, a work proposition or just a hello. You can use either the form below or the contact details on the right.</p>
        <div id="contact-notification-box-success" class="notification-box notification-box-success" style="display: none;">
            <p>Your message has been successfully sent. We will get back to you as soon as possible.</p>
            <a href="#" class="notification-close notification-close-success">x</a>
        </div>
        
        <div id="contact-notification-box-error" class="notification-box notification-box-error " style="display: none;">
            <p>Your message couldn't be sent because a server error occurred. Please try again.</p>
            <a href="#" class="notification-close notification-close-error">x</a>
        </div>
        <form id="contact-form" class="content-form" method="post" action="#">
            <p>
                <label for="name">Name:<span class="note">*</span></label>
                <input id="name" type="text" name="name" class="required">
            </p>
            <p>
                <label for="email">Email:<span class="note">*</span></label>
                <input id="email" type="email" name="email" class="required">
            </p>
            <p>
                <label for="url">Website:</label>
                <input id="url" type="url" name="url">
            </p>
            <p>
                <label for="subject">Subject:<span class="note">*</span></label>
                <input id="subject" type="text" name="subject" class="required">
            </p>
            <p>
                <label for="message">Message:<span class="note">*</span></label>
                <textarea id="message" cols="68" rows="8" name="message" class="required"></textarea>
            </p>
            <p>
                <input id="submit" class="button" type="submit" name="submit" value="Send Message">
            </p>
        </form>
        <p><span class="note">*</span> Required fields</p>
        <!-- end contact form -->
        </section>
        <!-- end main -->
        
        <!-- begin sidebar -->
        <aside id="sidebar" class="one-fourth column-last">
            <div class="widget contact-info">
                <h3>Contact Info</h3>
                <p>&nbsp;&nbsp;&nbsp;<strong>You can also Reach me Here:</strong></p>
                <div>
                    <p class="address"><strong>Address:</strong> Banasree,Rampura, </ br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dhaka, Bangladesh</p>
                    <p class="phone"><strong>Phone:</strong> Coming-Soon</p>
                    <p class="fax"><strong>Fax:</strong> Coming-Soon</p>
                    <p class="email"><strong>Email:</strong> <a href="mailto:admin@aapf.tk">admin@aapf.tk</a></p>
                </div>
            </div>
        </aside>
        <!-- end sidebar -->
    </section>
    <!-- end content -->  