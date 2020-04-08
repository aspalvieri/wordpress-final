<?php
/**
 * Template Name: Movie Reviews
 * Template Post Type: post, page, product
 */
    get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <section class="the-page-content">
            <h1><?= esc_html(get_the_title()); ?></h1>
            <?php
                $query = new WP_Query(array("post_type" => "movie-reviews", "posts_per_page" => 10));
                while ($query -> have_posts()) : $query -> the_post();
            ?>
                <div>
                    <h3><?php the_title(); ?></h3>
                </div>
                <div class="movie-content">
                    <?php
                        the_post_thumbnail();
                        the_content();
                    ?>
                </div>
            <?php 
                endwhile; 
                wp_reset_postdata();
            ?>
        </section>
    </main>
</div>
<?php
    get_footer();
?>