<?php
/**
 * The template partial for displaying the single blog post content
 *
 *
 * @package CustomTheme
 * @since CustomTheme 1.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1><?php the_title(); ?></h1>
    <p><?php the_date(); ?></p>
    <?php the_content(); ?>
    
    <?php
        wp_link_pages( array(
            'before'      => '<div class="page-links" class="page-links-title">' . __( 'Pages: ', 'customtheme' ) . '</span>',
            'after'       => '</div>',
            'link_before' => '<span>',
            'link_after'  => '</span>',
            'pagelink'    => '<span class="screen-reader-text">' . __( 'Page ', 'customtheme' ) . '</span>%',
            'separator'   => '<span class="screen-reader-text">, </span>'
        ) );
    ?>
</div>