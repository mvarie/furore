@ECHO OFF
REM Sostituire i propri path
cd "C:\Program Files (x86)\GnuWin32\bin"
set rootSour=http://localhost:8080/unicredit-corporate
set rootDest=C:\Users\Public\Documents\Partita iva\GECOD\Progetti\Unicredit\Consegne
set logDest=C:\Users\Public\Documents\Partita iva\GECOD\Progetti\Unicredit\Consegne\wget_log.log
set start=%date:~-4%-%date:~3,2%-%date:~0,2%
mkdir "%rootDest%\%start%"
REM TEMPLATES
wget "%rootSour%/home.jsp" -o "%logDest%" -O "%rootDest%\%start%\home.html"
wget "%rootSour%/frontpage_aboutus.jsp" -a "%logDest%" -O "%rootDest%\%start%\frontpage_aboutus.html"
wget "%rootSour%/frontpage_governance.jsp" -a "%logDest%" -O "%rootDest%\%start%\frontpage_governance.html"
wget "%rootSour%/frontpage_investors.jsp" -a "%logDest%" -O "%rootDest%\%start%\frontpage_investors.html"
wget "%rootSour%/frontpage_pressmedia.jsp" -a "%logDest%" -O "%rootDest%\%start%\frontpage_pressmedia.html"
wget "%rootSour%/frontpage_careers.jsp" -a "%logDest%" -O "%rootDest%\%start%\frontpage_careers.html"
wget "%rootSour%/frontpage_sustainability.jsp" -a "%logDest%" -O "%rootDest%\%start%\frontpage_sustainability.html"
wget "%rootSour%/page_standard.jsp" -a "%logDest%" -O "%rootDest%\%start%\page_standard.html"
wget "%rootSour%/home_vborder_columns.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_vborder_columns.html"
REM COMPONENTS
wget "%rootSour%/home_accordion_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_accordion_component.html"
wget "%rootSour%/home_archive_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_archive_component.html"
wget "%rootSour%/home_back_button_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_back_button_component.html"
wget "%rootSour%/home_ads_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_ads_component.html"
wget "%rootSour%/home_calendar_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_calendar_component.html"
wget "%rootSour%/home_career_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_career_component.html"
wget "%rootSour%/home_footnote_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_footnote_component.html"
wget "%rootSour%/home_gallery_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_gallery_component.html"
wget "%rootSour%/home_history_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_history_component.html"
wget "%rootSour%/home_horizontal_line_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_horizontal_line_component.html"
wget "%rootSour%/home_image_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_image_component.html"
wget "%rootSour%/home_infografic_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_infografic_component.html"
wget "%rootSour%/home_intraday_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_intraday_component.html"
wget "%rootSour%/home_link_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_link_component.html"
wget "%rootSour%/home_spinner_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_spinner_component.html"
wget "%rootSour%/home_disclaimer_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_disclaimer_component.html"
wget "%rootSour%/home_modal_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_modal_component.html"
wget "%rootSour%/home_quote_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_quote_component.html"
wget "%rootSour%/home_iframe_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_iframe_component.html"
wget "%rootSour%/home_spacer_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_spacer_component.html"
wget "%rootSour%/home_social_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_social_component.html"
wget "%rootSour%/home_container_swiper_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_container_swiper_component.html"
wget "%rootSour%/home_swiper_frontpage_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_swiper_frontpage_component.html"
wget "%rootSour%/home_swiper_homepage_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_swiper_homepage_component.html"
wget "%rootSour%/home_tab_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_tab_component.html"
wget "%rootSour%/home_table_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_table_component.html"
wget "%rootSour%/home_text_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_text_component.html"
wget "%rootSour%/home_image_text_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_image_text_component.html"
wget "%rootSour%/home_video_text_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_video_text_component.html"
wget "%rootSour%/home_title_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_title_component.html"
wget "%rootSour%/home_worldwide_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_worldwide_component.html"
wget "%rootSour%/home_our_worldwide_presence_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_our_worldwide_presence_component.html"
REM COMPONENTS SINGLE PAGES
wget "%rootSour%/home_breadcrumb_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_breadcrumb_component.html"
wget "%rootSour%/home_datebar_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_datebar_component.html"
wget "%rootSour%/home_button_component.jsp" -a "%logDest%" -O "%rootDest%\%start%\home_button_component.html"
REM SINGLE PAGES
wget "%rootSour%/calendar.jsp" -a "%logDest%" -O "%rootDest%\%start%\calendar.html"
wget "%rootSour%/calendar-noresults.jsp" -a "%logDest%" -O "%rootDest%\%start%\calendar-noresults.html"
wget "%rootSour%/worldwide.jsp" -a "%logDest%" -O "%rootDest%\%start%\worldwide.html"
wget "%rootSour%/worldwideCountry.jsp" -a "%logDest%" -O "%rootDest%\%start%\worldwideCountry.html"
wget "%rootSour%/worldwideCountryLess.jsp" -a "%logDest%" -O "%rootDest%\%start%\worldwideCountryLess.html"
wget "%rootSour%/worldwideCompanyInfo.jsp" -a "%logDest%" -O "%rootDest%\%start%\worldwideCompanyInfo.html"
wget "%rootSour%/worldwideCompanyLessInfo.jsp" -a "%logDest%" -O "%rootDest%\%start%\worldwideCompanyLessInfo.html"
wget "%rootSour%/worldwideLightTool.jsp" -a "%logDest%" -O "%rootDest%\%start%\worldwideLightTool.html"
wget "%rootSour%/board_of_directors.jsp" -a "%logDest%" -O "%rootDest%\%start%\board_of_directors.html"
wget "%rootSour%/curriculum_vitae.jsp" -a "%logDest%" -O "%rootDest%\%start%\curriculum_vitae.html"
wget "%rootSour%/press_release.jsp" -a "%logDest%" -O "%rootDest%\%start%\press_release.html"
wget "%rootSour%/news.jsp" -a "%logDest%" -O "%rootDest%\%start%\news.html"
wget "%rootSour%/calendar-detail-landscape.jsp" -a "%logDest%" -O "%rootDest%\%start%\calendar-detail-landscape.html"
wget "%rootSour%/calendar-detail-portrait.jsp" -a "%logDest%" -O "%rootDest%\%start%\calendar-detail-portrait.html"
wget "%rootSour%/calendar-detail-video.jsp" -a "%logDest%" -O "%rootDest%\%start%\calendar-detail-video.html"
REM wget "%rootSour%/careers_form.jsp" -a "%logDest%" -O "%rootDest%\%start%\careers_form.html"
wget "%rootSour%/archives.jsp" -a "%logDest%" -O "%rootDest%\%start%\archives.html"
