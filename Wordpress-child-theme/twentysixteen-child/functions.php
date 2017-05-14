<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css'
    );
}

function js_loader() {

    wp_enqueue_script('validate', get_stylesheet_directory_uri().'/js/jquery.validate.min.js', array('jquery'),'1.0', true );

    wp_enqueue_script('myScripts', get_stylesheet_directory_uri().'/js/myScripts.js', array('jquery'),'1.0', true );

    wp_localize_script('myScripts', 'URL', array( 'siteurl' => site_url(), 'ajaxurl' => admin_url( 'admin-ajax.php' )));

}
add_action('wp_enqueue_scripts', 'js_loader');

function get_page_content($id){
    $post_id = get_post($id);
    $content = $post_id->post_content;
    $content = apply_filters('the_content', $content);
    return $content;
}
remove_filter( 'the_content', 'wpautop' );


add_action('wp_ajax_download_book_ajax', 'download_book');
add_action( 'wp_ajax_nopriv_download_book_ajax', 'download_book' );

function download_book() {

	$output = '';

    $email = $_REQUEST['email'];
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $companyname = $_REQUEST['companyname'];
    $phone = $_REQUEST['phone'];


    if ($email && $firstname && $lastname && $companyname && $phone) {
        $output .= '<div class="firstname">First name: '.$firstname.'</div>';
        $output .= '<div class="lastname">Last name: '.$lastname.'</div>';
        $output .= '<div class="companyname">Company: '.$companyname.'</div>';
        $output .= '<div class="phone">Phone: '.$phone.'</div>';
        $output .= '<div class="email">Email: '.$email.'</div>';
        $output .= '<div class="download_link"><a href="http://insp-test.eu.pn/wp-content/uploads/2016/06/Insperity-hr-outsourcing-a-step-by-step-guide-to-professional-employer-organizations.pdf" target="_blank">Click here to download e-book</a></div>';
	}
	else{
		$output .= 'not_found_error';
	}

	echo $output;
	die();
}
