<?php
/**
 * The template for displaying search forms in Twenty Eleven
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	<form method="get" id="search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		
		<input type="text" class="field" name="s" id="search-text" placeholder="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
		<input type="submit" class="submit" name="submit" id="search-submit" value="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
	</form>
