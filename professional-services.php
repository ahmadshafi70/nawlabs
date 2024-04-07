<!DOCTYPE html>
<html lang="en-US" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<?php include('layouts/head.php') ?>   

<body class="page-template page-template-page-fullwidth page-template-page-fullwidth-php page page-id-2113 wp-custom-logo ehf-template-thegem-elementor ehf-stylesheet-thegem-elementor fullscreen-search elementor-default elementor-kit-567 elementor-page elementor-page-2113">
 <script type="text/javascript">
  var gemSettings = {"isTouch":"","forcedLasyDisabled":"","tabletPortrait":"1","tabletLandscape":"1","topAreaMobileDisable":"","parallaxDisabled":"","fillTopArea":"","themePath":"https:\/\/dtcforce.com\/wp-content\/themes\/thegem-elementor","rootUrl":"https:\/\/dtcforce.com","mobileEffectsEnabled":"","isRTL":""};
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
 <div id="page" class="layout-fullwidth header-style-2">
  <?php include('layouts/header.php') ?>   
  <div id="main" class="site-main">
   <div id="main-content" class="main-content">
    <div id="page-title" class="page-title-block custom-page-title">
     <div class="fullwidth-content">
      <div data-elementor-type="wp-post" data-elementor-id="1640" class="elementor elementor-1640">
       <div class="elementor-inner">
        <div class="elementor-section-wrap">
         <section class="elementor-section elementor-top-section elementor-element elementor-element-5f05528 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="5f05528" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
          <div class="elementor-container elementor-column-gap-no">
           <div class="elementor-row">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3477863" data-id="3477863" data-element_type="column">
             <div class="elementor-column-wrap elementor-element-populated">
              <div class="elementor-widget-wrap">
               <div class="elementor-element elementor-element-1ea098a elementor-absolute elementor-widget-mobile__width-initial flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-styledimage" data-id="1ea098a" data-element_type="widget" data-settings="{&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/dtcforce.com\/wp-content\/uploads\/2020\/11\/cloud-outline.png&quot;,&quot;id&quot;:1803,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;_position&quot;:&quot;absolute&quot;,&quot;thegem_elementor_preset&quot;:&quot;default&quot;}" data-widget_type="thegem-styledimage.default">
                <div class="elementor-widget-container">
                 <div class="styled-image-wrapper">
                  <div class="gem-image gem-wrapbox gem-wrapbox-default gem-wrapbox-position-right  ">
                   <div class="gem-wrapbox-inner "> <img decoding="async" class="gem-wrapbox-element img-responsive " data-tgpli-src="../wp-content/uploads/2020/11/cloud-outline.png" alt="cloud-outline" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df4012397a">
                    <script>
                     window.tgpQueue.add('tgpli-660df4012397a')
                    </script><noscript><img decoding="async" class="gem-wrapbox-element img-responsive " src="../wp-content/uploads/2020/11/cloud-outline.png" alt="cloud-outline"></noscript>
                   </div>
                  </div>
                 </div>
                </div>
               </div>
               <section class="elementor-section elementor-inner-section elementor-element elementor-element-2828af7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2828af7" data-element_type="section">
                <div class="elementor-container elementor-column-gap-thegem">
                 <div class="elementor-row">
                  <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-256cf8f" data-id="256cf8f" data-element_type="column">
                   <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                     <div class="elementor-element elementor-element-a6e44c2 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-id="a6e44c2" data-element_type="widget" data-widget_type="heading.default">
                      <div class="elementor-widget-container">
                       <div class="title-h1 elementor-heading-title elementor-size-default"> Professional Services</div>
                      </div>
                     </div>
                    </div>
                   </div>
                  </div>
                 </div>
                </div>
               </section>
               <div class="elementor-element elementor-element-ad4445c elementor-absolute elementor-widget-mobile__width-initial flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-styledimage" data-id="ad4445c" data-element_type="widget" data-settings="{&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/dtcforce.com\/wp-content\/uploads\/2022\/04\/cloud-back-2.png&quot;,&quot;id&quot;:1752,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;_position&quot;:&quot;absolute&quot;,&quot;thegem_elementor_preset&quot;:&quot;default&quot;}" data-widget_type="thegem-styledimage.default">
                <div class="elementor-widget-container">
                 <div class="styled-image-wrapper">
                  <div class="gem-image gem-wrapbox gem-wrapbox-default gem-wrapbox-position-left lazy-loading ">
                   <div class="gem-wrapbox-inner  lazy-loading-item" data-ll-effect="move-up"> <img decoding="async" class="gem-wrapbox-element img-responsive " data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/cloud-back-2.png" alt="cloud-back-2" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df40123990">
                    <script>
                     window.tgpQueue.add('tgpli-660df40123990')
                    </script><noscript><img decoding="async" class="gem-wrapbox-element img-responsive " src="../wp-content/uploads/2022/04/cloud-back-2.png" alt="cloud-back-2"></noscript>
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
     <div class="page-title-alignment-center"></div>
    </div>
    <div class="block-content no-bottom-margin no-top-margin">
     <div class="panel">
      <div class="panel-center">
       <article id="post-2113" class="post-2113 page type-page status-publish">
        <div class="entry-content post-content">
         <div class="container"></div><!-- .container -->
         <div class="fullwidth-content">
          <div data-elementor-type="wp-page" data-elementor-id="2113" class="elementor elementor-2113">
           <div class="elementor-inner">
            <div class="elementor-section-wrap">
             <section class="elementor-section elementor-top-section elementor-element elementor-element-3c09c40 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3c09c40" data-element_type="section">
              <div class="elementor-container elementor-column-gap-thegem">
               <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8d9562b" data-id="8d9562b" data-element_type="column">
                 <div class="elementor-column-wrap elementor-element-populated">
                  <div class="elementor-widget-wrap">
                   <div class="elementor-element elementor-element-c0e709e flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-id="c0e709e" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                     <h2 class="elementor-heading-title elementor-size-default">Impactful solutions that generate value for all stakeholders</h2>
                    </div>
                   </div>
                   <section class="elementor-section elementor-inner-section elementor-element elementor-element-cdbd7be elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="cdbd7be" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-thegem">
                     <div class="elementor-row">
                      <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f4d1e16" data-id="f4d1e16" data-element_type="column">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-2392dd2 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-id="2392dd2" data-element_type="widget" data-settings="{&quot;thegem_interaction_horizontal_scroll&quot;:&quot;yes&quot;,&quot;thegem_interaction_horizontal_scroll_direction&quot;:&quot;negative&quot;,&quot;thegem_interaction_horizontal_scroll_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;thegem_interaction_horizontal_scroll_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;thegem_interaction_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-text-editor elementor-clearfix">
                            <p><span style="font-weight: 400;">Improving customer relationships. Helping businesses grow their brand and increase brand loyalty. We deliver a seamless, digital experience by anticipating consumer demands. Getting a 360 degree view of your CRM to make faster, more accurate decisions. </span></p>
                            <p><br /><br /></p>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                      <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1d11ce4" data-id="1d11ce4" data-element_type="column">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-963dabd flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image" data-id="963dabd" data-element_type="widget" data-settings="{&quot;thegem_interaction_horizontal_scroll&quot;:&quot;yes&quot;,&quot;thegem_interaction_horizontal_scroll_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;thegem_interaction_horizontal_scroll_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;thegem_interaction_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="image.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-image"> <img fetchpriority="high" decoding="async" width="1024" height="813" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/professional-services-1024x813.png" class="elementor-animation-shrink attachment-large size-large" alt="" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2022/04/professional-services-1024x813.png 1024w, https://dtcforce.com/wp-content/uploads/2022/04/professional-services-300x238.png 300w, https://dtcforce.com/wp-content/uploads/2022/04/professional-services-768x610.png 768w, https://dtcforce.com/wp-content/uploads/2022/04/professional-services-1536x1219.png 1536w, https://dtcforce.com/wp-content/uploads/2022/04/professional-services-2048x1626.png 2048w, https://dtcforce.com/wp-content/uploads/2022/04/professional-services-600x476.png 600w" sizes="(max-width: 1024px) 100vw, 1024px" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df4012399f" />
                            <script>
                             window.tgpQueue.add('tgpli-660df4012399f')
                            </script><noscript><img fetchpriority="high" decoding="async" width="1024" height="813" src="../wp-content/uploads/2022/04/professional-services-1024x813.png" class="elementor-animation-shrink attachment-large size-large" alt="" srcset="https://dtcforce.com/wp-content/uploads/2022/04/professional-services-1024x813.png 1024w, https://dtcforce.com/wp-content/uploads/2022/04/professional-services-300x238.png 300w, https://dtcforce.com/wp-content/uploads/2022/04/professional-services-768x610.png 768w, https://dtcforce.com/wp-content/uploads/2022/04/professional-services-1536x1219.png 1536w, https://dtcforce.com/wp-content/uploads/2022/04/professional-services-2048x1626.png 2048w, https://dtcforce.com/wp-content/uploads/2022/04/professional-services-600x476.png 600w" sizes="(max-width: 1024px) 100vw, 1024px" /></noscript>
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
             <section class="elementor-section elementor-top-section elementor-element elementor-element-af07664 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="af07664" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
              <div class="elementor-container elementor-column-gap-thegem">
               <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d0d9d4b" data-id="d0d9d4b" data-element_type="column">
                 <div class="elementor-column-wrap elementor-element-populated">
                  <div class="elementor-widget-wrap">
                   <div class="elementor-element elementor-element-9847580 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-invisible elementor-widget elementor-widget-heading" data-id="9847580" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                     <h3 class="elementor-heading-title elementor-size-default">We combine the expertise and experience to earn the trust of our partners</h3>
                    </div>
                   </div>
                   <section class="elementor-section elementor-inner-section elementor-element elementor-element-0ee6090 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0ee6090" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-thegem">
                     <div class="elementor-row">
                      <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-bc8ffaa" data-id="bc8ffaa" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-9871a1c c-img flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image" data-id="9871a1c" data-element_type="widget" data-widget_type="image.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-image"> <img decoding="async" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/05/jonhonsonlambart.jpg" title="jonhonsonlambart" alt="jonhonsonlambart" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df401239b1" />
                            <script>
                             window.tgpQueue.add('tgpli-660df401239b1')
                            </script><noscript><img decoding="async" src="../wp-content/uploads/2022/05/jonhonsonlambart.jpg" title="jonhonsonlambart" alt="jonhonsonlambart" /></noscript>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-c75f929 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-id="c75f929" data-element_type="widget" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                           <h3 class="elementor-heading-title elementor-size-default">Johnson Lambert</h3>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-406feac flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-id="406feac" data-element_type="widget" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-text-editor elementor-clearfix">
                            <p>Johnson Lambert have a comprehensive 360-degree view of their business, while enabling automation through integrations done by DTC Force.</p>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                      <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-861f629" data-id="861f629" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-ee8e5df c-img flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image" data-id="ee8e5df" data-element_type="widget" data-widget_type="image.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-image"> <img decoding="async" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/bradford-scott-data-squarelogo-15244375839311.png" title="bradford-scott" alt="bradford-scott" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df401239b8" />
                            <script>
                             window.tgpQueue.add('tgpli-660df401239b8')
                            </script><noscript><img decoding="async" src="../wp-content/uploads/2022/04/bradford-scott-data-squarelogo-15244375839311.png" title="bradford-scott" alt="bradford-scott" /></noscript>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-a3b5c39 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-id="a3b5c39" data-element_type="widget" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                           <h3 class="elementor-heading-title elementor-size-default">Bradford Scott</h3>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-0a364a8 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-id="0a364a8" data-element_type="widget" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-text-editor elementor-clearfix">
                            <p>Bradford-Scott is a distributor of Sharetec Credit Union Software, one of the most widely used Credit Union software packages in the U.S.</p>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                      <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2bb9954" data-id="2bb9954" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-119db73 c-img  flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image" data-id="119db73" data-element_type="widget" data-widget_type="image.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-image"> <img decoding="async" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/05/lorenzo-dog-training.jpg" title="lorenzo-dog-training" alt="lorenzo-dog-training" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df401239be" />
                            <script>
                             window.tgpQueue.add('tgpli-660df401239be')
                            </script><noscript><img decoding="async" src="../wp-content/uploads/2022/05/lorenzo-dog-training.jpg" title="lorenzo-dog-training" alt="lorenzo-dog-training" /></noscript>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-69efdaa flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-id="69efdaa" data-element_type="widget" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                           <h3 class="elementor-heading-title elementor-size-default">Lorenzo Dog Traning</h3>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-d492495 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-id="d492495" data-element_type="widget" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-text-editor elementor-clearfix">
                            <p>Through the magic of an end-to-end gap analysis and robust implementation; Lorenzo’s Dog Training Team was able to unlock the true potential of Salesforce.</p>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                      <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-8f00a56" data-id="8f00a56" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-3f0594d c-img flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image" data-id="3f0594d" data-element_type="widget" data-widget_type="image.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-image"> <img decoding="async" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/parkonect.jpg" title="Parkonect" alt="Parkonect" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df401239c5" />
                            <script>
                             window.tgpQueue.add('tgpli-660df401239c5')
                            </script><noscript><img decoding="async" src="../wp-content/uploads/2022/04/parkonect.jpg" title="Parkonect" alt="Parkonect" /></noscript>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-70d5c58 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-id="70d5c58" data-element_type="widget" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                           <h3 class="elementor-heading-title elementor-size-default">Parkonect</h3>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-14c6f8b flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-id="14c6f8b" data-element_type="widget" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-text-editor elementor-clearfix">
                            <p style="text-align: center;">Parkonect solves automotive challenges for parking &amp; garage assets by delivering seamless, IoT-connected parking experiences.</p>
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
             <section class="elementor-section elementor-top-section elementor-element elementor-element-fd53b7d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="fd53b7d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
              <div class="elementor-container elementor-column-gap-thegem">
               <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b2bf400" data-id="b2bf400" data-element_type="column">
                 <div class="elementor-column-wrap elementor-element-populated">
                  <div class="elementor-widget-wrap">
                   <div class="elementor-element elementor-element-d40b2be flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-invisible elementor-widget elementor-widget-heading" data-id="d40b2be" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                     <h2 class="elementor-heading-title elementor-size-default">How we do it</h2>
                    </div>
                   </div>
                   <div class="elementor-element elementor-element-79417dc flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-id="79417dc" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                     <div class="title-h4 elementor-heading-title elementor-size-default">We take you on a journey beyond Salesforce implementation to ensure all business optimization initiatives generate value for your business.</div>
                    </div>
                   </div>
                   <section class="elementor-section elementor-inner-section elementor-element elementor-element-9d84185 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9d84185" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-thegem">
                     <div class="elementor-row">
                      <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-5d97df6" data-id="5d97df6" data-element_type="column">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-cb35b48 elementor-vertical-align-middle elementor-view-default elementor-mobile-position-top flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-icon-box" data-id="cb35b48" data-element_type="widget" data-widget_type="icon-box.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-icon-box-wrapper">
                            <div class="elementor-icon-box-icon"> <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="fas fa-clipboard-list"></i> </span></div>
                            <div class="elementor-icon-box-content">
                             <h3 class="elementor-icon-box-title"> <span> Progressive strategizing  </span></h3>
                             <p class="elementor-icon-box-description"> Our team works closely with you to understand the ideal business outcomes. We strategize the way forward by aligning solutions with your vision and industry needs.</p>
                            </div>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                      <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4785fbe" data-id="4785fbe" data-element_type="column">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-b11e8c4 elementor-vertical-align-middle elementor-view-default elementor-mobile-position-top flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-icon-box" data-id="b11e8c4" data-element_type="widget" data-widget_type="icon-box.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-icon-box-wrapper">
                            <div class="elementor-icon-box-icon"> <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="fas fa-cogs"></i> </span></div>
                            <div class="elementor-icon-box-content">
                             <h3 class="elementor-icon-box-title"> <span> Integrated solutions </span></h3>
                             <p class="elementor-icon-box-description"> Seamlessly integration across all CRM platforms helps us help you. Faster time-to-market and a comprehensive customer experience is the best way to optimize operations.</p>
                            </div>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                      <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-39dd861" data-id="39dd861" data-element_type="column">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-9c56f60 elementor-vertical-align-middle elementor-view-default elementor-mobile-position-top flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-icon-box" data-id="9c56f60" data-element_type="widget" data-widget_type="icon-box.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-icon-box-wrapper">
                            <div class="elementor-icon-box-icon"> <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="fas fa-desktop"></i> </span></div>
                            <div class="elementor-icon-box-content">
                             <h3 class="elementor-icon-box-title"> <span> Optimal digital experiences </span></h3>
                             <p class="elementor-icon-box-description"> The end-user is always the focal point for us at DTC Force. We’re passionate about designing UX/UI interfaces that resonate with your target audience.</p>
                            </div>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                      <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-d6d3d3e" data-id="d6d3d3e" data-element_type="column">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-0589033 elementor-vertical-align-middle elementor-view-default elementor-mobile-position-top flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-icon-box" data-id="0589033" data-element_type="widget" data-widget_type="icon-box.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-icon-box-wrapper">
                            <div class="elementor-icon-box-icon"> <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="gem-elegant icon-datareport"></i> </span></div>
                            <div class="elementor-icon-box-content">
                             <h3 class="elementor-icon-box-title"> <span> Leveraging the power of data </span></h3>
                             <p class="elementor-icon-box-description"> Faster data-driven decision making helps you solve potential pain points before they surface. We want to create scalable sales processes, so we deep dive into data and use accurate insights and analytics to help you strategize.</p>
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
             <section class="elementor-section elementor-inner-section elementor-element elementor-element-5ca72d2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5ca72d2" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
              <div class="elementor-container elementor-column-gap-thegem">
               <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2cb6d470" data-id="2cb6d470" data-element_type="column">
                 <div class="elementor-column-wrap elementor-element-populated">
                  <div class="elementor-widget-wrap">
                   <div class="elementor-element elementor-element-72cf6b40 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-id="72cf6b40" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                     <h2 class="elementor-heading-title elementor-size-default">What Our Clients Say About Us</h2>
                    </div>
                   </div>
                   <div class="elementor-element elementor-element-16c1bff6 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-testimonials" data-id="16c1bff6" data-element_type="widget" data-settings="{&quot;thegem_elementor_preset&quot;:&quot;style2&quot;,&quot;content_testimonials_cat&quot;:&quot;all&quot;,&quot;content_elems_img&quot;:&quot;yes&quot;,&quot;content_elems_name&quot;:&quot;yes&quot;,&quot;content_elems_position&quot;:&quot;yes&quot;,&quot;content_elems_company&quot;:&quot;yes&quot;,&quot;content_elems_quote&quot;:&quot;yes&quot;}" data-widget_type="thegem-testimonials.default">
                    <div class="elementor-widget-container">
                     <div class="preloader">
                      <div class="preloader-spin"></div>
                     </div>
                     <div class="style2 gem-testimonials
 ">
                      <style>
                       .gem-testimonials-navigation{display: block;}
                      </style>
                      <div id="post-368" class="gem-testimonial-item post-368 thegem_testimonial type-thegem_testimonial status-publish has-post-thumbnail"> <a href="#" target="_blank">
                        <div class="gem-testimonial-wrapper  ">
                         <div class="gem-testimonial-image"> <span> <img decoding="async" width="80" height="80" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2020/11/image_720-1.webp" class="img-responsive img-circle wp-post-image" alt="" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2020/11/image_720-1-thegem-testimonial.webp 2x" sizes="100vw" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df401239dc" />
                           <script>
                            window.tgpQueue.add('tgpli-660df401239dc')
                           </script><noscript><img decoding="async" width="80" height="80" src="../wp-content/uploads/2020/11/image_720-1.webp" class="img-responsive img-circle wp-post-image" alt="" srcset="https://dtcforce.com/wp-content/uploads/2020/11/image_720-1-thegem-testimonial.webp 2x" sizes="100vw" /></noscript>
                          </span></div>
                         <div class="gem-testimonial-content">
                          <div class="gem-testimonial-name title-h6">Will May</div>
                          <div class="gem-testimonial-position">Noble Gas Solutions</div>
                          <div class="gem-testimonial-text">
                           <p><em>“DTC did great work, they felt like part of our company while we were working on the project. They scoped everything out and really helped us step back and see the 50,000-foot view, and then zoom in on implementation. We could not be happier with the results of our project. We would recommend them to anyone for highly skilled customer-focused assistance with Salesforce implementations.”</em></p>
                          </div>
                         </div>
                        </div>
                       </a></div>
                      <div id="post-1652" class="gem-testimonial-item post-1652 thegem_testimonial type-thegem_testimonial status-publish has-post-thumbnail"> <a href="#" target="_blank">
                        <div class="gem-testimonial-wrapper  ">
                         <div class="gem-testimonial-image"> <span> <img decoding="async" width="80" height="80" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2020/11/cassandra-lynn-1.webp" class="img-responsive img-circle wp-post-image" alt="" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2020/11/cassandra-lynn-1-thegem-testimonial.webp 2x" sizes="100vw" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df401239e6" />
                           <script>
                            window.tgpQueue.add('tgpli-660df401239e6')
                           </script><noscript><img decoding="async" width="80" height="80" src="../wp-content/uploads/2020/11/cassandra-lynn-1.webp" class="img-responsive img-circle wp-post-image" alt="" srcset="https://dtcforce.com/wp-content/uploads/2020/11/cassandra-lynn-1-thegem-testimonial.webp 2x" sizes="100vw" /></noscript>
                          </span></div>
                         <div class="gem-testimonial-content">
                          <div class="gem-testimonial-name title-h6">Jes Stumpf</div>
                          <div class="gem-testimonial-company">Vermont Surrogacy</div>
                          <div class="gem-testimonial-text">
                           <p><em>“<span id="AppxConsultingListingDetail:AppxLayout:j_id1480"><span class="appx-reviews-2">I had worked on a Salesforce build with another company, who did not complete the project and left it in an unusable state of disarray. DTCForce took on the project, revamped it and completed it with great knowledge and efficiency. I have</span></span><span id="AppxConsultingListingDetail:AppxLayout:j_id1480"><span class="appx-reviews-2"> worked</span></span><span id="AppxConsultingListingDetail:AppxLayout:j_id1480"></span><span id="AppxConsultingListingDetail:AppxLayout:j_id1480"><span class="appx-reviews-2"> with them to make further improvements and plan to under go another major project with them in the New Year</span></span>.”</em></p>
                          </div>
                         </div>
                        </div>
                       </a></div>
                      <div id="post-1782" class="gem-testimonial-item post-1782 thegem_testimonial type-thegem_testimonial status-publish has-post-thumbnail">
                       <div class="gem-testimonial-wrapper  ">
                        <div class="gem-testimonial-image"> <span> <img decoding="async" width="600" height="600" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/andy-lazarkis.jpg" class="img-responsive img-circle wp-post-image" alt="" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2022/04/andy-lazarkis-thegem-testimonial.jpg 2x" sizes="100vw" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df401239f0" />
                          <script>
                           window.tgpQueue.add('tgpli-660df401239f0')
                          </script><noscript><img decoding="async" width="600" height="600" src="../wp-content/uploads/2022/04/andy-lazarkis.jpg" class="img-responsive img-circle wp-post-image" alt="" srcset="https://dtcforce.com/wp-content/uploads/2022/04/andy-lazarkis-thegem-testimonial.jpg 2x" sizes="100vw" /></noscript>
                         </span></div>
                        <div class="gem-testimonial-content">
                         <div class="gem-testimonial-name title-h6">Andy Lazarakis</div>
                         <div class="gem-testimonial-company">Siteworks</div>
                         <div class="gem-testimonial-text">
                          <p><em>“Jawad Nasser and Jack Grewal were excellent. They helped us to stay on schedule, were flexible in meeting with us when needed, and responsive to our needs for assistance. Excellent process, would both choose them again and recommend them to others.”</em></p>
                         </div>
                        </div>
                       </div>
                      </div>
                      <div id="post-4096" class="gem-testimonial-item post-4096 thegem_testimonial type-thegem_testimonial status-publish has-post-thumbnail">
                       <div class="gem-testimonial-wrapper  ">
                        <div class="gem-testimonial-image"> <span> <img decoding="async" width="392" height="392" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/11/Image-empty-state.webp" class="img-responsive img-circle wp-post-image" alt="" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2022/11/Image-empty-state-thegem-testimonial.webp 2x" sizes="100vw" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df401239f8" />
                          <script>
                           window.tgpQueue.add('tgpli-660df401239f8')
                          </script><noscript><img decoding="async" width="392" height="392" src="../wp-content/uploads/2022/11/Image-empty-state.webp" class="img-responsive img-circle wp-post-image" alt="" srcset="https://dtcforce.com/wp-content/uploads/2022/11/Image-empty-state-thegem-testimonial.webp 2x" sizes="100vw" /></noscript>
                         </span></div>
                        <div class="gem-testimonial-content">
                         <div class="gem-testimonial-name title-h6">Sam Baker</div>
                         <div class="gem-testimonial-company">United States Asset Recovery</div>
                         <div class="gem-testimonial-text">
                          <p><em>&#8220;As far as efficiency, flexibility, and overall project evaluation: you all have been excellent business partners and we have had nothing but a good experience. We&#8217;re more than satisfied with all your&#8217;s efforts.&#8221;</em></p>
                         </div>
                        </div>
                       </div>
                      </div>
                      <div class="testimonials_svg"><svg width="100" height="50">
                        <path d="M 0,-1 Q 45,5 50,50 Q 55,5 100,-1" />
                       </svg></div>
                     </div>
                    </div>
                   </div>
                  </div>
                 </div>
                </div>
               </div>
              </div>
             </section>
             <section class="elementor-section elementor-top-section elementor-element elementor-element-5e133339 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="5e133339" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
              <div class="elementor-container elementor-column-gap-thegem">
               <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3b9af0d0" data-id="3b9af0d0" data-element_type="column">
                 <div class="elementor-column-wrap elementor-element-populated">
                  <div class="elementor-widget-wrap">
                   <div class="elementor-element elementor-element-121c8bfc flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-invisible elementor-widget elementor-widget-heading" data-id="121c8bfc" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                     <h2 class="elementor-heading-title elementor-size-default">Working With Multi-cloud Products For High-Tech Industry</h2>
                    </div>
                   </div>
                   <section class="elementor-section elementor-inner-section elementor-element elementor-element-34892e59 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="34892e59" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-thegem">
                     <div class="elementor-row">
                      <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2b41d1ea" data-id="2b41d1ea" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-37cd21e9 elementor-position-top elementor-vertical-align-top flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image-box" data-id="37cd21e9" data-element_type="widget" data-widget_type="image-box.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-image-box-wrapper">
                            <figure class="elementor-image-box-img"><img decoding="async" width="300" height="211" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/cloud_sales-17-300x211.png" class="attachment-medium size-medium" alt="" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df40123a03" />
                             <script>
                              window.tgpQueue.add('tgpli-660df40123a03')
                             </script><noscript><img decoding="async" width="300" height="211" src="../wp-content/uploads/2022/04/cloud_sales-17-300x211.png" class="attachment-medium size-medium" alt="" /></noscript>
                            </figure>
                            <div class="elementor-image-box-content">
                             <h3 class="elementor-image-box-title">Sales Cloud</h3>
                             <p class="elementor-image-box-description">Break down the silos and collaborate with distributors and dealers more easily with personalized portals. Get better visibility with sales automation to increase productivity.</p>
                            </div>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                      <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-6c775573" data-id="6c775573" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-64d70c39 elementor-position-top elementor-vertical-align-top flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image-box" data-id="64d70c39" data-element_type="widget" data-widget_type="image-box.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-image-box-wrapper">
                            <figure class="elementor-image-box-img"><img decoding="async" width="300" height="211" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/cloud-20-300x211.png" class="attachment-medium size-medium" alt="" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df40123a0a" />
                             <script>
                              window.tgpQueue.add('tgpli-660df40123a0a')
                             </script><noscript><img decoding="async" width="300" height="211" src="../wp-content/uploads/2022/04/cloud-20-300x211.png" class="attachment-medium size-medium" alt="" /></noscript>
                            </figure>
                            <div class="elementor-image-box-content">
                             <h3 class="elementor-image-box-title">Service Cloud</h3>
                             <p class="elementor-image-box-description">Create end-to-end engagement with the salesforce service cloud to discover new opportunities for growth and increase revenue.</p>
                            </div>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                      <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-cd684f8" data-id="cd684f8" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-82ba2d6 elementor-position-top elementor-vertical-align-top flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image-box" data-id="82ba2d6" data-element_type="widget" data-widget_type="image-box.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-image-box-wrapper">
                            <figure class="elementor-image-box-img"><img decoding="async" width="300" height="210" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/06/cloud-21-300x210.webp" class="attachment-medium size-medium" alt="" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df40123a11" />
                             <script>
                              window.tgpQueue.add('tgpli-660df40123a11')
                             </script><noscript><img decoding="async" width="300" height="210" src="../wp-content/uploads/2022/06/cloud-21-300x210.webp" class="attachment-medium size-medium" alt="" /></noscript>
                            </figure>
                            <div class="elementor-image-box-content">
                             <h3 class="elementor-image-box-title">Experience Cloud</h3>
                             <p class="elementor-image-box-description">We merge experience design with the Experience cloud to create an unforgettable digital experience for your users.</p>
                            </div>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                      <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-47d797f5" data-id="47d797f5" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-4ed88ca elementor-position-top elementor-vertical-align-top flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image-box" data-id="4ed88ca" data-element_type="widget" data-widget_type="image-box.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-image-box-wrapper">
                            <figure class="elementor-image-box-img"><img decoding="async" width="300" height="211" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/cloud_marketing-300x211.png" class="attachment-medium size-medium" alt="" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df40123a17" />
                             <script>
                              window.tgpQueue.add('tgpli-660df40123a17')
                             </script><noscript><img decoding="async" width="300" height="211" src="../wp-content/uploads/2022/04/cloud_marketing-300x211.png" class="attachment-medium size-medium" alt="" /></noscript>
                            </figure>
                            <div class="elementor-image-box-content">
                             <h3 class="elementor-image-box-title">Marketing Cloud</h3>
                             <p class="elementor-image-box-description">Better relationships with your stakeholders start with the right tools to understand your customer and put them first. Make better, data-driven decisions.</p>
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
                   <div class="elementor-element elementor-element-1c1bab72 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-invisible elementor-widget elementor-widget-thegem-styledbutton" data-id="1c1bab72" data-element_type="widget" data-settings="{&quot;thegem_button_skin&quot;:&quot;outline&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="thegem-styledbutton.default">
                    <div class="elementor-widget-container">
                     <div class="gem-button-container gem-widget-button"> <a class="gem-button gem-button-size-medium gem-button-text-weight-bold gem-button-style-outline gem-button-border-3" href="../appointment/index.html"> <span class="gem-inner-wrapper-btn"> <span class="gem-text-button"> Free Consultancy </span> </span> </a></div>
                    </div>
                   </div>
                  </div>
                 </div>
                </div>
               </div>
              </div>
             </section>
             <section class="elementor-section elementor-top-section elementor-element elementor-element-2d3ffbce elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2d3ffbce" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
              <div class="elementor-container elementor-column-gap-thegem">
               <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-35fc1ba8" data-id="35fc1ba8" data-element_type="column">
                 <div class="elementor-column-wrap elementor-element-populated">
                  <div class="elementor-widget-wrap">
                   <div class="elementor-element elementor-element-54d0f402 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-id="54d0f402" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                     <h2 class="elementor-heading-title elementor-size-default">Blog</h2>
                    </div>
                   </div>
                   <div class="elementor-element elementor-element-732c6a9c elementor-grid-3 elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-posts--thumbnail-top flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-posts" data-id="732c6a9c" data-element_type="widget" data-settings="{&quot;classic_columns&quot;:&quot;3&quot;,&quot;classic_columns_tablet&quot;:&quot;2&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:35,&quot;sizes&quot;:[]},&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="posts.classic">
                    <div class="elementor-widget-container">
                     <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
                      <article class="elementor-post elementor-grid-item post-10677 post type-post status-publish format-standard has-post-thumbnail category-crm"> <a class="elementor-post__thumbnail__link" href="../the-complete-guide-to-crm-transforming-businesses-from-startups-to-enterprises/index.html">
                        <div class="elementor-post__thumbnail"><img decoding="async" width="300" height="171" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2024/03/businessman-holding-digital-tablet-success-cityscape-generated-by-ai-300x171.jpg" class="attachment-medium size-medium" alt="" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df40123a21" />
                         <script>
                          window.tgpQueue.add('tgpli-660df40123a21')
                         </script><noscript><img decoding="async" width="300" height="171" src="../wp-content/uploads/2024/03/businessman-holding-digital-tablet-success-cityscape-generated-by-ai-300x171.jpg" class="attachment-medium size-medium" alt="" /></noscript>
                        </div>
                       </a>
                       <div class="elementor-post__text">
                        <h3 class="elementor-post__title"> <a href="../the-complete-guide-to-crm-transforming-businesses-from-startups-to-enterprises/index.html"> The Complete Guide to CRM: Transforming Businesses from Startups to Enterprises </a></h3>
                        <div class="elementor-post__meta-data"> <span class="elementor-post-date"> March 14, 2024 </span> <span class="elementor-post-avatar"> No Comments </span></div>
                        <div class="elementor-post__excerpt">
                         <p>Introduction: In today&#8217;s fast-paced business landscape, maintaining meaningful customer relationships is crucial for success. This is where Customer Relationship Management</p>
                        </div> <a class="elementor-post__read-more" href="../the-complete-guide-to-crm-transforming-businesses-from-startups-to-enterprises/index.html"> Read More » </a>
                       </div>
                      </article>
                      <article class="elementor-post elementor-grid-item post-9945 post type-post status-publish format-standard has-post-thumbnail category-salesforce"> <a class="elementor-post__thumbnail__link" href="../dtcforce-salesforce-summit-partner-status/index.html">
                        <div class="elementor-post__thumbnail"><img decoding="async" width="300" height="167" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2024/02/4-300x167.jpg" class="attachment-medium size-medium" alt="Salesforce Summit Partner Status for DTC Force" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df40123a2a" />
                         <script>
                          window.tgpQueue.add('tgpli-660df40123a2a')
                         </script><noscript><img decoding="async" width="300" height="167" src="../wp-content/uploads/2024/02/4-300x167.jpg" class="attachment-medium size-medium" alt="Salesforce Summit Partner Status for DTC Force" /></noscript>
                        </div>
                       </a>
                       <div class="elementor-post__text">
                        <h3 class="elementor-post__title"> <a href="../dtcforce-salesforce-summit-partner-status/index.html"> DTC Force ascends to Salesforce Summit Partner Level </a></h3>
                        <div class="elementor-post__meta-data"> <span class="elementor-post-date"> February 9, 2024 </span> <span class="elementor-post-avatar"> No Comments </span></div>
                        <div class="elementor-post__excerpt">
                         <p>DTC Force has achieved the Salesforce Summit Partner status. It is an honor that speaks volumes about our commitment and</p>
                        </div> <a class="elementor-post__read-more" href="../dtcforce-salesforce-summit-partner-status/index.html"> Read More » </a>
                       </div>
                      </article>
                      <article class="elementor-post elementor-grid-item post-7542 post type-post status-publish format-standard has-post-thumbnail category-salesforce"> <a class="elementor-post__thumbnail__link" href="../dtc-force-climbs-to-crest-a-new-milestone-in-salesforce-partnership/index.html">
                        <div class="elementor-post__thumbnail"><img decoding="async" width="300" height="167" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2023/10/DTC-Force-Elevates-to-Crest-Level-Partnership-with-Salesforce-01-300x167.jpg" class="attachment-medium size-medium" alt="" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df40123a31" />
                         <script>
                          window.tgpQueue.add('tgpli-660df40123a31')
                         </script><noscript><img decoding="async" width="300" height="167" src="../wp-content/uploads/2023/10/DTC-Force-Elevates-to-Crest-Level-Partnership-with-Salesforce-01-300x167.jpg" class="attachment-medium size-medium" alt="" /></noscript>
                        </div>
                       </a>
                       <div class="elementor-post__text">
                        <h3 class="elementor-post__title"> <a href="../dtc-force-climbs-to-crest-a-new-milestone-in-salesforce-partnership/index.html"> DTC Force Climbs to &#8216;Crest&#8217; &#8211; A New Milestone in Salesforce Partnership! </a></h3>
                        <div class="elementor-post__meta-data"> <span class="elementor-post-date"> October 26, 2023 </span> <span class="elementor-post-avatar"> No Comments </span></div>
                        <div class="elementor-post__excerpt">
                         <p>In a remarkable showcase of expertise and dedication, DTC Force announces its ascension to the coveted &#8216;Crest&#8217; level partnership within</p>
                        </div> <a class="elementor-post__read-more" href="../dtc-force-climbs-to-crest-a-new-milestone-in-salesforce-partnership/index.html"> Read More » </a>
                       </div>
                      </article>
                     </div>
                    </div>
                   </div>
                   <section class="elementor-section elementor-inner-section elementor-element elementor-element-ba14e0b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ba14e0b" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-thegem">
                     <div class="elementor-row">
                      <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-aa40b86" data-id="aa40b86" data-element_type="column">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-b42c537 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-counter" data-id="b42c537" data-element_type="widget" data-settings="{&quot;thegem_elementor_preset&quot;:&quot;counter-preset3&quot;,&quot;counter_animation_enabled&quot;:&quot;yes&quot;}" data-widget_type="thegem-counter.default">
                          <div class="elementor-widget-container">
                           <div class="counter-preset3">
                            <div class="gem-counter-container">
                             <div class="preloader">
                              <div class="preloader-spin"></div>
                             </div>
                             <div data-number-format="(ddd).ddd" class="gem-counter-box default-background">
                              <div class="gem-counter">
                               <div class="gem-counter-inner">
                                <div class="gem-counter-icon">
                                 <div class="gem-icon gem-icon-pack-material gem-icon-size-medium gem-icon-shape-circle gem-simple-icon  lazy-loading-item  lazy-loading-item-fading">
                                  <div class="gem-icon-inner default-background-border">
                                   <div class="icon-hover-bg"></div> <i aria-hidden="true" class="fas fa-clipboard-check"></i>
                                  </div>
                                 </div>
                                </div>
                                <div class="gem-counter-number">
                                 <div class="gem-counter-odometer odometer odometer-auto-theme" data-to="800"> 0</div>
                                 <div class="gem-counter-suffix "> +</div>
                                </div>
                                <div class="gem-counter-text styled-subtitle"> Projects</div>
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
                      <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-e36edcd" data-id="e36edcd" data-element_type="column">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-e10fa94 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-counter" data-id="e10fa94" data-element_type="widget" data-settings="{&quot;thegem_elementor_preset&quot;:&quot;counter-preset3&quot;,&quot;counter_animation_enabled&quot;:&quot;yes&quot;}" data-widget_type="thegem-counter.default">
                          <div class="elementor-widget-container">
                           <div class="counter-preset3">
                            <div class="gem-counter-container">
                             <div class="preloader">
                              <div class="preloader-spin"></div>
                             </div>
                             <div data-number-format="(ddd).ddd" class="gem-counter-box default-background">
                              <div class="gem-counter">
                               <div class="gem-counter-inner">
                                <div class="gem-counter-icon">
                                 <div class="gem-icon gem-icon-pack-material gem-icon-size-medium gem-icon-shape-circle gem-simple-icon  lazy-loading-item  lazy-loading-item-fading">
                                  <div class="gem-icon-inner default-background-border">
                                   <div class="icon-hover-bg"></div> <i aria-hidden="true" class="fas fa-users"></i>
                                  </div>
                                 </div>
                                </div>
                                <div class="gem-counter-number">
                                 <div class="gem-counter-odometer odometer odometer-auto-theme" data-to="400"> 0</div>
                                 <div class="gem-counter-suffix "> +</div>
                                </div>
                                <div class="gem-counter-text styled-subtitle"> Clients</div>
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
                      <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-ff00fe3" data-id="ff00fe3" data-element_type="column">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-182b123 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-counter" data-id="182b123" data-element_type="widget" data-settings="{&quot;thegem_elementor_preset&quot;:&quot;counter-preset3&quot;,&quot;counter_animation_enabled&quot;:&quot;yes&quot;}" data-widget_type="thegem-counter.default">
                          <div class="elementor-widget-container">
                           <div class="counter-preset3">
                            <div class="gem-counter-container">
                             <div class="preloader">
                              <div class="preloader-spin"></div>
                             </div>
                             <div data-number-format="(ddd).ddd" class="gem-counter-box default-background">
                              <div class="gem-counter">
                               <div class="gem-counter-inner">
                                <div class="gem-counter-icon">
                                 <div class="gem-icon gem-icon-pack-material gem-icon-size-medium gem-icon-shape-circle gem-simple-icon  lazy-loading-item  lazy-loading-item-fading">
                                  <div class="gem-icon-inner default-background-border">
                                   <div class="icon-hover-bg"></div> <i aria-hidden="true" class="fas fa-users-cog"></i>
                                  </div>
                                 </div>
                                </div>
                                <div class="gem-counter-number">
                                 <div class="gem-counter-odometer odometer odometer-auto-theme" data-to="50"> 0</div>
                                 <div class="gem-counter-suffix "> +</div>
                                </div>
                                <div class="gem-counter-text styled-subtitle"> Team Members</div>
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
                      <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-45d81be" data-id="45d81be" data-element_type="column">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-830c82d flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-counter" data-id="830c82d" data-element_type="widget" data-settings="{&quot;thegem_elementor_preset&quot;:&quot;counter-preset3&quot;,&quot;counter_animation_enabled&quot;:&quot;yes&quot;}" data-widget_type="thegem-counter.default">
                          <div class="elementor-widget-container">
                           <div class="counter-preset3">
                            <div class="gem-counter-container">
                             <div class="preloader">
                              <div class="preloader-spin"></div>
                             </div>
                             <div data-number-format="(ddd).ddd" class="gem-counter-box default-background">
                              <div class="gem-counter">
                               <div class="gem-counter-inner">
                                <div class="gem-counter-icon">
                                 <div class="gem-icon gem-icon-pack-material gem-icon-size-medium gem-icon-shape-circle gem-simple-icon  lazy-loading-item  lazy-loading-item-fading">
                                  <div class="gem-icon-inner default-background-border">
                                   <div class="icon-hover-bg"></div> <i aria-hidden="true" class="gem-mdi mdi-map-marker-multiple"></i>
                                  </div>
                                 </div>
                                </div>
                                <div class="gem-counter-number">
                                 <div class="gem-counter-odometer odometer odometer-auto-theme" data-to="14"> 0</div>
                                </div>
                                <div class="gem-counter-text styled-subtitle"> Geographic Focus</div>
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
             <section class="elementor-section elementor-top-section elementor-element elementor-element-a792721 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="a792721" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
              <div class="elementor-container elementor-column-gap-no">
               <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2a210778" data-id="2a210778" data-element_type="column">
                 <div class="elementor-column-wrap elementor-element-populated">
                  <div class="elementor-widget-wrap">
                   <section class="elementor-section elementor-inner-section elementor-element elementor-element-3af5341a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3af5341a" data-element_type="section" id="contact">
                    <div class="elementor-container elementor-column-gap-thegem">
                     <div class="elementor-row">
                      <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-313df8ec" data-id="313df8ec" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                       <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                         <div class="elementor-element elementor-element-5c91e699 elementor-widget__width-auto flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-id="5c91e699" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:300}" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                           <div class="title-h2 elementor-heading-title elementor-size-default">Let's get started.</div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-43d3d27a elementor-widget__width-initial flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-id="43d3d27a" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:500}" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                           <div class="elementor-text-editor elementor-clearfix">
                            <div class="elementor-element elementor-element-02b06b2 elementor-widget__width-initial flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor animated fadeIn" data-id="02b06b2" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:500}" data-widget_type="text-editor.default">
                             <div class="elementor-widget-container">
                              <div class="elementor-text-editor elementor-clearfix">
                               <p>Get in touch with our team of experts today!</p>
                              </div>
                             </div>
                            </div>
                            <div class="elementor-element elementor-element-6da8fb8 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-contact-form7 animated fadeIn" data-id="6da8fb8" data-element_type="widget" data-settings="{&quot;thegem_elementor_preset&quot;:&quot;white&quot;,&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:700,&quot;thegem_custom_css&quot;:&quot;.wpcf7 form .wpcf7-response-output {\n    border: none !important;\n}&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="thegem-contact-form7.default">
                             <div class="elementor-widget-container">
                              <div id="wpcf7-f1646-p1277-o1" class="wpcf7" dir="ltr" lang="en-US" role="form">
                               <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"> </p>
                               </div>
                               <form class="wpcf7-form thegem-cf7 gem-contact-form-white form-6da8fb8 label-top init" action="https://dtcforce.com/#wpcf7-f1646-p1277-o1" method="post" novalidate="novalidate" data-status="init">
                                <div class="contact-form">
                                 <div class="col-lg-12 col-md-12 col-xs-12"> </div>
                                </div>
                               </form>
                              </div>
                             </div>
                            </div>
                           </div>
                          </div>
                         </div>
                         <div class="elementor-element elementor-element-1f6b44ea flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-contact-form7" data-id="1f6b44ea" data-element_type="widget" data-settings="{&quot;thegem_elementor_preset&quot;:&quot;white&quot;,&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:700,&quot;thegem_custom_css&quot;:&quot;.wpcf7 form .wpcf7-response-output {\n    border: none !important;\n}&quot;}" data-widget_type="thegem-contact-form7.default">
                          <div class="elementor-widget-container">
                           <div class="wpcf7 no-js" id="wpcf7-f1646-p2113-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response">
                             <p role="status" aria-live="polite" aria-atomic="true"></p>
                             <ul></ul>
                            </div>
                            <form action="https://dtcforce.com/professional-services/#wpcf7-f1646-p2113-o1" method="post" class="wpcf7-form init thegem-cf7 gem-contact-form-white form-1f6b44ea label-top" aria-label="Contact form" novalidate="novalidate" data-status="init">
                             <div style="display: none;"> <input type="hidden" name="_wpcf7" value="1646" /> <input type="hidden" name="_wpcf7_version" value="5.7" /> <input type="hidden" name="_wpcf7_locale" value="en_US" /> <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1646-p2113-o1" /> <input type="hidden" name="_wpcf7_container_post" value="2113" /> <input type="hidden" name="_wpcf7_posted_data_hash" value="" /></div>
                             <style>
                              .wpcf7-form-control-wrap {
                               margin-bottom: 20px !important; 
                              }
                             </style>
                             <p><br /> <span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name*" value="" type="text" name="your-name" /></span><br /> <span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email*" value="" type="email" name="your-email" /></span><br /> <span class="wpcf7-form-control-wrap" data-name="tel-27"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Phone Number*" value="" type="tel" name="tel-27" /></span><br /> <span class="wpcf7-form-control-wrap" data-name="menu-964"><select class="wpcf7-form-control wpcf7-select" aria-invalid="false" name="menu-964">
                                <option value="Industry">Industry</option>
                                <option value="Agriculture">Agriculture</option>
                                <option value="Business Services">Business Services</option>
                                <option value="Construction &amp; Engineering">Construction &amp; Engineering</option>
                                <option value="Consumer Services">Consumer Services</option>
                                <option value="Education">Education</option>
                                <option value="Energy, Utilities &amp; Waste">Energy, Utilities &amp; Waste</option>
                                <option value="Finance">Finance</option>
                                <option value="Government">Government</option>
                                <option value="Healthcare &amp; Life Sciences">Healthcare &amp; Life Sciences</option>
                                <option value="Hi-Tech">Hi-Tech</option>
                                <option value="Holding Companies &amp; Conglomerates">Holding Companies &amp; Conglomerates</option>
                                <option value="Hospitality">Hospitality</option>
                                <option value="Hospitals &amp; Physicians Clinics">Hospitals &amp; Physicians Clinics</option>
                                <option value="Insurance">Insurance</option>
                                <option value="Law Firms &amp; Legal Services">Law Firms &amp; Legal Services</option>
                                <option value="Manufacturing">Manufacturing</option>
                                <option value="Media &amp; Internet">Media &amp; Internet</option>
                                <option value="Minerals &amp; Mining">Minerals &amp; Mining</option>
                                <option value="Organizations">Organizations</option>
                                <option value="Real Estate">Real Estate</option>
                                <option value="Retail">Retail</option>
                                <option value="Software">Software</option>
                                <option value="Telecommunications">Telecommunications</option>
                                <option value="Transportation">Transportation</option>
                                <option value="Other">Other</option>
                               </select></span><br /> <span class="wpcf7-form-control-wrap" data-name="menu-895"><select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false" name="menu-895">
                                <option value="Marketing Cloud">Marketing Cloud</option>
                                <option value="Sales Cloud">Sales Cloud</option>
                                <option value="Experience Cloud">Experience Cloud</option>
                                <option value="Service Cloud">Service Cloud</option>
                                <option value="FSL">FSL</option>
                                <option value="CPQ">CPQ</option>
                                <option value="Pardot">Pardot</option>
                                <option value="Health Cloud">Health Cloud</option>
                                <option value="Manufacturing Cloud">Manufacturing Cloud</option>
                                <option value="Other">Other</option>
                               </select></span><br /> <span class="wpcf7-form-control-wrap" data-name="your-message"><textarea cols="20" rows="2" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Message*" name="your-message"></textarea></span><br />
                             <div class="gem-button-container gem-button-position-left"><input class="gem-button gem-button-size-medium gem-button-style-outline gem-button-text-weight-normal gem-button-border-2 gem-button-no-uppercase wpcf7-form-control has-spinner wpcf7-submit gem-button-wpcf-custom" style="border-radius: 9px;border-color: #4FB9E8FF;color: #4FB9E8FF;" onmouseleave="this.style.borderColor='#4FB9E8FF';this.style.backgroundColor='transparent';this.style.color='#4FB9E8FF';" onmouseenter="this.style.borderColor='#4FB9E8FF';this.style.backgroundColor='#4FB9E8FF';this.style.color='#ffffff';" id="" tabindex="" type="submit" value="Send Message" /></div>
                             </p>
                             <p style="display: none !important;"><label>&#916;<textarea name="_wpcf7_ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea></label><input type="hidden" id="ak_js_1" name="_wpcf7_ak_js" value="217" />
                              <script>
                               document.getElementById( "ak_js_1" ).setAttribute( "value", ( new Date() ).getTime() );
                              </script>
                             </p>
                             <div class="wpcf7-response-output" aria-hidden="true"></div>
                            </form>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                      <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3867b348" data-id="3867b348" data-element_type="column">
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
  <?php include('layouts/footer.php') ?>
 </div><!-- #page -->
  <?php include('layouts/foot.php') ?>
</body> 

</html>