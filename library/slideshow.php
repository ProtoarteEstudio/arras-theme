<?php 

function arras_add_slideshow() {
	if ( ( $featured1_cat = arras_get_option('slideshow_cat') ) !== '' && $featured1_cat != '-1' ) {
	?>
		<!-- Featured Slideshow -->
		<div class="featured clearfix">
		<?php
		if ($featured1_cat == '-5') {
			if (count($stickies) > 0) 
				$query = array('post__in' => $stickies, 'showposts' => arras_get_option('slideshow_count') );
		} elseif ($featured1_cat == '0') {
			$query = 'showposts=' . arras_get_option('slideshow_count');
		} else {
			$query = 'showposts=' . arras_get_option('slideshow_count') . '&cat=' . $featured1_cat;
		}
		
		$q = new WP_Query( apply_filters('arras_slideshow_query', $query) );
		?> 
			<div id="controls">
				<a href="" class="prev"><?php _e('Prev', 'arras') ?></a>
				<a href="" class="next"><?php _e('Next', 'arras') ?></a>
			</div>
			<div id="featured-slideshow">
				<?php $count = 0; ?>
			<?php
			if (function_exists('dsq_loop_end')) remove_action('loop_end', 'dsq_loop_end'); // remove DISQUS action hook ?>
				<?php if ($q->have_posts()) : while ($q->have_posts()) : $q->the_post(); ?>
				<div <?php if ($count != 0) echo 'style="display: none"'; ?>>

					<a class="featured-article" href="<?php the_permalink(); ?>" rel="bookmark">
					<?php echo arras_get_thumbnail('featured-slideshow-thumb'); ?>
					<span class="featured-entry">
						<span class="entry-title"><?php the_title(); ?></span>
						<span class="entry-summary"><?php echo arras_strip_content(get_the_excerpt(), 20); ?></span>
						<span class="progress"></span>
					</span>
					</a>
				</div>
				<?php $count++; endwhile; endif; ?>
			<?php if (function_exists('dsq_loop_end')) add_action('loop_end', 'dsq_loop_end'); // add it back for other queries to use ?>
			</div>
		</div>
	<?php
	}
}
add_action('arras_above_index_featured_post', 'arras_add_slideshow');

function arras_add_slideshow_js() {
?>
<script type="text/javascript">
jQuery(document).ready(function($) {

<?php if (is_home() || is_front_page()) : ?>
$('#featured-slideshow').cycle({
	fx: 'fade',
	speed: 250,
	next: '#controls .next',
	prev: '#controls .prev',
	timeout: 6000
});
<?php endif ?>
	
});
</script>
<?php
}
add_action('arras_footer', 'arras_add_slideshow_js');

/* End of file slideshow.php */
/* Location: ./library/slideshow.php */