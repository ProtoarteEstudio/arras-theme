<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); } ?>
<div id="layout" class="padding-content">

<h3><?php _e('Index Page', 'arras') ?></h3>
<table class="form-table">

<tr valign="top">
<th scope="row"><label for="arras-layout-featured1-count"><?php _e('Featured Post #1 Count', 'arras') ?></label></th>
<td>
<?php echo arras_form_input(array('name' => 'arras-layout-featured1-count', 'id' => 'arras-layout-featured1-count', 'size' => '5', 'value' => arras_get_option('featured1_count'), 'maxlength' => 2 )) ?>
 <?php ' ' . _e('posts', 'arras') ?>
</td>
</tr>

<tr valign="top">
<th scope="row"><label for="arras-layout-featured2-count"><?php _e('Featured Post #2 Count', 'arras') ?></label></th>
<td>
<?php echo arras_form_input(array('name' => 'arras-layout-featured2-count', 'id' => 'arras-layout-featured2-count', 'size' => '5', 'value' => arras_get_option('featured2_count'), 'maxlength' => 2 )) ?>
 <?php ' ' . _e('posts', 'arras') ?>
</td>
</tr>

<tr valign="top">
<th scope="row"><label for="arras-layout-index-count"><?php _e('News Count', 'arras') ?></label></th>
<td>
<?php echo arras_form_input(array('name' => 'arras-layout-index-count', 'id' => 'arras-layout-index-count', 'size' => '5', 'value' => arras_get_option('index_count'), 'maxlength' => 2 )) ?>
 <?php _e('posts', 'arras') ?><br />
<?php printf(__('By default, the theme retrieves %s posts, based on your WordPress settings.', 'arras'), '<strong>' . get_option('posts_per_page') . '</strong>') ?>
 <?php _e('You can override the setting here.', 'arras') ?>
</td>
</tr>

<tr valign="top">
<th scope="row"><label for="arras-layout-featured2-display"><?php _e('Featured #2 Display Type', 'arras') ?></label></th>
<td>
<?php echo arras_form_dropdown(
	'arras-layout-featured2-display',
	array( 'default' => __('Node Based', 'arras'), 'quick' => __('Quick Preview', 'arras'), 'line' => __('Per Line', 'arras'), 'traditional' => __('Traditional', 'arras') ),
	arras_get_option('featured2_display')
); ?>
</td>
</tr>

<tr valign="top">
<th scope="row"><label for="arras-layout-index-newsdisplay"><?php _e('News Display Type', 'arras') ?></label></th>
<td>
<?php echo arras_form_dropdown(
	'arras-layout-index-newsdisplay',
	array( 'default' => __('Node Based', 'arras'), 'quick' => __('Quick Preview', 'arras'), 'line' => __('Per Line', 'arras'), 'traditional' => __('Traditional', 'arras') ),
	arras_get_option('index_news_display')
); ?>
</td>
</tr>

</table>

<h3><?php _e('Archive / Search', 'arras') ?></h3>
<table class="form-table">

<tr valign="top">
<th scope="row"><label for="arras-layout-archive-newsdisplay"><?php _e('News Display Type', 'arras') ?></label></th>
<td>
<?php echo arras_form_dropdown(
	'arras-layout-archive-newsdisplay',
	array( 'default' => __('Node Based', 'arras'), 'quick' => __('Quick Preview', 'arras'), 'line' => __('Per Line', 'arras'), 'traditional' => __('Traditional', 'arras') ),
	arras_get_option('archive_news_display')
); ?>
</td>
</tr>

</table>

<h3><?php _e('Single Post', 'arras') ?></h3>
<table class="form-table">

<tr valign="top">
<th scope="row" colspan="2">
<?php echo arras_form_checkbox('arras-layout-single-author', 'show', arras_get_option('display_author'), 'id="arras-layout-single-author"') ?> 
<label for="arras-layout-single-author"><?php _e('Display author information in single post', 'arras') ?></label>
</th>
<td></td>
</tr>

<tr valign="top">
<th scope="row" colspan="2">
<?php echo arras_form_checkbox('arras-layout-single-thumb', 'show', arras_get_option('single_thumbs'), 'id="arras-layout-single-thumb"') ?> 
<label for="arras-layout-single-thumb"><?php _e('Display thumbnails in single post', 'arras') ?></label>
</th>
<td></td>
</tr>

<tr valign="top">
<th scope="row"><label for="arras-layout-metapos"><?php _e('Position of Custom Fields', 'arras') ?></label></th>
<td>
<?php echo arras_form_radio('arras-layout-metapos', 'top', arras_get_option('single_meta_pos') == 'top') ?> <?php _e('Before the Post Content', 'arras') ?><br />
<?php echo arras_form_radio('arras-layout-metapos', 'bottom', arras_get_option('single_meta_pos') == 'bottom') ?> <?php _e('After the Post Content', 'arras') ?><br />
</td>
</tr>

<tr valign="top">
<th scope="row"><label for="arras-single-custom-fields">Single Post Custom Fields</label></th>
<td>
<?php echo arras_form_textarea(array('name' => 'arras-single-custom-fields', 'id' => 'arras-single-custom-fields', 'class' => 'code', 'rows' => '2', 'value' => stripslashes(arras_get_option('single_custom_fields')) )) ?><br />
</td>
</tr>

</table>

<p class="submit">
<input class="button-primary" type="submit" name="save" value="<?php _e('Save Changes', 'arras') ?>" />
<input type="hidden" name="action" value="save" />
</p>

</div><!-- #layout -->
