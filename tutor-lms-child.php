<?php
 
/**
 
 * @tutor
 
 */
 
/*
 
Plugin Name: Tutor Lms Child
 
Plugin URI: https://tjthouhid.me/
 
Description: This plugin is a customized Plugin for ovverride tutor lms functionality
 
Version: 1.0.1
 
Author: Tj Thouhid
 
Author URI: https://www.linkedin.com/in/tjthouhid/
 
License: GPLv2 or later
 
Text Domain: tutor-lms-child
 
*/

add_shortcode('tutor_dashboard_2', 'tutor_dashboard_2');

/**
     * @return mixed
     *
     * Tutor Dashboard for students
     *
     * @since v.1.0.0
     */
function tutor_dashboard_2() {
        global $wp_query;

        ob_start();
         if (is_user_logged_in()) {
        //     /**
        //      * When Using Short Code to generate page inner pages Doesnot Work
        //      */
      
            //if (!isset($wp_query->query_vars['tutor_dashboard_page'])) {
                tutor_load_template('dashboard', array('is_shortcode' => true));
            //}
        } else {
             tutor_load_template('global.login');
        }
         return apply_filters('tutor_dashboard/index', ob_get_clean());
    }





/* Adding Custom Code For Multilanguage page */
add_action('wp_head', 'your_function_name');
function your_function_name(){
//$page_id = get_queried_object_id();
global $post;
$post_slug = $post->post_name;
if($post_slug == "course"){
    wp_enqueue_style( 'tutor-frontend-dashboard-css', tutor()->url . 'assets/css/tutor-frontend-dashboard.min.css', tutor()->version );
    ?>
<style>
.tutor-wrap h4 {
    color: #4b5981 !important;
}
</style>
<?php
}
};