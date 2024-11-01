<style>
	.section {
		margin-left: -20px;
		margin-right: -20px;
		font-family: 'Raleway', sans-serif;
		overflow-x: hidden;
	}

	.section h1 {
		text-align: center;
		text-transform: uppercase;
		color: #808a97;
		font-size: 35px;
		font-weight: 700;
		line-height: normal;
		display: inline-block;
		width: 100%;
		margin: 50px 0 0;
	}

	.section ul {
		list-style-type: disc;
		padding-left: 15px;
	}

	.section:nth-child(even) {
		background-color: #fff;
	}

	.section:nth-child(odd) {
		background-color: #f1f1f1;
	}

	.section .section-title img {
		display: table-cell;
		vertical-align: middle;
		width: auto;
		margin-right: 15px;
	}

	.section h2,
	.section h3 {
		display: inline-block;
		vertical-align: middle;
		padding: 0;
		font-size: 24px;
		font-weight: 700;
		color: #808a97;
		text-transform: uppercase;
	}

	.section .section-title h2 {
		display: table-cell;
		vertical-align: middle;
		line-height: 25px;
	}

	.section-title {
		display: table;
	}

	.section h3 {
		font-size: 14px;
		line-height: 28px;
		margin-bottom: 0;
		display: block;
	}

	.section p {
		font-size: 13px;
		margin: 25px 0;
	}

	.section ul li {
		margin-bottom: 4px;
	}

	.landing-container {
		max-width: 750px;
		margin-left: auto;
		margin-right: auto;
		padding: 50px 0 30px;
	}

	.landing-container:after {
		display: block;
		clear: both;
		content: '';
	}

	.landing-container .col-1,
	.landing-container .col-2 {
		float: left;
		box-sizing: border-box;
		padding: 0 15px;
	}

	.landing-container .col-1 img {
		width: 100%;
	}

	.landing-container .col-1 {
		width: 55%;
	}

	.landing-container .col-2 {
		width: 45%;
	}

	.premium-cta {
		background-color: #808a97;
		color: #fff;
		border-radius: 6px;
		padding: 20px 15px;
	}

	.premium-cta:after {
		content: '';
		display: block;
		clear: both;
	}

	.premium-cta p {
		margin: 7px 0;
		font-size: 14px;
		font-weight: 500;
		display: inline-block;
		width: 60%;
	}

	.premium-cta a.button {
		border-radius: 6px;
		height: 60px;
		float: right;
		background: url(<?php echo YWRFD_ASSETS_URL?>/images/upgrade.png) #ff643f no-repeat 13px 13px;
		border-color: #ff643f;
		box-shadow: none;
		outline: none;
		color: #fff;
		position: relative;
		padding: 9px 50px 9px 70px;
	}

	.premium-cta a.button:hover,
	.premium-cta a.button:active,
	.premium-cta a.button:focus {
		color: #fff;
		background: url(<?php echo YWRFD_ASSETS_URL?>/images/upgrade.png) #971d00 no-repeat 13px 13px;
		border-color: #971d00;
		box-shadow: none;
		outline: none;
	}

	.premium-cta a.button:focus {
		top: 1px;
	}

	.premium-cta a.button span {
		line-height: 13px;
	}

	.premium-cta a.button .highlight {
		display: block;
		font-size: 20px;
		font-weight: 700;
		line-height: 20px;
	}

	.premium-cta .highlight {
		text-transform: uppercase;
		background: none;
		font-weight: 800;
		color: #fff;
	}

	.section.one {
		background: url(<?php echo YWRFD_ASSETS_URL ?>/images/01-bg.png) no-repeat #fff;
		background-position: 85% 75%;
	}

	.section.two {
		background: url(<?php echo YWRFD_ASSETS_URL ?>/images/02-bg.png) no-repeat #fff;
		background-position: 15% 100%;
	}

	.section.three {
		background: url(<?php echo YWRFD_ASSETS_URL ?>/images/03-bg.png) no-repeat #fff;
		background-position: 85% 75%;
	}

	.section.four {
		background: url(<?php echo YWRFD_ASSETS_URL ?>/images/04-bg.png) no-repeat #fff;
		background-position: 15% 100%;
	}

	.section.five {
		background: url(<?php echo YWRFD_ASSETS_URL ?>/images/05-bg.png) no-repeat #fff;
		background-position: 85% 75%;
	}

	.section.six {
		background: url(<?php echo YWRFD_ASSETS_URL ?>/images/06-bg.png) no-repeat #fff;
		background-position: 15% 100%;
	}

	.section.seven {
		background: url(<?php echo YWRFD_ASSETS_URL ?>/images/07-bg.png) no-repeat #fff;
		background-position: 85% 75%;
	}

	.section.eight {
		background: url(<?php echo YWRFD_ASSETS_URL ?>/images/08-bg.png) no-repeat #fff;
		background-position: 15% 100%;
	}

	.section.nine {
		background: url(<?php echo YWRFD_ASSETS_URL ?>/images/09-bg.png) no-repeat #fff;
		background-position: 85% 75%;
	}

	.section.ten {
		background: url(<?php echo YWRFD_ASSETS_URL ?>/images/10-bg.png) no-repeat #fff;
		background-position: 15% 100%;
	}

	@media (max-width: 768px) {
		.section {
			margin: 0
		}

		.premium-cta p {
			width: 100%;
		}

		.premium-cta {
			text-align: center;
		}

		.premium-cta a.button {
			float: none;
		}
	}

	@media (max-width: 480px) {
		.wrap {
			margin-right: 0;
		}

		.section {
			margin: 0;
		}

		.landing-container .col-1,
		.landing-container .col-2 {
			width: 100%;
			padding: 0 15px;
		}

		.section-odd .col-1 {
			float: left;
			margin-right: -100%;
		}

		.section-odd .col-2 {
			float: right;
			margin-top: 65%;
		}
	}

	@media (max-width: 320px) {
		.premium-cta a.button {
			padding: 9px 20px 9px 70px;
		}

		.section .section-title img {
			display: none;
		}
	}
</style>
<div class="landing">
	<div class="section section-cta section-odd">
		<div class="landing-container">
			<div class="premium-cta">
				<p>
					<?php echo sprintf( __( 'Upgrade to %1$spremium version%2$s of %1$sYITH WooCommerce Review for Discounts%2$s to benefit from all features!', 'yith-woocommerce-review-for-discounts' ), '<span class="highlight">', '</span>' ); ?>
				</p>
				<a href="<?php echo $this->get_premium_landing_uri() ?>" target="_blank"
				   class="premium-cta-button button btn">
					<span class="highlight"><?php _e( 'UPGRADE', 'yith-woocommerce-review-for-discounts' ); ?></span>
					<span><?php _e( 'to the premium version', 'yith-woocommerce-review-for-discounts' ); ?></span>
				</a>
			</div>
		</div>
	</div>
	<div class="one section section-even clear">
		<h1><?php _e( 'Premium Features', 'yith-woocommerce-review-for-discounts' ); ?></h1>

		<div class="landing-container">
			<div class="col-1">
				<img src="<?php echo YWRFD_ASSETS_URL ?>/images/01.png" alt="Feature 01" />
			</div>
			<div class="col-2">
				<div class="section-title">
					<img src="<?php echo YWRFD_ASSETS_URL ?>/images/01-icon.png" alt="icon 01" />

					<h2><?php _e( 'Single review', 'yith-woocommerce-review-for-discounts' ); ?></h2>
				</div>
				<p>
					<?php echo sprintf( __( ' Each customer who posts a review in the shop will be rewarded with a %1$sdiscount code%2$s sent by email to be used with a future purchase.', 'yith-woocommerce-review-for-discounts' ), '<b>', '</b>', '<br>' ); ?>
				</p>
			</div>
		</div>
	</div>
	<div class="two section section-odd clear">
		<div class="landing-container">
			<div class="col-2">
				<div class="section-title">
					<img src="<?php echo YWRFD_ASSETS_URL ?>/images/02-icon.png" alt="icon 02" />

					<h2><?php _e( 'No approval required', 'yith-woocommerce-review-for-discounts' ); ?></h2>
				</div>
				<p>
					<?php echo sprintf( __( 'To show your customers how much you trust them, you can award them even if their %1$sreviews have not been approved%2$s yet and send them the discount code.', 'yith-woocommerce-review-for-discounts' ), '<b>', '</b>' ); ?>
				</p>
			</div>
			<div class="col-1">
				<img src="<?php echo YWRFD_ASSETS_URL ?>/images/02.png" alt="feature 02" />
			</div>
		</div>
	</div>
	<div class="three section section-even clear">
		<div class="landing-container">
			<div class="col-1">
				<img src="<?php echo YWRFD_ASSETS_URL ?>/images/03.png" alt="Feature 03" />
			</div>
			<div class="col-2">
				<div class="section-title">
					<img src="<?php echo YWRFD_ASSETS_URL ?>/images/03-icon.png" alt="icon 03" />

					<h2><?php _e( 'Two or more reviews', 'yith-woocommerce-review-for-discounts' ); ?></h2>
				</div>
				<p>
					<?php echo sprintf( __( 'Customers will get the discount code only after reaching the amount of reviews you decide. You can automatically send %1$semails%2$s to your customers on a daily basis. This way, you can remind them of how many reviews are left to achieve the %1$srequired amount%2$s to get the discount.', 'yith-woocommerce-review-for-discounts' ), '<b>', '</b>', '<br>' ); ?>
				</p>
			</div>
		</div>
	</div>
	<div class="four section section-odd clear">
		<div class="landing-container">
			<div class="col-2">
				<div class="section-title">
					<img src="<?php echo YWRFD_ASSETS_URL ?>/images/04-icon.png" alt="icon 04" />

					<h2><?php _e( 'Unlimited type of coupons', 'yith-woocommerce-review-for-discounts' ); ?></h2>
				</div>
				<p>
					<?php echo sprintf( __( 'With the premium version you are free to create %1$scustomized coupons%2$s of different values based on the review posted by the customer.', 'yith-woocommerce-review-for-discounts' ), '<b>', '</b>' ); ?>
				</p>
			</div>
			<div class="col-1">
				<img src="<?php echo YWRFD_ASSETS_URL ?>/images/04.png" alt="Feature 04" />
			</div>
		</div>
	</div>
	<div class="five section section-even clear">
		<div class="landing-container">
			<div class="col-1">
				<img src="<?php echo YWRFD_ASSETS_URL ?>/images/05.png" alt="Feature 05" />
			</div>
			<div class="col-2">
				<div class="section-title">
					<img src="<?php echo YWRFD_ASSETS_URL ?>/images/05-icon.png" alt="icon 05" />

					<h2><?php _e( 'Products and categories', 'yith-woocommerce-review-for-discounts' ); ?></h2>
				</div>
				<p>
					<?php echo sprintf( __( 'The plugin allows selecting the %1$scategories%2$s or the single products on which you want to apply the discount code, so to spare you the trouble to apply it to all products in the shop one by one.', 'yith-woocommerce-review-for-discounts' ), '<b>', '</b>', '<br>' ) ?>
				</p>
			</div>
		</div>
	</div>
	<div class="six section section-odd clear">
		<div class="landing-container">
			<div class="col-2">
				<div class="section-title">
					<img src="<?php echo YWRFD_ASSETS_URL ?>/images/06-icon.png" alt="icon 06" />

					<h2><?php _e( 'Customized coupons', 'yith-woocommerce-review-for-discounts' ); ?></h2>
				</div>
				<p>
					<?php echo sprintf( __( 'For each coupon, %1$sYITH Review for Discounts%2$s gives you the chance to set up the price, the validity, possible restrictions on products and the minimum and maximum total sum to obtain the discount.', 'yith-woocommerce-review-for-discounts' ), '<b>', '</b>' ); ?>
				</p>
			</div>
			<div class="col-1">
				<img src="<?php echo YWRFD_ASSETS_URL ?>/images/06.png" alt="Feature 06" />
			</div>
		</div>
	</div>
	<div class="seven section section-even clear">
		<div class="landing-container">
			<div class="col-1">
				<img src="<?php echo YWRFD_ASSETS_URL ?>/images/07.png" alt="Feature 07" />
			</div>
			<div class="col-2">
				<div class="section-title">
					<img src="<?php echo YWRFD_ASSETS_URL ?>/images/07-icon.png" alt="icon 07" />

					<h2><?php _e( 'Deleting coupons', 'yith-woocommerce-review-for-discounts' ); ?></h2>
				</div>
				<p>
					<?php echo sprintf( __( 'All the %1$sexpired%2$s or %1$sused%2$s coupons can be deleted by this plugin. You can delete them automatically or manually.', 'yith-woocommerce-review-for-discounts' ), '<b>', '</b>' ) ?>
				</p>
			</div>
		</div>
	</div>
	<div class="eight section section-odd clear">
		<div class="landing-container">
			<div class="col-2">
				<div class="section-title">
					<img src="<?php echo YWRFD_ASSETS_URL ?>/images/08-icon.png" alt="icon 08" />

					<h2><?php _e( 'Customizable emails', 'yith-woocommerce-review-for-discounts' ); ?></h2>
				</div>
				<p>
					<?php echo sprintf( __( 'Email content can be customized to meet your needs. Editing %1$semails%2$s will be easy, with no need to code anything!', 'yith-woocommerce-review-for-discounts' ), '<b>', '</b>' ); ?>
				</p>
			</div>
			<div class="col-1">
				<img src="<?php echo YWRFD_ASSETS_URL ?>/images/08.png" alt="Feature 08" />
			</div>
		</div>
	</div>
	<div class="nine section section-even clear">
		<div class="landing-container">
			<div class="col-1">
				<img src="<?php echo YWRFD_ASSETS_URL ?>/images/09.png" alt="Feature 09" />
			</div>
			<div class="col-2">
				<div class="section-title">
					<img src="<?php echo YWRFD_ASSETS_URL ?>/images/09-icon.png" alt="icon 09" />

					<h2><?php _e( 'Approaching requested quantity email', 'yith-woocommerce-review-for-discounts' ); ?></h2>
				</div>
				<p>
					<?php echo sprintf( __( 'After inserting a new review, a %1$sstrategic email%2$s will be sent until they reach that quantity.', 'yith-woocommerce-review-for-discounts' ), '<b>', '</b>' ) ?>
				</p>
				<p>
					<?php echo sprintf( __( 'After inserting a new review, a %1$sstrategic email%2$s will be sent until they reach that quantity.', 'yith-woocommerce-review-for-discounts' ), '<b>', '</b>' ) ?>
				</p>
			</div>
		</div>
	</div>
	<div class="ten section section-odd clear">
		<div class="landing-container">
			<div class="col-2">
				<div class="section-title">
					<img src="<?php echo YWRFD_ASSETS_URL ?>/images/10-icon.png" alt="icon 10" />

					<h2><?php _e( 'Mandrill', 'yith-woocommerce-review-for-discounts' ); ?></h2>
				</div>
				<p>
					<?php echo sprintf( __( 'This plugin works perfectly with %1$sMandrill%2$s email system. It is possible to organize the emails to send directly from Mandrill account for an easy and efficient optimization of the work.', 'yith-woocommerce-review-for-discounts' ), '<b>', '</b>' ); ?>
				</p>
			</div>
			<div class="col-1">
				<img src="<?php echo YWRFD_ASSETS_URL ?>/images/10.png" alt="Feature 10" />
			</div>
		</div>
	</div>
	<div class="section section-cta section-odd">
		<div class="landing-container">
			<div class="premium-cta">
				<p>
					<?php echo sprintf( __( 'Upgrade to %1$spremium version%2$s of %1$sYITH WooCommerce Review for Discounts%2$s to benefit from all features!', 'yith-woocommerce-review-for-discounts' ), '<span class="highlight">', '</span>' ); ?>
				</p>
				<a href="<?php echo $this->get_premium_landing_uri() ?>" target="_blank"
				   class="premium-cta-button button btn">
					<span class="highlight"><?php _e( 'UPGRADE', 'yith-woocommerce-review-for-discounts' ); ?></span>
					<span><?php _e( 'to the premium version', 'yith-woocommerce-review-for-discounts' ); ?></span>
				</a>
			</div>
		</div>
	</div>
</div>