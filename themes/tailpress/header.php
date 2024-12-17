<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="https://use.typekit.net/ibs6jfu.css">
	<script src="https://kit.fontawesome.com/e82b777598.js" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	<header>

		<div class="">
			<div class="mx-auto lg:uppercase text-theme-white tracking-wide text-base max-w-screen-lg">
				<div class="lg:flex lg:justify-between lg:items-center py-4 lg: pt-6">
					<div class="flex justify-center lg:justify-between items-center">
						<div class="header-logo hidden lg:block">
							<a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-extrabold text-lg uppercase">
							<img src="/wp-content/uploads/2024/12/Logo.svg">
							</a>
						</div>

						<div class="lg:hidden">
							<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
								<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
									xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g stroke="none" stroke-width="1" fill="#FAFAFA" fill-rule="evenodd">
										<g id="icon-shape">
											<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
												id="Combined-Shape"></path>
										</g>
									</g>
								</svg>
							</a>
						</div>
					</div>

					<div id="mobile-logo" class="hidden lg:hidden">
						<a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-extrabold text-lg uppercase tracking-wide">
							<img class="mx-auto mt-6 mb-2" src="/wp-content/uploads/2024/12/Logo.svg">
						</a>
					</div>

					<?php
					wp_nav_menu(
						array(
							'container_id'    => 'primary-menu',
							'container_class' => 'text-2xl lg:text-base hidden text-theme-white lg:text-current text-center font-serif lg:font-sans lg:text-left px-4 pb-0 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
							'menu_class'      => 'lg:flex lg:-mx-4 tracking-wide',
							'theme_location'  => 'primary',
							'li_class'        => 'lg:mx-4',
							'fallback_cb'     => false,
						)
					);
					?>
				</div>

				<ul id="mobile-social-icons" class="hidden lg:hidden text-theme-green flex justify-center pb-6">
					<li class="mr-2">
						<a href="#">
							<span class="fa-stack small fa-2x">
  								<i class="fa-solid fa-circle fa-stack-2x"></i>
  								<i class="fab fa-facebook-f fa-stack-1x"></i>
							</span>
						</a>	
					<li>
					<li class="mr-2">
						<a href="#">
							<span class="fa-stack small fa-2x">
  								<i class="fa-solid fa-circle fa-stack-2x"></i>
  								<i class="fab fa-linkedin-in fa-stack-1x"></i>
							</span>
						</a>	
					<li>
					<li class="mr-2">
						<a href="#">
							<span class="fa-stack small fa-2x">
  								<i class="fa-solid fa-circle fa-stack-2x"></i>
  								<i class="fab fa-x-twitter fa-stack-1x"></i>
							</span>
						</a>	
					<li>
				</ul>
			</div>
		</div>
	</header>

	<div id="content" class="site-content flex-grow">

		<?php do_action( 'tailpress_content_start' ); ?>

		<main>
