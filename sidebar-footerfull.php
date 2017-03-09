<?php
/**
 * Sidebar setup for footer full.
 *
 * @package understrap-child
 */

?>

<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

    <!-- ******************* The Hero Widget Area ******************* -->

    <div class="wrapper" id="wrapper-footer-full">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <?php dynamic_sidebar( 'footerfull' ); ?>
                </div>
            </div>
        </div>


    </div><!-- #wrapper-footer-full -->

<?php endif; ?>
