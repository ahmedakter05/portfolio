<!-- begin page title -->
    <section id="page-title">
    	<div class="container clearfix">
            <h1>Blogs</h1>
            <nav id="breadcrumbs">
                <ul>
                    <li><a href="<?php echo base_url(); ?>">Home</a> &rsaquo;</li>
                    <li>Blogs</li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- begin page title -->
    
    <!-- begin content -->
    <section id="content" class="container clearfix">
        <?php if(!empty($message)){?>
        <div class="notification-box notification-box-error">
            <h3 color="red"><b><?php echo  $message; ?></b></h3>
            <a href="#" class="notification-close notification-close-error">x</a>
        </div> <?php } ?>
    	<!-- begin main content -->
        <section id="main" class="blog-entry-list three-fourths">
			<?php foreach ($posts as $post): ?>
            <article class="entry clearfix">
            	<a class="entry-image link-overlay" href="<?php echo base_url(); ?>" title="<?php echo $post['title']; ?>"><span class="overlay"></span><img src="<?php echo base_url() . $post['image_urls']; ?>" alt=""></a>
            	<div class="entry-date">
                    <div class="entry-day"><?php echo date("d", strtotime($post['create_time']));?></div>
                    <div class="entry-month"><?php $month = str_split(date("F", strtotime($post['create_time'])), 3); echo $month['0'];?></div>   
                </div>
                <div class="entry-body">
                    <h2 class="entry-title"><?php echo anchor("blogs/view/".$post['postid'], $post['title']); ?></h2>
                    <div class="entry-meta">
                    	<span class="author"><?php echo anchor("users/".$post['postid'], $post['first_name'] . ' ' . $post['last_name']); ?></span> 
                        <span class="category"><?php foreach ($post['categories'] as $category){ echo anchor('blogs/category/'.$category['categoryid'], $category['categoryname'].' '); }//$tags = explode(' ', $post['tags']); $sym=NULL; foreach ($tags as $tag){ echo (isset($sym) ? $sym : ''); echo anchor('blog/tag/'.$tag, $tag); $sym =', '; }; ?></span>
                        <span class="categorytag"><?php foreach ($post['tags'] as $tag){ echo anchor('blogs/tag/'.$tag['tagid'], $tag['tagtitle'].' '); } ?></span>
                        <span class="comments"><a href="<?php echo base_url(); ?>#"><?php echo anchor('blogs/view/'.$post['postid'], $post['commentcount']. " Comments");  ?></a></span>
                    </div>
                    <div class="entry-content">
                        <p><?php echo substr($post['contents'], 0, 450) . ' ...'; echo anchor('blogs/view/'.$post['postid'], '</br>Read More ...'); ?></p>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
            
            
            <hr>
            
            <!-- begin pagination -->
            <?php if (!empty($links)){ ?>
            <nav class="page-navi" style="font-size: 120%;">
                <span><b> Page No: </b></span>
                <?php echo '&nbsp &nbsp &nbsp'.$links; ?>
            </nav>
            <?php } ?>
            <!-- end pagination --> 
        </section>
        <!-- end main content -->
        <!-- begin sidebar -->
        <?php echo (isset($sidebar) ? $sidebar : '');?>
        <!-- end sidebar -->
    </section>
    <!-- end content --> 