<?php
/*
Plugin Name: PdfGenerator Widget
Description: A widget to generate a PDF file with PdfGenerators info.
 */

function pdf_generator_load_widget() {
    register_widget( 'PdfGeneratorWidget' );
}
add_action( 'widgets_init', 'pdf_generator_load_widget' );

class PdfGeneratorWidget extends WP_Widget
{
	public function __construct()
	{
		parent::__construct(
		// Base ID of your widget
		'pdf_generator_pdf_widget', 
		 
		// Widget name will appear in UI
		__('PDF Generator', 'pdf_generator_pdf_widget_domain'), 
		 
		// Widget description
		array( 'description' => __( 'A widget to generate a PDF file with PdfGenerators info.', 'wpb_widget_domain' ), ) 
		);
	}

	public function widget( $args, $instance ) 
	{
		$title = apply_filters( 'widget_title', $instance['title'] );
		 
		include(__DIR__.'/pdf-generator-form.html');
	}
	     
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) 
	{
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
}

add_filter( 'page_template', 'wpa3396_page_template' );
function wpa3396_page_template( $page_template )
{
    if ( is_page( 'my-custom-page-slug' ) ) {
        $page_template = dirname( __FILE__ ) . '/pdf-generator-template.php';
    }
    return $page_template;
}
