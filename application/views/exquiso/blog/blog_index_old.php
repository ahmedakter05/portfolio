<!-- begin page title -->
    <section id="page-title">
    	<div class="container clearfix">
            <h1>Blog</h1>
            <nav id="breadcrumbs">
                <ul>
                    <li><?php echo $bc; ?></li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- begin page title -->
    
    <!-- begin content -->
    <section id="content" class="container clearfix">
    	<!-- begin main content -->
        <section id="main" class="blog-entry-list three-fourths">
			<?php foreach ($posts as $post): ?>
            <article class="entry clearfix">
            	<a class="entry-image link-overlay" href="<?php echo base_url(); ?>" title="<?php echo $post->title; ?>"><span class="overlay"></span><img src="<?php echo base_url() . $post->image_urls; ?>" alt=""></a>
            	<div class="entry-date">
                    <div class="entry-day"><?php echo date("d", strtotime($post->create_time));?></div>
                    <div class="entry-month"><?php $month = str_split(date("F", strtotime($post->create_time)), 3); echo $month['0'];?></div>   
                </div>
                <div class="entry-body">
                    <h2 class="entry-title"><?php echo anchor("blogs/".$post->postid, $post->title); ?></h2>
                    <div class="entry-meta">
                    	<span class="author"><?php echo anchor("users/".$post->postid, $post->first_name . ' ' . $post->last_name); ?></span> 
                        <span class="category"><?php $tags = explode(' ', $post->tags); $sym=NULL; foreach ($tags as $tag){ echo (isset($sym) ? $sym : ''); echo anchor('blog/tag/'.$tag, $tag); $sym =', '; }; ?></span>
                        <span class="comments"><a href="<?php echo base_url(); ?>assets/exquiso/#">4 Comments</a></span>
                    </div>
                    <div class="entry-content">
                        <p><?php echo substr("$post->contents", 0, 460); ?></p>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
            
            
            <hr>
            
            <!-- begin pagination -->
            <nav class="page-nav">
                <span>Page 7 of 15</span>
                <ul>
                    <li><a href="<?php echo base_url(); ?>assets/exquiso/#">&laquo; First</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/exquiso/#">&lsaquo; Previous</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/exquiso/#">6</a></li>
                    <li class="current">7</li>
                    <li><a href="<?php echo base_url(); ?>assets/exquiso/#">8</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/exquiso/#">9</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/exquiso/#">10</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/exquiso/#">Next &rsaquo;</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/exquiso/#">Last &raquo;</a></li>
                </ul>
            </nav>
            <!-- end pagination --> 
        </section>
        <!-- end main content -->
        
        <!-- begin sidebar -->
        <aside id="sidebar" class="one-fourth column-last">
            <div class="widget">
                <h3>Text Widget</h3>
                <p>Phasellus ultricies sollicitudin eros, nec vehicula mauris volutpat in. Nulla non arcu nunc, id semper eros. Class aptent taciti sociosqu ad litora torquent per.</p>
            </div>
            
            <div class="widget">
                <h3>Categories</h3>		
                <ul class="menu">
                    <li><a title="View all posts filed under Web Design" href="<?php echo base_url(); ?>assets/exquiso/#">Web Design</a></li>
                    <li><a title="View all posts filed under Print Design" href="<?php echo base_url(); ?>assets/exquiso/#">Print Design</a></li>
                    <li><a title="View all posts filed under Photography" href="<?php echo base_url(); ?>assets/exquiso/#">Photography</a></li>
                    <li><a title="View all posts filed under Animation" href="<?php echo base_url(); ?>assets/exquiso/#">Animation</a></li>
                </ul>
            </div>
            
            <div class="widget">
                <h3>Tags</h3>
                <ul class="tags clearfix">
                	<li><a href="<?php echo base_url(); ?>assets/exquiso/#">Animation</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/exquiso/#">HTML/CSS</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/exquiso/#">Photography</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/exquiso/#">Photoshop</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/exquiso/#">Print Design</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/exquiso/#">Web Design</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/exquiso/#">WordPress</a></li>
                </ul>	
            </div>
            
            <div class="widget flickr-widget">
                <h3>Flickr Widget</h3>		
                <ul class="flickr-feed clearfix"></ul>
            </div>
            
            <div class="widget">
                <h3>Archives</h3>		
                <ul class="menu">
                    <li><a href="<?php echo base_url(); ?>assets/exquiso/#" title="January 2013">January 2013</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/exquiso/#" title="December 2012">December 2012</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/exquiso/#" title="November 2012">November 2012</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/exquiso/#" title="October 2012">October 2012</a></li>
                </ul>
            </div>
            
        </aside>
        <!-- end sidebar -->
    </section>
    <!-- end content --> 