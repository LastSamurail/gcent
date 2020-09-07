<div class="news-block col-lg-4 col-md-6 col-sm-12">
	<div class="inner-box">
		<div class="image">
			<a href="<?php the_permalink() ?>">
				<img src="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : TG_IMG . 'placeholder.jpg' ?>" alt="<?php the_title() ?>" />
			</a>
		</div>
		<div class="lower-content">
			<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
			<div class="text"><?php echo wp_trim_words(get_the_content(), 15, ' ...') ?></div>
			<div class="clearfix">
				<div class="pull-left">
					<div class="time"><span class="icon far fa-calendar-check"></span>&nbsp;&nbsp;&nbsp;<?php the_time('d-m-Y'); ?></div>
				</div>
				<div class="pull-right">
					<div class="author"><span class="icon fas fa-user"></span>&nbsp;&nbsp;&nbsp;<?php the_author() ?></div>
				</div>
			</div>
		</div>
	</div>
</div>