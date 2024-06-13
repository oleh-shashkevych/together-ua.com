<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 
<section class="t-blog-page">
	<div class="t-container">
		<h1 class="t-heading-1"><?php echo (pll_current_language() === 'en') ? 'Blog' : 'Блог'; ?></h1>
		<div class="t-blog-page__grid">
			<?php
				if (have_posts()) {
					while (have_posts()) {
						the_post();
						?>
						<div class="t-blog-page__item">
							<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('large'); ?>
							<?php endif; ?>
							<h2 class="t-heading-3"><a class="t-heading-3" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<p><?php the_excerpt(); ?></p>
						</div>
						<?php
					}
				?>
			</div>
			<div>

			<?php
				// Пагинация, если нужна
					the_posts_pagination();
				} else {
					// Если статей нет
					echo 'Статей не знайдено.';
				}
			?>
		</div>
	</div>
</section>
<?php get_footer(); // подключаем footer.php ?>