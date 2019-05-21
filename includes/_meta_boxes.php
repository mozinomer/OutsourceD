<?php

/**
 * carousel 2 START
 */

function gallery2_metabox_enqueue($hook) {
	if ( 'post.php' == $hook || 'post-new.php' == $hook ) {
		wp_enqueue_script('gallery2-metabox', get_template_directory_uri() . '/includes/mb2.js', array('jquery', 'jquery-ui-sortable'));
		wp_enqueue_style('gallery-metabox', get_template_directory_uri() . '/includes/mb.css');
	}
}

/**
 * carousel 1 start
 */
add_action('admin_enqueue_scripts', 'gallery2_metabox_enqueue');
function add_gallery2_metabox($post_type) {
	$types = array('post', 'works');
	if (in_array($post_type, $types)) {
		add_meta_box(
			'gallery2-metabox',
			'Carousel 2',
			'gallery2_meta_callback',
			$post_type,
			'normal',
			'high'
		);
	}
}
add_action('add_meta_boxes', 'add_gallery2_metabox');
function gallery2_meta_callback($post) {
	wp_nonce_field( basename(__FILE__), 'gallery2_meta_nonce' );
	$ids = get_post_meta($post->ID, 'vdw_gallery2_id', true);
	?>
	<table class="form-table">
		<tr><td>
				<a class="gallery2-add button" href="#" data-uploader-title="Add image(s) to gallery" data-uploader-button-text="Add image(s)">Add image(s)</a>

				<ul id="gallery2-metabox-list" class="gallery-metabox-list">
					<?php if ($ids) : foreach ($ids as $key => $value) : $image = wp_get_attachment_image_src($value); ?>

						<li style="float: left;width: 150px;">
							<input type="hidden" name="vdw_gallery2_id[<?php echo $key; ?>]" value="<?php echo $value; ?>">
							<img class="image-preview" src="<?php echo $image[0]; ?>">
							<a class="change-image button button-small" href="#" data-uploader-title="Change image" data-uploader-button-text="Change image">Change image</a><br>
							<small><a class="remove-image" href="#">Remove image</a></small>
						</li>

					<?php endforeach; endif; ?>
				</ul>

			</td></tr>
	</table>
<?php }
function gallery2_meta_save($post_id) {
	if (!isset($_POST['gallery2_meta_nonce']) || !wp_verify_nonce($_POST['gallery2_meta_nonce'], basename(__FILE__))) return;
	if (!current_user_can('edit_post', $post_id)) return;
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
	if(isset($_POST['vdw_gallery2_id'])) {
		update_post_meta($post_id, 'vdw_gallery2_id', $_POST['vdw_gallery2_id']);
	} else {
		delete_post_meta($post_id, 'vdw_gallery2_id');
	}
}
add_action('save_post', 'gallery2_meta_save');

/**
 * carousel 2 end
 */

/****************************************************************************************************************************************************
*****************************************************************************************************************************************************
******************************************************************RANGERS****************************************************************************
*****************************************************************************************************************************************************
*****************************************************************************************************************************************************
******************************************************************BORDER*****************************************************************************
*****************************************************************************************************************************************************
*****************************************************************************************************************************************************
******************************************************************RANGERS****************************************************************************
*****************************************************************************************************************************************************
*****************************************************************************************************************************************************
*****************************************************************************************************************************************************/


/**
 * carousel 1 start
 */

function gallery_metabox_enqueue($hook) {
	if ( 'post.php' == $hook || 'post-new.php' == $hook ) {
		wp_enqueue_script('gallery-metabox', get_template_directory_uri() . '/includes/mb.js', array('jquery', 'jquery-ui-sortable'));
		wp_enqueue_style('gallery-metabox', get_template_directory_uri() . '/includes/mb.css');
	}
}
add_action('admin_enqueue_scripts', 'gallery_metabox_enqueue');

function add_gallery_metabox($post_type) {
	$types = array('post', 'works');
	if (in_array($post_type, $types)) {
		add_meta_box(
			'gallery-metabox',
			'Carousel 1',
			'gallery_meta_callback',
			$post_type,
			'normal',
			'high'
		);
	}
}
add_action('add_meta_boxes', 'add_gallery_metabox');
function gallery_meta_callback($post) {
	wp_nonce_field( basename(__FILE__), 'gallery_meta_nonce' );
	$ids = get_post_meta($post->ID, 'vdw_gallery_id', true);
	?>
	<table class="form-table">
		<tr><td>
				<a class="gallery-add button" href="#" data-uploader-title="Add image(s) to gallery" data-uploader-button-text="Add image(s)">Add image(s)</a>

				<ul id="gallery-metabox-list">
					<?php if ($ids) : foreach ($ids as $key => $value) : $image = wp_get_attachment_image_src($value); ?>

						<li>
							<input type="hidden" name="vdw_gallery_id[<?php echo $key; ?>]" value="<?php echo $value; ?>">
							<img class="image-preview" src="<?php echo $image[0]; ?>">
							<a class="change-image button button-small" href="#" data-uploader-title="Change image" data-uploader-button-text="Change image">Change image</a><br>
							<small><a class="remove-image" href="#">Remove image</a></small>
						</li>

					<?php endforeach; endif; ?>
				</ul>

			</td></tr>
	</table>
<?php }
function gallery_meta_save($post_id) {
	if (!isset($_POST['gallery_meta_nonce']) || !wp_verify_nonce($_POST['gallery_meta_nonce'], basename(__FILE__))) return;
	if (!current_user_can('edit_post', $post_id)) return;
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
	if(isset($_POST['vdw_gallery_id'])) {
		update_post_meta($post_id, 'vdw_gallery_id', $_POST['vdw_gallery_id']);
	} else {
		delete_post_meta($post_id, 'vdw_gallery_id');
	}
}
add_action('save_post', 'gallery_meta_save');

/**
 * carousel 1 end
 */
