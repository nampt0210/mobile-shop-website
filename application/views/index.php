<?php $this->load->library('cart'); ?>

	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(<?= base_url() ?>assets/frontend/images/iphone-xs-gallery-2018-3.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">A new Online Shop experience.</div>
										<div class="home_slider_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</div>
										<div class="button button_light home_button"><a href="#">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(<?= base_url() ?>assets/frontend/images/iphone-xs-gallery-2018-5.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">A new Online Shop experience.</div>
										<div class="home_slider_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</div>
										<div class="button button_light home_button"><a href="#">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(<?= base_url() ?>assets/frontend/images/slide3.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">A new Online Shop experience.</div>
										<div class="home_slider_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</div>
										<div class="button button_light home_button"><a href="#">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Home Slider Dots -->
			
			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									<li class="home_slider_custom_dot active">01.</li>
									<li class="home_slider_custom_dot">02.</li>
									<li class="home_slider_custom_dot">03.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>	
			</div>

		</div>
	</div>

	<!-- Ads -->
	<br>
	<br>
	<br>
	<div class="avds">
		<div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
			<div class="avds_small">
				<div class="avds_background" style="background-image:url(<?= base_url() ?>assets/frontend/images/iphoneX.jpg)"></div>
				<div class="avds_small_inner">
					<div class="avds_discount_container">
						<img src="<?= base_url() ?>assets/frontend/images/discount.png" alt="">
						<div>
							<div class="avds_discount">
								<div>20<span>%</span></div>
								<div>Discount</div>
							</div>
						</div>
					</div>
					<div class="avds_small_content">
						<div class="avds_title">Iphone</div>
						<div class="avds_link"><a href="<?= base_url() ?>index.php/shop/showiphone">See More</a></div>
					</div>
				</div>
			</div>

			<div class="avds_large">
				<div class="avds_background" style="background-image:url(<?= base_url() ?>assets/frontend/images/ipad1.jpg)"></div>
				<div class="avds_large_container">
					<div class="avds_large_content">
						<div class="avds_title">Ipad</div>
						<!-- <div class="avds_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viver ra velit venenatis fermentum luctus.</div> -->
						<div class="avds_link avds_link_large"><a href="<?= base_url() ?>index.php/shop/showipad">See More</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Products -->

	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="product_grid">
						<h3>Iphone</h3>
						<!-- Product -->
					<!-- 	<?php foreach ($iphone as $value): ?>													
						<div class="product">
							<div class="product_image">
								<a href="<?= base_url() ?>index.php/shop/showProduct/<?= $value['id'] ?>">
								<img src="<?= base_url() ?>uploads/<?= $value['image'] ?>" alt="">
								</a>
							</div>
							
							<div class="product_content">
								<div class="product_title"><a href="<?= base_url() ?>index.php/shop/showProduct/<?= $value['id'] ?>"><?= $value['name'] ?></a></div>
								<div class="product_price"><?= $value['price'] ?></div>
							</div>
						</div>
						<?php endforeach ?>
 -->						
				<!-- <div class="product_extra product_new"><a href="categories.html">New</a></div> -->
						
				

					</div>
					<!-- Product -->	
				</div>
			</div>
		</div>
	</div>

	<!-- Ad -->

	<div class="avds_xl">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="avds_xl_container clearfix">
						<div class="avds_xl_background" style="background-image:url(<?= base_url() ?>assets/frontend/images/macbook2.jpg)">							
						</div>
						<div class="avds_xl_content">
							<div class="avds_title">Macbook</div>
							<!-- <div class="avds_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus.</div> -->
							<div class="avds_link avds_xl_link"><a href="<?= base_url() ?>index.php/shop/showmacbook">See More</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br><br><br><br>
	<div class="avds">
		<div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
			<div class="avds_small">
				<div class="avds_background" style="background-image:url(<?= base_url() ?>assets/frontend/images/apple_watch.jpg)"></div>
				<div class="avds_small_inner">
					<div class="avds_discount_container">
						<img src="<?= base_url() ?>assets/frontend/images/discount.png" alt="">
						<div>
							<div class="avds_discount">
								<div>20<span>%</span></div>
								<div>Discount</div>
							</div>
						</div>
					</div>
					<div class="avds_small_content">
						<div class="avds_title">Apple watch</div>
						<div class="avds_link"><a href="<?= base_url() ?>index.php/shop/showApple_Watch">See More</a></div>
					</div>
				</div>
			</div>

			<div class="avds_large">
				<div class="avds_background" style="background-image:url(<?= base_url() ?>assets/frontend/images/imac1.jpg)"></div>
				<div class="avds_large_container">
					<div class="avds_large_content">
						<div class="avds_title">Imac-Mac Pro</div>
						<!-- <div class="avds_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viver ra velit venenatis fermentum luctus.</div> -->
						<div class="avds_link avds_link_large">
							<a href="<?= base_url() ?>index.php/shop/showImac_MacPro">See More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		



	</div>

	<!-- Icon Boxes -->

	<div class="icon_boxes">
		<div class="container">
			<div class="row icon_box_row">
				
				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="<?= base_url() ?>assets/frontend/images/icon_1.svg" alt=""></div>
						<div class="icon_box_title">Free Shipping Worldwide</div>
						<div class="icon_box_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="<?= base_url() ?>assets/frontend/images/icon_2.svg" alt=""></div>
						<div class="icon_box_title">Free Returns</div>
						<div class="icon_box_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="<?= base_url() ?>assets/frontend/images/icon_3.svg" alt=""></div>
						<div class="icon_box_title">24h Fast Support</div>
						<div class="icon_box_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_border"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="newsletter_content text-center">
						<div class="newsletter_title">Subscribe to our newsletter</div>
						<div class="newsletter_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros</p></div>
						<div class="newsletter_form_container">
							<form action="#" id="newsletter_form" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required">
								<button class="newsletter_button trans_200"><span>Subscribe</span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	
