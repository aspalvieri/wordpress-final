<?php
/**
 * Template Name: Homepage Template
 * The front page template file
 */
    get_header();
    // require("header.php"); // Incase get_header() doesn't work
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php  $masthead_background = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "full"); ?>
        <section class="masthead" style="background-image: url('<?= $masthead_background["0"] ?>');">
            <article>
                <h1 style="color: white;">Alex's Game Emporium</h1>
                <h3 style="color: white;">Game Store and Reviews</h3>
            </article>
        </section>
        <section>
            <h2>Recent Games</h2>
            <div class="game-store-short-container">
                <?= do_shortcode("[games_shortcode]"); ?>
            </div>
        </section>
        <hr/>
        <section>
            <h2>Recent Posts</h2>
            <div class="game-store-short-container">
                <?= do_shortcode("[game_reviews_shortcode]"); ?>
            </div>
        </section>
    </main>
</div>
<?php
    get_footer();
?>