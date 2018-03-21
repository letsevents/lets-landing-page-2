<?php

/**
 *  Plugin Name: Lets - Landing Pages - Novo Layout
 *  Description: Landing page criada pela Mamangava de acordo com layout definido pela PLAU. Data: março/2018.
 *  Version: 2.0
 *  Author:  Mamangava
 *  Author URI: http://mamangava.com
 * 	Author Email: rodrigobmuniz@gmail.com
 *  Licence: GPL2
 */

class PageTemplaterMmgv20 {

	/**
	 * A reference to an instance of this class.
	 */
	private static $instance;

	/**
	 * The array of templates that this plugin tracks.
	 */
	protected $templates;

	/**
	 * Returns an instance of this class.
	 */
	public static function get_instance() {

		if ( null == self::$instance ) {
			self::$instance = new PageTemplaterMmgv20();
		}

		return self::$instance;

	}

	/**
	 * Initializes the plugin by setting filters and administration functions.
	 */
	private function __construct() {

		$this->templates = array();


		// Add a filter to the attributes metabox to inject template into the cache.
		if ( version_compare( floatval( get_bloginfo( 'version' ) ), '4.7', '<' ) ) {

			// 4.6 and older
			add_filter(
				'page_attributes_dropdown_pages_args',
				array( $this, 'register_project_templates' )
			);

		} else {

			// Add a filter to the wp 4.7 version attributes metabox
			add_filter(
				'theme_page_templates', array( $this, 'add_new_template' )
			);

		}

		// Add a filter to the save post to inject out template into the page cache
		add_filter(
			'wp_insert_post_data',
			array( $this, 'register_project_templates' )
		);


		// Add a filter to the template include to determine if the page has our
		// template assigned and return it's path
		add_filter(
			'template_include',
			array( $this, 'view_project_template')
		);


		// Add your templates to this array.
		$this->templates = array(
			'index_new.php' => 'Landing page - 2.0',
		);

	}

	/**
	 * Adds our template to the page dropdown for v4.7+
	 *
	 */
	public function add_new_template( $posts_templates ) {
		$posts_templates = array_merge( $posts_templates, $this->templates );
		return $posts_templates;
	}

	/**
	 * Adds our template to the pages cache in order to trick WordPress
	 * into thinking the template file exists where it doens't really exist.
	 */
	public function register_project_templates( $atts ) {

		// Create the key used for the themes cache
		$cache_key = 'page_templates-' . md5( get_theme_root() . '/' . get_stylesheet() );

		// Retrieve the cache list.
		// If it doesn't exist, or it's empty prepare an array
		$templates = wp_get_theme()->get_page_templates();
		if ( empty( $templates ) ) {
			$templates = array();
		}

		// New cache, therefore remove the old one
		wp_cache_delete( $cache_key , 'themes');

		// Now add our template to the list of templates by merging our templates
		// with the existing templates array from the cache.
		$templates = array_merge( $templates, $this->templates );

		// Add the modified cache to allow WordPress to pick it up for listing
		// available templates
		wp_cache_add( $cache_key, $templates, 'themes', 1800 );

		return $atts;

	}

	/**
	 * Checks if the template is assigned to the page
	 */
	public function view_project_template( $template ) {

		// Get global post
		global $post;

		// Return template if post is empty
		if ( ! $post ) {
			return $template;
		}

		// Return default template if we don't have a custom one defined
		if ( ! isset( $this->templates[get_post_meta(
			$post->ID, '_wp_page_template', true
		)] ) ) {
			return $template;
		}

		$file = plugin_dir_path( __FILE__ ). get_post_meta(
			$post->ID, '_wp_page_template', true
		);

		// Just to be safe, we check if the file exist first
		if ( file_exists( $file ) ) {
			return $file;
		} else {
			echo $file;
		}

		// Return template
		return $template;

	}

}
add_action( 'plugins_loaded', array( 'PageTemplaterMmgv20', 'get_instance' ) );

//add CPT Depoimento

function myCustomPosts(){


	//DEPOIMENTOS
	$nomeSing = "Depoimento";
	$nomePlural = "Depoimentos";

	$labels = array(
			'name'               => $nomePlural,
			'singular_name'      => $nomeSing,
			'menu_name'          => $nomePlural,
			'name_admin_bar'     => $nomePlural,
			'add_new'            => 'Adicionar novo',
			'add_new_item'       => 'Adicionar nov '.$nomePlural,
			'new_item'           => 'Novo '.$nomeSing,
			'edit_item'          => 'Editar '.$nomeSing,
			'view_item'          => 'Ver '.$nomeSing,
			'all_items'          => 'Todos '.$nomePlural,
			'search_items'       => 'Buscar '.$nomeSing,
			'parent_item_colon'  => $nomePlural.' relacionados:',
			'not_found'          => 'Nenhum '.$nomeSing.' encontrado.',
			'not_found_in_trash' => 'Nenhum '.$nomeSing.' na lixeira.',
	);

	$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'menu_icon'          => 'dashicons-format-chat',
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'depoimento' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' ),
			'taxonomies'		=> array('category')
	);

	register_post_type('depoimento', $args);

}

add_action('init', 'myCustomPosts');



function my_new_rewrite_flush() {
	myCustomPosts();
	flush_rewrite_rules();
}

register_activation_hook( __FILE__, 'my_new_rewrite_flush' );



