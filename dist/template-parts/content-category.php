<?php
/**
 * The template for displaying individual content to the loop.
 *
 * This is the template that controls how individual entries
 * will appear in the loop of the hompage ifyou are using the
 * front-page.php template.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dawahinstitute
 */
?>


<div class="col-xs-12 col-md-4">
    <div class="card">
        <?php if( has_post_thumbnail() ){
            the_post_thumbnail( 'large' );
        }?>

        <div class="card-block">
            <h4 class="card-title post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php the_excerpt(); ?>
        </div>
    </div>
</div>











