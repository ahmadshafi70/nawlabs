<!DOCTYPE html>
<html lang="en-US">
<!-- Mirrored from dtcforce.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2024 00:27:02 GMT -->

<!-- **************Head Section ********************* -->
<?php include('layouts/head.php'); ?>
<!-- *******************End Head Section************ -->

<body class="home page-template page-template-page-fullwidth page-template-page-fullwidth-php page page-id-3159 wp-custom-logo ehf-template-thegem-elementor ehf-stylesheet-thegem-elementor thegem-effects-disabled fullscreen-search elementor-default elementor-kit-567 elementor-page elementor-page-3159">
 <script type="text/javascript">
  var gemSettings = {"isTouch":"","forcedLasyDisabled":"1","tabletPortrait":"1","tabletLandscape":"1","topAreaMobileDisable":"","parallaxDisabled":"","fillTopArea":"","themePath":"https:\/\/dtcforce.com\/wp-content\/themes\/thegem-elementor","rootUrl":"https:\/\/dtcforce.com","mobileEffectsEnabled":"","isRTL":""};
         (function() {
     function isTouchDevice() {
         return (('ontouchstart' in window) ||
             (navigator.MaxTouchPoints > 0) ||
             (navigator.msMaxTouchPoints > 0));
     }
  
     window.gemSettings.isTouch = isTouchDevice();
  
     function userAgentDetection() {
         var ua = navigator.userAgent.toLowerCase(),
         platform = navigator.platform.toLowerCase(),
         UA = ua.match(/(opera|ie|firefox|chrome|version)[\s\/:]([\w\d\.]+)?.*?(safari|version[\s\/:]([\w\d\.]+)|$)/) || [null, 'unknown', 0],
         mode = UA[1] == 'ie' && document.documentMode;
  
         window.gemBrowser = {
             name: (UA[1] == 'version') ? UA[3] : UA[1],
             version: UA[2],
             platform: {
                 name: ua.match(/ip(?:ad|od|hone)/) ? 'ios' : (ua.match(/(?:webos|android)/) || platform.match(/mac|win|linux/) || ['other'])[0]
                 }
         };
             }
  
     window.updateGemClientSize = function() {
         if (window.gemOptions == null || window.gemOptions == undefined) {
             window.gemOptions = {
                 first: false,
                 clientWidth: 0,
                 clientHeight: 0,
                 innerWidth: -1
             };
         }
  
         window.gemOptions.clientWidth = window.innerWidth || document.documentElement.clientWidth;
         if (document.body != null && !window.gemOptions.clientWidth) {
             window.gemOptions.clientWidth = document.body.clientWidth;
         }
  
         window.gemOptions.clientHeight = window.innerHeight || document.documentElement.clientHeight;
         if (document.body != null && !window.gemOptions.clientHeight) {
             window.gemOptions.clientHeight = document.body.clientHeight;
         }
     };
  
     window.updateGemInnerSize = function(width) {
         window.gemOptions.innerWidth = width != undefined ? width : (document.body != null ? document.body.clientWidth : 0);
     };
  
     userAgentDetection();
     window.updateGemClientSize(true);
  
     window.gemSettings.lasyDisabled = window.gemSettings.forcedLasyDisabled || (!window.gemSettings.mobileEffectsEnabled && (window.gemSettings.isTouch || window.gemOptions.clientWidth <= 800));
  })();
         (function() {
     if (window.gemBrowser.name == 'safari') {
         try {
             var safariVersion = parseInt(window.gemBrowser.version);
         } catch(e) {
             var safariVersion = 0;
         }
         if (safariVersion >= 9) {
             window.gemSettings.parallaxDisabled = true;
             window.gemSettings.fillTopArea = true;
         }
     }
  })();
         (function() {
     var fullwithData = {
         page: null,
         pageWidth: 0,
         pageOffset: {},
         fixVcRow: true,
         pagePaddingLeft: 0
     };
  
     function updateFullwidthData() {
         fullwithData.pageOffset = fullwithData.page.getBoundingClientRect();
         fullwithData.pageWidth = parseFloat(fullwithData.pageOffset.width);
         fullwithData.pagePaddingLeft = 0;
  
         if (fullwithData.page.className.indexOf('vertical-header') != -1) {
             fullwithData.pagePaddingLeft = 45;
             if (fullwithData.pageWidth >= 1600) {
                 fullwithData.pagePaddingLeft = 360;
             }
             if (fullwithData.pageWidth < 980) {
                 fullwithData.pagePaddingLeft = 0;
             }
         }
     }
  
     function gem_fix_fullwidth_position(element) {
         if (element == null) {
             return false;
         }
  
         if (fullwithData.page == null) {
             fullwithData.page = document.getElementById('page');
             updateFullwidthData();
         }
  
         /*if (fullwithData.pageWidth < 1170) {
             return false;
         }*/
  
         if (!fullwithData.fixVcRow) {
             return false;
         }
  
         if (element.previousElementSibling != null && element.previousElementSibling != undefined && element.previousElementSibling.className.indexOf('fullwidth-block') == -1) {
             var elementParentViewportOffset = element.previousElementSibling.getBoundingClientRect();
         } else {
             var elementParentViewportOffset = element.parentNode.getBoundingClientRect();
         }
  
         /*if (elementParentViewportOffset.top > window.gemOptions.clientHeight) {
             fullwithData.fixVcRow = false;
             return false;
         }*/
  
         if (element.className.indexOf('vc_row') != -1) {
             var elementMarginLeft = -21;
             var elementMarginRight = -21;
         } else {
             var elementMarginLeft = 0;
             var elementMarginRight = 0;
         }
  
         var offset = parseInt(fullwithData.pageOffset.left + 0.5) - parseInt((elementParentViewportOffset.left < 0 ? 0 : elementParentViewportOffset.left) + 0.5) - elementMarginLeft + fullwithData.pagePaddingLeft;
         var offsetKey = window.gemSettings.isRTL ? 'right' : 'left';
  
         element.style.position = 'relative';
         element.style[offsetKey] = offset + 'px';
         element.style.width = fullwithData.pageWidth - fullwithData.pagePaddingLeft + 'px';
  
         if (element.className.indexOf('vc_row') == -1) {
             element.setAttribute('data-fullwidth-updated', 1);
         }
  
         if (element.className.indexOf('vc_row') != -1 && !element.hasAttribute('data-vc-stretch-content')) {
             var el_full = element.parentNode.querySelector('.vc_row-full-width-before');
             var padding = -1 * offset;
             0 > padding && (padding = 0);
             var paddingRight = fullwithData.pageWidth - padding - el_full.offsetWidth + elementMarginLeft + elementMarginRight;
             0 > paddingRight && (paddingRight = 0);
             element.style.paddingLeft = padding + 'px';
             element.style.paddingRight = paddingRight + 'px';
         }
     }
  
     window.gem_fix_fullwidth_position = gem_fix_fullwidth_position;
  
     document.addEventListener('DOMContentLoaded', function() {
         var classes = [];
  
         if (window.gemSettings.isTouch) {
             document.body.classList.add('thegem-touch');
         }
  
         if (window.gemSettings.lasyDisabled && !window.gemSettings.forcedLasyDisabled) {
             document.body.classList.add('thegem-effects-disabled');
         }
     });
  
     if (window.gemSettings.parallaxDisabled) {
         var head  = document.getElementsByTagName('head')[0],
             link  = document.createElement('style');
         link.rel  = 'stylesheet';
         link.type = 'text/css';
         link.innerHTML = ".fullwidth-block.fullwidth-block-parallax-fixed .fullwidth-block-background { background-attachment: scroll !important; }";
         head.appendChild(link);
     }
  })();
  
  (function() {
     setTimeout(function() {
         var preloader = document.getElementById('page-preloader');
         if (preloader != null && preloader != undefined) {
             preloader.className += ' preloader-loaded';
         }
     }, window.pagePreloaderHideTime || 1000);
  })();
 </script>
 <div class="layout-fullwidth header-style-2" id="page">
 <?php include('layouts/header.php'); ?>
  <div class="site-main" id="main">
   <div class="main-content" id="main-content">
    <div class="block-content no-bottom-margin no-top-margin">
     <div class="panel">
      <div class="panel-center">
       <article class="post-3159 page type-page status-publish has-post-thumbnail" id="post-3159">
        <div class="entry-content post-content">
         <div class="container"></div><!-- .container -->
         <div class="fullwidth-content">
          <div class="elementor elementor-3159" data-elementor-id="3159" data-elementor-type="wp-page">
           <div class="elementor-inner">
            <div class="elementor-section-wrap">
             <section class="elementor-section elementor-top-section elementor-element elementor-element-75bb83b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="75bb83b" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;,&quot;animation_delay&quot;:0}" id="home">
              <div class="elementor-container elementor-column-gap-thegem">
               <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-07eadbd" data-element_type="column" data-id="07eadbd" data-settings="{&quot;thegem_interaction_vertical_scroll&quot;:&quot;yes&quot;,&quot;animation&quot;:&quot;none&quot;,&quot;animation_delay&quot;:0,&quot;thegem_interaction_vertical_scroll_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:4,&quot;sizes&quot;:[]},&quot;thegem_interaction_vertical_scroll_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;thegem_interaction_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                 <div class="elementor-column-wrap elementor-element-populated">
                  <div class="elementor-widget-wrap">
                   <div class="elementor-element elementor-element-52166a8 elementor-absolute flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-styledimage" data-element_type="widget" data-id="52166a8" data-settings="{&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/dtcforce.com\/wp-content\/uploads\/2022\/04\/main-area-dots.png&quot;,&quot;id&quot;:1739,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;_position&quot;:&quot;absolute&quot;,&quot;thegem_interaction_vertical_scroll&quot;:&quot;yes&quot;,&quot;thegem_interaction_vertical_scroll_direction&quot;:&quot;negative&quot;,&quot;thegem_interaction_horizontal_scroll&quot;:&quot;yes&quot;,&quot;thegem_interaction_horizontal_scroll_direction&quot;:&quot;negative&quot;,&quot;thegem_interaction_mouse&quot;:&quot;yes&quot;,&quot;thegem_interaction_mouse_direction&quot;:&quot;negative&quot;,&quot;thegem_interaction_mouse_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.2,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:0,&quot;thegem_elementor_preset&quot;:&quot;default&quot;,&quot;thegem_interaction_vertical_scroll_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:4,&quot;sizes&quot;:[]},&quot;thegem_interaction_vertical_scroll_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;thegem_interaction_horizontal_scroll_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:4,&quot;sizes&quot;:[]},&quot;thegem_interaction_horizontal_scroll_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;thegem_interaction_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="thegem-styledimage.default">
                    <div class="elementor-widget-container">
                     <div class="styled-image-wrapper">
                      <div class="gem-image gem-wrapbox gem-wrapbox-default gem-wrapbox-position-left">
                       <div class="gem-wrapbox-inner"> <img alt="main-area-dots" class="gem-wrapbox-element img-responsive" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="wp-content/uploads/2022/04/main-area-dots.png" id="tgpli-660df3d3706dd">
                        <script>
                         window.tgpQueue.add('tgpli-660df3d3706dd')
                        </script><noscript><img alt="main-area-dots" class="gem-wrapbox-element img-responsive" src="wp-content/uploads/2022/04/main-area-dots.png"></noscript>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                   <div class="elementor-element elementor-element-2d2423f elementor-widget__width-initial flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-element_type="widget" data-id="2d2423f" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:0,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                     <div class="title-h1 elementor-heading-title elementor-size-default"> Salesforce consulting that merges experience with innovation </div>
                    </div>
                   </div>
                   <div class="elementor-element elementor-element-b150353 elementor-widget__width-initial flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-element_type="widget" data-id="b150353" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:0,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                     <div class="elementor-text-editor elementor-clearfix">
                      <p>A team of passionate problem-solvers, optimizing business processes with&nbsp;Salesforce consulting services,&nbsp;one successful project at a time.</p>
                     </div>
                    </div>
                   </div>
                   <div class="elementor-element elementor-element-ec0870e flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-styledbutton" data-element_type="widget" data-id="ec0870e" data-settings="{&quot;thegem_button_skin&quot;:&quot;outline&quot;,&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:0,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="thegem-styledbutton.default">
                    <div class="elementor-widget-container">
                     <div class="gem-button-container gem-widget-button"> <a class="gem-button gem-button-size-large gem-button-text-weight-bold gem-button-style-outline gem-button-border-4" href="expertise/index.html"><span class="gem-inner-wrapper-btn"><span class="gem-text-button">View Services</span></span></a> </div>
                    </div>
                   </div>
                   <div class="elementor-element elementor-element-a795edd elementor-absolute flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-styledimage" data-element_type="widget" data-id="a795edd" data-settings="{&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/dtcforce.com\/wp-content\/uploads\/2022\/06\/main-cloud.webp&quot;,&quot;id&quot;:2516,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;_position&quot;:&quot;absolute&quot;,&quot;thegem_interaction_horizontal_scroll&quot;:&quot;yes&quot;,&quot;thegem_interaction_horizontal_scroll_direction&quot;:&quot;negative&quot;,&quot;thegem_interaction_horizontal_scroll_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3,&quot;sizes&quot;:[]},&quot;thegem_interaction_mouse&quot;:&quot;yes&quot;,&quot;thegem_interaction_mouse_direction&quot;:&quot;negative&quot;,&quot;thegem_interaction_mouse_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1.2,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:0,&quot;thegem_interaction_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;thegem_elementor_preset&quot;:&quot;default&quot;,&quot;thegem_interaction_horizontal_scroll_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}}}" data-widget_type="thegem-styledimage.default">
                    <div class="elementor-widget-container">
                     <div class="styled-image-wrapper">
                      <div class="gem-image gem-wrapbox gem-wrapbox-default gem-wrapbox-position-right">
                       <div class="gem-wrapbox-inner"> <img alt="main-cloud" class="gem-wrapbox-element img-responsive" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/06/main-cloud.webp" id="tgpli-660df3d3706e9">
                        <script>
                         window.tgpQueue.add('tgpli-660df3d3706e9')
                        </script><noscript><img alt="main-cloud" class="gem-wrapbox-element img-responsive" src="wp-content/uploads/2022/06/main-cloud.webp"></noscript>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                   <div class="elementor-element elementor-element-fed1f93 elementor-absolute animated-fast elementor-widget__width-initial flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-styledimage" data-element_type="widget" data-id="fed1f93" data-settings="{&quot;image&quot;:{&quot;url&quot;:&quot;http:\/\/dtcforce.com\/wp-content\/uploads\/2024\/02\/summit-badge.png&quot;,&quot;id&quot;:9632,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;_position&quot;:&quot;absolute&quot;,&quot;thegem_interaction_horizontal_scroll&quot;:&quot;yes&quot;,&quot;thegem_interaction_horizontal_scroll_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;thegem_interaction_mouse&quot;:&quot;yes&quot;,&quot;thegem_interaction_mouse_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.6,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:0,&quot;thegem_interaction_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;thegem_elementor_preset&quot;:&quot;default&quot;,&quot;thegem_interaction_horizontal_scroll_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}}}" data-widget_type="thegem-styledimage.default">
                    <div class="elementor-widget-container">
                     <div class="styled-image-wrapper">
                      <div class="gem-image gem-wrapbox gem-wrapbox-default gem-wrapbox-position-right">
                       <div class="gem-wrapbox-inner"> <img alt="summit-badge" class="gem-wrapbox-element img-responsive" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2024/02/summit-badge.png" id="tgpli-660df3d3706f0">
                        <script>
                         window.tgpQueue.add('tgpli-660df3d3706f0')
                        </script><noscript><img alt="summit-badge" class="gem-wrapbox-element img-responsive" src="wp-content/uploads/2024/02/summit-badge.png"></noscript>
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
             </section>
             <section class="elementor-section elementor-top-section elementor-element elementor-element-3a4e6d9 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="3a4e6d9" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;,&quot;animation_delay&quot;:0}" id="services">
              <div class="elementor-container elementor-column-gap-no">
               <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0f34257" data-element_type="column" data-id="0f34257" data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;animation_delay&quot;:0}">
                 <div class="elementor-column-wrap elementor-element-populated">
                  <div class="elementor-widget-wrap">
                   <section class="elementor-section elementor-inner-section elementor-element elementor-element-f6f02ad elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="f6f02ad" data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;animation_mobile&quot;:&quot;none&quot;,&quot;animation_delay&quot;:0}">
                    <div class="elementor-container elementor-column-gap-thegem">
                     <div class="elementor-row">
                      <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-867919b" data-element_type="column" data-id="867919b" data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;animation_mobile&quot;:&quot;none&quot;,&quot;animation_delay&quot;:0}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-5829c5d elementor-arrows-position-inside elementor-pagination-position-outside flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image-carousel" data-element_type="widget" data-id="5829c5d" data-settings="{&quot;slides_to_show&quot;:&quot;5&quot;,&quot;slides_to_show_mobile&quot;:&quot;1&quot;,&quot;autoplay_speed&quot;:3000,&quot;_animation&quot;:&quot;none&quot;,&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500}" data-widget_type="image-carousel.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-image-carousel-wrapper swiper-container" dir="ltr">
                            <div class="elementor-image-carousel swiper-wrapper">
                             <div class="swiper-slide">
                              <figure class="swiper-slide-inner"> <img alt="client-logoa-11" class="swiper-slide-image" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/06/client-logoa-11-150x150.webp" id="tgpli-660df3d3706f8">
                               <script>
                                window.tgpQueue.add('tgpli-660df3d3706f8')
                               </script><noscript><img alt="client-logoa-11" class="swiper-slide-image" src="wp-content/uploads/2022/06/client-logoa-11-150x150.webp"></noscript>
                              </figure>
                             </div>
                             <div class="swiper-slide">
                              <figure class="swiper-slide-inner"> <img alt="client-logoa-10" class="swiper-slide-image" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/06/client-logoa-10-150x150.webp" id="tgpli-660df3d3706fd">
                               <script>
                                window.tgpQueue.add('tgpli-660df3d3706fd')
                               </script><noscript><img alt="client-logoa-10" class="swiper-slide-image" src="wp-content/uploads/2022/06/client-logoa-10-150x150.webp"></noscript>
                              </figure>
                             </div>
                             <div class="swiper-slide">
                              <figure class="swiper-slide-inner"> <img alt="whatsapp-image-2022-04-06-at-9.38.28-pm" class="swiper-slide-image" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/06/whatsapp-image-2022-04-06-at-9.38.28-pm-150x150.webp" id="tgpli-660df3d370701">
                               <script>
                                window.tgpQueue.add('tgpli-660df3d370701')
                               </script><noscript><img alt="whatsapp-image-2022-04-06-at-9.38.28-pm" class="swiper-slide-image" src="wp-content/uploads/2022/06/whatsapp-image-2022-04-06-at-9.38.28-pm-150x150.webp"></noscript>
                              </figure>
                             </div>
                             <div class="swiper-slide">
                              <figure class="swiper-slide-inner"> <img alt="whatsapp-image-2022-04-06-at-9.38.27-pm-2" class="swiper-slide-image" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/06/whatsapp-image-2022-04-06-at-9.38.27-pm-2-150x150.webp" id="tgpli-660df3d370707">
                               <script>
                                window.tgpQueue.add('tgpli-660df3d370707')
                               </script><noscript><img alt="whatsapp-image-2022-04-06-at-9.38.27-pm-2" class="swiper-slide-image" src="wp-content/uploads/2022/06/whatsapp-image-2022-04-06-at-9.38.27-pm-2-150x150.webp"></noscript>
                              </figure>
                             </div>
                             <div class="swiper-slide">
                              <figure class="swiper-slide-inner"> <img alt="whatsapp-image-2022-04-06-at-9.38.26-pm" class="swiper-slide-image" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/06/whatsapp-image-2022-04-06-at-9.38.26-pm-150x150.webp" id="tgpli-660df3d37070b">
                               <script>
                                window.tgpQueue.add('tgpli-660df3d37070b')
                               </script><noscript><img alt="whatsapp-image-2022-04-06-at-9.38.26-pm" class="swiper-slide-image" src="wp-content/uploads/2022/06/whatsapp-image-2022-04-06-at-9.38.26-pm-150x150.webp"></noscript>
                              </figure>
                             </div>
                             <div class="swiper-slide">
                              <figure class="swiper-slide-inner"> <img alt="whatsapp-image-2022-04-06-at-9.38.26-pm-1" class="swiper-slide-image" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/06/whatsapp-image-2022-04-06-at-9.38.26-pm-1-150x150.webp" id="tgpli-660df3d370710">
                               <script>
                                window.tgpQueue.add('tgpli-660df3d370710')
                               </script><noscript><img alt="whatsapp-image-2022-04-06-at-9.38.26-pm-1" class="swiper-slide-image" src="wp-content/uploads/2022/06/whatsapp-image-2022-04-06-at-9.38.26-pm-1-150x150.webp"></noscript>
                              </figure>
                             </div>
                             <div class="swiper-slide">
                              <figure class="swiper-slide-inner"> <img alt="whatsapp-image-2022-04-06-at-9.38.25-pm" class="swiper-slide-image" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/06/whatsapp-image-2022-04-06-at-9.38.25-pm-150x150.webp" id="tgpli-660df3d370715">
                               <script>
                                window.tgpQueue.add('tgpli-660df3d370715')
                               </script><noscript><img alt="whatsapp-image-2022-04-06-at-9.38.25-pm" class="swiper-slide-image" src="wp-content/uploads/2022/06/whatsapp-image-2022-04-06-at-9.38.25-pm-150x150.webp"></noscript>
                              </figure>
                             </div>
                             <div class="swiper-slide">
                              <figure class="swiper-slide-inner"> <img alt="client-logoa-15_1" class="swiper-slide-image" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/06/client-logoa-15_1-150x150.webp" id="tgpli-660df3d370719">
                               <script>
                                window.tgpQueue.add('tgpli-660df3d370719')
                               </script><noscript><img alt="client-logoa-15_1" class="swiper-slide-image" src="wp-content/uploads/2022/06/client-logoa-15_1-150x150.webp"></noscript>
                              </figure>
                             </div>
                             <div class="swiper-slide">
                              <figure class="swiper-slide-inner"> <img alt="whatsapp-image-2022-04-06-at-9.38.27-pm" class="swiper-slide-image" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/06/whatsapp-image-2022-04-06-at-9.38.27-pm-150x150.webp" id="tgpli-660df3d37071e">
                               <script>
                                window.tgpQueue.add('tgpli-660df3d37071e')
                               </script><noscript><img alt="whatsapp-image-2022-04-06-at-9.38.27-pm" class="swiper-slide-image" src="wp-content/uploads/2022/06/whatsapp-image-2022-04-06-at-9.38.27-pm-150x150.webp"></noscript>
                              </figure>
                             </div>
                             <div class="swiper-slide">
                              <figure class="swiper-slide-inner"> <img alt="whatsapp-image-2022-04-06-at-9.38.27-pm-1" class="swiper-slide-image" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/06/whatsapp-image-2022-04-06-at-9.38.27-pm-1-150x150.webp" id="tgpli-660df3d370722">
                               <script>
                                window.tgpQueue.add('tgpli-660df3d370722')
                               </script><noscript><img alt="whatsapp-image-2022-04-06-at-9.38.27-pm-1" class="swiper-slide-image" src="wp-content/uploads/2022/06/whatsapp-image-2022-04-06-at-9.38.27-pm-1-150x150.webp"></noscript>
                              </figure>
                             </div>
                             <div class="swiper-slide">
                              <figure class="swiper-slide-inner"> <img alt="client-logoa-12" class="swiper-slide-image" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/06/client-logoa-12-150x150.webp" id="tgpli-660df3d370727">
                               <script>
                                window.tgpQueue.add('tgpli-660df3d370727')
                               </script><noscript><img alt="client-logoa-12" class="swiper-slide-image" src="wp-content/uploads/2022/06/client-logoa-12-150x150.webp"></noscript>
                              </figure>
                             </div>
                             <div class="swiper-slide">
                              <figure class="swiper-slide-inner"> <img alt="client-logoa-13" class="swiper-slide-image" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/06/client-logoa-13-150x150.webp" id="tgpli-660df3d37072b">
                               <script>
                                window.tgpQueue.add('tgpli-660df3d37072b')
                               </script><noscript><img alt="client-logoa-13" class="swiper-slide-image" src="wp-content/uploads/2022/06/client-logoa-13-150x150.webp"></noscript>
                              </figure>
                             </div>
                             <div class="swiper-slide">
                              <figure class="swiper-slide-inner"> <img alt="client-logoa-14" class="swiper-slide-image" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/06/client-logoa-14-150x150.webp" id="tgpli-660df3d37072f">
                               <script>
                                window.tgpQueue.add('tgpli-660df3d37072f')
                               </script><noscript><img alt="client-logoa-14" class="swiper-slide-image" src="wp-content/uploads/2022/06/client-logoa-14-150x150.webp"></noscript>
                              </figure>
                             </div>
                             <div class="swiper-slide">
                              <figure class="swiper-slide-inner"> <img alt="Client Logoa-08" class="swiper-slide-image" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/client-logoa-08-1-150x150.png" id="tgpli-660df3d370734">
                               <script>
                                window.tgpQueue.add('tgpli-660df3d370734')
                               </script><noscript><img alt="Client Logoa-08" class="swiper-slide-image" src="wp-content/uploads/2022/04/client-logoa-08-1-150x150.png"></noscript>
                              </figure>
                             </div>
                             <div class="swiper-slide">
                              <figure class="swiper-slide-inner"> <img alt="Client Logoa-09" class="swiper-slide-image" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/client-logoa-09-150x150.png" id="tgpli-660df3d370738">
                               <script>
                                window.tgpQueue.add('tgpli-660df3d370738')
                               </script><noscript><img alt="Client Logoa-09" class="swiper-slide-image" src="wp-content/uploads/2022/04/client-logoa-09-150x150.png"></noscript>
                              </figure>
                             </div>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="elementor-swiper-button elementor-swiper-button-prev"> <i aria-hidden="true" class="eicon-chevron-left"></i> <span class="elementor-screen-only">Previous</span> </div>
                            <div class="elementor-swiper-button elementor-swiper-button-next"> <i aria-hidden="true" class="eicon-chevron-right"></i> <span class="elementor-screen-only">Next</span> </div>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-aa89ecd flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-element_type="widget" data-id="aa89ecd" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:0,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                           <div class="title-h2 elementor-heading-title elementor-size-default"> We are a force to be reckoned with. </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-eb9bf77 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-element_type="widget" data-id="eb9bf77" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:0,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-text-editor elementor-clearfix">
                            <p><span style="font-weight: 400;">Your</span> <span style="font-weight: 400;">business automation</span> <span style="font-weight: 400;">journey begins here. Increase organizational efficiency by zeroing in on process constraints and digitizing your operations with the</span> <span style="font-weight: 400;">Salesforce platform.</span> <span style="font-weight: 400;">Our</span> <span style="font-weight: 400;">business consultants</span> <span style="font-weight: 400;">go above and beyond to align your strategies and growth objectives with your vision.&nbsp;&nbsp;</span></p>
                            <p><span style="font-weight: 400;">At DTC Force, we offer salesforce consulting that brings industry-specific solutions to maximize your potential. We are driven to get you scalable growth that keeps pace with the changing business landscape. Our personalized solutions transform your customer and employee experiences without reinventing the wheel.</span></p>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </section>
                   <section class="elementor-section elementor-inner-section elementor-element elementor-element-a6ed1a4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="a6ed1a4" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
                    <div class="elementor-container elementor-column-gap-thegem">
                     <div class="elementor-row">
                      <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-8c9140c" data-element_type="column" data-id="8c9140c" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-bcdc9cf elementor-tabs-alignment-center elementor-tabs-view-horizontal flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-tabs" data-element_type="widget" data-id="bcdc9cf" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:0}" data-widget_type="tabs.default" id="clouds-tabs">
                          <div class="elementor-widget-container">
                           <div class="elementor-tabs">
                            <div class="elementor-tabs-wrapper" role="tablist">
                             <div aria-controls="elementor-tab-content-1981" aria-expanded="false" aria-selected="true" class="elementor-tab-title elementor-tab-desktop-title" data-tab="1" id="elementor-tab-title-1981" role="tab" tabindex="0"> <a href="#">Sales Cloud</a> </div>
                             <div aria-controls="elementor-tab-content-1982" aria-expanded="false" aria-selected="false" class="elementor-tab-title elementor-tab-desktop-title" data-tab="2" id="elementor-tab-title-1982" role="tab" tabindex="-1"> <a href="#">Service Cloud</a> </div>
                             <div aria-controls="elementor-tab-content-1983" aria-expanded="false" aria-selected="false" class="elementor-tab-title elementor-tab-desktop-title" data-tab="3" id="elementor-tab-title-1983" role="tab" tabindex="-1"> <a href="#">Experience Cloud</a> </div>
                             <div aria-controls="elementor-tab-content-1984" aria-expanded="false" aria-selected="false" class="elementor-tab-title elementor-tab-desktop-title" data-tab="4" id="elementor-tab-title-1984" role="tab" tabindex="-1"> <a href="#">Pardot</a> </div>
                             <div aria-controls="elementor-tab-content-1985" aria-expanded="false" aria-selected="false" class="elementor-tab-title elementor-tab-desktop-title" data-tab="5" id="elementor-tab-title-1985" role="tab" tabindex="-1"> <a href="#">Marketing Cloud</a> </div>
                             <div aria-controls="elementor-tab-content-1986" aria-expanded="false" aria-selected="false" class="elementor-tab-title elementor-tab-desktop-title" data-tab="6" id="elementor-tab-title-1986" role="tab" tabindex="-1"> <a href="#">CPQ</a> </div>
                            </div>
                            <div aria-orientation="vertical" class="elementor-tabs-content-wrapper" role="tablist">
                             <div aria-controls="elementor-tab-content-1981" aria-expanded="false" aria-selected="true" class="elementor-tab-title elementor-tab-mobile-title" data-tab="1" role="tab" tabindex="0"> Sales Cloud </div>
                             <div aria-labelledby="elementor-tab-title-1981" class="elementor-tab-content elementor-clearfix" data-tab="1" hidden="false" id="elementor-tab-content-1981" role="tabpanel" tabindex="0">
                              <div class="main-content">
                               <div class="content-col">
                                <p><strong>Elevate your sales methodology</strong><br> Salesforce Sales Cloud is a centralized force behind your entire business. Take advantage of advanced sales automation, refined analytics, and establish comprehensive management that extends to every facet of your customer sales journey.<br> <a href="services/sales-cloud/index.html">Read More</a></p>
                               </div>
                               <div class="content-col"> <img alt="" class="alignnone wp-image-2526 size-medium" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/06/cloud_sales-17-300x211.png" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2022/06/cloud_sales-17-300x211.png 300w, https://dtcforce.com/wp-content/uploads/2022/06/cloud_sales-17.png 446w" height="211" id="tgpli-660df3d37074a" sizes="(max-width: 300px) 100vw, 300px" width="300">
                                <script>
                                 window.tgpQueue.add('tgpli-660df3d37074a')
                                </script><noscript><img alt="" class="alignnone wp-image-2526 size-medium" height="211" sizes="(max-width: 300px) 100vw, 300px" src="wp-content/uploads/2022/06/cloud_sales-17-300x211.png" srcset="https://dtcforce.com/wp-content/uploads/2022/06/cloud_sales-17-300x211.png 300w, https://dtcforce.com/wp-content/uploads/2022/06/cloud_sales-17.png 446w" width="300"></noscript>
                               </div>
                              </div>
                             </div>
                             <div aria-controls="elementor-tab-content-1982" aria-expanded="false" aria-selected="false" class="elementor-tab-title elementor-tab-mobile-title" data-tab="2" role="tab" tabindex="-1"> Service Cloud </div>
                             <div aria-labelledby="elementor-tab-title-1982" class="elementor-tab-content elementor-clearfix" data-tab="2" hidden="hidden" id="elementor-tab-content-1982" role="tabpanel" tabindex="0">
                              <div class="main-content">
                               <div class="content-col">
                                <p><strong>Serve your customers with efficiency and diligence</strong><br> Salesforce Service Cloud is designed by nature to drive efficiencies into service operations. Take advantage of streamlined case management, automated service procedures, and intelligent knowledge recommendations for effective resolution<br> <a href="services/salesforce-service-cloud/index.html">Read More</a></p>
                               </div>
                               <div class="content-col"> <img alt="" class="alignnone wp-image-2525 size-medium" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/06/cloud-20-1-300x211.webp" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2022/06/cloud-20-1-300x211.webp 300w, https://dtcforce.com/wp-content/uploads/2022/06/cloud-20-1.webp 446w" height="211" id="tgpli-660df3d370755" sizes="(max-width: 300px) 100vw, 300px" width="300">
                                <script>
                                 window.tgpQueue.add('tgpli-660df3d370755')
                                </script><noscript><img alt="" class="alignnone wp-image-2525 size-medium" height="211" sizes="(max-width: 300px) 100vw, 300px" src="wp-content/uploads/2022/06/cloud-20-1-300x211.webp" srcset="https://dtcforce.com/wp-content/uploads/2022/06/cloud-20-1-300x211.webp 300w, https://dtcforce.com/wp-content/uploads/2022/06/cloud-20-1.webp 446w" width="300"></noscript>
                               </div>
                              </div>
                             </div>
                             <div aria-controls="elementor-tab-content-1983" aria-expanded="false" aria-selected="false" class="elementor-tab-title elementor-tab-mobile-title" data-tab="3" role="tab" tabindex="-1"> Experience Cloud </div>
                             <div aria-labelledby="elementor-tab-title-1983" class="elementor-tab-content elementor-clearfix" data-tab="3" hidden="hidden" id="elementor-tab-content-1983" role="tabpanel" tabindex="0">
                              <div class="main-content">
                               <div class="content-col">
                                <p><strong>Crafting a one-of-a-kind experience for customers and businesses</strong><br> No matter which industry you are in, providing top notch experience always puts you ahead in the game. For business owners it has become paramount to develop hassle free experiences, the Salesforce Experience Cloud enables that seamlessly with multple systems.<br> <a href="services/experience-cloud/index.html">Read More</a></p>
                               </div>
                               <div class="content-col"> <img alt="" class="alignnone wp-image-2527 size-medium" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/06/cloud-21-300x210.webp" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2022/06/cloud-21-300x210.webp 300w, https://dtcforce.com/wp-content/uploads/2022/06/cloud-21.webp 445w" height="210" id="tgpli-660df3d37075e" sizes="(max-width: 300px) 100vw, 300px" width="300">
                                <script>
                                 window.tgpQueue.add('tgpli-660df3d37075e')
                                </script><noscript><img alt="" class="alignnone wp-image-2527 size-medium" height="210" sizes="(max-width: 300px) 100vw, 300px" src="wp-content/uploads/2022/06/cloud-21-300x210.webp" srcset="https://dtcforce.com/wp-content/uploads/2022/06/cloud-21-300x210.webp 300w, https://dtcforce.com/wp-content/uploads/2022/06/cloud-21.webp 445w" width="300"></noscript>
                               </div>
                              </div>
                             </div>
                             <div aria-controls="elementor-tab-content-1984" aria-expanded="false" aria-selected="false" class="elementor-tab-title elementor-tab-mobile-title" data-tab="4" role="tab" tabindex="-1"> Pardot </div>
                             <div aria-labelledby="elementor-tab-title-1984" class="elementor-tab-content elementor-clearfix" data-tab="4" hidden="hidden" id="elementor-tab-content-1984" role="tabpanel" tabindex="0">
                              <div class="main-content">
                               <div class="content-col">
                                <p><strong>Marketing automation at your fingertips</strong><br> Salesforce Pardot helps curate your customer experience and build meaningful relationships. Take advantage of personalized dynamic campaigns, automated lead assignments, and advanced customer analytics.<br> <a href="services/salesforce-pardot/index.html">Read More</a></p>
                               </div>
                               <div class="content-col"> <img alt="" class="alignnone wp-image-2528 size-medium" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/06/cloud-22-300x210.webp" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2022/06/cloud-22-300x210.webp 300w, https://dtcforce.com/wp-content/uploads/2022/06/cloud-22.webp 446w" height="210" id="tgpli-660df3d370768" sizes="(max-width: 300px) 100vw, 300px" width="300">
                                <script>
                                 window.tgpQueue.add('tgpli-660df3d370768')
                                </script><noscript><img alt="" class="alignnone wp-image-2528 size-medium" height="210" sizes="(max-width: 300px) 100vw, 300px" src="wp-content/uploads/2022/06/cloud-22-300x210.webp" srcset="https://dtcforce.com/wp-content/uploads/2022/06/cloud-22-300x210.webp 300w, https://dtcforce.com/wp-content/uploads/2022/06/cloud-22.webp 446w" width="300"></noscript>
                               </div>
                              </div>
                             </div>
                             <div aria-controls="elementor-tab-content-1985" aria-expanded="false" aria-selected="false" class="elementor-tab-title elementor-tab-mobile-title" data-tab="5" role="tab" tabindex="-1"> Marketing Cloud </div>
                             <div aria-labelledby="elementor-tab-title-1985" class="elementor-tab-content elementor-clearfix" data-tab="5" hidden="hidden" id="elementor-tab-content-1985" role="tabpanel" tabindex="0">
                              <div class="main-content">
                               <div class="content-col">
                                <p><strong>Make every touch point count</strong><br> <br> Marketing is all about making sure you catch your prospect at the right moment, in the right place with the right messaging. Gone are the days when you had to figure out all those pain-points, with Salesforce Marketing Cloud &#8211; it can be done seamlessly with an extremely powerful tool.<br> <br> <a href="services/salesforce-marketing-cloud/index.html">Read More</a></p>
                               </div>
                               <div class="content-col"> <img alt="" class="alignnone wp-image-2529 size-medium" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/06/cloud_marketing-300x211.webp" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2022/06/cloud_marketing-300x211.webp 300w, https://dtcforce.com/wp-content/uploads/2022/06/cloud_marketing.webp 446w" height="211" id="tgpli-660df3d370771" sizes="(max-width: 300px) 100vw, 300px" width="300">
                                <script>
                                 window.tgpQueue.add('tgpli-660df3d370771')
                                </script><noscript><img alt="" class="alignnone wp-image-2529 size-medium" height="211" sizes="(max-width: 300px) 100vw, 300px" src="wp-content/uploads/2022/06/cloud_marketing-300x211.webp" srcset="https://dtcforce.com/wp-content/uploads/2022/06/cloud_marketing-300x211.webp 300w, https://dtcforce.com/wp-content/uploads/2022/06/cloud_marketing.webp 446w" width="300"></noscript>
                               </div>
                              </div>
                             </div>
                             <div aria-controls="elementor-tab-content-1986" aria-expanded="false" aria-selected="false" class="elementor-tab-title elementor-tab-mobile-title" data-tab="6" role="tab" tabindex="-1"> CPQ </div>
                             <div aria-labelledby="elementor-tab-title-1986" class="elementor-tab-content elementor-clearfix" data-tab="6" hidden="hidden" id="elementor-tab-content-1986" role="tabpanel" tabindex="0">
                              <div class="main-content">
                               <div class="content-col">
                                <p><strong>Configure Price Quote at lightning speeds</strong><br> Shortening the process of finalizing quote with clients, through data driven practices, makes the whole process of closing sales &#8211; a breeze.<br> <br> <a href="services/cpq/index.html">Read More</a></p>
                               </div>
                               <div class="content-col"> <img alt="" class="alignnone wp-image-2530 size-medium" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/06/cloud_cpq-19-300x210.webp" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2022/06/cloud_cpq-19-300x210.webp 300w, https://dtcforce.com/wp-content/uploads/2022/06/cloud_cpq-19.webp 445w" height="210" id="tgpli-660df3d37077a" sizes="(max-width: 300px) 100vw, 300px" width="300">
                                <script>
                                 window.tgpQueue.add('tgpli-660df3d37077a')
                                </script><noscript><img alt="" class="alignnone wp-image-2530 size-medium" height="210" sizes="(max-width: 300px) 100vw, 300px" src="wp-content/uploads/2022/06/cloud_cpq-19-300x210.webp" srcset="https://dtcforce.com/wp-content/uploads/2022/06/cloud_cpq-19-300x210.webp 300w, https://dtcforce.com/wp-content/uploads/2022/06/cloud_cpq-19.webp 445w" width="300"></noscript>
                               </div>
                              </div>
                             </div>
                            </div>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-8a07915 elementor-absolute elementor-hidden-tablet elementor-hidden-mobile flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-styledimage" data-element_type="widget" data-id="8a07915" data-settings="{&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/dtcforce.com\/wp-content\/uploads\/2022\/04\/secondary-dots.png&quot;,&quot;id&quot;:1742,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;_position&quot;:&quot;absolute&quot;,&quot;thegem_interaction_horizontal_scroll&quot;:&quot;yes&quot;,&quot;thegem_interaction_horizontal_scroll_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;none&quot;,&quot;thegem_elementor_preset&quot;:&quot;default&quot;,&quot;thegem_interaction_horizontal_scroll_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;thegem_interaction_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="thegem-styledimage.default">
                          <div class="elementor-widget-container">
                           <div class="styled-image-wrapper">
                            <div class="gem-image gem-wrapbox gem-wrapbox-default gem-wrapbox-position-left">
                             <div class="gem-wrapbox-inner"> <img alt="secondary-dots" class="gem-wrapbox-element img-responsive" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/secondary-dots.png" id="tgpli-660df3d370782">
                              <script>
                               window.tgpQueue.add('tgpli-660df3d370782')
                              </script><noscript><img alt="secondary-dots" class="gem-wrapbox-element img-responsive" src="wp-content/uploads/2022/04/secondary-dots.png"></noscript>
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
                   </section>
                   <div class="elementor-element elementor-element-db9fff8 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-element_type="widget" data-id="db9fff8" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:0,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                     <div class="title-h2 elementor-heading-title elementor-size-default"> Here’s how we put FORCE in your Salesforce. </div>
                    </div>
                   </div>
                   <section class="elementor-section elementor-inner-section elementor-element elementor-element-fb63077 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="fb63077" data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;animation_delay&quot;:0}">
                    <div class="elementor-container elementor-column-gap-thegem">
                     <div class="elementor-row">
                      <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-ad1e6e3" data-element_type="column" data-id="ad1e6e3" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;,&quot;animation_mobile&quot;:&quot;none&quot;,&quot;animation_delay&quot;:0}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-cd457ea elementor-position-top elementor-vertical-align-top flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image-box" data-element_type="widget" data-id="cd457ea" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:0,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="image-box.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-image-box-wrapper">
                            <figure class="elementor-image-box-img"> <img alt="" class="attachment-thumbnail size-thumbnail" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/icons-2-04-150x150.png" height="150" id="tgpli-660df3d37078a" width="150">
                             <script>
                              window.tgpQueue.add('tgpli-660df3d37078a')
                             </script><noscript><img alt="" class="attachment-thumbnail size-thumbnail" height="150" src="wp-content/uploads/2022/04/icons-2-04-150x150.png" width="150"></noscript>
                            </figure>
                            <div class="elementor-image-box-content">
                             <h3 class="elementor-image-box-title">Ideate</h3>
                             <p class="elementor-image-box-description">Our business consultants understand current bottlenecks, and your requirements to get a clear picture of your vision.</p>
                            </div>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                      <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-78415b1" data-element_type="column" data-id="78415b1" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;,&quot;animation_mobile&quot;:&quot;none&quot;,&quot;animation_delay&quot;:0}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-37f3516 elementor-position-top elementor-vertical-align-top flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image-box" data-element_type="widget" data-id="37f3516" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:0,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="image-box.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-image-box-wrapper">
                            <figure class="elementor-image-box-img"> <img alt="" class="attachment-thumbnail size-thumbnail" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/icons-2-03-150x150.png" height="150" id="tgpli-660df3d370793" width="150">
                             <script>
                              window.tgpQueue.add('tgpli-660df3d370793')
                             </script><noscript><img alt="" class="attachment-thumbnail size-thumbnail" height="150" src="wp-content/uploads/2022/04/icons-2-03-150x150.png" width="150"></noscript>
                            </figure>
                            <div class="elementor-image-box-content">
                             <h3 class="elementor-image-box-title">Innovate</h3>
                             <p class="elementor-image-box-description">The implementation team acquires the data and sets milestones with you for the final project delivery. We schedule training and provide support throughout the business automation process and after implementation.</p>
                            </div>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                      <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-fbfd642" data-element_type="column" data-id="fbfd642" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;,&quot;animation_mobile&quot;:&quot;none&quot;,&quot;animation_delay&quot;:0}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-2db26e0 elementor-position-top elementor-vertical-align-top flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image-box" data-element_type="widget" data-id="2db26e0" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:0,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="image-box.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-image-box-wrapper">
                            <figure class="elementor-image-box-img"> <img alt="" class="attachment-thumbnail size-thumbnail" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/icons-2-01-150x150.png" height="150" id="tgpli-660df3d370799" width="150">
                             <script>
                              window.tgpQueue.add('tgpli-660df3d370799')
                             </script><noscript><img alt="" class="attachment-thumbnail size-thumbnail" height="150" src="wp-content/uploads/2022/04/icons-2-01-150x150.png" width="150"></noscript>
                            </figure>
                            <div class="elementor-image-box-content">
                             <h3 class="elementor-image-box-title">Iterate</h3>
                             <p class="elementor-image-box-description">Once you’re on track to reaching your business outcome, we offer continued support to optimize the CRM strategy as you grow. You can also opt for our Remote Administrator Services.</p>
                            </div>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                      <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-c2fda49" data-element_type="column" data-id="c2fda49" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;,&quot;animation_mobile&quot;:&quot;none&quot;,&quot;animation_delay&quot;:0}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-3eacaac elementor-position-top elementor-vertical-align-top flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image-box" data-element_type="widget" data-id="3eacaac" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:0,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="image-box.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-image-box-wrapper">
                            <figure class="elementor-image-box-img"> <img alt="" class="attachment-thumbnail size-thumbnail" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/icons-2-02-150x150.png" height="150" id="tgpli-660df3d3707a0" width="150">
                             <script>
                              window.tgpQueue.add('tgpli-660df3d3707a0')
                             </script><noscript><img alt="" class="attachment-thumbnail size-thumbnail" height="150" src="wp-content/uploads/2022/04/icons-2-02-150x150.png" width="150"></noscript>
                            </figure>
                            <div class="elementor-image-box-content">
                             <h3 class="elementor-image-box-title">Deliver</h3>
                             <p class="elementor-image-box-description">We cut through the noise and help you choose the best Salesforce product for your needs. Our tailored solutions for the salesforce platform are the talk of the town.</p>
                            </div>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </section>
                  </div>
                 </div>
                </div>
               </div>
              </div>
             </section>
             <section class="elementor-section elementor-top-section elementor-element elementor-element-11195a8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="11195a8" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;}" id="milestone-achive">
              <div class="elementor-container elementor-column-gap-thegem">
               <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-722dda2c" data-element_type="column" data-id="722dda2c" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
                 <div class="elementor-column-wrap elementor-element-populated">
                  <div class="elementor-widget-wrap">
                   <div class="elementor-element elementor-element-49502088 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-element_type="widget" data-id="49502088" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                     <h2 class="elementor-heading-title elementor-size-default">Milestones We Have Achieved</h2>
                    </div>
                   </div>
                   <section class="elementor-section elementor-inner-section elementor-element elementor-element-5585d7ed elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="5585d7ed" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
                    <div class="elementor-container elementor-column-gap-thegem">
                     <div class="elementor-row">
                      <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-3ce78230" data-element_type="column" data-id="3ce78230" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-482111ea flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-counter" data-element_type="widget" data-id="482111ea" data-settings="{&quot;thegem_elementor_preset&quot;:&quot;counter-preset3&quot;,&quot;_animation&quot;:&quot;none&quot;,&quot;counter_animation_enabled&quot;:&quot;yes&quot;}" data-widget_type="thegem-counter.default">
                          <div class="elementor-widget-container">
                           <div class="counter-preset3">
                            <div class="gem-counter-container">
                             <div class="preloader">
                              <div class="preloader-spin"></div>
                             </div>
                             <div class="gem-counter-box default-background" data-number-format="(ddd).ddd">
                              <div class="gem-counter">
                               <div class="gem-counter-inner">
                                <div class="gem-counter-icon">
                                 <div class="gem-icon gem-icon-pack-material gem-icon-size-medium gem-icon-shape-circle gem-simple-icon lazy-loading-item lazy-loading-item-fading">
                                  <div class="gem-icon-inner default-background-border">
                                   <div class="icon-hover-bg"></div><i aria-hidden="true" class="fas fa-clipboard-check"></i>
                                  </div>
                                 </div>
                                </div>
                                <div class="gem-counter-number">
                                 <div class="gem-counter-odometer odometer odometer-auto-theme" data-to="800"> 0 </div>
                                 <div class="gem-counter-suffix"> + </div>
                                </div>
                                <div class="gem-counter-text styled-subtitle"> Projects </div>
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
                      <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-422da5fc" data-element_type="column" data-id="422da5fc" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-70102715 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-counter" data-element_type="widget" data-id="70102715" data-settings="{&quot;thegem_elementor_preset&quot;:&quot;counter-preset3&quot;,&quot;_animation&quot;:&quot;none&quot;,&quot;counter_animation_enabled&quot;:&quot;yes&quot;}" data-widget_type="thegem-counter.default">
                          <div class="elementor-widget-container">
                           <div class="counter-preset3">
                            <div class="gem-counter-container">
                             <div class="preloader">
                              <div class="preloader-spin"></div>
                             </div>
                             <div class="gem-counter-box default-background" data-number-format="(ddd).ddd">
                              <div class="gem-counter">
                               <div class="gem-counter-inner">
                                <div class="gem-counter-icon">
                                 <div class="gem-icon gem-icon-pack-material gem-icon-size-medium gem-icon-shape-circle gem-simple-icon lazy-loading-item lazy-loading-item-fading">
                                  <div class="gem-icon-inner default-background-border">
                                   <div class="icon-hover-bg"></div><i aria-hidden="true" class="fas fa-users"></i>
                                  </div>
                                 </div>
                                </div>
                                <div class="gem-counter-number">
                                 <div class="gem-counter-odometer odometer odometer-auto-theme" data-to="400"> 0 </div>
                                 <div class="gem-counter-suffix"> + </div>
                                </div>
                                <div class="gem-counter-text styled-subtitle"> Clients </div>
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
                      <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-58d3ebf4" data-element_type="column" data-id="58d3ebf4" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-57f63c68 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-counter" data-element_type="widget" data-id="57f63c68" data-settings="{&quot;thegem_elementor_preset&quot;:&quot;counter-preset3&quot;,&quot;_animation&quot;:&quot;none&quot;,&quot;counter_animation_enabled&quot;:&quot;yes&quot;}" data-widget_type="thegem-counter.default">
                          <div class="elementor-widget-container">
                           <div class="counter-preset3">
                            <div class="gem-counter-container">
                             <div class="preloader">
                              <div class="preloader-spin"></div>
                             </div>
                             <div class="gem-counter-box default-background" data-number-format="(ddd).ddd">
                              <div class="gem-counter">
                               <div class="gem-counter-inner">
                                <div class="gem-counter-icon">
                                 <div class="gem-icon gem-icon-pack-material gem-icon-size-medium gem-icon-shape-circle gem-simple-icon lazy-loading-item lazy-loading-item-fading">
                                  <div class="gem-icon-inner default-background-border">
                                   <div class="icon-hover-bg"></div><i aria-hidden="true" class="fas fa-users-cog"></i>
                                  </div>
                                 </div>
                                </div>
                                <div class="gem-counter-number">
                                 <div class="gem-counter-odometer odometer odometer-auto-theme" data-to="50"> 0 </div>
                                 <div class="gem-counter-suffix"> + </div>
                                </div>
                                <div class="gem-counter-text styled-subtitle"> Team Members </div>
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
                      <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4aeb0827" data-element_type="column" data-id="4aeb0827" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-4c4212c4 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-counter" data-element_type="widget" data-id="4c4212c4" data-settings="{&quot;thegem_elementor_preset&quot;:&quot;counter-preset3&quot;,&quot;_animation&quot;:&quot;none&quot;,&quot;counter_animation_enabled&quot;:&quot;yes&quot;}" data-widget_type="thegem-counter.default">
                          <div class="elementor-widget-container">
                           <div class="counter-preset3">
                            <div class="gem-counter-container">
                             <div class="preloader">
                              <div class="preloader-spin"></div>
                             </div>
                             <div class="gem-counter-box default-background" data-number-format="(ddd).ddd">
                              <div class="gem-counter">
                               <div class="gem-counter-inner">
                                <div class="gem-counter-icon">
                                 <div class="gem-icon gem-icon-pack-material gem-icon-size-medium gem-icon-shape-circle gem-simple-icon lazy-loading-item lazy-loading-item-fading">
                                  <div class="gem-icon-inner default-background-border">
                                   <div class="icon-hover-bg"></div><i aria-hidden="true" class="fas fa-globe-americas"></i>
                                  </div>
                                 </div>
                                </div>
                                <div class="gem-counter-number">
                                 <div class="gem-counter-odometer odometer odometer-auto-theme" data-to="21"> 0 </div>
                                </div>
                                <div class="gem-counter-text styled-subtitle"> Geographic Focus </div>
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
                    </div>
                   </section>
                  </div>
                 </div>
                </div>
               </div>
              </div>
             </section>
             <section class="elementor-section elementor-top-section elementor-element elementor-element-7a3ff9a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="7a3ff9a" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
              <div class="elementor-container elementor-column-gap-thegem">
               <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c12b758" data-element_type="column" data-id="c12b758" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
                 <div class="elementor-column-wrap elementor-element-populated">
                  <div class="elementor-widget-wrap">
                   <div class="elementor-element elementor-element-771a215 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-spacer" data-element_type="widget" data-id="771a215" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                     <div class="elementor-spacer">
                      <div class="elementor-spacer-inner"></div>
                     </div>
                    </div>
                   </div>
                   <div class="elementor-element elementor-element-75f43e0 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-element_type="widget" data-id="75f43e0" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:300,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="heading.default" id="courses">
                    <div class="elementor-widget-container">
                     <div class="title-h2 elementor-heading-title elementor-size-default"> Taking multiple industries by a storm </div>
                    </div>
                   </div>
                   <div class="elementor-element elementor-element-1da504a flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-element_type="widget" data-id="1da504a" data-settings="{&quot;_animation_mobile&quot;:&quot;none&quot;,&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                     <div class="elementor-text-editor elementor-clearfix">
                      <p style="text-align: center;"><span style="font-weight: 400;">Paving the way for digital transformation by understanding and overcoming your unique challenges.&nbsp;</span></p>
                     </div>
                    </div>
                   </div>
                   <div class="elementor-element elementor-element-fb0853c elementor-absolute elementor-hidden-tablet elementor-hidden-phone flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-styledimage" data-element_type="widget" data-id="fb0853c" data-settings="{&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/dtcforce.com\/wp-content\/uploads\/2022\/04\/cloud-06-1.png&quot;,&quot;id&quot;:1934,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;_position&quot;:&quot;absolute&quot;,&quot;thegem_interaction_vertical_scroll&quot;:&quot;yes&quot;,&quot;_animation&quot;:&quot;none&quot;,&quot;thegem_elementor_preset&quot;:&quot;default&quot;,&quot;thegem_interaction_vertical_scroll_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:4,&quot;sizes&quot;:[]},&quot;thegem_interaction_vertical_scroll_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;thegem_interaction_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="thegem-styledimage.default">
                    <div class="elementor-widget-container">
                     <div class="styled-image-wrapper">
                      <div class="gem-image gem-wrapbox gem-wrapbox-default gem-wrapbox-position-right">
                       <div class="gem-wrapbox-inner"> <img alt="Cloud-06" class="gem-wrapbox-element img-responsive" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="wp-content/uploads/2022/04/cloud-06-1-300x300.png" id="tgpli-660df3d3707bd">
                        <script>
                         window.tgpQueue.add('tgpli-660df3d3707bd')
                        </script><noscript><img alt="Cloud-06" class="gem-wrapbox-element img-responsive" src="wp-content/uploads/2022/04/cloud-06-1-300x300.png"></noscript>
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
             </section>
             <section class="elementor-section elementor-top-section elementor-element elementor-element-ab2d7c9 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="ab2d7c9" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation_mobile&quot;:&quot;none&quot;}" id="industry-section">
              <div class="elementor-container elementor-column-gap-thegem">
               <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a1da5af" data-element_type="column" data-id="a1da5af">
                 <div class="elementor-column-wrap elementor-element-populated">
                  <div class="elementor-widget-wrap">
                   <section class="elementor-section elementor-inner-section elementor-element elementor-element-847715c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="847715c">
                    <div class="elementor-container elementor-column-gap-thegem">
                     <div class="elementor-row">
                      <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-ca35622" data-element_type="column" data-id="ca35622" data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;animation_delay&quot;:0,&quot;animation_mobile&quot;:&quot;none&quot;}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-874cda5 elementor-absolute flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-styledimage" data-element_type="widget" data-id="874cda5" data-settings="{&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/dtcforce.com\/wp-content\/uploads\/2022\/04\/cloud-02.png&quot;,&quot;id&quot;:1930,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;_position&quot;:&quot;absolute&quot;,&quot;thegem_interaction_mouse&quot;:&quot;yes&quot;,&quot;thegem_interaction_mouse_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.2,&quot;sizes&quot;:[]},&quot;thegem_elementor_preset&quot;:&quot;default&quot;,&quot;thegem_interaction_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="thegem-styledimage.default">
                          <div class="elementor-widget-container">
                           <div class="styled-image-wrapper">
                            <div class="gem-image gem-wrapbox gem-wrapbox-default gem-wrapbox-position-left lazy-loading">
                             <div class="gem-wrapbox-inner lazy-loading-item" data-ll-effect="move-up"> <img alt="Cloud-02" class="gem-wrapbox-element img-responsive" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/cloud-02-150x150.png" id="tgpli-660df3d3707c5">
                              <script>
                               window.tgpQueue.add('tgpli-660df3d3707c5')
                              </script><noscript><img alt="Cloud-02" class="gem-wrapbox-element img-responsive" src="wp-content/uploads/2022/04/cloud-02-150x150.png"></noscript>
                             </div>
                            </div>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-7661cdb flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-icon" data-element_type="widget" data-id="7661cdb" data-settings="{&quot;thegem_elementor_preset&quot;:&quot;default&quot;}" data-widget_type="thegem-icon.default">
                          <div class="elementor-widget-container">
                           <div class="left-box icon-inline-position"> <a href="manufacturing/index.html">
                             <div class="gem-icon gem-icon-pack-fontawesome gem-icon-size-large gem-icon-shape-default">
                              <div class="gem-icon-inner">
                               <div class="padding-box-inner"> <span class="gem-icon-half-1"><span class="back-angle"><svg id="Layer_1" style="enable-background:new 0 0 1080 1080;" viewbox="0 0 1080 1080" x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                   <g>
                                    <path d="M697.08,983.01c-104.51,0-209.01,0-313.52,0c-11.93-5.25-20.17-13.28-20.05-27.3c0.23-24.82,18.18-47.36,42.51-52.26 c8.66-1.74,17.78-1.05,26.66-1.9c2.48-0.24,5.92-1.33,7.05-3.17c15.82-25.71,26.88-53.37,33.74-84.11c-4.4,0-8.07,0-11.73,0 c-94.69,0-189.37,0.01-284.06-0.01c-35.2-0.01-52.22-16.92-52.22-51.81c0-179.24-0.01-358.47,0.01-537.71 c0-30.17,18.34-48.51,48.51-48.55c33.2-0.04,66.4-0.01,99.59-0.01c3.05,0,6.1,0,9.75,0c0-15.02-0.01-28.83,0-42.64 c0.02-25.38,11.75-37.23,36.89-37.24c134.81-0.01,269.62,0,404.44,0c14.15,0,28.3-0.26,42.43,0.09 c17.03,0.42,29.82,13.41,30.43,30.42c0.18,4.9,0.06,9.81,0.06,14.72c0,11.42,0,22.84,0,34.66c4.46,0,7.62,0,10.78,0 c33.78,0,67.55-0.11,101.33,0.04c22.13,0.1,39.53,13.32,44.45,33.97c1.31,5.52,1.28,11.44,1.28,17.18 c0.06,178.66,0.05,357.32,0.05,535.98c0,2.89,0.01,5.77-0.11,8.66c-0.79,18.18-12.38,34.14-29.85,39.48 c-6.75,2.07-14.18,2.65-21.31,2.66c-95.26,0.17-190.53,0.11-285.79,0.11c-3.31,0-6.63,0-10.73,0 c5.35,25.04,14.47,46.99,24.53,68.77c6.34,13.74,14.03,20.17,30.45,19.17c24.56-1.5,45.38,15.39,52.49,38.56 C721.53,961.55,716.37,973.64,697.08,983.01z M878.51,659.29c0-135.25,0-269.38,0-404.04c-27.03,0-53.7,0-80.98,0 c0,11.54,0.27,22.49-0.09,33.43c-0.26,7.74-5.37,12.21-12.85,12.26c-7.57,0.05-12.4-4.34-13.05-12.05c-0.22-2.58-0.1-5.19-0.1-7.79 c0-48.78,0-97.56-0.01-146.34c0-12.04-0.21-12.26-12.03-12.26c-145.79-0.01-291.57-0.01-437.36,0c-12.12,0-12.4,0.28-12.4,12.8 c-0.01,171.45,0,342.9,0,514.34c0,3.08,0,6.17,0,9.31c154.53,0,307.89,0,461.8,0c0-4.19,0-7.62,0-11.05 c0-99.87,0-199.73,0.01-299.6c0-3.17-0.22-6.39,0.2-9.51c0.88-6.6,4.89-10.23,11.52-10.81c9.55-0.83,14.42,4.8,14.42,16.81 c0.02,101.31,0.01,202.62,0.01,303.93c0,3.38,0,6.76,0,10.56C824.99,659.29,851.41,659.29,878.51,659.29z M151.64,712.73 c259.69,0,518.37,0,777.63,0c0-2.95,0-5.22,0-7.49c0-160.18,0.01-320.35-0.01-480.53c0-15.51-6.53-22.23-22.05-22.29 c-34.35-0.13-68.7-0.05-103.05-0.01c-1.94,0-3.88,0.39-6.14,0.63c0,8.37,0,16.31,0,25.2c3.5,0,6.59,0,9.67,0 c25.69,0,51.38-0.01,77.07,0c16.74,0.01,20.25,3.54,20.25,20.29c0,139.11,0,278.22,0,417.33c0,2.6,0.14,5.21-0.11,7.79 c-0.69,6.92-4.58,11.08-11.44,12.09c-3.12,0.46-6.33,0.36-9.5,0.36c-228.91,0.01-457.81,0.01-686.72,0.01 c-2.02,0-4.04,0.06-6.06-0.03c-10.47-0.48-15.12-5.12-15.24-15.75c-0.16-13.56-0.12-27.13-0.02-40.69 c0.08-10.82,4.83-16.3,13.64-16.07c8.48,0.22,12.48,5.23,12.59,16.06c0.1,9.73,0.02,19.47,0.02,29.59c27.5,0,53.89,0,80.72,0 c0-134.87,0-269.21,0-404c-26.84,0-53.24,0-80.72,0c0,3.9,0,7.27,0,10.64c0,99.86,0,199.72-0.01,299.57 c0,3.46,0.11,6.95-0.29,10.37c-0.79,6.69-4.9,10.23-11.49,10.75c-6.47,0.51-11.44-1.99-13.44-8.41c-0.92-2.95-1-6.24-1.01-9.37 c-0.05-107.36-0.05-214.72-0.03-322.09c0-14.17,4.33-18.4,18.81-18.42c26.27-0.05,52.54-0.01,78.8-0.01c3.06,0,6.11,0,9.27,0 c0-9.13,0-17.05,0-25.42c-3.05-0.17-5.59-0.42-8.12-0.42c-32.91-0.03-65.81-0.05-98.72-0.01c-18.14,0.02-24.3,6.28-24.3,24.57 c-0.01,158.73,0,317.47,0,476.2C151.64,706.25,151.64,709.34,151.64,712.73z M151.89,740.5c0,10.82-0.9,21.24,0.4,31.38 c0.6,4.73,4.59,10.11,8.61,13.01c3.53,2.54,9.26,2.75,14.02,2.75c243.62,0.12,487.25,0.11,730.87,0.09c2.6,0,5.22,0.06,7.78-0.27 c8.47-1.1,14.32-6.2,15.13-14.31c1.07-10.76,0.27-21.7,0.27-32.65C669.61,740.5,411.1,740.5,151.89,740.5z M470.6,901.3 c46.79,0,93.66,0,141.64,0c-14.3-26.95-24.54-54.58-31.26-83.52c-0.35-1.52-3.71-3.32-5.68-3.34c-23.06-0.24-46.12-0.31-69.18,0.09 c-2.29,0.04-5.69,3.1-6.55,5.49c-2.64,7.28-3.75,15.11-6.42,22.37C485.95,862.01,478.24,881.45,470.6,901.3z M690.71,956.38 c-0.88-16.97-11.71-28.34-28.28-28.39c-81.1-0.28-162.21-0.15-243.31-0.08c-3.12,0-6.34,0.64-9.35,1.55 c-12.05,3.65-19.63,14.41-18.92,26.92C490.58,956.38,590.34,956.38,690.71,956.38z"></path>
                                    <path d="M666.07,256.55c4.58,11.02,8.77,21.09,12.99,31.24c0.4,0.13,0.96,0.48,1.49,0.45c25.36-1.8,33.7,12.48,32.01,33.82 c-0.45,5.74,0,11.54-0.09,17.31c-0.26,16.53-8.96,25.95-25.51,26.31c-6.55,0.14-10.41,1.68-11.15,8.52 c-0.12,1.11-0.72,2.19-1.23,3.22c-5.54,11.19-11.12,21.33,1.66,32.82c7.06,6.35,4.61,18.24-2.46,26.08 c-7.52,8.34-15.44,16.41-23.85,23.86c-10,8.86-22.9,7.85-33.29-2.5c-4.33-4.32-7.96-6.11-13.19-2.08 c-1.34,1.03-3.02,1.74-4.65,2.25c-11.54,3.63-21.53,7.1-20.98,23.3c0.34,10.09-9.87,16.76-20.63,17.27 c-10.08,0.48-20.2,0.41-30.29,0.2c-15.55-0.32-25.08-9.28-24.98-24.78c0.05-7.22-2.24-10.62-8.96-11.85 c-1.96-0.36-3.97-1.05-5.66-2.07c-10.21-6.16-19.03-8.76-28.96,2.27c-6.27,6.96-18.88,5.28-26.28-1.32 c-8.81-7.86-17.31-16.18-25.11-25.03c-8.65-9.81-7.53-22.47,2.77-32.48c4.77-4.64,6.04-8.51,1.91-13.85 c-0.86-1.11-1.38-2.55-1.8-3.91c-3.72-12-7.77-22.05-24.19-21.49c-8.8,0.3-15.46-8.27-16.14-17.77 c-0.9-12.61-1.05-25.39-0.09-37.98c0.9-11.8,10.37-19.37,22.4-19.88c3.42-0.14,6.85-0.02,9.82-0.02c4.16-9.7,8.3-18.58,11.65-27.75 c0.78-2.14-0.34-5.98-1.97-7.82c-13.43-15.09-13.35-26.24,0.76-40.41c4.89-4.91,9.77-9.82,14.69-14.69 c13.43-13.29,25.38-13.35,39.07-0.26c1.44,1.38,2.94,2.7,4.23,3.89c9.38-3.78,18.51-7.21,27.35-11.25 c1.93-0.88,3.89-3.91,4.06-6.09c1.77-22.15,8.83-28.87,30.98-28.88c6.64,0,13.28-0.04,19.91,0.01c17.57,0.13,26.6,9.07,26.9,26.58 c0.04,2.27,0.01,4.55,0.01,6.55c10.67,4.43,20.72,8.59,31.52,13.07c1.38-1.21,3.32-2.82,5.14-4.56 c12.56-12.01,24.89-12.11,37.16-0.17c6,5.84,11.92,11.75,17.75,17.75c11.87,12.2,11.8,24.75-0.11,37.17 C669.18,253.25,667.61,254.92,666.07,256.55z M651.94,421.06c-1.52-1.6-2.7-2.85-3.89-4.09c-11.52-11.99-12.44-19.23-4.86-34.08 c3.01-5.89,6.58-11.85,7.85-18.18c3.69-18.43,14.51-26.68,32.96-25.72c0.46,0.02,0.94-0.57,2.22-1.39c0-3.19,0-6.89,0-10.59 c0-3.95,0-7.9,0-12.04c-2.77-0.18-4.47-0.35-6.17-0.39c-16.53-0.44-22.27-5.02-27.57-20.77c-2.65-7.88-5.84-15.66-9.54-23.11 c-6.98-14.06-6.24-21.47,4.27-32.81c1.53-1.65,2.99-3.35,5.47-6.15c-3.4-2.85-6.89-5.09-9.46-8.12c-2.57-3.04-4.22-6.86-6.27-10.33 c-4.71,3.72-5.6,5.28-6.83,6.47c-11.68,11.29-18.79,11.99-33.37,4.85c-8.5-4.16-17.46-7.42-26.38-10.64 c-11.05-3.99-16.4-10.59-17.19-22.31c-0.23-3.31-0.37-6.62-0.58-10.29c-4.81,0-8.55,0-12.29,0c-3.88,0-7.76,0-11.85,0 c-0.19,3.38-0.31,5.37-0.41,7.35c-0.8,15.75-5.13,20.9-20.29,26.09c-8.41,2.88-16.63,6.48-24.63,10.38 c-12.5,6.09-20.42,5.31-30.77-3.94c-1.91-1.71-3.75-3.49-5.27-4.91c-5.78,5.81-11.37,11.41-17.18,17.25 c1.07,1.16,2.22,2.42,3.38,3.66c11.08,11.8,11.88,19.19,4.86,33.47c-4.05,8.23-7.35,16.88-10.42,25.54 c-4.43,12.46-10.94,17.64-24.19,18.25c-2.52,0.12-5.04,0.24-7.95,0.37c0,8.19,0,15.82,0,23.9c2.36,0.18,4.31,0.36,6.26,0.48 c16.21,1.04,21.56,5.57,26.72,20.88c2.84,8.42,6.52,16.6,10.38,24.62c5.73,11.9,4.87,20.24-3.93,30.09 c-1.86,2.08-3.75,4.12-5.46,5.98c5.81,5.92,11.21,11.44,16.89,17.24c1.42-1.24,2.71-2.3,3.93-3.44 c12.6-11.8,19.28-12.58,34.87-4.65c5.63,2.87,11.37,6.14,17.44,7.41c18.22,3.8,26.92,14.29,25.64,32.94 c-0.03,0.44,0.6,0.93,1.32,1.97c5.93,0,12.26,0.03,18.58-0.02c1.37-0.01,2.74-0.31,4.84-0.57c0-2.36-0.05-4.3,0.01-6.25 c0.47-15.63,5.05-21.44,19.98-26.25c6.29-2.03,13.04-3.66,18.45-7.21c15.88-10.41,29.68-9.11,42.22,5.2 c0.27,0.31,1.07,0.17,1.91,0.27C640.8,432.3,646.06,426.99,651.94,421.06z"></path>
                                    <path d="M540.32,629.13c-50.23,0-100.46,0.01-150.69-0.01c-3.17,0-6.38,0.07-9.5-0.37c-7.46-1.06-11.16-5.77-11.08-13.1 c0.08-6.92,3.62-11.45,10.69-12.55c2.83-0.44,5.75-0.5,8.62-0.5c101.32-0.02,202.65-0.02,303.97-0.02c1.15,0,2.31-0.02,3.46,0.01 c10.87,0.32,16.65,5.06,16.48,13.51c-0.17,8.43-5.89,12.99-16.95,13C643.67,629.17,592,629.13,540.32,629.13z"></path>
                                    <path d="M539.93,566.07c-51.38,0-102.77,0.14-154.15-0.24c-4.89-0.04-11.23-2.02-14.33-5.43c-6.26-6.9-1.37-18.26,7.82-20.14 c2.79-0.57,5.75-0.37,8.63-0.37c101.9-0.02,203.81-0.01,305.71-0.01c2.02,0,4.06-0.11,6.06,0.09c7.92,0.79,12.98,6.34,12.6,13.72 c-0.36,7.17-5.21,12.14-12.99,12.25c-17.03,0.26-34.06,0.13-51.09,0.13C612.1,566.07,576.02,566.07,539.93,566.07z"></path>
                                    <path d="M619.42,327.05c-0.04,43.84-35.7,79.38-79.35,79.09c-43.2-0.29-78.55-35.91-78.55-79.16c0-43.73,35.73-79.18,79.48-78.86 C584.69,248.43,619.46,283.42,619.42,327.05z M541.2,274.42c-29.38-0.26-53.24,22.98-53.51,52.12 c-0.27,28.86,23.69,53.13,52.62,53.32c28.59,0.18,52.63-23.43,52.9-51.99C593.5,298.36,570.45,274.68,541.2,274.42z"></path>
                                   </g>
                                  </svg></span></span> <span class="gem-icon-half-2"><span class="back-angle"><svg id="Layer_1" style="enable-background:new 0 0 1080 1080;" viewbox="0 0 1080 1080" x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                   <g>
                                    <path d="M697.08,983.01c-104.51,0-209.01,0-313.52,0c-11.93-5.25-20.17-13.28-20.05-27.3c0.23-24.82,18.18-47.36,42.51-52.26 c8.66-1.74,17.78-1.05,26.66-1.9c2.48-0.24,5.92-1.33,7.05-3.17c15.82-25.71,26.88-53.37,33.74-84.11c-4.4,0-8.07,0-11.73,0 c-94.69,0-189.37,0.01-284.06-0.01c-35.2-0.01-52.22-16.92-52.22-51.81c0-179.24-0.01-358.47,0.01-537.71 c0-30.17,18.34-48.51,48.51-48.55c33.2-0.04,66.4-0.01,99.59-0.01c3.05,0,6.1,0,9.75,0c0-15.02-0.01-28.83,0-42.64 c0.02-25.38,11.75-37.23,36.89-37.24c134.81-0.01,269.62,0,404.44,0c14.15,0,28.3-0.26,42.43,0.09 c17.03,0.42,29.82,13.41,30.43,30.42c0.18,4.9,0.06,9.81,0.06,14.72c0,11.42,0,22.84,0,34.66c4.46,0,7.62,0,10.78,0 c33.78,0,67.55-0.11,101.33,0.04c22.13,0.1,39.53,13.32,44.45,33.97c1.31,5.52,1.28,11.44,1.28,17.18 c0.06,178.66,0.05,357.32,0.05,535.98c0,2.89,0.01,5.77-0.11,8.66c-0.79,18.18-12.38,34.14-29.85,39.48 c-6.75,2.07-14.18,2.65-21.31,2.66c-95.26,0.17-190.53,0.11-285.79,0.11c-3.31,0-6.63,0-10.73,0 c5.35,25.04,14.47,46.99,24.53,68.77c6.34,13.74,14.03,20.17,30.45,19.17c24.56-1.5,45.38,15.39,52.49,38.56 C721.53,961.55,716.37,973.64,697.08,983.01z M878.51,659.29c0-135.25,0-269.38,0-404.04c-27.03,0-53.7,0-80.98,0 c0,11.54,0.27,22.49-0.09,33.43c-0.26,7.74-5.37,12.21-12.85,12.26c-7.57,0.05-12.4-4.34-13.05-12.05c-0.22-2.58-0.1-5.19-0.1-7.79 c0-48.78,0-97.56-0.01-146.34c0-12.04-0.21-12.26-12.03-12.26c-145.79-0.01-291.57-0.01-437.36,0c-12.12,0-12.4,0.28-12.4,12.8 c-0.01,171.45,0,342.9,0,514.34c0,3.08,0,6.17,0,9.31c154.53,0,307.89,0,461.8,0c0-4.19,0-7.62,0-11.05 c0-99.87,0-199.73,0.01-299.6c0-3.17-0.22-6.39,0.2-9.51c0.88-6.6,4.89-10.23,11.52-10.81c9.55-0.83,14.42,4.8,14.42,16.81 c0.02,101.31,0.01,202.62,0.01,303.93c0,3.38,0,6.76,0,10.56C824.99,659.29,851.41,659.29,878.51,659.29z M151.64,712.73 c259.69,0,518.37,0,777.63,0c0-2.95,0-5.22,0-7.49c0-160.18,0.01-320.35-0.01-480.53c0-15.51-6.53-22.23-22.05-22.29 c-34.35-0.13-68.7-0.05-103.05-0.01c-1.94,0-3.88,0.39-6.14,0.63c0,8.37,0,16.31,0,25.2c3.5,0,6.59,0,9.67,0 c25.69,0,51.38-0.01,77.07,0c16.74,0.01,20.25,3.54,20.25,20.29c0,139.11,0,278.22,0,417.33c0,2.6,0.14,5.21-0.11,7.79 c-0.69,6.92-4.58,11.08-11.44,12.09c-3.12,0.46-6.33,0.36-9.5,0.36c-228.91,0.01-457.81,0.01-686.72,0.01 c-2.02,0-4.04,0.06-6.06-0.03c-10.47-0.48-15.12-5.12-15.24-15.75c-0.16-13.56-0.12-27.13-0.02-40.69 c0.08-10.82,4.83-16.3,13.64-16.07c8.48,0.22,12.48,5.23,12.59,16.06c0.1,9.73,0.02,19.47,0.02,29.59c27.5,0,53.89,0,80.72,0 c0-134.87,0-269.21,0-404c-26.84,0-53.24,0-80.72,0c0,3.9,0,7.27,0,10.64c0,99.86,0,199.72-0.01,299.57 c0,3.46,0.11,6.95-0.29,10.37c-0.79,6.69-4.9,10.23-11.49,10.75c-6.47,0.51-11.44-1.99-13.44-8.41c-0.92-2.95-1-6.24-1.01-9.37 c-0.05-107.36-0.05-214.72-0.03-322.09c0-14.17,4.33-18.4,18.81-18.42c26.27-0.05,52.54-0.01,78.8-0.01c3.06,0,6.11,0,9.27,0 c0-9.13,0-17.05,0-25.42c-3.05-0.17-5.59-0.42-8.12-0.42c-32.91-0.03-65.81-0.05-98.72-0.01c-18.14,0.02-24.3,6.28-24.3,24.57 c-0.01,158.73,0,317.47,0,476.2C151.64,706.25,151.64,709.34,151.64,712.73z M151.89,740.5c0,10.82-0.9,21.24,0.4,31.38 c0.6,4.73,4.59,10.11,8.61,13.01c3.53,2.54,9.26,2.75,14.02,2.75c243.62,0.12,487.25,0.11,730.87,0.09c2.6,0,5.22,0.06,7.78-0.27 c8.47-1.1,14.32-6.2,15.13-14.31c1.07-10.76,0.27-21.7,0.27-32.65C669.61,740.5,411.1,740.5,151.89,740.5z M470.6,901.3 c46.79,0,93.66,0,141.64,0c-14.3-26.95-24.54-54.58-31.26-83.52c-0.35-1.52-3.71-3.32-5.68-3.34c-23.06-0.24-46.12-0.31-69.18,0.09 c-2.29,0.04-5.69,3.1-6.55,5.49c-2.64,7.28-3.75,15.11-6.42,22.37C485.95,862.01,478.24,881.45,470.6,901.3z M690.71,956.38 c-0.88-16.97-11.71-28.34-28.28-28.39c-81.1-0.28-162.21-0.15-243.31-0.08c-3.12,0-6.34,0.64-9.35,1.55 c-12.05,3.65-19.63,14.41-18.92,26.92C490.58,956.38,590.34,956.38,690.71,956.38z"></path>
                                    <path d="M666.07,256.55c4.58,11.02,8.77,21.09,12.99,31.24c0.4,0.13,0.96,0.48,1.49,0.45c25.36-1.8,33.7,12.48,32.01,33.82 c-0.45,5.74,0,11.54-0.09,17.31c-0.26,16.53-8.96,25.95-25.51,26.31c-6.55,0.14-10.41,1.68-11.15,8.52 c-0.12,1.11-0.72,2.19-1.23,3.22c-5.54,11.19-11.12,21.33,1.66,32.82c7.06,6.35,4.61,18.24-2.46,26.08 c-7.52,8.34-15.44,16.41-23.85,23.86c-10,8.86-22.9,7.85-33.29-2.5c-4.33-4.32-7.96-6.11-13.19-2.08 c-1.34,1.03-3.02,1.74-4.65,2.25c-11.54,3.63-21.53,7.1-20.98,23.3c0.34,10.09-9.87,16.76-20.63,17.27 c-10.08,0.48-20.2,0.41-30.29,0.2c-15.55-0.32-25.08-9.28-24.98-24.78c0.05-7.22-2.24-10.62-8.96-11.85 c-1.96-0.36-3.97-1.05-5.66-2.07c-10.21-6.16-19.03-8.76-28.96,2.27c-6.27,6.96-18.88,5.28-26.28-1.32 c-8.81-7.86-17.31-16.18-25.11-25.03c-8.65-9.81-7.53-22.47,2.77-32.48c4.77-4.64,6.04-8.51,1.91-13.85 c-0.86-1.11-1.38-2.55-1.8-3.91c-3.72-12-7.77-22.05-24.19-21.49c-8.8,0.3-15.46-8.27-16.14-17.77 c-0.9-12.61-1.05-25.39-0.09-37.98c0.9-11.8,10.37-19.37,22.4-19.88c3.42-0.14,6.85-0.02,9.82-0.02c4.16-9.7,8.3-18.58,11.65-27.75 c0.78-2.14-0.34-5.98-1.97-7.82c-13.43-15.09-13.35-26.24,0.76-40.41c4.89-4.91,9.77-9.82,14.69-14.69 c13.43-13.29,25.38-13.35,39.07-0.26c1.44,1.38,2.94,2.7,4.23,3.89c9.38-3.78,18.51-7.21,27.35-11.25 c1.93-0.88,3.89-3.91,4.06-6.09c1.77-22.15,8.83-28.87,30.98-28.88c6.64,0,13.28-0.04,19.91,0.01c17.57,0.13,26.6,9.07,26.9,26.58 c0.04,2.27,0.01,4.55,0.01,6.55c10.67,4.43,20.72,8.59,31.52,13.07c1.38-1.21,3.32-2.82,5.14-4.56 c12.56-12.01,24.89-12.11,37.16-0.17c6,5.84,11.92,11.75,17.75,17.75c11.87,12.2,11.8,24.75-0.11,37.17 C669.18,253.25,667.61,254.92,666.07,256.55z M651.94,421.06c-1.52-1.6-2.7-2.85-3.89-4.09c-11.52-11.99-12.44-19.23-4.86-34.08 c3.01-5.89,6.58-11.85,7.85-18.18c3.69-18.43,14.51-26.68,32.96-25.72c0.46,0.02,0.94-0.57,2.22-1.39c0-3.19,0-6.89,0-10.59 c0-3.95,0-7.9,0-12.04c-2.77-0.18-4.47-0.35-6.17-0.39c-16.53-0.44-22.27-5.02-27.57-20.77c-2.65-7.88-5.84-15.66-9.54-23.11 c-6.98-14.06-6.24-21.47,4.27-32.81c1.53-1.65,2.99-3.35,5.47-6.15c-3.4-2.85-6.89-5.09-9.46-8.12c-2.57-3.04-4.22-6.86-6.27-10.33 c-4.71,3.72-5.6,5.28-6.83,6.47c-11.68,11.29-18.79,11.99-33.37,4.85c-8.5-4.16-17.46-7.42-26.38-10.64 c-11.05-3.99-16.4-10.59-17.19-22.31c-0.23-3.31-0.37-6.62-0.58-10.29c-4.81,0-8.55,0-12.29,0c-3.88,0-7.76,0-11.85,0 c-0.19,3.38-0.31,5.37-0.41,7.35c-0.8,15.75-5.13,20.9-20.29,26.09c-8.41,2.88-16.63,6.48-24.63,10.38 c-12.5,6.09-20.42,5.31-30.77-3.94c-1.91-1.71-3.75-3.49-5.27-4.91c-5.78,5.81-11.37,11.41-17.18,17.25 c1.07,1.16,2.22,2.42,3.38,3.66c11.08,11.8,11.88,19.19,4.86,33.47c-4.05,8.23-7.35,16.88-10.42,25.54 c-4.43,12.46-10.94,17.64-24.19,18.25c-2.52,0.12-5.04,0.24-7.95,0.37c0,8.19,0,15.82,0,23.9c2.36,0.18,4.31,0.36,6.26,0.48 c16.21,1.04,21.56,5.57,26.72,20.88c2.84,8.42,6.52,16.6,10.38,24.62c5.73,11.9,4.87,20.24-3.93,30.09 c-1.86,2.08-3.75,4.12-5.46,5.98c5.81,5.92,11.21,11.44,16.89,17.24c1.42-1.24,2.71-2.3,3.93-3.44 c12.6-11.8,19.28-12.58,34.87-4.65c5.63,2.87,11.37,6.14,17.44,7.41c18.22,3.8,26.92,14.29,25.64,32.94 c-0.03,0.44,0.6,0.93,1.32,1.97c5.93,0,12.26,0.03,18.58-0.02c1.37-0.01,2.74-0.31,4.84-0.57c0-2.36-0.05-4.3,0.01-6.25 c0.47-15.63,5.05-21.44,19.98-26.25c6.29-2.03,13.04-3.66,18.45-7.21c15.88-10.41,29.68-9.11,42.22,5.2 c0.27,0.31,1.07,0.17,1.91,0.27C640.8,432.3,646.06,426.99,651.94,421.06z"></path>
                                    <path d="M540.32,629.13c-50.23,0-100.46,0.01-150.69-0.01c-3.17,0-6.38,0.07-9.5-0.37c-7.46-1.06-11.16-5.77-11.08-13.1 c0.08-6.92,3.62-11.45,10.69-12.55c2.83-0.44,5.75-0.5,8.62-0.5c101.32-0.02,202.65-0.02,303.97-0.02c1.15,0,2.31-0.02,3.46,0.01 c10.87,0.32,16.65,5.06,16.48,13.51c-0.17,8.43-5.89,12.99-16.95,13C643.67,629.17,592,629.13,540.32,629.13z"></path>
                                    <path d="M539.93,566.07c-51.38,0-102.77,0.14-154.15-0.24c-4.89-0.04-11.23-2.02-14.33-5.43c-6.26-6.9-1.37-18.26,7.82-20.14 c2.79-0.57,5.75-0.37,8.63-0.37c101.9-0.02,203.81-0.01,305.71-0.01c2.02,0,4.06-0.11,6.06,0.09c7.92,0.79,12.98,6.34,12.6,13.72 c-0.36,7.17-5.21,12.14-12.99,12.25c-17.03,0.26-34.06,0.13-51.09,0.13C612.1,566.07,576.02,566.07,539.93,566.07z"></path>
                                    <path d="M619.42,327.05c-0.04,43.84-35.7,79.38-79.35,79.09c-43.2-0.29-78.55-35.91-78.55-79.16c0-43.73,35.73-79.18,79.48-78.86 C584.69,248.43,619.46,283.42,619.42,327.05z M541.2,274.42c-29.38-0.26-53.24,22.98-53.51,52.12 c-0.27,28.86,23.69,53.13,52.62,53.32c28.59,0.18,52.63-23.43,52.9-51.99C593.5,298.36,570.45,274.68,541.2,274.42z"></path>
                                   </g>
                                  </svg></span></span> </div>
                              </div>
                             </div>
                            </a> </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-d3758bc flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-element_type="widget" data-id="d3758bc" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-text-editor elementor-clearfix">
                            <div class="title-h3"> Manufacturing </div>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-a411b86 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-element_type="widget" data-id="a411b86" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-text-editor elementor-clearfix">
                            <p><span style="font-weight: 400;">Collaborate with customers, dealers and distributors efficiently at each stage of the product life cycle.&nbsp;</span></p>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                      <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-107852c" data-element_type="column" data-id="107852c" data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;animation_delay&quot;:0,&quot;animation_mobile&quot;:&quot;none&quot;}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-dbf9e46 elementor-absolute flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-styledimage" data-element_type="widget" data-id="dbf9e46" data-settings="{&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/dtcforce.com\/wp-content\/uploads\/2022\/04\/cloud-02.png&quot;,&quot;id&quot;:1930,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;_position&quot;:&quot;absolute&quot;,&quot;thegem_interaction_mouse&quot;:&quot;yes&quot;,&quot;thegem_interaction_mouse_direction&quot;:&quot;negative&quot;,&quot;thegem_interaction_mouse_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.2,&quot;sizes&quot;:[]},&quot;thegem_elementor_preset&quot;:&quot;default&quot;,&quot;thegem_interaction_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="thegem-styledimage.default">
                          <div class="elementor-widget-container">
                           <div class="styled-image-wrapper">
                            <div class="gem-image gem-wrapbox gem-wrapbox-default gem-wrapbox-position-left lazy-loading">
                             <div class="gem-wrapbox-inner lazy-loading-item" data-ll-effect="move-up"> <img alt="Cloud-02" class="gem-wrapbox-element img-responsive" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="wp-content/uploads/2022/04/cloud-02-150x150.png" id="tgpli-660df3d3707d3">
                              <script>
                               window.tgpQueue.add('tgpli-660df3d3707d3')
                              </script><noscript><img alt="Cloud-02" class="gem-wrapbox-element img-responsive" src="wp-content/uploads/2022/04/cloud-02-150x150.png"></noscript>
                             </div>
                            </div>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-ac7bce0 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-icon" data-element_type="widget" data-id="ac7bce0" data-settings="{&quot;_animation_mobile&quot;:&quot;none&quot;,&quot;thegem_elementor_preset&quot;:&quot;default&quot;}" data-widget_type="thegem-icon.default">
                          <div class="elementor-widget-container">
                           <div class="left-box icon-inline-position"> <a href="salesforce-high-tech-industry/index.html">
                             <div class="gem-icon gem-icon-pack-fontawesome gem-icon-size-large gem-icon-shape-default">
                              <div class="gem-icon-inner">
                               <div class="padding-box-inner"> <span class="gem-icon-half-1"><span class="back-angle"><svg id="Layer_1" style="enable-background:new 0 0 1080 1080;" viewbox="0 0 1080 1080" x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                   <g>
                                    <path d="M341.62,993.15c-7.3-4.61-9.01-11.44-8.92-19.7c0.31-27.99,0.12-55.99,0.12-85.36c-3.96,0-7.35,0.03-10.74,0 c-26.85-0.28-53.77,0.54-80.52-1.21c-21.98-1.44-37.48-14.55-47-34.31c-3.93-8.15-1.64-15.38,5.38-18.94 c6.62-3.36,13.76-1.46,17.79,6.41c8.57,16.75,22.6,21.44,40.21,21.43c181.84-0.18,363.68-0.11,545.53-0.09 c4.12,0,8.29-0.01,12.36,0.58c6.9,1,11.17,6.12,10.22,12.22c-0.72,4.6-4.99,9.39-8.94,12.49c-2.54,1.99-7.36,1.36-11.16,1.38 c-19.14,0.11-38.28,0.05-58.56,0.05c0,8.83,0,16.99,0,25.15c0,20.07-0.24,40.14,0.12,60.21c0.15,8.27-1.62,15.09-8.92,19.7 c-2.95,0-5.91,0-8.86,0c-7.01-4.24-9.37-10.42-9.16-18.57c0.44-17.08,0.13-34.19,0.13-51.28c0-11.41,0-22.83,0-34.68 c-23.83,0-46.65,0-70.47,0c0,3.68,0,6.84,0,10c0,25.35-0.22,50.7,0.13,76.04c0.11,8.12-2.04,14.37-9.24,18.49 c-2.95,0-5.91,0-8.86,0c-7.01-4.77-8.99-11.51-8.82-19.76c0.38-17.66,0.12-35.33,0.12-53c0-10.51,0-21.01,0-31.59 c-23.86,0-46.63,0-70.04,0c0,3.91,0,7.11,0,10.32c0,25.03-0.13,50.06,0.07,75.08c0.06,8.29-1.93,15.08-9.93,18.95 c-2.36,0-4.73,0-7.09,0c-8-3.86-9.99-10.66-9.93-18.95c0.19-25.32,0.08-50.65,0.05-75.97c0-3.12-0.27-6.24-0.41-9.4 c-23.63,0-46.37,0-69.61,0c0,28.68-0.19,56.62,0.12,84.56c0.09,8.24-1.8,14.98-8.82,19.76c-2.95,0-5.91,0-8.86,0 c-7.19-4.11-9.44-10.36-9.23-18.49c0.42-16.49,0.12-33.01,0.12-49.51c0-12.01,0-24.01,0-36.53c-23.82,0-46.64,0-70.47,0 c0,3.59,0,6.76,0,9.92c0,25.35-0.23,50.7,0.13,76.04c0.12,8.14-2.15,14.32-9.16,18.57C347.53,993.15,344.58,993.15,341.62,993.15z"></path>
                                    <path d="M86.44,341.15c4.62-7.3,11.44-9.01,19.71-8.92c27.14,0.31,54.29,0.12,82.87,0.12c0-3.51,0-6.6,0-9.7 c0-25.09-0.26-50.18,0.08-75.27c0.45-33.42,22.48-57.47,55.52-61.26c9.23-1.06,16.04,3.44,17.09,11.28c0.99,7.4-4,13.1-12.96,14.8 c-24.04,4.57-33.02,15.45-33.03,40.13c-0.01,176.8,0,353.6-0.01,530.41c0,3.25,0.2,6.52-0.15,9.73c-0.9,8.3-6.46,13.31-14,12.94 c-7.11-0.35-12.19-5.48-12.41-13.47c-0.32-11.5-0.12-23.02-0.14-34.53c-0.01-3.18,0-6.35,0-10.59c-13.7,0-26.59,0-39.47,0 c-14.47,0-28.94-0.29-43.39,0.11c-8.28,0.23-15.09-1.61-19.71-8.92c0-2.95,0-5.91,0-8.86c4.25-7.03,10.45-9.43,18.6-9.15 c13.56,0.47,27.16,0.13,40.74,0.13c14.09,0,28.17,0,42.71,0c0-23.82,0-46.66,0-70.46c-3.68,0-6.85,0-10.01,0 c-24.5,0-49.01-0.23-73.51,0.13c-8.13,0.12-14.4-2.02-18.52-9.23c0-2.95,0-5.91,0-8.86c4.78-7.02,11.52-9.04,19.78-8.81 c14.43,0.4,28.89,0.11,43.33,0.11c12.87,0,25.75,0,38.73,0c0-23.83,0-46.58,0-70.03c-3.94,0-7.15,0-10.36,0 c-24.17,0-48.35-0.12-72.52,0.06c-8.27,0.06-15.14-1.83-18.96-9.92c0-2.36,0-4.72,0-7.09c3.82-8.09,10.69-9.98,18.96-9.92 c24.47,0.17,48.94,0.08,73.4,0.04c3.13,0,6.27-0.29,9.47-0.45c0-23.6,0-46.36,0-69.56c-27.84,0-54.95-0.2-82.06,0.12 c-8.25,0.1-15-1.8-19.78-8.82c0-2.95,0-5.91,0-8.86c4.12-7.21,10.39-9.35,18.52-9.23c24.79,0.35,49.6,0.14,74.4,0.11 c3.09,0,6.19-0.28,9.16-0.42c0-23.79,0-46.41,0-70.02c-3.64,0-6.81,0-9.97,0c-24.5,0-49.01-0.24-73.51,0.13 c-8.15,0.12-14.35-2.13-18.6-9.16C86.44,347.05,86.44,344.1,86.44,341.15z"></path>
                                    <path d="M763.73,537.03c0,57.86-0.85,115.73,0.33,173.56c0.67,32.79-20.92,50.55-50.12,50.4c-116.32-0.58-232.65-0.22-348.98-0.25 c-24.97-0.01-41.56-11.25-46.98-32.14c-1.24-4.77-1.44-9.91-1.45-14.88c-0.08-117.78-0.09-235.56-0.04-353.34 c0.02-30.48,17.23-47.44,47.99-47.45c117.21-0.03,234.43-0.04,351.64,0c30.55,0.01,47.55,17.13,47.58,47.86 C763.77,419.54,763.73,478.28,763.73,537.03z M527.65,554.16c-16.34,0-31.64,0.04-46.95-0.01c-15.01-0.05-18.83-3.84-18.86-18.79 c-0.04-23.62,0.13-47.25-0.2-70.87c-0.04-2.82-1.99-7.2-4.22-8.16c-14.05-6.06-23.45-16.33-30.33-29.69 c-1.32-2.56-5.53-5.06-8.47-5.13c-19.19-0.46-38.39-0.24-57.59-0.24c-5.77,0-11.55,0-17.28,0c-0.3,2.54-0.57,3.7-0.57,4.86 c-0.02,96.56-0.06,193.11,0.03,289.67c0.01,11.59,5.67,17.45,17.28,18.05c9.13,0.47,18.31,0.13,27.46,0.14 c7.82,0.01,15.64,0,24.01,0c0-16.68-0.26-31.72,0.12-46.75c0.16-6.46-1.4-10.39-7.44-14.11c-24.48-15.09-31.28-46.96-16-71.38 c14.84-23.73,46.25-31.09,70.75-16.58c24.01,14.22,32.26,45.84,18.16,70.34c-8.49,14.75-21.85,22.72-38.4,25.92 c0,17.45,0,34.47,0,51.78c29.74,0,59,0,88.48,0C527.65,673.43,527.65,614.43,527.65,554.16z M343.33,394.59 c24.41,0,47.69-0.23,70.96,0.15c6.75,0.11,10-1.4,12.52-8.46c6.98-19.56,21.53-31.45,42.1-34.78c20.51-3.32,37.97,3.25,51.18,19.35 c24.23,29.52,11.61,73.28-24.46,86.32c-2.73,0.99-6.76,3.86-6.81,5.93c-0.5,21.14-0.31,42.3-0.31,63.05 c1.43,0.66,1.94,1.09,2.45,1.09c30.39,0.09,60.78,0.26,91.17-0.03c2.1-0.02,4.65-3.18,6.17-5.44c6.02-8.95,10.36-19.52,17.91-26.82 c7.76-7.51,18.54-11.9,28.61-18.02c0-44.48,0-90.4,0-136.81c-3.08-0.19-5.66-0.48-8.23-0.48c-87.35-0.02-174.7-0.03-262.05,0.01 c-2.92,0-5.9,0.24-8.76,0.84c-7.58,1.59-12.09,6.54-12.35,14.13C343.02,367.54,343.33,380.47,343.33,394.59z M736.68,649.18 c0.14-3.12,0.34-5.44,0.34-7.75c0.02-93.55,0.01-187.11,0.01-280.66c0-1.77,0.02-3.55-0.12-5.31c-0.65-8.43-5.07-14.73-13.43-15.02 c-20.21-0.72-40.47-0.23-61.05-0.23c0,46.61,0,92.57,0,138.88c2.64,0.9,5.18,1.61,7.61,2.6c24.99,10.2,39.71,28.69,41.28,55.62 c1.5,25.68-9.66,45.88-32.31,58.6c-34.59,19.42-76.86,2.79-90.31-34.93c-0.88-2.47-2.92-6.3-4.63-6.41 c-9.56-0.62-19.18-0.3-28.7-0.3c0,32.51,0,63.61,0,94.92C615.95,649.18,675.82,649.18,736.68,649.18z M736.9,676.61 c-61.26,0-121.3,0-181.55,0c0,19.22,0,37.88,0,56.82c2.07,0.24,3.49,0.54,4.92,0.54c52.51,0.03,105.03,0.03,157.54,0 c2.04,0,4.1-0.38,6.12-0.75c8.07-1.52,12.62-6.66,12.86-14.61C737.21,704.81,736.9,690.99,736.9,676.61z M648.5,577.18 c19.87,0.07,36.17-15.84,36.58-35.71c0.41-19.74-16.56-36.98-36.45-37.02c-19.7-0.04-36.07,16.21-36.28,36.01 C612.13,560.98,628.01,577.1,648.5,577.18z M477.17,433.33c15.47,0.29,28.29-11.9,28.83-27.41c0.52-15-12.28-28.34-27.61-28.77 c-15.21-0.43-28.37,12.22-28.66,27.55C449.43,420.17,461.76,433.03,477.17,433.33z M432.91,654.8 c13.8-0.17,25.06-11.69,25.03-25.62c-0.02-13.61-11.93-25.13-25.74-24.89c-13.94,0.24-25.3,11.88-24.96,25.6 C407.58,643.86,419.03,654.97,432.91,654.8z"></path>
                                    <path d="M650.21,184.99c23.87,0,46.72,0,70.47,0c0-20.81,0-41.11,0-61.41c0-7.09-0.09-14.17,0.03-21.26 c0.16-10.15,5.48-16.42,13.56-16.18c7.81,0.22,12.99,6.22,13.05,15.94c0.15,24.21,0.05,48.42,0.05,72.64c0,3.2,0,6.4,0,10.81 c4.04,0,7.45-0.04,10.87,0.01c26.85,0.35,53.79-0.49,80.53,1.41c28.3,2.01,50.91,26.47,51.95,54.85 c0.96,26.24,0.36,52.55,0.45,78.82c0.01,3.5,0,7,0,11.73c3.76,0,6.88,0,9.99,0c23.92,0,47.84,0,71.76,0c2.36,0,4.74-0.12,7.08,0.1 c8.2,0.77,13.74,6.37,13.6,13.56c-0.14,7.22-5.79,12.84-14.09,12.91c-25.1,0.22-50.2,0.1-75.31,0.11c-3.83,0-7.66,0-13.05,0 c0,11.73,0,23.09,0,34.45c0,11.5,0,22.99,0,35.55c3.54,0.16,6.65,0.43,9.76,0.43c25.99,0.04,51.98-0.07,77.96,0.11 c8.92,0.06,14.75,5.61,14.73,13.14c-0.02,7.17-5.55,12.54-13.89,13.34c-2.34,0.22-4.72,0.1-7.08,0.1c-23.63,0.01-47.25,0-70.88,0 c-3.18,0-6.36,0-10.07,0c0,23.41,0,45.99,0,69.48c3.27,0.19,6.39,0.52,9.51,0.52c23.92,0.04,47.84-0.01,71.76,0.06 c3.52,0.01,7.13,0.11,10.55,0.87c6.67,1.47,10.97,6.55,9.63,12.71c-1,4.57-5.48,9.09-9.57,12.01c-2.67,1.9-7.41,1.12-11.23,1.14 c-26.55,0.07-53.1,0.04-80.41,0.04c0,23.44,0,46.22,0,70.03c6.5,0,12.91,0,19.32,0c20.67,0,41.35-0.01,62.02,0 c13.53,0.01,20.14,4.3,20.36,13.17c0.22,8.93-6.41,13.47-19.8,13.48c-23.92,0.02-47.84,0.01-71.76,0.01c-3.2,0-6.4,0-10.25,0 c0,23.55,0,46.39,0,70.46c3.22,0,6.35,0,9.47,0c25.1,0,50.21-0.05,75.31,0.03c10.87,0.03,17.29,5.3,17.01,13.62 c-0.27,8.07-6.42,12.97-16.88,13.01c-28.04,0.09-56.09,0.03-85.56,0.03c0,3.51,0,6.61,0,9.7c0,23.03-0.06,46.06,0.01,69.09 c0.05,16.69-5.23,31.25-16.78,43.42c-6.28,6.61-13.64,7.53-19.54,2.48c-5.96-5.1-6.62-12.69-0.5-19.57 c7.8-8.76,10.21-18.68,10.2-30.1c-0.14-189.86-0.09-379.71-0.1-569.57c0-27.15-12.9-40.04-40.19-40.04 c-170.7-0.02-341.39-0.01-512.09-0.01c-2.95,0-5.91,0.09-8.86-0.07c-8.6-0.45-14.1-5.23-14.52-12.48 c-0.42-7.34,5.39-13.55,14.11-13.97c9.64-0.47,19.33-0.11,29.9-0.11c0-13.86,0-26.77,0-39.68c0.01-15.06-0.19-30.12,0.11-45.17 c0.18-8.86,5.92-14.67,13.45-14.6c7.52,0.07,12.99,5.94,13.06,14.87c0.17,24.51,0.07,49.01,0.08,73.52c0,3.2,0,6.41,0,10.3 c23.46,0,46.31,0,70.47,0c0-3.05,0-6.17,0-9.3c0-23.92-0.04-47.83,0.02-71.75c0.03-11.24,4.7-17.47,12.96-17.62 c8.56-0.16,13.64,6.41,13.67,18.04c0.07,23.62,0.02,47.24,0.02,70.86c0,3.17,0,6.34,0,9.98c23.48,0,46.07,0,69.57,0 c0.17-3.29,0.45-6.41,0.46-9.53c0.04-22.44,0.02-44.88,0.02-67.32c0-2.36-0.09-4.73,0.08-7.08c0.67-9.15,5.68-14.81,13.11-14.95 c7.43-0.13,12.76,5.55,13.51,14.53c0.2,2.35,0.1,4.72,0.1,7.08c0.01,22.44,0,44.88,0,67.32c0,3.15,0,6.31,0,9.94 c23.65,0,46.25,0,70.04,0c0-3.29,0-6.42,0-9.55c0-24.51-0.12-49.02,0.07-73.52c0.07-9.71,5.39-15.68,13.2-15.82 c7.22-0.13,12.74,5.49,13.32,13.68c0.17,2.35,0.08,4.72,0.09,7.08c0,22.74,0,45.47,0,68.21 C650.21,178.27,650.21,181.44,650.21,184.99z"></path>
                                   </g>
                                  </svg></span></span> <span class="gem-icon-half-2"><span class="back-angle"><svg id="Layer_1" style="enable-background:new 0 0 1080 1080;" viewbox="0 0 1080 1080" x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                   <g>
                                    <path d="M341.62,993.15c-7.3-4.61-9.01-11.44-8.92-19.7c0.31-27.99,0.12-55.99,0.12-85.36c-3.96,0-7.35,0.03-10.74,0 c-26.85-0.28-53.77,0.54-80.52-1.21c-21.98-1.44-37.48-14.55-47-34.31c-3.93-8.15-1.64-15.38,5.38-18.94 c6.62-3.36,13.76-1.46,17.79,6.41c8.57,16.75,22.6,21.44,40.21,21.43c181.84-0.18,363.68-0.11,545.53-0.09 c4.12,0,8.29-0.01,12.36,0.58c6.9,1,11.17,6.12,10.22,12.22c-0.72,4.6-4.99,9.39-8.94,12.49c-2.54,1.99-7.36,1.36-11.16,1.38 c-19.14,0.11-38.28,0.05-58.56,0.05c0,8.83,0,16.99,0,25.15c0,20.07-0.24,40.14,0.12,60.21c0.15,8.27-1.62,15.09-8.92,19.7 c-2.95,0-5.91,0-8.86,0c-7.01-4.24-9.37-10.42-9.16-18.57c0.44-17.08,0.13-34.19,0.13-51.28c0-11.41,0-22.83,0-34.68 c-23.83,0-46.65,0-70.47,0c0,3.68,0,6.84,0,10c0,25.35-0.22,50.7,0.13,76.04c0.11,8.12-2.04,14.37-9.24,18.49 c-2.95,0-5.91,0-8.86,0c-7.01-4.77-8.99-11.51-8.82-19.76c0.38-17.66,0.12-35.33,0.12-53c0-10.51,0-21.01,0-31.59 c-23.86,0-46.63,0-70.04,0c0,3.91,0,7.11,0,10.32c0,25.03-0.13,50.06,0.07,75.08c0.06,8.29-1.93,15.08-9.93,18.95 c-2.36,0-4.73,0-7.09,0c-8-3.86-9.99-10.66-9.93-18.95c0.19-25.32,0.08-50.65,0.05-75.97c0-3.12-0.27-6.24-0.41-9.4 c-23.63,0-46.37,0-69.61,0c0,28.68-0.19,56.62,0.12,84.56c0.09,8.24-1.8,14.98-8.82,19.76c-2.95,0-5.91,0-8.86,0 c-7.19-4.11-9.44-10.36-9.23-18.49c0.42-16.49,0.12-33.01,0.12-49.51c0-12.01,0-24.01,0-36.53c-23.82,0-46.64,0-70.47,0 c0,3.59,0,6.76,0,9.92c0,25.35-0.23,50.7,0.13,76.04c0.12,8.14-2.15,14.32-9.16,18.57C347.53,993.15,344.58,993.15,341.62,993.15z"></path>
                                    <path d="M86.44,341.15c4.62-7.3,11.44-9.01,19.71-8.92c27.14,0.31,54.29,0.12,82.87,0.12c0-3.51,0-6.6,0-9.7 c0-25.09-0.26-50.18,0.08-75.27c0.45-33.42,22.48-57.47,55.52-61.26c9.23-1.06,16.04,3.44,17.09,11.28c0.99,7.4-4,13.1-12.96,14.8 c-24.04,4.57-33.02,15.45-33.03,40.13c-0.01,176.8,0,353.6-0.01,530.41c0,3.25,0.2,6.52-0.15,9.73c-0.9,8.3-6.46,13.31-14,12.94 c-7.11-0.35-12.19-5.48-12.41-13.47c-0.32-11.5-0.12-23.02-0.14-34.53c-0.01-3.18,0-6.35,0-10.59c-13.7,0-26.59,0-39.47,0 c-14.47,0-28.94-0.29-43.39,0.11c-8.28,0.23-15.09-1.61-19.71-8.92c0-2.95,0-5.91,0-8.86c4.25-7.03,10.45-9.43,18.6-9.15 c13.56,0.47,27.16,0.13,40.74,0.13c14.09,0,28.17,0,42.71,0c0-23.82,0-46.66,0-70.46c-3.68,0-6.85,0-10.01,0 c-24.5,0-49.01-0.23-73.51,0.13c-8.13,0.12-14.4-2.02-18.52-9.23c0-2.95,0-5.91,0-8.86c4.78-7.02,11.52-9.04,19.78-8.81 c14.43,0.4,28.89,0.11,43.33,0.11c12.87,0,25.75,0,38.73,0c0-23.83,0-46.58,0-70.03c-3.94,0-7.15,0-10.36,0 c-24.17,0-48.35-0.12-72.52,0.06c-8.27,0.06-15.14-1.83-18.96-9.92c0-2.36,0-4.72,0-7.09c3.82-8.09,10.69-9.98,18.96-9.92 c24.47,0.17,48.94,0.08,73.4,0.04c3.13,0,6.27-0.29,9.47-0.45c0-23.6,0-46.36,0-69.56c-27.84,0-54.95-0.2-82.06,0.12 c-8.25,0.1-15-1.8-19.78-8.82c0-2.95,0-5.91,0-8.86c4.12-7.21,10.39-9.35,18.52-9.23c24.79,0.35,49.6,0.14,74.4,0.11 c3.09,0,6.19-0.28,9.16-0.42c0-23.79,0-46.41,0-70.02c-3.64,0-6.81,0-9.97,0c-24.5,0-49.01-0.24-73.51,0.13 c-8.15,0.12-14.35-2.13-18.6-9.16C86.44,347.05,86.44,344.1,86.44,341.15z"></path>
                                    <path d="M763.73,537.03c0,57.86-0.85,115.73,0.33,173.56c0.67,32.79-20.92,50.55-50.12,50.4c-116.32-0.58-232.65-0.22-348.98-0.25 c-24.97-0.01-41.56-11.25-46.98-32.14c-1.24-4.77-1.44-9.91-1.45-14.88c-0.08-117.78-0.09-235.56-0.04-353.34 c0.02-30.48,17.23-47.44,47.99-47.45c117.21-0.03,234.43-0.04,351.64,0c30.55,0.01,47.55,17.13,47.58,47.86 C763.77,419.54,763.73,478.28,763.73,537.03z M527.65,554.16c-16.34,0-31.64,0.04-46.95-0.01c-15.01-0.05-18.83-3.84-18.86-18.79 c-0.04-23.62,0.13-47.25-0.2-70.87c-0.04-2.82-1.99-7.2-4.22-8.16c-14.05-6.06-23.45-16.33-30.33-29.69 c-1.32-2.56-5.53-5.06-8.47-5.13c-19.19-0.46-38.39-0.24-57.59-0.24c-5.77,0-11.55,0-17.28,0c-0.3,2.54-0.57,3.7-0.57,4.86 c-0.02,96.56-0.06,193.11,0.03,289.67c0.01,11.59,5.67,17.45,17.28,18.05c9.13,0.47,18.31,0.13,27.46,0.14 c7.82,0.01,15.64,0,24.01,0c0-16.68-0.26-31.72,0.12-46.75c0.16-6.46-1.4-10.39-7.44-14.11c-24.48-15.09-31.28-46.96-16-71.38 c14.84-23.73,46.25-31.09,70.75-16.58c24.01,14.22,32.26,45.84,18.16,70.34c-8.49,14.75-21.85,22.72-38.4,25.92 c0,17.45,0,34.47,0,51.78c29.74,0,59,0,88.48,0C527.65,673.43,527.65,614.43,527.65,554.16z M343.33,394.59 c24.41,0,47.69-0.23,70.96,0.15c6.75,0.11,10-1.4,12.52-8.46c6.98-19.56,21.53-31.45,42.1-34.78c20.51-3.32,37.97,3.25,51.18,19.35 c24.23,29.52,11.61,73.28-24.46,86.32c-2.73,0.99-6.76,3.86-6.81,5.93c-0.5,21.14-0.31,42.3-0.31,63.05 c1.43,0.66,1.94,1.09,2.45,1.09c30.39,0.09,60.78,0.26,91.17-0.03c2.1-0.02,4.65-3.18,6.17-5.44c6.02-8.95,10.36-19.52,17.91-26.82 c7.76-7.51,18.54-11.9,28.61-18.02c0-44.48,0-90.4,0-136.81c-3.08-0.19-5.66-0.48-8.23-0.48c-87.35-0.02-174.7-0.03-262.05,0.01 c-2.92,0-5.9,0.24-8.76,0.84c-7.58,1.59-12.09,6.54-12.35,14.13C343.02,367.54,343.33,380.47,343.33,394.59z M736.68,649.18 c0.14-3.12,0.34-5.44,0.34-7.75c0.02-93.55,0.01-187.11,0.01-280.66c0-1.77,0.02-3.55-0.12-5.31c-0.65-8.43-5.07-14.73-13.43-15.02 c-20.21-0.72-40.47-0.23-61.05-0.23c0,46.61,0,92.57,0,138.88c2.64,0.9,5.18,1.61,7.61,2.6c24.99,10.2,39.71,28.69,41.28,55.62 c1.5,25.68-9.66,45.88-32.31,58.6c-34.59,19.42-76.86,2.79-90.31-34.93c-0.88-2.47-2.92-6.3-4.63-6.41 c-9.56-0.62-19.18-0.3-28.7-0.3c0,32.51,0,63.61,0,94.92C615.95,649.18,675.82,649.18,736.68,649.18z M736.9,676.61 c-61.26,0-121.3,0-181.55,0c0,19.22,0,37.88,0,56.82c2.07,0.24,3.49,0.54,4.92,0.54c52.51,0.03,105.03,0.03,157.54,0 c2.04,0,4.1-0.38,6.12-0.75c8.07-1.52,12.62-6.66,12.86-14.61C737.21,704.81,736.9,690.99,736.9,676.61z M648.5,577.18 c19.87,0.07,36.17-15.84,36.58-35.71c0.41-19.74-16.56-36.98-36.45-37.02c-19.7-0.04-36.07,16.21-36.28,36.01 C612.13,560.98,628.01,577.1,648.5,577.18z M477.17,433.33c15.47,0.29,28.29-11.9,28.83-27.41c0.52-15-12.28-28.34-27.61-28.77 c-15.21-0.43-28.37,12.22-28.66,27.55C449.43,420.17,461.76,433.03,477.17,433.33z M432.91,654.8 c13.8-0.17,25.06-11.69,25.03-25.62c-0.02-13.61-11.93-25.13-25.74-24.89c-13.94,0.24-25.3,11.88-24.96,25.6 C407.58,643.86,419.03,654.97,432.91,654.8z"></path>
                                    <path d="M650.21,184.99c23.87,0,46.72,0,70.47,0c0-20.81,0-41.11,0-61.41c0-7.09-0.09-14.17,0.03-21.26 c0.16-10.15,5.48-16.42,13.56-16.18c7.81,0.22,12.99,6.22,13.05,15.94c0.15,24.21,0.05,48.42,0.05,72.64c0,3.2,0,6.4,0,10.81 c4.04,0,7.45-0.04,10.87,0.01c26.85,0.35,53.79-0.49,80.53,1.41c28.3,2.01,50.91,26.47,51.95,54.85 c0.96,26.24,0.36,52.55,0.45,78.82c0.01,3.5,0,7,0,11.73c3.76,0,6.88,0,9.99,0c23.92,0,47.84,0,71.76,0c2.36,0,4.74-0.12,7.08,0.1 c8.2,0.77,13.74,6.37,13.6,13.56c-0.14,7.22-5.79,12.84-14.09,12.91c-25.1,0.22-50.2,0.1-75.31,0.11c-3.83,0-7.66,0-13.05,0 c0,11.73,0,23.09,0,34.45c0,11.5,0,22.99,0,35.55c3.54,0.16,6.65,0.43,9.76,0.43c25.99,0.04,51.98-0.07,77.96,0.11 c8.92,0.06,14.75,5.61,14.73,13.14c-0.02,7.17-5.55,12.54-13.89,13.34c-2.34,0.22-4.72,0.1-7.08,0.1c-23.63,0.01-47.25,0-70.88,0 c-3.18,0-6.36,0-10.07,0c0,23.41,0,45.99,0,69.48c3.27,0.19,6.39,0.52,9.51,0.52c23.92,0.04,47.84-0.01,71.76,0.06 c3.52,0.01,7.13,0.11,10.55,0.87c6.67,1.47,10.97,6.55,9.63,12.71c-1,4.57-5.48,9.09-9.57,12.01c-2.67,1.9-7.41,1.12-11.23,1.14 c-26.55,0.07-53.1,0.04-80.41,0.04c0,23.44,0,46.22,0,70.03c6.5,0,12.91,0,19.32,0c20.67,0,41.35-0.01,62.02,0 c13.53,0.01,20.14,4.3,20.36,13.17c0.22,8.93-6.41,13.47-19.8,13.48c-23.92,0.02-47.84,0.01-71.76,0.01c-3.2,0-6.4,0-10.25,0 c0,23.55,0,46.39,0,70.46c3.22,0,6.35,0,9.47,0c25.1,0,50.21-0.05,75.31,0.03c10.87,0.03,17.29,5.3,17.01,13.62 c-0.27,8.07-6.42,12.97-16.88,13.01c-28.04,0.09-56.09,0.03-85.56,0.03c0,3.51,0,6.61,0,9.7c0,23.03-0.06,46.06,0.01,69.09 c0.05,16.69-5.23,31.25-16.78,43.42c-6.28,6.61-13.64,7.53-19.54,2.48c-5.96-5.1-6.62-12.69-0.5-19.57 c7.8-8.76,10.21-18.68,10.2-30.1c-0.14-189.86-0.09-379.71-0.1-569.57c0-27.15-12.9-40.04-40.19-40.04 c-170.7-0.02-341.39-0.01-512.09-0.01c-2.95,0-5.91,0.09-8.86-0.07c-8.6-0.45-14.1-5.23-14.52-12.48 c-0.42-7.34,5.39-13.55,14.11-13.97c9.64-0.47,19.33-0.11,29.9-0.11c0-13.86,0-26.77,0-39.68c0.01-15.06-0.19-30.12,0.11-45.17 c0.18-8.86,5.92-14.67,13.45-14.6c7.52,0.07,12.99,5.94,13.06,14.87c0.17,24.51,0.07,49.01,0.08,73.52c0,3.2,0,6.41,0,10.3 c23.46,0,46.31,0,70.47,0c0-3.05,0-6.17,0-9.3c0-23.92-0.04-47.83,0.02-71.75c0.03-11.24,4.7-17.47,12.96-17.62 c8.56-0.16,13.64,6.41,13.67,18.04c0.07,23.62,0.02,47.24,0.02,70.86c0,3.17,0,6.34,0,9.98c23.48,0,46.07,0,69.57,0 c0.17-3.29,0.45-6.41,0.46-9.53c0.04-22.44,0.02-44.88,0.02-67.32c0-2.36-0.09-4.73,0.08-7.08c0.67-9.15,5.68-14.81,13.11-14.95 c7.43-0.13,12.76,5.55,13.51,14.53c0.2,2.35,0.1,4.72,0.1,7.08c0.01,22.44,0,44.88,0,67.32c0,3.15,0,6.31,0,9.94 c23.65,0,46.25,0,70.04,0c0-3.29,0-6.42,0-9.55c0-24.51-0.12-49.02,0.07-73.52c0.07-9.71,5.39-15.68,13.2-15.82 c7.22-0.13,12.74,5.49,13.32,13.68c0.17,2.35,0.08,4.72,0.09,7.08c0,22.74,0,45.47,0,68.21 C650.21,178.27,650.21,181.44,650.21,184.99z"></path>
                                   </g>
                                  </svg></span></span> </div>
                              </div>
                             </div>
                            </a> </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-c679174 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-element_type="widget" data-id="c679174" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-text-editor elementor-clearfix">
                            <div class="title-h3"> High Tech </div>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-131bf5c flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-element_type="widget" data-id="131bf5c" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-text-editor elementor-clearfix">
                            <p><span style="font-weight: 400;">Deliver seamless customer experiences, and increase time-to-value with an optimized</span> <span style="font-weight: 400;">Salesforce platform.&nbsp;</span></p>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                      <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-827a979" data-element_type="column" data-id="827a979" data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;animation_delay&quot;:0,&quot;animation_mobile&quot;:&quot;none&quot;}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-7ca0e72 elementor-absolute flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-styledimage" data-element_type="widget" data-id="7ca0e72" data-settings="{&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/dtcforce.com\/wp-content\/uploads\/2022\/04\/cloud-02-1.png&quot;,&quot;id&quot;:1931,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;_position&quot;:&quot;absolute&quot;,&quot;thegem_interaction_mouse&quot;:&quot;yes&quot;,&quot;thegem_interaction_mouse_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.2,&quot;sizes&quot;:[]},&quot;thegem_elementor_preset&quot;:&quot;default&quot;,&quot;thegem_interaction_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="thegem-styledimage.default">
                          <div class="elementor-widget-container">
                           <div class="styled-image-wrapper">
                            <div class="gem-image gem-wrapbox gem-wrapbox-default gem-wrapbox-position-left lazy-loading">
                             <div class="gem-wrapbox-inner lazy-loading-item" data-ll-effect="move-up"> <img alt="Cloud-02" class="gem-wrapbox-element img-responsive" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="wp-content/uploads/2022/04/cloud-02-1-150x150.png" id="tgpli-660df3d3707e0">
                              <script>
                               window.tgpQueue.add('tgpli-660df3d3707e0')
                              </script><noscript><img alt="Cloud-02" class="gem-wrapbox-element img-responsive" src="wp-content/uploads/2022/04/cloud-02-1-150x150.png"></noscript>
                             </div>
                            </div>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-33bc65f flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-icon" data-element_type="widget" data-id="33bc65f" data-settings="{&quot;_animation_mobile&quot;:&quot;none&quot;,&quot;thegem_elementor_preset&quot;:&quot;default&quot;}" data-widget_type="thegem-icon.default">
                          <div class="elementor-widget-container">
                           <div class="left-box icon-inline-position"> <a href="healthcare-life-sciences-expertise/index.html">
                             <div class="gem-icon gem-icon-pack-fontawesome gem-icon-size-large gem-icon-shape-default">
                              <div class="gem-icon-inner">
                               <div class="padding-box-inner"> <span class="gem-icon-half-1"><span class="back-angle"><svg id="Layer_1" style="enable-background:new 0 0 1080 1080;" viewbox="0 0 1080 1080" x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                   <g>
                                    <path d="M985.06,393.95c-4.02,19.76-7.77,39.57-12.21,59.24c-1.7,7.56-4.74,14.85-7.57,22.1c-3.49,8.95-10.25,12.58-17.39,9.85 c-7.72-2.95-9.69-9.71-6.81-19.59c5.4-18.53,12.48-36.92,15.02-55.89c9.19-68.67-6.67-129.72-61.74-175.66 c-35.26-29.42-77.65-38.15-122.75-35.71c-32.27,1.75-61.36,12.74-88.47,29.92c-29.55,18.73-58.96,37.73-89.19,55.31 c-12.52,7.28-26.64,12.59-40.7,16.26c-19.32,5.04-38.16-0.33-55.06-9.81c-22.42-12.57-44.06-26.55-65.87-40.2 c-7.64-4.78-9.58-12.12-5.83-18.5c3.94-6.68,11.76-8.27,19.76-3.38c17.76,10.85,35.6,21.62,52.94,33.12 c27.69,18.37,54.65,18.06,82.54,0.02c33.26-21.51,66.73-42.75,100.91-62.74c71.24-41.66,166.41-34.56,230.59,17.4 c39.04,31.61,59.93,74.08,68.24,123.12c1.34,7.93,2.39,15.92,3.58,23.88C985.06,373.11,985.06,383.53,985.06,393.95z"></path>
                                    <path d="M797.79,689.42c18.11,0,33.43-0.28,48.73,0.18c4.36,0.13,10.02,1.16,12.62,4.02c2.74,3.02,4.08,9.01,3.27,13.17 c-1.23,6.28-6.88,8.72-13.36,8.7c-23.45-0.05-46.9,0.24-70.33-0.16c-6.89-0.12-11.91,1.79-16.87,6.59 c-11.73,11.35-24.05,22.1-38.04,34.82c18.14,0,33.64-0.14,49.13,0.05c9.18,0.11,14.39,4.88,14.5,12.59 c0.13,8.25-5.46,13.25-15.76,13.34c-21.42,0.18-42.85,0.44-64.25-0.12c-8.7-0.23-15.01,2.2-21.51,8.18 c-44.06,40.6-88.52,80.76-132.88,121.04c-11.69,10.62-20.54,8.45-26.52-6.02c-20.76-50.22-28.87-102.44-22.22-156.29 c9.65-78.23,43.76-144.33,102.56-197.14c11.37-10.21,23.92-19.16,36.34-28.12c9.8-7.07,17.92-4.33,22.68,6.94 c26.66,63.03,31.95,127.92,16.66,194.54c-3.28,14.28-8.91,19.54-17.99,17.28c-8.48-2.11-10.84-9.39-7.56-23.15 c12.89-54.03,10.17-107.3-7.82-159.81c-0.56-1.63-1.22-3.23-1.87-4.83c-0.09-0.23-0.39-0.38-0.6-0.57 C552,617.21,497.87,756.25,545.86,882.31c2.32-1.83,4.54-3.38,6.53-5.19c53.78-48.84,107.5-97.75,161.39-146.47 c4.27-3.86,5.92-7.77,5.82-13.44c-0.31-17.94-0.24-35.89-0.06-53.84c0.1-9.55,5.21-15.46,12.81-15.65 c7.39-0.18,12.95,5.56,13.1,14.23c0.22,12.41,0.06,24.82,0.06,39.67c8.99-8.16,15.93-15.91,24.25-21.66 c14.3-9.88,19.63-22.42,17.57-39.62c-1.4-11.7-0.38-23.7-0.23-35.57c0.12-9.64,4.96-15.45,12.66-15.67 c8.03-0.23,13.19,5.78,13.32,15.88c0.13,10.94,0.03,21.89,0.03,34.79c3.69-3.13,6.24-5.16,8.65-7.35 c25.73-23.34,51.36-46.78,77.23-69.95c3.29-2.95,7.98-6.56,11.71-6.24c4.33,0.37,10.59,3.94,11.86,7.58 c1.43,4.09-0.2,11.3-3.26,14.52c-10.15,10.67-21.54,20.15-32.45,30.09c-4.45,4.06-8.88,8.14-15.42,14.14 c7.19,0,11.91-0.17,16.62,0.04c9.07,0.4,14.63,5.18,14.88,12.53c0.25,7.59-5.53,13.11-14.99,13.35c-13.02,0.33-26.05,0-39.07,0.21 c-2.74,0.04-6.21,0.3-8.07,1.92C826.93,662.75,813.39,675.25,797.79,689.42z"></path>
                                    <path d="M948.74,532.9c-20.08,0-39.13-0.38-58.16,0.09c-30.04,0.74-60.14,1.12-90.07,3.41c-25.19,1.93-49.16,10.01-72.37,20.02 c-2.92,1.26-5.76,2.73-8.75,3.78c-8.29,2.91-15.2,0.2-18.09-6.91c-2.7-6.65,0.03-13.43,7.85-16.88c11.08-4.9,22.31-9.6,33.78-13.48 c32.02-10.83,65.06-15.97,98.86-16.06c38.49-0.1,76.97-0.05,115.46-0.01c13.38,0.01,17.69,4.22,17.56,17.69 c-0.37,36.45,0.88,73.03-1.84,109.31c-5.01,66.63-31.15,125.19-74.88,175.57c-45.62,52.55-102.88,86.13-170.68,101.52 c-36.99,8.39-74.67,7.99-112.28,7.26c-8.14-0.16-12.99-6.21-12.56-13.66c0.42-7.29,5.56-11.91,14.16-12.13 c21.69-0.55,43.45,0.04,65.05-1.51c72.2-5.19,133.75-34.29,184.62-85.5c39.07-39.33,64.58-86.51,75.88-140.75 c3.99-19.12,5.38-38.95,6.22-58.53C949.53,582.19,948.74,558.16,948.74,532.9z"></path>
                                    <path d="M96.02,385.6c-0.14-64.92,17.99-122.61,68.09-166.99c29.22-25.88,64.1-39.73,102.54-44.82 c47.04-6.23,91.62,0.98,132.93,25.17c1.74,1.02,3.6,1.92,5.15,3.19c5.61,4.62,7.51,10.47,3.73,16.89 c-3.71,6.3-9.55,8.24-16.41,5.18c-12.38-5.52-24.22-12.71-37.07-16.62c-64.01-19.46-123.8-11.96-175.76,32.5 c-30.59,26.17-46.56,61.24-53.82,100.47c-9.25,50.02,0.91,97.02,21.86,142.45c25.5,55.32,60.18,104.64,98.3,151.77 c2.91,3.6,5.91,7.14,8.59,10.91c4.86,6.82,4.38,14.08-1,18.73c-5.54,4.79-13.62,4.06-19.16-2.62 c-10.9-13.13-21.74-26.35-31.94-40.02c-30.13-40.4-57.82-82.33-78.7-128.43C107.83,459.08,97.06,423.64,96.02,385.6z"></path>
                                    <path d="M172.32,361.15c1.44-11.63,3-26.27,5.13-40.84c1.55-10.58,7.94-15.89,15.91-14.19c8.13,1.74,11.73,8.56,9.57,19.24 c-6.3,31.2-5.16,62.19,3.31,92.75c9.01,32.52,24.04,62.51,41.33,91.31c42.28,70.43,96.08,131.58,153.9,189.39 c15.95,15.95,32.64,31.15,49.05,46.64c5.48,5.17,9.01,10.81,4.68,18.32c-4.64,8.06-13.94,8.64-22.11,1.01 c-17.12-15.99-34.38-31.87-50.91-48.46c-59.56-59.76-115.09-122.88-158.2-195.88c-23.16-39.22-43.04-79.92-48.92-125.92 C173.78,384.5,173.38,374.36,172.32,361.15z"></path>
                                    <path d="M502.23,876.72c0.04,13.47-10.6,19.37-19.94,13.9c-6.72-3.94-13.06-8.56-19.44-13.05 c-71.34-50.26-133.66-110.51-192.74-174.32c-5.98-6.46-5.9-14.2-0.57-19.35c5.58-5.39,13.21-4.76,19.88,2.04 c21.27,21.69,42.08,43.84,63.71,65.15c43.15,42.52,89.18,81.6,139.52,115.5C497.05,869.54,500.13,874.45,502.23,876.72z"></path>
                                   </g>
                                  </svg></span></span> <span class="gem-icon-half-2"><span class="back-angle"><svg id="Layer_1" style="enable-background:new 0 0 1080 1080;" viewbox="0 0 1080 1080" x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                   <g>
                                    <path d="M985.06,393.95c-4.02,19.76-7.77,39.57-12.21,59.24c-1.7,7.56-4.74,14.85-7.57,22.1c-3.49,8.95-10.25,12.58-17.39,9.85 c-7.72-2.95-9.69-9.71-6.81-19.59c5.4-18.53,12.48-36.92,15.02-55.89c9.19-68.67-6.67-129.72-61.74-175.66 c-35.26-29.42-77.65-38.15-122.75-35.71c-32.27,1.75-61.36,12.74-88.47,29.92c-29.55,18.73-58.96,37.73-89.19,55.31 c-12.52,7.28-26.64,12.59-40.7,16.26c-19.32,5.04-38.16-0.33-55.06-9.81c-22.42-12.57-44.06-26.55-65.87-40.2 c-7.64-4.78-9.58-12.12-5.83-18.5c3.94-6.68,11.76-8.27,19.76-3.38c17.76,10.85,35.6,21.62,52.94,33.12 c27.69,18.37,54.65,18.06,82.54,0.02c33.26-21.51,66.73-42.75,100.91-62.74c71.24-41.66,166.41-34.56,230.59,17.4 c39.04,31.61,59.93,74.08,68.24,123.12c1.34,7.93,2.39,15.92,3.58,23.88C985.06,373.11,985.06,383.53,985.06,393.95z"></path>
                                    <path d="M797.79,689.42c18.11,0,33.43-0.28,48.73,0.18c4.36,0.13,10.02,1.16,12.62,4.02c2.74,3.02,4.08,9.01,3.27,13.17 c-1.23,6.28-6.88,8.72-13.36,8.7c-23.45-0.05-46.9,0.24-70.33-0.16c-6.89-0.12-11.91,1.79-16.87,6.59 c-11.73,11.35-24.05,22.1-38.04,34.82c18.14,0,33.64-0.14,49.13,0.05c9.18,0.11,14.39,4.88,14.5,12.59 c0.13,8.25-5.46,13.25-15.76,13.34c-21.42,0.18-42.85,0.44-64.25-0.12c-8.7-0.23-15.01,2.2-21.51,8.18 c-44.06,40.6-88.52,80.76-132.88,121.04c-11.69,10.62-20.54,8.45-26.52-6.02c-20.76-50.22-28.87-102.44-22.22-156.29 c9.65-78.23,43.76-144.33,102.56-197.14c11.37-10.21,23.92-19.16,36.34-28.12c9.8-7.07,17.92-4.33,22.68,6.94 c26.66,63.03,31.95,127.92,16.66,194.54c-3.28,14.28-8.91,19.54-17.99,17.28c-8.48-2.11-10.84-9.39-7.56-23.15 c12.89-54.03,10.17-107.3-7.82-159.81c-0.56-1.63-1.22-3.23-1.87-4.83c-0.09-0.23-0.39-0.38-0.6-0.57 C552,617.21,497.87,756.25,545.86,882.31c2.32-1.83,4.54-3.38,6.53-5.19c53.78-48.84,107.5-97.75,161.39-146.47 c4.27-3.86,5.92-7.77,5.82-13.44c-0.31-17.94-0.24-35.89-0.06-53.84c0.1-9.55,5.21-15.46,12.81-15.65 c7.39-0.18,12.95,5.56,13.1,14.23c0.22,12.41,0.06,24.82,0.06,39.67c8.99-8.16,15.93-15.91,24.25-21.66 c14.3-9.88,19.63-22.42,17.57-39.62c-1.4-11.7-0.38-23.7-0.23-35.57c0.12-9.64,4.96-15.45,12.66-15.67 c8.03-0.23,13.19,5.78,13.32,15.88c0.13,10.94,0.03,21.89,0.03,34.79c3.69-3.13,6.24-5.16,8.65-7.35 c25.73-23.34,51.36-46.78,77.23-69.95c3.29-2.95,7.98-6.56,11.71-6.24c4.33,0.37,10.59,3.94,11.86,7.58 c1.43,4.09-0.2,11.3-3.26,14.52c-10.15,10.67-21.54,20.15-32.45,30.09c-4.45,4.06-8.88,8.14-15.42,14.14 c7.19,0,11.91-0.17,16.62,0.04c9.07,0.4,14.63,5.18,14.88,12.53c0.25,7.59-5.53,13.11-14.99,13.35c-13.02,0.33-26.05,0-39.07,0.21 c-2.74,0.04-6.21,0.3-8.07,1.92C826.93,662.75,813.39,675.25,797.79,689.42z"></path>
                                    <path d="M948.74,532.9c-20.08,0-39.13-0.38-58.16,0.09c-30.04,0.74-60.14,1.12-90.07,3.41c-25.19,1.93-49.16,10.01-72.37,20.02 c-2.92,1.26-5.76,2.73-8.75,3.78c-8.29,2.91-15.2,0.2-18.09-6.91c-2.7-6.65,0.03-13.43,7.85-16.88c11.08-4.9,22.31-9.6,33.78-13.48 c32.02-10.83,65.06-15.97,98.86-16.06c38.49-0.1,76.97-0.05,115.46-0.01c13.38,0.01,17.69,4.22,17.56,17.69 c-0.37,36.45,0.88,73.03-1.84,109.31c-5.01,66.63-31.15,125.19-74.88,175.57c-45.62,52.55-102.88,86.13-170.68,101.52 c-36.99,8.39-74.67,7.99-112.28,7.26c-8.14-0.16-12.99-6.21-12.56-13.66c0.42-7.29,5.56-11.91,14.16-12.13 c21.69-0.55,43.45,0.04,65.05-1.51c72.2-5.19,133.75-34.29,184.62-85.5c39.07-39.33,64.58-86.51,75.88-140.75 c3.99-19.12,5.38-38.95,6.22-58.53C949.53,582.19,948.74,558.16,948.74,532.9z"></path>
                                    <path d="M96.02,385.6c-0.14-64.92,17.99-122.61,68.09-166.99c29.22-25.88,64.1-39.73,102.54-44.82 c47.04-6.23,91.62,0.98,132.93,25.17c1.74,1.02,3.6,1.92,5.15,3.19c5.61,4.62,7.51,10.47,3.73,16.89 c-3.71,6.3-9.55,8.24-16.41,5.18c-12.38-5.52-24.22-12.71-37.07-16.62c-64.01-19.46-123.8-11.96-175.76,32.5 c-30.59,26.17-46.56,61.24-53.82,100.47c-9.25,50.02,0.91,97.02,21.86,142.45c25.5,55.32,60.18,104.64,98.3,151.77 c2.91,3.6,5.91,7.14,8.59,10.91c4.86,6.82,4.38,14.08-1,18.73c-5.54,4.79-13.62,4.06-19.16-2.62 c-10.9-13.13-21.74-26.35-31.94-40.02c-30.13-40.4-57.82-82.33-78.7-128.43C107.83,459.08,97.06,423.64,96.02,385.6z"></path>
                                    <path d="M172.32,361.15c1.44-11.63,3-26.27,5.13-40.84c1.55-10.58,7.94-15.89,15.91-14.19c8.13,1.74,11.73,8.56,9.57,19.24 c-6.3,31.2-5.16,62.19,3.31,92.75c9.01,32.52,24.04,62.51,41.33,91.31c42.28,70.43,96.08,131.58,153.9,189.39 c15.95,15.95,32.64,31.15,49.05,46.64c5.48,5.17,9.01,10.81,4.68,18.32c-4.64,8.06-13.94,8.64-22.11,1.01 c-17.12-15.99-34.38-31.87-50.91-48.46c-59.56-59.76-115.09-122.88-158.2-195.88c-23.16-39.22-43.04-79.92-48.92-125.92 C173.78,384.5,173.38,374.36,172.32,361.15z"></path>
                                    <path d="M502.23,876.72c0.04,13.47-10.6,19.37-19.94,13.9c-6.72-3.94-13.06-8.56-19.44-13.05 c-71.34-50.26-133.66-110.51-192.74-174.32c-5.98-6.46-5.9-14.2-0.57-19.35c5.58-5.39,13.21-4.76,19.88,2.04 c21.27,21.69,42.08,43.84,63.71,65.15c43.15,42.52,89.18,81.6,139.52,115.5C497.05,869.54,500.13,874.45,502.23,876.72z"></path>
                                   </g>
                                  </svg></span></span> </div>
                              </div>
                             </div>
                            </a> </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-15b894e flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-element_type="widget" data-id="15b894e" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-text-editor elementor-clearfix">
                            <div class="title-h3"> Healthcare &amp; Life Sciences </div>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-1e16b32 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-element_type="widget" data-id="1e16b32" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-text-editor elementor-clearfix">
                            <p><span style="font-weight: 400;">Improving patient outcomes, reducing costs while increasing value of care with a holistic view of stakeholders and putting people first.&nbsp;</span></p>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </section>
                   <section class="elementor-section elementor-inner-section elementor-element elementor-element-e4d5426 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="e4d5426">
                    <div class="elementor-container elementor-column-gap-thegem">
                     <div class="elementor-row">
                      <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7c985ee" data-element_type="column" data-id="7c985ee" data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;animation_delay&quot;:300,&quot;animation_mobile&quot;:&quot;none&quot;}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-61862d5 elementor-absolute flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-styledimage" data-element_type="widget" data-id="61862d5" data-settings="{&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/dtcforce.com\/wp-content\/uploads\/2022\/04\/cloud-02.png&quot;,&quot;id&quot;:1930,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;_position&quot;:&quot;absolute&quot;,&quot;thegem_interaction_mouse&quot;:&quot;yes&quot;,&quot;thegem_interaction_mouse_direction&quot;:&quot;negative&quot;,&quot;thegem_interaction_mouse_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.2,&quot;sizes&quot;:[]},&quot;thegem_elementor_preset&quot;:&quot;default&quot;,&quot;thegem_interaction_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="thegem-styledimage.default">
                          <div class="elementor-widget-container">
                           <div class="styled-image-wrapper">
                            <div class="gem-image gem-wrapbox gem-wrapbox-default gem-wrapbox-position-left lazy-loading">
                             <div class="gem-wrapbox-inner lazy-loading-item" data-ll-effect="move-up"> <img alt="Cloud-02" class="gem-wrapbox-element img-responsive" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="wp-content/uploads/2022/04/cloud-02-150x150.png" id="tgpli-660df3d3707f0">
                              <script>
                               window.tgpQueue.add('tgpli-660df3d3707f0')
                              </script><noscript><img alt="Cloud-02" class="gem-wrapbox-element img-responsive" src="wp-content/uploads/2022/04/cloud-02-150x150.png"></noscript>
                             </div>
                            </div>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-71c140e flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-icon" data-element_type="widget" data-id="71c140e" data-settings="{&quot;thegem_elementor_preset&quot;:&quot;default&quot;}" data-widget_type="thegem-icon.default">
                          <div class="elementor-widget-container">
                           <div class="left-box icon-inline-position"> <a href="construction-industry-expertise/index.html">
                             <div class="gem-icon gem-icon-pack-fontawesome gem-icon-size-large gem-icon-shape-default">
                              <div class="gem-icon-inner">
                               <div class="padding-box-inner"> <span class="gem-icon-half-1"><span class="back-angle"><svg id="Layer_1" style="enable-background:new 0 0 1080 1080;" viewbox="0 0 1080 1080" x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                   <path d="M618.62,94.86c3.47,4.32,6.78,8.78,10.49,12.89c1.54,1.71,3.79,3.48,5.94,3.82c47.63,7.69,78.1,37.48,100.19,77.85 c23.33,42.63,33.28,89.05,37.92,136.89c0.64,6.56,1.16,13.14,1.81,20.45c14.38,0,28.21-0.05,42.05,0.01 c14.57,0.06,19.88,5.29,19.98,19.87c0.11,16.5,0.12,32.99,0,49.49c-0.11,14.35-5.15,19.47-19.31,19.47 c-164.97,0.04-329.93,0.04-494.9,0c-14.4,0-19.33-4.87-19.46-19.25c-0.16-16.78-0.17-33.57,0-50.36 c0.14-14.11,5.42-19.15,19.66-19.22c13.85-0.07,27.71-0.01,41.58-0.01c2.54-19.51,4.45-38.46,7.56-57.2 c7.96-47.93,22.7-93.26,54.01-131.58c20.08-24.57,45.33-40.92,77.18-45.91c4.54-0.71,7.42-2.06,9.04-7.33 c1.19-3.85,5.89-6.63,9.02-9.88C553.78,94.86,586.2,94.86,618.62,94.86z M333.53,405.33c158.02,0,315.52,0,472.99,0 c0-9.95,0-19.26,0-29.2c-108.67,0-216.51,0-324.67,0c0-10.02,0-19.36,0-29.74c88.03,0,175.49,0,263.1,0 c-1.92-37.9-7.87-74.02-20.15-108.89c-10.5-29.83-24.96-57.32-50.45-77.4c-13.03-10.27-27.55-17.3-45.4-18.9 c0,44.17,0,87.44,0,130.63c-10.2,0-19.52,0-29.75,0c0-49.52,0-98.24,0-146.92c-19.94,0-38.92,0-58.74,0c0,49.21,0,97.97,0,147.14 c-10.17,0-19.5,0-29.54,0c0-43.88,0-87.2,0-130.69c-1.54,0-2.4-0.11-3.21,0.02c-2,0.32-4,0.65-5.96,1.14 c-29.63,7.39-50.27,26.46-65.75,51.65c-28.53,46.44-36.99,98.35-40.91,152.57c18.99,0,37.36,0,55.98,0c0,10.35,0,19.69,0,29.63 c-19.96,0-39.32,0-58.67,0c-19.57,0-39.14,0-58.87,0C333.53,386.75,333.53,395.89,333.53,405.33z"></path>
                                   <path d="M304.33,889.03c-14.49,14.54-29.16,29.29-43.88,43.99c-11.57,11.56-18.27,11.53-29.92-0.09 c-18.23-18.19-36.46-36.38-54.63-54.64c-10.68-10.73-10.6-17.83,0.21-28.69c13.48-13.53,26.91-27.11,40.6-40.43 c3.24-3.15,4.04-5.82,1.66-9.66c-1.36-2.2-2.77-4.6-3.21-7.08c-2.43-13.78-10.57-17.2-23.86-16.06 c-15.51,1.34-31.22,0.45-46.85,0.26c-13.71-0.16-18.99-5.45-19.03-18.96c-0.09-26.91-0.1-53.83,0-80.74 c0.05-13.37,5.57-18.86,19.12-18.96c19.1-0.15,38.2-0.25,57.3,0.09c5.55,0.1,7.32-2.44,10.13-6.81c10.69-16.59,5.81-28.18-8.7-39.48 c-10.65-8.29-19.57-18.85-29.03-28.61c-8.33-8.6-8.44-16.47-0.09-24.95c19.5-19.78,39.14-39.44,58.93-58.93 c8.66-8.53,16.23-8.44,24.9,0.07c14.05,13.78,28.01,27.65,41.7,41.78c3.62,3.73,6.71,4.82,11.17,1.96c2.17-1.39,4.66-2.3,7.05-3.31 c15.08-6.4,15.09-6.39,15.09-22.33c0-15.92-0.11-31.83,0.04-47.75c0.14-13.97,5.07-18.92,18.79-18.96c26.91-0.08,53.83-0.08,80.74,0 c13.63,0.04,18.98,5.29,19.08,18.83c0.13,19.39,0.18,38.78-0.07,58.16c-0.06,4.77,1.89,6.42,5.87,8.91 c16.55,10.35,28.8,7.09,40.43-8.34c7.94-10.53,18.46-19.13,27.99-28.42c9.42-9.19,16.83-9.2,26.17,0.06 c19.32,19.15,38.55,38.38,57.7,57.71c9.24,9.33,9.18,16.72-0.13,26.16c-13.61,13.81-27.25,27.59-41.19,41.06 c-3.81,3.68-4.74,6.86-1.85,11.23c0.79,1.19,1.57,2.56,1.78,3.93c2.62,16.88,13.38,19.64,28.42,18.18 c13.76-1.33,27.75-0.33,41.64-0.27c15.51,0.07,20.45,4.87,20.48,20.06c0.06,26.33,0.07,52.67,0,79 c-0.04,14.79-4.86,19.55-19.95,19.64c-17.94,0.11-35.89,0.33-53.82-0.12c-7.04-0.18-11.73,1.3-13.06,8.83 c-0.3,1.68-1.12,3.27-1.77,4.88c-6.12,15.2-6.13,15.2,5.81,27.13c11.25,11.26,22.58,22.44,33.73,33.79 c8.96,9.13,9.14,16.56,0.29,25.53c-19.31,19.57-38.76,39-58.31,58.32c-9.13,9.03-16.79,8.83-26.2-0.47 c-13.79-13.63-27.52-27.32-41.06-41.2c-3.26-3.34-6.1-5.08-10.33-1.98c-1.14,0.84-2.55,1.58-3.92,1.79 c-17.62,2.75-20.49,13.99-18.91,29.67c1.39,13.75,0.36,27.75,0.27,41.64c-0.09,14.23-5.34,19.6-19.28,19.63 c-26.91,0.07-53.83,0.08-80.74-0.01c-13.15-0.04-18.44-5.18-18.58-18.4c-0.21-19.39-0.21-38.78,0.04-58.16 c0.06-5.07-1.25-7.84-6.41-9.49C319.32,895.69,312.27,892.29,304.33,889.03z M421.24,954.18c0.42-1.56,0.7-2.11,0.7-2.65 c0.06-19.68,0.28-39.37,0.05-59.05c-0.11-9.44,3.92-14.92,12.82-18.11c11.93-4.28,23.71-9.1,35.24-14.38 c13.65-6.25,16.94-6.05,27.49,4.5c13.68,13.68,27.31,27.4,40.36,40.5c14.27-14.23,27.91-27.84,42.06-41.95 c-13.61-13.6-27.73-27.64-41.78-41.74c-8.8-8.83-9.25-12.92-4.38-23.92c5.37-12.12,10.45-24.39,15.23-36.76 c4.12-10.65,7.54-13.54,19.29-13.64c17.08-0.15,34.16-0.02,51.23-0.07c3.04-0.01,6.09-0.29,9.21-0.45c0-19.94,0-38.92,0-58.88 c-3.57,0-6.68,0-9.78,0c-17.66-0.01-35.31-0.07-52.97,0c-7.87,0.03-13.07-3.48-16.02-10.8c-5.72-14.18-11.53-28.31-17.51-42.38 c-3.11-7.31-1.82-13.47,3.71-18.98c9.84-9.81,19.49-19.82,29.54-29.41c5.16-4.92,11-9.13,15.23-12.59 c-15.87-15.81-29.5-29.39-43.61-43.44c-13.15,13.24-26.96,27.23-40.87,41.13c-9.48,9.47-13.07,9.8-25.36,4.07 c-9.41-4.38-18.87-8.77-28.64-12.24c-20-7.1-20.46-7.35-20.46-28.22c0-17.86,0-35.72,0-53.8c-20.26,0-39.47,0-59.3,0 c0,20.53,0.11,40.47-0.04,60.41c-0.09,11.62-3.06,15.12-13.76,19.23c-11.84,4.54-23.66,9.23-35.2,14.47 c-12.87,5.85-16.14,5.65-26.06-4.25c-13.88-13.86-27.72-27.77-41.2-41.29c-14.1,14.19-27.68,27.87-41.65,41.93 c1.42,1.52,3.3,3.66,5.3,5.67c12.47,12.5,24.96,24.98,37.45,37.46c5.57,5.57,8.01,11.68,4.61,19.57c-6.17,14.3-12,28.74-17.88,43.16 c-2.85,7.01-7.99,10.29-15.46,10.27c-13.32-0.02-26.63,0.01-39.95,0.02c-7.72,0-15.43,0-23.18,0c0,20.37,0,39.55,0,59.36 c20.65,0,40.6-0.1,60.55,0.04c11.69,0.08,14.99,2.88,19.17,13.75c4.45,11.57,8.98,23.14,14.14,34.4c6.24,13.61,6,16.9-4.53,27.47 c-13.63,13.68-27.26,27.34-40.4,40.53c14.14,14.15,27.77,27.8,41.9,41.94c13.83-13.86,28.05-28.2,42.38-42.43 c8.07-8.01,12.35-8.49,22.48-4.09c12.69,5.51,25.4,11.08,38.4,15.8c8.98,3.26,12.93,9.05,12.9,18.21c-0.03,11.87,0,23.74,0,35.6 c0,8.56,0,17.13,0,26C382.95,954.18,401.94,954.18,421.24,954.18z"></path>
                                   <path d="M697.09,643.36c-6.92,0-13.84,0.22-20.75-0.05c-11.45-0.45-17.14-5.85-17.34-17.25c-0.32-18.23-0.33-36.47,0.01-54.7 c0.21-11.41,5.8-16.54,17.49-16.94c6.87-0.24,13.76-0.04,23.12-0.04c-6.07-6.22-10.55-10.8-15.02-15.39 c-9.78-10.04-9.95-16.97-0.3-26.78c11.97-12.18,24.04-24.26,36.19-36.25c9.78-9.65,17-9.59,26.78,0.02 c4.67,4.58,9.16,9.34,15.51,15.84c0-9.66-0.12-16.75,0.03-23.84c0.25-11.59,5.56-17.09,17.06-17.2c18.23-0.18,36.47-0.17,54.7,0 c11.58,0.11,16.73,5.47,16.96,17.17c0.13,6.93,0.02,13.87,0.02,23.18c6.11-5.94,10.89-10.59,15.68-15.23 c9.83-9.52,17.02-9.58,26.82,0.09c12.16,11.99,24.24,24.06,36.2,36.25c9.21,9.38,9.25,16.91,0.12,26.19 c-4.63,4.71-9.73,8.95-14.62,13.4c0.39,0.85,0.78,1.7,1.17,2.55c6.5,0,13-0.1,19.49,0.02c13.79,0.25,18.99,5.35,19.08,18.88 c0.11,17.07,0.11,34.15,0,51.23c-0.09,13.02-5.5,18.53-18.37,18.85c-6.6,0.17-13.2,0.03-22.08,0.03 c6.11,6.26,10.86,11.04,15.52,15.91c8.69,9.06,8.86,16.72,0.16,25.59c-12.36,12.61-24.83,25.11-37.45,37.44 c-8.86,8.66-16.47,8.39-25.64-0.35c-4.79-4.57-9.6-9.13-14.43-13.66c-0.11-0.11-0.52,0.09-1.65,0.33c0,7.2,0.17,14.62-0.04,22.02 c-0.3,10.24-5.23,15.87-15.38,16.08c-19.38,0.41-38.78,0.4-58.16-0.06c-9.65-0.23-14.58-5.89-15.12-15.54 c-0.21-3.75-0.06-7.52-0.06-11.28c-0.01-3.75,0-7.5,0-13.51c-6.02,5.93-10.74,10.65-15.54,15.29c-9.89,9.58-16.97,9.64-26.81-0.05 c-12.17-11.98-24.25-24.05-36.22-36.22c-9.36-9.51-9.39-16.79-0.18-26.19c4.6-4.69,9.55-9.04,14.35-13.54 C697.95,644.88,697.52,644.12,697.09,643.36z M900.63,527.26c-7.73-8.09-14.24-14.91-21.32-22.31 c-6.43,6.67-13.32,13.31-19.62,20.46c-6.91,7.84-14.6,9.41-24.09,5.25c-11.07-4.85-13.6-8.42-13.64-21.32 c-0.03-9.45-0.01-18.9-0.01-28.36c-10.43,0-19.77,0-29.6,0c0,11.04-0.22,21.44,0.07,31.82c0.26,9.26-4.64,14.25-12.61,17.58 c-8.37,3.5-16.08,4.53-23.02-2.95c-7.24-7.8-14.67-15.41-21.4-22.45c-7.8,7.43-14.62,13.95-22.67,21.62 c7.33,6.87,14.38,13.67,21.63,20.24c7.36,6.67,8.77,13.88,4.91,23.34c-3.95,9.67-10.01,14.25-20.37,13.94 c-9.76-0.29-19.54-0.06-29.6-0.06c0,10.35,0,19.67,0,29.67c10.83,0,20.93,0.24,31.01-0.07c9.38-0.29,14.91,3.9,18.53,12.5 c3.74,8.9,4.3,16.5-3.44,23.59c-7.64,7.01-14.87,14.46-21.74,21.19c7.2,7.73,13.65,14.66,21.05,22.6 c7.5-7.92,14.7-15.43,21.79-23.04c6.79-7.28,14.27-7.02,22.91-3.36c8.37,3.55,13.3,8.61,13.02,18.2 c-0.31,10.33-0.07,20.68-0.07,31.24c10.32,0,19.64,0,29.6,0c0-10.74,0.22-20.83-0.06-30.91c-0.28-9.92,4.87-15.24,13.55-18.84 c8.7-3.6,16.13-3.43,22.86,3.86c7.01,7.59,14.29,14.94,21.62,22.56c7.67-7.73,14.3-14.43,21.94-22.13 c-7.18-6.77-14.18-13.67-21.52-20.19c-7.83-6.94-9.11-14.62-4.79-24.1c4.8-10.53,7.87-13.01,19.8-13.09 c10.02-0.07,20.04-0.01,30.04-0.01c0-10.5,0-19.65,0-29.66c-10.29,0-20.07,0.08-29.85-0.02c-12.15-0.12-15.2-2.73-20.3-13.81 c-4.27-9.28-2.69-16.61,4.68-23.33C887.18,540.3,894.17,533.41,900.63,527.26z"></path>
                                   <path d="M393.37,835.95c-64.35,1.49-118.36-51.63-119.68-117.7c-1.28-64.16,51.66-118.24,116.99-119.51 c64.4-1.25,118.58,51.27,120.11,116.42C512.34,780.49,459.92,834.41,393.37,835.95z M303.43,716.18 c-1.09,48.1,38.61,88.87,87.68,90.07c47.4,1.16,88.84-38.81,90.09-86.91c1.27-48.49-38.87-90.1-87.79-91 C345.24,627.46,304.54,667.19,303.43,716.18z"></path>
                                   <path d="M748.18,597.85c0.88-32.81,27.57-58.84,59.79-58.28c32.38,0.56,59.22,27.95,58.55,59.73c-0.71,33.45-28.09,59.57-61.3,58.46 C773.01,656.69,747.33,629.72,748.18,597.85z M806.84,628.2c16.52,0.16,30.03-13.09,30.01-29.46 c-0.02-15.96-13.21-29.33-29.19-29.59c-16.41-0.26-29.82,13.07-29.81,29.63C777.86,615.08,790.63,628.04,806.84,628.2z"></path>
                                  </svg></span></span> <span class="gem-icon-half-2"><span class="back-angle"><svg id="Layer_1" style="enable-background:new 0 0 1080 1080;" viewbox="0 0 1080 1080" x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                   <path d="M618.62,94.86c3.47,4.32,6.78,8.78,10.49,12.89c1.54,1.71,3.79,3.48,5.94,3.82c47.63,7.69,78.1,37.48,100.19,77.85 c23.33,42.63,33.28,89.05,37.92,136.89c0.64,6.56,1.16,13.14,1.81,20.45c14.38,0,28.21-0.05,42.05,0.01 c14.57,0.06,19.88,5.29,19.98,19.87c0.11,16.5,0.12,32.99,0,49.49c-0.11,14.35-5.15,19.47-19.31,19.47 c-164.97,0.04-329.93,0.04-494.9,0c-14.4,0-19.33-4.87-19.46-19.25c-0.16-16.78-0.17-33.57,0-50.36 c0.14-14.11,5.42-19.15,19.66-19.22c13.85-0.07,27.71-0.01,41.58-0.01c2.54-19.51,4.45-38.46,7.56-57.2 c7.96-47.93,22.7-93.26,54.01-131.58c20.08-24.57,45.33-40.92,77.18-45.91c4.54-0.71,7.42-2.06,9.04-7.33 c1.19-3.85,5.89-6.63,9.02-9.88C553.78,94.86,586.2,94.86,618.62,94.86z M333.53,405.33c158.02,0,315.52,0,472.99,0 c0-9.95,0-19.26,0-29.2c-108.67,0-216.51,0-324.67,0c0-10.02,0-19.36,0-29.74c88.03,0,175.49,0,263.1,0 c-1.92-37.9-7.87-74.02-20.15-108.89c-10.5-29.83-24.96-57.32-50.45-77.4c-13.03-10.27-27.55-17.3-45.4-18.9 c0,44.17,0,87.44,0,130.63c-10.2,0-19.52,0-29.75,0c0-49.52,0-98.24,0-146.92c-19.94,0-38.92,0-58.74,0c0,49.21,0,97.97,0,147.14 c-10.17,0-19.5,0-29.54,0c0-43.88,0-87.2,0-130.69c-1.54,0-2.4-0.11-3.21,0.02c-2,0.32-4,0.65-5.96,1.14 c-29.63,7.39-50.27,26.46-65.75,51.65c-28.53,46.44-36.99,98.35-40.91,152.57c18.99,0,37.36,0,55.98,0c0,10.35,0,19.69,0,29.63 c-19.96,0-39.32,0-58.67,0c-19.57,0-39.14,0-58.87,0C333.53,386.75,333.53,395.89,333.53,405.33z"></path>
                                   <path d="M304.33,889.03c-14.49,14.54-29.16,29.29-43.88,43.99c-11.57,11.56-18.27,11.53-29.92-0.09 c-18.23-18.19-36.46-36.38-54.63-54.64c-10.68-10.73-10.6-17.83,0.21-28.69c13.48-13.53,26.91-27.11,40.6-40.43 c3.24-3.15,4.04-5.82,1.66-9.66c-1.36-2.2-2.77-4.6-3.21-7.08c-2.43-13.78-10.57-17.2-23.86-16.06 c-15.51,1.34-31.22,0.45-46.85,0.26c-13.71-0.16-18.99-5.45-19.03-18.96c-0.09-26.91-0.1-53.83,0-80.74 c0.05-13.37,5.57-18.86,19.12-18.96c19.1-0.15,38.2-0.25,57.3,0.09c5.55,0.1,7.32-2.44,10.13-6.81c10.69-16.59,5.81-28.18-8.7-39.48 c-10.65-8.29-19.57-18.85-29.03-28.61c-8.33-8.6-8.44-16.47-0.09-24.95c19.5-19.78,39.14-39.44,58.93-58.93 c8.66-8.53,16.23-8.44,24.9,0.07c14.05,13.78,28.01,27.65,41.7,41.78c3.62,3.73,6.71,4.82,11.17,1.96c2.17-1.39,4.66-2.3,7.05-3.31 c15.08-6.4,15.09-6.39,15.09-22.33c0-15.92-0.11-31.83,0.04-47.75c0.14-13.97,5.07-18.92,18.79-18.96c26.91-0.08,53.83-0.08,80.74,0 c13.63,0.04,18.98,5.29,19.08,18.83c0.13,19.39,0.18,38.78-0.07,58.16c-0.06,4.77,1.89,6.42,5.87,8.91 c16.55,10.35,28.8,7.09,40.43-8.34c7.94-10.53,18.46-19.13,27.99-28.42c9.42-9.19,16.83-9.2,26.17,0.06 c19.32,19.15,38.55,38.38,57.7,57.71c9.24,9.33,9.18,16.72-0.13,26.16c-13.61,13.81-27.25,27.59-41.19,41.06 c-3.81,3.68-4.74,6.86-1.85,11.23c0.79,1.19,1.57,2.56,1.78,3.93c2.62,16.88,13.38,19.64,28.42,18.18 c13.76-1.33,27.75-0.33,41.64-0.27c15.51,0.07,20.45,4.87,20.48,20.06c0.06,26.33,0.07,52.67,0,79 c-0.04,14.79-4.86,19.55-19.95,19.64c-17.94,0.11-35.89,0.33-53.82-0.12c-7.04-0.18-11.73,1.3-13.06,8.83 c-0.3,1.68-1.12,3.27-1.77,4.88c-6.12,15.2-6.13,15.2,5.81,27.13c11.25,11.26,22.58,22.44,33.73,33.79 c8.96,9.13,9.14,16.56,0.29,25.53c-19.31,19.57-38.76,39-58.31,58.32c-9.13,9.03-16.79,8.83-26.2-0.47 c-13.79-13.63-27.52-27.32-41.06-41.2c-3.26-3.34-6.1-5.08-10.33-1.98c-1.14,0.84-2.55,1.58-3.92,1.79 c-17.62,2.75-20.49,13.99-18.91,29.67c1.39,13.75,0.36,27.75,0.27,41.64c-0.09,14.23-5.34,19.6-19.28,19.63 c-26.91,0.07-53.83,0.08-80.74-0.01c-13.15-0.04-18.44-5.18-18.58-18.4c-0.21-19.39-0.21-38.78,0.04-58.16 c0.06-5.07-1.25-7.84-6.41-9.49C319.32,895.69,312.27,892.29,304.33,889.03z M421.24,954.18c0.42-1.56,0.7-2.11,0.7-2.65 c0.06-19.68,0.28-39.37,0.05-59.05c-0.11-9.44,3.92-14.92,12.82-18.11c11.93-4.28,23.71-9.1,35.24-14.38 c13.65-6.25,16.94-6.05,27.49,4.5c13.68,13.68,27.31,27.4,40.36,40.5c14.27-14.23,27.91-27.84,42.06-41.95 c-13.61-13.6-27.73-27.64-41.78-41.74c-8.8-8.83-9.25-12.92-4.38-23.92c5.37-12.12,10.45-24.39,15.23-36.76 c4.12-10.65,7.54-13.54,19.29-13.64c17.08-0.15,34.16-0.02,51.23-0.07c3.04-0.01,6.09-0.29,9.21-0.45c0-19.94,0-38.92,0-58.88 c-3.57,0-6.68,0-9.78,0c-17.66-0.01-35.31-0.07-52.97,0c-7.87,0.03-13.07-3.48-16.02-10.8c-5.72-14.18-11.53-28.31-17.51-42.38 c-3.11-7.31-1.82-13.47,3.71-18.98c9.84-9.81,19.49-19.82,29.54-29.41c5.16-4.92,11-9.13,15.23-12.59 c-15.87-15.81-29.5-29.39-43.61-43.44c-13.15,13.24-26.96,27.23-40.87,41.13c-9.48,9.47-13.07,9.8-25.36,4.07 c-9.41-4.38-18.87-8.77-28.64-12.24c-20-7.1-20.46-7.35-20.46-28.22c0-17.86,0-35.72,0-53.8c-20.26,0-39.47,0-59.3,0 c0,20.53,0.11,40.47-0.04,60.41c-0.09,11.62-3.06,15.12-13.76,19.23c-11.84,4.54-23.66,9.23-35.2,14.47 c-12.87,5.85-16.14,5.65-26.06-4.25c-13.88-13.86-27.72-27.77-41.2-41.29c-14.1,14.19-27.68,27.87-41.65,41.93 c1.42,1.52,3.3,3.66,5.3,5.67c12.47,12.5,24.96,24.98,37.45,37.46c5.57,5.57,8.01,11.68,4.61,19.57c-6.17,14.3-12,28.74-17.88,43.16 c-2.85,7.01-7.99,10.29-15.46,10.27c-13.32-0.02-26.63,0.01-39.95,0.02c-7.72,0-15.43,0-23.18,0c0,20.37,0,39.55,0,59.36 c20.65,0,40.6-0.1,60.55,0.04c11.69,0.08,14.99,2.88,19.17,13.75c4.45,11.57,8.98,23.14,14.14,34.4c6.24,13.61,6,16.9-4.53,27.47 c-13.63,13.68-27.26,27.34-40.4,40.53c14.14,14.15,27.77,27.8,41.9,41.94c13.83-13.86,28.05-28.2,42.38-42.43 c8.07-8.01,12.35-8.49,22.48-4.09c12.69,5.51,25.4,11.08,38.4,15.8c8.98,3.26,12.93,9.05,12.9,18.21c-0.03,11.87,0,23.74,0,35.6 c0,8.56,0,17.13,0,26C382.95,954.18,401.94,954.18,421.24,954.18z"></path>
                                   <path d="M697.09,643.36c-6.92,0-13.84,0.22-20.75-0.05c-11.45-0.45-17.14-5.85-17.34-17.25c-0.32-18.23-0.33-36.47,0.01-54.7 c0.21-11.41,5.8-16.54,17.49-16.94c6.87-0.24,13.76-0.04,23.12-0.04c-6.07-6.22-10.55-10.8-15.02-15.39 c-9.78-10.04-9.95-16.97-0.3-26.78c11.97-12.18,24.04-24.26,36.19-36.25c9.78-9.65,17-9.59,26.78,0.02 c4.67,4.58,9.16,9.34,15.51,15.84c0-9.66-0.12-16.75,0.03-23.84c0.25-11.59,5.56-17.09,17.06-17.2c18.23-0.18,36.47-0.17,54.7,0 c11.58,0.11,16.73,5.47,16.96,17.17c0.13,6.93,0.02,13.87,0.02,23.18c6.11-5.94,10.89-10.59,15.68-15.23 c9.83-9.52,17.02-9.58,26.82,0.09c12.16,11.99,24.24,24.06,36.2,36.25c9.21,9.38,9.25,16.91,0.12,26.19 c-4.63,4.71-9.73,8.95-14.62,13.4c0.39,0.85,0.78,1.7,1.17,2.55c6.5,0,13-0.1,19.49,0.02c13.79,0.25,18.99,5.35,19.08,18.88 c0.11,17.07,0.11,34.15,0,51.23c-0.09,13.02-5.5,18.53-18.37,18.85c-6.6,0.17-13.2,0.03-22.08,0.03 c6.11,6.26,10.86,11.04,15.52,15.91c8.69,9.06,8.86,16.72,0.16,25.59c-12.36,12.61-24.83,25.11-37.45,37.44 c-8.86,8.66-16.47,8.39-25.64-0.35c-4.79-4.57-9.6-9.13-14.43-13.66c-0.11-0.11-0.52,0.09-1.65,0.33c0,7.2,0.17,14.62-0.04,22.02 c-0.3,10.24-5.23,15.87-15.38,16.08c-19.38,0.41-38.78,0.4-58.16-0.06c-9.65-0.23-14.58-5.89-15.12-15.54 c-0.21-3.75-0.06-7.52-0.06-11.28c-0.01-3.75,0-7.5,0-13.51c-6.02,5.93-10.74,10.65-15.54,15.29c-9.89,9.58-16.97,9.64-26.81-0.05 c-12.17-11.98-24.25-24.05-36.22-36.22c-9.36-9.51-9.39-16.79-0.18-26.19c4.6-4.69,9.55-9.04,14.35-13.54 C697.95,644.88,697.52,644.12,697.09,643.36z M900.63,527.26c-7.73-8.09-14.24-14.91-21.32-22.31 c-6.43,6.67-13.32,13.31-19.62,20.46c-6.91,7.84-14.6,9.41-24.09,5.25c-11.07-4.85-13.6-8.42-13.64-21.32 c-0.03-9.45-0.01-18.9-0.01-28.36c-10.43,0-19.77,0-29.6,0c0,11.04-0.22,21.44,0.07,31.82c0.26,9.26-4.64,14.25-12.61,17.58 c-8.37,3.5-16.08,4.53-23.02-2.95c-7.24-7.8-14.67-15.41-21.4-22.45c-7.8,7.43-14.62,13.95-22.67,21.62 c7.33,6.87,14.38,13.67,21.63,20.24c7.36,6.67,8.77,13.88,4.91,23.34c-3.95,9.67-10.01,14.25-20.37,13.94 c-9.76-0.29-19.54-0.06-29.6-0.06c0,10.35,0,19.67,0,29.67c10.83,0,20.93,0.24,31.01-0.07c9.38-0.29,14.91,3.9,18.53,12.5 c3.74,8.9,4.3,16.5-3.44,23.59c-7.64,7.01-14.87,14.46-21.74,21.19c7.2,7.73,13.65,14.66,21.05,22.6 c7.5-7.92,14.7-15.43,21.79-23.04c6.79-7.28,14.27-7.02,22.91-3.36c8.37,3.55,13.3,8.61,13.02,18.2 c-0.31,10.33-0.07,20.68-0.07,31.24c10.32,0,19.64,0,29.6,0c0-10.74,0.22-20.83-0.06-30.91c-0.28-9.92,4.87-15.24,13.55-18.84 c8.7-3.6,16.13-3.43,22.86,3.86c7.01,7.59,14.29,14.94,21.62,22.56c7.67-7.73,14.3-14.43,21.94-22.13 c-7.18-6.77-14.18-13.67-21.52-20.19c-7.83-6.94-9.11-14.62-4.79-24.1c4.8-10.53,7.87-13.01,19.8-13.09 c10.02-0.07,20.04-0.01,30.04-0.01c0-10.5,0-19.65,0-29.66c-10.29,0-20.07,0.08-29.85-0.02c-12.15-0.12-15.2-2.73-20.3-13.81 c-4.27-9.28-2.69-16.61,4.68-23.33C887.18,540.3,894.17,533.41,900.63,527.26z"></path>
                                   <path d="M393.37,835.95c-64.35,1.49-118.36-51.63-119.68-117.7c-1.28-64.16,51.66-118.24,116.99-119.51 c64.4-1.25,118.58,51.27,120.11,116.42C512.34,780.49,459.92,834.41,393.37,835.95z M303.43,716.18 c-1.09,48.1,38.61,88.87,87.68,90.07c47.4,1.16,88.84-38.81,90.09-86.91c1.27-48.49-38.87-90.1-87.79-91 C345.24,627.46,304.54,667.19,303.43,716.18z"></path>
                                   <path d="M748.18,597.85c0.88-32.81,27.57-58.84,59.79-58.28c32.38,0.56,59.22,27.95,58.55,59.73c-0.71,33.45-28.09,59.57-61.3,58.46 C773.01,656.69,747.33,629.72,748.18,597.85z M806.84,628.2c16.52,0.16,30.03-13.09,30.01-29.46 c-0.02-15.96-13.21-29.33-29.19-29.59c-16.41-0.26-29.82,13.07-29.81,29.63C777.86,615.08,790.63,628.04,806.84,628.2z"></path>
                                  </svg></span></span> </div>
                              </div>
                             </div>
                            </a> </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-3d3e634 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-element_type="widget" data-id="3d3e634" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-text-editor elementor-clearfix">
                            <div class="title-h3"> Construction </div>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-512fedf flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-element_type="widget" data-id="512fedf" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-text-editor elementor-clearfix">
                            <p><span style="font-weight: 400;">Business automation</span> <span style="font-weight: 400;">that improves coordination and collaboration and increases the bottom line.&nbsp;</span></p>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                      <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-b172c46" data-element_type="column" data-id="b172c46" data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;animation_delay&quot;:500,&quot;animation_mobile&quot;:&quot;none&quot;}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-5d5360f elementor-absolute flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-styledimage" data-element_type="widget" data-id="5d5360f" data-settings="{&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/dtcforce.com\/wp-content\/uploads\/2022\/04\/cloud-02.png&quot;,&quot;id&quot;:1930,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;_position&quot;:&quot;absolute&quot;,&quot;thegem_interaction_mouse&quot;:&quot;yes&quot;,&quot;thegem_interaction_mouse_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.2,&quot;sizes&quot;:[]},&quot;thegem_elementor_preset&quot;:&quot;default&quot;,&quot;thegem_interaction_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="thegem-styledimage.default">
                          <div class="elementor-widget-container">
                           <div class="styled-image-wrapper">
                            <div class="gem-image gem-wrapbox gem-wrapbox-default gem-wrapbox-position-left lazy-loading">
                             <div class="gem-wrapbox-inner lazy-loading-item" data-ll-effect="move-up"> <img alt="Cloud-02" class="gem-wrapbox-element img-responsive" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="wp-content/uploads/2022/04/cloud-02-150x150.png" id="tgpli-660df3d370803">
                              <script>
                               window.tgpQueue.add('tgpli-660df3d370803')
                              </script><noscript><img alt="Cloud-02" class="gem-wrapbox-element img-responsive" src="wp-content/uploads/2022/04/cloud-02-150x150.png"></noscript>
                             </div>
                            </div>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-b20ebac flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-icon" data-element_type="widget" data-id="b20ebac" data-settings="{&quot;thegem_elementor_preset&quot;:&quot;default&quot;}" data-widget_type="thegem-icon.default">
                          <div class="elementor-widget-container">
                           <div class="left-box icon-inline-position"> <a href="financial-industry-expertise/index.html">
                             <div class="gem-icon gem-icon-pack-fontawesome gem-icon-size-large gem-icon-shape-default">
                              <div class="gem-icon-inner">
                               <div class="padding-box-inner"> <span class="gem-icon-half-1"><span class="back-angle"><svg id="Layer_1" style="enable-background:new 0 0 1080 1080;" viewbox="0 0 1080 1080" x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                   <g>
                                    <path d="M565.77,846.06c-4.53,0-7.84,0-11.15,0c-127.71,0-255.41,0-383.12,0c-29.95,0-45.5-15.65-45.5-45.78 c0-209.29,0-418.59,0-627.88c0-30.5,15.49-45.85,46.25-45.85c116.32,0,232.65,0.05,348.97-0.13c7.21-0.01,12.54,2,17.64,7.14 c37.54,37.84,75.23,75.52,113.07,113.05c5.11,5.07,7.59,10.32,7.26,17.6c-0.5,11.06-0.13,22.17-0.13,34.1 c55.11-19.02,108.1-15.93,158.67,12.45c37.61,21.11,64.37,52.2,80.87,92.01c35.03,84.52,1.8,193.26-91.29,238.73 c1.94,1.75,3.64,3.42,5.48,4.91c43.93,35.73,87.88,71.42,131.8,107.16c7.85,6.39,10.38,13.47,5.4,19.13 c-3.04,3.46-8.68,6.22-13.28,6.43c-16.6,0.76-33.25,0.3-51.09,0.3c0,3.33,0,6.25,0,9.17c0,48.58,0.01,97.15-0.01,145.73 c-0.01,14.15-4.18,18.31-18.34,18.32c-94.39,0.01-188.78,0.01-283.18,0c-14.16,0-18.3-4.16-18.31-18.34 C565.75,905.22,565.77,876.13,565.77,846.06z M565.36,779.43c-16.41,0-32.44-0.15-48.45,0.06c-7.49,0.1-14.05-1.16-16.88-9.06 c-2.88-8.02,1.82-12.92,7.56-17.57c43.78-35.44,87.47-70.98,131.18-106.51c1.82-1.48,3.47-3.16,5.66-5.18 c-3.14-1.77-5.53-3.08-7.88-4.44c-62.07-36.09-96.02-89.97-97-161.74c-0.94-68.65,29.69-122.02,86.88-160.1 c2.19-1.45,5.56-3.48,5.64-5.35c0.51-12.05,0.26-24.13,0.26-36.44c-26.78,0-52.31,0.08-77.84-0.02c-24.97-0.1-41.88-16.9-42-41.73 c-0.11-23.03-0.02-46.07-0.03-69.1c0-2.91,0-5.83,0-8.81c-2.64-0.13-4.01-0.25-5.39-0.25c-112.69-0.01-225.37-0.03-338.06,0.01 c-12.25,0-16.37,4.79-16.37,18.57c-0.01,209.52-0.01,419.04,0,628.55c0,15.22,3.88,19.06,19.24,19.07 c128.23,0.01,256.46,0,384.69,0c2.92,0,5.85,0,8.79,0C565.36,805.55,565.36,792.9,565.36,779.43z M886.31,471.01 c-1.4-9.87-2.18-22.13-4.95-33.92C857.1,333.85,745.09,282.31,650.61,332.37c-58.86,31.18-87.55,82.89-84.17,149.06 c3.29,64.45,37.08,110.48,95.57,138.15c4.61,2.18,7.97,1.71,11.93-1.63c13.36-11.26,27.02-22.16,40.61-33.14 c8.84-7.14,13.33-7.21,22.1-0.17c13.62,10.94,27.29,21.84,40.63,33.12c4.24,3.59,7.77,3.96,12.67,1.62 C851.38,590.01,882.18,540.66,886.31,471.01z M900.08,752.78c-1.47-1.85-1.87-2.58-2.46-3.06 c-55.77-45.34-111.61-90.59-167.24-136.1c-4.75-3.88-7.2-1.53-10.52,1.17c-54.47,44.3-108.96,88.59-163.5,132.81 c-1.59,1.29-3.73,1.91-5.62,2.85c0.67,0.78,1.35,1.56,2.02,2.34c6.93,0,13.85-0.01,20.78,0c14.84,0.02,18.88,3.97,18.88,18.6 c0.01,48.3,0.01,96.6,0.01,144.9c0,2.98,0,5.95,0,9.2c22.57,0,44.31,0,66.63,0c0-3.52,0-6.52,0-9.53c0-30.81-0.02-61.62,0.01-92.43 c0.02-13.05,4.41-17.42,17.52-17.43c32.76-0.03,65.52-0.03,98.28,0c13.03,0.01,17.43,4.43,17.44,17.53 c0.04,31.09,0.01,62.18,0.01,93.27c0,2.92,0,5.84,0,8.68c22.8,0,44.34,0,66.63,0c0-3.41,0-6.39,0-9.38c0-48.3-0.01-96.6,0.01-144.9 c0-14.31,4.09-18.46,18.13-18.5C884.28,752.77,891.48,752.78,900.08,752.78z M765.29,833.32c-26.82,0-52.98,0-78.93,0 c0,31.19,0,61.79,0,92.24c26.63,0,52.59,0,78.93,0C765.29,894.72,765.29,864.32,765.29,833.32z M610.83,246.37 c-24.12-24.1-47.74-47.71-71.58-71.54c0,19.71-0.33,39.81,0.18,59.88c0.17,6.81,5.19,11.4,12.07,11.53 C571.34,246.61,591.19,246.37,610.83,246.37z"></path>
                                    <path d="M273.12,379.99c-1.75,21.05-4.72,27.03-13.97,26.15c-16.63-1.59-12.37-15.29-13.58-26.44c-8.24,0-16.21,0.1-24.17-0.03 c-9.6-0.15-15.61-5.6-15.37-13.67c0.23-7.8,6-12.84,15.28-12.91c16.09-0.12,32.18,0.02,48.28-0.06 c10.27-0.05,16.48-5.35,16.26-13.64c-0.21-8.01-6.17-12.86-16.09-12.97c-7.21-0.08-14.43,0.02-21.64-0.02 c-22.8-0.15-40.36-15.45-42.04-36.59c-1.74-21.82,13.08-39.56,36.11-43.23c1.04-0.17,2.08-0.34,3.04-0.5 c2.74-21.82,5.4-26.58,14.56-26.2c9.15,0.38,11.89,5.66,13.24,26.59c7.81,0,15.74-0.08,23.67,0.02 c9.81,0.12,15.77,5.18,15.81,13.24c0.04,8.05-5.96,13.29-15.7,13.36c-16.09,0.11-32.18-0.04-48.28,0.06 c-9.87,0.06-15.78,5.09-15.84,13.19c-0.07,8.1,5.88,13.26,15.65,13.4c7.49,0.11,14.98-0.02,22.47,0.03 c22.66,0.16,40.19,15.73,41.66,36.97c1.49,21.51-13.24,39.17-35.7,42.78C275.66,379.7,274.56,379.81,273.12,379.99z"></path>
                                    <path d="M379.19,592.89c51.36,0,102.72,0,154.08,0.01c2.5,0,5.06-0.25,7.48,0.2c7.18,1.33,11.51,5.75,11.51,13.11 c0,7.36-4.36,11.79-11.52,13.11c-2.69,0.49-5.54,0.22-8.31,0.22c-102.16,0.01-204.33,0.01-306.49,0.01c-0.83,0-1.67,0-2.5,0 c-11.24-0.07-17.43-4.81-17.42-13.33c0-8.54,6.16-13.3,17.43-13.3C275.36,592.88,327.27,592.89,379.19,592.89z"></path>
                                    <path d="M366.7,526.27c46.64,0,93.28,0,139.92,0.01c2.5,0,5.06-0.25,7.48,0.2c7.18,1.33,11.51,5.76,11.5,13.11 c0,7.36-4.36,11.76-11.52,13.11c-2.42,0.46-4.98,0.21-7.48,0.21c-93.83,0.01-187.67,0.01-281.5,0c-2.5,0-5.06,0.25-7.48-0.21 c-7.16-1.35-11.51-5.75-11.5-13.12c0.01-7.37,4.34-11.77,11.52-13.1c2.42-0.45,4.98-0.2,7.48-0.2 C272.31,526.27,319.51,526.27,366.7,526.27z"></path>
                                    <path d="M358.37,486.3c-44.42,0-88.84,0-133.26-0.01c-2.5,0-5.06,0.25-7.48-0.21c-7.16-1.35-11.51-5.74-11.51-13.11 c0-7.37,4.33-11.78,11.5-13.11c2.42-0.45,4.98-0.2,7.48-0.2c89.39-0.01,178.79-0.01,268.18,0c2.5,0,5.06-0.25,7.48,0.2 c7.18,1.33,11.51,5.75,11.52,13.1c0.01,7.36-4.35,11.77-11.51,13.12c-2.42,0.46-4.98,0.21-7.48,0.21 C448.32,486.3,403.34,486.3,358.37,486.3z"></path>
                                    <path d="M285.62,686.16c-21.1,0-42.2,0.05-63.29-0.02c-10.37-0.03-16.49-5.24-16.31-13.59c0.18-8.08,6.07-13,16.04-13.01 c42.47-0.06,84.95-0.05,127.42,0c10.34,0.01,16.51,5.26,16.32,13.58c-0.18,8.01-6.16,12.99-16.05,13.02 C328.37,686.21,306.99,686.16,285.62,686.16z"></path>
                                    <path d="M807.37,405.68c-3.09,5-4.65,8.99-7.42,11.77c-43.2,43.42-86.52,86.72-129.89,129.96c-6.93,6.91-14.84,7.25-20.51,1.4 c-5.64-5.81-5.04-13.48,1.95-20.49c43.08-43.15,86.21-86.24,129.32-129.36c4.61-4.61,10.04-8.14,16.21-4.4 C801.05,397.01,803.74,401.65,807.37,405.68z"></path>
                                    <path d="M712.32,419.67c0.1,21.68-17.84,39.83-39.48,39.94c-22.21,0.11-40.37-17.83-40.38-39.92 c-0.02-21.76,17.75-39.73,39.49-39.94C694.08,379.55,712.22,397.47,712.32,419.67z M685.64,420.07 c0.21-7.14-5.52-13.31-12.68-13.66c-7.45-0.36-13.87,5.79-13.86,13.28c0.01,7.16,5.93,13.14,13.08,13.25 C679.33,433.04,685.43,427.21,685.64,420.07z"></path>
                                    <path d="M818.93,526.08c0.19,21.69-17.67,39.93-39.3,40.13c-22.21,0.21-40.46-17.67-40.57-39.73 c-0.1-21.77,17.59-39.83,39.31-40.13C800.52,486.05,818.74,503.9,818.93,526.08z M792.25,526.14c-0.09-7.17-6.03-13.08-13.21-13.13 c-7.47-0.06-13.65,6.34-13.33,13.81c0.31,7.15,6.47,12.91,13.61,12.72C786.48,539.34,792.34,533.27,792.25,526.14z"></path>
                                   </g>
                                  </svg></span></span> <span class="gem-icon-half-2"><span class="back-angle"><svg id="Layer_1" style="enable-background:new 0 0 1080 1080;" viewbox="0 0 1080 1080" x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                   <g>
                                    <path d="M565.77,846.06c-4.53,0-7.84,0-11.15,0c-127.71,0-255.41,0-383.12,0c-29.95,0-45.5-15.65-45.5-45.78 c0-209.29,0-418.59,0-627.88c0-30.5,15.49-45.85,46.25-45.85c116.32,0,232.65,0.05,348.97-0.13c7.21-0.01,12.54,2,17.64,7.14 c37.54,37.84,75.23,75.52,113.07,113.05c5.11,5.07,7.59,10.32,7.26,17.6c-0.5,11.06-0.13,22.17-0.13,34.1 c55.11-19.02,108.1-15.93,158.67,12.45c37.61,21.11,64.37,52.2,80.87,92.01c35.03,84.52,1.8,193.26-91.29,238.73 c1.94,1.75,3.64,3.42,5.48,4.91c43.93,35.73,87.88,71.42,131.8,107.16c7.85,6.39,10.38,13.47,5.4,19.13 c-3.04,3.46-8.68,6.22-13.28,6.43c-16.6,0.76-33.25,0.3-51.09,0.3c0,3.33,0,6.25,0,9.17c0,48.58,0.01,97.15-0.01,145.73 c-0.01,14.15-4.18,18.31-18.34,18.32c-94.39,0.01-188.78,0.01-283.18,0c-14.16,0-18.3-4.16-18.31-18.34 C565.75,905.22,565.77,876.13,565.77,846.06z M565.36,779.43c-16.41,0-32.44-0.15-48.45,0.06c-7.49,0.1-14.05-1.16-16.88-9.06 c-2.88-8.02,1.82-12.92,7.56-17.57c43.78-35.44,87.47-70.98,131.18-106.51c1.82-1.48,3.47-3.16,5.66-5.18 c-3.14-1.77-5.53-3.08-7.88-4.44c-62.07-36.09-96.02-89.97-97-161.74c-0.94-68.65,29.69-122.02,86.88-160.1 c2.19-1.45,5.56-3.48,5.64-5.35c0.51-12.05,0.26-24.13,0.26-36.44c-26.78,0-52.31,0.08-77.84-0.02c-24.97-0.1-41.88-16.9-42-41.73 c-0.11-23.03-0.02-46.07-0.03-69.1c0-2.91,0-5.83,0-8.81c-2.64-0.13-4.01-0.25-5.39-0.25c-112.69-0.01-225.37-0.03-338.06,0.01 c-12.25,0-16.37,4.79-16.37,18.57c-0.01,209.52-0.01,419.04,0,628.55c0,15.22,3.88,19.06,19.24,19.07 c128.23,0.01,256.46,0,384.69,0c2.92,0,5.85,0,8.79,0C565.36,805.55,565.36,792.9,565.36,779.43z M886.31,471.01 c-1.4-9.87-2.18-22.13-4.95-33.92C857.1,333.85,745.09,282.31,650.61,332.37c-58.86,31.18-87.55,82.89-84.17,149.06 c3.29,64.45,37.08,110.48,95.57,138.15c4.61,2.18,7.97,1.71,11.93-1.63c13.36-11.26,27.02-22.16,40.61-33.14 c8.84-7.14,13.33-7.21,22.1-0.17c13.62,10.94,27.29,21.84,40.63,33.12c4.24,3.59,7.77,3.96,12.67,1.62 C851.38,590.01,882.18,540.66,886.31,471.01z M900.08,752.78c-1.47-1.85-1.87-2.58-2.46-3.06 c-55.77-45.34-111.61-90.59-167.24-136.1c-4.75-3.88-7.2-1.53-10.52,1.17c-54.47,44.3-108.96,88.59-163.5,132.81 c-1.59,1.29-3.73,1.91-5.62,2.85c0.67,0.78,1.35,1.56,2.02,2.34c6.93,0,13.85-0.01,20.78,0c14.84,0.02,18.88,3.97,18.88,18.6 c0.01,48.3,0.01,96.6,0.01,144.9c0,2.98,0,5.95,0,9.2c22.57,0,44.31,0,66.63,0c0-3.52,0-6.52,0-9.53c0-30.81-0.02-61.62,0.01-92.43 c0.02-13.05,4.41-17.42,17.52-17.43c32.76-0.03,65.52-0.03,98.28,0c13.03,0.01,17.43,4.43,17.44,17.53 c0.04,31.09,0.01,62.18,0.01,93.27c0,2.92,0,5.84,0,8.68c22.8,0,44.34,0,66.63,0c0-3.41,0-6.39,0-9.38c0-48.3-0.01-96.6,0.01-144.9 c0-14.31,4.09-18.46,18.13-18.5C884.28,752.77,891.48,752.78,900.08,752.78z M765.29,833.32c-26.82,0-52.98,0-78.93,0 c0,31.19,0,61.79,0,92.24c26.63,0,52.59,0,78.93,0C765.29,894.72,765.29,864.32,765.29,833.32z M610.83,246.37 c-24.12-24.1-47.74-47.71-71.58-71.54c0,19.71-0.33,39.81,0.18,59.88c0.17,6.81,5.19,11.4,12.07,11.53 C571.34,246.61,591.19,246.37,610.83,246.37z"></path>
                                    <path d="M273.12,379.99c-1.75,21.05-4.72,27.03-13.97,26.15c-16.63-1.59-12.37-15.29-13.58-26.44c-8.24,0-16.21,0.1-24.17-0.03 c-9.6-0.15-15.61-5.6-15.37-13.67c0.23-7.8,6-12.84,15.28-12.91c16.09-0.12,32.18,0.02,48.28-0.06 c10.27-0.05,16.48-5.35,16.26-13.64c-0.21-8.01-6.17-12.86-16.09-12.97c-7.21-0.08-14.43,0.02-21.64-0.02 c-22.8-0.15-40.36-15.45-42.04-36.59c-1.74-21.82,13.08-39.56,36.11-43.23c1.04-0.17,2.08-0.34,3.04-0.5 c2.74-21.82,5.4-26.58,14.56-26.2c9.15,0.38,11.89,5.66,13.24,26.59c7.81,0,15.74-0.08,23.67,0.02 c9.81,0.12,15.77,5.18,15.81,13.24c0.04,8.05-5.96,13.29-15.7,13.36c-16.09,0.11-32.18-0.04-48.28,0.06 c-9.87,0.06-15.78,5.09-15.84,13.19c-0.07,8.1,5.88,13.26,15.65,13.4c7.49,0.11,14.98-0.02,22.47,0.03 c22.66,0.16,40.19,15.73,41.66,36.97c1.49,21.51-13.24,39.17-35.7,42.78C275.66,379.7,274.56,379.81,273.12,379.99z"></path>
                                    <path d="M379.19,592.89c51.36,0,102.72,0,154.08,0.01c2.5,0,5.06-0.25,7.48,0.2c7.18,1.33,11.51,5.75,11.51,13.11 c0,7.36-4.36,11.79-11.52,13.11c-2.69,0.49-5.54,0.22-8.31,0.22c-102.16,0.01-204.33,0.01-306.49,0.01c-0.83,0-1.67,0-2.5,0 c-11.24-0.07-17.43-4.81-17.42-13.33c0-8.54,6.16-13.3,17.43-13.3C275.36,592.88,327.27,592.89,379.19,592.89z"></path>
                                    <path d="M366.7,526.27c46.64,0,93.28,0,139.92,0.01c2.5,0,5.06-0.25,7.48,0.2c7.18,1.33,11.51,5.76,11.5,13.11 c0,7.36-4.36,11.76-11.52,13.11c-2.42,0.46-4.98,0.21-7.48,0.21c-93.83,0.01-187.67,0.01-281.5,0c-2.5,0-5.06,0.25-7.48-0.21 c-7.16-1.35-11.51-5.75-11.5-13.12c0.01-7.37,4.34-11.77,11.52-13.1c2.42-0.45,4.98-0.2,7.48-0.2 C272.31,526.27,319.51,526.27,366.7,526.27z"></path>
                                    <path d="M358.37,486.3c-44.42,0-88.84,0-133.26-0.01c-2.5,0-5.06,0.25-7.48-0.21c-7.16-1.35-11.51-5.74-11.51-13.11 c0-7.37,4.33-11.78,11.5-13.11c2.42-0.45,4.98-0.2,7.48-0.2c89.39-0.01,178.79-0.01,268.18,0c2.5,0,5.06-0.25,7.48,0.2 c7.18,1.33,11.51,5.75,11.52,13.1c0.01,7.36-4.35,11.77-11.51,13.12c-2.42,0.46-4.98,0.21-7.48,0.21 C448.32,486.3,403.34,486.3,358.37,486.3z"></path>
                                    <path d="M285.62,686.16c-21.1,0-42.2,0.05-63.29-0.02c-10.37-0.03-16.49-5.24-16.31-13.59c0.18-8.08,6.07-13,16.04-13.01 c42.47-0.06,84.95-0.05,127.42,0c10.34,0.01,16.51,5.26,16.32,13.58c-0.18,8.01-6.16,12.99-16.05,13.02 C328.37,686.21,306.99,686.16,285.62,686.16z"></path>
                                    <path d="M807.37,405.68c-3.09,5-4.65,8.99-7.42,11.77c-43.2,43.42-86.52,86.72-129.89,129.96c-6.93,6.91-14.84,7.25-20.51,1.4 c-5.64-5.81-5.04-13.48,1.95-20.49c43.08-43.15,86.21-86.24,129.32-129.36c4.61-4.61,10.04-8.14,16.21-4.4 C801.05,397.01,803.74,401.65,807.37,405.68z"></path>
                                    <path d="M712.32,419.67c0.1,21.68-17.84,39.83-39.48,39.94c-22.21,0.11-40.37-17.83-40.38-39.92 c-0.02-21.76,17.75-39.73,39.49-39.94C694.08,379.55,712.22,397.47,712.32,419.67z M685.64,420.07 c0.21-7.14-5.52-13.31-12.68-13.66c-7.45-0.36-13.87,5.79-13.86,13.28c0.01,7.16,5.93,13.14,13.08,13.25 C679.33,433.04,685.43,427.21,685.64,420.07z"></path>
                                    <path d="M818.93,526.08c0.19,21.69-17.67,39.93-39.3,40.13c-22.21,0.21-40.46-17.67-40.57-39.73 c-0.1-21.77,17.59-39.83,39.31-40.13C800.52,486.05,818.74,503.9,818.93,526.08z M792.25,526.14c-0.09-7.17-6.03-13.08-13.21-13.13 c-7.47-0.06-13.65,6.34-13.33,13.81c0.31,7.15,6.47,12.91,13.61,12.72C786.48,539.34,792.34,533.27,792.25,526.14z"></path>
                                   </g>
                                  </svg></span></span> </div>
                              </div>
                             </div>
                            </a> </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-3c2747a flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-element_type="widget" data-id="3c2747a" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-text-editor elementor-clearfix">
                            <div class="title-h3"> Financial Services </div>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-5c3fa3e flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-element_type="widget" data-id="5c3fa3e" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-text-editor elementor-clearfix">
                            <p><span style="font-weight: 400;">Better customer relationships with data-driven insights that turn challenges into opportunities in Fin-tech.&nbsp;</span></p>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                      <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-0fcf9ff" data-element_type="column" data-id="0fcf9ff" data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;animation_delay&quot;:700,&quot;animation_mobile&quot;:&quot;none&quot;}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-c0b2957 elementor-absolute flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-styledimage" data-element_type="widget" data-id="c0b2957" data-settings="{&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/dtcforce.com\/wp-content\/uploads\/2022\/04\/cloud-02.png&quot;,&quot;id&quot;:1930,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;_position&quot;:&quot;absolute&quot;,&quot;thegem_interaction_mouse&quot;:&quot;yes&quot;,&quot;thegem_interaction_mouse_direction&quot;:&quot;negative&quot;,&quot;thegem_interaction_mouse_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.2,&quot;sizes&quot;:[]},&quot;thegem_elementor_preset&quot;:&quot;default&quot;,&quot;thegem_interaction_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="thegem-styledimage.default">
                          <div class="elementor-widget-container">
                           <div class="styled-image-wrapper">
                            <div class="gem-image gem-wrapbox gem-wrapbox-default gem-wrapbox-position-left lazy-loading">
                             <div class="gem-wrapbox-inner lazy-loading-item" data-ll-effect="move-up"> <img alt="Cloud-02" class="gem-wrapbox-element img-responsive" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="wp-content/uploads/2022/04/cloud-02-150x150.png" id="tgpli-660df3d370815">
                              <script>
                               window.tgpQueue.add('tgpli-660df3d370815')
                              </script><noscript><img alt="Cloud-02" class="gem-wrapbox-element img-responsive" src="wp-content/uploads/2022/04/cloud-02-150x150.png"></noscript>
                             </div>
                            </div>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-b42d497 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-icon" data-element_type="widget" data-id="b42d497" data-settings="{&quot;thegem_elementor_preset&quot;:&quot;default&quot;}" data-widget_type="thegem-icon.default">
                          <div class="elementor-widget-container">
                           <div class="left-box icon-inline-position"> <a href="professional-services/index.html">
                             <div class="gem-icon gem-icon-pack-fontawesome gem-icon-size-large gem-icon-shape-default">
                              <div class="gem-icon-inner">
                               <div class="padding-box-inner"> <span class="gem-icon-half-1"><span class="back-angle"><svg id="Layer_1" style="enable-background:new 0 0 1080 1080;" viewbox="0 0 1080 1080" x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                   <path d="M985.37,467.41c0,70.08,0,140.16,0,210.24c-1.36,0.36-2.84,0.5-4.07,1.11c-83.03,41.45-166.07,82.88-248.94,124.63 c-2.73,1.38-5.14,5.91-5.44,9.18c-1.93,21.14-15.61,37.01-36.4,40.6c-4.81,0.83-6.72,2.51-7.48,7.47 c-2.96,19.11-16.91,33.01-36.08,35.78c-4.84,0.7-6.42,2.68-6.85,6.96c-0.23,2.28-0.78,4.57-1.53,6.74 c-6.6,19.04-20.79,28.32-40,30.48c-6.52,30.07-23.7,44.6-49.92,42.7c-13.21-0.96-23.53-7.65-32.44-16.67 c-4.1-4.15-7.29-4.49-12.7-1.96c-26.43,12.35-56.62-3.2-62.01-31.82c-0.97-5.14-2.97-7.13-7.99-8.11 c-18.21-3.54-29.52-14.89-34.81-32.43c-0.89-2.97-1.19-6.11-1.76-9.17c-25.49-3.61-39.63-18.13-43.1-42.81 c-26.72-5.8-35.87-14.66-42.52-40.67c-0.39-1.53-1.13-3.48-2.33-4.22c-13.38-8.25-26.89-16.29-39.12-23.65 c-3.7,4.26-6.39,10.07-9.21,10.13c-10.84,0.25-22.33,0.58-32.49-2.59c-41.64-12.98-82.84-27.37-124.32-40.9 c-6.23-2.03-8.28-4.82-8.26-11.5c0.25-93.22,0.17-186.44,0.19-279.67c0-2.81,0.26-5.61,0.42-8.93c24.55-0.2,48.98-4.3,69.84,13.23 c6.11,5.13,14.55,7.47,20.72,12.55c18.03,14.83,37.31,17.35,58.41,8.06c2.93-1.29,5.64-3.05,8.46-4.59 c-1.86-2.95-3.14-6.6-5.68-8.74c-15.71-13.22-26.66-29.39-32.87-49.01c-6.27-19.81-5.21-40.17-4.29-60.31 c1.9-41.57,22.02-72.07,60.12-88.95c13.36-5.92,28.61-7.6,43.71-11.4c-3.62-8.67-8.05-18.65-11.84-28.85 c-0.88-2.36-0.67-6.58,0.87-8.15c23.87-24.4,48.04-48.51,72.49-73.04c13.53,8.79,26.46,17.49,39.75,25.59 c2.58,1.58,7.03,2.05,9.84,0.98c14.82-5.64,29.43-11.87,44.02-18.1c2.15-0.92,5.1-2.71,5.5-4.57c3.52-16.34,6.55-32.79,9.73-49.21 c37.07,0,74.13,0,111.2,0c3.18,16.41,6.18,32.87,9.78,49.19c0.44,1.98,3.91,3.72,6.32,4.76c14.05,6.04,28.34,11.54,42.24,17.89 c4.3,1.96,7.13,1.86,10.91-0.68c12.91-8.69,26.05-17.05,39.57-25.84c24.44,24.52,48.61,48.62,72.48,73.02 c1.54,1.58,1.81,5.79,0.93,8.12c-3.91,10.35-8.45,20.47-12.95,31.12c45.69,1.01,77.03,21.96,96.03,61.63 c10.64,22.23,9.82,46.15,8.98,69.86c-1.1,30.87-13.77,56.28-37.55,76.17c-2.38,1.99-3.65,5.32-5.43,8.02 c2.67,1.66,5.13,4.02,8.03,4.87c22.42,6.55,44.91,12.9,67.46,19c2.11,0.57,5.02-0.45,7.16-1.53c12.36-6.3,24.55-12.94,36.92-19.22 c3-1.52,6.43-2.89,9.71-3C966.28,466.93,975.83,467.3,985.37,467.41z M956.59,497.77c-4.38,2.2-7.42,3.67-10.4,5.24 c-81.87,43.08-163.8,86.04-245.49,129.46c-9.65,5.13-19.08,7.89-29.72,6.25c-5.69-0.87-11.38-1.99-16.91-3.54 c-24.75-6.97-49.48-14.05-74.16-21.26c-17.09-4.99-33.79-4.48-49.85,3.44c-25.92,12.79-51.77,25.72-77.51,38.87 c-11.87,6.06-15.86,19.11-9.8,30.03c5.72,10.3,17.47,12.78,29.23,5.86c15.46-9.08,30.77-18.41,46.17-27.6 c28.3-16.89,52.48-14.66,76.94,7.28c37.93,34.01,75.86,68.02,113.54,102.31c4.82,4.38,8.22,4.93,14.12,1.96 c75.12-37.85,150.37-75.46,225.72-112.87c5.96-2.96,8.37-6.14,8.32-13.05c-0.34-47.47-0.18-94.95-0.18-142.42 C956.59,504.92,956.59,502.11,956.59,497.77z M508.97,595.73c-27.24-10.51-53.53-17.36-80.5-12.82 c-36.45,6.13-72.46,14.92-108.59,22.87c-2.49,0.55-5.74,3.2-6.42,5.52c-12.21,41.89-24.13,83.88-35.89,125.9 c-0.53,1.91,0.22,5.54,1.61,6.42c13.38,8.45,27.03,16.48,41.03,24.89c10.79-11.01,20.44-22.31,31.56-31.92 c26.59-22.98,65.55-9.34,72.65,25.11c1.06,5.13,3.22,6.97,8.2,7.91c17.92,3.37,32.02,17.07,34.76,34.34 c0.89,5.64,2.91,7.56,8.26,8.65c18.12,3.69,29.47,15.05,34.65,32.65c0.87,2.96,1.19,6.08,1.74,9.03c16.17,2,26.75,10.65,37.03,22.43 c10.86,12.44,25.24,21.83,38.29,32.29c1.85,1.49,4.84,1.75,7.37,2.17c6.72,1.11,12.03-1.42,15.34-7.26 c3.35-5.91,2.61-11.79-1.91-16.85c-2.49-2.79-5.41-5.21-8.29-7.61c-22.62-18.91-45.27-37.78-68.47-57.13 c6.21-7.45,12.08-14.49,18.23-21.86c2.96,2.36,5.45,4.27,7.86,6.28c22.93,19.06,45.74,38.26,68.81,57.15 c8.69,7.12,19.77,6.3,25.6-1.14c5.76-7.35,4.01-15.45-5.22-23.22c-10.63-8.95-21.35-17.78-32.01-26.69 c-13.26-11.08-26.5-22.19-40.17-33.64c6.4-7.66,12.27-14.67,18.34-21.93c22.5,18.75,44.26,36.92,66.07,55.03 c4.67,3.87,9.24,7.98,14.39,11.13c6.95,4.24,16.61,2.28,21.36-3.52c5.17-6.31,4.61-14.36-1.56-21.22c-1.35-1.5-2.93-2.8-4.43-4.15 c-37.23-33.5-74.48-66.98-111.7-100.5c-15.33-13.81-26.98-15.04-44.65-4.5c-16.15,9.63-32.11,19.58-48.46,28.86 c-23.02,13.07-51.31,6.05-64.84-15.61c-15.89-25.43-7.05-57.85,20.05-71.93C461.6,619.14,484.44,608.02,508.97,595.73z M397.87,557.53c0.75,0.17,1.57,0.57,2.34,0.48c2.3-0.26,4.57-0.69,6.85-1.11c27.09-4.93,54.01-5.23,80.8,2.21 c33.61,9.34,67.32,18.36,100.93,27.69c25.62,7.11,51.15,14.53,76.75,21.67c3.57,1,7.35,1.29,11.06,1.71 c5.53,0.62,7.75-1.83,7.66-7.51c-0.26-15.63,0.34-31.28-0.22-46.89c-0.83-23.14-12.79-37.58-35.31-43.38 c-22.95-5.91-45.87-11.99-69.01-17.06c-8.58-1.88-11.23-5.58-10.56-13.93c0.69-8.63,0.43-17.37-0.01-26.03 c-0.3-5.83,1.39-9.35,6.76-12.41c17.36-9.9,29.76-24.62,33.72-44.23c4.55-22.51,4.89-45.5-1.71-67.86 c-8.39-28.42-37.14-50.03-66.05-50.42c-31.74-0.43-61.51,19.86-68.87,50.42c-4.05,16.82-3.58,34.92-3.68,52.45 c-0.11,20.78,7.59,40.2,24.9,51.02c16.73,10.46,19.73,23.27,17.61,40.18c-0.32,2.57-0.41,5.27,0.02,7.8 c1.36,7.86-2.02,11.05-9.65,12.79c-23.66,5.39-47.19,11.39-70.69,17.49C408.97,518.44,395.97,535.99,397.87,557.53z M870.46,510.38 c-23.25-5.83-43.65-11.15-64.17-15.95c-5.46-1.28-7.69-3.35-7.42-9.19c0.47-10.11,0.4-20.26-0.03-30.38 c-0.23-5.55,1.37-8.9,6.41-11.75c16.55-9.35,28.68-23.1,33.17-41.6c5.79-23.89,5.9-48.3-1.38-71.98c-8.62-28.01-38-49.24-66.1-49.08 c-32.4,0.19-61.05,20-68.51,50.86c-4,16.54-3.55,34.35-3.59,51.59c-0.05,21.06,7.63,40.83,25.32,51.69 c16.96,10.42,19.41,23.37,17.51,40.15c-0.36,3.14-0.44,6.42,0.03,9.53c1,6.65-2.16,9.03-8.26,10.36 c-13.37,2.91-26.59,6.54-41.08,10.17c11.18,12.88,18.63,26.3,19.54,42.05c0.86,15.04,0.19,30.16,0.19,46.92 C765.64,565.58,816.9,538.58,870.46,510.38z M388.96,504.89c-15.52-3.96-29.39-7.73-43.4-10.94c-4.63-1.06-6.13-3.1-6.03-7.64 c0.22-10.12,0.41-20.27-0.12-30.37c-0.33-6.23,1.55-9.84,7.13-13.09c19.91-11.59,32.08-29.16,35.21-51.94 c1.6-11.66,2.04-23.87,0.44-35.48c-1.79-12.92-4.69-26.31-10.31-37.95c-12.53-25.96-40.09-39.07-70.95-36.16 c-25.25,2.38-51.39,22.78-57.27,48.79c-3.94,17.45-3.74,36.03-3.79,54.12c-0.06,20.45,7.79,39.55,24.82,50.13 c16.78,10.42,19.59,23.32,17.48,40.16c-0.21,1.71-0.29,3.51,0.01,5.2c1.74,9.75-1.61,14.96-12.1,15.91 c-6.19,0.56-12.2,3.12-19.94,5.23c24.29,14.19,46.67,27.39,69.22,40.32c4.22,2.42,6.25,5.02,5.93,10.13 c-0.49,7.71-0.13,15.47-0.13,23.69c12.89-2.86,25.61-5.45,38.16-8.71c2.1-0.55,4.93-4.01,4.91-6.11 C368.05,539.67,373.85,521.45,388.96,504.89z M440.19,366.02c0-5.76-0.3-12.14,0.05-18.49c2.35-42.6,29.73-78.15,70.01-91.1 c39.45-12.68,81.81,0.3,107.95,33.92c27.94,35.92,26.97,76.95,18.28,118.43c-4.4,20.99-17.45,37.47-34.05,51.06 c-2.12,1.74-3.32,4.91-4.2,7.66c-0.22,0.69,2.29,2.98,3.84,3.39c17.05,4.45,34.14,8.78,51.29,12.85c2.34,0.56,5.12-0.16,7.59-0.76 c14.88-3.63,29.76-7.26,44.54-11.24c2.6-0.7,6.47-2.82,6.7-4.67c0.29-2.33-2.19-5.36-4.09-7.55c-7.54-8.69-17.02-16.18-22.7-25.91 c-22.07-37.79-20.02-77.96-8.2-118.26c1.84-6.27,1.75-10.53-1.71-15.82c-34.55-52.83-82.96-79.58-146.3-75.35 c-56.08,3.74-97.86,31.92-126.07,80.26c-1.42,2.43-1.02,6.44-0.38,9.47c2.51,11.81,6.85,23.38,8.01,35.29 c4.23,43.35-2.04,83.34-39.8,112.07c-4.93,3.75-3.3,8.39,3.14,10.06c15.66,4.05,31.34,8.06,47.09,11.75 c3.19,0.75,6.88,0.62,10.09-0.14c14.91-3.49,29.77-7.21,44.56-11.17c2.65-0.71,7.04-3.23,6.89-4.41c-0.4-2.91-2.59-5.87-4.73-8.19 c-5.07-5.52-11.03-10.28-15.75-16.06C444.05,420.82,438.59,394.69,440.19,366.02z M382.82,281.17 c37.51-54.88,89.45-86.06,156.9-86.35c67.77-0.29,120.1,30.72,158.17,85.54c10.33-6.59,20.3-12.84,30.13-19.29 c1.57-1.03,2.98-2.75,3.74-4.46c4.46-10.03,8.87-20.09,12.89-30.31c0.78-1.98,0.69-5.59-0.59-6.9 c-14.1-14.47-28.51-28.64-43.27-43.32c-11.94,7.77-23.39,15.57-35.27,22.67c-2.49,1.49-7.34,1.69-9.75,0.25 c-21.25-12.74-43.74-22.35-67.87-27.91c-4.75-1.09-6.6-3.36-7.44-7.92c-2.09-11.37-4.84-22.61-6.92-33.98 c-0.89-4.87-2.95-6.74-8.04-6.66c-16.49,0.27-33,0.32-49.49-0.02c-5.55-0.11-7.56,2.03-8.49,7.19c-2.01,11.09-4.83,22.02-6.78,33.12 c-0.88,5-2.97,7.28-8.01,8.43c-23.85,5.47-46.24,14.7-66.9,27.85c-4.11,2.62-7.01,2.29-10.84-0.36 c-9.52-6.57-19.51-12.45-28.96-19.12c-4.51-3.18-7.25-2.57-10.94,1.26c-11.85,12.29-23.98,24.32-36.23,36.21 c-3.39,3.29-4.3,6.07-2.2,10.57c4.27,9.16,7.74,18.69,11.9,27.9c1.1,2.45,3.14,4.81,5.36,6.35 C363.13,268.32,372.57,274.4,382.82,281.17z M186.04,735.35c17.43-69.72,34.75-139.02,52.06-208.25 c-33.6-19.61-66.22-38.81-99.09-57.59c-3.8-2.17-8.94-2.02-14.48-3.15c0,5.39,0,8.82,0,12.24c0,41.66,0,83.32,0,124.97 c0,34.43,0.01,68.85-0.02,103.28c0,4.38-0.38,8.18,5.49,10C148.48,722.56,166.73,728.92,186.04,735.35z M242.71,754.19 c6.9-24.25,13.58-47.84,20.33-71.41c10.65-37.22,21.44-74.39,31.88-111.67c0.95-3.4,1.2-9.46-0.68-10.77 c-9.34-6.5-19.51-11.82-30.33-18.11c-17.04,68.16-33.75,134.98-50.56,202.24C223.58,747.86,232.81,750.91,242.71,754.19z M527.86,897.73c-3.76-4.48-6.6-9.7-10.97-12.63c-5.8-3.89-12.47-2.29-17.54,2.46c-8.45,7.89-16.74,15.98-24.69,24.38 c-7.14,7.53-7.33,16.89-1.17,23.32c6.43,6.72,16.08,6.64,23.94-0.76c8-7.54,15.84-15.27,23.2-23.42 C523.53,907.83,524.95,903.23,527.86,897.73z M354.16,812.22c4.49-1.58,7.57-1.77,9.26-3.39c10.6-10.17,21.5-20.14,31.02-31.27 c4.91-5.74,3-13.28-2.43-18.9c-5.27-5.46-13.87-6.75-19.73-1.55c-10.34,9.19-20.44,18.85-29.17,29.52 c-2.8,3.42-2.76,11.46-0.74,15.87C344.4,806.91,350.54,809.43,354.16,812.22z M484.93,854.96c-3.75-4.58-6.5-9.9-10.87-12.79 c-5.68-3.76-12.47-2.63-17.59,2.19c-8.63,8.12-17.11,16.43-25.22,25.06c-7.12,7.58-6.99,16.88-0.4,23.25 c6.34,6.13,15.92,5.92,23.34-1.08c7.99-7.54,15.84-15.26,23.22-23.38C480.36,864.96,481.9,860.43,484.93,854.96z M397.53,855.24 c4.5-1.72,7.82-2.05,9.73-3.87c10.23-9.76,20.62-19.44,29.92-30.05c5.12-5.85,3.55-13.16-1.59-19.04 c-4.83-5.52-14.11-7.45-19.62-2.55c-10.75,9.56-21.18,19.69-30.27,30.79c-2.66,3.25-1.97,11.38,0.19,15.82 C387.9,850.46,393.9,852.64,397.53,855.24z M551.9,918.16c-7.23,8.52-13.52,15.92-20.04,23.6c7.35,7.55,14.66,16.03,26.47,11.72 c4.25-1.55,9.02-6.97,9.93-11.37C570.94,929.12,558.61,925.46,551.9,918.16z"></path>
                                  </svg></span></span> <span class="gem-icon-half-2"><span class="back-angle"><svg id="Layer_1" style="enable-background:new 0 0 1080 1080;" viewbox="0 0 1080 1080" x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                   <path d="M985.37,467.41c0,70.08,0,140.16,0,210.24c-1.36,0.36-2.84,0.5-4.07,1.11c-83.03,41.45-166.07,82.88-248.94,124.63 c-2.73,1.38-5.14,5.91-5.44,9.18c-1.93,21.14-15.61,37.01-36.4,40.6c-4.81,0.83-6.72,2.51-7.48,7.47 c-2.96,19.11-16.91,33.01-36.08,35.78c-4.84,0.7-6.42,2.68-6.85,6.96c-0.23,2.28-0.78,4.57-1.53,6.74 c-6.6,19.04-20.79,28.32-40,30.48c-6.52,30.07-23.7,44.6-49.92,42.7c-13.21-0.96-23.53-7.65-32.44-16.67 c-4.1-4.15-7.29-4.49-12.7-1.96c-26.43,12.35-56.62-3.2-62.01-31.82c-0.97-5.14-2.97-7.13-7.99-8.11 c-18.21-3.54-29.52-14.89-34.81-32.43c-0.89-2.97-1.19-6.11-1.76-9.17c-25.49-3.61-39.63-18.13-43.1-42.81 c-26.72-5.8-35.87-14.66-42.52-40.67c-0.39-1.53-1.13-3.48-2.33-4.22c-13.38-8.25-26.89-16.29-39.12-23.65 c-3.7,4.26-6.39,10.07-9.21,10.13c-10.84,0.25-22.33,0.58-32.49-2.59c-41.64-12.98-82.84-27.37-124.32-40.9 c-6.23-2.03-8.28-4.82-8.26-11.5c0.25-93.22,0.17-186.44,0.19-279.67c0-2.81,0.26-5.61,0.42-8.93c24.55-0.2,48.98-4.3,69.84,13.23 c6.11,5.13,14.55,7.47,20.72,12.55c18.03,14.83,37.31,17.35,58.41,8.06c2.93-1.29,5.64-3.05,8.46-4.59 c-1.86-2.95-3.14-6.6-5.68-8.74c-15.71-13.22-26.66-29.39-32.87-49.01c-6.27-19.81-5.21-40.17-4.29-60.31 c1.9-41.57,22.02-72.07,60.12-88.95c13.36-5.92,28.61-7.6,43.71-11.4c-3.62-8.67-8.05-18.65-11.84-28.85 c-0.88-2.36-0.67-6.58,0.87-8.15c23.87-24.4,48.04-48.51,72.49-73.04c13.53,8.79,26.46,17.49,39.75,25.59 c2.58,1.58,7.03,2.05,9.84,0.98c14.82-5.64,29.43-11.87,44.02-18.1c2.15-0.92,5.1-2.71,5.5-4.57c3.52-16.34,6.55-32.79,9.73-49.21 c37.07,0,74.13,0,111.2,0c3.18,16.41,6.18,32.87,9.78,49.19c0.44,1.98,3.91,3.72,6.32,4.76c14.05,6.04,28.34,11.54,42.24,17.89 c4.3,1.96,7.13,1.86,10.91-0.68c12.91-8.69,26.05-17.05,39.57-25.84c24.44,24.52,48.61,48.62,72.48,73.02 c1.54,1.58,1.81,5.79,0.93,8.12c-3.91,10.35-8.45,20.47-12.95,31.12c45.69,1.01,77.03,21.96,96.03,61.63 c10.64,22.23,9.82,46.15,8.98,69.86c-1.1,30.87-13.77,56.28-37.55,76.17c-2.38,1.99-3.65,5.32-5.43,8.02 c2.67,1.66,5.13,4.02,8.03,4.87c22.42,6.55,44.91,12.9,67.46,19c2.11,0.57,5.02-0.45,7.16-1.53c12.36-6.3,24.55-12.94,36.92-19.22 c3-1.52,6.43-2.89,9.71-3C966.28,466.93,975.83,467.3,985.37,467.41z M956.59,497.77c-4.38,2.2-7.42,3.67-10.4,5.24 c-81.87,43.08-163.8,86.04-245.49,129.46c-9.65,5.13-19.08,7.89-29.72,6.25c-5.69-0.87-11.38-1.99-16.91-3.54 c-24.75-6.97-49.48-14.05-74.16-21.26c-17.09-4.99-33.79-4.48-49.85,3.44c-25.92,12.79-51.77,25.72-77.51,38.87 c-11.87,6.06-15.86,19.11-9.8,30.03c5.72,10.3,17.47,12.78,29.23,5.86c15.46-9.08,30.77-18.41,46.17-27.6 c28.3-16.89,52.48-14.66,76.94,7.28c37.93,34.01,75.86,68.02,113.54,102.31c4.82,4.38,8.22,4.93,14.12,1.96 c75.12-37.85,150.37-75.46,225.72-112.87c5.96-2.96,8.37-6.14,8.32-13.05c-0.34-47.47-0.18-94.95-0.18-142.42 C956.59,504.92,956.59,502.11,956.59,497.77z M508.97,595.73c-27.24-10.51-53.53-17.36-80.5-12.82 c-36.45,6.13-72.46,14.92-108.59,22.87c-2.49,0.55-5.74,3.2-6.42,5.52c-12.21,41.89-24.13,83.88-35.89,125.9 c-0.53,1.91,0.22,5.54,1.61,6.42c13.38,8.45,27.03,16.48,41.03,24.89c10.79-11.01,20.44-22.31,31.56-31.92 c26.59-22.98,65.55-9.34,72.65,25.11c1.06,5.13,3.22,6.97,8.2,7.91c17.92,3.37,32.02,17.07,34.76,34.34 c0.89,5.64,2.91,7.56,8.26,8.65c18.12,3.69,29.47,15.05,34.65,32.65c0.87,2.96,1.19,6.08,1.74,9.03c16.17,2,26.75,10.65,37.03,22.43 c10.86,12.44,25.24,21.83,38.29,32.29c1.85,1.49,4.84,1.75,7.37,2.17c6.72,1.11,12.03-1.42,15.34-7.26 c3.35-5.91,2.61-11.79-1.91-16.85c-2.49-2.79-5.41-5.21-8.29-7.61c-22.62-18.91-45.27-37.78-68.47-57.13 c6.21-7.45,12.08-14.49,18.23-21.86c2.96,2.36,5.45,4.27,7.86,6.28c22.93,19.06,45.74,38.26,68.81,57.15 c8.69,7.12,19.77,6.3,25.6-1.14c5.76-7.35,4.01-15.45-5.22-23.22c-10.63-8.95-21.35-17.78-32.01-26.69 c-13.26-11.08-26.5-22.19-40.17-33.64c6.4-7.66,12.27-14.67,18.34-21.93c22.5,18.75,44.26,36.92,66.07,55.03 c4.67,3.87,9.24,7.98,14.39,11.13c6.95,4.24,16.61,2.28,21.36-3.52c5.17-6.31,4.61-14.36-1.56-21.22c-1.35-1.5-2.93-2.8-4.43-4.15 c-37.23-33.5-74.48-66.98-111.7-100.5c-15.33-13.81-26.98-15.04-44.65-4.5c-16.15,9.63-32.11,19.58-48.46,28.86 c-23.02,13.07-51.31,6.05-64.84-15.61c-15.89-25.43-7.05-57.85,20.05-71.93C461.6,619.14,484.44,608.02,508.97,595.73z M397.87,557.53c0.75,0.17,1.57,0.57,2.34,0.48c2.3-0.26,4.57-0.69,6.85-1.11c27.09-4.93,54.01-5.23,80.8,2.21 c33.61,9.34,67.32,18.36,100.93,27.69c25.62,7.11,51.15,14.53,76.75,21.67c3.57,1,7.35,1.29,11.06,1.71 c5.53,0.62,7.75-1.83,7.66-7.51c-0.26-15.63,0.34-31.28-0.22-46.89c-0.83-23.14-12.79-37.58-35.31-43.38 c-22.95-5.91-45.87-11.99-69.01-17.06c-8.58-1.88-11.23-5.58-10.56-13.93c0.69-8.63,0.43-17.37-0.01-26.03 c-0.3-5.83,1.39-9.35,6.76-12.41c17.36-9.9,29.76-24.62,33.72-44.23c4.55-22.51,4.89-45.5-1.71-67.86 c-8.39-28.42-37.14-50.03-66.05-50.42c-31.74-0.43-61.51,19.86-68.87,50.42c-4.05,16.82-3.58,34.92-3.68,52.45 c-0.11,20.78,7.59,40.2,24.9,51.02c16.73,10.46,19.73,23.27,17.61,40.18c-0.32,2.57-0.41,5.27,0.02,7.8 c1.36,7.86-2.02,11.05-9.65,12.79c-23.66,5.39-47.19,11.39-70.69,17.49C408.97,518.44,395.97,535.99,397.87,557.53z M870.46,510.38 c-23.25-5.83-43.65-11.15-64.17-15.95c-5.46-1.28-7.69-3.35-7.42-9.19c0.47-10.11,0.4-20.26-0.03-30.38 c-0.23-5.55,1.37-8.9,6.41-11.75c16.55-9.35,28.68-23.1,33.17-41.6c5.79-23.89,5.9-48.3-1.38-71.98c-8.62-28.01-38-49.24-66.1-49.08 c-32.4,0.19-61.05,20-68.51,50.86c-4,16.54-3.55,34.35-3.59,51.59c-0.05,21.06,7.63,40.83,25.32,51.69 c16.96,10.42,19.41,23.37,17.51,40.15c-0.36,3.14-0.44,6.42,0.03,9.53c1,6.65-2.16,9.03-8.26,10.36 c-13.37,2.91-26.59,6.54-41.08,10.17c11.18,12.88,18.63,26.3,19.54,42.05c0.86,15.04,0.19,30.16,0.19,46.92 C765.64,565.58,816.9,538.58,870.46,510.38z M388.96,504.89c-15.52-3.96-29.39-7.73-43.4-10.94c-4.63-1.06-6.13-3.1-6.03-7.64 c0.22-10.12,0.41-20.27-0.12-30.37c-0.33-6.23,1.55-9.84,7.13-13.09c19.91-11.59,32.08-29.16,35.21-51.94 c1.6-11.66,2.04-23.87,0.44-35.48c-1.79-12.92-4.69-26.31-10.31-37.95c-12.53-25.96-40.09-39.07-70.95-36.16 c-25.25,2.38-51.39,22.78-57.27,48.79c-3.94,17.45-3.74,36.03-3.79,54.12c-0.06,20.45,7.79,39.55,24.82,50.13 c16.78,10.42,19.59,23.32,17.48,40.16c-0.21,1.71-0.29,3.51,0.01,5.2c1.74,9.75-1.61,14.96-12.1,15.91 c-6.19,0.56-12.2,3.12-19.94,5.23c24.29,14.19,46.67,27.39,69.22,40.32c4.22,2.42,6.25,5.02,5.93,10.13 c-0.49,7.71-0.13,15.47-0.13,23.69c12.89-2.86,25.61-5.45,38.16-8.71c2.1-0.55,4.93-4.01,4.91-6.11 C368.05,539.67,373.85,521.45,388.96,504.89z M440.19,366.02c0-5.76-0.3-12.14,0.05-18.49c2.35-42.6,29.73-78.15,70.01-91.1 c39.45-12.68,81.81,0.3,107.95,33.92c27.94,35.92,26.97,76.95,18.28,118.43c-4.4,20.99-17.45,37.47-34.05,51.06 c-2.12,1.74-3.32,4.91-4.2,7.66c-0.22,0.69,2.29,2.98,3.84,3.39c17.05,4.45,34.14,8.78,51.29,12.85c2.34,0.56,5.12-0.16,7.59-0.76 c14.88-3.63,29.76-7.26,44.54-11.24c2.6-0.7,6.47-2.82,6.7-4.67c0.29-2.33-2.19-5.36-4.09-7.55c-7.54-8.69-17.02-16.18-22.7-25.91 c-22.07-37.79-20.02-77.96-8.2-118.26c1.84-6.27,1.75-10.53-1.71-15.82c-34.55-52.83-82.96-79.58-146.3-75.35 c-56.08,3.74-97.86,31.92-126.07,80.26c-1.42,2.43-1.02,6.44-0.38,9.47c2.51,11.81,6.85,23.38,8.01,35.29 c4.23,43.35-2.04,83.34-39.8,112.07c-4.93,3.75-3.3,8.39,3.14,10.06c15.66,4.05,31.34,8.06,47.09,11.75 c3.19,0.75,6.88,0.62,10.09-0.14c14.91-3.49,29.77-7.21,44.56-11.17c2.65-0.71,7.04-3.23,6.89-4.41c-0.4-2.91-2.59-5.87-4.73-8.19 c-5.07-5.52-11.03-10.28-15.75-16.06C444.05,420.82,438.59,394.69,440.19,366.02z M382.82,281.17 c37.51-54.88,89.45-86.06,156.9-86.35c67.77-0.29,120.1,30.72,158.17,85.54c10.33-6.59,20.3-12.84,30.13-19.29 c1.57-1.03,2.98-2.75,3.74-4.46c4.46-10.03,8.87-20.09,12.89-30.31c0.78-1.98,0.69-5.59-0.59-6.9 c-14.1-14.47-28.51-28.64-43.27-43.32c-11.94,7.77-23.39,15.57-35.27,22.67c-2.49,1.49-7.34,1.69-9.75,0.25 c-21.25-12.74-43.74-22.35-67.87-27.91c-4.75-1.09-6.6-3.36-7.44-7.92c-2.09-11.37-4.84-22.61-6.92-33.98 c-0.89-4.87-2.95-6.74-8.04-6.66c-16.49,0.27-33,0.32-49.49-0.02c-5.55-0.11-7.56,2.03-8.49,7.19c-2.01,11.09-4.83,22.02-6.78,33.12 c-0.88,5-2.97,7.28-8.01,8.43c-23.85,5.47-46.24,14.7-66.9,27.85c-4.11,2.62-7.01,2.29-10.84-0.36 c-9.52-6.57-19.51-12.45-28.96-19.12c-4.51-3.18-7.25-2.57-10.94,1.26c-11.85,12.29-23.98,24.32-36.23,36.21 c-3.39,3.29-4.3,6.07-2.2,10.57c4.27,9.16,7.74,18.69,11.9,27.9c1.1,2.45,3.14,4.81,5.36,6.35 C363.13,268.32,372.57,274.4,382.82,281.17z M186.04,735.35c17.43-69.72,34.75-139.02,52.06-208.25 c-33.6-19.61-66.22-38.81-99.09-57.59c-3.8-2.17-8.94-2.02-14.48-3.15c0,5.39,0,8.82,0,12.24c0,41.66,0,83.32,0,124.97 c0,34.43,0.01,68.85-0.02,103.28c0,4.38-0.38,8.18,5.49,10C148.48,722.56,166.73,728.92,186.04,735.35z M242.71,754.19 c6.9-24.25,13.58-47.84,20.33-71.41c10.65-37.22,21.44-74.39,31.88-111.67c0.95-3.4,1.2-9.46-0.68-10.77 c-9.34-6.5-19.51-11.82-30.33-18.11c-17.04,68.16-33.75,134.98-50.56,202.24C223.58,747.86,232.81,750.91,242.71,754.19z M527.86,897.73c-3.76-4.48-6.6-9.7-10.97-12.63c-5.8-3.89-12.47-2.29-17.54,2.46c-8.45,7.89-16.74,15.98-24.69,24.38 c-7.14,7.53-7.33,16.89-1.17,23.32c6.43,6.72,16.08,6.64,23.94-0.76c8-7.54,15.84-15.27,23.2-23.42 C523.53,907.83,524.95,903.23,527.86,897.73z M354.16,812.22c4.49-1.58,7.57-1.77,9.26-3.39c10.6-10.17,21.5-20.14,31.02-31.27 c4.91-5.74,3-13.28-2.43-18.9c-5.27-5.46-13.87-6.75-19.73-1.55c-10.34,9.19-20.44,18.85-29.17,29.52 c-2.8,3.42-2.76,11.46-0.74,15.87C344.4,806.91,350.54,809.43,354.16,812.22z M484.93,854.96c-3.75-4.58-6.5-9.9-10.87-12.79 c-5.68-3.76-12.47-2.63-17.59,2.19c-8.63,8.12-17.11,16.43-25.22,25.06c-7.12,7.58-6.99,16.88-0.4,23.25 c6.34,6.13,15.92,5.92,23.34-1.08c7.99-7.54,15.84-15.26,23.22-23.38C480.36,864.96,481.9,860.43,484.93,854.96z M397.53,855.24 c4.5-1.72,7.82-2.05,9.73-3.87c10.23-9.76,20.62-19.44,29.92-30.05c5.12-5.85,3.55-13.16-1.59-19.04 c-4.83-5.52-14.11-7.45-19.62-2.55c-10.75,9.56-21.18,19.69-30.27,30.79c-2.66,3.25-1.97,11.38,0.19,15.82 C387.9,850.46,393.9,852.64,397.53,855.24z M551.9,918.16c-7.23,8.52-13.52,15.92-20.04,23.6c7.35,7.55,14.66,16.03,26.47,11.72 c4.25-1.55,9.02-6.97,9.93-11.37C570.94,929.12,558.61,925.46,551.9,918.16z"></path>
                                  </svg></span></span> </div>
                              </div>
                             </div>
                            </a> </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-3c098c6 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-element_type="widget" data-id="3c098c6" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-text-editor elementor-clearfix">
                            <div class="title-h3"> Professional Services </div>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-c26cb89 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-element_type="widget" data-id="c26cb89" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-text-editor elementor-clearfix">
                            <p><span style="font-weight: 400;">Create digital experiences with</span> <span style="font-weight: 400;">Salesforce consulting</span> <span style="font-weight: 400;">that take products to market quicker.</span></p>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </section>
                   <div class="elementor-element elementor-element-240823b elementor-absolute elementor-hidden-tablet elementor-hidden-phone flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-styledimage" data-element_type="widget" data-id="240823b" data-settings="{&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/dtcforce.com\/wp-content\/uploads\/2022\/04\/cloud-06.png&quot;,&quot;id&quot;:1929,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;_position&quot;:&quot;absolute&quot;,&quot;thegem_interaction_vertical_scroll&quot;:&quot;yes&quot;,&quot;thegem_interaction_vertical_scroll_direction&quot;:&quot;negative&quot;,&quot;thegem_interaction_vertical_scroll_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:2,&quot;sizes&quot;:[]},&quot;thegem_elementor_preset&quot;:&quot;default&quot;,&quot;thegem_interaction_vertical_scroll_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;thegem_interaction_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="thegem-styledimage.default">
                    <div class="elementor-widget-container">
                     <div class="styled-image-wrapper">
                      <div class="centered-box gem-image-centered-box">
                       <div class="gem-image gem-wrapbox gem-wrapbox-default gem-wrapbox-position-centered">
                        <div class="gem-wrapbox-inner"> <img alt="Cloud-06" class="gem-wrapbox-element img-responsive" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="wp-content/uploads/2022/04/cloud-06-300x300.png" id="tgpli-660df3d370822">
                         <script>
                          window.tgpQueue.add('tgpli-660df3d370822')
                         </script><noscript><img alt="Cloud-06" class="gem-wrapbox-element img-responsive" src="wp-content/uploads/2022/04/cloud-06-300x300.png"></noscript>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                   <div class="elementor-element elementor-element-ebf9940 elementor-absolute elementor-hidden-tablet elementor-hidden-phone flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-styledimage" data-element_type="widget" data-id="ebf9940" data-settings="{&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/dtcforce.com\/wp-content\/uploads\/2022\/04\/cloud-08.png&quot;,&quot;id&quot;:1932,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;_position&quot;:&quot;absolute&quot;,&quot;thegem_interaction_vertical_scroll&quot;:&quot;yes&quot;,&quot;thegem_interaction_vertical_scroll_direction&quot;:&quot;negative&quot;,&quot;thegem_interaction_mouse&quot;:&quot;yes&quot;,&quot;thegem_interaction_mouse_direction&quot;:&quot;negative&quot;,&quot;thegem_interaction_mouse_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.6,&quot;sizes&quot;:[]},&quot;thegem_elementor_preset&quot;:&quot;default&quot;,&quot;thegem_interaction_vertical_scroll_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:4,&quot;sizes&quot;:[]},&quot;thegem_interaction_vertical_scroll_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;thegem_interaction_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="thegem-styledimage.default">
                    <div class="elementor-widget-container">
                     <div class="styled-image-wrapper">
                      <div class="gem-image gem-wrapbox gem-wrapbox-default gem-wrapbox-position-right">
                       <div class="gem-wrapbox-inner"> <img alt="Cloud-08" class="gem-wrapbox-element img-responsive" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/cloud-08-300x300.png" id="tgpli-660df3d370829">
                        <script>
                         window.tgpQueue.add('tgpli-660df3d370829')
                        </script><noscript><img alt="Cloud-08" class="gem-wrapbox-element img-responsive" src="wp-content/uploads/2022/04/cloud-08-300x300.png"></noscript>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                   <div class="elementor-element elementor-element-bb2e819 elementor-absolute elementor-hidden-tablet elementor-hidden-phone flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-styledimage" data-element_type="widget" data-id="bb2e819" data-settings="{&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/dtcforce.com\/wp-content\/uploads\/2022\/06\/main-area-dots.png&quot;,&quot;id&quot;:2466,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;_position&quot;:&quot;absolute&quot;,&quot;thegem_interaction_vertical_scroll&quot;:&quot;yes&quot;,&quot;thegem_interaction_vertical_scroll_direction&quot;:&quot;negative&quot;,&quot;thegem_interaction_vertical_scroll_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3,&quot;sizes&quot;:[]},&quot;thegem_interaction_horizontal_scroll&quot;:&quot;yes&quot;,&quot;thegem_interaction_horizontal_scroll_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3,&quot;sizes&quot;:[]},&quot;thegem_elementor_preset&quot;:&quot;default&quot;,&quot;thegem_interaction_vertical_scroll_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;thegem_interaction_horizontal_scroll_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;thegem_interaction_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="thegem-styledimage.default">
                    <div class="elementor-widget-container">
                     <div class="styled-image-wrapper">
                      <div class="gem-image gem-wrapbox gem-wrapbox-default gem-wrapbox-position-left">
                       <div class="gem-wrapbox-inner"> <img alt="main-area-dots" class="gem-wrapbox-element img-responsive" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/06/main-area-dots.png" id="tgpli-660df3d37082e">
                        <script>
                         window.tgpQueue.add('tgpli-660df3d37082e')
                        </script><noscript><img alt="main-area-dots" class="gem-wrapbox-element img-responsive" src="wp-content/uploads/2022/06/main-area-dots.png"></noscript>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                   <section class="elementor-section elementor-inner-section elementor-element elementor-element-8e5271d elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="8e5271d" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" id="you-believe">
                    <div class="elementor-container elementor-column-gap-thegem">
                     <div class="elementor-row">
                      <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-37ba54c" data-element_type="column" data-id="37ba54c">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-dcfac27 elementor-widget__width-auto flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-element_type="widget" data-id="dcfac27" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:0,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="heading.default" id="teachers">
                          <div class="elementor-widget-container">
                           <div class="title-h2 elementor-heading-title elementor-size-default"> You’ll have to see it to believe it. </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-3048f42 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-element_type="widget" data-id="3048f42" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-text-editor elementor-clearfix">
                            <p><span style="font-weight: 400;">Take a look at some of our client success stories.</span></p>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-c21df2c flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-quickfinders" data-element_type="widget" data-id="c21df2c" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;thegem_elementor_preset&quot;:&quot;grid-basic-centered&quot;}" data-widget_type="thegem-quickfinders.default">
                          <div class="elementor-widget-container">
                           <div class="quickfinder row inline-row quickfinder-style-grid-basic-centered">
                            <div class="lazy-loading quickfinder-item inline-column col-md-3 col-sm-6 col-xs-6">
                             <div class="quickfinder-item-inner icon-top icon-wrapping-none centered-box button-bottom lazy-loading-item" data-ll-effect="fading" data-ll-item-delay="200">
                              <div class="quickfinder-icon-container">
                               <div class="connector-container"> <span></span> </div>
                               <div class="gem-qf-icon-image-wrapper lazy-loading-item" data-ll-effect="clip">
                                <div class="gem-image"> <span><img alt="" class="attachment-full size-full" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/onpoint-circle.jpg" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2022/04/onpoint-circle.jpg 120w, https://dtcforce.com/wp-content/uploads/2022/04/onpoint-circle-100x100.jpg 100w" height="120" id="tgpli-660df3d370839" sizes="(max-width: 120px) 100vw, 120px" width="120">
                                  <script>
                                   window.tgpQueue.add('tgpli-660df3d370839')
                                  </script><noscript><img alt="" class="attachment-full size-full" height="120" sizes="(max-width: 120px) 100vw, 120px" src="wp-content/uploads/2022/04/onpoint-circle.jpg" srcset="https://dtcforce.com/wp-content/uploads/2022/04/onpoint-circle.jpg 120w, https://dtcforce.com/wp-content/uploads/2022/04/onpoint-circle-100x100.jpg 100w" width="120"></noscript>
                                 </span> </div>
                               </div>
                               <div class="connector-container"> <span></span> </div>
                              </div>
                              <div class="quickfinder-item-info-wrapper">
                               <div class="quickfinder-item-info lazy-loading-item" data-ll-effect="fading" data-ll-item-delay="200">
                                <h4 class="quickfinder-title title-h4 bold">On Point</h4>
                                <div class="quickfinder-description gem-text-output">
                                 <p><span style="font-weight: 400;">Salesforce consulting services included creating a unique and custom data structure to support their rapidly expanding customer base, while offering a comprehensive customer journey from sale to onboarding &amp; installation.</span></p>
                                </div>
                               </div>
                              </div><a class="quickfinder-item-link" href="case-studies/index.html" rel="nofollow" target="_blank"></a>
                             </div>
                            </div>
                            <div class="lazy-loading quickfinder-item inline-column col-md-3 col-sm-6 col-xs-6">
                             <div class="quickfinder-item-inner icon-top icon-wrapping-none centered-box button-bottom lazy-loading-item" data-ll-effect="fading" data-ll-item-delay="200">
                              <div class="quickfinder-icon-container">
                               <div class="connector-container"> <span></span> </div>
                               <div class="gem-qf-icon-image-wrapper lazy-loading-item" data-ll-effect="clip">
                                <div class="gem-image"> <span><img alt="watson living sales cloud" class="attachment-thumbnail size-thumbnail" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/watson-living-150x150.jpg" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2022/04/watson-living-150x150.jpg 150w, https://dtcforce.com/wp-content/uploads/2022/04/watson-living-100x100.jpg 100w, https://dtcforce.com/wp-content/uploads/2022/04/elementor/thumbs/watson-living-pz7nhto1uih0qpsje5yypix45ia646m6zx7306lkts.jpg 120w, https://dtcforce.com/wp-content/uploads/2022/04/watson-living.jpg 200w" height="150" id="tgpli-660df3d370846" sizes="(max-width: 150px) 100vw, 150px" width="150">
                                  <script>
                                   window.tgpQueue.add('tgpli-660df3d370846')
                                  </script><noscript><img alt="watson living sales cloud" class="attachment-thumbnail size-thumbnail" height="150" sizes="(max-width: 150px) 100vw, 150px" src="wp-content/uploads/2022/04/watson-living-150x150.jpg" srcset="https://dtcforce.com/wp-content/uploads/2022/04/watson-living-150x150.jpg 150w, https://dtcforce.com/wp-content/uploads/2022/04/watson-living-100x100.jpg 100w, https://dtcforce.com/wp-content/uploads/2022/04/elementor/thumbs/watson-living-pz7nhto1uih0qpsje5yypix45ia646m6zx7306lkts.jpg 120w, https://dtcforce.com/wp-content/uploads/2022/04/watson-living.jpg 200w" width="150"></noscript>
                                 </span> </div>
                               </div>
                               <div class="connector-container"> <span></span> </div>
                              </div>
                              <div class="quickfinder-item-info-wrapper">
                               <div class="quickfinder-item-info lazy-loading-item" data-ll-effect="fading" data-ll-item-delay="200">
                                <h4 class="quickfinder-title title-h4 bold">Watson Living</h4>
                                <div class="quickfinder-description gem-text-output">
                                 <p><span style="font-weight: 400;">Built and configured Salesforce to optimize their sales processes and</span> <span style="font-weight: 400;">Salesforce platform</span><span style="font-weight: 400;">. We created an efficient system to help them access relevant information swiftly.&nbsp;&nbsp;</span></p>
                                </div>
                               </div>
                              </div><a class="quickfinder-item-link" href="case-studies/index.html" rel="nofollow" target="_blank"></a>
                             </div>
                            </div>
                            <div class="lazy-loading quickfinder-item inline-column col-md-3 col-sm-6 col-xs-6">
                             <div class="quickfinder-item-inner icon-top icon-wrapping-none centered-box button-bottom lazy-loading-item" data-ll-effect="fading" data-ll-item-delay="200">
                              <div class="quickfinder-icon-container">
                               <div class="connector-container"> <span></span> </div>
                               <div class="gem-qf-icon-image-wrapper lazy-loading-item" data-ll-effect="clip">
                                <div class="gem-image"> <span><img alt="" class="attachment-full size-full" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-17.png" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-17.png 335w, https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-17-300x300.png 300w, https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-17-150x150.png 150w, https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-17-256x256.png 256w, https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-17-100x100.png 100w" height="334" id="tgpli-660df3d370854" sizes="(max-width: 335px) 100vw, 335px" width="335">
                                  <script>
                                   window.tgpQueue.add('tgpli-660df3d370854')
                                  </script><noscript><img alt="" class="attachment-full size-full" height="334" sizes="(max-width: 335px) 100vw, 335px" src="wp-content/uploads/2022/05/client-logoa-17.png" srcset="https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-17.png 335w, https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-17-300x300.png 300w, https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-17-150x150.png 150w, https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-17-256x256.png 256w, https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-17-100x100.png 100w" width="335"></noscript>
                                 </span> </div>
                               </div>
                               <div class="connector-container"> <span></span> </div>
                              </div>
                              <div class="quickfinder-item-info-wrapper">
                               <div class="quickfinder-item-info lazy-loading-item" data-ll-effect="fading" data-ll-item-delay="200">
                                <h4 class="quickfinder-title title-h4 bold">MaCher</h4>
                                <div class="quickfinder-description gem-text-output">
                                 <p><span style="font-weight: 400;">Supported their business development and account management tier with Salesforce configuration. Re-engineered the lead-account-opportunity flow, and integrated MailChimp.&nbsp;</span></p>
                                </div>
                               </div>
                              </div><a class="quickfinder-item-link" href="case-studies/index.html" rel="nofollow" target="_blank"></a>
                             </div>
                            </div>
                            <div class="lazy-loading quickfinder-item inline-column col-md-3 col-sm-6 col-xs-6">
                             <div class="quickfinder-item-inner icon-top icon-wrapping-none centered-box button-bottom lazy-loading-item" data-ll-effect="fading" data-ll-item-delay="200">
                              <div class="quickfinder-icon-container">
                               <div class="connector-container"> <span></span> </div>
                               <div class="gem-qf-icon-image-wrapper lazy-loading-item" data-ll-effect="clip">
                                <div class="gem-image"> <span><img alt="" class="attachment-thumbnail size-thumbnail" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-16-150x150.png" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-16-150x150.png 150w, https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-16-300x300.png 300w, https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-16-256x256.png 256w, https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-16-100x100.png 100w, https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-16.png 334w" height="150" id="tgpli-660df3d370862" sizes="(max-width: 150px) 100vw, 150px" width="150">
                                  <script>
                                   window.tgpQueue.add('tgpli-660df3d370862')
                                  </script><noscript><img alt="" class="attachment-thumbnail size-thumbnail" height="150" sizes="(max-width: 150px) 100vw, 150px" src="wp-content/uploads/2022/05/client-logoa-16-150x150.png" srcset="https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-16-150x150.png 150w, https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-16-300x300.png 300w, https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-16-256x256.png 256w, https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-16-100x100.png 100w, https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-16.png 334w" width="150"></noscript>
                                 </span> </div>
                               </div>
                               <div class="connector-container"> <span></span> </div>
                              </div>
                              <div class="quickfinder-item-info-wrapper">
                               <div class="quickfinder-item-info lazy-loading-item" data-ll-effect="fading" data-ll-item-delay="200">
                                <h4 class="quickfinder-title title-h4 bold">Suite Talkers</h4>
                                <div class="quickfinder-description gem-text-output">
                                 <p><span style="font-weight: 400;">Defined and managed the lead account, contact, and opportunity processes. We also supported their integration of QuickBooks to make invoicing a breeze.</span></p>
                                </div>
                               </div>
                              </div><a class="quickfinder-item-link" href="case-studies/index.html" rel="nofollow" target="_blank"></a>
                             </div>
                            </div>
                            <div class="lazy-loading quickfinder-item inline-column col-md-3 col-sm-6 col-xs-6">
                             <div class="quickfinder-item-inner icon-top icon-wrapping-none centered-box button-bottom lazy-loading-item" data-ll-effect="fading" data-ll-item-delay="200">
                              <div class="quickfinder-icon-container">
                               <div class="connector-container"> <span></span> </div>
                               <div class="gem-qf-icon-image-wrapper lazy-loading-item" data-ll-effect="clip">
                                <div class="gem-image"> <span><img alt="" class="attachment-full size-full" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-19.png" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-19.png 335w, https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-19-300x300.png 300w, https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-19-150x150.png 150w, https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-19-256x256.png 256w, https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-19-100x100.png 100w" height="334" id="tgpli-660df3d37086f" sizes="(max-width: 335px) 100vw, 335px" width="335">
                                  <script>
                                   window.tgpQueue.add('tgpli-660df3d37086f')
                                  </script><noscript><img alt="" class="attachment-full size-full" height="334" sizes="(max-width: 335px) 100vw, 335px" src="wp-content/uploads/2022/05/client-logoa-19.png" srcset="https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-19.png 335w, https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-19-300x300.png 300w, https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-19-150x150.png 150w, https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-19-256x256.png 256w, https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-19-100x100.png 100w" width="335"></noscript>
                                 </span> </div>
                               </div>
                               <div class="connector-container"> <span></span> </div>
                              </div>
                              <div class="quickfinder-item-info-wrapper">
                               <div class="quickfinder-item-info lazy-loading-item" data-ll-effect="fading" data-ll-item-delay="200">
                                <h4 class="quickfinder-title title-h4 bold">The Hull Firm</h4>
                                <div class="quickfinder-description gem-text-output">
                                 <p><span style="font-weight: 400;">Facilitated the firm’s expansion and helped them scale their project by adding users of a new division to the existing Salesforce build. Created a division for their Criminal Defense wing – an individual unit on the same template.&nbsp;</span></p>
                                </div>
                               </div>
                              </div><a class="quickfinder-item-link" href="case-studies/index.html" rel="nofollow" target="_blank"></a>
                             </div>
                            </div>
                            <div class="lazy-loading quickfinder-item inline-column col-md-3 col-sm-6 col-xs-6">
                             <div class="quickfinder-item-inner icon-top icon-wrapping-none centered-box button-bottom lazy-loading-item" data-ll-effect="fading" data-ll-item-delay="200">
                              <div class="quickfinder-icon-container">
                               <div class="connector-container"> <span></span> </div>
                               <div class="gem-qf-icon-image-wrapper lazy-loading-item" data-ll-effect="clip">
                                <div class="gem-image"> <span><img alt="" class="attachment-full size-full" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/05/18-18.png" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2022/05/18-18.png 334w, https://dtcforce.com/wp-content/uploads/2022/05/18-18-300x300.png 300w, https://dtcforce.com/wp-content/uploads/2022/05/18-18-150x150.png 150w, https://dtcforce.com/wp-content/uploads/2022/05/18-18-256x256.png 256w, https://dtcforce.com/wp-content/uploads/2022/05/18-18-100x100.png 100w" height="334" id="tgpli-660df3d37087d" sizes="(max-width: 334px) 100vw, 334px" width="334">
                                  <script>
                                   window.tgpQueue.add('tgpli-660df3d37087d')
                                  </script><noscript><img alt="" class="attachment-full size-full" height="334" sizes="(max-width: 334px) 100vw, 334px" src="wp-content/uploads/2022/05/18-18.png" srcset="https://dtcforce.com/wp-content/uploads/2022/05/18-18.png 334w, https://dtcforce.com/wp-content/uploads/2022/05/18-18-300x300.png 300w, https://dtcforce.com/wp-content/uploads/2022/05/18-18-150x150.png 150w, https://dtcforce.com/wp-content/uploads/2022/05/18-18-256x256.png 256w, https://dtcforce.com/wp-content/uploads/2022/05/18-18-100x100.png 100w" width="334"></noscript>
                                 </span> </div>
                               </div>
                               <div class="connector-container"> <span></span> </div>
                              </div>
                              <div class="quickfinder-item-info-wrapper">
                               <div class="quickfinder-item-info lazy-loading-item" data-ll-effect="fading" data-ll-item-delay="200">
                                <h4 class="quickfinder-title title-h4 bold">Dumsptr Xpress</h4>
                                <div class="quickfinder-description gem-text-output">
                                 <p><span style="font-weight: 400;">Built and configured the Salesforce Sales Cloud to optimize the Lead, Account, Contact and Opportunity processes. Made a unified data structure to make follow-ups easier with their client base.&nbsp;</span></p>
                                </div>
                               </div>
                              </div><a class="quickfinder-item-link" href="case-studies/index.html" rel="nofollow" target="_blank"></a>
                             </div>
                            </div>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-55a8c75 elementor-absolute flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-styledimage" data-element_type="widget" data-id="55a8c75" data-settings="{&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/dtcforce.com\/wp-content\/uploads\/2022\/06\/cloud-04-300x300-1.webp&quot;,&quot;id&quot;:2533,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;_position&quot;:&quot;absolute&quot;,&quot;thegem_interaction_horizontal_scroll&quot;:&quot;yes&quot;,&quot;thegem_interaction_horizontal_scroll_direction&quot;:&quot;negative&quot;,&quot;thegem_interaction_mouse&quot;:&quot;yes&quot;,&quot;thegem_interaction_mouse_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:2,&quot;sizes&quot;:[]},&quot;thegem_elementor_preset&quot;:&quot;default&quot;,&quot;thegem_interaction_horizontal_scroll_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:4,&quot;sizes&quot;:[]},&quot;thegem_interaction_horizontal_scroll_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;thegem_interaction_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="thegem-styledimage.default">
                          <div class="elementor-widget-container">
                           <div class="styled-image-wrapper">
                            <div class="gem-image gem-wrapbox gem-wrapbox-default gem-wrapbox-position-left">
                             <div class="gem-wrapbox-inner"> <img alt="cloud-04-300x300" class="gem-wrapbox-element img-responsive" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="wp-content/uploads/2022/06/cloud-04-300x300-1.webp" id="tgpli-660df3d370888">
                              <script>
                               window.tgpQueue.add('tgpli-660df3d370888')
                              </script><noscript><img alt="cloud-04-300x300" class="gem-wrapbox-element img-responsive" src="wp-content/uploads/2022/06/cloud-04-300x300-1.webp"></noscript>
                             </div>
                            </div>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-6293fe9 elementor-absolute elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-styledimage" data-element_type="widget" data-id="6293fe9" data-settings="{&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/dtcforce.com\/wp-content\/uploads\/2022\/06\/review-star.webp&quot;,&quot;id&quot;:2534,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;_position&quot;:&quot;absolute&quot;,&quot;thegem_interaction_horizontal_scroll&quot;:&quot;yes&quot;,&quot;thegem_interaction_horizontal_scroll_direction&quot;:&quot;negative&quot;,&quot;thegem_interaction_horizontal_scroll_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;thegem_interaction_mouse&quot;:&quot;yes&quot;,&quot;thegem_interaction_mouse_direction&quot;:&quot;negative&quot;,&quot;thegem_interaction_mouse_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.4,&quot;sizes&quot;:[]},&quot;thegem_elementor_preset&quot;:&quot;default&quot;,&quot;thegem_interaction_horizontal_scroll_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;thegem_interaction_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="thegem-styledimage.default">
                          <div class="elementor-widget-container">
                           <div class="styled-image-wrapper">
                            <div class="gem-image gem-wrapbox gem-wrapbox-default gem-wrapbox-position-right">
                             <div class="gem-wrapbox-inner"> <img alt="review-star" class="gem-wrapbox-element img-responsive" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/06/review-star.webp" id="tgpli-660df3d37088e">
                              <script>
                               window.tgpQueue.add('tgpli-660df3d37088e')
                              </script><noscript><img alt="review-star" class="gem-wrapbox-element img-responsive" src="wp-content/uploads/2022/06/review-star.webp"></noscript>
                             </div>
                            </div>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-0a32b66 elementor-absolute e-transform flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-styledimage" data-element_type="widget" data-id="0a32b66" data-settings="{&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/dtcforce.com\/wp-content\/uploads\/2022\/07\/flying-rocket.png&quot;,&quot;id&quot;:2885,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;_position&quot;:&quot;absolute&quot;,&quot;thegem_interaction_horizontal_scroll&quot;:&quot;yes&quot;,&quot;thegem_interaction_horizontal_scroll_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;thegem_interaction_mouse&quot;:&quot;yes&quot;,&quot;thegem_interaction_mouse_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.7,&quot;sizes&quot;:[]},&quot;thegem_elementor_preset&quot;:&quot;default&quot;,&quot;_transform_translateX_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;thegem_interaction_horizontal_scroll_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;thegem_interaction_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="thegem-styledimage.default">
                          <div class="elementor-widget-container">
                           <div class="styled-image-wrapper">
                            <div class="gem-image gem-wrapbox gem-wrapbox-default gem-wrapbox-position-right">
                             <div class="gem-wrapbox-inner"> <img alt="flying-rocket" class="gem-wrapbox-element img-responsive" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/07/flying-rocket.png" id="tgpli-660df3d370894">
                              <script>
                               window.tgpQueue.add('tgpli-660df3d370894')
                              </script><noscript><img alt="flying-rocket" class="gem-wrapbox-element img-responsive" src="wp-content/uploads/2022/07/flying-rocket.png"></noscript>
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
                   </section>
                  </div>
                 </div>
                </div>
               </div>
              </div>
             </section>
             <section class="elementor-section elementor-top-section elementor-element elementor-element-0d25953 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="0d25953" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" id="case-studies-sec">
              <div class="elementor-container elementor-column-gap-no">
               <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f334397" data-element_type="column" data-id="f334397">
                 <div class="elementor-column-wrap elementor-element-populated">
                  <div class="elementor-widget-wrap">
                   <div class="elementor-element elementor-element-bd945be flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-element_type="widget" data-id="bd945be" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                     <h2 class="elementor-heading-title elementor-size-default">Case Studies</h2>
                    </div>
                   </div>
                   <section class="elementor-section elementor-inner-section elementor-element elementor-element-f81e228 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="f81e228" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-thegem">
                     <div class="elementor-row">
                      <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-cb98dfc" data-element_type="column" data-id="cb98dfc" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-fc4ac2f elementor-view-default flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-icon" data-element_type="widget" data-id="fc4ac2f" data-widget_type="icon.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-icon-wrapper">
                            <div class="elementor-icon"> <i aria-hidden="true" class="tgh-icon cloud-upload"></i> </div>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-fd61260 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-element_type="widget" data-id="fd61260" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                           <h3 class="elementor-heading-title elementor-size-default">Lorenzo needed a partner to rescue their Salesforce implementation</h3>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-3e5e962 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-element_type="widget" data-id="3e5e962" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-text-editor elementor-clearfix">
                            <p style="text-align: center;">Through the magic of an end-to-end gap analysis and robust implementation; Lorenzo&#8217;s Dog Training Team was able to unlock the true potential of Salesforce.</p>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-9cc9ecb flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-counter" data-element_type="widget" data-id="9cc9ecb" data-widget_type="counter.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-counter">
                            <div class="elementor-counter-number-wrapper"> <span class="elementor-counter-number-prefix"></span> <span class="elementor-counter-number" data-delimiter="" data-duration="2000" data-from-value="0" data-to-value="4">0</span> <span class="elementor-counter-number-suffix">x</span> </div>
                            <div class="elementor-counter-title"> Increase in operational efficiency </div>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-d33281e flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-counter" data-element_type="widget" data-id="d33281e" data-widget_type="counter.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-counter">
                            <div class="elementor-counter-number-wrapper"> <span class="elementor-counter-number-prefix"></span> <span class="elementor-counter-number" data-delimiter="" data-duration="2000" data-from-value="0" data-to-value="3">0</span> <span class="elementor-counter-number-suffix">x</span> </div>
                            <div class="elementor-counter-title"> Increase in dog trainers </div>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-c9a2b85 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-counter" data-element_type="widget" data-id="c9a2b85" data-widget_type="counter.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-counter">
                            <div class="elementor-counter-number-wrapper"> <span class="elementor-counter-number-prefix"></span> <span class="elementor-counter-number" data-delimiter="" data-duration="2000" data-from-value="0" data-to-value="2">0</span> <span class="elementor-counter-number-suffix">x</span> </div>
                            <div class="elementor-counter-title"> Increase in Salesforce utilization </div>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                      <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1ce18c5" data-element_type="column" data-id="1ce18c5" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-45a66ed flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-element_type="widget" data-id="45a66ed" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                           <h3 class="elementor-heading-title elementor-size-default">Lorenzo Dog Training</h3>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-fe0c8bb flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image" data-element_type="widget" data-id="fe0c8bb" data-widget_type="image.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-image"> <img alt="" class="attachment-large size-large" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/06/image_480.webp" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2022/06/image_480.webp 480w, https://dtcforce.com/wp-content/uploads/2022/06/image_480-300x300.webp 300w, https://dtcforce.com/wp-content/uploads/2022/06/image_480-150x150.webp 150w, https://dtcforce.com/wp-content/uploads/2022/06/image_480-256x256.webp 256w" height="480" id="tgpli-660df3d3708a6" sizes="(max-width: 480px) 100vw, 480px" width="480">
                            <script>
                             window.tgpQueue.add('tgpli-660df3d3708a6')
                            </script><noscript><img alt="" class="attachment-large size-large" height="480" sizes="(max-width: 480px) 100vw, 480px" src="wp-content/uploads/2022/06/image_480.webp" srcset="https://dtcforce.com/wp-content/uploads/2022/06/image_480.webp 480w, https://dtcforce.com/wp-content/uploads/2022/06/image_480-300x300.webp 300w, https://dtcforce.com/wp-content/uploads/2022/06/image_480-150x150.webp 150w, https://dtcforce.com/wp-content/uploads/2022/06/image_480-256x256.webp 256w" width="480"></noscript>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </section>
                   <section class="elementor-section elementor-inner-section elementor-element elementor-element-563802f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="563802f">
                    <div class="elementor-container elementor-column-gap-thegem">
                     <div class="elementor-row">
                      <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-30fc7dc" data-element_type="column" data-id="30fc7dc">
                       <div class="elementor-column-wrap">
                        <div class="elementor-widget-wrap"></div>
                       </div>
                      </div>
                      <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-37bb3aa" data-element_type="column" data-id="37bb3aa">
                       <div class="elementor-column-wrap">
                        <div class="elementor-widget-wrap"></div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </section>
                  </div>
                 </div>
                </div>
               </div>
              </div>
             </section>
             <section class="elementor-section elementor-top-section elementor-element elementor-element-33d3001 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="33d3001" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
              <div class="elementor-container elementor-column-gap-no">
               <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c89208b" data-element_type="column" data-id="c89208b">
                 <div class="elementor-column-wrap elementor-element-populated">
                  <div class="elementor-widget-wrap">
                   <section class="elementor-section elementor-inner-section elementor-element elementor-element-340196c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="340196c" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-thegem">
                     <div class="elementor-row">
                      <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-870f43c" data-element_type="column" data-id="870f43c" data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;animation_delay&quot;:0}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-78f97c2 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-element_type="widget" data-id="78f97c2" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:0}" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                           <h2 class="elementor-heading-title elementor-size-default">Hear it straight from our clients</h2>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-b5283aa animated-fast flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-testimonials" data-element_type="widget" data-id="b5283aa" data-settings="{&quot;thegem_elementor_preset&quot;:&quot;style2&quot;,&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:0,&quot;content_testimonials_cat&quot;:&quot;all&quot;,&quot;content_elems_img&quot;:&quot;yes&quot;,&quot;content_elems_name&quot;:&quot;yes&quot;,&quot;content_elems_position&quot;:&quot;yes&quot;,&quot;content_elems_company&quot;:&quot;yes&quot;,&quot;content_elems_quote&quot;:&quot;yes&quot;}" data-widget_type="thegem-testimonials.default">
                          <div class="elementor-widget-container">
                           <div class="preloader">
                            <div class="preloader-spin"></div>
                           </div>
                           <div class="style2 gem-testimonials">
                            <style>
                             .gem-testimonials-navigation{display: block;}
                            </style>
                            <div class="gem-testimonial-item post-368 thegem_testimonial type-thegem_testimonial status-publish has-post-thumbnail" id="post-368"> <a href="#" target="_blank">
                              <div class="gem-testimonial-wrapper">
                               <div class="gem-testimonial-image"> <span><img alt="" class="img-responsive img-circle wp-post-image" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2020/11/image_720-1.webp" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2020/11/image_720-1-thegem-testimonial.webp 2x" height="80" id="tgpli-660df3d3708b6" sizes="100vw" width="80">
                                 <script>
                                  window.tgpQueue.add('tgpli-660df3d3708b6')
                                 </script><noscript><img alt="" class="img-responsive img-circle wp-post-image" height="80" sizes="100vw" src="wp-content/uploads/2020/11/image_720-1.webp" srcset="https://dtcforce.com/wp-content/uploads/2020/11/image_720-1-thegem-testimonial.webp 2x" width="80"></noscript>
                                </span> </div>
                               <div class="gem-testimonial-content">
                                <div class="gem-testimonial-name title-h6"> Will May </div>
                                <div class="gem-testimonial-position"> Noble Gas Solutions </div>
                                <div class="gem-testimonial-text">
                                 <p><em>“DTC did great work, they felt like part of our company while we were working on the project. They scoped everything out and really helped us step back and see the 50,000-foot view, and then zoom in on implementation. We could not be happier with the results of our project. We would recommend them to anyone for highly skilled customer-focused assistance with Salesforce implementations.”</em></p>
                                </div>
                               </div>
                              </div>
                             </a> </div>
                            <div class="gem-testimonial-item post-1652 thegem_testimonial type-thegem_testimonial status-publish has-post-thumbnail" id="post-1652"> <a href="#" target="_blank">
                              <div class="gem-testimonial-wrapper">
                               <div class="gem-testimonial-image"> <span><img alt="" class="img-responsive img-circle wp-post-image" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2020/11/cassandra-lynn-1.webp" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2020/11/cassandra-lynn-1-thegem-testimonial.webp 2x" height="80" id="tgpli-660df3d3708cd" sizes="100vw" width="80">
                                 <script>
                                  window.tgpQueue.add('tgpli-660df3d3708cd')
                                 </script><noscript><img alt="" class="img-responsive img-circle wp-post-image" height="80" sizes="100vw" src="wp-content/uploads/2020/11/cassandra-lynn-1.webp" srcset="https://dtcforce.com/wp-content/uploads/2020/11/cassandra-lynn-1-thegem-testimonial.webp 2x" width="80"></noscript>
                                </span> </div>
                               <div class="gem-testimonial-content">
                                <div class="gem-testimonial-name title-h6"> Jes Stumpf </div>
                                <div class="gem-testimonial-company"> Vermont Surrogacy </div>
                                <div class="gem-testimonial-text">
                                 <p><em>“<span id="AppxConsultingListingDetail:AppxLayout:j_id1480"><span class="appx-reviews-2">I had worked on a Salesforce build with another company, who did not complete the project and left it in an unusable state of disarray. DTCForce took on the project, revamped it and completed it with great knowledge and efficiency. I have</span></span><span id="AppxConsultingListingDetail:AppxLayout:j_id1480"><span class="appx-reviews-2">&nbsp;worked</span></span><span id="AppxConsultingListingDetail:AppxLayout:j_id1480"></span><span id="AppxConsultingListingDetail:AppxLayout:j_id1480"><span class="appx-reviews-2">&nbsp;with them to make further improvements and plan to under go another major project with them in the New Year</span></span>.”</em></p>
                                </div>
                               </div>
                              </div>
                             </a> </div>
                            <div class="gem-testimonial-item post-1782 thegem_testimonial type-thegem_testimonial status-publish has-post-thumbnail" id="post-1782">
                             <div class="gem-testimonial-wrapper">
                              <div class="gem-testimonial-image"> <span><img alt="" class="img-responsive img-circle wp-post-image" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/andy-lazarkis.jpg" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2022/04/andy-lazarkis-thegem-testimonial.jpg 2x" height="600" id="tgpli-660df3d3708d7" sizes="100vw" width="600">
                                <script>
                                 window.tgpQueue.add('tgpli-660df3d3708d7')
                                </script><noscript><img alt="" class="img-responsive img-circle wp-post-image" height="600" sizes="100vw" src="wp-content/uploads/2022/04/andy-lazarkis.jpg" srcset="https://dtcforce.com/wp-content/uploads/2022/04/andy-lazarkis-thegem-testimonial.jpg 2x" width="600"></noscript>
                               </span> </div>
                              <div class="gem-testimonial-content">
                               <div class="gem-testimonial-name title-h6"> Andy Lazarakis </div>
                               <div class="gem-testimonial-company"> Siteworks </div>
                               <div class="gem-testimonial-text">
                                <p><em>“Jawad Nasser and Jack Grewal were excellent. They helped us to stay on schedule, were flexible in meeting with us when needed, and responsive to our needs for assistance. Excellent process, would both choose them again and recommend them to others.”</em></p>
                               </div>
                              </div>
                             </div>
                            </div>
                            <div class="gem-testimonial-item post-4096 thegem_testimonial type-thegem_testimonial status-publish has-post-thumbnail" id="post-4096">
                             <div class="gem-testimonial-wrapper">
                              <div class="gem-testimonial-image"> <span><img alt="" class="img-responsive img-circle wp-post-image" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/11/Image-empty-state.webp" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2022/11/Image-empty-state-thegem-testimonial.webp 2x" height="392" id="tgpli-660df3d3708e0" sizes="100vw" width="392">
                                <script>
                                 window.tgpQueue.add('tgpli-660df3d3708e0')
                                </script><noscript><img alt="" class="img-responsive img-circle wp-post-image" height="392" sizes="100vw" src="wp-content/uploads/2022/11/Image-empty-state.webp" srcset="https://dtcforce.com/wp-content/uploads/2022/11/Image-empty-state-thegem-testimonial.webp 2x" width="392"></noscript>
                               </span> </div>
                              <div class="gem-testimonial-content">
                               <div class="gem-testimonial-name title-h6"> Sam Baker </div>
                               <div class="gem-testimonial-company"> United States Asset Recovery </div>
                               <div class="gem-testimonial-text">
                                <p><em>&#8220;As far as efficiency, flexibility, and overall project evaluation: you all have been excellent business partners and we have had nothing but a good experience. We&#8217;re more than satisfied with all your&#8217;s efforts.&#8221;</em></p>
                               </div>
                              </div>
                             </div>
                            </div>
                            <div class="testimonials_svg"> <svg height="50" width="100">
                              <path d="M 0,-1 Q 45,5 50,50 Q 55,5 100,-1"></path>
                             </svg> </div>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </section>
                   <div class="elementor-element elementor-element-55cb72f elementor-absolute flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-styledimage" data-element_type="widget" data-id="55cb72f" data-settings="{&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/dtcforce.com\/wp-content\/uploads\/2020\/12\/24.png&quot;,&quot;id&quot;:&quot;1636&quot;},&quot;_position&quot;:&quot;absolute&quot;,&quot;thegem_interaction_vertical_scroll&quot;:&quot;yes&quot;,&quot;thegem_interaction_vertical_scroll_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3,&quot;sizes&quot;:[]},&quot;thegem_elementor_preset&quot;:&quot;default&quot;,&quot;thegem_interaction_vertical_scroll_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;thegem_interaction_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="thegem-styledimage.default">
                    <div class="elementor-widget-container">
                     <div class="styled-image-wrapper">
                      <div class="gem-image gem-wrapbox gem-wrapbox-default gem-wrapbox-position-right">
                       <div class="gem-wrapbox-inner"> <img alt="24 (Demo)" class="gem-wrapbox-element img-responsive" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2020/12/24.png" id="tgpli-660df3d3708e9">
                        <script>
                         window.tgpQueue.add('tgpli-660df3d3708e9')
                        </script><noscript><img alt="24 (Demo)" class="gem-wrapbox-element img-responsive" src="wp-content/uploads/2020/12/24.png"></noscript>
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
             </section>
             <section class="elementor-section elementor-top-section elementor-element elementor-element-8d1bb81 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="8d1bb81">
              <div class="elementor-container elementor-column-gap-thegem">
               <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a364064" data-element_type="column" data-id="a364064">
                 <div class="elementor-column-wrap elementor-element-populated">
                  <div class="elementor-widget-wrap"></div>
                 </div>
                </div>
               </div>
              </div>
             </section>
             <section class="elementor-section elementor-top-section elementor-element elementor-element-03c10a4 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="03c10a4" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
              <div class="elementor-container elementor-column-gap-thegem">
               <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-604e78d" data-element_type="column" data-id="604e78d">
                 <div class="elementor-column-wrap elementor-element-populated">
                  <div class="elementor-widget-wrap">
                   <section class="elementor-section elementor-inner-section elementor-element elementor-element-95e21b0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="95e21b0" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-thegem">
                     <div class="elementor-row">
                      <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-8f8cab6" data-element_type="column" data-id="8f8cab6">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-49e8fc0 elementor-widget__width-auto animated-fast flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-element_type="widget" data-id="49e8fc0" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:0,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="heading.default" id="blog">
                          <div class="elementor-widget-container">
                           <div class="title-h2 elementor-heading-title elementor-size-default"> Latest from our </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-7f4fd59 green_line elementor-widget__width-auto flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="7f4fd59" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:300,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                           <div class="title-h2 elementor-heading-title elementor-size-default"> Blog </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </section>
                   <section class="elementor-section elementor-inner-section elementor-element elementor-element-23da417 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="23da417" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-thegem">
                     <div class="elementor-row">
                      <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3bfcdb0" data-element_type="column" data-id="3bfcdb0">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-1eb02b9 elementor-position-top elementor-vertical-align-top flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image-box" data-element_type="widget" data-id="1eb02b9" data-widget_type="image-box.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-image-box-wrapper">
                            <figure class="elementor-image-box-img"> <a href="investinoutplanet-increase-focus-on-embracing-digital-transformation-and-building-sustainable-businesses/index.html"><img alt="" class="attachment-full size-full" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/earthday-1.jpg" height="1071" id="tgpli-660df3d3708f4" width="1920">
                              <script>
                               window.tgpQueue.add('tgpli-660df3d3708f4')
                              </script><noscript><img alt="" class="attachment-full size-full" height="1071" src="wp-content/uploads/2022/04/earthday-1.jpg" width="1920"></noscript>
                             </a> </figure>
                            <div class="elementor-image-box-content">
                             <h3 class="elementor-image-box-title"><a href="investinoutplanet-increase-focus-on-embracing-digital-transformation-and-building-sustainable-businesses/index.html">Increase focus on embracing digital transformation and building sustainable businesses.</a></h3>
                             <p class="elementor-image-box-description">We don't want to be just part of the conversation but to become part of the movement. Sustainable thought and action can pioneer the kind of change that improves our livelihood not just for us but also for generations to come.</p>
                            </div>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                      <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-67ca830" data-element_type="column" data-id="67ca830">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-aeed96c flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-extended-blog-grid" data-element_type="widget" data-id="aeed96c" data-settings="{&quot;categories&quot;:[&quot;0&quot;],&quot;hide_filters_sorting&quot;:&quot;yes&quot;,&quot;thegem_elementor_preset&quot;:&quot;default&quot;,&quot;order_by&quot;:&quot;default&quot;,&quot;order&quot;:&quot;default&quot;,&quot;blog_show_featured_image&quot;:&quot;yes&quot;,&quot;blog_show_title&quot;:&quot;yes&quot;}" data-widget_type="thegem-extended-blog-grid.default">
                          <div class="elementor-widget-container">
                           <div class="preloader save-space">
                            <div class="preloader-spin"></div>
                           </div>
                           <div class="portfolio-preloader-wrapper">
                            <div class="portfolio portfolio-grid news-grid no-padding portfolio-pagination- portfolio-style-masonry background-style-transparent hover-default title-on-page version-default columns-tablet- columns-mobile- hover-default portfolio-items-masonry columns-2" data-current-page="1" data-hover="default" data-next-page="2" data-pages-count="11" data-per-page="4" data-portfolio-filter="" data-portfolio-uid="aeed96c" data-style-uid="aeed96c">
                             <div class="portfolio-row-outer">
                              <div class="row portfolio-row">
                               <div class="portfolio-set clearfix" data-max-row-height="">
                                <div class="portfolio-item crm col-sm-6 col-xs-12 post-hide-categories post-hide-date show-caption-border post-has-author post-10677 post type-post status-publish format-standard has-post-thumbnail category-crm" data-default-sort="0" data-sort-date="1710398940" style="padding: calc(20px/2)">
                                 <div class="wrap clearfix">
                                  <div class="image post-10677 post type-post status-publish format-standard has-post-thumbnail category-crm">
                                   <div class="image-inner">
                                    <div class="post-featured-content"> <a href="the-complete-guide-to-crm-transforming-businesses-from-startups-to-enterprises/index.html">
                                      <picture><img alt="businessman-holding-digital-tablet-success-cityscape-generated-by-ai" class="img-responsive" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2024/03/businessman-holding-digital-tablet-success-cityscape-generated-by-ai-scaled-thegem-portfolio-masonry.jpg" height="430" id="tgpli-660df3d3708ff" width="754">
                                       <script>
                                        window.tgpQueue.add('tgpli-660df3d3708ff', { sources: '<source srcset="https://dtcforce.com/wp-content/uploads/2024/03/businessman-holding-digital-tablet-success-cityscape-generated-by-ai-scaled-thegem-portfolio-masonry-2x-500.jpg 1x, https://dtcforce.com/wp-content/uploads/2024/03/businessman-holding-digital-tablet-success-cityscape-generated-by-ai-scaled-thegem-portfolio-masonry-double.jpg 2x" media="(max-width: 550px)" sizes="100vw"> <source srcset="https://dtcforce.com/wp-content/uploads/2024/03/businessman-holding-digital-tablet-success-cityscape-generated-by-ai-scaled-thegem-portfolio-masonry-2x.jpg 1x, https://dtcforce.com/wp-content/uploads/2024/03/businessman-holding-digital-tablet-success-cityscape-generated-by-ai-scaled-thegem-portfolio-masonry-double.jpg 2x" media="(max-width: 1920px)" sizes="100vw"> ' })
                                       </script><noscript>
                                        <source media="(max-width: 550px)" srcset="https://dtcforce.com/wp-content/uploads/2024/03/businessman-holding-digital-tablet-success-cityscape-generated-by-ai-scaled-thegem-portfolio-masonry-2x-500.jpg 1x, https://dtcforce.com/wp-content/uploads/2024/03/businessman-holding-digital-tablet-success-cityscape-generated-by-ai-scaled-thegem-portfolio-masonry-double.jpg 2x">
                                        <source media="(max-width: 1920px)" srcset="https://dtcforce.com/wp-content/uploads/2024/03/businessman-holding-digital-tablet-success-cityscape-generated-by-ai-scaled-thegem-portfolio-masonry-2x.jpg 1x, https://dtcforce.com/wp-content/uploads/2024/03/businessman-holding-digital-tablet-success-cityscape-generated-by-ai-scaled-thegem-portfolio-masonry-double.jpg 2x"> <img alt="businessman-holding-digital-tablet-success-cityscape-generated-by-ai" class="img-responsive" height="430" src="wp-content/uploads/2024/03/businessman-holding-digital-tablet-success-cityscape-generated-by-ai-scaled-thegem-portfolio-masonry.jpg" width="754">
                                       </noscript>
                                      </picture>
                                     </a> </div>
                                   </div>
                                   <div class="overlay">
                                    <div class="overlay-circle"></div>
                                    <div class="links-wrapper">
                                     <div class="links">
                                      <div class="caption"> <a class="portfolio-item-link" href="the-complete-guide-to-crm-transforming-businesses-from-startups-to-enterprises/index.html"></a>
                                       <div class="description"></div>
                                       <div class="post-author-outer"></div>
                                      </div>
                                     </div>
                                    </div>
                                   </div>
                                  </div>
                                  <div class="caption post-10677 post type-post status-publish format-standard has-post-thumbnail category-crm">
                                   <div class="title">
                                    <div class="title-h6"> <a href="the-complete-guide-to-crm-transforming-businesses-from-startups-to-enterprises/index.html" rel="bookmark">The Complete Guide to CRM: Transforming Businesses from Startups to Enterprises</a> </div>
                                   </div>
                                  </div>
                                 </div>
                                </div>
                                <div class="portfolio-item salesforce col-sm-6 col-xs-12 post-hide-categories post-hide-date show-caption-border post-has-author post-9945 post type-post status-publish format-standard has-post-thumbnail category-salesforce" data-default-sort="0" data-sort-date="1707472661" style="padding: calc(20px/2)">
                                 <div class="wrap clearfix">
                                  <div class="image post-9945 post type-post status-publish format-standard has-post-thumbnail category-salesforce">
                                   <div class="image-inner">
                                    <div class="post-featured-content"> <a href="dtcforce-salesforce-summit-partner-status/index.html">
                                      <picture><img alt="Salesforce Summit Partner Status for DTC Force" class="img-responsive" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2024/02/4-thegem-portfolio-masonry.jpg" height="418" id="tgpli-660df3d370910" width="754">
                                       <script>
                                        window.tgpQueue.add('tgpli-660df3d370910', { sources: '<source srcset="https://dtcforce.com/wp-content/uploads/2024/02/4-thegem-portfolio-masonry-2x-500.jpg 1x, https://dtcforce.com/wp-content/uploads/2024/02/4-thegem-portfolio-masonry-double.jpg 2x" media="(max-width: 550px)" sizes="100vw"> <source srcset="https://dtcforce.com/wp-content/uploads/2024/02/4-thegem-portfolio-masonry-2x.jpg 1x, https://dtcforce.com/wp-content/uploads/2024/02/4-thegem-portfolio-masonry-double.jpg 2x" media="(max-width: 1920px)" sizes="100vw"> ' })
                                       </script><noscript>
                                        <source media="(max-width: 550px)" srcset="https://dtcforce.com/wp-content/uploads/2024/02/4-thegem-portfolio-masonry-2x-500.jpg 1x, https://dtcforce.com/wp-content/uploads/2024/02/4-thegem-portfolio-masonry-double.jpg 2x">
                                        <source media="(max-width: 1920px)" srcset="https://dtcforce.com/wp-content/uploads/2024/02/4-thegem-portfolio-masonry-2x.jpg 1x, https://dtcforce.com/wp-content/uploads/2024/02/4-thegem-portfolio-masonry-double.jpg 2x"> <img alt="Salesforce Summit Partner Status for DTC Force" class="img-responsive" height="418" src="wp-content/uploads/2024/02/4-thegem-portfolio-masonry.jpg" width="754">
                                       </noscript>
                                      </picture>
                                     </a> </div>
                                   </div>
                                   <div class="overlay">
                                    <div class="overlay-circle"></div>
                                    <div class="links-wrapper">
                                     <div class="links">
                                      <div class="caption"> <a class="portfolio-item-link" href="dtcforce-salesforce-summit-partner-status/index.html"></a>
                                       <div class="description"></div>
                                       <div class="post-author-outer"></div>
                                      </div>
                                     </div>
                                    </div>
                                   </div>
                                  </div>
                                  <div class="caption post-9945 post type-post status-publish format-standard has-post-thumbnail category-salesforce">
                                   <div class="title">
                                    <div class="title-h6"> <a href="dtcforce-salesforce-summit-partner-status/index.html" rel="bookmark">DTC Force ascends to Salesforce Summit Partner Level</a> </div>
                                   </div>
                                  </div>
                                 </div>
                                </div>
                                <div class="portfolio-item salesforce col-sm-6 col-xs-12 post-hide-categories post-hide-date show-caption-border post-has-author post-7542 post type-post status-publish format-standard has-post-thumbnail category-salesforce" data-default-sort="0" data-sort-date="1698309585" style="padding: calc(20px/2)">
                                 <div class="wrap clearfix">
                                  <div class="image post-7542 post type-post status-publish format-standard has-post-thumbnail category-salesforce">
                                   <div class="image-inner">
                                    <div class="post-featured-content"> <a href="dtc-force-climbs-to-crest-a-new-milestone-in-salesforce-partnership/index.html">
                                      <picture><img alt="DTC Force Elevates to &#039;Crest&#039; Level Partnership with Salesforce-01" class="img-responsive" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2023/10/DTC-Force-Elevates-to-Crest-Level-Partnership-with-Salesforce-01-scaled-thegem-portfolio-masonry.jpg" height="418" id="tgpli-660df3d37091e" width="754">
                                       <script>
                                        window.tgpQueue.add('tgpli-660df3d37091e', { sources: '<source srcset="https://dtcforce.com/wp-content/uploads/2023/10/DTC-Force-Elevates-to-Crest-Level-Partnership-with-Salesforce-01-scaled-thegem-portfolio-masonry-2x-500.jpg 1x, https://dtcforce.com/wp-content/uploads/2023/10/DTC-Force-Elevates-to-Crest-Level-Partnership-with-Salesforce-01-scaled-thegem-portfolio-masonry-double.jpg 2x" media="(max-width: 550px)" sizes="100vw"> <source srcset="https://dtcforce.com/wp-content/uploads/2023/10/DTC-Force-Elevates-to-Crest-Level-Partnership-with-Salesforce-01-scaled-thegem-portfolio-masonry-2x.jpg 1x, https://dtcforce.com/wp-content/uploads/2023/10/DTC-Force-Elevates-to-Crest-Level-Partnership-with-Salesforce-01-scaled-thegem-portfolio-masonry-double.jpg 2x" media="(max-width: 1920px)" sizes="100vw"> ' })
                                       </script><noscript>
                                        <source media="(max-width: 550px)" srcset="https://dtcforce.com/wp-content/uploads/2023/10/DTC-Force-Elevates-to-Crest-Level-Partnership-with-Salesforce-01-scaled-thegem-portfolio-masonry-2x-500.jpg 1x, https://dtcforce.com/wp-content/uploads/2023/10/DTC-Force-Elevates-to-Crest-Level-Partnership-with-Salesforce-01-scaled-thegem-portfolio-masonry-double.jpg 2x">
                                        <source media="(max-width: 1920px)" srcset="https://dtcforce.com/wp-content/uploads/2023/10/DTC-Force-Elevates-to-Crest-Level-Partnership-with-Salesforce-01-scaled-thegem-portfolio-masonry-2x.jpg 1x, https://dtcforce.com/wp-content/uploads/2023/10/DTC-Force-Elevates-to-Crest-Level-Partnership-with-Salesforce-01-scaled-thegem-portfolio-masonry-double.jpg 2x"> <img alt="DTC Force Elevates to &#039;Crest&#039; Level Partnership with Salesforce-01" class="img-responsive" height="418" src="wp-content/uploads/2023/10/DTC-Force-Elevates-to-Crest-Level-Partnership-with-Salesforce-01-scaled-thegem-portfolio-masonry.jpg" width="754">
                                       </noscript>
                                      </picture>
                                     </a> </div>
                                   </div>
                                   <div class="overlay">
                                    <div class="overlay-circle"></div>
                                    <div class="links-wrapper">
                                     <div class="links">
                                      <div class="caption"> <a class="portfolio-item-link" href="dtc-force-climbs-to-crest-a-new-milestone-in-salesforce-partnership/index.html"></a>
                                       <div class="description"></div>
                                       <div class="post-author-outer"></div>
                                      </div>
                                     </div>
                                    </div>
                                   </div>
                                  </div>
                                  <div class="caption post-7542 post type-post status-publish format-standard has-post-thumbnail category-salesforce">
                                   <div class="title">
                                    <div class="title-h6"> <a href="dtc-force-climbs-to-crest-a-new-milestone-in-salesforce-partnership/index.html" rel="bookmark">DTC Force Climbs to &#8216;Crest&#8217; &#8211; A New Milestone in Salesforce Partnership!</a> </div>
                                   </div>
                                  </div>
                                 </div>
                                </div>
                                <div class="portfolio-item salesforce col-sm-6 col-xs-12 post-hide-categories post-hide-date show-caption-border post-has-author post-7270 post type-post status-publish format-standard has-post-thumbnail category-salesforce" data-default-sort="0" data-sort-date="1693837027" style="padding: calc(20px/2)">
                                 <div class="wrap clearfix">
                                  <div class="image post-7270 post type-post status-publish format-standard has-post-thumbnail category-salesforce">
                                   <div class="image-inner">
                                    <div class="post-featured-content"> <a href="delivering-exceptional-client-experiences-with-salesforce-in-professional-services/index.html">
                                      <picture><img alt="Delivering Exceptional Client Experiences with Salesforce in Professional Services-01" class="img-responsive" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2023/09/Delivering-Exceptional-Client-Experiences-with-Salesforce-in-Professional-Services-01-scaled-thegem-portfolio-masonry.jpg" height="418" id="tgpli-660df3d37092d" width="754">
                                       <script>
                                        window.tgpQueue.add('tgpli-660df3d37092d', { sources: '<source srcset="https://dtcforce.com/wp-content/uploads/2023/09/Delivering-Exceptional-Client-Experiences-with-Salesforce-in-Professional-Services-01-scaled-thegem-portfolio-masonry-2x-500.jpg 1x, https://dtcforce.com/wp-content/uploads/2023/09/Delivering-Exceptional-Client-Experiences-with-Salesforce-in-Professional-Services-01-scaled-thegem-portfolio-masonry-double.jpg 2x" media="(max-width: 550px)" sizes="100vw"> <source srcset="https://dtcforce.com/wp-content/uploads/2023/09/Delivering-Exceptional-Client-Experiences-with-Salesforce-in-Professional-Services-01-scaled-thegem-portfolio-masonry-2x.jpg 1x, https://dtcforce.com/wp-content/uploads/2023/09/Delivering-Exceptional-Client-Experiences-with-Salesforce-in-Professional-Services-01-scaled-thegem-portfolio-masonry-double.jpg 2x" media="(max-width: 1920px)" sizes="100vw"> ' })
                                       </script><noscript>
                                        <source media="(max-width: 550px)" srcset="https://dtcforce.com/wp-content/uploads/2023/09/Delivering-Exceptional-Client-Experiences-with-Salesforce-in-Professional-Services-01-scaled-thegem-portfolio-masonry-2x-500.jpg 1x, https://dtcforce.com/wp-content/uploads/2023/09/Delivering-Exceptional-Client-Experiences-with-Salesforce-in-Professional-Services-01-scaled-thegem-portfolio-masonry-double.jpg 2x">
                                        <source media="(max-width: 1920px)" srcset="https://dtcforce.com/wp-content/uploads/2023/09/Delivering-Exceptional-Client-Experiences-with-Salesforce-in-Professional-Services-01-scaled-thegem-portfolio-masonry-2x.jpg 1x, https://dtcforce.com/wp-content/uploads/2023/09/Delivering-Exceptional-Client-Experiences-with-Salesforce-in-Professional-Services-01-scaled-thegem-portfolio-masonry-double.jpg 2x"> <img alt="Delivering Exceptional Client Experiences with Salesforce in Professional Services-01" class="img-responsive" height="418" src="wp-content/uploads/2023/09/Delivering-Exceptional-Client-Experiences-with-Salesforce-in-Professional-Services-01-scaled-thegem-portfolio-masonry.jpg" width="754">
                                       </noscript>
                                      </picture>
                                     </a> </div>
                                   </div>
                                   <div class="overlay">
                                    <div class="overlay-circle"></div>
                                    <div class="links-wrapper">
                                     <div class="links">
                                      <div class="caption"> <a class="portfolio-item-link" href="delivering-exceptional-client-experiences-with-salesforce-in-professional-services/index.html"></a>
                                       <div class="description"></div>
                                       <div class="post-author-outer"></div>
                                      </div>
                                     </div>
                                    </div>
                                   </div>
                                  </div>
                                  <div class="caption post-7270 post type-post status-publish format-standard has-post-thumbnail category-salesforce">
                                   <div class="title">
                                    <div class="title-h6"> <a href="delivering-exceptional-client-experiences-with-salesforce-in-professional-services/index.html" rel="bookmark">Delivering Exceptional Client Experiences with Salesforce in Professional Services</a> </div>
                                   </div>
                                  </div>
                                 </div>
                                </div>
                               </div><!-- .portflio-set -->
                               <div class="portfolio-item-size-container">
                                <div class="portfolio-item col-sm-6 col-xs-12 post-hide-categories post-hide-date show-caption-border post-has-author post-7270 post type-post status-publish format-standard has-post-thumbnail category-salesforce"></div>
                               </div>
                              </div><!-- .row-->
                             </div><!-- .full-width -->
                            </div><!-- .portfolio-->
                           </div><!-- .portfolio-preloader-wrapper-->
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </section>
                  </div>
                 </div>
                </div>
               </div>
              </div>
             </section>
             <section class="elementor-section elementor-top-section elementor-element elementor-element-7ff75093 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="7ff75093" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
              <div class="elementor-container elementor-column-gap-no">
               <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4a41e41c" data-element_type="column" data-id="4a41e41c">
                 <div class="elementor-column-wrap elementor-element-populated">
                  <div class="elementor-widget-wrap">
                   <div class="elementor-element elementor-element-70c10f2f elementor-absolute elementor-hidden-phone elementor-hidden-tablet flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-styledimage" data-element_type="widget" data-id="70c10f2f" data-settings="{&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/dtcforce.com\/wp-content\/uploads\/2022\/04\/cloud-back-2.png&quot;,&quot;id&quot;:1752,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;_position&quot;:&quot;absolute&quot;,&quot;thegem_interaction_vertical_scroll&quot;:&quot;yes&quot;,&quot;thegem_interaction_vertical_scroll_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3,&quot;sizes&quot;:[]},&quot;thegem_elementor_preset&quot;:&quot;default&quot;,&quot;thegem_interaction_vertical_scroll_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;thegem_interaction_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="thegem-styledimage.default">
                    <div class="elementor-widget-container">
                     <div class="styled-image-wrapper">
                      <div class="gem-image gem-wrapbox gem-wrapbox-default gem-wrapbox-position-right">
                       <div class="gem-wrapbox-inner"> <img alt="cloud-back-2" class="gem-wrapbox-element img-responsive" data-tgpli-image-inited="" data-tgpli-inited="" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/cloud-back-2.png" id="tgpli-660df3d37093d">
                        <script>
                         window.tgpQueue.add('tgpli-660df3d37093d')
                        </script><noscript><img alt="cloud-back-2" class="gem-wrapbox-element img-responsive" src="wp-content/uploads/2022/04/cloud-back-2.png"></noscript>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                   <section class="elementor-section elementor-inner-section elementor-element elementor-element-a2cef1c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="a2cef1c" id="contact">
                    <div class="elementor-container elementor-column-gap-thegem">
                     <div class="elementor-row">
                      <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-52f5f090" data-element_type="column" data-id="52f5f090" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-4453abf2 elementor-widget__width-auto flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-element_type="widget" data-id="4453abf2" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:300}" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                           <div class="title-h2 elementor-heading-title elementor-size-default"> Let's get started. </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-5f386715 elementor-widget__width-initial flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-element_type="widget" data-id="5f386715" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:500}" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-text-editor elementor-clearfix">
                            <div class="elementor-element elementor-element-02b06b2 elementor-widget__width-initial flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor animated fadeIn" data-element_type="widget" data-id="02b06b2" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:500}" data-widget_type="text-editor.default">
                             <div class="elementor-widget-container">
                              <div class="elementor-text-editor elementor-clearfix">
                               <p>Get in touch with our team of experts today!</p>
                              </div>
                             </div>
                            </div>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-12db563f flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-contact-form7" data-element_type="widget" data-id="12db563f" data-settings="{&quot;thegem_elementor_preset&quot;:&quot;white&quot;,&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:700,&quot;thegem_custom_css&quot;:&quot;.wpcf7 form .wpcf7-response-output {\n border: none !important;\n}&quot;}" data-widget_type="thegem-contact-form7.default">
                          <div class="elementor-widget-container">
                           <div class="wpcf7 no-js" dir="ltr" id="wpcf7-f1646-p3159-o1" lang="en-US">
                            <div class="screen-reader-response">
                             <p aria-atomic="true" aria-live="polite" role="status"></p>
                             <ul></ul>
                            </div>
                            <form action="https://dtcforce.com/#wpcf7-f1646-p3159-o1" aria-label="Contact form" class="wpcf7-form init thegem-cf7 gem-contact-form-white form-12db563f label-top" data-status="init" method="post" novalidate="novalidate">
                             <div style="display: none;"> <input name="_wpcf7" type="hidden" value="1646"> <input name="_wpcf7_version" type="hidden" value="5.7"> <input name="_wpcf7_locale" type="hidden" value="en_US"> <input name="_wpcf7_unit_tag" type="hidden" value="wpcf7-f1646-p3159-o1"> <input name="_wpcf7_container_post" type="hidden" value="3159"> <input name="_wpcf7_posted_data_hash" type="hidden" value=""> </div>
                             <style>
                              .wpcf7-form-control-wrap {
                              margin-bottom: 20px !important; 
                              }
                             </style>
                             <p><br> <span class="wpcf7-form-control-wrap" data-name="your-name"><input aria-invalid="false" aria-required="true" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" name="your-name" placeholder="Name*" size="40" type="text" value=""></span><br> <span class="wpcf7-form-control-wrap" data-name="your-email"><input aria-invalid="false" aria-required="true" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" name="your-email" placeholder="Email*" size="40" type="email" value=""></span><br> <span class="wpcf7-form-control-wrap" data-name="tel-27"><input aria-invalid="false" aria-required="true" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" name="tel-27" placeholder="Phone Number*" size="40" type="tel" value=""></span><br> <span class="wpcf7-form-control-wrap" data-name="menu-964"><select aria-invalid="false" class="wpcf7-form-control wpcf7-select" name="menu-964">
                                <option value="Industry"> Industry </option>
                                <option value="Agriculture"> Agriculture </option>
                                <option value="Business Services"> Business Services </option>
                                <option value="Construction &amp; Engineering"> Construction &amp; Engineering </option>
                                <option value="Consumer Services"> Consumer Services </option>
                                <option value="Education"> Education </option>
                                <option value="Energy, Utilities &amp; Waste"> Energy, Utilities &amp; Waste </option>
                                <option value="Finance"> Finance </option>
                                <option value="Government"> Government </option>
                                <option value="Healthcare &amp; Life Sciences"> Healthcare &amp; Life Sciences </option>
                                <option value="Hi-Tech"> Hi-Tech </option>
                                <option value="Holding Companies &amp; Conglomerates"> Holding Companies &amp; Conglomerates </option>
                                <option value="Hospitality"> Hospitality </option>
                                <option value="Hospitals &amp; Physicians Clinics"> Hospitals &amp; Physicians Clinics </option>
                                <option value="Insurance"> Insurance </option>
                                <option value="Law Firms &amp; Legal Services"> Law Firms &amp; Legal Services </option>
                                <option value="Manufacturing"> Manufacturing </option>
                                <option value="Media &amp; Internet"> Media &amp; Internet </option>
                                <option value="Minerals &amp; Mining"> Minerals &amp; Mining </option>
                                <option value="Organizations"> Organizations </option>
                                <option value="Real Estate"> Real Estate </option>
                                <option value="Retail"> Retail </option>
                                <option value="Software"> Software </option>
                                <option value="Telecommunications"> Telecommunications </option>
                                <option value="Transportation"> Transportation </option>
                                <option value="Other"> Other </option>
                               </select></span><br> <span class="wpcf7-form-control-wrap" data-name="menu-895"><select aria-invalid="false" aria-required="true" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" name="menu-895">
                                <option value="Marketing Cloud"> Marketing Cloud </option>
                                <option value="Sales Cloud"> Sales Cloud </option>
                                <option value="Experience Cloud"> Experience Cloud </option>
                                <option value="Service Cloud"> Service Cloud </option>
                                <option value="FSL"> FSL </option>
                                <option value="CPQ"> CPQ </option>
                                <option value="Pardot"> Pardot </option>
                                <option value="Health Cloud"> Health Cloud </option>
                                <option value="Manufacturing Cloud"> Manufacturing Cloud </option>
                                <option value="Other"> Other </option>
                               </select></span><br> <span class="wpcf7-form-control-wrap" data-name="your-message"> <textarea aria-invalid="false" aria-required="true" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" cols="20" name="your-message" placeholder="Message*" rows="2"></textarea></span><br></p>
                             <div class="gem-button-container gem-button-position-left"> <input class="gem-button gem-button-size-medium gem-button-style-outline gem-button-text-weight-normal gem-button-border-2 gem-button-no-uppercase wpcf7-form-control has-spinner wpcf7-submit gem-button-wpcf-custom" id="" style="border-radius: 9px;border-color: #4FB9E8FF;color: #4FB9E8FF;" tabindex="" type="submit" value="Send Message"> </div>
                             <p></p>
                             <p style="display: none !important;"><label>&#916; <textarea cols="45" maxlength="100" name="_wpcf7_ak_hp_textarea" rows="8"></textarea></label><input id="ak_js_1" name="_wpcf7_ak_js" type="hidden" value="196">
                              <script>
                               document.getElementById( "ak_js_1" ).setAttribute( "value", ( new Date() ).getTime() );
                              </script>
                             </p>
                             <div aria-hidden="true" class="wpcf7-response-output"></div>
                            </form>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                      <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7ead7a2d" data-element_type="column" data-id="7ead7a2d">
                       <div class="elementor-column-wrap">
                        <div class="elementor-widget-wrap"></div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </section>
                  </div>
                 </div>
                </div>
               </div>
              </div>
             </section>
            </div>
           </div>
          </div>
         </div>
         <div class="container"></div><!-- .container -->
        </div><!-- .entry-content -->
        <div class="container"></div><!-- .container -->
       </article><!-- #post-## -->
      </div>
     </div>
    </div><!-- .block-content -->
   </div><!-- #main-content -->
  </div><!-- #main -->
  <div id="lazy-loading-point"></div>
 <?php include('layouts/footer.php'); ?>
</body>

</html>