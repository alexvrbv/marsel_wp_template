<?php get_header(); ?>
	<div class="main">
		<div class="wrapper header" id="home">
			<nav class="navbar">
				<div class="container-fluid header-top-wrapper width-1200">
					<div class="navbar-header">
						<!--<span class="navbar-brand">
							<div class="logo">
								<img src="<?php //echo get_template_directory_uri();?>/img/logo.svg" alt="Лого">
							</div>
						</span>-->
						<div class="header__order-btn header__order-btn--mobile">
							<a href="#contacts">Заказать концерт</a>
						</div>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Показать меню</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div id="navbar" class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-left">
							<li><a href="#home">Главная</a></li>
							<li><a href="#news">Новости</a></li>
							<li><a href="#photo">Фото</a></li>
							<li><a href="#video">Видео</a></li>
							<li><a href="#about-top">О группе</a></li>
							<li><a href="#contacts">Контакты</a></li>
						</ul>
						<div class="header-contact header-contact-2">
							<?php if($settings['contact2_phone'] != null) { ?>
							<div class="header-contact-phone">
								<span><?php echo $settings['contact2_phone'];?></span>
							</div>
							<?php } ?>
							<?php if($settings['contact2_name'] != null) { ?>
							<div class="header-contact-title">
								<span><?php echo $settings['contact2_name'];?></span>
							</div>
							<?php } ?>
						</div>
						<div class="header-contact header-contact-1">
							<?php if($settings['contact1_phone'] != null) { ?>
							<div class="header-contact-phone">
								<span><?php echo $settings['contact1_phone'];?></span>
							</div>
							<?php } ?>
							<?php if($settings['contact1_name'] != null) { ?>
							<div class="header-contact-title">
								<span><?php echo $settings['contact1_name'];?></span>
							</div>
							<?php } ?>							
						</div>
						<div class="header__order-btn">
							<a href="#contacts">Заказать концерт</a>
						</div>											
					</div><!--/.nav-collapse -->
				</div>
			</nav>
		</div>
		<div class="wrapper top">
			<div class="container-fluid width-1200">
				<div class="row">
					<div class="col-md-6 top-part">
					</div>
					<div class="col-md-6 top-part">
						<div class="top-info">
							<div class="top-info-logo">
								<img src="<?php echo get_template_directory_uri();?>/img/b14a181cd58a4cadca46aca96b891cea.png" alt="Лого">
							</div>
							<div class="top-info-title">
								<span>Живые эмоции</span>
							</div>
							<div class="top-info-title-small">
								<span>Живой звук</span>
							</div>
							<div class="top-info-video embed-responsive embed-responsive-16by9">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/qIv0s2M9X1Q" frameborder="0" allowfullscreen></iframe>
							</div>
							<div class="top-info-concerts-title">
								<span>Ближайшие концерты</span>
							</div>
							<div class="top-info-concerts">
								<ul>
									<?php
									$args = array(
										'post_type' => 'concert'
										);
									$loop = new WP_Query($args);
									if ( $loop->have_posts() ) : ?>
										<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
											<?php $concert_name = get_field('concert_name'); ?>
											<?php $concert_link = get_field('concert_link'); ?>
											<li><a href="<?php echo $concert_link; ?>" target="_blank"><?php echo $concert_name; ?></a></li>
										<?php endwhile; ?>
									<?php endif; wp_reset_postdata(); ?>									
								</ul>
							</div>
							<div class="top-info-music">
								<div class="top-info-music-google-play">
									<a href="https://play.google.com/store/music/artist/%D0%9C%D0%B0%D1%80%D1%81%D0%B5%D0%BB%D1%8C?id=A2kun3o2fhn27qlq37fyzblbhey" target="_blank">
										<img src="<?php echo get_template_directory_uri();?>/img/47bd03f14fff251f28ab5d8fa89e25ac.png" alt="Google Play">
									</a>
								</div>
								<div class="top-info-music-app-store">
									<a href="https://itunes.apple.com/ru/artist/marsel/id362129315" target="_blank">
										<img src="<?php echo get_template_directory_uri();?>/img/1c2ddf0de675937d3562cc8b0c08ca9b.png" alt="App Store">
									</a>									
								</div>
							</div>
						</div>
					</div>					
				</div>
			</div>		
		</div>
		<div class="wrapper news" id="news">
			<div class="container-fluid width-1080">
				<div class="row">
					<div class="col-md-6">
						<div class="news-info">
							<div class="news-info-title">
								<span>Новости</span>
							</div>
							<div class="news-info-slider">
								<div class="swiper-container">
									<div class="swiper-pagination"></div>
										<div class="swiper-button-next swiper-button-white"></div>
										<div class="swiper-button-prev swiper-button-white"></div>									
									<div class="swiper-wrapper">
										<!-- Slides -->
										<?php
										$args = array(
											'post_type' => 'news_item',
											'orderby' => 'date',
											'order'   => 'DESC'
											);
										$loop = new WP_Query($args);
										if ( $loop->have_posts() ) : ?>
											<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
												<?php $news_item_title = get_field('news_item_title'); ?>
												<?php $news_item_image = get_field('news_item_image'); ?>
												<?php $news_item_text = get_field('news_item_text'); ?>
												<?php $news_item_bottom = get_field('news_item_bottom'); ?>												
													<div class="swiper-slide news-info-slide">
														<div class="news-info-slide-title">
															<span><?php echo $news_item_title; ?></span>
														</div>
														<div class="news-info-slide-left">
															<img src="<?php echo $news_item_image['url']; ?>" alt="<?php echo $news_item_title; ?>">
														</div>
														<div class="news-info-slide-right">
															<?php echo $news_item_text; ?>
														</div>
														<div class="news-info-slide-bottom">
															<?php echo $news_item_bottom; ?>
														</div>
													</div>												
											<?php endwhile; ?>
										<?php endif; wp_reset_postdata(); ?>										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 artist-wrapper">
						<div class="artist ledkov">
							<div class="artist-name">
								<span>Степа Ледков</span>
							</div>
							<div class="artist-position">
								<span>Вокал</span>
							</div>
							<div class="artist-socials">
								<a href="http://vk.com/gruppamarsel" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/83ff9c135bef377259dd2220f2e095a9.png" alt="Вк"></a>
								<a href="https://www.instagram.com/stepamarsel/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/ddcbb8b274254f977f0cceb99d108698.png" alt="Insta"></a>
								<a href="https://twitter.com/stepamarsel" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/666f448e6d95013683c0c190d7686f64.png" alt="Tw"></a>
							</div>
						</div>
					</div>					
				</div>
			</div>		
		</div>
		<div class="wrapper wrapper-title wrapper-title-photo" id="photo">
			<div class="container-fluid width-1080">
				<div class="row">
					<div class="col-md-12">
						<div class="wrapper-title-inner">
							<span>Фото</span>
						</div>
					</div>			
				</div>
			</div>		
		</div>		
		<div class="wrapper photo">
			<div class="container-fluid width-1080">
				<div class="row">
					<div class="col-md-6 col-md-push-6">
						<div class="photo-items">
							<?php
							$args = array(
								'post_type' => 'photo',
								'orderby' => 'date',
								'order'   => 'ASC'
								);
							$loop = new WP_Query($args);
							if ( $loop->have_posts() ) : ?>
								<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
									<?php $photo = get_field('photo'); ?>
									<?php $photo_class = get_field('photo_class'); ?>										
										<div class="photo-item <?php echo $photo_class; ?>">
											<a class="img-popup-link" href="<?php echo $photo['url']; ?>">
												<img src="<?php echo $photo['url']; ?>" alt="Photo">
											</a>
										</div>										
								<?php endwhile; ?>
							<?php endif; wp_reset_postdata(); ?>						
						</div>
						<div class="more-photo-link">
							<a href="https://vk.com/albums-20697" target="blank">
								<span>Больше фото</span>
							</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-6 col-md-pull-6 artist-wrapper">
						<div class="artist blinov">
							<div class="artist-name">
								<span>Митя Блинов</span>
							</div>
							<div class="artist-position">
								<span>Саксофон</span>
							</div>
							<div class="artist-socials">
								<a href="https://vk.com/mityablinov" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/83ff9c135bef377259dd2220f2e095a9.png" alt="Вк"></a>
								<a href="https://www.instagram.com/mityablinov/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/ddcbb8b274254f977f0cceb99d108698.png" alt="Insta"></a>
								<a href="https://twitter.com/mityablinov" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/666f448e6d95013683c0c190d7686f64.png" alt="Tw"></a>
							</div>
						</div>					
					</div>					
				</div>
			</div>
		</div>
		<div class="wrapper wrapper-title wrapper-title-video" id="video">
			<div class="container-fluid width-1080">
				<div class="row">
					<div class="col-md-12">
						<div class="wrapper-title-inner">
							<span>Видео</span>
						</div>
					</div>			
				</div>
			</div>			
		</div>		
		<div class="wrapper video">
			<div class="container-fluid width-1080">
				<div class="row">
					<div class="col-md-6">
						<div class="video-items">
							<?php
							$args = array(
								'post_type' => 'video',
								'orderby' => 'date',
								'order'   => 'ASC'
								);
							$loop = new WP_Query($args);
							if ( $loop->have_posts() ) : ?>
								<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
									<?php $video_code = get_field('video_code'); ?>
										<div class="video-item embed-responsive embed-responsive-16by9">
											<?php echo $video_code; ?>
										</div>																			
								<?php endwhile; ?>
							<?php endif; wp_reset_postdata(); ?>							
						</div>
					</div>
					<div class="col-md-6 artist-wrapper">
						<div class="artist babenko">
							<div class="artist-name">
								<span>Евгений Бабенко</span>
							</div>
							<div class="artist-position">
								<span>Клавиши</span>
							</div>
							<div class="artist-socials">
								<a href="https://vk.com/evgenybabenko" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/83ff9c135bef377259dd2220f2e095a9.png" alt="Вк"></a>
								<a href="https://www.instagram.com/evgenybabenko/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/ddcbb8b274254f977f0cceb99d108698.png" alt="Insta"></a>
							</div>
						</div>						
					</div>
				</div>
			</div>		
		</div>
		<div class="wrapper wrapper-title wrapper-title-all-videos" id="all-videos">
			<div class="container-fluid width-1080">
				<div class="row">
					<div class="col-md-12">
						<div class="wrapper-title-inner">
							<span>Все клипы</span>
						</div>
					</div>			
				</div>
			</div>			
		</div>			
		<div class="wrapper all-videos">
			<div class="container-fluid width-1080">
				<div class="row">
					<?php
					$args = array(
						'post_type' => 'video_from_all',
						'orderby' => 'date',
						'order'   => 'DESC'
						);
					$loop = new WP_Query($args);
					if ( $loop->have_posts() ) : ?>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<?php $video_code = get_field('video_code'); ?>
								<div class="col-md-4 col-sm-6">
									<div class="all-videos-video-item embed-responsive embed-responsive-16by9">
										<?php echo $video_code; ?>
									</div>
								</div>								
						<?php endwhile; ?>
					<?php endif; wp_reset_postdata(); ?>
					<div class="col-sm-12">
						<div class="youtube-button">
							<a href="https://www.youtube.com/channel/UC2Fe21KSXK17FW9ZcZ0kyYA" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/reiki_youtube.png" alt="Лого"></a>
						</div>
					</div>					
				</div>
			</div>		
		</div>
		<div class="wrapper wrapper-title">
		</div>			
		<div class="wrapper about-top" id="about-top">
			<div class="container-fluid width-1080">
				<div class="row">
					<div class="col-sm-12">
						<div class="about-top-logo">
							<img src="<?php echo get_template_directory_uri();?>/img/91e1d48521dc87f331edb1cff4b45d14.png" alt="Лого">
						</div>

						<?php
						$args = array(
							'post_type' => 'page',
							'orderby' => 'date',
							'order'   => 'ASC',
							'p' => '2'
							);
						$loop = new WP_Query($args);
						if ( $loop->have_posts() ) : ?>
							<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<?php $about_title_small = get_field('about_title_small'); ?>
								<div class="about-top-title">
									<span><?php the_title();?></span>
								</div>
								<div class="about-top-title-small">
									<span><?php echo $about_title_small; ?></span>
								</div>								
							<?php endwhile; ?>
						<?php endif; wp_reset_postdata(); ?>					
					</div>			
				</div>
			</div>			
		</div>
		<div class="wrapper about-bottom" id="about-bottom">
			<div class="container-fluid width-1080">
				<div class="row">
					<div class="col-sm-12">
						<div class="wrapper-about-bottom-text">
							<?php
							$args = array(
								'post_type' => 'page',
								'orderby' => 'date',
								'order'   => 'ASC',
								'p' => '2'
								);
							$loop = new WP_Query($args);
							if ( $loop->have_posts() ) : ?>
								<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
									<?php $about_title_small = get_field('about_title_small'); ?>
									<?php the_content(); ?>								
								<?php endwhile; ?>
							<?php endif; wp_reset_postdata(); ?>
						</div>
					</div>			
				</div>
			</div>			
		</div>
		<div class="wrapper contacts" id="contacts">
			<div class="container-fluid width-1080">
				<div class="row">
					<div class="col-sm-6">
					</div>
					<div class="col-sm-6">
						<div class="order-concert">
							<div class="order-concert-title">
								<span>Закажи концерт</span>
							</div>
							<div class="order-concert-logo">
								<img src="<?php echo get_template_directory_uri();?>/img/91e1d48521dc87f331edb1cff4b45d14.png" alt="Лого">
							</div>
							<?php if($settings['contact1_name'] != null) { ?>
							<div class="order-concert-director">
								<span><?php echo $settings['contact1_name'];?></span>
							</div>
							<?php } ?>
							<?php if($settings['contact1_phone'] != null) { ?>
							<div class="order-concert-phone">
								<span><?php echo $settings['contact1_phone'];?></span>
							</div>
							<?php } ?>
							<?php if($settings['contact1_email'] != null) { ?>
							<div class="order-concert-email">
								<span><?php echo $settings['contact1_email'];?></span>
							</div>
							<?php } ?>							
						</div>
					</div>						
				</div>
			</div>			
		</div>
		<div class="wrapper footer" id="footer">
			<div class="container-fluid width-1080">
				<div class="row">
					<div class="col-sm-12 footer-top">
						<div class="footer-logo">
							<img src="<?php echo get_template_directory_uri();?>/img/91e1d48521dc87f331edb1cff4b45d14.png" alt="Лого">
						</div>
						<div class="footer-description-small">
							<span>Официальный сайт</span>
						</div>
						<div class="footer-description-big">
							<span>Живые&nbsp;эмоции живой&nbsp;звук</span>
						</div>							
					</div>
					<div class="footer-contact-outer">
						<div class="footer-contact-vertical-line"></div>
						<div class="col-sm-6">
							<div class="footer-contact footer-contact-left">
								<?php if($settings['contact1_name'] != null) { ?>
								<div class="footer-contact-title">
									<span><?php echo $settings['contact1_name'];?></span>
								</div>
								<?php } ?>
								<?php if($settings['contact1_phone'] != null) { ?>
								<div class="footer-contact-phone">
									<span><?php echo $settings['contact1_phone'];?></span>
								</div>
								<?php } ?>
								<?php if($settings['contact1_email'] != null) { ?>
								<div class="footer-contact-email">
									<span><?php echo $settings['contact1_email'];?></span>
								</div>
								<?php } ?>								
							</div>
						</div>
						<div class="col-sm-6">
							<div class="footer-contact footer-contact-right">
								<?php if($settings['contact2_name'] != null) { ?>
								<div class="footer-contact-title">
									<span><?php echo $settings['contact2_name'];?></span>
								</div>
								<?php } ?>
								<?php if($settings['contact2_phone'] != null) { ?>
								<div class="footer-contact-phone">
										<span><?php echo $settings['contact2_phone'];?></span>
								</div>
								<?php } ?>
								<?php if($settings['contact2_email'] != null) { ?>
								<div class="footer-contact-email">
									<span><?php echo $settings['contact2_email'];?></span>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="col-sm-12 footer-bottom">
						<div class="footer-socials">
							<?php if($settings['marsel_vk'] != null) { ?>
							<a class="footer-social" href="<?php echo $settings['marsel_vk'];?>" target="_blank">
								<img src="<?php echo get_template_directory_uri();?>/img/83ff9c135bef377259dd2220f2e095a9.png" alt="Vkontakte">
							</a>
							<?php } ?>
							<?php if($settings['marsel_tw'] != null) { ?>
							<a class="footer-social" href="<?php echo $settings['marsel_tw'];?>" target="_blank">
								<img src="<?php echo get_template_directory_uri();?>/img/666f448e6d95013683c0c190d7686f64.png" alt="Twitter">
							</a>
							<?php } ?>
							<?php if($settings['marsel_yt'] != null) { ?>
							<a class="footer-social" href="<?php echo $settings['marsel_yt'];?>" target="_blank">
								<img src="<?php echo get_template_directory_uri();?>/img/db73b708f669e5e87c5fe148c5814fa5.png" alt="Youtube">
							</a>
							<?php } ?>
							<?php if($settings['marsel_fb'] != null) { ?>
							<a class="footer-social" href="<?php echo $settings['marsel_fb'];?>" target="_blank">
								<img src="<?php echo get_template_directory_uri();?>/img/5d8bc7f734fc76e785b7702e7337ab5c.png" alt="Facebook">
							</a>
							<?php } ?>
							<?php if($settings['marsel_insta'] != null) { ?>
							<a class="footer-social" href="<?php echo $settings['marsel_insta'];?>" target="_blank">
								<img src="<?php echo get_template_directory_uri();?>/img/ddcbb8b274254f977f0cceb99d108698.png" alt="Instagram">
							</a>
							<?php } ?>
						</div>
					</div>						
				</div>
			</div>			
		</div>		
	</div>
<?php get_footer(); ?>
