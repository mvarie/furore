<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title></title>
	
	<jsp:include page="includes/css.html"></jsp:include>
	
	<!-- SPECIFIC CSS START HERE -->
	
    	<link type="text/css" rel="stylesheet" href="plugin/css/idangerous.swiper.css"/>
		<!--generic CSS for Parsys Column container -->
		<link type="text/css" rel="stylesheet" href="css/ucg_parsys_column.css"/>
		
		<!--specific CSS for Text Component-->
		<link type="text/css" rel="stylesheet" href="css/ucg_text_component.css"/>

		<!--imported CSS component-->
		<link type="text/css" rel="stylesheet" href="css/ucg_title_component.css"/>
		<link type="text/css" rel="stylesheet" href="css/ucg_link_component.css"/>
		<!--specific CSS for Image-Text Component-->
		<link type="text/css" rel="stylesheet" href="css/ucg_image_text_component.css"/>
		

		<!--specific CSS for Container Swiper Component-->
		<link type="text/css" rel="stylesheet" href="css/ucg_container_swiper.css"/>
	
	
	<!-- SPECIFIC CSS END HERE -->    
       
    <link type="text/css" rel="stylesheet" href="css/retina.css"/>
	
	<jsp:include page="includes/js.html"></jsp:include>
    
	<!-- SPECIFIC JS START HERE -->
	
    	<script type="text/javascript" src="plugin/js/idangerous.swiper.js"></script>
		<!--specific CSS for Horizontal line Component-->
		<script type="text/javascript" src="js/ucg_container_swiper.js"></script>
	
	<!-- SPECIFIC JS END HERE -->
	
  
</head>
<body>
<jsp:include page="includes/message.html"></jsp:include>
<jsp:include page="includes/header.html"></jsp:include>
<jsp:include page="includes/search.html"></jsp:include>
<div class="body-container-table">
	<div class="body-container-cell">
	<jsp:include page="includes/sidebar.html"></jsp:include>
	    
	</div>
	<div class="body-container-cell">
		<div id="mainContainer">
			<div class="mainContainer-wrapper">
			
			<!-- PAGE START HERE -->
			
				<div class="example">CQ5 Full page width</div>
				<div class="parsys contentpagewelcome-parsys">
					<div class="section">
						<div class="ucg_container_swiper panel" data-name="Container001">
							<div class="container">
								<div class="ucg_container_swiper_pagination">
									<div class="ucg_container_name">
										<h4>Highlights</h4>
									</div>
									<div class="swiper_pagination"></div>
								</div>
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="panel ucg_image_text">
												<div class="container">
													<div class="ucg_img">
														<img src="img/Milan_HQ.png" alt="">
													</div>
													<div class="ucg_txt">
														<h3>Corporate Governance report</h3>
														<p>As a leading European bank, we make it easy for our customers to seize the opportunities and meet the challenges of real life.</p>
														<div class="panel ucg_linklist">
															<div class="container">
																<ul class="ucg_link_container">
																	<li class="ucg_internal_link">
																		<a href="javascript:void(0);">Organizational structure</a>
																	</li>
																	<li class="ucg_internal_link">
																		<a href="javascript:void(0);">Management</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="ucg_text">
												<div class="ucg_text_container">
													<p>
														<span class="ucg_date"><b>14 November</b> 2014 - 10:00</span>
														<span class="ucg_introTitle"><a class="ucg_titleLink" href="javascript:void(0);">Resoconto intermedio di gestione al 30 settembre 2014</a></span>
														<span class="ucg_intro">Si rende noto che il Resoconto intermedio di gestione al 30 settembre 2014 è disponibile al pubblico presso la Sede Legale e la Direzione Generale della Società, e pubblicato ...</span>
													</p>										
													<div class="panel ucg_linklist">
														<div class="container">
															<ul class="ucg_link_container">
																<li class="ucg_internal_link">
																	<a href="#">See all press releases</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="ucg_text">
												<div class="ucg_text_container">
													<p>
														<span class="ucg_date"><b>10 November</b> 2014 - 11:00</span>
														<span class="ucg_introTitle"><a class="ucg_titleLink" href="javascript:void(0);">UniCredit: nominato il nuovo Responsabile della Divisione Central &amp; Eastern Europe (CEE)</a></span>
														<span class="ucg_intro">Nel corso della riunione odierna, il Consiglio di Amministrazione di UniCredit ha nominato, con decorrenza 16 febbraio 2015, il signor Carlo Vivaldi quale nuovo responsabile della ...</span>
													</p>										
													<div class="panel ucg_linklist">
														<div class="container">
															<ul class="ucg_link_container">
																<li class="ucg_internal_link">
																	<a href="#">See all press releases</a>
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
				</div>
				
				<div class="example">CQ5 3 columns (1/3 - 2/3)</div>
				<div class="parsys_column first-separator onetwo-columns-box clearfix">
					<div class="parsys_column onetwo-columns-box-c0">
						<div class="ucg_container_swiper panel swiper" data-name="Container002">
							<div class="container">
								<div class="ucg_container_swiper_pagination">
									<div class="ucg_container_name">
										<h4>Highlights</h4>
									</div>
									<div class="swiper_pagination"></div>
								</div>
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="panel ucg_image_text">
												<div class="container">
													<div class="ucg_img">
														<img src="img/Milan_HQ.png" alt="">
													</div>
													<div class="ucg_txt">
														<h3>Corporate Governance report</h3>
														<p>As a leading European bank, we make it easy for our customers to seize the opportunities and meet the challenges of real life.</p>
														<div class="panel ucg_linklist">
															<div class="container">
																<ul class="ucg_link_container">
																	<li class="ucg_internal_link">
																		<a href="javascript:void(0);">Organizational structure</a>
																	</li>
																	<li class="ucg_internal_link">
																		<a href="javascript:void(0);">Management</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="ucg_text">
												<div class="ucg_text_container">
													<p>
														<span class="ucg_date"><b>14 November</b> 2014 - 10:00</span>
														<span class="ucg_introTitle"><a class="ucg_titleLink" href="javascript:void(0);">Resoconto intermedio di gestione al 30 settembre 2014</a></span>
														<span class="ucg_intro">Si rende noto che il Resoconto intermedio di gestione al 30 settembre 2014 è disponibile al pubblico presso la Sede Legale e la Direzione Generale della Società, e pubblicato ...</span>
													</p>										
													<div class="panel ucg_linklist">
														<div class="container">
															<ul class="ucg_link_container">
																<li class="ucg_internal_link">
																	<a href="#">See all press releases</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="ucg_text">
												<div class="ucg_text_container">
													<p>
														<span class="ucg_date"><b>10 November</b> 2014 - 11:00</span>
														<span class="ucg_introTitle"><a class="ucg_titleLink" href="javascript:void(0);">UniCredit: nominato il nuovo Responsabile della Divisione Central &amp; Eastern Europe (CEE)</a></span>
														<span class="ucg_intro">Nel corso della riunione odierna, il Consiglio di Amministrazione di UniCredit ha nominato, con decorrenza 16 febbraio 2015, il signor Carlo Vivaldi quale nuovo responsabile della ...</span>
													</p>										
													<div class="panel ucg_linklist">
														<div class="container">
															<ul class="ucg_link_container">
																<li class="ucg_internal_link">
																	<a href="#">See all press releases</a>
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
					<div class="parsys_column onetwo-columns-box-c1">
						<div class="ucg_container_swiper panel swiper" data-name="Container003">
							<div class="container">
								<div class="ucg_container_swiper_pagination">
									<div class="ucg_container_name">
										<h4>Highlights</h4>
									</div>
									<div class="swiper_pagination"></div>
								</div>
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="panel ucg_image_text">
												<div class="container">
													<div class="ucg_img">
														<img src="img/Milan_HQ.png" alt="">
													</div>
													<div class="ucg_txt">
														<h3>Corporate Governance report</h3>
														<p>As a leading European bank, we make it easy for our customers to seize the opportunities and meet the challenges of real life.</p>
														<div class="panel ucg_linklist">
															<div class="container">
																<ul class="ucg_link_container">
																	<li class="ucg_internal_link">
																		<a href="javascript:void(0);">Organizational structure</a>
																	</li>
																	<li class="ucg_internal_link">
																		<a href="javascript:void(0);">Management</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="ucg_text">
												<div class="ucg_text_container">
													<p>
														<span class="ucg_date"><b>14 November</b> 2014 - 10:00</span>
														<span class="ucg_introTitle"><a class="ucg_titleLink" href="javascript:void(0);">Resoconto intermedio di gestione al 30 settembre 2014</a></span>
														<span class="ucg_intro">Si rende noto che il Resoconto intermedio di gestione al 30 settembre 2014 è disponibile al pubblico presso la Sede Legale e la Direzione Generale della Società, e pubblicato ...</span>
													</p>										
													<div class="panel ucg_linklist">
														<div class="container">
															<ul class="ucg_link_container">
																<li class="ucg_internal_link">
																	<a href="#">See all press releases</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="ucg_text">
												<div class="ucg_text_container">
													<p>
														<span class="ucg_date"><b>10 November</b> 2014 - 11:00</span>
														<span class="ucg_introTitle"><a class="ucg_titleLink" href="javascript:void(0);">UniCredit: nominato il nuovo Responsabile della Divisione Central &amp; Eastern Europe (CEE)</a></span>
														<span class="ucg_intro">Nel corso della riunione odierna, il Consiglio di Amministrazione di UniCredit ha nominato, con decorrenza 16 febbraio 2015, il signor Carlo Vivaldi quale nuovo responsabile della ...</span>
													</p>										
													<div class="panel ucg_linklist">
														<div class="container">
															<ul class="ucg_link_container">
																<li class="ucg_internal_link">
																	<a href="#">See all press releases</a>
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
				</div>	
			
			<!-- PAGE END HERE -->
						
				<jsp:include page="includes/footer.html"></jsp:include>
			</div>
		</div>
	</div>
</div>
</body>
</html>