<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="preload" href="https://together-ua.com/wp-content/uploads/2023/07/hero-img.svg" as="image">

	<?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
</head>
<body <?php body_class(); // все классы для body ?>>
	<header class="t-header">
		<div class="t-container">
			<nav class="t-header__nav">				
				<a class="t-header__logo" href="<?php echo pll_home_url(); ?>">
					<img src="https://together-ua.com/wp-content/uploads/2023/08/IMG_1836.png" alt="logo">
				</a>
				<div class="t-header__list-main">
					<?php
						// Получаем текущий активный язык
						$current_language = pll_current_language();

						// Определяем, какое меню использовать в зависимости от языка
						$menu_name = ($current_language === 'en') ? 'menu-main-en' : 'menu-main';

						// Получаем объект текущего меню
						$menu_object = wp_get_nav_menu_object($menu_name);
						if ($menu_object) {
							$menu_items = wp_get_nav_menu_items($menu_object->term_id);

							if ($menu_items) {
								echo '<ul class="t-header__list">';

								foreach ($menu_items as $item) {
									echo '<li class="t-header__item"><a href="' . esc_url($item->url) . '" class="t-header__link">' . esc_html($item->title) . '</a></li>';
								}

								echo '</ul>';
							}
						}
					?>
					<?php
						// Получаем текущий активный язык
						$current_language = pll_current_language();

						// Определяем, какое меню использовать в зависимости от языка
						$menu_name = ($current_language === 'en') ? 'lang-en' : 'lang-ua';

						// Получаем объект текущего меню
						$menu_object = wp_get_nav_menu_object($menu_name);
						if ($menu_object) {
							$menu_items = wp_get_nav_menu_items($menu_object->term_id);

							if ($menu_items) {
								echo '<ul class="t-header__list">';

								foreach ($menu_items as $item) {
									echo '<li class="t-header__item"><a href="' . esc_url($item->url) . '" class="t-small-button">' . esc_html($item->title) . '</a></li>';
								}

								echo '</ul>';
							}
						}
					?>				
					<div class="t-button__wrapper">
						<a href="https://docs.google.com/forms/d/e/1FAIpQLSeGT4utWJS1npCqlwN5qVrnCk2-_9-N6MfRc-XSpb64N56sVQ/viewform?fbclid=PAAabWEATneqyrdEqBzW1NsXoCADxh7lhuKwqq0ryarCo9C28sKawNVTlAsoI_aem_AcP22jTflCAv_0tyFUCafn67EvQLkqAyq8kHGL4WRVUyaoEdxIHXgBmw8i1oTZ4hZ8o" class="t-button" target="_blank"><?php echo (pll_current_language() === 'en') ? 'Consultation' : 'Консультація'; ?></a>
					</div>
				</div>
				<div class="t-header__burger">
					<div class="burger-icon"></div>
					<div class="burger-icon"></div>
					<div class="burger-icon"></div>
				</div>
			</nav>
		</div>
	</header>