<div class="container news-area">
    <div class="row">

        <?php

        $args = array('numberposts' => 3);
        $myposts = get_posts($args);
        $count = count($myposts);


        $counter = 0;
        foreach ($myposts as $key => $post) : setup_postdata($post); ?>
            <div class="col-xs-12 col-md-4 col-sm-12">
                <article class="color-inverted">
                    <h2 class="typo-head"><?php the_title(); ?></h2>

                    <p class="typo-para"><?php the_excerpt(); ?></p>

                    <div class="read-on">
                        <a href="<?php the_permalink(); ?>" class="typo-para color-type-inverted">weiterlesen</a>
                    </div>
                </article>
            </div>
        <?php
        endforeach;
        wp_reset_postdata();
        ?>
    </div>
</div>