<section id="page-title">
    	<div class="container clearfix">
            <h1>Live TV</h1>
            <nav id="breadcrumbs">
                <ul>
                    <li><a href="#">Home</a> &rsaquo;</li>
                    <li><a href="#">Live TV</a> &rsaquo;</li>
                    <li>TV Live Streaming</li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- begin page title -->
    
    <!-- begin content -->
    <section id="content" class="container clearfix">
    	<?php if ($layout == "fullwidthpg" ) { ?>

    	<!-- begin main content -->

    	<section align="center">
                <a class="button green" href="<?php echo base_url(); ?>apps/stream/tv1#start">Channel 1</a>
                <a class="button retro-green" href="<?php echo base_url(); ?>apps/stream/tv2#start">Channel 2</a>
                <a class="button teal" href="<?php echo base_url(); ?>apps/stream/tv3#start">Channel 3</a>
                <a class="button blue-2" href="<?php echo base_url(); ?>apps/stream/tv4#start">Channel 4</a>
                <a class="button blue" href="<?php echo base_url(); ?>apps/stream/tv5#start">Channel 5</a>
                <a class="button red" href="<?php echo base_url(); ?>apps/stream/tv6#start">Channel 6</a>
                <a class="button pink" href="<?php echo base_url(); ?>apps/stream/tv7#start">Channel 7</a>
        </section>


        <div align="center"> 
        	<iframe src="http://172.27.27.23/tv/tv1.html" width="930px" height="500px"></iframe></div>
        <!-- end main content -->



    	<?php } else { ?>

    	<!-- begin sidebar -->
        <aside id="sidebar" class="one-fourth">
            <div class="widget">
                <nav>
                    <ul class="menu">
                    	<br></br>
                    	<br></br>
                    	<br></br>
                    	<br></br>

                        <li><a href="<?php echo base_url(); ?>apps/stream/tv1#start">Channel 1</a></li>
                        <li><a href="<?php echo base_url(); ?>apps/stream/tv2#start">Channel 2</a></li>
                        <li><a href="<?php echo base_url(); ?>apps/stream/tv3#start">Channel 3</a></li>
                        <li><a href="<?php echo base_url(); ?>apps/stream/tv4#start">Channel 4</a></li>
                        <li><a href="<?php echo base_url(); ?>apps/stream/tv5#start">Channel 5</a></li>
                        <li><a href="<?php echo base_url(); ?>apps/stream/tv6#start">Channel 6</a></li>
                        <li><a href="<?php echo base_url(); ?>apps/stream/tv7#start">Channel 7</a></li>
                        </ul>
                </nav>
            </div>
        </aside>
    	<!-- end sidebar -->

		<!-- begin main content -->

		<section id="start" align="center"> <br /> 
                <a class="button green" href="<?php echo base_url(); ?>apps/stream/tv1#start">Channel 1</a>
                <a class="button retro-green" href="<?php echo base_url(); ?>apps/stream/tv2#start">Channel 2</a>
                <a class="button teal" href="<?php echo base_url(); ?>apps/stream/tv3#start">Channel 3</a>
                <a class="button blue-2" href="<?php echo base_url(); ?>apps/stream/tv4#start">Channel 4</a>
                <a class="button blue" href="<?php echo base_url(); ?>apps/stream/tv5#start">Channel 5</a>
                <a class="button red" href="<?php echo base_url(); ?>apps/stream/tv6#start">Channel 6</a>
                <a class="button pink" href="<?php echo base_url(); ?>apps/stream/tv7#start">Channel 7</a>
        </section>

        <section id="main" class="three-fourths column-last">
            <div align="center">
            	<iframe src="<?php echo 'http://172.27.27.23/tv/' . $tvurl ?>" width="730px" height="500px"></iframe></div>
        </section>
        <!-- end main content -->
        <?php } ?>
    </section>
    <!-- end content -->  
