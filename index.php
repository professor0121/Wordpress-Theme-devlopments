<?php get_header(); ?>
<style>
    .content-section {
    padding: 30px 0;
    min-height: 450px;
    display: flex; 
    align-items: center; 
    justify-content: center; 
    background-color: #f9f9f9; 
}
</style>
<!-- Content Sections -->
<div class="ui container">
    <h1 class="ui header">Blog</h1>
    <div class="ui stackable">
        <div class="five wide flex-blog">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="ui card">
                    <div class="image">
                            <?php 
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('medium'); // You can change 'medium' to 'thumbnail', 'large', or custom size
                            } 
                            ?>
                        </div>
                        <div class="content">
                            <div class="header">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                            <div class="meta">
                                <span class="date"><?php the_time('F j, Y'); ?></span>
                            </div>
                            <div class="description">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <div class="ui pagination menu">
                    <?php
                    // Display pagination
                    the_posts_pagination(array(
                        'mid_size' => 2,
                        'prev_text' => __('« Previous', 'textdomain'),
                        'next_text' => __('Next »', 'textdomain'),
                    ));
                    ?>
                </div>
            <?php else : ?>
                <p>No posts found.</p>
            <?php endif; ?>
        </div>
         
    </div>
</div>


<?php get_footer(); ?>
