<?php
/**
 * Block template file: 
 *
 * All Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'all-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-all';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>
<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
		<style type="text/css">
			<?php echo '#' . $id; ?> {
			}
			<?php echo '#' . $id; ?> .card-tt-1{
				min-height: 500px;
				box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;
				border-radius: 25px;
			}
			<?php echo '#' . $id; ?> .card-head-tt-1{
				overflow: hidden;
				min-height: 200px;
				max-height: 200px;
				border-radius: 25px 25px 0px 0px !important;
			}
			<?php echo '#' . $id; ?> .card-body-tt-1{
				min-height: 300px;
				max-height: 300px;
				padding: 0px 20px 0px 20px;
			}
			<?php echo '#' . $id; ?> .img-head-card-tt-1 .post-thumbnail{
				display: flex;
			}
			<?php echo '#' . $id; ?> .img-head-card-tt-1 .post-thumbnail img{
				transition: all 0.5s ease;
				max-height: inherit;
			object-fit: cover;
			height: auto;
			width: 100%;
			border-radius: 25px 25px 0px 0px;
			}
			<?php echo '#' . $id; ?> .card-tt-1:hover .img-head-card-tt-1 .post-thumbnail img{
				transform: scale(1.5);
			}
			<?php echo '#' . $id; ?> #nav-tab{
				margin-top: 15px;
			}
			<?php echo '#' . $id; ?> .navm{
				margin-left: -5px;
				color: #63002E;
				background-color: unset;
				border: unset;
				font-size: 15px;
				font-weight: bold;
			}
			<?php echo '#' . $id; ?> nav .navm.active{
				border-radius: 50%;
				width: 40px;
				height: 40px;
				margin-left: 5px;
				background-color: #202B53;
				color: #ffffff !important;
				font-size: 15px;
				font-weight: bold;
			}
			<?php echo '#' . $id; ?> .card-excerpt-tt-1{
				margin-top: 15px;
				overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 6;
    -webkit-box-orient: vertical;
			}
			<?php echo '#' . $id; ?> .card-tt-1:hover a{
				text-decoration: none;
			}
			<?php echo '#' . $id; ?> .tt-lees-meer-arrow-1{
				background-image: linear-gradient( 270deg,#963361,#55b3b1);
				background-clip: text;
				color: transparent;
				-webkit-background-clip: text;
				font-size: 35px;
				position: relative;
				top: 7px;
				left: 12px;
				transition: all 0.8s ease;
			}
			<?php echo '#' . $id; ?> .lees-meer-section:hover .tt-lees-meer-arrow-1{
				left: 40px;
			}
			<?php echo '#' . $id; ?> .card-lees-meer-tt-1{
				position: absolute;
				bottom: 35px;
				left: 40px;
				font-size: 20px;
				font-weight: bold;
				color: #55b3b1;
			}
			.recente-post-span-tt{
				font-size: 20px;
				font-weight: bold;
				margin-bottom: 0px;
			}
			.alle-post-span-tt{
				font-size: 20px;
				font-weight: bold;
				margin-bottom: 0px;
				position: absolute;
				right: 45px;
			}
		.angle-right-tt-1{
			transition: all 0.5s ease;
		font-size: 25px;
		position: absolute;
		margin-top: 3px;
		margin-left: 5px;
		}
		.alle-post-span-tt:hover{
			color: #55b3b1;
		}
		.alle-post-span-tt:hover .angle-right-tt-1{
			margin-left: 20px;
		}
		</style>
		
	<?php the_field( '' ); ?>

		<!-- <div class="container mt-5">
		<div class="row">
			<div class="col-12">
				<h4>Recente Posts</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-12 card-col-tt-1">
				<div class="card-tt-1">
					<div class="card-head-tt-1">
						<img class="img-head-card-tt-1" src="http://triptruffle.nl/wp-content/uploads/2022/01/Trip-Truffle.jpg" alt="">
					</div>
					<div class="card-body-tt-1">
								
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-12 card-col-tt-1">
				<div class="card-tt-1">
					<div class="card-head-tt-1">
						
					</div>
					<div class="card-body-tt-1">
								
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-12 card-col-tt-1">
				<div class="card-tt-1">
					<div class="card-head-tt-1">
						
					</div>
					<div class="card-body-tt-1">
								
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-12 card-col-tt-1">
				<div class="card-tt-1">
					<div class="card-head-tt-1">
						
					</div>
					<div class="card-body-tt-1">
								
					</div>
				</div>
			</div>
		</div>
		</div>	 -->
 <div class="container">
	 <div class="row">
	 <div class="col-6">
			 <section class="mt-5 mb-2"><span class="recente-post-span-tt">Recente Posts</span></section> 
		 </div>
		 <div class="col-6 d-flex">
		 <a href=""><div class="alle-post-span-tt mt-5 mb- mr-2"> <span> Alle Posts</span><i class="angle-right-tt-1 fas fa-angle-double-right triptruffle-icon-gradient"></i></div></a>
		 </div>
	 </div>
    <div class="row">
      <div class="col-12">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => -1,
          'orderby' => 'date',
          'offset' => 1,
          'post_status' => 'publish',
        );
        $tabs = 0;
        $tabx = 0;

        $the_query = new WP_Query($args);
        ?>
      	<div class="tab-content mt-2" id="recent-posts">
          <?php
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
              $postid = get_the_ID();
              $tabx++;
              if ($tabx == 1) { ?>
                <div class="tab-pane fade <?php i ($tabs == 0) echo 'show active'; ?>" id="recent-post-tab-<?php echo $tabs; ?>" role="tabpanel" aria-labelledby="pills-home-tab">
                  <div class="row"><?php } ?>
										<div class="col-lg-3 col-md-6 col-12">
												<div class="card-tt-1">
													<a href="<?php echo get_the_permalink(); ?>">
														<div class="card-head-tt-1 d-flex">
															<div class="img-head-card-tt-1 d-flex">
															<?php kyano_post_thumbnail(); ?>
															</div>
														</div>
													</a>
													<a href="<?php echo get_the_permalink(); ?>">
														<div class="card-body-tt-1">
															<h3 style="line-height: 1.3; font-size: 25px;" class="mt-3 text-secondary"><?php the_title(); ?></h3>
															<div class="card-excerpt-tt-1"><?php echo the_excerpt(10, $post->ID); ?></div>
															<section class="lees-meer-section"><span class="card-lees-meer-tt-1">Lees meer<i class="tt-lees-meer-arrow-1 fas fa-long-arrow-alt-right"></i></span></section>
														</div>
													</a>
												</div>

														
													<?php
													$width2 = "<script>document.write(screen.width);</script>";
													if ($width2 > 960){
														$mobileDetect = 2;
													} else {
														$mobileDetect = 4;
													}
													?>
												<?php	if ($tabx == $mobileDetect) { ?>
										</div>
                  </div>
									<?php
												$tabx = 0;
												$tabs++;
											}
									?>
                </div>
            <?php
            endwhile;
            wp_reset_postdata();
            echo '</div>';
          endif;
            ?>
        </div>
        <nav>
          <div class="nav d-flex justify-content-center" id="nav-tab" role="tablist">
            <?php
            for ($i = 0; $i <= $tabs; $i++) {
            ?>
              <button class="nav-link navm
             <?php if ($i == 0) {
                echo 'active';
              } ?>" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#recent-post-tab-<?php echo $i; ?>" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><?php echo $i+1; ?></button>
            <?php
            }
            ?>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>
