<?php
include_once('options_page.php');

add_theme_support( 'woocommerce' );

register_nav_menus( array(
	'header_menu' => 'Главное меню'
) );

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 185, 185 ); 

add_image_size("allTh", 500, 500, true);

add_post_type_support( 'page', 'excerpt' );

/*-Добавляем редактор-*/
remove_filter( 'pre_term_description', 'wp_filter_kses' );
remove_filter( 'term_description', 'wp_kses_data' );

function mayak_category_description($container = ''){
	$content = is_object($container) && isset($container->description) ? html_entity_decode($container->description) : '';
	$editor_id = 'tag_description';
	$settings = 'description';		
	?>
    <tr class="form-field">
	<th scope="row" valign="top"><label for="description">Описание</label></th>
	<td><?php wp_editor($content, $editor_id, array(
				'textarea_name' => $settings,
				'editor_css' => '<style>.html-active .wp-editor-area{border:0;}</style>',
	)); ?><br />
	<span class="description">Описание по умолчанию не отображается, однако некоторые темы могут его показывать.</span></td>
    </tr>
    <?php	
}
add_filter('edit_category_form_fields', 'mayak_category_description');
add_filter('edit_tag_form_fields', 'mayak_category_description');


function mayak_remove_category_description(){
    global $mk_description;
    if ( $mk_description->id == 'edit-category' or 'edit-tag' ){
    ?>
        <script type="text/javascript">
        jQuery(function($) {
            $('textarea#description').closest('tr.form-field').remove();
        });
        </script>
    <?php
    }
}
add_action('admin_head', 'mayak_remove_category_description');

function download_short($attrs)
{
    $params=shortcode_atts( array(
                               'type' => 'pdf',
                               'fname' => '',
							   'title' => ''),
        $attrs);
	
	$rezStr = '<i class="fa fa-file-pdf-o" aria-hidden="true"></i>';	
	if ($params['type'] === "doc") {
		$rezStr = '<i class="fa fa-file-text" aria-hidden="true"></i>';	
	}
	
	$rezStr = "<a class = 'download_elem' href = '".get_bloginfo("template_url")."/download/".$params['fname']."'>".$rezStr." ".$params['title']."</a><br />";
	
    return $rezStr;
}
add_shortcode('download','download_short');

?>