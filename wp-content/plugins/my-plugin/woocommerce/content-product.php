<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

//echo get_permalink( $product->id );
// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) ) {
	$woocommerce_loop['loop'] = 0;
}

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) ) {
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );

}

// Ensure visibility
if ( ! $product || ! $product->is_visible() ) {
	return;
}

// Increase loop count
$woocommerce_loop['loop']++;
// Extra post classes
$classes = array();
if ( 0 === ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 === $woocommerce_loop['columns'] ) {
	$classes[] = 'first';
}

if ( 0 === $woocommerce_loop['loop'] % $woocommerce_loop['columns'] ) {
	$classes[] = 'last';
}

//print_r($woocommerce_loop['columns']);
?>
<li <?php post_class( $classes ); ?>>

	<?php
	//http://192.168.1.1/wordpress_hitesh/myplugin/2016/04/
	//echo "<pre>";print_r(the_permalink());exit;
	/**
	 * woocommerce_before_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * woocommerce_before_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * woocommerce_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * woocommerce_after_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_rating', 5);
	remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price', 10);
	add_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price', 5);
	
	do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * woocommerce_after_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );

	//add_filter( 'loop_shop_columns','get_front_side_ads_image');
if($woocommerce_loop['loop']%($woocommerce_loop['columns'])==0)
{
	global $wpdb;
        $table1 = $wpdb->base_prefix.'posts';
        $table2 = $wpdb->base_prefix.'postmeta';
        //$results = $wpdb->get_results("select ".$table2.".post_id,".$table2.".meta_key,".$table2.".meta_value from ".$table2.",".$table1." where ".$table1.".id = ".$table2.".post_id and ".$table1.".post_type = 'adsimageupload' or ".$table1.".post_type = 'my-plugin' and ".$table2.".meta_value != '' and ".$table2.".meta_key='ads_img' order by RAND() limit 0,1");

        $results = $wpdb->get_results("select ".$table2.".post_id,".$table2.".meta_key,".$table2.".meta_value from ".$table2.",".$table1." where ".$table1.".id = ".$table2.".post_id and ".$table1.".post_type = 'my-plugin' and ".$table2.".meta_value != '' and ".$table2.".meta_key='ads_img' order by RAND(),post_id desc limit 0,1");

        foreach($results as $k=>$i){
          $path = "{$i->meta_value}";

          echo "<li><img src='../myplugin/2016/04/$path' width='100%' height='10%' /></li>";
        }
}


?>

</li>
