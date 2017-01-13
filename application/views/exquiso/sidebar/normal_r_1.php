<aside id="sidebar" class="one-fourth column-last">
            <div class="widget">
                <h3>Navigation</h3>
                <nav>
                    <?php //var_dump($side_nav); ?>
                    <ul class="menu">
                        <?php foreach($side_nav as $name => $url): ?>
                        <li><a href="<?php echo $url; ?>"><?php echo $name; ?></a></li>
                        <?php endforeach ?>
                    </ul>
                </nav>
            </div>
        </aside>