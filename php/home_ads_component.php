<!DOCTYPE html>
<html lang="it">
	<head>
		<?php require_once("../includes/meta.html"); ?>

		<title>Advertise component</title>

		<?php require_once("../includes/css.html"); ?>

		<!-- SPECIFIC CSS START HERE -->

		<!--generic CSS for Parsys Column container-->
		<link type="text/css" rel="stylesheet" href="../css/ucg_parsys_column.css"/>

		<!--specific CSS for Ads Component-->

		<link type="text/css" rel="stylesheet" href="../plugin/css/idangerous.swiper.css"/>
		<link type="text/css" rel="stylesheet" href="../css/ucg_ads_component.css"/>

		<!-- SPECIFIC CSS END HERE -->

		<link type="text/css" rel="stylesheet" href="../css/retina.css"/>

		<?php require_once("../includes/js.html"); ?>

		<!-- SPECIFIC JS START HERE -->

		<!--specific JS for Ads Component-->
		<script type="text/javascript" src="../plugin/js/idangerous.swiper.js"></script>
		<script type="text/javascript" src="../js/ucg_ads.js"></script>

		<!-- SPECIFIC JS END HERE -->
	</head>

	<body>
		<?php require_once("../includes/message.html"); ?>

		<?php require_once("../includes/header.html"); ?>

		<?php require_once("../includes/search.html"); ?>

		<div class="body-container-table">
			<div class="body-container-cell">
				<?php require_once("../includes/sidebar.html"); ?>
			</div>

			<div class="body-container-cell">
				<div id="mainContainer">
					<div class="mainContainer-wrapper">

						<!-- PAGE STARTS HERE -->

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- ADS -->
								<div class="panel ucg_ads">
									<div class="swiper-container">
										<div class="swiper-wrapper">
											<!--First Slide-->
											<div class="swiper-slide">
												<img alt="Swipe 1" src="../img/ads_swiper_champions.jpg">
												<div class="ucg_ads_content">
													<div class="ucg_ads_text white">
														<h3>Unicredit is the official Bank of the UEFA Champions League</h3>
														<h4></h4>
														<a class="internal" href="javascript:void(0);">Read more</a>
													</div>
												</div>
											</div>

											<!--Second Slide-->
											<div class="swiper-slide">
												<img alt="Swipe 2" src="../img/ads_swiper_foobar01.jpg">
												<div class="ucg_ads_content">
													<div class="ucg_ads_text white">
														<h3>Unicredit is the official Bank of the UEFA Champions League 1</h3>
														<h4></h4>
														<a class="external" href="http://www.unicreditgroup.eu" target="_blank">Visit our site</a>
													</div>
												</div>
											</div>

											<!--Third Slide-->
											<div class="swiper-slide">
												<img alt="Swipe 3" src="../img/ads_swiper_foobar02.jpg">
												<div class="ucg_ads_content">
													<div class="ucg_ads_text dark">
														<h3>Unicredit is the official Bank of the UEFA Champions League 2</h3>
														<h4></h4>
														<a class="video" href="https://www.youtube.com/user/UniCreditChannel" target="_self">Play video</a>
													</div>
												</div>
											</div>
											<!--Etc..-->
										</div>
									</div>
								</div>
								<!-- ADS -->
							</div>
						</div>

						<!-- PAGE ENDS HERE -->

						<?php require_once("../includes/footer.html"); ?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>