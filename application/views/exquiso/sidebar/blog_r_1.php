<!-- begin sidebar -->
        <aside id="sidebar" class="one-fourth column-last">
            <div class="widget">
                <h3>AA Blogs</h3>
                <p>As a Web Artisans, we should share our methods, modules, libraries and codes which will ease the other developers works. Here we share on Joomla, Wordpress, CodeIgniter, Laravel, Php, MySQL, Angular JS, Ajax, JQuery, E-Commerce and many more Topics</p>
            </div>
            
            <div class="widget">
                <h3>Top Categories</h3>		
                <ul class="menu">
                    <?php foreach($blog_cats as $value): ?>
                    <li><a href="<?php echo base_url().'blogs/category/'.$value['categoryid']; ?>"><?php echo $value['categoryname']; ?></a></li>
                    <?php endforeach ?>
                </ul>
            </div>
            
            <div class="widget">
                <h3>Top Tags</h3>
                <ul class="tags clearfix">
                    <?php foreach($blog_tags as $value): ?>
                    <li><a href="<?php echo base_url().'blogs/tag/'.$value['tagid']; ?>"><?php echo $value['tagtitle']; ?></a></li>
                    <?php endforeach ?>
                </ul>	
            </div>
            
            <div class="widget">
                <h3>Archives</h3>		
                <ul class="menu">
                    <li><a href="<?php echo base_url(); ?>blogs/index/date/jan/13" title="January 2013">January 2013</a></li>
                    <li><a href="<?php echo base_url(); ?>blogs/index/date/" title="December 2012">December 2012</a></li>
                    <li><a href="<?php echo base_url(); ?>blogs/index/date/" title="November 2012">November 2012</a></li>
                    <li><a href="<?php echo base_url(); ?>blogs/index/date/" title="October 2012">October 2012</a></li>
                </ul>
            </div>
            
        </aside>
        <!-- end sidebar -->