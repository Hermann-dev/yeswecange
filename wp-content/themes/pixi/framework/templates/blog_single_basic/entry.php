 <?php global $pixi_options; 
$tb_post_layout = isset($pixi_options['tb_post_layout']) ? $pixi_options['tb_post_layout'] : '1col'; ?>
<div class="single-header basic">
<?php if ( $tb_post_layout == '1col' ) { ?><div class="container wrapper"> <?php } ?>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content mo-blog">
	<div class="title-wrap">
			<?php if (isset($pixi_options['post-meta-single']) && in_array('cat', $pixi_options['post-meta-single'])) {  ?>
			   <div class="cat-name bg-gradient hover_shine"><?php the_terms( get_the_ID(), 'category' ); ?></div>
			<?php } ?>
			 <h3 class="post-title"><?php the_title(); ?></h3> 
			 <ul class="meta-post">
				<?php if (isset($pixi_options['post-meta-single']) && in_array('author', $pixi_options['post-meta-single'])) {  ?>
					 <li><i class="fa fa-user-o"></i><?php echo esc_html__('By ', 'pixi').get_the_author(); ?></li>
				<?php } ?>
				<?php if (isset($pixi_options['post-meta-single']) && in_array('date', $pixi_options['post-meta-single'])) {  ?>
					 <li><i class="fa fa-clock-o"></i><?php echo get_the_date(); ?></li>
				<?php } ?>
				<?php if (isset($pixi_options['post-meta-single']) && in_array('comment', $pixi_options['post-meta-single'])) {  ?>
					 <li><i class="fa fa-comments-o"></i><a href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' ); echo esc_html__(' Comment', 'pixi'); ?></a></li>  
				<?php } ?>
				<?php if (isset($pixi_options['post-meta-single']) && function_exists('pixi_set_post_views') && in_array('view', $pixi_options['post-meta-single'])) {  ?>
				   <li><i class="fa fa-bookmark-o"></i> <?php echo pixi_get_post_views(get_the_ID()) . esc_html__(' Views', 'pixi'); ?></li>
				<?php } ?>
			 </ul> 
	   </div>
    </div>
    <?php if ( $tb_post_layout == '1col' ) { ?></div><?php } ?>
</div>