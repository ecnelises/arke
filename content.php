<?php
/**
 * Template part for displaying posts
 *
 * @link       https://codex.wordpress.org/Template_Hierarchy
 *
 * @package    Arke
 * @copyright  Copyright (c) 2018, Danny Cooper
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

?>

<article <?php post_class(); ?>>

	<?php arke_thumbnail( 'arke-blog' ); ?>

	<header class="entry-header">

		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>

	</header><!-- .entry-header -->
	
	<div class="post-date">
		<?php
		echo wp_date( get_option( 'date_format' ), get_post_timestamp() );
		?>
	</div>

	<div class="entry-content">
		<?php
		if ( is_singular() ) :
			the_content( esc_html__( 'Continue reading &rarr;', 'arke' ) );
		else:
			the_excerpt( esc_html__( 'Continue reading &rarr;', 'arke' ) );
			echo sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
				get_permalink( get_the_ID() ),
				__( '阅读全文 &rarr;', 'textdomain' )
        	);
		endif;
		

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'arke' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
