<?php
/**
 * Кастомна сторінка (page-custom.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Кастомна сторінка
 */
get_header(); // подключаем header.php 

// Вывод переменных
$form_link = get_field('form_link');

$hero_img = get_field('hero_img');
$hero_title = get_field('hero_title');
$hero_text = get_field('hero_text');

$about_img = get_field('about_img');
$about_title = get_field('about_title');
$about_text = get_field('about_text');

$mission_img = get_field('mission_img');
$mission_title = get_field('mission_title');
$mission_text = get_field('mission_text');

$services_title = get_field('services_title');
$services_text = get_field('services_text');

$blog_title = get_field('blog_title');
$blog_page = get_field('blog_page');

$benefits_title = get_field('benefits_title');
$benefits_text = get_field('benefits_text');

$how_title = get_field('how_title');
$how_cta_img = get_field('how_cta_img');
$how_cta_title = get_field('how_cta_title');
$how_cta_text = get_field('how_cta_text');

$formats_img = get_field('formats_img');
$formats_title = get_field('formats_title');
$formats_text = get_field('formats_text');

$project_img = get_field('project_img');
$project_title = get_field('project_title');
$project_text = get_field('project_text');
$project_link = get_field('project_link');

$events_title = get_field('events_title');

$team_title = get_field('team_title');
$team_text = get_field('team_text');

$values_title = get_field('values_title');
$values_cta_title = get_field('values_cta_title');

$partners_title = get_field('partners_title');

$donate_img = get_field('donate_img');
$donate_title = get_field('donate_title');
$donate_text = get_field('donate_text');
?>
<main>
	<section class="t-section t-hero" id="linkMain">
		<div class="t-container">
			<div class="t-hero__grid">
				<div class="t-hero__data">
					<?php
						if ($hero_title) {
					?>
						<h1 class="t-hero__heading t-heading-1"><?php echo $hero_title; ?></h1>
					<?php
						}
					?>
					<?php
						if ($hero_text) {
					?>
						<p class="t-hero__text"><?php echo $hero_text; ?></p>
					<?php
						}
					?>
					<?php
						if ($form_link) {
					?>
						<div class="t-button__wrapper">
							<a href="<?php echo $form_link; ?>" class="t-button" target="_blank"><?php echo (pll_current_language() === 'en') ? 'Get help' : 'Отримати допомогу'; ?></a>
						</div>
					<?php
						}
					?>
				</div>
				<?php
					if ($hero_img) {
				?>
					<div class="t-hero__img">
						<img src="<?php echo $hero_img; ?>" alt="">
					</div>
				<?php
					}
				?>
			</div>
		</div>
	</section>
	
	<section class="t-section t-about" id="linkAbout">
		<div class="t-container">
			<?php
				if ($about_title) {
			?>
				<h2 class="t-about__heading t-heading-2"><?php echo $about_title; ?></h2>
			<?php
				}
			?>
			<?php
				if ($about_text) {
			?>
				<div class="t-about__inner">
					<?php
						if ($about_img) {
					?>
						<img class="t-about__img" src="<?php echo $about_img; ?>" alt="">
					<?php
						}
					?>					
					<p class="t-about__text"><?php echo $about_text; ?></p>
				</div>
			<?php
				}
			?>
		</div>
	</section>
	
	<section class="t-section t-mission">
		<div class="t-container">
			<?php
				if ($mission_title) {
			?>
				<h2 class="t-mission__heading t-heading-2"><?php echo $mission_title; ?></h2>
			<?php
				}
			?>
			<?php
				if ($mission_text) {
			?>
				<div class="t-mission__inner">					
					<div class="t-mission__text"><?php echo $mission_text; ?></div>
				</div>
			<?php
				}
			?>
		</div>
	</section>

	<section class="t-section t-project">
		<div class="t-container">
			<?php
				if ($project_title) {
			?>
				<h2 class="t-project__heading t-heading-2"><?php echo $project_title; ?></h2>
			<?php
				}
			?>
			<div class="t-project__grid">
				<?php
					if ($project_img) {
				?>
					<div class="t-project__img">
						<img src="<?php echo $project_img; ?>" alt="">
					</div>
				<?php
					}
				?>
				<div class="t-project__data">
					<?php
						if ($project_text) {
					?>
						<div class="t-project__data-text t-text-wrapper"><?php echo $project_text; ?></div>
					<?php
						}
					?>
					<?php
						if ($project_link) {
					?>
						<div class="t-button__wrapper">
							<a href="<?php echo $project_link; ?>" class="t-button" target="_blank"><?php echo (pll_current_language() === 'en') ? 'Read More' : 'Детальніше'; ?></a>
						</div>
					<?php
						}
					?>
				</div>
			</div>
		</div>
	</section>
	
	<section class="t-section t-services" id="linkServices">
		<div class="t-container">
			<?php
				if ($services_title) {
			?>
				<h2 class="t-services__heading t-heading-2"><?php echo $services_title; ?></h2>
			<?php
				}
			?>
			<?php if( have_rows('services_list') ): ?>
				<div class="t-services__grid">
					<?php while( have_rows('services_list') ): the_row();
						$img = get_sub_field('img');
						$title = get_sub_field('title');
						$text = get_sub_field('text');
					?>
						<div class="t-services__item">
							<img class="t-services__item-img" src="<?php echo $img; ?>" alt="">
							<h3 class="t-services__item-heading t-heading-3"><?php echo $title; ?></h3>
							<p class="t-services__item-text"><?php echo $text; ?></p>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<?php
				if ($services_text) {
			?>
				<div class="t-services__bottom">
					<p class="t-heading-2"><?php echo $services_text; ?></p>
					<?php
						if ($form_link) {
					?>
						<div class="t-button__wrapper">
							<a href="<?php echo $form_link; ?>" class="t-button" target="_blank"><?php echo (pll_current_language() === 'en') ? 'Consultation' : 'Консультація'; ?></a>
						</div>
					<?php
						}
					?>
				</div>
			<?php
				}
			?>
		</div>
	</section>

	<section class="t-section t-blog">
		<div class="t-container">
			<h2 class="t-blog__heading t-heading-2"><?php echo $blog_title; ?></h2>
			<div class="t-blog__grid">
				<?php
					// Вывод трех последних статей
					$argsBlog = array(
						'post_type' => 'post',
						'posts_per_page' => 4,
						'order' => 'DESC',
						'orderby' => 'date',
					);

					$queryBlog = new WP_Query($argsBlog);

					if ($queryBlog->have_posts()) {
						while ($queryBlog->have_posts()) {
							$queryBlog->the_post();
							// Получаем главное изображение
							$thumbnailBlog = get_the_post_thumbnail_url(get_the_ID(), 'large');
					
							// Получаем обрезанный текст (в данном случае первые 100 символов)
							$excerptBlog = wp_trim_words(get_the_excerpt(), 20);
					
							// Выводим информацию о каждой статье
							?>
							<div class="t-blog__item">
								<?php if ($thumbnailBlog) : ?>
									<img src="<?php echo $thumbnailBlog; ?>" alt="<?php the_title_attribute(); ?>">
								<?php endif; ?>
								<h3 class="t-heading-3"><a class="t-heading-3" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p><?php echo $excerptBlog; ?></p>
							</div>
							<?php
						}
					} else {
						// Если статей нет
						echo 'Статей не знайдено.';
					}
					// Сброс данных запроса
					wp_reset_postdata();
				?>
			</div>
			<div class="t-button__wrapper  t-blog__button">
				<a href="<?php echo $blog_page; ?>" class="t-button" target="_blank"><?php echo (pll_current_language() === 'en') ? 'All articles' : 'Усі статті'; ?></a>
			</div>
		</div>
	</section>
	
	<section class="t-section t-benefits">
		<div class="t-container">
			<?php
				if ($benefits_title) {
			?>
				<h2 class="t-benefits__heading t-heading-2"><?php echo $benefits_title; ?></h2>
			<?php
				}
			?>
			<?php if( have_rows('benefits_list') ): ?>
				<div class="t-benefits__grid">
					<?php while( have_rows('benefits_list') ): the_row();
						$img = get_sub_field('img');
						$title = get_sub_field('title');
						$text = get_sub_field('text');
					?>
						<div class="t-benefits__item">
							<div class="t-benefits__item-img">
								<img src="<?php echo $img; ?>" alt="">
							</div>
							<h3 class="t-benefits__item-heading t-heading-3"><?php echo $title; ?></h3>
							<p class="t-benefits__item-text"><?php echo $text; ?></p>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<?php
				if ($benefits_text) {
			?>
				<div class="t-benefits__bottom">
					<p class="t-heading-2"><?php echo $benefits_text; ?></p>
					<?php
						if ($form_link) {
					?>
						<div class="t-button__wrapper">
							<a href="<?php echo $form_link; ?>" class="t-button" target="_blank"><?php echo (pll_current_language() === 'en') ? 'Consultation' : 'Консультація'; ?></a>
						</div>
					<?php
						}
					?>
				</div>
			<?php
				}
			?>
		</div>
	</section>
	
	<section class="t-section t-how">
		<div class="t-container">
			<?php
				if ($how_title) {
			?>
				<h2 class="t-how__heading t-heading-2"><?php echo $how_title; ?></h2>
			<?php
				}
			?>
			<?php if( have_rows('how_steps') ): ?>
				<div class="t-how__grid">
					<?php while( have_rows('how_steps') ): the_row();
						$number = get_sub_field('number');
						$title = get_sub_field('title');
						$text = get_sub_field('text');
					?>
						<div class="t-how__item">
							<div class="t-how__item-num"><?php echo $number; ?></div>
							<div class="t-how__item-title"><?php echo $title; ?></div>
							<div class="t-how__item-text"><?php echo $text; ?></div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<?php
				if ($how_cta_title) {
			?>
				<div class="t-how__cta">
					<div class="t-how__cta-data">
						<h2 class="t-how__cta-title"><?php echo $how_cta_title; ?></h2>
						<?php
							if ($how_cta_text) {
						?>
							<p class="t-how__cta-text"><?php echo $how_cta_text; ?></p>
						<?php
							}
						?>
						<?php
							if ($form_link) {
						?>
							<div class="t-button__wrapper">
								<a href="<?php echo $form_link; ?>" class="t-button t-button--white" target="_blank"><?php echo (pll_current_language() === 'en') ? 'Consultation' : 'Консультація'; ?></a>
							</div>
						<?php
							}
						?>
					</div>
					<?php
						if ($how_cta_img) {
					?>
						<div class="t-how__cta-img">
							<img src="<?php echo $how_cta_img; ?>" alt="">
						</div>
					<?php
						}
					?>
				</div>
			<?php
				}
			?>
		</div>
	</section>

	<section class="t-section t-formats">
		<div class="t-container">
			<?php
				if ($formats_title) {
			?>
				<h2 class="t-formats__heading t-heading-2"><?php echo $formats_title; ?></h2>
			<?php
				}
			?>
			<div class="t-formats__grid">
				<?php
					if ($formats_img) {
				?>
					<div class="t-formats__img">
						<img src="<?php echo $formats_img; ?>" alt="">
					</div>
				<?php
					}
				?>
				<div class="t-formats__data">
					<?php
						if ($formats_text) {
					?>
						<div class="t-formats__data-text t-text-wrapper"><?php echo $formats_text; ?></div>
					<?php
						}
					?>
					<?php
						if ($form_link) {
					?>
						<div class="t-button__wrapper">
							<a href="<?php echo $form_link; ?>" class="t-button" target="_blank"><?php echo (pll_current_language() === 'en') ? 'Consultation' : 'Консультація'; ?></a>
						</div>
					<?php
						}
					?>
				</div>
			</div>
		</div>
	</section>
	
	<section class="t-section t-events">
		<div class="t-container">
			<?php
				if ($events_title) {
			?>
				<h2 class="t-events__heading t-heading-2"><?php echo $events_title; ?></h2>
			<?php
				}
			?>
			<?php if( have_rows('events_list') ): ?>
				<div class="t-events__grid">
					<?php while( have_rows('events_list') ): the_row();
						$img = get_sub_field('img');
						$text = get_sub_field('text');
						$link = get_sub_field('link');
					?>
						<a href="<?php echo $link; ?>" class="t-events__item" target="_blank">
							<div class="t-events__item-img">
								<img src="<?php echo $img; ?>" alt="">
							</div>
							<p class="t-events__item-text"><?php echo $text; ?></p>
						</a>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</section>
	
	<section class="t-section t-team" id="linkTeam">
		<div class="t-container">
			<?php
				if ($team_title) {
			?>
				<h2 class="t-team__heading t-heading-2"><?php echo $team_title; ?></h2>
			<?php
				}
			?>
			<?php
				if ($team_text) {
			?>
				<p class="t-team__text"><?php echo $team_text; ?></p>
			<?php
				}
			?>
			<?php if( have_rows('team_list') ): ?>
				<div class="t-team__grid">
					<?php while( have_rows('team_list') ): the_row();
						$img = get_sub_field('img');
						$name = get_sub_field('name');
						$text = get_sub_field('text');
					?>
						<div class="t-team__item">
							<div class="t-team__item-img">
								<img src="<?php echo $img; ?>" alt="">
							</div>
							<div class="t-team__item-text">
								<p><?php echo $name; ?></p>
								<p><?php echo $text; ?></p>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</section>
	
	<section class="t-section t-values">
		<div class="t-container">
			<?php
				if ($values_title) {
			?>
				<div class="t-values__inner">
					<h2 class="t-values__heading t-heading-2"><?php echo $values_title; ?></h2>					
					<?php if( have_rows('values_list') ): ?>
						<div class="t-values__grid">
							<?php while( have_rows('values_list') ): the_row();
								$img = get_sub_field('img');
								$title = get_sub_field('title');
								$text = get_sub_field('text');
								$css_class = get_sub_field('css_class');
							?>
								<div class="t-values__item">
									<h3 class="t-values__item-title t-heading-3"><?php echo $title; ?></h3>
									<div class="t-values__item-img <?php echo $css_class; ?>">
										<img src="<?php echo $img; ?>" alt="">
									</div>
									<p class="t-values__item-text"><?php echo $text; ?></p>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
			<?php
				}
			?>
		</div>
	</section>
	
	<?php if( have_rows('partners_list') ): ?>
		<section class="t-section t-partners" id="linkPartner">
			<div class="t-container">
				<?php
					if ($partners_title) {
				?>
					<h2 class="t-partners__heading t-heading-2"><?php echo $partners_title; ?></h2>
				<?php
					}
				?>
				<div class="t-partners__grid">
					<?php while( have_rows('partners_list') ): the_row();
						$title = get_sub_field('title');
						$file_1 = get_sub_field('file_1');
						$file_2 = get_sub_field('file_2');
					?>
						<div class="t-partners__item">
							<h3 class="t-heading-3 t-partners__item-heading"><?php echo $title; ?></h3>
							<div class="t-partners__files">
								<a href="<?php echo $file_1; ?>" target="_blank" title="document">
									<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/></svg>
								</a>
								<a href="<?php echo $file_2; ?>" target="_blank" title="document">
									<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/></svg>
								</a>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>
	
	<?php
		if ($values_cta_title) {
	?>
		<section class="t-section t-cta">
			<div class="t-container">
				<div class="t-cta__inner">
					<h2 class="t-cta__heading"><?php echo $values_cta_title; ?></h2>
					<?php
						if ($form_link) {
					?>
						<div class="t-button__wrapper">
							<a href="<?php echo $form_link; ?>" class="t-button t-button--white" target="_blank"><?php echo (pll_current_language() === 'en') ? 'Consultation' : 'Консультація'; ?></a>
						</div>
					<?php
						}
					?>
				</div>
			</div>
		</section>
	<?php
		}
	?>
	
	
	<?php
		if ($donate_title) {
	?>
		<section class="t-section t-donate" id="linkDonate">
			<div class="t-container">
				<div class="t-donate__inner">
					<div>
						<h2 class="t-donate__heading t-heading-2"><?php echo $donate_title; ?></h2>
						<?php
							if ($donate_text) {
						?>
							<?php echo $donate_text; ?>
						<?php
							}
						?>
					</div>
					<?php
						if ($donate_img) {
					?>
						<img src="<?php echo $donate_img; ?>" alt="">
					<?php
						}
					?>
				</div>
			</div>
		</section>
	<?php
		}
	?>
</main>
<?php get_footer(); // подключаем footer.php ?>