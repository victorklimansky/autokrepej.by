<?php
add_action('widgets_init', create_function('', 'return register_widget("oxygen_triple_box");'));

class oxygen_triple_box extends WP_Widget {
	function oxygen_triple_box() {
		 parent::WP_Widget(false, $name = 'Oxygen Triple Box');
	}

	function form($instance) {
		 $title = esc_attr($instance['title']);
		 $count = esc_attr($instance['count']);
        ?>
            <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>

			<p><label for="<?php echo $this->get_field_id('count'); ?>"><?php _e('Post count:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>" type="text" value="<?php echo $count; ?>" /></label></p>

        <?php
	}

	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['count'] = strip_tags($new_instance['count']);
		return $instance;
	}

	function widget($args, $instance) {
		extract( $args );
        $title = apply_filters('widget_title', $instance['title']);
		$count = $instance['count'];
		$widget_id = $args['widget_id'];

        ?>
			<!-- BEGIN .block-1 -->
			<div class="block-1" id="<?php echo $widget_id;?>">

				<!-- BEGIN .tabs-1 -->
				<div class="tabs-1">
					<table>
						<tr>
							<td><a href="#" class="tab-1 oxygen_triple_btn" id="oxygen_triple_popular_btn_<?php echo $widget_id;?>"><i>&nbsp;</i><b><span><?php printf(__('Popular','oxygen')); ?></span></b><u>&nbsp;</u></a></td>
							<td class="spacer"></td>
							<td><a href="#" class="tab-1 tab-1-disabled oxygen_triple_btn" id="oxygen_triple_recent_btn_<?php echo $widget_id;?>"><i>&nbsp;</i><b><span><?php printf(__('Recent','oxygen')); ?></span></b><u>&nbsp;</u></a></td>
							<td class="spacer"></td>
							<td><a href="#" class="tab-1 tab-1-disabled oxygen_triple_btn" id="oxygen_triple_comments_btn_<?php echo $widget_id;?>"><i>&nbsp;</i><b><span><?php printf(__('Comments','oxygen')); ?></span></b><u>&nbsp;</u></a></td>
						</tr>
					</table>
				<!-- END .tabs-1 -->
				</div>

				<div class="block-1-content">

					<!-- BEGIN .latest-activity -->
					<div class="latest-activity">

						<div id="oxygen_triple_popular_<?php echo $widget_id;?>">
							<?php
								$args=array(
								   'post_type' => 'post',
								   'posts_per_page' => $count,
								   'orderby' => 'comment_count'
								);
								$the_query = new WP_Query($args);
							?>
							<?php $counter=1; ?>
							<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<!-- BEGIN .latest-activity-item -->
							<div class="latest-activity-item <?php if($counter == $count) {echo "last";} ?>">
								<table>
									<tr>
										<td class="image">
											<?php $image = get_post_thumb($the_query->post->ID,50,50); ?>
											<a href="<?php the_permalink();?>"><img src="<?php if($image['src']) {echo $image['src'];} ?>" alt="<?php the_title();?>" /></a>
										</td>
										<td class="text">
											<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
											<h4><?php echo the_time("j.n.Y"); ?><span>|</span><b><?php  comments_popup_link(__('No comments' , 'oxygen'),__('One comment' , 'oxygen'),__('% comments' , 'oxygen'));?></b></h4>
										</td>
									</tr>
								</table>
							<!-- END .latest-activity-item -->
							</div>
							<?php $counter++; ?>
							<?php endwhile; else: ?>
							<p><?php printf(__('No posts where found', 'oxygen')); ?></p>
							<?php endif; ?>
						</div>
						<div id="oxygen_triple_recent_<?php echo $widget_id;?>" style="display: none;">
							<?php
								$args=array(
								   'posts_per_page'=> $count
								);
								$the_query = new WP_Query($args);
							?>
							<?php $counter=1; ?>
							<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<!-- BEGIN .latest-activity-item -->
							<div class="latest-activity-item <?php if($counter == $count) {echo "last";} ?>">
								<table>
									<tr>
										<td class="image">
											<?php $image = get_post_thumb($the_query->post->ID,50,50); ?>
											<a href="<?php the_permalink();?>"><img src="<?php if($image['src']) {echo $image['src'];} ?>" alt="<?php the_title();?>" /></a>
										</td>
										<td class="text">
											<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
											<h4><?php echo the_time("j.n.Y"); ?><span>|</span><b><?php  comments_popup_link(__('No comments' , 'oxygen'),__('One comment' , 'oxygen'),__('% comments' , 'oxygen'));?></b></h4>
										</td>
									</tr>
								</table>
							<!-- END .latest-activity-item -->
							</div>
							<?php $counter++; ?>
							<?php endwhile; else: ?>
							<p><?php printf(__('No posts where found', 'oxygen')); ?></p>
							<?php endif; ?>
						</div>
						<div id="oxygen_triple_comments_<?php echo $widget_id;?>" style="display: none;">
							<?php
								$comments = get_comments( array( 'number' => $count, 'status' => 'approve' ) );
								foreach($comments as $c) {
									$ids[] = $c->comment_post_ID ;
								}
								$args=array(
								   'post__in' => $ids
								);
								$the_query = new WP_Query($args);
							?>
							<?php $counter=1; ?>
							<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<!-- BEGIN .latest-activity-item -->
							<div class="latest-activity-item <?php if($counter == $count) {echo "last";} ?>">
								<table>
									<tr>
										<td class="image">
											<?php $image = get_post_thumb($the_query->post->ID,50,50); ?>
											<a href="<?php the_permalink();?>"><img src="<?php if($image['src']) {echo $image['src'];} ?>" alt="<?php the_title();?>" /></a>
										</td>
										<td class="text">
											<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
											<h4><?php echo the_time("j.n.Y"); ?><span>|</span><b><?php  comments_popup_link(__('No comments' , 'oxygen'),__('One comment' , 'oxygen'),__('% comments' , 'oxygen'));?></b></h4>
										</td>
									</tr>
								</table>
							<!-- END .latest-activity-item -->
							</div>
							<?php $counter++; ?>
							<?php endwhile; else: ?>
							<p><?php printf(__('No posts where found', 'oxygen')); ?></p>
							<?php endif; ?>
						</div>
					<!-- END .latest-activity -->
					</div>

				</div>

			<!-- END .block-1 -->
			</div>
        <?php
	}
}
?>