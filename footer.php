<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */

// Вывод переменных
$logo_white = get_field('logo_white');
?>

	<footer class="t-footer">
		<div class="t-container">
			<nav class="t-footer__nav">
				<a class="t-footer__logo" href="/">
					<img src="https://together-ua.com/wp-content/uploads/2023/08/IMG_1835.png" alt="logo footer">
				</a>
				<div class="t-footer__contact">
					<a class="t-social t-footer__link" href="https://www.instagram.com/together.ua" target="_blank">
						<img src="https://together-ua.com/wp-content/uploads/2023/11/phone-solid-2.svg" alt="">
						@together.ua
					</a>
					<a class="t-social t-footer__link" href="mailto:contact@together-ua.com" target="_blank">
						<img src="https://together-ua.com/wp-content/uploads/2023/11/phone-solid-1.svg" alt="">
						contact@together-ua.com
					</a>
					<a class="t-social t-footer__link" href="mailto:contacttogether1@gmail.com" target="_blank">
						<img src="https://together-ua.com/wp-content/uploads/2023/11/phone-solid-1.svg" alt="">
						contacttogether1@gmail.com
					</a>
					<a class="t-social t-footer__link" href="tel:+380932635759" target="_blank">
						<img src="https://together-ua.com/wp-content/uploads/2023/11/phone-solid.svg" alt="">
						+380932635759
					</a>
				</div>
				<?php
					// Получаем текущий активный язык
					$current_language = pll_current_language();

					// Определяем, какое меню использовать в зависимости от языка
					$menu_name_bottom = ($current_language === 'en') ? 'menu-policy-en' : 'menu-policy-ua';

					// Получаем объект текущего меню
					$menu_object_bottom = wp_get_nav_menu_object($menu_name_bottom);
					if ($menu_object_bottom) {
						$menu_items_bottom = wp_get_nav_menu_items($menu_object_bottom->term_id);

						if ($menu_items_bottom) {
							echo '<ul class="t-footer__list">';

							foreach ($menu_items_bottom as $item_bottom) {
								echo '<li class="t-footer__item"><a href="' . esc_url($item_bottom->url) . '" class="t-footer__link">' . esc_html($item_bottom->title) . '</a></li>';
							}

							echo '</ul>';
						}
					}
				?>
			</nav>
		</div>
	</footer>
<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
<script>
	$(document).ready(function() {
		$('.t-header__burger').on('click', function() {
			$('.t-header__list-main').toggleClass('active');
			$('.burger-icon').toggleClass('active');
		});
	
		$('.t-header__link').on('click', function() {
			$('.t-header__list-main').removeClass('active');
			$('.burger-icon').removeClass('active');
		});
	});
</script>
</body>
</html>