<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <div class="entry-meta">
                    <span class="posted-on">
                        Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>
                    </span>
                    <span class="byline">
                        by <?php the_author_posts_link(); ?>
                    </span>
                </div>
            </header>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>

            <footer class="entry-footer">
                <?php wp_link_pages(array(
                    'before'      => '<nav class="page-links pagination">' . esc_html__('Pages:', 'text-domain'),
                    'after'       => '</nav>',
                    'link_before' => '<span class="page-number">',
                    'link_after'  => '</span>',
                )); ?>
            </footer>
        </article>

        <?php if (comments_open() || get_comments_number()) :
            comments_template();
        endif; ?>

        <?php endwhile; ?>
    </main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
