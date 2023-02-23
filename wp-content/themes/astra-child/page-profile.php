<?php
/*
Template Name: Profile
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_template_part('template-parts/profile/please_log', get_post_format());

get_header(); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<div id="primary" <?php astra_primary_class(); ?>>
    <main id="main" class="site-main">
        <article class="post-408 page type-page status-publish ast-article-single" id="post-408" itemtype="https://schema.org/CreativeWork" itemscope="itemscope">
            <header class="entry-header ast-header-without-markup">
            </header><!-- .entry-header -->
            <div class="entry-content clear" itemprop="text">
                <div data-elementor-type="wp-page" data-elementor-id="408" class="elementor elementor-408">

                    <?php get_template_part( 'template-parts/profile-single', get_post_format() ); ?>

                    <section class="elementor-section elementor-top-section elementor-element elementor-element-e2912f3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e2912f3" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1035155 bg-white bg-tab" data-id="1035155" data-element_type="column">

                                <?php

                                // get_template_part('template-parts/profile/profile', get_post_format());
//                                if(!isset($_GET['tab'])) {
//                                    get_template_part('template-parts/profile/profile', get_post_format());
//                                }
//                                if(isset($_GET['tab'])) {
//                                    if($_GET['tab']=='profile') {
//                                        get_template_part('template-parts/profile/profile', get_post_format());
//                                    }
//                                    elseif($_GET['tab']=='project') {
//                                        get_template_part('template-parts/profile/project', get_post_format());
//                                    }
//                                    elseif($_GET['tab']=='status') {
//                                        get_template_part('template-parts/profile/status', get_post_format());
//                                    }
//                                    elseif($_GET['tab']=='stats') {
//                                        get_template_part('template-parts/profile/stats', get_post_format());
//                                    }
//                                    else {
//                                        get_template_part('template-parts/profile/profile', get_post_format());
//                                    }
//
//                                }

                                ?>
                            </div>
                        </div>
                    </section>

                    <!--		--><?php //get_template_part( 'template-parts/profile-end', get_post_format() ); ?>
                    <!---->
                    <!--		--><?php //astra_content_page_loop(); ?>
                    <!---->
                    <!--		--><?php //astra_primary_content_bottom(); ?>


                </div>
                <br/>
                <br/>
            </div><!-- .entry-content .clear -->
        </article><!-- #post-## -->
    </main>

</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
