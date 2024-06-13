<?php
/**
 * Шаблон отдельной записи (single.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>
<section class="t-section t-page">
	<div class="t-container">
		<h1 class="t-page__heading t-heading-1"><?php the_title(); // заголовок поста ?></h1>
		<?php if (has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('large'); ?>
		<?php endif; ?>
		<div class="t-content">
			<?php the_content(); // контент ?>
		</div>
	</div>
</section>
<?php get_footer(); // подключаем footer.php ?>
