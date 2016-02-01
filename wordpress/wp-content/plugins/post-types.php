<?php 
/*Plugin Name: Cliente Post Type
Description: Este plugin server para criar novos clientes
Version: 1.0
License: GPLv2
*/

// register custom post type to work with
function wpmudev_create_post_type() {
	// set up labels
	$labels = array(
 		'name' => 'Clientes',
    	'singular_name' => 'Cliente',
    	'add_new' => 'Adicione um novo cliente',
    	'add_new_item' => 'Adicione um novo cliente',
    	'edit_item' => 'Editar cliente',
    	'new_item' => 'Novo cliente',
    	'all_items' => 'Todos clientes',
    	'view_item' => 'Visualizar cliente',
    	'search_items' => 'Procurar cliente',
    	'not_found' =>  'Nenhum cliente encontrado',
    	'not_found_in_trash' => 'Nenhum cliente encontrado na lixeira', 
    	'parent_item_colon' => '',
    	'menu_name' => 'Clientes',
    );
    //register post type
	register_post_type( 'cliente', array(
		'labels' => $labels,
		'has_archive' => true,
 		'public' => true,
		'supports' => array( 'title', 'custom-fields'),	
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'clientes' ),
		)
	);
}
add_action( 'init', 'wpmudev_create_post_type' );
?>