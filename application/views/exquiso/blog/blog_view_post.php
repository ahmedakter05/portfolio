    <!-- begin page title -->
    <section id="page-title">
        <div class="container clearfix">
            <h1>Blogs</h1>
            <nav id="breadcrumbs">
                <ul>
                    <li><a href="<?php echo base_url(); ?>">Home</a> &rsaquo;</li>
                    <li>Blog Post</li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- begin page title -->
    
    <!-- begin content -->
    <section id="content" class="container clearfix">
    	<!-- begin main content -->
        <section id="main" class="blog-entry-list three-fourths">
        
            <article class="entry clearfix">
            	<a class="entry-image lightbox" href="#" title="<?php echo $content['post']['title']; ?>"><span class="overlay zoom"></span><img src="<?php echo base_url() . $content['post']['image_urls']; ?>" alt=""></a>
            	<div class="entry-date">
                    <div class="entry-day"><?php echo date("d", strtotime($content['post']['create_time']));?></div>
                    <div class="entry-month"><?php $month = str_split(date("F", strtotime($content['post']['create_time'])), 3); echo $month['0'];?></div>   
                </div>
                <div class="entry-body">
                    <h2 class="entry-title"><?php echo anchor("blogs/view/".$content['post']['postid'], $content['post']['title']); ?></h2>
                    <div class="entry-meta">
                        <span class="author"><?php echo anchor("users/profile/".$content['post']['id'], $content['post']['first_name'] . ' ' . $content['post']['last_name']); ?></span> 
                        <span class="categorytag"><?php echo anchor('blogs/category/'.$content['post']['categoryid'], $content['post']['categoryname']); ?></span>
                        <span class="category"><?php foreach ($content['tags'] as $tag){ echo anchor('blogs/tag/'.$tag['tagid'], $tag['tagtitle'].' '); } ?></span>
                        <span class="comments"><a href="<?php echo base_url(); ?>#"><?php echo anchor('blogs/view/'.$content['post']['postid'], $content['commentcount']. " Comments");  ?></a></span>
                    </div>
                    <div class="entry-content">
                        <?php echo $content['post']['contents']; ?>
                    </div>
                </div>
            </article>
            
            <hr>
            
            <section>
            	<h3>Article Tags</h3>
            	<ul class="tags clearfix">
                    <?php foreach ($content['tags'] as $tag): ?>
                    <li><a href="<?php echo base_url().'blogs/tag/'.$tag['tagid']; ?>"><?php echo $tag['tagtitle']; ?></a></li>
                    <?php endforeach ?>
                </ul>	
            </section>
            
            <hr>
            
            <section>
            	<h3>Related Posts</h3>
                <ul class="square indent">
                    <li><a href="blog-post-slider.html">Designing For Device Orientation: From Portrait To Landscape</a></li>
                    <li><a href="blog-post-video.html">Useful Talks and Videos from Web Design Conferences</a></li>
                    <li><a href="blog-post-no-media.html">The Creative Way to Maximize Design Ideas with Type</a></li>
                </ul>
            </section>
            <hr>
            
            <!-- begin comments -->
            <section id="comments">
                <h3><?php echo $content['commentcount'] . ' Comments'; ?></h3>
                
                <!-- begin comment list -->
                <ol class="comment-list">
                    <!-- begin comment -->
                    <?php foreach ($content['comments'] as $comment): ?>
                    <li class="comment">
                        <!-- begin comment 1 -->
                        <div id="comment-1" class="comment-wrap">
                            <div class="avatar-wrap">
                                <div class="avatar">
                                    <img src="<?php echo base_url(); ?>assets/exquiso/images/demo/avatar-50x50.png" alt="">
                                </div>
                                <a title="Edit comment" href="#" class="comment-edit-link" style="display: none;">Edit</a>
                            </div>
                            <div class="comment-details">
                                <div class="comment-author"><a href="#"><?php echo anchor('users/profile/'.$comment['author'], $comment['first_name'].' '.$comment['last_name']); ?></a></div>
                                <div class="comment-meta"><?php echo date("F d, Y", strtotime($comment['create_date']));?> at <?php echo date("h:i a", strtotime($comment['create_date']));?></div> 
                                <div class="comment-content">
                                    <?php echo $comment['content']; ?>
                                </div>
                            </div>
                        </div>
                        <!-- end comment 1 -->
                    </li>
                    <?php endforeach ?>
                    <!-- end comment -->
                </ol>
                <!-- end comment list -->
            </section>
            <!-- end comments -->
            
            <hr>
            
            <!-- begin leave a comment -->
            <section id="respond">
                <h3 id="reply-title">Leave uR Comment</h3>
                <form id="comment-form" method="post" action="#">
                    <p>We would be glad to get your feedback. Take a moment to comment and tell us what you think.</p>						
                    <p>
                        <label for="author">Name:<span class="note">*</span></label>
                        <input type="text" class="required" value="" name="author" id="author">
                    </p>
                    <p>
                        <label for="email">Email:<span class="note">*</span></label>
                        <input type="email" class="required" value="" name="email" id="email">
                    </p>
                    <p>
                        <label for="url">Website:</label><input type="text" value="" name="url" id="url">
                    </p>
                    <p>
                        <label for="comment">Message:<span class="note">*</span></label>
                        <textarea class="required" name="comment" rows="8" cols="45" id="comment"></textarea>
                    </p>						
                    <p class="form-allowed-tags">You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt; &lt;strong&gt; </code></p>						
                    <p class="form-submit">
                        <input type="submit" value="Post Comment" id="submit" name="submit">
                        <input type="hidden" id="comment_post_ID" value="45" name="comment_post_ID">
                        <input type="hidden" value="0" id="comment_parent" name="comment_parent">
                    </p>
                </form>
            </section>
            <!-- end leave a comment --> 
        </section>
        <!-- end main content -->
        
        <!-- begin sidebar -->
        <?php echo (isset($sidebar) ? $sidebar : '');?>
        <!-- end sidebar -->
    </section>
    <!-- end content -->  