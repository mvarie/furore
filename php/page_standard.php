<!DOCTYPE html>
<html lang="it">
	<head>
		<?php require_once("../includes/meta.html"); ?>

		<title>Page standard</title>

		<?php require_once("../includes/css.html"); ?>

		<!-- SPECIFIC CSS START HERE -->

		<!--generic CSS for Parsys Column container-->
		<link type="text/css" rel="stylesheet" href="../css/ucg_parsys_column.css"/>

		<!-- BREADCRUMB COMPONENT -->
		<link type="text/css" rel="stylesheet" href="../css/ucg_breadcrumb.css"/>
		<link type="text/css" rel="stylesheet" href="../css/ucg_breadcrumb_links.css"/>
		<link type="text/css" rel="stylesheet" href="../css/ucg_sharing.css"/>
		<!-- TITLE COMPONENT -->
		<link type="text/css" rel="stylesheet" href="../css/ucg_title_component.css"/>
		<!-- SPACER COMPONENT -->
		<link type="text/css" rel="stylesheet" href="../css/ucg_spacer.css"/>
		<!-- TEXT COMPONENT -->
		<link type="text/css" rel="stylesheet" href="../css/ucg_text_component.css"/>
		<!-- IMAGE COMPONENT -->
		<link type="text/css" rel="stylesheet" href="../css/ucg_image_component.css"/>
		<!-- IMAGE TEXT COMPONENT -->
		<link type="text/css" rel="stylesheet" href="../css/ucg_image_text_component.css"/>
		<!-- VIDEO TEXT COMPONENT -->
		<link type="text/css" rel="stylesheet" href="../css/videoplayer.css"/>
		<link type="text/css" rel="stylesheet" href="../css/ucg_video_text_component.css"/>
		<!-- LINKLIST COMPONENT -->
		<link type="text/css" rel="stylesheet" href="../css/ucg_link_component.css"/>
		<!-- HORIZONTAL LINE COMPONENT -->
		<link type="text/css" rel="stylesheet" href="../css/ucg_horizontal_line_component.css"/>
		<!-- BUTTON COMPONENT -->
		<link type="text/css" rel="stylesheet" href="../css/ucg_button_component.css"/>
		<!-- BACK BUTTON COMPONENT -->
		<link type="text/css" rel="stylesheet" href="../css/ucg_back_button_component.css"/>
		<!-- INFOGRAFIC COMPONENT -->
		<link type="text/css" rel="stylesheet" href="../css/ucg_infografic_component.css"/>
		<!-- QUOTE COMPONENT -->
		<link type="text/css" rel="stylesheet" href="../css/ucg_quote_component.css"/>
		<!-- SOCIAL + SOCIAL FOOTER COMPONENTS -->
		<link type="text/css" rel="stylesheet" href="../css/ucg_social.css"/>
		<!-- TAB COMPONENT -->
		<link type="text/css" rel="stylesheet" href="../plugin/css/chosen.min.css">
		<link type="text/css" rel="stylesheet" href="../css/ucg_tab_component.css"/>
		<!-- ACCORDION COMPONENT -->
		<link type="text/css" rel="stylesheet" href="../css/ucg_accordion_component.css"/>
		<!-- FOOTNOTE COMPONENT -->
		<link type="text/css" rel="stylesheet" href="../css/ucg_footnote_component.css"/>
		<!-- TABLE COMPONENT -->
		<link type="text/css" rel="stylesheet" href="../css/ucg_table_component.css"/>

		<!-- SPECIFIC CSS END HERE -->

		<link type="text/css" rel="stylesheet" href="../css/retina.css"/>

		<?php require_once("../includes/js.html"); ?>

		<!-- SPECIFIC JS START HERE -->

		<!-- TITLE COMPONENT -->
		<script type="text/javascript" src="../js/ucg_title.js"></script>
		<!-- BREADCRUMB COMPONENT -->
		<script type="text/javascript" src="../js/ucg_sharing.js"></script>
		<!-- SPACER COMPONENT -->
		<script type="text/javascript" src="../js/ucg_spacer.js"></script>
		<!-- VIDEO TEXT COMPONENT -->
		<script type="text/javascript" src="../js/videoplayer.js"></script>
		<!-- TAB COMPONENT -->
		<script type="text/javascript" src="../plugin/js/chosen.patched.jquery.js"></script>
		<script type="text/javascript" src="../js/ucg_tab_component.js"></script>
		<!-- ACCORDION COMPONENT -->
		<script type="text/javascript" src="../js/ucg_accordion_component.js"></script>
		<!-- FOOTNOTE COMPONENT -->
		<script type="text/javascript" src="../js/ucg_footnote.js"></script>
		<!-- TABLE COMPONENT -->
		<script type="text/javascript" src="../plugin/js/doT.min.js"></script>
		<script type="text/javascript" src="../js/ucg_table.js"></script>

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

						<!-- Modal for videoplayer -->
						<div class="ucg_videoplayer_container">
							<div class="ucg_videoplayer modal fade" tabindex="-1" role="dialog" aria-labelledby="ucg_videoplayer" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="modal-body">
											<iframe width="480" height="320" src="" frameborder="0" allowfullscreen></iframe>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /End Modal -->

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- BREADCRUMB -->
								<div class="panel ucg_breadcrumb">
									<div class="container">
										<div class="panel ucg_breadcrumb_crumbs col-xs-12">
											<div class="container">
												<ul>
													<li><a href="javascript:void(0);">Breadcrum first level</a></li>
													<li><a href="javascript:void(0);">Second level</a></li>
													<li><a href="javascript:void(0);">Third level</a></li>
													<li>Fourth level</li>
												</ul>
											</div>
										</div>
										<div class="panel ucg_breadcrumb_addon">
											<div class="container">
												<!-- BUTTONS -->
												<div class="ucg_breadcrumb_links col-xs-12">
													<a class="second-crosslink" href="javascript:void(0);">Second crosslink</a>
													<a class="first-crosslink" href="javascript:void(0);">First crosslink</a>
												</div>
												<!-- /END BUTTONS -->
												<!-- SHARING -->
												<div class="ucg_breadcrumb_sharing col-xs-12">
													<div class="icon collapsed">
														<a href="javascript:void(0);" data-target=".ucg_breadcrumb_sharing_panel.collapse" data-toggle="collapse">Share</a>
													</div>
												</div>
												<!-- /END SHARING -->
											</div>
										</div>
										<div class="clear"></div>
									</div>
									<!-- SHARING COLLAPSABLE-->
									<div class="panel panel-collapse ucg_breadcrumb_sharing_panel collapse">
										<div class="container">
											<div class="arrows">
												<img class="arrow-down" alt="Arrow Down" src="../img/static/breadcrumb-share-down-arrow.png">
											</div>
											<div class="col-xs-12 col-sm-4 col-md-3 left">
												<h2>Share this event on:</h2>
											</div>
											<div class="col-xs-12 col-sm-7 col-md-8">
												<ul>
													<li class="col-xs-6"><a href="javascript:void(0);" class="facebook">Facebook</a></li>
													<li class="col-xs-6"><a href="javascript:void(0);" class="twitter">Twitter</a></li>
													<li class="col-xs-6"><a href="javascript:void(0);" class="linkedin">LinkedIn</a></li>
													<li class="col-xs-6"><a href="javascript:void(0);" class="googleplus">Google +</a></li>
												</ul>
											</div>
											<div class="closer hidden-xs">
												<a href="javascript:void(0);" data-target=".ucg_breadcrumb_sharing_panel.collapse" data-toggle="collapse">
													<img alt="Cross" src="../img/static/breadcrumb-share-cross.png">
												</a>
											</div>
										</div>
									</div>
									<!-- /END SHARING COLLAPSABLE-->
								</div>
								<!-- /END BREADCRUMB -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- HORIZONTAL LINE -->
								<div class="ucg_horizontal_line">
									<div class="spacer1"></div>
									<div class="spacer2"></div>
								</div>
								<!-- /END HORIZONTAL LINE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="20" data-ucg-height="20"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- TITLE SEO -->
								<div class="panel ucg_seo_title">
									<div class="container">
										<h1 class="singlePage">Page Title</h1>
									</div>
								</div>
								<!-- /END TITLE SEO -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="20" data-ucg-height="20"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- HORIZONTAL LINE -->
								<div class="ucg_horizontal_line">
									<div class="spacer1"></div>
									<div class="spacer2"></div>
								</div>
								<!-- /END HORIZONTAL LINE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="30" data-ucg-height="33"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- IMAGE -->
								<div class="panel ucg_image">
									<div class="container">
										<div class="ucg_image_container">
											<img src="../img/cover_landscape_001.jpg" alt="">
										</div>
									</div>
								</div>
								<!-- /END IMAGE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="40" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- TITLE -->
								<div class="panel ucg_title">
									<div class="container">
										<div class="ucg_cols ucg_cols_text col-xs-12" style="width: 749px;">
											<div class="ucg_title_container">
												<h2>Standard text block - title</h2>
											</div>
											<div class="ucg_subtitle_container">
												<h4>Text block subtitle</h4>
											</div>
										</div>
										<div class="ucg_cols ucg_cols_image col-xs-12">
											<div class="ucg_title_image_container">
												<img data-ucg-width="165" data-ucg-height="68" alt="" src="../img/top_employer.png">
											</div>
										</div>
									</div>
								</div>
								<!-- /END TITLE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="30" data-ucg-height="30"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_txt">
											<p class="paragraphTitle"><b>The largest network in Central and Eastern Europe</b></p>
											<p>
												Austria<a class="apix">1</a> is one of the core markets of UniCredit Group, together with Germany, Italy and Central and Eastern Europe.<br>
												Within <b>UniCredit Group</b>, <a href="javascript:void(0);">Bank Austria</a> is responsible for all banking operations in the growth markets of Central and Eastern Europe (CEE), with the exception of Poland.
											</p>
											<ul>
												<li>82 per cent of large corporates;</li>
												<li>62 per cent of medium-sized companies;</li>
												<li>45 per cent of small businesses are customers of Bank Austria.</li>
											</ul>
											<p>
												Austria is one of the core markets of UniCredit Group<a class="apix">2</a>, together with <a class="ucg_ext_link" href="javascript:void(0);">Milan, Frankfurt and Warsaw regulated markets</a> Germany, Italy and Central and Eastern Europe.<br>
												Within <b>UniCredit Group</b>, Bank Austria is responsible for all banking operations in the growth markets of Central and Eastern Europe (CEE), with the exception of Poland.
											</p>
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- LINKLIST -->
								<div class="panel ucg_linklist">
									<div class="container">
										<ul class="ucg_link_container">
											<li class="ucg_internal_link">
												<a href="javascript:void(0);">Internal link</a>
											</li>
											<li class="ucg_external_link">
												<a href="javascript:void(0);">External link</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- /END LINKLIST -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="10" data-ucg-height="20"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- GENERIC BUTTONS -->
								<div class="panel ucg_button">
									<div class="container">
										<button title="Large" class="btn ucg_button_large">Option number one Large Button</button>
										<button title="Confirm" class="btn ucg_button_confirm">Confirm</button>
										<button title="Disabled" class="btn ucg_button disabled">Disabled</button>
									</div>
								</div>
								<!-- /END GENERIC BUTTONS -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="50" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- TITLE -->
								<div class="panel ucg_title underlined">
									<div class="container">
										<div class="ucg_title_image_container"></div>
										<div class="ucg_title_container">
											<h5>Download</h5>
										</div>
										<div class="ucg_subtitle_container"></div>
									</div>
								</div>
								<!-- /END TITLE -->
								<!-- SPACER -->
								<div class="ucg_spacer" data-ucg-height-mobile="15" data-ucg-height="15"></div>
								<!-- /END SPACER -->
								<!-- LINKLIST -->
								<div class="panel ucg_linklist">
									<div class="container">
										<ul class="ucg_link_container">
											<li class="ucg_download_link">
												<a href="javascript:void(0);"><b>PDF</b> | Press release - 2014 Comprehensive Assessment Results</a> (96kb)
											</li>
											<li class="ucg_download_link">
												<a href="javascript:void(0);"><b>PDF</b> | 2013 Consolidated Reports and Accounts</a> (301kb)
											</li>
											<li class="ucg_download_link">
												<a href="javascript:void(0);"><b>PDF</b> | Unicredit Spa 2013 Reports and Accounts</a> (150kb)
											</li>
											<li class="ucg_download_link">
												<a href="javascript:void(0);"><b>DOC</b> | Press release (Italian only)</a> (106kb)
											</li>
											<li class="ucg_download_link">
												<a href="javascript:void(0);"><b>MP3</b> | Download audio</a> (13.56Mb)
											</li>
											<li class="ucg_download_link">
												<a href="javascript:void(0);"><b>MP4</b> | Download video</a> (193Mb)
											</li>
											<li class="ucg_download_link">
												<a href="javascript:void(0);"><b>HTML</b> | Download file</a> (22kb)
											</li>
										</ul>
									</div>
								</div>
								<!-- /END LINKLIST -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="40" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- HORIZONTAL LINE -->
								<div class="ucg_horizontal_line">
									<div class="spacer1"></div>
									<div class="spacer2"></div>
								</div>
								<!-- /END HORIZONTAL LINE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="30" data-ucg-height="30"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- TITLE -->
								<div class="panel ucg_title ucg_no_image">
									<div class="container">
										<div class="ucg_cols ucg_cols_text col-xs-12">
											<div class="ucg_title_container">
												<h2>3 columns, image blocks - title</h2>
											</div>
											<div class="ucg_subtitle_container"><h4></h4></div>
										</div>
										<div class="ucg_cols ucg_cols_image col-xs-12">
											<div class="ucg_title_image_container"></div>
										</div>
									</div>
								</div>
								<!-- /END TITLE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="20" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys_column three-columns-box clearfix">
							<div class="parsys_column three-columns-box-c0">
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_img">
											<img src="../img/outdoor.png" alt="">
										</div>
										<div class="ucg_txt">
											<h3>Real-life banking</h3>
											<p>As a leading European bank, we make it easy for our customers to seize the opportunities and meet the challenges of real life.</p>
											<!-- LINKLIST -->
											<div class="panel ucg_linklist">
												<div class="container">
													<ul class="ucg_link_container">
														<li class="ucg_internal_link">
															<a href="javascript:void(0);">Learn more about our identity</a>
														</li>
													</ul>
												</div>
											</div>
											<!-- /END LINKLIST -->
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
							</div>
							<div class="parsys_column three-columns-box-c1">
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_img">
											<img src="../img/curriculum_vitae.png" alt="">
										</div>
										<div class="ucg_txt">
											<h3>Innovation</h3>
											<p>As a leading European bank, we make it easy for our customers to seize the opportunities and meet the challenges of real life.</p>
											<!-- LINKLIST -->
											<div class="panel ucg_linklist">
												<div class="container">
													<ul class="ucg_link_container">
														<li class="ucg_internal_link">
															<a href="javascript:void(0);">Innovation at Unicredit</a>
														</li>
													</ul>
												</div>
											</div>
											<!-- /END LINKLIST -->
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
							</div>
							<div class="parsys_column three-columns-box-c2">
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_img">
											<img src="../img/aula.png" alt="">
										</div>
										<div class="ucg_txt">
											<h3>Our business model</h3>
											<p>The UniCredit business model is based on global functions specialization, customers proximity, holding global coordination.</p>
											<!-- LINKLIST -->
											<div class="panel ucg_linklist">
												<div class="container">
													<ul class="ucg_link_container">
														<li class="ucg_internal_link">
															<a href="javascript:void(0);">Business model</a>
														</li>
													</ul>
												</div>
											</div>
											<!-- /END LINKLIST -->
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- TITLE -->
								<div class="panel ucg_title ucg_no_image">
									<div class="container">
										<div class="ucg_cols ucg_cols_text col-xs-12">
											<div class="ucg_title_container">
												<h2>3 columns, text only blocks - title</h2>
											</div>
											<div class="ucg_subtitle_container"><h4></h4></div>
										</div>
										<div class="ucg_cols ucg_cols_image col-xs-12">
											<div class="ucg_title_image_container"></div>
										</div>
									</div>
								</div>
								<!-- /END TITLE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="20" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys_column three-columns-box clearfix">
							<div class="parsys_column three-columns-box-c0">
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_txt">
											<h3>Real-life banking</h3>
											<p>As a leading European bank, we make it easy for our customers to seize the opportunities and meet the challenges of real life.</p>
											<!-- LINKLIST -->
											<div class="panel ucg_linklist">
												<div class="container">
													<ul class="ucg_link_container">
														<li class="ucg_internal_link">
															<a href="javascript:void(0);">Learn more about our identity</a>
														</li>
													</ul>
												</div>
											</div>
											<!-- /END LINKLIST -->
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
							</div>
							<div class="parsys_column three-columns-box-c1">
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_txt">
											<h3>Innovation</h3>
											<p>As a leading European bank, we make it easy for our customers to seize the opportunities and meet the challenges of real life.</p>
											<!-- LINKLIST -->
											<div class="panel ucg_linklist">
												<div class="container">
													<ul class="ucg_link_container">
														<li class="ucg_internal_link">
															<a href="javascript:void(0);">Innovation at Unicredit</a>
														</li>
													</ul>
												</div>
											</div>
											<!-- /END LINKLIST -->
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
							</div>
							<div class="parsys_column three-columns-box-c2">
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_txt">
											<h3>Our business model</h3>
											<p>The UniCredit business model is based on global functions specialization, customers proximity, holding global coordination.</p>
											<!-- LINKLIST -->
											<div class="panel ucg_linklist">
												<div class="container">
													<ul class="ucg_link_container">
														<li class="ucg_internal_link">
															<a href="javascript:void(0);">Business model</a>
														</li>
													</ul>
												</div>
											</div>
											<!-- /END LINKLIST -->
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="40" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- HORIZONTAL LINE -->
								<div class="ucg_horizontal_line">
									<div class="spacer1"></div>
									<div class="spacer2"></div>
								</div>
								<!-- /END HORIZONTAL LINE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="30" data-ucg-height="30"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- TITLE -->
								<div class="panel ucg_title ucg_no_image">
									<div class="container">
										<div class="ucg_cols ucg_cols_text col-xs-12">
											<div class="ucg_title_container">
												<h2>3 columns, mixed blocks - title</h2>
											</div>
											<div class="ucg_subtitle_container"><h4></h4></div>
										</div>
										<div class="ucg_cols ucg_cols_image col-xs-12">
											<div class="ucg_title_image_container"></div>
										</div>
									</div>
								</div>
								<!-- /END TITLE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="20" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys_column three-columns-box clearfix">
							<div class="parsys_column three-columns-box-c0">
								<!-- TEXT -->
								<div class="panel ucg_text">
									<div class="container">
										<div class="ucg_text_container">
											<p>Value and contribution of young talents are essential. UniCredit values power of collaboration and gives opportunity do grow and develop from the earliest stage of your career.</p>
										</div>
										<!-- LINKLIST -->
										<div class="panel ucg_linklist">
											<div class="container">
												<div class="ucg_link_container">
													<div class="ucg_link">
														<a href="javascript:void(0);">Students programs</a>
													</div>
													<div class="ucg_link">
														<a href="javascript:void(0);">Graduates programs</a>
													</div>
													<div class="ucg_link">
														<a href="javascript:void(0);">Cooperations and partnerships</a>
													</div>
												</div>
											</div>
										</div>
										<!-- /END LINKLIST -->
									</div>
								</div>
								<!-- /END TEXT -->
							</div>
							<div class="parsys_column three-columns-box-c1">
								<!-- VIDEO TEXT -->
								<div class="panel ucg_video_text">
									<div class="container">
										<div class="ucg_video">
											<a class="ucg_videoplayer_starter" href="javascript:void(0);" data-video="https://www.youtube.com/embed/j_kOGqFslos?autoplay=1&rel=0"></a>
											<img class="placeholder" src="../img/student_1.png" alt="Student Career" title="Student Career">
										</div>
										<div class="ucg_txt">
											<h3>INTERVIEW</h3>
											<p>Katerine, Commodity Research International Graduate Program</p>
										</div>
									</div>
								</div>
								<!-- /END VIDEO TEXT -->
							</div>
							<div class="parsys_column three-columns-box-c2">
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_img">
											<img src="../img/outdoor.png" alt="">
										</div>
										<div class="ucg_txt">
											<h3>Real-life banking</h3>
											<p>As a leading European bank, we make it easy for our customers to seize the opportunities and meet the challenges of real life.</p>
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- LINKLIST -->
								<div class="panel ucg_linklist">
									<div class="container">
										<div class="ucg_link_container">
											<div class="ucg_internal_link">
												<a href="javascript:void(0);">Apply now</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /END LINKLIST -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="40" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- HORIZONTAL LINE -->
								<div class="ucg_horizontal_line">
									<div class="spacer1"></div>
									<div class="spacer2"></div>
								</div>
								<!-- /END HORIZONTAL LINE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="30" data-ucg-height="30"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- TITLE -->
								<div class="panel ucg_title ucg_no_image">
									<div class="container">
										<div class="ucg_cols ucg_cols_text col-xs-12">
											<div class="ucg_title_container">
												<h2>2 columns grid title, small images - title</h2>
											</div>
											<div class="ucg_subtitle_container"><h4></h4></div>
										</div>
										<div class="ucg_cols ucg_cols_image col-xs-12">
											<div class="ucg_title_image_container"></div>
										</div>
									</div>
								</div>
								<!-- /END TITLE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="20" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys_column two-columns-box clearfix">
							<div class="parsys_column two-columns-box-c0">
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_img">
											<img src="../img/25_UNO_DomenicoDeMezzo_small.png" alt="">
										</div>
										<div class="ucg_txt">
											<h3>Our business model</h3>
											<p>The UniCredit business model is based on global functions specialization, customers proximity, holding global coordination.</p>
											<div class="panel ucg_linklist">
												<div class="container">
													<ul class="ucg_link_container">
														<li class="ucg_internal_link">
															<a href="javascript:void(0);">Business model</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
							</div>
							<div class="parsys_column two-columns-box-c1">
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_img">
											<img src="../img/01_All Around_Andrea_Corazza_small.png" alt="">
										</div>
										<div class="ucg_txt">
											<h3>Innovation</h3>
											<p>As a leading European bank, we make it easy for our customers to seize the opportunities and meet the challenges of real life.</p>
											<div class="panel ucg_linklist">
												<div class="container">
													<ul class="ucg_link_container">
														<li class="ucg_internal_link">
															<a href="javascript:void(0);">Innovation at Unicredit</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
							</div>
						</div>

						<div class="parsys_column two-columns-box clearfix">
							<div class="parsys_column two-columns-box-c0">
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_img">
											<img src="../img/inmovimento_saluzzigiacomo_small.png" alt="">
										</div>
										<div class="ucg_txt">
											<h3>Our business model</h3>
											<p>The UniCredit business model is based on global functions specialization, customers proximity, holding global coordination.</p>
											<div class="panel ucg_linklist">
												<div class="container">
													<ul class="ucg_link_container">
														<li class="ucg_internal_link">
															<a href="javascript:void(0);">Business model</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
							</div>
							<div class="parsys_column two-columns-box-c1">
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_img">
											<img src="../img/LOcchio_Ferreras_small.png" alt="">
										</div>
										<div class="ucg_txt">
											<h3>Innovation</h3>
											<p>As a leading European bank, we make it easy for our customers to seize the opportunities and meet the challenges of real life.</p>
											<div class="panel ucg_linklist">
												<div class="container">
													<ul class="ucg_link_container">
														<li class="ucg_internal_link">
															<a href="javascript:void(0);">Innovation at Unicredit</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="40" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- HORIZONTAL LINE -->
								<div class="ucg_horizontal_line">
									<div class="spacer1"></div>
									<div class="spacer2"></div>
								</div>
								<!-- /END HORIZONTAL LINE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="30" data-ucg-height="30"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- TITLE -->
								<div class="panel ucg_title ucg_no_image">
									<div class="container">
										<div class="ucg_cols ucg_cols_text col-xs-12">
											<div class="ucg_title_container">
												<h2>2 columns grid title, big images - title</h2>
											</div>
											<div class="ucg_subtitle_container"><h4></h4></div>
										</div>
										<div class="ucg_cols ucg_cols_image col-xs-12">
											<div class="ucg_title_image_container"></div>
										</div>
									</div>
								</div>
								<!-- /END TITLE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="20" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys_column two-columns-box clearfix">
							<div class="parsys_column two-columns-box-c0">
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_img">
											<img src="../img/25_UNO_DomenicoDeMezzo.png" alt="">
										</div>
										<div class="ucg_txt">
											<h3>Our business model</h3>
											<p>The UniCredit business model is based on global functions specialization, customers proximity, holding global coordination.</p>
											<div class="panel ucg_linklist">
												<div class="container">
													<ul class="ucg_link_container">
														<li class="ucg_internal_link">
															<a href="javascript:void(0);">Business model</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
							</div>
							<div class="parsys_column two-columns-box-c1">
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_img">
											<img src="../img/01_All Around_Andrea_Corazza.png" alt="">
										</div>
										<div class="ucg_txt">
											<h3>Innovation</h3>
											<p>As a leading European bank, we make it easy for our customers to seize the opportunities and meet the challenges of real life.</p>
											<div class="panel ucg_linklist">
												<div class="container">
													<ul class="ucg_link_container">
														<li class="ucg_internal_link">
															<a href="javascript:void(0);">Innovation at Unicredit</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
							</div>
						</div>

						<div class="parsys_column two-columns-box clearfix">
							<div class="parsys_column two-columns-box-c0">
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_img">
											<img src="../img/inmovimento_saluzzigiacomo.png" alt="">
										</div>
										<div class="ucg_txt">
											<h3>Our business model</h3>
											<p>The UniCredit business model is based on global functions specialization, customers proximity, holding global coordination.</p>
											<div class="panel ucg_linklist">
												<div class="container">
													<ul class="ucg_link_container">
														<li class="ucg_internal_link">
															<a href="javascript:void(0);">Business model</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
							</div>
							<div class="parsys_column two-columns-box-c1">
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_img">
											<img src="../img/LOcchio_Ferreras.png" alt="">
										</div>
										<div class="ucg_txt">
											<h3>Innovation</h3>
											<p>As a leading European bank, we make it easy for our customers to seize the opportunities and meet the challenges of real life.</p>
											<div class="panel ucg_linklist">
												<div class="container">
													<ul class="ucg_link_container">
														<li class="ucg_internal_link">
															<a href="javascript:void(0);">Innovation at Unicredit</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="40" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- HORIZONTAL LINE -->
								<div class="ucg_horizontal_line">
									<div class="spacer1"></div>
									<div class="spacer2"></div>
								</div>
								<!-- /END HORIZONTAL LINE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="30" data-ucg-height="30"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- TITLE -->
								<div class="panel ucg_title ucg_no_image">
									<div class="container">
										<div class="ucg_cols ucg_cols_text col-xs-12">
											<div class="ucg_title_container">
												<h2>1 column blocks list, small images - title</h2>
											</div>
											<div class="ucg_subtitle_container"><h4></h4></div>
										</div>
										<div class="ucg_cols ucg_cols_image col-xs-12">
											<div class="ucg_title_image_container"></div>
										</div>
									</div>
								</div>
								<!-- /END TITLE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="20" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_img">
											<img src="../img/25_UNO_DomenicoDeMezzo_small.png" alt="">
										</div>
										<div class="ucg_txt">
											<h3>Our business model</h3>
											<p>The UniCredit business model is based on global functions specialization, customers proximity, holding global coordination.</p>
											<div class="panel ucg_linklist">
												<div class="container">
													<ul class="ucg_link_container">
														<li class="ucg_internal_link">
															<a href="javascript:void(0);">Business model</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_img">
											<img src="../img/01_All Around_Andrea_Corazza_small.png" alt="">
										</div>
										<div class="ucg_txt">
											<h3>Innovation</h3>
											<p>As a leading European bank, we make it easy for our customers to seize the opportunities and meet the challenges of real life.</p>
											<div class="panel ucg_linklist">
												<div class="container">
													<ul class="ucg_link_container">
														<li class="ucg_internal_link">
															<a href="javascript:void(0);">Innovation at Unicredit</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_img">
											<img src="../img/inmovimento_saluzzigiacomo_small.png" alt="">
										</div>
										<div class="ucg_txt">
											<h3>Our business model</h3>
											<p>The UniCredit business model is based on global functions specialization, customers proximity, holding global coordination.</p>
											<div class="panel ucg_linklist">
												<div class="container">
													<ul class="ucg_link_container">
														<li class="ucg_internal_link">
															<a href="javascript:void(0);">Business model</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_img">
											<img src="../img/LOcchio_Ferreras_small.png" alt="">
										</div>
										<div class="ucg_txt">
											<h3>Innovation</h3>
											<p>As a leading European bank, we make it easy for our customers to seize the opportunities and meet the challenges of real life.</p>
											<div class="panel ucg_linklist">
												<div class="container">
													<ul class="ucg_link_container">
														<li class="ucg_internal_link">
															<a href="javascript:void(0);">Innovation at Unicredit</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="40" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- HORIZONTAL LINE -->
								<div class="ucg_horizontal_line">
									<div class="spacer1"></div>
									<div class="spacer2"></div>
								</div>
								<!-- /END HORIZONTAL LINE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="30" data-ucg-height="30"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- TITLE -->
								<div class="panel ucg_title ucg_no_image">
									<div class="container">
										<div class="ucg_cols ucg_cols_text col-xs-12">
											<div class="ucg_title_container">
												<h2>1 column blocks list, big images - title</h2>
											</div>
											<div class="ucg_subtitle_container"><h4></h4></div>
										</div>
										<div class="ucg_cols ucg_cols_image col-xs-12">
											<div class="ucg_title_image_container"></div>
										</div>
									</div>
								</div>
								<!-- /END TITLE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="20" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_img">
											<img src="../img/25_UNO_DomenicoDeMezzo.png" alt="">
										</div>
										<div class="ucg_txt">
											<h3>Our business model</h3>
											<p>The UniCredit business model is based on global functions specialization, customers proximity, holding global coordination.</p>
											<div class="panel ucg_linklist">
												<div class="container">
													<ul class="ucg_link_container">
														<li class="ucg_internal_link">
															<a href="javascript:void(0);">Business model</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_img">
											<img src="../img/01_All Around_Andrea_Corazza.png" alt="">
										</div>
										<div class="ucg_txt">
											<h3>Innovation</h3>
											<p>As a leading European bank, we make it easy for our customers to seize the opportunities and meet the challenges of real life.</p>
											<div class="panel ucg_linklist">
												<div class="container">
													<ul class="ucg_link_container">
														<li class="ucg_internal_link">
															<a href="javascript:void(0);">Innovation at Unicredit</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_img">
											<img src="../img/inmovimento_saluzzigiacomo.png" alt="">
										</div>
										<div class="ucg_txt">
											<h3>Our business model</h3>
											<p>The UniCredit business model is based on global functions specialization, customers proximity, holding global coordination.</p>
											<div class="panel ucg_linklist">
												<div class="container">
													<ul class="ucg_link_container">
														<li class="ucg_internal_link">
															<a href="javascript:void(0);">Business model</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_img">
											<img src="../img/LOcchio_Ferreras.png" alt="">
										</div>
										<div class="ucg_txt">
											<h3>Innovation</h3>
											<p>As a leading European bank, we make it easy for our customers to seize the opportunities and meet the challenges of real life.</p>
											<div class="panel ucg_linklist">
												<div class="container">
													<ul class="ucg_link_container">
														<li class="ucg_internal_link">
															<a href="javascript:void(0);">Innovation at Unicredit</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="40" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- HORIZONTAL LINE -->
								<div class="ucg_horizontal_line">
									<div class="spacer1"></div>
									<div class="spacer2"></div>
								</div>
								<!-- /END HORIZONTAL LINE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="30" data-ucg-height="30"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- TITLE -->
								<div class="panel ucg_title ucg_no_image">
									<div class="container">
										<div class="ucg_cols ucg_cols_text col-xs-12">
											<div class="ucg_title_container">
												<h2>Quotes section</h2>
											</div>
											<div class="ucg_subtitle_container">
												<h4>Quotes section intro</h4>
											</div>
										</div>
										<div class="ucg_cols ucg_cols_image col-xs-12">
											<div class="ucg_title_image_container"></div>
										</div>
									</div>
								</div>
								<!-- /END TITLE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="20" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys_column two-columns-box clearfix">
							<div class="parsys_column two-columns-box-c0">
								<!-- QUOTE -->
								<div class="panel ucg_quote">
									<div class="container">
										<div class="ucg_img_quote col-xs-4">
											<img src="../img/quote_1.png" alt="">
										</div>
										<div class="ucg_txt_quote col-xs-8">
											<p>"I suggest all job applicants to maintain an optimistic attitutde and mindset during the interview"</p>
											<p>-</p>
											<p class="ucg_reference"><b>Valentina, HR Managing Director</b></p>
											<p class="ucg_ref_nation">Italy</p>
										</div>
									</div>
								</div>
								<!-- /END QUOTE -->
							</div>
							<div class="parsys_column two-columns-box-c1">
								<!-- QUOTE -->
								<div class="panel ucg_quote">
									<div class="container">
										<div class="ucg_img_quote col-xs-4">
											<img src="../img/quote_2.png" alt="">
										</div>
										<div class="ucg_txt_quote col-xs-8">
											<p>"A good applicant should always ask questions to understand in advance his expectations and key responsabilities"</p>
											<p>-</p>
											<p class="ucg_reference"><b>Valerio, Banking Managing Director</b></p>
											<p class="ucg_ref_nation">Italy</p>
										</div>
									</div>
								</div>
								<!-- /END QUOTE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="40" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- HORIZONTAL LINE -->
								<div class="ucg_horizontal_line">
									<div class="spacer1"></div>
									<div class="spacer2"></div>
								</div>
								<!-- /END HORIZONTAL LINE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="30" data-ucg-height="30"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- TITLE -->
								<div class="panel ucg_title ucg_no_image">
									<div class="container">
										<div class="ucg_cols ucg_cols_text col-xs-12">
											<div class="ucg_title_container">
												<h2>Quotes section</h2>
											</div>
											<div class="ucg_subtitle_container">
												<h4>Quotes section intro</h4>
											</div>
										</div>
										<div class="ucg_cols ucg_cols_image col-xs-12">
											<div class="ucg_title_image_container"></div>
										</div>
									</div>
								</div>
								<!-- /END TITLE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="20" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- QUOTE -->
								<div class="panel ucg_quote">
									<div class="container">
										<div class="ucg_img_quote col-xs-4 col-sm-2">
											<img src="../img/quote_3.png" alt="">
										</div>
										<div class="ucg_txt_quote col-xs-8 col-sm-10">
											<p>"I suggest all job applicants to maintain an optimistic attitutde and mindset during the interview"</p>
											<p>-</p>
											<p class="ucg_reference"><b>Valentina, HR Managing Director</b></p>
											<p class="ucg_ref_nation">Italy</p>
										</div>
									</div>
								</div>
								<!-- /END QUOTE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="40" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- HORIZONTAL LINE -->
								<div class="ucg_horizontal_line">
									<div class="spacer1"></div>
									<div class="spacer2"></div>
								</div>
								<!-- /END HORIZONTAL LINE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="30" data-ucg-height="30"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- TITLE -->
								<div class="panel ucg_title ucg_no_image">
									<div class="container">
										<div class="ucg_cols ucg_cols_text col-xs-12">
											<div class="ucg_title_container">
												<h2>Infographic</h2>
											</div>
											<div class="ucg_subtitle_container">
												<h4>Infographics block intro we are the sum of different cultures and experiences which come from the banks and the companies that have joined our Group, starting from 1473. Learn why we are among the top Employers 2014 for the sixth consecutive year.</h4>
											</div>
										</div>
										<div class="ucg_cols ucg_cols_image col-xs-12">
											<div class="ucg_title_image_container"></div>
										</div>
									</div>
								</div>
								<!-- /END TITLE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="20" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- INFOGRAFIC COMPONENT -->
								<div class="panel ucg_infografic">
									<div class="parsys contentpagewelcome-parsys">
										<div class="section">
											<div class="panel ucg_infografic_container">
												<div class="container">
													<div class="ucg_infografic_text">
														<div class="title">Operating profit (loss)</div>
														<div class="value">2,145</div>
														<div class="title">Net profit (loss)<a class="apix">3</a></div>
														<div class="value">722</div>
														<div class="title">Shareholders' equity</div>
														<div class="value">51,357</div>
													</div>
													<div class="panel ucg_image">
														<div class="ucg_image_container">
															<img src="../img/ucg_infografic_type.png" alt="">
														</div>
													</div>
													<div class="panel ucg_image">
														<div class="ucg_image_container">
															<img src="../img/ucg_infografic_geopgraphicl.png" alt="">
														</div>
													</div>
												</div>
											</div>
											<!-- LINKLIST -->
											<div class="panel ucg_linklist">
												<div class="container">
													<ul class="ucg_link_container">
														<li class="ucg_internal_link">
															<a href="javascript:void(0);">Learn more about our Culture and our People</a>
														</li>
													</ul>
												</div>
											</div>
											<!-- /END LINKLIST -->
										</div>
									</div>
								</div>
								<!-- /END INFOGRAFIC COMPONENT -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="40" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- HORIZONTAL LINE -->
								<div class="ucg_horizontal_line">
									<div class="spacer1"></div>
									<div class="spacer2"></div>
								</div>
								<!-- /END HORIZONTAL LINE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="30" data-ucg-height="30"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- TITLE -->
								<div class="panel ucg_title ucg_no_image">
									<div class="container">
										<div class="ucg_cols ucg_cols_text col-xs-12">
											<div class="ucg_title_container">
												<h2>Tabs</h2>
											</div>
											<div class="ucg_subtitle_container"><h4></h4></div>
										</div>
										<div class="ucg_cols ucg_cols_image col-xs-12">
											<div class="ucg_title_image_container"></div>
										</div>
									</div>
								</div>
								<!-- /END TITLE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="20" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- TAB -->
								<div class="ucg_tab">
									<div class="panel hidden-xs tabs">
										<div class="container">
											<div class="tab active" data-tabpanel="tabPanelOne">
												<div class="tabHeader">
													<a href="javascript:void(0);">Tab One</a>
												</div>
											</div>
											<div class="tab" data-tabpanel="tabPanelTwo">
												<div class="tabHeader">
													<a href="javascript:void(0);">Tab Two</a>
												</div>
											</div>
											<div class="tab" data-tabpanel="tabPanelThree">
												<div class="tabHeader">
													<a href="javascript:void(0);">Tab Three</a>
												</div>
											</div>
											<div class="tab" data-tabpanel="tabPanelFour">
												<div class="tabHeader">
													<a href="javascript:void(0);">Tab Four</a>
												</div>
											</div>
										</div>
									</div>

									<div class="panel visible-xs dropdown">
										<div class="container">
											<div class="col-xs-12">
												<select name="tabPageStandard" class="chosen-select" data-placeholder="Select category">
													<option value="tabPanelOne" data-value="tabPanelOne">Tab One</option>
													<option value="tabPanelTwo" data-value="tabPanelTwo">Tab Two</option>
													<option value="tabPanelThree" data-value="tabPanelThree">Tab Three</option>
													<option value="tabPanelFour" data-value="tabPanelFour">Tab Four</option>
												</select>
											</div>
										</div>
									</div>

									<div class="panel tabsBody">
										<div class="container">
											<div class="tabPanel tabPanelOne selected">
												<div class="tabSection clearfix">
													<!-- IMAGE TEXT -->
													<div class="panel ucg_image_text">
														<div class="container">
															<div class="ucg_img">
																<img src="../img/25_UNO_DomenicoDeMezzo_small.png" alt="">
															</div>
															<div class="ucg_txt">
																<h3>Our business model</h3>
																<p>The UniCredit business model is based on global functions specialization, customers proximity, holding global coordination.</p>
																<div class="panel ucg_linklist">
																	<div class="container">
																		<ul class="ucg_link_container">
																			<li class="ucg_internal_link">
																				<a href="javascript:void(0);">Business model</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!-- /END IMAGE TEXT -->
												</div>
											</div>

											<div class="tabPanel tabPanelTwo">
												<div class="tabSection clearfix">
													<!-- IMAGE TEXT -->
													<div class="panel ucg_image_text">
														<div class="container">
															<div class="ucg_img">
																<img src="../img/01_All Around_Andrea_Corazza_small.png" alt="">
															</div>
															<div class="ucg_txt">
																<h3>Innovation</h3>
																<p>As a leading European bank, we make it easy for our customers to seize the opportunities and meet the challenges of real life.</p>
																<div class="panel ucg_linklist">
																	<div class="container">
																		<ul class="ucg_link_container">
																			<li class="ucg_internal_link">
																				<a href="javascript:void(0);">Innovation at Unicredit</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!-- /END IMAGE TEXT -->
												</div>
											</div>

											<div class="tabPanel tabPanelThree">
												<div class="tabSection clearfix">
													<!-- IMAGE TEXT -->
													<div class="panel ucg_image_text">
														<div class="container">
															<div class="ucg_img">
																<img src="../img/inmovimento_saluzzigiacomo_small.png" alt="">
															</div>
															<div class="ucg_txt">
																<h3>Our business model</h3>
																<p>The UniCredit business model is based on global functions specialization, customers proximity, holding global coordination.</p>
																<div class="panel ucg_linklist">
																	<div class="container">
																		<ul class="ucg_link_container">
																			<li class="ucg_internal_link">
																				<a href="javascript:void(0);">Business model</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!-- /END IMAGE TEXT -->
												</div>
											</div>

											<div class="tabPanel tabPanelFour">
												<div class="tabSection clearfix">
													<!-- IMAGE TEXT -->
													<div class="panel ucg_image_text">
														<div class="container">
															<div class="ucg_img">
																<img src="../img/LOcchio_Ferreras_small.png" alt="">
															</div>
															<div class="ucg_txt">
																<h3>Innovation</h3>
																<p>As a leading European bank, we make it easy for our customers to seize the opportunities and meet the challenges of real life.</p>
																<div class="panel ucg_linklist">
																	<div class="container">
																		<ul class="ucg_link_container">
																			<li class="ucg_internal_link">
																				<a href="javascript:void(0);">Innovation at Unicredit</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!-- /END IMAGE TEXT -->
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /END TAB -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="40" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- HORIZONTAL LINE -->
								<div class="ucg_horizontal_line">
									<div class="spacer1"></div>
									<div class="spacer2"></div>
								</div>
								<!-- /END HORIZONTAL LINE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="30" data-ucg-height="30"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- TITLE -->
								<div class="panel ucg_title ucg_no_image">
									<div class="container">
										<div class="ucg_cols ucg_cols_text col-xs-12">
											<div class="ucg_title_container">
												<h2>Tabs - 2 tabs only (still on mobile)</h2>
											</div>
											<div class="ucg_subtitle_container"><h4></h4></div>
										</div>
										<div class="ucg_cols ucg_cols_image col-xs-12">
											<div class="ucg_title_image_container"></div>
										</div>
									</div>
								</div>
								<!-- /END TITLE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="20" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- TAB -->
								<div class="ucg_tab">
									<div class="panel hidden-xs tabs">
										<div class="container">
											<div class="tab active" data-tabpanel="tabPanelOne">
												<div class="tabHeader">
													<a href="javascript:void(0);">Tab One</a>
												</div>
											</div>
											<div class="tab" data-tabpanel="tabPanelTwo">
												<div class="tabHeader">
													<a href="javascript:void(0);">Tab Two</a>
												</div>
											</div>
										</div>
									</div>

									<div class="panel visible-xs dropdown">
										<div class="container">
											<div class="col-xs-12">
												<select name="tabPageStandard" class="chosen-select" data-placeholder="Select category">
													<option value="tabPanelOne" data-value="tabPanelOne">Tab One</option>
													<option value="tabPanelTwo" data-value="tabPanelTwo">Tab Two</option>
												</select>
											</div>
										</div>
									</div>

									<div class="panel tabsBody">
										<div class="container">
											<div class="tabPanel tabPanelOne selected">
												<div class="tabSection clearfix">
													<!-- IMAGE TEXT -->
													<div class="panel ucg_image_text">
														<div class="container">
															<div class="ucg_img">
																<img src="../img/25_UNO_DomenicoDeMezzo_small.png" alt="">
															</div>
															<div class="ucg_txt">
																<h3>Our business model</h3>
																<p>The UniCredit business model is based on global functions specialization, customers proximity, holding global coordination.</p>
																<div class="panel ucg_linklist">
																	<div class="container">
																		<ul class="ucg_link_container">
																			<li class="ucg_internal_link">
																				<a href="javascript:void(0);">Business model</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!-- /END IMAGE TEXT -->
												</div>
											</div>

											<div class="tabPanel tabPanelTwo">
												<div class="tabSection clearfix">
													<!-- IMAGE TEXT -->
													<div class="panel ucg_image_text">
														<div class="container">
															<div class="ucg_img">
																<img src="../img/01_All Around_Andrea_Corazza_small.png" alt="">
															</div>
															<div class="ucg_txt">
																<h3>Innovation</h3>
																<p>As a leading European bank, we make it easy for our customers to seize the opportunities and meet the challenges of real life.</p>
																<div class="panel ucg_linklist">
																	<div class="container">
																		<ul class="ucg_link_container">
																			<li class="ucg_internal_link">
																				<a href="javascript:void(0);">Innovation at Unicredit</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!-- /END IMAGE TEXT -->
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /END TAB -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="40" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- HORIZONTAL LINE -->
								<div class="ucg_horizontal_line">
									<div class="spacer1"></div>
									<div class="spacer2"></div>
								</div>
								<!-- /END HORIZONTAL LINE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="30" data-ucg-height="30"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- TITLE -->
								<div class="panel ucg_title ucg_no_image">
									<div class="container">
										<div class="ucg_cols ucg_cols_text col-xs-12">
											<div class="ucg_title_container">
												<h2>Accordion</h2>
											</div>
											<div class="ucg_subtitle_container"><h4></h4></div>
										</div>
										<div class="ucg_cols ucg_cols_image col-xs-12">
											<div class="ucg_title_image_container"></div>
										</div>
									</div>
								</div>
								<!-- /END TITLE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="20" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- ACCORDION -->
								<div class="ucg_accordion panel">
									<div class="container">
										<div class="collapsed accordionPanel accordionPanelOne">
											<div class="elementTitle">
												Company Info
												<span class="arrow"></span>
											</div>
											<div class="collapse clearfix">
												<div class="elementsContainer col-sm-12">
													<div class="panel ucg_text">
														<div class="container">
															<div class="ucg_text_container">
																<p>
																	<b>Business category:</b> Consumer and SME Banking, Corporate and Investments banking<br>
																	<b>Type:</b> Representative office
																</p>
																<p class="paragraphTitle"><b>Market leader in Austria</b></p>
																<p>
																	With total assets of EUR 220.8 billion and market shares ranging from 20 to 65 per cent, Bank Austria is by far the largest bank in Austria.<br>
																	As far as Austrian companies are concerned, Bank Austria is the main banker for:
																</p>
																<ul>
																	<li>82 per cent of large corporates;</li>
																	<li>62 per cent of medium-sized companies;</li>
																	<li>45 per cent of small businesses are customers of Bank Austria.</li>
																</ul>
																<p>
																	As a modern universal bank, it provides its customers with access to financial markets. The bank operates a network of more than 360 branch offices within Austria, with a total of 11,000 employees
																</p>
																<p class="paragraphTitle"><b>The largest network in Central and Eastern Europe</b></p>
																<p>
																	Austria is one of the core markets of UniCredit Group, together with Germany, Italy and Central and Eastern Europe.<br>
																	Within UniCredit Group, Bank Austria is responsible for all banking operations in the growth markets of Central and Eastern Europe (CEE), with the exception of Poland.<br>
																	Vienna is thus the controls centre for a network stretching from the Baltic to the Black Sea and from Hungary to the Chinese border.<br>
																	Our values Our common basic values are enshrined in the Integrity Charter. These values reflect our corporate philosophy, which determines our actions and behav- iour.
																</p>
																<p class="paragraphTitle"><b>History</b></p>
																<p>
																	Bank Austria was created by the merger of Austria's leading banks with a long- standing tradition, the "k.k. privilegirte Oesterreichische Credit-Anstalt für Handel und Gewerbe" (founded in 1855), the "k.k. privilegierte Oesterreichische Laender- bank" (founded in 1880) and the "Zentral-Sparkasse der Gemeinde Wien" (founded in 1905).<br>
																	Bank Austria has been a member of UniCredit Group since November 2005.
																</p>
																<p class="paragraphTitle"><b>Recognised excellence</b></p>
																<p>
																	In the past years, Bank Austria has received more than 250 awards from renowned international financial magazines in recognition of its achievements. Euromoney and The Banker have repeatedly named Bank Austria "Best Bank" and "Bank of the Year". Numerous awards have also been given to Bank Austria in the fields of custody, trade finance, project finance and foreign exchange, and to Bank Austria's CEE subsidiaries.
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="collapsed accordionPanel accordionPanelTwo">
											<div class="elementTitle">
												Press release download links
												<span class="arrow"></span>
											</div>
											<div class="collapse clearfix">
												<div class="elementsContainer col-sm-12">
													<div class="panel ucg_title underlined">
														<div class="container">
															<div class="ucg_title_image_container"></div>
															<div class="ucg_title_container">
																<h5>Download</h5>
															</div>
															<div class="ucg_subtitle_container"></div>
														</div>
													</div>
													<div class="panel ucg_linklist">
														<div class="container">
															<ul class="ucg_link_container">
																<li class="ucg_download_link">
																	<a href="javascript:void(0);"><b>PDF</b> | Press release - 2014 Comprehensive Assessment Results</a> (96kb)
																</li>
																<li class="ucg_download_link">
																	<a href="javascript:void(0);"><b>PDF</b> | 2013 Consolidated Reports and Accounts</a> (301kb)
																</li>
																<li class="ucg_download_link">
																	<a href="javascript:void(0);"><b>PDF</b> | Unicredit Spa 2013 Reports and Accounts</a> (150kb)
																</li>
																<li class="ucg_download_link">
																	<a href="javascript:void(0);"><b>DOC</b> | Press release (Italian only)</a> (106kb)
																</li>
																<li class="ucg_download_link">
																	<a href="javascript:void(0);"><b>MP3</b> | Download audio</a> (13.56Mb)
																</li>
																<li class="ucg_download_link">
																	<a href="javascript:void(0);"><b>MP4</b> | Download video</a> (193Mb)
																</li>
																<li class="ucg_download_link">
																	<a href="javascript:void(0);"><b>HTML</b> | Download file</a> (22kb)
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="collapsed accordionPanel accordionPanelThree">
											<div class="elementTitle">
												Latest Press Release
												<span class="arrow"></span>
											</div>
											<div class="collapse clearfix">
												<div class="elementsContainer col-sm-12">
													<div class="panel ucg_video_text">
														<div class="container">
															<div class="ucg_video">
																<a class="ucg_videoplayer_starter" href="javascript:void(0);" data-video="https://www.youtube.com/embed/j_kOGqFslos?autoplay=1"></a>
																<img class="placeholder" src="../img/press_and_news.png" alt="Press and news" title="Press and news">
															</div>
															<div class="ucg_txt">
																<h3>Celebrating Christmas with UniCredit's Light-Covered Art in Milan</h3>
																<p>UniCredit will help celebrate Christmas at Milan's Gae Aulenti Square from December 6 to January 6 by erecting a Christmas tree sculpture that spells "Best Wishes" in all of our Group's languages and by lighting the spire of UniCredit Tower ...</p>
																<div class="panel ucg_linklist">
																	<div class="container">
																		<ul class="ucg_link_container">
																			<li class="ucg_link">
																				<a href="javascript:void(0);">Read more</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="collapsed accordionPanel accordionPanelFour">
											<div class="elementTitle">
												Contacts
												<span class="arrow"></span>
											</div>
											<div class="collapse clearfix">
												<div class="elementsContainer col-sm-8">
													<div class="panel ucg_image_text">
														<div class="container">
															<div class="ucg_img">
																<img src="../img/DISTORSIONI_MOLASCHI.png" alt="">
															</div>
															<div class="ucg_txt">
																<h3>Innovation</h3>
																<p>As a leading European bank, we make it easy for our customers to seize the opportunities and meet the challenges of real life.</p>
															</div>
														</div>
													</div>
													<div class="panel ucg_linklist">
														<div class="container">
															<ul class="ucg_link_container">
																<li class="ucg_internal_link">
																	<a href="javascript:void(0);">Innovation at Unicredit</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="elementsContainer col-sm-4">
													<div class="panel ucg_title">
														<div class="container">
															<div class="ucg_title_text_container">
																<div class="ucg_title_container">
																	<h2>Contacts</h2>
																</div>
																<div class="ucg_subtitle"><h4></h4></div>
															</div>
															<div class="ucg_title_image_container"></div>
														</div>
													</div>
													<div class="panel ucg_text">
														<div class="container">
															<div class="ucg_text_container">
																<p>Media relations<br>
																	Fax: +39 02 8862 2802<br>
																	<a href="mailto:mediarelations@unicredit.eu" class="ucg_mail">mediarelations@unicredit.eu</a>
																</p>
																<div class="panel ucg_linklist">
																	<div class="container">
																		<ul class="ucg_link_container">
																			<li class="ucg_internal_link">
																				<a href="#">Read the latest issue</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /END ACCORDION -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="60" data-ucg-height="50"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- HORIZONTAL LINE -->
								<div class="ucg_horizontal_line">
									<div class="spacer1"></div>
									<div class="spacer2"></div>
								</div>
								<!-- /END HORIZONTAL LINE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="30" data-ucg-height="30"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- TITLE -->
								<div class="panel ucg_title ucg_no_image">
									<div class="container">
										<div class="ucg_cols ucg_cols_text col-xs-12">
											<div class="ucg_title_container">
												<h2>Lists</h2>
											</div>
											<div class="ucg_subtitle_container"><h4></h4></div>
										</div>
										<div class="ucg_cols ucg_cols_image col-xs-12">
											<div class="ucg_title_image_container"></div>
										</div>
									</div>
								</div>
								<!-- /END TITLE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="20" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_txt">
											<p class="paragraphTitle"><b>Ordered list title</b></p>
											<p>
												UniCredit's overall <b>Corporate Governance framework</b> - i.e. the system of rules and procedures that its corporate bodies refer to to direct the principles of their behaviour and fulfil their various <a href="javascript:void(0);" class="ucg_link">responsibilities</a> towards its stakeholders - has been built up in compliance with all applicable laws and in light of the recommendations set forth in the Corporate Governance Code for listed companies.
											</p>
											<ol>
												<li>
													<p class="ItemTitle">Item title</p>
													<p>The system of rules and procedures that its corporate bodies refer to to direct the principles of their behaviour and fulfil their various responsibilities towards its stakeholders - has been built up in compliance with all applicable laws.</p>
												</li>
												<li>
													<p class="ItemTitle">Item title</p>
													<p>The system of rules and procedures that its corporate bodies refer to to direct the principles of their behaviour and fulfil their various responsibilities towards its stakeholders - has been built up in compliance with all applicable laws.</p>
												</li>
												<li>
													<p class="ItemTitle">Item title</p>
													<p>The system of rules and procedures that its corporate bodies refer to to direct the principles of their behaviour and fulfil their various responsibilities towards its stakeholders - has been built up in compliance with all applicable laws.</p>
												</li>
											</ol>
											<p>
												UniCredit, as issuer of shares listed on the <a href="javascript:void(0);" class="ucg_ext_link">Milan, Frankfurt and Warsaw regulated markets</a>, fulfils the legal and regulatory obligations related to listings on said markets.
											</p>
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="20" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_txt">
											<p class="paragraphTitle"><b>Unordered list title</b></p>
											<p>
												UniCredit's overall <b>Corporate Governance framework</b> - i.e. the system of rules and procedures that its corporate bodies refer to to direct the principles of their behaviour and fulfil their various <a href="javascript:void(0);" class="ucg_link">responsibilities</a> towards its stakeholders - has been built up in compliance with all applicable laws and in light of the recommendations set forth in the Corporate Governance Code for listed companies.
											</p>
											<ul>
												<li>
													<p class="ItemTitle">Item title</p>
													<p>The system of rules and procedures that its corporate bodies refer to to direct the principles of their behaviour and fulfil their various responsibilities towards its stakeholders - has been built up in compliance with all applicable laws.</p>
												</li>
												<li>
													<p class="ItemTitle">Item title</p>
													<p>The system of rules and procedures that its corporate bodies refer to to direct the principles of their behaviour and fulfil their various responsibilities towards its stakeholders - has been built up in compliance with all applicable laws.</p>
												</li>
												<li>
													<p class="ItemTitle">Item title</p>
													<p>The system of rules and procedures that its corporate bodies refer to to direct the principles of their behaviour and fulfil their various responsibilities towards its stakeholders - has been built up in compliance with all applicable laws.</p>
												</li>
											</ul>
											<p>
												UniCredit, as issuer of shares listed on the <a href="javascript:void(0);" class="ucg_ext_link">Milan, Frankfurt and Warsaw regulated markets</a>, fulfils the legal and regulatory obligations related to listings on said markets.
											</p>
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="40" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- HORIZONTAL LINE -->
								<div class="ucg_horizontal_line">
									<div class="spacer1"></div>
									<div class="spacer2"></div>
								</div>
								<!-- /END HORIZONTAL LINE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="30" data-ucg-height="30"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- TITLE -->
								<div class="panel ucg_title ucg_no_image">
									<div class="container">
										<div class="ucg_cols ucg_cols_text col-xs-12">
											<div class="ucg_title_container">
												<h2>Table</h2>
											</div>
											<div class="ucg_subtitle_container"><h4></h4></div>
										</div>
										<div class="ucg_cols ucg_cols_image col-xs-12">
											<div class="ucg_title_image_container"></div>
										</div>
									</div>
								</div>
								<!-- /END TITLE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="20" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- TABLE -->
								<div class="panel ucg_table" data-tabletype="1">
									<div class="container">
										<p><b>Consolidated Balance Sheet</b> (€ milion)</p>
										<table>
											<tbody>
												<tr class="tableHead">
													<th><b>ASSETS</b></th>
													<th><b>Sep 13</b></th>
													<th><b>Jun 14</b></th>
													<th class="highlighted"><b>Sep 14</b></th>
													<th><b>Y/Y %</b></th>
													<th><b>Q/Q %</b></th>
												</tr>
												<tr class="odd">
													<td>Cash and cash balances</td>
													<td>73,630</td>
													<td>72,308</td>
													<td class="highlighted">83,284</td>
													<td>13.1%</td>
													<td>15.2%</td>
												</tr>
												<tr class="even">
													<td>Financial assets held for trading</td>
													<td>73,630</td>
													<td>72,308</td>
													<td class="highlighted">83,284</td>
													<td>13.1%</td>
													<td>15.2%</td>
												</tr>
												<tr class="odd">
													<td>Loans and receivables with banks</td>
													<td>73,630</td>
													<td>72,308</td>
													<td class="highlighted">83,284</td>
													<td>13.1%</td>
													<td>15.2%</td>
												</tr>
												<tr class="even">
													<td>Loans and receivables with customers</td>
													<td>73,630</td>
													<td>72,308</td>
													<td class="highlighted">83,284</td>
													<td>13.1%</td>
													<td>15.2%</td>
												</tr>
												<tr class="odd">
													<td>Finanncial investments</td>
													<td>73,630</td>
													<td>72,308</td>
													<td class="highlighted">83,284</td>
													<td>13.1%</td>
													<td>15.2%</td>
												</tr>
												<tr class="even">
													<td>Hedging instruments</td>
													<td>73,630</td>
													<td>72,308</td>
													<td class="highlighted">83,284</td>
													<td>13.1%</td>
													<td>15.2%</td>
												</tr>
												<tr class="tableTotal">
													<td><b>Total</b></td>
													<td><b>73,630</b></td>
													<td><b>72,308</b></td>
													<td class="highlighted"><b>83,284</b></td>
													<td><b>13.1%</b></td>
													<td><b>15.2%</b></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<!-- /END TABLE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="50" data-ucg-height="50"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- TABLE -->
								<div class="panel ucg_table" data-tabletype="2">
									<div class="container">
										<p><b>Consolidated Balance Sheet</b> (€ milion)</p>
										<table>
											<tbody>
												<tr class="tableHead">
													<th><b>MAJOR SHAREHOLDERS</b></th>
													<th><b>Ordinary shares</b></th>
													<th><b>% Owned <span class="apex">(1)</span></b></th>
												</tr>
												<tr class="odd">
													<td>1. Aabar Luxembourg S.A.R.L.</td>
													<td>294,600,000</td>
													<td>5.024%</td>
												</tr>
												<tr class="even">
													<td>2. BlackRock Inc.</td>
													<td>294,600,000</td>
													<td>5.024%</td>
												</tr>
												<tr class="odd">
													<td>3. Fondazione Cassa di Risparmio Verona,</td>
													<td>294,600,000</td>
													<td>5.024%</td>
												</tr>
												<tr class="even">
													<td>4. Delfin S.A.R.L.</td>
													<td>294,600,000</td>
													<td>5.024%</td>
												</tr>
												<tr class="odd">
													<td>5. Central Bank of Libya</td>
													<td>294,600,000</td>
													<td>5.024%</td>
												</tr>
											</tbody>
										</table>
										<p class="note" data-mobile-expand="20">1) Comparative figures as at December 31, 2013 have been restated following the introduction of IFRS 10 and IFRS 11. For further de- tails see the "Further information" section of this Consolidated Interim Report. Due to a change in sector of a counterparty, and in order to enable a uniform comparison between periods, the items loans and receivables with/deposits from banks, and loans and receivables with/deposits from customers have been restated.</p>
									</div>
								</div>
								<!-- /END TABLE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="50" data-ucg-height="50"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- TABLE -->
								<div class="panel ucg_table" data-tabletype="3">
									<div class="container">
										<p><b>Staff and Branches</b></p>
										<table>
											<tbody>
												<tr class="tableHead">
													<th><b>ASSETS</b></th>
													<th><b>Sep 13</b></th>
													<th><b>Jun 14</b></th>
													<th><b>Sep 14</b></th>
													<th><b>Y/Y %</b></th>
													<th><b>Q/Q %</b></th>
												</tr>
												<tr class="odd">
													<td>Employees</td>
													<td>73,630</td>
													<td>72,308</td>
													<td>83,284</td>
													<td>13.1%</td>
													<td>15.2%</td>
												</tr>
												<tr class="even">
													<td><span class="moreRows">Branches</span><span class="moreRows">- o/w, Italy</span><span class="moreRows">- o/w, other countries</span></td>
													<td><span class="moreRows">73,630</span><span class="moreRows">73,630</span><span class="moreRows">73,630</span></td>
													<td><span class="moreRows">72,308</span><span class="moreRows">72,308</span><span class="moreRows">72,308</span></td>
													<td><span class="moreRows">83,284</span><span class="moreRows">83,284</span><span class="moreRows">83,284</span></td>
													<td><span class="moreRows">13.1%</span><span class="moreRows">13.1%</span><span class="moreRows">13.1%</span></td>
													<td><span class="moreRows">15.2%</span><span class="moreRows">15.2%</span><span class="moreRows">15.2%</span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<!-- /END TABLE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="50" data-ucg-height="50"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- TABLE -->
								<div class="panel ucg_table">
									<div class="container">
										<p><b>Consolidated Balance Sheet</b> (€ milion)</p>
										<table class="monocolumn">
											<tbody>
												<tr class="tableHead">
													<th colspan="2"><b>SUMMARY TABLE SITUATIONS</b></th>
												</tr>
												<tr class="odd">
													<td>Presence of labour contracts in the company</td>
													<td><b>NO</b></td>
												</tr>
												<tr class="even">
													<td>Presence of controlling shareholders in the company</td>
													<td><b>NO</b></td>
												</tr>
												<tr class="odd">
													<td>Exercise of an activity of management and coordination by the company</td>
													<td><b>YES</b></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<!-- /END TABLE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="50" data-ucg-height="50"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- TABLE -->
								<div class="panel ucg_table" data-tabletype="4">
									<div class="container">
										<p><b>Earnings and dividend per share</b></p>
										<table>
											<tbody>
												<tr class="tableHead">
													<th><b></b></th>
													<th><b>N° of shares eligible for dividend payment</b></th>
													<th><b>Gross Dividend per ordinary share</b></th>
													<th><b>Gross Dividend per savings share</b></th>
													<th><b>EPS <span class="apex">(1)</span></b></th>
												</tr>
												<tr class="odd">
													<td class="text">
														<b>2013</b><br>
														The Shareholders' Meeting approved the distribution to shareholders of
														Euro 0.10 gross dividend per share (savings and ordinary). The payment
														of the dividend has been imple- mented in the form of a scrip dividend,
														which allows the payment of the dividend either with shares or with cash
														at the choice of the share- holders. The ex-dividend date was May 19,
														2014 while the payment date - both via shares or via cash - was
														June 6, 2014.
													</td>
													<td>5,703,327,951<span class="apex">(3)</span></td>
													<td>0,10€</td>
													<td>0,13€</td>
													<td>0,11€</td>
												</tr>
												<tr class="even">
													<td class="text">
														<b>2012</b><br>
														The Shareholders' Meeting resolved to distrib- ute to shareholders Euro
														0.09 gross dividend per ordinary share and per savings share, which will
														be paid out on May 23, 2013, the ex-dividend date being on May 20, 2013
														(detachment coupon n° 2), through the Inter- mediaries being part of part
														of the Monte Titoli centralized management system
													</td>
													<td>5,703,327,951<span class="apex">(3)</span></td>
													<td>0,10€</td>
													<td>0,13€</td>
													<td>0,11€</td>
												</tr>
												<tr class="odd">
													<td class="text">
														<b>2012</b><br>
														The Annual General Meeting, held on May 11th 2012, approved the
														Board of Directors' proposal - concerning the adopted measures on capital
														position strengthening previously disclosed to the market - not to
														distribute in 2012 any dividend on 2011 Results neither for ordinary nor
														for savings shares
													</td>
													<td>n.d.</td>
													<td>n.d.</td>
													<td>n.d.</td>
													<td>n.d.</td>
												</tr>
											</tbody>
										</table>
										<p class="note" data-mobile-expand="20">1) Comparative figures as at December 31, 2013 have been restated following the introduction of IFRS 10 and IFRS 11. For further de- tails see the "Further information" section of this Consolidated Interim Report. Due to a change in sector of a counterparty, and in order to enable a uniform comparison between periods, the items loans and receivables with/deposits from banks, and loans and receivables with/deposits from customers have been restated.</p>
									</div>
								</div>
								<!-- /END TABLE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="40" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- HORIZONTAL LINE -->
								<div class="ucg_horizontal_line">
									<div class="spacer1"></div>
									<div class="spacer2"></div>
								</div>
								<!-- /END HORIZONTAL LINE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="30" data-ucg-height="30"></div>
							</div>
						</div>

						<div class="parsys_column onetwo-columns-box clearfix first-separator">
							<div class="parsys_column onetwo-columns-box-c0">
								<!-- TITLE -->
								<div class="panel ucg_title ucg_no_image">
									<div class="container">
										<div class="ucg_cols ucg_cols_text col-xs-12">
											<div class="ucg_title_container">
												<h2>See also</h2>
											</div>
											<div class="ucg_subtitle_container"><h4></h4></div>
										</div>
										<div class="ucg_cols ucg_cols_image col-xs-12">
											<div class="ucg_title_image_container"></div>
										</div>
									</div>
								</div>
								<!-- /END TITLE -->
								<div class="ucg_spacer" data-ucg-height-mobile="30" data-ucg-height="30"></div>
								<!-- LINKLIST -->
								<div class="panel ucg_linklist">
									<div class="container">
										<ul class="ucg_link_container">
											<li class="ucg_internal_link">
												<a href="javascript:void(0);">Investment calculator</a>
											</li>
											<li class="ucg_internal_link">
												<a href="javascript:void(0);">Full financial calendar</a>
											</li>
											<li class="ucg_internal_link">
												<a href="javascript:void(0);">See all press releases</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- /END LINKLIST -->
								<div class="ucg_spacer" data-ucg-height-mobile="40" data-ucg-height="30"></div>
							</div>
							<div class="parsys_column onetwo-columns-box-c1">
								<!-- TITLE -->
								<div class="panel ucg_title">
									<div class="container">
										<div class="ucg_title_text_container">
											<div class="ucg_title_container">
												<h2>Contacts</h2>
											</div>
											<div class="ucg_subtitle"><h4></h4></div>
										</div>
										<div class="ucg_title_image_container"></div>
									</div>
								</div>
								<!-- /END TITLE -->
								<div class="ucg_spacer" data-ucg-height-mobile="30" data-ucg-height="30"></div>
								<!-- IMAGE TEXT -->
								<div class="panel ucg_image_text">
									<div class="container">
										<div class="ucg_txt">
											<p>Media relations<br>
												Fax: +39 02 8862 2802<br>
												<a href="mailto:mediarelations@unicredit.eu" class="ucg_mail">mediarelations@unicredit.eu</a>
											</p>
										</div>
									</div>
								</div>
								<!-- /END IMAGE TEXT -->
								<!-- LINKLIST -->
								<div class="panel ucg_linklist">
									<div class="container">
										<ul class="ucg_link_container">
											<li class="ucg_internal_link">
												<a href="#">Read the latest issue</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- /END LINKLIST -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="20" data-ucg-height="10"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- HORIZONTAL LINE -->
								<div class="ucg_horizontal_line">
									<div class="spacer1"></div>
									<div class="spacer2"></div>
								</div>
								<!-- /END HORIZONTAL LINE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="20" data-ucg-height="20"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- BACK BUTTON -->
								<div class="panel ucg_back_button">
									<div class="container">
										<a class="ucg_back_button_link">Back to About Us</a>
									</div>
								</div>
								<!-- /END BACK BUTTON -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="20" data-ucg-height="20"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- HORIZONTAL LINE -->
								<div class="ucg_horizontal_line">
									<div class="spacer1"></div>
									<div class="spacer2"></div>
								</div>
								<!-- /END HORIZONTAL LINE -->
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<div class="ucg_spacer" data-ucg-height-mobile="40" data-ucg-height="40"></div>
							</div>
						</div>

						<div class="parsys contentpagewelcome-parsys">
							<div class="section">
								<!-- FOOTNOTE -->
								<div class="panel ucg_footnote">
									<div class="container">
										<ol>
											<li>Figures include branches of Koç Financial Group calculated at 100%</li>
											<li>FTE "Full Time Equivalent"= number of employees counted for the rate of presence. Figures include employees of Koç Financial Services Group calculated at 100%.</li>
										</ol>
										<a class="ucg_to_top" href="javascript:void(0);" data-target="#mainContainer">Back to top</a>
										<div class="ucg_footnote_title">Data as at September 30, 2014.</div>
									</div>
								</div>
								<!-- /END FOOTNOTE -->
							</div>
						</div>

						<div class="panel grey">
							<div class="parsys contentpagewelcome-parsys">
								<div class="section">
									<div class="ucg_spacer" data-ucg-height-mobile="20" data-ucg-height="40"></div>
								</div>
							</div>

							<div class="parsys contentpagewelcome-parsys">
								<div class="parbase section textimage">
									<!-- TITLE -->
									<div class="panel ucg_title ucg_no_image">
										<div class="container">
											<div class="ucg_cols ucg_cols_text col-xs-12">
												<div class="ucg_title_container">
													<h2>Follow UniCredit Group also on</h2>
												</div>
												<div class="ucg_subtitle_container">
													<h4></h4>
												</div>
											</div>
											<div class="ucg_cols ucg_cols_image col-xs-12">
												<div class="ucg_title_image_container">
												</div>
											</div>
										</div>
									</div>
									<!-- /END TITLE -->
								</div>
							</div>

							<div class="parsys contentpagewelcome-parsys">
								<div class="section">
									<div class="ucg_spacer" data-ucg-height-mobile="20" data-ucg-height="40"></div>
								</div>
							</div>

							<!-- 3 COLUMN SOCIAL -->
							<div class="parsys_column three-columns-box clearfix">
								<div class="parsys_column three-columns-box-c0">
									<div class="panel ucg_social ucg_social_facebook">
										<div class="container">
											<div class="ucg_social_title">Unicredit champions facebook</div>
											<div class="ucg_social_image">
												<img alt="" src="../img/social-facebook-c3.jpg">
											</div>
											<div class="clear visible-xs"></div>
											<div class="ucg_social_data">
												<span>21 November</span>
											</div>
											<div class="ucg_social_text">
												<p>We wish you a good weekend with this quote by Steven Gerrard... Click LIKE if you agree!</p>
											</div>
										</div>
										<div class="container">
											<div class="ucg_social_link">
												<a href="https://www.facebook.com/UniCreditChampionsIT" target="_blank">Become a fan</a>
											</div>
										</div>
									</div>
								</div>
								<div class="parsys_column three-columns-box-c1">
									<div class="panel ucg_social ucg_social_twitter no_image">
										<div class="container">
											<div class="ucg_social_title">@UniCredit_PR</div>
											<div class="ucg_social_image"></div>
											<div class="ucg_social_data">
												<span>28 November</span>
											</div>
											<div class="ucg_social_text">
												<p>
													<a class="tag" href="javascript:void(0);">#Cultura</a>: dal 28-11 c/o lo Spazio <a class="tag" href="javascript:void(0);">#Trento</a> UniCredit di Palazzo Firmian la mostra '<a class="tag" href="javascript:void(0);">#PAD</a>, PaesaggioArchitetturaDesign' <a class="shortLink" href="javascript:void(0);">http://goo.gl/NSMBDJ</a>
												</p>
											</div>
										</div>
										<div class="container">
											<div class="ucg_social_link">
												<a href="https://www.facebook.com/UniCreditChampionsIT" target="_blank">Follow us</a>
											</div>
										</div>
									</div>
								</div>
								<div class="parsys_column three-columns-box-c2">
									<div class="panel ucg_social ucg_social_youtube">
										<div class="container">
											<div class="ucg_social_title">Unicredit Channel</div>
											<div class="ucg_social_image">
												<a class="ucg_videoplayer_starter" href="javascript:void(0);">
													<!--<img title="Go to video" alt="Go to video" src="../img/static/videoplayer_play.png">-->
												</a>
												<img alt="" src="../img/social-youtube-c3.jpg">
											</div>
											<div class="clear visible-xs"></div>
											<div class="ucg_social_data">
												<span>28 November</span>
											</div>
											<div class="ucg_social_text">
												<p>UniCredit Tower.</p>
											</div>
										</div>
										<div class="container">
											<div class="ucg_social_link">
												<a href="https://www.facebook.com/UniCreditChampionsIT" target="_blank">Subscribe</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /END 3 COLUMN SOCIAL -->

							<div class="parsys contentpagewelcome-parsys">
								<div class="parbase section">
									<!-- SOCIAL FOOTER -->
									<div class="panel ucg_social_footer">
										<div class="container">
											<div class="ucg_social_title">
												<span class="col-xs-12">Follow UniCredit Group also on</span>
												<div class="ucg_social_others col-xs-12">
													<a href="javascript:void(0);" class="unicredit"></a>
													<a href="javascript:void(0);" class="twitter"></a>
													<a href="javascript:void(0);" class="linkedin"></a>
													<a href="javascript:void(0);" class="facebook"></a>
													<a href="javascript:void(0);" class="googleplus"></a>
													<a href="javascript:void(0);" class="pinterest"></a>
												</div>
											</div>
										</div>
									</div>
									<!-- SOCIAL FOOTER -->
								</div>
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