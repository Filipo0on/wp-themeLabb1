<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 2018-09-04
 * Time: 11:59
 */ ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
      <link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  </head>
  <body>


<div id="container">


    <?php  get_header(); ?>

    <main>
        <div id="main-content">
           <?php
              if ( have_posts() ) : while ( have_posts() ) : the_post();

              get_template_part( 'content', get_post_format() );

              endwhile; endif;
            ?>
        </div>
        <?php  get_sidebar(); ?>
    </main>
    <?php  get_footer(); ?>
</div>


  </body>
</html