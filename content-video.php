<article<?php hybrid_post_attributes(); ?>>

	<?php echo ( $video = hybrid_media_grabber( array( 'type' => 'video', 'split_media' => true ) ) ); ?>

	<?php if ( is_singular( get_post_type() ) ) { ?>

		<header class="entry-header">
			<h1 class="entry-title"><?php single_post_title(); ?></h1>
			<?php echo apply_atomic_shortcode( 'entry_byline', '<div class="entry-byline">[post-format-link] [entry-published] [entry-comments-link] [entry-edit-link]</div>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<p class="page-links">' . '<span class="before">' . __( 'Pages:', 'socially-awkward' ) . '</span>', 'after' => '</p>' ) ); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">[entry-terms taxonomy="category" before="' . __( 'Posted in', 'socially-awkward' ) . ' "]<br />[entry-terms before="' . __( 'Tagged', 'socially-awkward' ) .' "]</div>' ); ?>
		</footer><!-- .entry-footer -->

	<?php } else { ?>

		<header class="entry-header">
			<?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' ); ?>
			<?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-byline">[post-format-link] [entry-published] [entry-comments-link] [entry-edit-link]</div>' ); ?>
		</header><!-- .entry-header -->

		<?php if ( has_excerpt() ) { ?>

			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->

		<?php } elseif ( empty( $video ) ) { ?>

			<div class="entry-content">
				<?php the_content( __( 'Read more <span class="meta-nav">&rarr;</span>', 'socially-awkward' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<p class="page-links">' . '<span class="before">' . __( 'Pages:', 'socially-awkward' ) . '</span>', 'after' => '</p>' ) ); ?>
			</div><!-- .entry-content -->

		<?php } ?>

	<?php } ?>

</article><!-- .hentry -->