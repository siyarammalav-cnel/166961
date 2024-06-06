<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * @package Auto Parts Garage
 */
?>

<h2 class="entry-title"><?php esc_html_e( 'Nothing Found', 'auto-parts-garage' ); ?></h2>


<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<p><?php printf( esc_html__( 'Ready to publish your first post? Get started here.', 'auto-parts-garage' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
	<?php elseif ( is_search() ) : ?>
	<p><?php echo esc_html(get_theme_mod('auto_parts_garage_no_results_page_content',__('Sorry, but nothing matched your search terms. Please try again with some different keywords.','auto-parts-garage')));?></p><br />
		<?php get_search_form(); ?>
	<?php else : ?>
	<p><?php esc_html_e( 'Dont worry&hellip it happens to the best of us.', 'auto-parts-garage' ); ?></p><br />
	<div class="error-btn">
		<a href="<?php echo esc_url(home_url() ); ?>"><?php esc_html_e( 'Back to Home Page', 'auto-parts-garage' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Back to Home Page','auto-parts-garage' );?></span></a>
	</div>
<?php endif; ?> 