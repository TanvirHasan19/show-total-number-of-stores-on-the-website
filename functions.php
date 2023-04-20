function get_total_stores() {
   $store_count = dokan()->vendor->get_vendors(array('number' => -1, 'fields' => 'ID'));
   return count($store_count);
}
add_shortcode( 'total_stores', 'get_total_stores' );

/**
Need to add the codes inside the child theme functions.php file and then use [total_stores] shortcode to any page you want to show the total number
of stores on the website.
*/
