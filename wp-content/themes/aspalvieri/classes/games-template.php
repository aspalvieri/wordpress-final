<?php
/**
 * Template Name: Games Template
 * Template Post Type: post, page, product
 */
    get_header();
?>
<div class="wrap">
    <header class="page-header">
        <h1 class="page-title"><?= esc_html(get_the_title()); ?></h1>
    </header>
    <div id="primary" class="content-area">
        <?php
            $query = new WP_Query(array("post_type" => "games", "posts_per_page" => 10));
            while ($query -> have_posts()) : $query -> the_post();
            echo "<div class='game-store'>";
                echo "<div class='game-store-image'>";
                    the_post_thumbnail();
                echo "</div>";
                echo "<div class='game-store-content'>";
                    echo "<h3><strong>";
                        the_title();
                    echo "</strong></h3>";
                    echo "<p><strong>$".get_field("game-price", get_the_ID())."</strong></p>";
                    the_content();
                    $plink = get_permalink(get_the_ID());
                    $plink = preg_replace('/games/', 'product', $plink);
                    echo "<a href='".$plink."'>View Game</a>";
                echo "</div>";
            echo "</div>";
            endwhile; 
            wp_reset_postdata();
        ?>
    </div>
</div>
<?php
    get_footer();
?>