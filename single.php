<?php get_header(); ?>

	<header id="header">
		<div class="inner">

			<div class="header-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></div>
			
		</div><!-- /inner -->
	</header><!-- /header -->

	<div id="single-content">
		<div class="inner">
		
			<article <?php post_class( array( 'entry' ) ); ?>class="entry">
			
				<div class="entry-header">

                    <?php
                    // カテゴリー１つ目の名前を表示
                    $category = get_the_category();
                    if ( $category[0] ) : ?>

                        <div class="entry-label">
                            <?php echo $category[0]->cat_name; ?>
                        </div>

                    <?php endif; ?>
                        
					<h1 class="entry-title"><?php the_title(); ?></h1>
					
					<div class="entry-img">
                        <?php
                        if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'large' );
                        }
                        ?>
                    </div>

				</div><!-- /entry-header -->
				
				<div class="entry-body">

                    <?php
                    $this_content= wpautop($post->post_content);
                    echo $this_content;
                    ?>
					
				</div><!-- /entry-body -->

			</article><!-- /entry -->

			<div class="top-btn"><a href="<?php echo esc_url(home_url('/')); ?>">ポートフォリオサイトトップへ戻る</a></div>
			
		</div><!-- /inner -->
	</div><!-- /content -->

<?php get_footer(); ?>