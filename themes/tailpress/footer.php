
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer bg-dark-gray pt-12 pb-6" role="contentinfo">
	<?php do_action( 'tailpress_footer' ); ?>

	<div class="md:flex md:flex-row max-w-screen-lg justify-between m-auto py-12">
		<div class="container md:basis-1/4 text-theme-white">
			<a class="footer-logo mb-2 hidden md:block" href="/"><img src="/wp-content/uploads/2024/12/Logo.svg"></a>
			<a class="mb-2 uppercase hidden md:block" href="/"><p>Privacy Policy</p></a>
			<a class="mb-2 hidden uppercase md:block" href="/"><p>Transparency in Coverage</p></a>
		</div>
		<div class="md:hidden flex items-center">
			<a class="footer-logo mb-2 block" href="/"><img src="/wp-content/uploads/2024/12/Logo.svg"></a>
			<ul class="flex footer-badges">
				<li class="mr-2"><img src="/wp-content/uploads/2024/12/wheelchair.svg"></li>
				<li class="mr-6"><img src="/wp-content/uploads/2024/12/real_estate.svg"></li>
			</ul>
		</div>
		<div class="md:hidden my-4 text-theme-white">
				<p>&copy; <?php echo date_i18n( 'Y' );?>The content of this website is protected by applicable copyright laws RKWRESIDENTIAL | All Rights Reserved | Website Design by Agency FIFTY3</p>
		</div>
		<div class="md:hidden text-theme-white">
			<a class="uppercase mb-2 block" href="/"><p>Privacy Policy</p></a>
			<a class="uppercase mb-2 block" href="/"><p>Transparency in Coverage</p></a>
		</div>
		<div class="md:basis-2/3">
			<ul class="md:hidden footer-social-icons flex text-theme-white flex mt-4 pb-6">
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
			<div class="uppercase md:font-bold text-theme-white footer-menu-columns">
				<?php
					wp_nav_menu(
						array(
							'menu' => 'Footer Menu',
							'container_id'    => 'footer-menu',
							'container_class' => '',
							'menu_class'      => '',
							'theme_location'  => 'footer',
							'li_class'        => 'mb-2 md:mb-4',
							'fallback_cb'     => false,
						)
					);
					?>
				<ul class="hidden md:flex footer-social-icons flex text-theme-white mt-4 pb-6">
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

			<div class="hidden md:block container md:mx-auto my-4 text-theme-white">
				<span>&copy; <?php echo date_i18n( 'Y' );?></span>
				<span>The content of this website is protected by applicable copyright laws</span>
				<p>RKWRESIDENTIAL | All Rights Reserved | Website Design by Agency FIFTY3</p>
			</div>
		</div>
	</div>
	<ul class="hidden md:flex justify-end flex-row footer-badges">
		<li class="mr-2"><img src="/wp-content/uploads/2024/12/wheelchair.svg"></li>
		<li class="mr-6"><img src="/wp-content/uploads/2024/12/real_estate.svg"></li>
	</ul>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
