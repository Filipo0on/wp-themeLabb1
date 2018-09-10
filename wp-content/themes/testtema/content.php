<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 2018-09-05
 * Time: 10:15
 */ ?>

<div class="blog-post">
    <h2 class="blog-post-title"><?php the_title(); ?></h2>
    <p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>

    <?php the_content(); ?>

</div>
