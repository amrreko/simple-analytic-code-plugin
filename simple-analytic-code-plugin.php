<?php
/**
 * @package simple_analytics
 * @version 1.0
 */
/*
Plugin Name: simple analytic code plugin
Plugin URI: http://wordpress.org/plugins/simple_analytics_code_plugin/
Description: This is not just a plugin, it's simple analytic code plugin.
Author: Amr Mahmoud
Version: 1.0
Author URI: http://azstart.com/
*/
function simple_analytics_ua($UA) {
$analytic = "<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '".$UA."', 'auto');
  ga('send', 'pageview');

</script>";
	return $analytic;
}
function simple_analytics_code_plugin() {
echo simple_analytics_ua('UA-21704902-1');//UA-xxxxxxxx-x
}

//add_action('wp_head','simple_analytics_code_plugin'); //use one line - do code in header
add_action( 'wp_footer', 'simple_analytics_code_plugin' );  //use one line - do code in footer
?>
