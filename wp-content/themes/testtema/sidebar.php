<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 2018-09-07
 * Time: 10:20
 */?>
 <aside id="aside">
   <div id="about">
       <h4>About</h4>
       <p><?php the_author_meta( 'description' ); ?> </p>
   </div>
    <div id="archive">
        <h4>Archives</h4>
        <ul>
            <?php wp_get_archives( 'type=postbypost' ); ?>
        </ul>
    </div>
</aside>
