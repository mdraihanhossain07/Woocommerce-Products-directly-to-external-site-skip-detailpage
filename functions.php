add_action( 'template_redirect', 'redirect_external_products' );
function redirect_external_products() {
    global $post;
    if ( is_singular( 'product' ) && ! empty( $post ) && ( $product = wc_get_product( $post ) ) && $product->is_type( 'external' ) ) {
        wp_redirect( $product->get_product_url() ); 
        exit;
    }
}
