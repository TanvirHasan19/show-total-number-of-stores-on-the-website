function get_total_stores() {
   $store_count = dokan()->vendor->get_vendors(array('number' => -1, 'fields' => 'ID'));
   return count($store_count);
}
add_shortcode( 'total_stores', 'get_total_stores' );
