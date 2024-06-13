<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>
<main>
	<section class="t-section t-page">
		<div class="t-container">
			<h1 class="t-page__heading t-heading-1"><?php the_title(); // заголовок поста ?></h1>
			<div class="t-content">
				<?php the_content(); // контент ?>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); // подключаем footer.php ?>