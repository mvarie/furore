<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Worldwide Component</title>
	
	<jsp:include page="includes/css.html"></jsp:include>
	
	<!-- SPECIFIC CSS START HERE -->
	
		<link type="text/css" rel="stylesheet" href="plugin/css/idangerous.swiper.css"/>
		<!--generic CSS for Parsys Column container -->
		<link type="text/css" rel="stylesheet" href="css/ucg_parsys_column.css"/>

		<!--specific CSS for Worldwide Component-->
		<link type="text/css" rel="stylesheet" href="css/ucg_worldwide_component.css"/>

		<!--imported CSS component-->
		<link type="text/css" rel="stylesheet" href="css/ucg_title_component.css"/>
		<link type="text/css" rel="stylesheet" href="css/ucg_link_component.css"/>
		<link type="text/css" rel="stylesheet" href="css/ucg_spacer.css"/>
	
	<!-- SPECIFIC CSS END HERE -->    
       
    <link type="text/css" rel="stylesheet" href="css/retina.css"/>
	
	<jsp:include page="includes/js.html"></jsp:include>
    
	<!-- SPECIFIC JS START HERE -->
		
		<script type="text/javascript" src="plugin/js/idangerous.swiper.js"></script>
		<!--specific JS for Worldwide Component-->
		<script type="text/javascript" src="js/ucg_worldwide_component.js"></script> 

		<!--imported JS component-->
		<script type="text/javascript" src="js/ucg_spacer.js"></script>
	
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
				<div class="example">Worldwide Component</div>
				<div class="panel ucg_title ucg_no_image">
					<div class="container">
						<div class="ucg_cols ucg_cols_text col-xs-12">
							<div class="ucg_title_container">
								<h2>We operate in 17 countries</h2>
							</div>
							<div class="ucg_subtitle_container"><h4></h4></div>
						</div>
						<div class="ucg_cols ucg_cols_image col-xs-12">
							<div class="ucg_title_image_container"></div>
						</div>
					</div>
				</div>
	
				<div class="ucg_spacer" data-ucg-height="40" data-ucg-height-mobile="40"></div>
	
				<div class="panel ucg_worldwide">
					<div class="container">
						<div class="nations_container">
							<div class="ucg_worldwide_arrows">
								<div class="ucg_worldwide_arrow prev"><a href="javascript:void(0);"></a></div>
								<div class="ucg_worldwide_arrow next"><a href="javascript:void(0);"></a></div>
							</div>
	
							<div class="swiper-container">
								<div class="swiper-wrapper">
									<div class="swiper-slide active"><a href="javascript:void(0);" data-slide="0" data-marketshare="12,5%" data-graph="img/Ellisse_Italy.png" data-emplyees="23.000" data-branches="7.000" data-img-selected="img/static/map/Italy_selected.png">Italy</a></div>
									<div class="swiper-slide"><a href="javascript:void(0);" data-slide="1" data-marketshare="10,01%" data-graph="img/Ellisse_Austria.png" data-emplyees="7.700" data-branches="300" data-img-selected="img/static/map/Austria_selected.png">Austria</a></div>
									<div class="swiper-slide"><a href="javascript:void(0);" data-slide="2" data-marketshare="9%" data-graph="img/Ellisse_Germany.png" data-emplyees="880" data-branches="25" data-img-selected="img/static/map/Azerbaijan_selected.png">Azerbaijan</a></div>
									<div class="swiper-slide"><a href="javascript:void(0);" data-slide="3" data-marketshare="8,08%" data-graph="img/Ellisse_Bosnia_Herzegovina.png" data-emplyees="900" data-branches="50" data-img-selected="img/static/map/Bosnia_and_Herzegovina_selected.png">Bosnia and Herzegovina</a></div>
									<div class="swiper-slide"><a href="javascript:void(0);" data-slide="4" data-marketshare="10,88%" data-graph="img/Ellisse_Austria.png" data-emplyees="800" data-branches="45" data-img-selected="img/static/map/Bulgaria_selected.png">Bulgaria</a></div>
									<div class="swiper-slide"><a href="javascript:void(0);" data-slide="5" data-marketshare="31,53%" data-graph="img/Ellisse_Italy.png" data-emplyees="850" data-branches="48" data-img-selected="img/static/map/Croatia_selected.png">Croatia</a></div>
									<div class="swiper-slide"><a href="javascript:void(0);" data-slide="6" data-marketshare="10,55%" data-graph="img/Ellisse_Poland.png" data-emplyees="950" data-branches="55" data-img-selected="img/static/map/Czech_Republic_selected.png">Czech Republic</a></div>
									<div class="swiper-slide"><a href="javascript:void(0);" data-slide="7" data-marketshare="19,45%" data-graph="img/Ellisse_Germany.png" data-emplyees="5.300" data-branches="265" data-img-selected="img/static/map/Germany_selected.png">Germany</a></div>
									<div class="swiper-slide"><a href="javascript:void(0);" data-slide="8" data-marketshare="15%" data-graph="img/Ellisse_Bosnia_Herzegovina.png" data-emplyees="1.200" data-branches="80" data-img-selected="img/static/map/Hungary_selected.png">Hungary</a></div>
									<div class="swiper-slide"><a href="javascript:void(0);" data-slide="9" data-marketshare="16,88%" data-graph="img/Ellisse_Poland.png" data-emplyees="2.200" data-branches="120" data-img-selected="img/static/map/Poland_selected.png">Poland</a></div>
									<div class="swiper-slide"><a href="javascript:void(0);" data-slide="10" data-marketshare="23,45%" data-graph="img/Ellisse_Italy.png" data-emplyees="1.450" data-branches="82" data-img-selected="img/static/map/Romania_selected.png">Romania</a></div>
									<div class="swiper-slide"><a href="javascript:void(0);" data-slide="11" data-marketshare="11,33%" data-graph="img/Ellisse_Germany.png" data-emplyees="1.150" data-branches="101" data-img-selected="img/static/map/Russia_selected.png">Russia</a></div>
									<div class="swiper-slide"><a href="javascript:void(0);" data-slide="12" data-marketshare="29,11%" data-graph="img/Ellisse_Austria.png" data-emplyees="760" data-branches="72" data-img-selected="img/static/map/Serbia_selected.png">Serbia</a></div>
									<div class="swiper-slide"><a href="javascript:void(0);" data-slide="13" data-marketshare="77,11%" data-graph="img/Ellisse_Poland.png" data-emplyees="1.000" data-branches="93" data-img-selected="img/static/map/Slovakia_selected.png">Slovakia</a></div>
									<div class="swiper-slide"><a href="javascript:void(0);" data-slide="14" data-marketshare="80,89%" data-graph="img/Ellisse_Bosnia_Herzegovina.png" data-emplyees="420" data-branches="46" data-img-selected="img/static/map/Slovenia_selected.png">Slovenia</a></div>
									<div class="swiper-slide"><a href="javascript:void(0);" data-slide="15" data-marketshare="11,11%" data-graph="img/Ellisse_Italy.png" data-emplyees="1.850" data-branches="110" data-img-selected="img/static/map/Turkey_selected.png">Turkey</a></div>
									<div class="swiper-slide"><a href="javascript:void(0);" data-slide="16" data-marketshare="8,5%" data-graph="img/Ellisse_Germany.png" data-emplyees="680" data-branches="80" data-img-selected="img/static/map/Ukraine_selected.png">Ukraine</a></div>
								</div>
							</div>
						</div>
	
						<div class="worldwide_content clearfix">
							<div class="layer_over visible-md visible-lg">
								<img src="img/static/map/Italy_over.png" data-swiper-slide="0">
								<img src="img/static/map/Austria_over.png" data-swiper-slide="1">
								<img src="img/static/map/Azerbaijan_over.png" data-swiper-slide="2">
								<img src="img/static/map/Bosnia_and_Herzegovina_over.png" data-swiper-slide="3">
								<img src="img/static/map/Bulgaria_over.png" data-swiper-slide="4">
								<img src="img/static/map/Croatia_over.png" data-swiper-slide="5">
								<img src="img/static/map/Czech_Republic_over.png" data-swiper-slide="6">
								<img src="img/static/map/Germany_over.png" data-swiper-slide="7">
								<img src="img/static/map/Hungary_over.png" data-swiper-slide="8">
								<img src="img/static/map/Poland_over.png" data-swiper-slide="9">
								<img src="img/static/map/Romania_over.png" data-swiper-slide="10">
								<img src="img/static/map/Russia_over.png" data-swiper-slide="11">
								<img src="img/static/map/Serbia_over.png" data-swiper-slide="12">
								<img src="img/static/map/Slovakia_over.png" data-swiper-slide="13">
								<img src="img/static/map/Slovenia_over.png" data-swiper-slide="14">
								<img src="img/static/map/Turkey_over.png" data-swiper-slide="15">
								<img src="img/static/map/Ukraine_over.png" data-swiper-slide="16">
							</div>
	
							<div class="layer_selected visible-md visible-lg">
								<img src="img/static/map/Italy_selected.png">
							</div>
	
							<div class="layer_nationName visible-md visible-lg"></div>
	
							<div class="layer_map visible-md visible-lg">
								<img src="img/static/map/transparent_map.png" usemap="#europeMap">
							</div>
	
							<div class="layer_mapped hidden-xs">
								<map name="europeMap">
									<area shape="poly" data-swiper-slide="0" alt="Italy" data-nation-name="Italy" data-img-selected="img/static/map/Italy_selected.png" data-img-over="img/static/map/Italy_over.png" coords="203,414,218,423,217,416,219,410,225,410,230,402,226,395,231,389,238,395,240,396,242,392,223,380,223,376,218,376,209,368,206,361,198,355,199,345,204,344,208,343,207,339,209,336,202,334,198,331,191,334,188,334,185,336,182,339,179,338,178,342,174,338,171,342,164,343,167,347,163,351,167,353,166,359,171,358,168,362,174,361,178,354,186,359,189,367,195,374,172,387,174,403,183,399,196,374,211,387,219,394,223,399,223,406,210,411,203,408,199,411" href="javascript:void(0);" onFocus="this.blur()" />
									<area shape="poly" data-swiper-slide="1" alt="Austria" data-nation-name="Austria" data-img-selected="img/static/map/Austria_selected.png" data-img-over="img/static/map/Austria_over.png" coords="221,333,226,332,227,326,228,322,231,319,227,314,221,314,212,317,210,316,203,322,206,330,200,326,195,327,185,327,182,328,186,331,189,336,196,332,200,334,207,336,216,336,223,334,226,332" href="javascript:void(0);" onFocus="this.blur()" />
									<area shape="poly" data-swiper-slide="2" alt="Azerbaijan" data-nation-name="Azerbaijan" data-img-selected="img/static/map/Azerbaijan_selected.png" data-img-over="img/static/map/Azerbaijan_over.png" coords="438,407,441,386,447,382,411,385,412,402,423,406,427,399,434,408,434,409" href="javascript:void(0);" onFocus="this.blur()" />
									<area shape="poly" data-swiper-slide="3" alt="Bosnia and Herzegovina" data-nation-name="Bosnia and Herzegovina" data-img-selected="img/static/map/Bosnia_and_Herzegovina_selected.png" data-img-over="img/static/map/Bosnia_and_Herzegovina_over.png" coords="239,372,240,366,248,362,243,354,243,348,232,348,223,350,222,355,228,361,231,367,234,370" href="javascript:void(0);" onFocus="this.blur()" />
									<area shape="poly" data-swiper-slide="4" alt="Bulgaria" data-nation-name="Bulgaria" data-img-selected="img/static/map/Bulgaria_selected.png" data-img-over="img/static/map/Bulgaria_over.png" coords="303,362,297,359,292,359,286,362,278,362,272,362,264,361,271,368,265,371,264,375,268,379,268,384,275,382,280,380,284,384,289,382,289,379,296,377,301,378,298,372,303,367" href="javascript:void(0);" onFocus="this.blur()" />
									<area shape="poly" data-swiper-slide="5" alt="Croatia" data-nation-name="Croatia" data-img-selected="img/static/map/Croatia_selected.png" data-img-over="img/static/map/Croatia_over.png" coords="231,368,228,361,222,354,222,349,227,347,238,350,243,352,242,343,232,340,226,337,219,346,212,347,210,350,219,358" href="javascript:void(0);" onFocus="this.blur()" />
									<area shape="poly" data-swiper-slide="6" alt="Czech Republic" data-nation-name="Czech Republic" data-img-selected="img/static/map/Czech_Republic_selected.png" data-img-over="img/static/map/Czech_Republic_over.png" coords="225,315,232,315,239,311,242,306,235,301,224,297,218,293,216,288,213,293,200,300,203,308,211,312,212,316,218,315,223,314,231,314" href="javascript:void(0);" onFocus="this.blur()" />
									<area shape="poly" data-swiper-slide="7" alt="Germany" data-nation-name="Germany" data-img-selected="img/static/map/Germany_selected.png" data-img-over="img/static/map/Germany_over.png" coords="211,316,200,307,198,299,212,294,215,293,218,294,214,284,214,277,211,273,214,268,208,259,206,255,199,257,191,260,191,258,194,255,187,255,184,252,176,250,178,256,178,262,170,262,165,266,164,276,164,281,159,284,160,288,159,292,161,296,161,300,159,303,162,306,162,308,166,309,170,311,173,314,169,324,169,327,174,324,174,322,181,326,185,328,188,328,190,327,193,328,201,324,206,327,203,320,206,318,210,316" href="javascript:void(0);" onFocus="this.blur()" />
									<area shape="poly" data-swiper-slide="8" alt="Hungary" data-nation-name="Hungary" data-img-selected="img/static/map/Hungary_selected.png" data-img-over="img/static/map/Hungary_over.png" coords="226,327,226,334,226,338,236,343,242,342,250,340,258,339,262,331,266,324,266,322,258,316,251,320,243,327,234,325,228,322" href="javascript:void(0);" onFocus="this.blur()" />
									<area shape="poly" data-swiper-slide="9" alt="Poland" data-nation-name="Poland" data-img-selected="img/static/map/Poland_selected.png" data-img-over="img/static/map/Poland_over.png" coords="271,278,273,271,270,259,266,255,244,256,237,255,239,251,230,254,222,259,214,259,213,266,212,272,214,275,215,285,217,291,217,294,226,296,226,302,230,300,230,298,235,302,238,303,241,305,242,310,247,306,248,311,251,309,255,310,259,308,267,312,267,312,267,307,276,297,275,292,272,288,273,282,270,278" href="javascript:void(0);" onFocus="this.blur()" />
									<area shape="poly" data-swiper-slide="10" alt="Romania" data-nation-name="Romania" data-img-selected="img/static/map/Romania_selected.png" data-img-over="img/static/map/Romania_over.png" coords="310,345,304,348,300,344,303,332,292,319,287,323,279,323,270,321,266,325,262,329,254,341,252,341,260,347,259,351,264,354,266,356,262,358,265,362,282,362,288,360,293,358,302,359,302,363,306,363,304,358,307,351,312,354,313,348" href="javascript:void(0);" onFocus="this.blur()" />
									<area shape="poly" data-swiper-slide="11" alt="Russia" data-nation-name="Russia" data-img-selected="img/static/map/Russia_selected.png" data-img-over="img/static/map/Russia_over.png" coords="518,261,514,28,498,24,482,7,480,-1,453,-1,456,7,463,15,472,21,492,22,499,32,507,39,497,53,491,60,480,59,476,63,473,65,468,58,470,53,462,57,438,43,432,45,432,51,436,68,427,80,428,84,426,88,418,89,415,83,410,80,415,74,422,72,418,64,414,60,406,60,402,58,404,64,404,82,366,62,356,52,346,46,327,35,312,46,306,56,303,64,308,70,313,74,312,86,307,88,316,110,311,112,313,126,319,132,316,139,326,151,300,182,310,184,308,190,298,194,298,213,302,229,248,251,247,256,273,257,304,237,315,239,322,243,320,252,324,258,330,264,332,268,327,270,320,269,324,273,326,280,328,282,332,278,341,278,343,285,340,286,341,290,348,291,350,298,354,298,358,300,362,298,366,304,369,302,379,305,380,309,377,315,379,320,376,324,367,326,367,330,372,330,372,333,366,338,364,337,366,344,358,350,367,355,379,363,379,363,387,364,391,368,396,366,400,367,407,374,416,373,423,379,428,383,432,380,435,379,426,370,425,359,423,356,421,352,433,343,440,337,434,334,435,327,429,324,426,324,422,319,420,317,424,310,422,304,426,298,435,304,436,306,434,295,440,292,448,290,450,285,457,291,459,287,470,290,475,296,483,297,485,292,494,291,498,291,506,296,510,295,514,296,513,283" href="javascript:void(0);" onFocus="this.blur()" />
									<area shape="poly" data-swiper-slide="12" alt="Serbia" data-nation-name="Serbia" data-img-selected="img/static/map/Serbia_selected.png" data-img-over="img/static/map/Serbia_over.png" coords="264,375,265,371,270,367,262,359,266,356,264,354,258,351,258,347,255,345,250,340,246,340,242,342,244,347,248,350,247,361,248,367,251,368,254,366,256,367" href="javascript:void(0);" onFocus="this.blur()" />
									<area shape="poly" data-swiper-slide="13" alt="Slovakia" data-nation-name="Slovakia" data-img-selected="img/static/map/Slovakia_selected.png" data-img-over="img/static/map/Slovakia_over.png" coords="228,316,230,322,235,324,241,326,246,323,251,319,259,316,260,318,263,312,255,307,255,308,242,312,246,310,242,307,236,312,232,314" href="javascript:void(0);" onFocus="this.blur()" />
									<area shape="poly" data-swiper-slide="14" alt="Slovenia" data-nation-name="Slovenia" data-img-selected="img/static/map/Slovenia_selected.png" data-img-over="img/static/map/Slovenia_over.png" coords="205,336,208,346,210,350,216,345,219,346,223,341,224,339,227,336,226,331,220,335,212,335,207,336,207,336" href="javascript:void(0);" onFocus="this.blur()" />
									<area shape="poly" data-swiper-slide="15" alt="Turkey" data-nation-name="Turkey" data-img-selected="img/static/map/Turkey_selected.png" data-img-over="img/static/map/Turkey_over.png" coords="401,384,408,396,405,404,411,420,386,417,377,423,362,421,356,422,347,434,342,424,330,429,323,422,316,420,308,427,296,419,286,403,292,381,298,371,311,382,355,380,368,387,399,382,398,382" href="javascript:void(0);" onFocus="this.blur()" />
									<area shape="poly" data-swiper-slide="16" alt="Ukraine" data-nation-name="Ukraine" data-img-selected="img/static/map/Ukraine_selected.png" data-img-over="img/static/map/Ukraine_over.png" coords="273,287,284,282,296,286,315,288,319,290,323,281,327,282,330,286,336,280,339,282,341,287,342,291,348,295,349,300,352,300,364,300,371,305,379,308,373,314,373,318,378,321,366,326,364,329,367,332,348,337,346,342,354,346,359,347,358,351,348,349,342,351,339,354,330,345,326,340,326,335,315,342,312,349,312,353,303,348,306,336,311,335,315,332,305,320,299,314,298,321,284,323,273,320,267,323,261,318,265,311,275,295,277,292,274,290" href="javascript:void(0);" onFocus="this.blur()" />
								</map>
							</div>
	
							<div class="unicreditInContainer">
								<div class="text-uppercase">Unicredit in</div>
								<a href="javascript:void(0);" class="nation">Italy</a>
							</div>
	
							<div class="col-xs-7 col-sm-4 col-md-3">
								<div class="marketShare">
									<img src="img/Ellisse_Italy.png" class="graph" alt="">
									<div class="centerTextOnGraph">
										<div class="marketShereText text-uppercase">
											Market share
										</div>
										<div class="marketShereNumber">12,5%</div>
									</div>
								</div>
							</div>
	
							<div class="col-xs-5 col-sm-4 col-md-3">
								<div class="employees">
									<div class="text-uppercase">Employees</div>
									<div class="number">23.000</div>
								</div>
								<div class="branches">
									<div class="text-uppercase">Branches</div>
									<div class="number">7.000</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	
				<div class="panel ucg_linklist">
					<div class="container">
						<ul class="ucg_link_container">
							<li class="ucg_internal_link">
								<a href="javascript:void(0);">Find UniCredit brances and offices around the world</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="ucg_spacer" data-ucg-height="40" data-ucg-height-mobile="40"></div>
				
			
			<!-- PAGE END HERE -->
						
				<jsp:include page="includes/footer.html"></jsp:include>
			</div>
		</div>
	</div>
</div>
</body>
</html>