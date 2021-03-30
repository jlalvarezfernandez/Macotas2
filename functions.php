<?php

include("cpt/mascota.php");
include("cpt/propietario.php");
include("metaboxes/mascota.php");
include("metaboxes/propietario.php");


function enqueue_styles_child_theme()
{

	$parent_style = 'unitedpets_child-style';
	$child_style  = 'unitedpets_child-style';

	wp_enqueue_style(
		$parent_style,
		get_template_directory_uri() . '/style.css'
	);

	wp_enqueue_style(
		$child_style,
		get_stylesheet_directory_uri() . '/style.css',
		array($parent_style),
		wp_get_theme()->get('Version')
	);
}
add_action('wp_enqueue_scripts', 'enqueue_styles_child_theme');


if (!isset($_SESSION["contador"])){
	$_SESSION["contador"] = 0;
}

function salvar_post()
{


	$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
	$_SESSION["contador"]++;
	return ($_SESSION["contador"])."-".substr(str_shuffle($permitted_chars), 0, 32)."<br>";
	
	//$_POST['acf']['field_6050c8e599601'] = 1;
	//echo substr(str_shuffle($permitted_chars), 0, 4);

}

add_action('save_post', 'salvar_post', 10, 3);


function up_current_url(){
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	return $actual_link;
}


