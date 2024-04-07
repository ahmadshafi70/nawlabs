<!DOCTYPE html>
<html lang="en-US" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<!-- Mirrored from dtcforce.com/expertise/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2024 00:31:49 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<?php include('layouts/head.php') ?>   

<body class="page-template page-template-page-fullwidth page-template-page-fullwidth-php page page-id-2894 wp-custom-logo ehf-template-thegem-elementor ehf-stylesheet-thegem-elementor fullscreen-search elementor-default elementor-kit-567 elementor-page elementor-page-2894">
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
                                                                            <div class="gem-wrapbox-inner "> <img decoding="async" class="gem-wrapbox-element img-responsive " data-tgpli-src="../wp-content/uploads/2020/11/cloud-outline.png" alt="cloud-outline" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df3eda401a">
                                                                                <script>
                                                                                    window.tgpQueue.add('tgpli-660df3eda401a')
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
                                                                                            <div class="title-h1 elementor-heading-title elementor-size-default"> Expertise</div>
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
                                                                            <div class="gem-wrapbox-inner  lazy-loading-item" data-ll-effect="move-up"> <img decoding="async" class="gem-wrapbox-element img-responsive " data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/cloud-back-2.png" alt="cloud-back-2" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df3eda4023">
                                                                                <script>
                                                                                    window.tgpQueue.add('tgpli-660df3eda4023')
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
                            <article id="post-2894" class="post-2894 page type-page status-publish">
                                <div class="entry-content post-content">
                                    <div class="container"></div><!-- .container -->
                                    <div class="fullwidth-content">
                                        <div data-elementor-type="wp-page" data-elementor-id="2894" class="elementor elementor-2894">
                                            <div class="elementor-inner">
                                                <div class="elementor-section-wrap">
                                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-51c3e0e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="51c3e0e" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-thegem">
                                                            <div class="elementor-row">
                                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-be22a62" data-id="be22a62" data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-c66d14e elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c66d14e" data-element_type="section">
                                                                                <div class="elementor-container elementor-column-gap-thegem">
                                                                                    <div class="elementor-row">
                                                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f079f87" data-id="f079f87" data-element_type="column">
                                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                                <div class="elementor-widget-wrap">
                                                                                                    <div class="elementor-element elementor-element-35deffa flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-id="35deffa" data-element_type="widget" data-widget_type="heading.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <h2 class="elementor-heading-title elementor-size-default">Consulting</h2>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-9cbb7bf flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-id="9cbb7bf" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                                                <p>We create customer-centric, digital experiences by pairing the right tech solutions to transform your business.</p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-1ceb30b flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-button" data-id="1ceb30b" data-element_type="widget" data-widget_type="button.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-button-wrapper"> <a href="../salesforce-consulting-services/index.html" class="elementor-button-link elementor-button elementor-size-sm" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">Explore More</span> </span> </a></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-188d405" data-id="188d405" data-element_type="column">
                                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                                <div class="elementor-widget-wrap">
                                                                                                    <div class="elementor-element elementor-element-89f996e flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image" data-id="89f996e" data-element_type="widget" data-widget_type="image.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-image"> <img fetchpriority="high" decoding="async" width="313" height="244" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/05/rsz_icons-2_consulting-1.png" class="attachment-large size-large" alt="" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2022/05/rsz_icons-2_consulting-1.png 313w, https://dtcforce.com/wp-content/uploads/2022/05/rsz_icons-2_consulting-1-300x234.png 300w" sizes="(max-width: 313px) 100vw, 313px" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df3eda4037" />
                                                                                                                <script>
                                                                                                                    window.tgpQueue.add('tgpli-660df3eda4037')
                                                                                                                </script><noscript><img fetchpriority="high" decoding="async" width="313" height="244" src="../wp-content/uploads/2022/05/rsz_icons-2_consulting-1.png" class="attachment-large size-large" alt="" srcset="https://dtcforce.com/wp-content/uploads/2022/05/rsz_icons-2_consulting-1.png 313w, https://dtcforce.com/wp-content/uploads/2022/05/rsz_icons-2_consulting-1-300x234.png 300w" sizes="(max-width: 313px) 100vw, 313px" /></noscript>
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
                                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-ab1e566 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ab1e566" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-container elementor-column-gap-thegem">
                                                            <div class="elementor-row">
                                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8b113c8" data-id="8b113c8" data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-8081a5d elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8081a5d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                <div class="elementor-container elementor-column-gap-thegem">
                                                                                    <div class="elementor-row">
                                                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2c95c86" data-id="2c95c86" data-element_type="column">
                                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                                <div class="elementor-widget-wrap">
                                                                                                    <div class="elementor-element elementor-element-d053ba2 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image" data-id="d053ba2" data-element_type="widget" data-widget_type="image.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-image"> <img decoding="async" width="300" height="300" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/icons-2_strategy-300x300.png" class="attachment-medium size-medium" alt="" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2022/04/icons-2_strategy-300x300.png 300w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_strategy-150x150.png 150w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_strategy-256x256.png 256w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_strategy-600x600.png 600w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_strategy-100x100.png 100w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_strategy.png 626w" sizes="(max-width: 300px) 100vw, 300px" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df3eda4044" />
                                                                                                                <script>
                                                                                                                    window.tgpQueue.add('tgpli-660df3eda4044')
                                                                                                                </script><noscript><img decoding="async" width="300" height="300" src="../wp-content/uploads/2022/04/icons-2_strategy-300x300.png" class="attachment-medium size-medium" alt="" srcset="https://dtcforce.com/wp-content/uploads/2022/04/icons-2_strategy-300x300.png 300w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_strategy-150x150.png 150w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_strategy-256x256.png 256w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_strategy-600x600.png 600w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_strategy-100x100.png 100w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_strategy.png 626w" sizes="(max-width: 300px) 100vw, 300px" /></noscript>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3d8bf1b" data-id="3d8bf1b" data-element_type="column">
                                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                                <div class="elementor-widget-wrap">
                                                                                                    <div class="elementor-element elementor-element-f70bc09 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-id="f70bc09" data-element_type="widget" data-widget_type="heading.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <h2 class="elementor-heading-title elementor-size-default">Strategy</h2>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-ef15004 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-id="ef15004" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                                                <p>We partner with you to outline the roadmap to success. It’s not just about getting from point A to point B. We turn your vision into a reality, transforming the way you operate.</p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-2e25c9c flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-button" data-id="2e25c9c" data-element_type="widget" data-widget_type="button.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-button-wrapper"> <a href="../salesforce-strategy/index.html" class="elementor-button-link elementor-button elementor-size-sm" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">Explore More</span> </span> </a></div>
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
                                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-86afb17 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="86afb17" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-thegem">
                                                            <div class="elementor-row">
                                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d4d32db" data-id="d4d32db" data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-fa7ebdf elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="fa7ebdf" data-element_type="section">
                                                                                <div class="elementor-container elementor-column-gap-thegem">
                                                                                    <div class="elementor-row">
                                                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d0dd359" data-id="d0dd359" data-element_type="column">
                                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                                <div class="elementor-widget-wrap">
                                                                                                    <div class="elementor-element elementor-element-5c3f3f1 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-id="5c3f3f1" data-element_type="widget" data-widget_type="heading.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <h2 class="elementor-heading-title elementor-size-default">Integrations</h2>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-7a1965e flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-id="7a1965e" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                                                <p>Bring your teams on the same page and keep up with changing business landscapes. Our experts work with you to deliver the best integration for you. We bring experience, expertise and we love a challenge</p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-cad6f0d flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-button" data-id="cad6f0d" data-element_type="widget" data-widget_type="button.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-button-wrapper"> <a href="../salesforce-integration-services/index.html" class="elementor-button-link elementor-button elementor-size-sm" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">Explore More</span> </span> </a></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1e412e3" data-id="1e412e3" data-element_type="column">
                                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                                <div class="elementor-widget-wrap">
                                                                                                    <div class="elementor-element elementor-element-059801c flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image" data-id="059801c" data-element_type="widget" data-widget_type="image.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-image"> <img decoding="async" width="300" height="300" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/icons-2_integration-300x300.png" class="attachment-medium size-medium" alt="" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2022/04/icons-2_integration-300x300.png 300w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_integration-150x150.png 150w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_integration-256x256.png 256w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_integration-600x600.png 600w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_integration-100x100.png 100w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_integration.png 626w" sizes="(max-width: 300px) 100vw, 300px" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df3eda4058" />
                                                                                                                <script>
                                                                                                                    window.tgpQueue.add('tgpli-660df3eda4058')
                                                                                                                </script><noscript><img decoding="async" width="300" height="300" src="../wp-content/uploads/2022/04/icons-2_integration-300x300.png" class="attachment-medium size-medium" alt="" srcset="https://dtcforce.com/wp-content/uploads/2022/04/icons-2_integration-300x300.png 300w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_integration-150x150.png 150w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_integration-256x256.png 256w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_integration-600x600.png 600w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_integration-100x100.png 100w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_integration.png 626w" sizes="(max-width: 300px) 100vw, 300px" /></noscript>
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
                                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-568f63e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="568f63e" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-container elementor-column-gap-thegem">
                                                            <div class="elementor-row">
                                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8c19695" data-id="8c19695" data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-4a821e2 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4a821e2" data-element_type="section">
                                                                                <div class="elementor-container elementor-column-gap-thegem">
                                                                                    <div class="elementor-row">
                                                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3af188a" data-id="3af188a" data-element_type="column">
                                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                                <div class="elementor-widget-wrap">
                                                                                                    <div class="elementor-element elementor-element-5e62fc9 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image" data-id="5e62fc9" data-element_type="widget" data-widget_type="image.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-image"> <img decoding="async" width="300" height="300" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/icons-2_data-analysis-300x300.png" class="attachment-medium size-medium" alt="" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2022/04/icons-2_data-analysis-300x300.png 300w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_data-analysis-150x150.png 150w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_data-analysis-256x256.png 256w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_data-analysis-600x600.png 600w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_data-analysis-100x100.png 100w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_data-analysis.png 626w" sizes="(max-width: 300px) 100vw, 300px" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df3eda4066" />
                                                                                                                <script>
                                                                                                                    window.tgpQueue.add('tgpli-660df3eda4066')
                                                                                                                </script><noscript><img decoding="async" width="300" height="300" src="../wp-content/uploads/2022/04/icons-2_data-analysis-300x300.png" class="attachment-medium size-medium" alt="" srcset="https://dtcforce.com/wp-content/uploads/2022/04/icons-2_data-analysis-300x300.png 300w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_data-analysis-150x150.png 150w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_data-analysis-256x256.png 256w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_data-analysis-600x600.png 600w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_data-analysis-100x100.png 100w, https://dtcforce.com/wp-content/uploads/2022/04/icons-2_data-analysis.png 626w" sizes="(max-width: 300px) 100vw, 300px" /></noscript>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1f3c8b6" data-id="1f3c8b6" data-element_type="column">
                                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                                <div class="elementor-widget-wrap">
                                                                                                    <div class="elementor-element elementor-element-47a8c02 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-id="47a8c02" data-element_type="widget" data-widget_type="heading.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <h2 class="elementor-heading-title elementor-size-default">Data Analytics</h2>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-2b7c74e flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-id="2b7c74e" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                                                <p>We dig deep to get actionable insights and use them to power growth, and generate value for you. We humanize the numbers to get better context and help you make accurate decisions.</p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-ac9df0b flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-button" data-id="ac9df0b" data-element_type="widget" data-widget_type="button.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-button-wrapper"> <a href="../data-analytics-services/index.html" class="elementor-button-link elementor-button elementor-size-sm" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">Explore More</span> </span> </a></div>
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
                                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-4c869307 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4c869307" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-container elementor-column-gap-thegem">
                                                            <div class="elementor-row">
                                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-464ba1e1" data-id="464ba1e1" data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div class="elementor-element elementor-element-a1d2958 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-id="a1d2958" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:0}" data-widget_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h3 class="elementor-heading-title elementor-size-default">We combine the expertise and experience to earn the trust of our partners</h3>
                                                                                </div>
                                                                            </div>
                                                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-6935189e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6935189e" data-element_type="section">
                                                                                <div class="elementor-container elementor-column-gap-thegem">
                                                                                    <div class="elementor-row">
                                                                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-468b52d" data-id="468b52d" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;}">
                                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                                <div class="elementor-widget-wrap">
                                                                                                    <div class="elementor-element elementor-element-123a28c0 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image" data-id="123a28c0" data-element_type="widget" data-widget_type="image.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-image"> <img decoding="async" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-20.png" title="Client Logoa-20" alt="Client Logoa-20" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df3eda4076" />
                                                                                                                <script>
                                                                                                                    window.tgpQueue.add('tgpli-660df3eda4076')
                                                                                                                </script><noscript><img decoding="async" src="../wp-content/uploads/2022/05/client-logoa-20.png" title="Client Logoa-20" alt="Client Logoa-20" /></noscript>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-5d91c8de flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-id="5d91c8de" data-element_type="widget" data-widget_type="heading.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <h3 class="elementor-heading-title elementor-size-default">Lead Sigma</h3>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-26f3c8f0 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-id="26f3c8f0" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                                                <p>LeadSigma is a sales-tech platform that plugs leaky sales funnels by connecting online forms &amp; efficient provides actionable follow-up tasks.</p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-27f1fabd" data-id="27f1fabd" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;}">
                                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                                <div class="elementor-widget-wrap">
                                                                                                    <div class="elementor-element elementor-element-170255f6 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image" data-id="170255f6" data-element_type="widget" data-widget_type="image.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-image"> <img decoding="async" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-33.png" title="Client Logoa-33" alt="Client Logoa-33" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df3eda407d" />
                                                                                                                <script>
                                                                                                                    window.tgpQueue.add('tgpli-660df3eda407d')
                                                                                                                </script><noscript><img decoding="async" src="../wp-content/uploads/2022/05/client-logoa-33.png" title="Client Logoa-33" alt="Client Logoa-33" /></noscript>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-118f16a4 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-id="118f16a4" data-element_type="widget" data-widget_type="heading.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <h3 class="elementor-heading-title elementor-size-default">Bradford Scott</h3>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-6c24c333 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-id="6c24c333" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                                                <p>Bradford-Scott is a distributor of Sharetec Credit Union Software, one of the most widely used Credit Union software packages in the U.S.</p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-17bf3582" data-id="17bf3582" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;}">
                                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                                <div class="elementor-widget-wrap">
                                                                                                    <div class="elementor-element elementor-element-5bca2566 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image" data-id="5bca2566" data-element_type="widget" data-widget_type="image.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-image"> <img decoding="async" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/onpoint-circle.jpg" title="onpoint-circle" alt="onpoint-circle" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df3eda4083" />
                                                                                                                <script>
                                                                                                                    window.tgpQueue.add('tgpli-660df3eda4083')
                                                                                                                </script><noscript><img decoding="async" src="../wp-content/uploads/2022/04/onpoint-circle.jpg" title="onpoint-circle" alt="onpoint-circle" /></noscript>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-474eb04d flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-id="474eb04d" data-element_type="widget" data-widget_type="heading.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <h3 class="elementor-heading-title elementor-size-default">OnPoint</h3>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-fb472c8 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-id="fb472c8" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                                                <p>OnPoint provides retailers with a comprehensive powerful scan data solution allowing them be more competitive and drive profits.</p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4dc0c5fb" data-id="4dc0c5fb" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;}">
                                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                                <div class="elementor-widget-wrap">
                                                                                                    <div class="elementor-element elementor-element-2dcb2876 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image" data-id="2dcb2876" data-element_type="widget" data-widget_type="image.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-image"> <img decoding="async" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/05/client-logoa-27.png" title="Client Logoa-27" alt="Client Logoa-27" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df3eda4089" />
                                                                                                                <script>
                                                                                                                    window.tgpQueue.add('tgpli-660df3eda4089')
                                                                                                                </script><noscript><img decoding="async" src="../wp-content/uploads/2022/05/client-logoa-27.png" title="Client Logoa-27" alt="Client Logoa-27" /></noscript>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-6dd8824b flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-id="6dd8824b" data-element_type="widget" data-widget_type="heading.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <h3 class="elementor-heading-title elementor-size-default">Parkonect</h3>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-732759c7 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-id="732759c7" data-element_type="widget" data-widget_type="text-editor.default">
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
                                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-e06318c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e06318c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-container elementor-column-gap-thegem">
                                                            <div class="elementor-row">
                                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-243777e1" data-id="243777e1" data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div class="elementor-element elementor-element-22b6a258 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-id="22b6a258" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h2 class="elementor-heading-title elementor-size-default">Working With Multi-cloud Products For High-Tech Industry</h2>
                                                                                </div>
                                                                            </div>
                                                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-6c9afe65 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6c9afe65" data-element_type="section">
                                                                                <div class="elementor-container elementor-column-gap-thegem">
                                                                                    <div class="elementor-row">
                                                                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4106500c" data-id="4106500c" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                                <div class="elementor-widget-wrap">
                                                                                                    <div class="elementor-element elementor-element-3f30fc50 elementor-position-top elementor-vertical-align-top flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image-box" data-id="3f30fc50" data-element_type="widget" data-widget_type="image-box.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-image-box-wrapper">
                                                                                                                <figure class="elementor-image-box-img"><img decoding="async" width="300" height="211" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/cloud_sales-17-300x211.png" class="attachment-medium size-medium" alt="" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df3eda4093" />
                                                                                                                    <script>
                                                                                                                        window.tgpQueue.add('tgpli-660df3eda4093')
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
                                                                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-3441247d" data-id="3441247d" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                                <div class="elementor-widget-wrap">
                                                                                                    <div class="elementor-element elementor-element-28fdb992 elementor-position-top elementor-vertical-align-top flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image-box" data-id="28fdb992" data-element_type="widget" data-widget_type="image-box.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-image-box-wrapper">
                                                                                                                <figure class="elementor-image-box-img"><img decoding="async" width="300" height="211" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/cloud-20-300x211.png" class="attachment-medium size-medium" alt="" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df3eda409a" />
                                                                                                                    <script>
                                                                                                                        window.tgpQueue.add('tgpli-660df3eda409a')
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
                                                                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-60a81015" data-id="60a81015" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                                <div class="elementor-widget-wrap">
                                                                                                    <div class="elementor-element elementor-element-4820ee74 elementor-position-top elementor-vertical-align-top flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image-box" data-id="4820ee74" data-element_type="widget" data-widget_type="image-box.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-image-box-wrapper">
                                                                                                                <figure class="elementor-image-box-img"><img decoding="async" width="300" height="211" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/cloud_fsl-18-300x211.png" class="attachment-medium size-medium" alt="" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df3eda40a0" />
                                                                                                                    <script>
                                                                                                                        window.tgpQueue.add('tgpli-660df3eda40a0')
                                                                                                                    </script><noscript><img decoding="async" width="300" height="211" src="../wp-content/uploads/2022/04/cloud_fsl-18-300x211.png" class="attachment-medium size-medium" alt="" /></noscript>
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
                                                                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-682a962f" data-id="682a962f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                                <div class="elementor-widget-wrap">
                                                                                                    <div class="elementor-element elementor-element-3f496362 elementor-position-top elementor-vertical-align-top flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image-box" data-id="3f496362" data-element_type="widget" data-widget_type="image-box.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-image-box-wrapper">
                                                                                                                <figure class="elementor-image-box-img"><img decoding="async" width="300" height="211" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/cloud_marketing-300x211.png" class="attachment-medium size-medium" alt="" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df3eda40a7" />
                                                                                                                    <script>
                                                                                                                        window.tgpQueue.add('tgpli-660df3eda40a7')
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
                                                                            <div class="elementor-element elementor-element-419c5565 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-styledbutton" data-id="419c5565" data-element_type="widget" data-settings="{&quot;thegem_button_skin&quot;:&quot;outline&quot;,&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="thegem-styledbutton.default">
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
                                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-427da3e3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="427da3e3" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-container elementor-column-gap-thegem">
                                                            <div class="elementor-row">
                                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-39f7a0ec" data-id="39f7a0ec" data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div class="elementor-element elementor-element-534869b flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-id="534869b" data-element_type="widget" data-widget_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h2 class="elementor-heading-title elementor-size-default">What Our Clients Say About Us</h2>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-element elementor-element-584d536d flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-testimonials" data-id="584d536d" data-element_type="widget" data-settings="{&quot;thegem_elementor_preset&quot;:&quot;style2&quot;,&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:0,&quot;content_testimonials_cat&quot;:&quot;all&quot;,&quot;content_elems_img&quot;:&quot;yes&quot;,&quot;content_elems_name&quot;:&quot;yes&quot;,&quot;content_elems_position&quot;:&quot;yes&quot;,&quot;content_elems_company&quot;:&quot;yes&quot;,&quot;content_elems_quote&quot;:&quot;yes&quot;}" data-widget_type="thegem-testimonials.default">
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
                                                                                                    <div class="gem-testimonial-image"> <span> <img decoding="async" width="80" height="80" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2020/11/image_720-1.webp" class="img-responsive img-circle wp-post-image" alt="" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2020/11/image_720-1-thegem-testimonial.webp 2x" sizes="100vw" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df3eda40b2" />
                                                                                                            <script>
                                                                                                                window.tgpQueue.add('tgpli-660df3eda40b2')
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
                                                                                                    <div class="gem-testimonial-image"> <span> <img decoding="async" width="80" height="80" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2020/11/cassandra-lynn-1.webp" class="img-responsive img-circle wp-post-image" alt="" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2020/11/cassandra-lynn-1-thegem-testimonial.webp 2x" sizes="100vw" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df3eda40bb" />
                                                                                                            <script>
                                                                                                                window.tgpQueue.add('tgpli-660df3eda40bb')
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
                                                                                                <div class="gem-testimonial-image"> <span> <img decoding="async" width="600" height="600" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/andy-lazarkis.jpg" class="img-responsive img-circle wp-post-image" alt="" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2022/04/andy-lazarkis-thegem-testimonial.jpg 2x" sizes="100vw" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df3eda40c5" />
                                                                                                        <script>
                                                                                                            window.tgpQueue.add('tgpli-660df3eda40c5')
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
                                                                                                <div class="gem-testimonial-image"> <span> <img decoding="async" width="392" height="392" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/11/Image-empty-state.webp" class="img-responsive img-circle wp-post-image" alt="" data-tgpli-srcset="https://dtcforce.com/wp-content/uploads/2022/11/Image-empty-state-thegem-testimonial.webp 2x" sizes="100vw" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df3eda40cd" />
                                                                                                        <script>
                                                                                                            window.tgpQueue.add('tgpli-660df3eda40cd')
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
                                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-43dff58 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="43dff58" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-container elementor-column-gap-thegem">
                                                            <div class="elementor-row">
                                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3431c825" data-id="3431c825" data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div class="elementor-element elementor-element-2f9db23a flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-id="2f9db23a" data-element_type="widget" data-widget_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h2 class="elementor-heading-title elementor-size-default">Recent Blogs</h2>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-element elementor-element-56a31ca elementor-grid-3 elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-posts--thumbnail-top flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-posts" data-id="56a31ca" data-element_type="widget" data-settings="{&quot;classic_columns&quot;:&quot;3&quot;,&quot;classic_columns_tablet&quot;:&quot;2&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:35,&quot;sizes&quot;:[]},&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="posts.classic">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
                                                                                        <article class="elementor-post elementor-grid-item post-10677 post type-post status-publish format-standard has-post-thumbnail category-crm"> <a class="elementor-post__thumbnail__link" href="../the-complete-guide-to-crm-transforming-businesses-from-startups-to-enterprises/index.html">
                                                                                                <div class="elementor-post__thumbnail"><img decoding="async" width="300" height="171" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2024/03/businessman-holding-digital-tablet-success-cityscape-generated-by-ai-300x171.jpg" class="attachment-medium size-medium" alt="" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df3eda40d8" />
                                                                                                    <script>
                                                                                                        window.tgpQueue.add('tgpli-660df3eda40d8')
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
                                                                                                <div class="elementor-post__thumbnail"><img decoding="async" width="300" height="167" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2024/02/4-300x167.jpg" class="attachment-medium size-medium" alt="Salesforce Summit Partner Status forNaw Labs" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df3eda40e0" />
                                                                                                    <script>
                                                                                                        window.tgpQueue.add('tgpli-660df3eda40e0')
                                                                                                    </script><noscript><img decoding="async" width="300" height="167" src="../wp-content/uploads/2024/02/4-300x167.jpg" class="attachment-medium size-medium" alt="Salesforce Summit Partner Status forNaw Labs" /></noscript>
                                                                                                </div>
                                                                                            </a>
                                                                                            <div class="elementor-post__text">
                                                                                                <h3 class="elementor-post__title"> <a href="../dtcforce-salesforce-summit-partner-status/index.html">Naw Labs ascends to Salesforce Summit Partner Level </a></h3>
                                                                                                <div class="elementor-post__meta-data"> <span class="elementor-post-date"> February 9, 2024 </span> <span class="elementor-post-avatar"> No Comments </span></div>
                                                                                                <div class="elementor-post__excerpt">
                                                                                                    <p>Naw Labs has achieved the Salesforce Summit Partner status. It is an honor that speaks volumes about our commitment and</p>
                                                                                                </div> <a class="elementor-post__read-more" href="../dtcforce-salesforce-summit-partner-status/index.html"> Read More » </a>
                                                                                            </div>
                                                                                        </article>
                                                                                        <article class="elementor-post elementor-grid-item post-7542 post type-post status-publish format-standard has-post-thumbnail category-salesforce"> <a class="elementor-post__thumbnail__link" href="../dtc-force-climbs-to-crest-a-new-milestone-in-salesforce-partnership/index.html">
                                                                                                <div class="elementor-post__thumbnail"><img decoding="async" width="300" height="167" data-tgpli-src="https://dtcforce.com/wp-content/uploads/2023/10/DTC-Force-Elevates-to-Crest-Level-Partnership-with-Salesforce-01-300x167.jpg" class="attachment-medium size-medium" alt="" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df3eda40e8" />
                                                                                                    <script>
                                                                                                        window.tgpQueue.add('tgpli-660df3eda40e8')
                                                                                                    </script><noscript><img decoding="async" width="300" height="167" src="../wp-content/uploads/2023/10/DTC-Force-Elevates-to-Crest-Level-Partnership-with-Salesforce-01-300x167.jpg" class="attachment-medium size-medium" alt="" /></noscript>
                                                                                                </div>
                                                                                            </a>
                                                                                            <div class="elementor-post__text">
                                                                                                <h3 class="elementor-post__title"> <a href="../dtc-force-climbs-to-crest-a-new-milestone-in-salesforce-partnership/index.html">Naw Labs Climbs to &#8216;Crest&#8217; &#8211; A New Milestone in Salesforce Partnership! </a></h3>
                                                                                                <div class="elementor-post__meta-data"> <span class="elementor-post-date"> October 26, 2023 </span> <span class="elementor-post-avatar"> No Comments </span></div>
                                                                                                <div class="elementor-post__excerpt">
                                                                                                    <p>In a remarkable showcase of expertise and dedication,Naw Labs announces its ascension to the coveted &#8216;Crest&#8217; level partnership within</p>
                                                                                                </div> <a class="elementor-post__read-more" href="../dtc-force-climbs-to-crest-a-new-milestone-in-salesforce-partnership/index.html"> Read More » </a>
                                                                                            </div>
                                                                                        </article>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-2d6cbd4f elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="2d6cbd4f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-container elementor-column-gap-no">
                                                            <div class="elementor-row">
                                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5b1b0e43" data-id="5b1b0e43" data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-3b32b439 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3b32b439" data-element_type="section" id="contact">
                                                                                <div class="elementor-container elementor-column-gap-thegem">
                                                                                    <div class="elementor-row">
                                                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5b216a90" data-id="5b216a90" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                                <div class="elementor-widget-wrap">
                                                                                                    <div class="elementor-element elementor-element-70970589 elementor-widget__width-auto flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading" data-id="70970589" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:300}" data-widget_type="heading.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="title-h2 elementor-heading-title elementor-size-default">Let's get started.</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-12791ff5 elementor-widget__width-initial flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor" data-id="12791ff5" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:500}" data-widget_type="text-editor.default">
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
                                                                                                    <div class="elementor-element elementor-element-603a5eff flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-contact-form7" data-id="603a5eff" data-element_type="widget" data-settings="{&quot;thegem_elementor_preset&quot;:&quot;white&quot;,&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:700,&quot;thegem_custom_css&quot;:&quot;.wpcf7 form .wpcf7-response-output {\n    border: none !important;\n}&quot;}" data-widget_type="thegem-contact-form7.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="wpcf7 no-js" id="wpcf7-f1646-p2894-o1" lang="en-US" dir="ltr">
                                                                                                                <div class="screen-reader-response">
                                                                                                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                                                                                    <ul></ul>
                                                                                                                </div>
                                                                                                                <form action="https://dtcforce.com/expertise/#wpcf7-f1646-p2894-o1" method="post" class="wpcf7-form init thegem-cf7 gem-contact-form-white form-603a5eff label-top" aria-label="Contact form" novalidate="novalidate" data-status="init">
                                                                                                                    <div style="display: none;"> <input type="hidden" name="_wpcf7" value="1646" /> <input type="hidden" name="_wpcf7_version" value="5.7" /> <input type="hidden" name="_wpcf7_locale" value="en_US" /> <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1646-p2894-o1" /> <input type="hidden" name="_wpcf7_container_post" value="2894" /> <input type="hidden" name="_wpcf7_posted_data_hash" value="" /></div>
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
                                                                                                                    <p style="display: none !important;"><label>&#916;<textarea name="_wpcf7_ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea></label><input type="hidden" id="ak_js_1" name="_wpcf7_ak_js" value="140" />
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
                                                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-439549c1" data-id="439549c1" data-element_type="column">
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
                                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-350e0089 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="350e0089" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-container elementor-column-gap-no">
                                                            <div class="elementor-row">
                                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7aa1db0d" data-id="7aa1db0d" data-element_type="column">
                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div class="elementor-element elementor-element-651f2ba0 elementor-absolute elementor-hidden-phone elementor-hidden-tablet flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-styledimage" data-id="651f2ba0" data-element_type="widget" data-settings="{&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/dtcforce.com\/wp-content\/uploads\/2022\/04\/cloud-back-2.png&quot;,&quot;id&quot;:1752,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;_position&quot;:&quot;absolute&quot;,&quot;thegem_interaction_vertical_scroll&quot;:&quot;yes&quot;,&quot;thegem_interaction_vertical_scroll_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3,&quot;sizes&quot;:[]},&quot;thegem_elementor_preset&quot;:&quot;default&quot;,&quot;thegem_interaction_vertical_scroll_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;thegem_interaction_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="thegem-styledimage.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="styled-image-wrapper">
                                                                                        <div class="gem-image gem-wrapbox gem-wrapbox-default gem-wrapbox-position-right  ">
                                                                                            <div class="gem-wrapbox-inner "> <img decoding="async" class="gem-wrapbox-element img-responsive " data-tgpli-src="https://dtcforce.com/wp-content/uploads/2022/04/cloud-back-2.png" alt="cloud-back-2" data-tgpli-inited data-tgpli-image-inited id="tgpli-660df3eda4104">
                                                                                                <script>
                                                                                                    window.tgpQueue.add('tgpli-660df3eda4104')
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
    <script defer>
        // window.recaptchaCallback = recaptchaCallback;
            //recaptchaCallback();
    </script>
    <script src="../../code.tidio.co_443/817rixdwsccsumiedm5jxlqnxvnq5ouf.js" async></script>
    <script>
        function getCurrentURL () {
          return window.location.href
        }
        
        // Example
        const url = getCurrentURL()
        urlSearch = url.search("../ar/index.html")
        if(urlSearch != -1)
            {
                jQuery(".en-footer").fadeOut();
                jQuery(".ar-footer").fadeIn();
            } else {
                jQuery(".ar-footer").fadeOut();
                jQuery(".en-footer").fadeIn();
            }
    </script>
    <link rel='stylesheet' id='elementor-post-1640-css' href='../wp-content/uploads/elementor/css/post-16406fca.css?ver=1706705112' type='text/css' media='all' />
    <script type="text/javascript" src="../wp-content/cache/autoptimize/js/autoptimize_single_0fd156974edf4633c46210b0af6c722c87e8.js?ver=5.7.0" id="thegem-form-elements-js"></script>
    <script type="text/javascript" src="../wp-content/cache/autoptimize/js/autoptimize_single_d96c6dc5ebeeda3944c9d32427a6071687e8.js?ver=5.7.0" id="jquery-easing-js"></script>
    <script type="text/javascript" id="thegem-scripts-js-extra">
        /* <![CDATA[ */
        var thegem_scripts_data = {"ajax_url":"https:\/\/dtcforce.com\/wp-admin\/admin-ajax.php","ajax_nonce":"4adf90404a"};
        /* ]]> */
    </script>
    <script type="text/javascript" src="../wp-content/cache/autoptimize/js/autoptimize_single_0a08240eca8bd61647f913a2309797a087e8.js?ver=5.7.0" id="thegem-scripts-js"></script>
    <script type="text/javascript" src="../wp-content/cache/autoptimize/js/autoptimize_single_b0f7225166e217cfb64b80ae8ebbb60487e8.js?ver=5.7.0" id="jquery-mousewheel-js"></script>
    <script type="text/javascript" src="../wp-content/themes/thegem-elementor/js/fancyBox/jquery.fancybox.min87e8.js?ver=5.7.0" id="jquery-fancybox-js"></script>
    <script type="text/javascript" src="../wp-content/cache/autoptimize/js/autoptimize_single_837c491328e57af6c7dd6d94b9e4d7f087e8.js?ver=5.7.0" id="fancybox-init-script-js"></script>
    <script type="text/javascript" src="../wp-content/cache/autoptimize/js/autoptimize_single_7f0734e228d3f1a255a8b817a5005b8ee23c.js?ver=5.7" id="swv-js"></script>
    <script type="text/javascript" id="contact-form-7-js-extra">
        /* <![CDATA[ */
        var wpcf7 = {"api":{"root":"https:\/\/dtcforce.com\/wp-json\/","namespace":"contact-form-7\/v1"},"cached":"1"};
        /* ]]> */
    </script>
    <script type="text/javascript" src="../wp-content/cache/autoptimize/js/autoptimize_single_f57435a927d422043befe66bd74f4d68e23c.js?ver=5.7" id="contact-form-7-js"></script>
    <script type="text/javascript" id="wpcf7-redirect-script-js-extra">
        /* <![CDATA[ */
        var wpcf7r = {"ajax_url":"https:\/\/dtcforce.com\/wp-admin\/admin-ajax.php"};
        /* ]]> */
    </script>
    <script type="text/javascript" src="../wp-content/cache/autoptimize/js/autoptimize_single_e3317d55ad904d30ea400a2da2a566864963.js?ver=1.1" id="wpcf7-redirect-script-js"></script>
    <script type="text/javascript" id="rocket-browser-checker-js-after">
        /* <![CDATA[ */
        "use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
        /* ]]> */
    </script>
    <script type="text/javascript" id="rocket-preload-links-js-extra">
        /* <![CDATA[ */
        var RocketPreloadLinksConfig = {"excludeUris":"\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/(index\\.php\/)?wp\\-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/","usesTrailingSlash":"1","imageExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php","fileExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm","siteUrl":"https:\/\/dtcforce.com\/","onHoverDelay":"100","rateThrottle":"3"};
        /* ]]> */
    </script>
    <script type="text/javascript" id="rocket-preload-links-js-after">
        /* <![CDATA[ */
        (function() {
        "use strict";var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}();function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var t=function(){function n(e,t){i(this,n),this.browser=e,this.config=t,this.options=this.browser.options,this.prefetched=new Set,this.eventTime=null,this.threshold=1111,this.numOnHover=0}return e(n,[{key:"init",value:function(){!this.browser.supportsLinkPrefetch()||this.browser.isDataSaverModeOn()||this.browser.isSlowConnection()||(this.regex={excludeUris:RegExp(this.config.excludeUris,"i"),images:RegExp(".("+this.config.imageExt+")$","i"),fileExt:RegExp(".("+this.config.fileExt+")$","i")},this._initListeners(this))}},{key:"_initListeners",value:function(e){-1<this.config.onHoverDelay&&document.addEventListener("mouseover",e.listener.bind(e),e.listenerOptions),document.addEventListener("mousedown",e.listener.bind(e),e.listenerOptions),document.addEventListener("touchstart",e.listener.bind(e),e.listenerOptions)}},{key:"listener",value:function(e){var t=e.target.closest("a"),n=this._prepareUrl(t);if(null!==n)switch(e.type){case"mousedown":case"touchstart":this._addPrefetchLink(n);break;case"mouseover":this._earlyPrefetch(t,n,"mouseout")}}},{key:"_earlyPrefetch",value:function(t,e,n){var i=this,r=setTimeout(function(){if(r=null,0===i.numOnHover)setTimeout(function(){return i.numOnHover=0},1e3);else if(i.numOnHover>i.config.rateThrottle)return;i.numOnHover++,i._addPrefetchLink(e)},this.config.onHoverDelay);t.addEventListener(n,function e(){t.removeEventListener(n,e,{passive:!0}),null!==r&&(clearTimeout(r),r=null)},{passive:!0})}},{key:"_addPrefetchLink",value:function(i){return this.prefetched.add(i.href),new Promise(function(e,t){var n=document.createElement("link");n.rel="prefetch",n.href=i.href,n.onload=e,n.onerror=t,document.head.appendChild(n)}).catch(function(){})}},{key:"_prepareUrl",value:function(e){if(null===e||"object"!==(void 0===e?"undefined":r(e))||!1 in e||-1===["http:","https:"].indexOf(e.protocol))return null;var t=e.href.substring(0,this.config.siteUrl.length),n=this._getPathname(e.href,t),i={original:e.href,protocol:e.protocol,origin:t,pathname:n,href:t+n};return this._isLinkOk(i)?i:null}},{key:"_getPathname",value:function(e,t){var n=t?e.substring(this.config.siteUrl.length):e;return n.startsWith("../index.html")||(n="/"+n),this._shouldAddTrailingSlash(n)?n+"/":n}},{key:"_shouldAddTrailingSlash",value:function(e){return this.config.usesTrailingSlash&&!e.endsWith("../index.html")&&!this.regex.fileExt.test(e)}},{key:"_isLinkOk",value:function(e){return null!==e&&"object"===(void 0===e?"undefined":r(e))&&(!this.prefetched.has(e.href)&&e.origin===this.config.siteUrl&&-1===e.href.indexOf("?")&&-1===e.href.indexOf("#")&&!this.regex.excludeUris.test(e.href)&&!this.regex.images.test(e.href))}}],[{key:"run",value:function(){"undefined"!=typeof RocketPreloadLinksConfig&&new n(new RocketBrowserCompatibilityChecker({capture:!0,passive:!0}),RocketPreloadLinksConfig).init()}}]),n}();t.run();
        }());
        /* ]]> */
    </script>
    <script type="text/javascript" id="eael-general-js-extra">
        /* <![CDATA[ */
        var localize = {"ajaxurl":"https:\/\/dtcforce.com\/wp-admin\/admin-ajax.php","nonce":"fb6e9adb48","i18n":{"added":"Added ","compare":"Compare","loading":"Loading..."},"eael_translate_text":{"required_text":"is a required field","invalid_text":"Invalid","billing_text":"Billing","shipping_text":"Shipping","fg_mfp_counter_text":"of"},"page_permalink":"https:\/\/dtcforce.com\/expertise\/","cart_redirectition":"no","cart_page_url":"","el_breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}};
        /* ]]> */
    </script>
    <script type="text/javascript" src="../wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/js/view/general.min9f31.js?ver=5.7.2" id="eael-general-js"></script>
    <script type="text/javascript" src="../wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.minf269.js?ver=1.0.1" id="smartmenus-js"></script>
    <script type="text/javascript" src="../wp-content/cache/autoptimize/js/autoptimize_single_572ec923e80ba8ed8d71a6781b3f964387e8.js?ver=5.7.0" id="thegem-lazy-loading-js"></script>
    <script type="text/javascript" src="../wp-content/themes/thegem-elementor/js/jquery.touchSwipe.min87e8.js?ver=5.7.0" id="jquery-touchSwipe-js"></script>
    <script type="text/javascript" src="../wp-content/cache/autoptimize/js/autoptimize_single_261216c12320526fa5e2d917f37f987887e8.js?ver=5.7.0" id="jquery-carouFredSel-js"></script>
    <script type="text/javascript" src="../wp-content/cache/autoptimize/js/autoptimize_single_8da931464ee3d1799aafba445188a51b.js" id="thegem-testimonials-carousel-js"></script>
    <script type="text/javascript" src="../wp-includes/js/imagesloaded.minbb93.js?ver=5.0.0" id="imagesloaded-js"></script>
    <script defer type="text/javascript" src="../wp-content/cache/autoptimize/js/autoptimize_single_94bc4228bb5941670e191e40a6bc44bd5716.js?ver=1700327652" id="akismet-frontend-js"></script>
    <script type="text/javascript" src="../wp-content/cache/autoptimize/js/autoptimize_single_20871b430c21a490962c9d48dd01ce25.js" id="thegem-contact-form7-js"></script>
    <script type="text/javascript" src="../wp-content/plugins/thegem-elements-elementor/inc/elementor/widgets/interactions/assets/js/rellax.min.js" id="rellax-js"></script>
    <script type="text/javascript" src="../wp-content/plugins/elementor/assets/js/webpack.runtime.min7e2e.js?ver=3.8.1" id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript" src="../wp-content/plugins/elementor/assets/js/frontend-modules.min7e2e.js?ver=3.8.1" id="elementor-frontend-modules-js"></script>
    <script type="text/javascript" src="../wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2" id="elementor-waypoints-js"></script>
    <script type="text/javascript" src="../wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2" id="jquery-ui-core-js"></script>
    <script type="text/javascript" src="../wp-content/plugins/elementor/assets/lib/swiper/swiper.min48f5.js?ver=5.3.6" id="swiper-js"></script>
    <script type="text/javascript" src="../wp-content/plugins/elementor/assets/lib/share-link/share-link.min7e2e.js?ver=3.8.1" id="share-link-js"></script>
    <script type="text/javascript" src="../wp-content/plugins/elementor/assets/lib/dialog/dialog.mind227.js?ver=4.9.0" id="elementor-dialog-js"></script>
    <script type="text/javascript" id="elementor-frontend-js-before">
        /* <![CDATA[ */
        var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.8.1","is_static":false,"experimentalFeatures":{"e_import_export":true,"e_hidden_wordpress_widgets":true,"theme_builder_v2":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true,"page-transitions":true,"notes":true,"form-submissions":true,"e_scroll_snap":true},"urls":{"assets":"https:\/\/dtcforce.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"body_background_background":"classic","active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":2894,"title":"Expertise%20%7C%20DTC%20Force","excerpt":"","featuredImage":false}};
        /* ]]> */
    </script>
    <script type="text/javascript" src="../wp-content/plugins/elementor/assets/js/frontend.min7e2e.js?ver=3.8.1" id="elementor-frontend-js"></script>
    <script type="text/javascript" id="thegem-interactions-js-extra">
        /* <![CDATA[ */
        var thegem_interactions = {"651f2ba0":{"vertical_scroll":"yes","vertical_scroll_direction":1,"vertical_scroll_speed":3,"vertical_viewport_bottom":0,"vertical_viewport_top":100,"devices":""}};
        /* ]]> */
    </script>
    <script type="text/javascript" src="../wp-content/cache/autoptimize/js/autoptimize_single_653108f67c3723ae562afaadf9ac9bca.js" id="thegem-interactions-js"></script>
    <script type="text/javascript" src="../wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.minf3df.js?ver=3.7.2" id="elementor-pro-webpack-runtime-js"></script>
    <script type="text/javascript" src="../wp-includes/js/dist/vendor/wp-polyfill-inert.min0226.js?ver=3.1.2" id="wp-polyfill-inert-js"></script>
    <script type="text/javascript" src="../wp-includes/js/dist/vendor/regenerator-runtime.min6c85.js?ver=0.14.0" id="regenerator-runtime-js"></script>
    <script type="text/javascript" src="../wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0" id="wp-polyfill-js"></script>
    <script type="text/javascript" src="../wp-includes/js/dist/hooks.min2757.js?ver=2810c76e705dd1a53b18" id="wp-hooks-js"></script>
    <script type="text/javascript" src="../wp-includes/js/dist/i18n.minc33c.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
    <script type="text/javascript" id="wp-i18n-js-after">
        /* <![CDATA[ */
        wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
        /* ]]> */
    </script>
    <script type="text/javascript" id="elementor-pro-frontend-js-before">
        /* <![CDATA[ */
        var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/dtcforce.com\/wp-admin\/admin-ajax.php","nonce":"a2444ef4b3","urls":{"assets":"https:\/\/dtcforce.com\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/dtcforce.com\/wp-json\/"},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/dtcforce.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
        /* ]]> */
    </script>
    <script type="text/javascript" src="../wp-content/plugins/elementor-pro/assets/js/frontend.minf3df.js?ver=3.7.2" id="elementor-pro-frontend-js"></script>
    <script type="text/javascript" src="../wp-content/plugins/elementor-pro/assets/js/preloaded-elements-handlers.minf3df.js?ver=3.7.2" id="pro-preloaded-elements-handlers-js"></script>
    <script type="text/javascript" src="../wp-content/plugins/elementor/assets/js/preloaded-modules.min7e2e.js?ver=3.8.1" id="preloaded-modules-js"></script>
    <script type="text/javascript" src="../wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.minf3df.js?ver=3.7.2" id="e-sticky-js"></script>
    <script type="text/javascript" src="../wp-includes/js/underscore.mind584.js?ver=1.13.4" id="underscore-js"></script>
    <script type="text/javascript" id="wp-util-js-extra">
        /* <![CDATA[ */
        var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
        /* ]]> */
    </script>
    <script type="text/javascript" src="../wp-includes/js/wp-util.min8f99.js?ver=6.5" id="wp-util-js"></script>
    <script type="text/javascript" id="wpforms-elementor-js-extra">
        /* <![CDATA[ */
        var wpformsElementorVars = {"captcha_provider":"recaptcha","recaptcha_type":"v2"};
        /* ]]> */
    </script>
    <script type="text/javascript" src="../wp-content/plugins/wpforms-lite/assets/js/integrations/elementor/frontend.minda65.js?ver=1.8.4.1" id="wpforms-elementor-js"></script>
    <script type='text/javascript'>
        (function() {
                        var expirationDate = new Date();
                        expirationDate.setTime( expirationDate.getTime() + 31536000 * 1000 );
                        document.cookie = "pll_language=en; expires=" + expirationDate.toUTCString() + "; path=/; secure; SameSite=Lax";
                    }());
    </script>
    <script type="text/javascript">
        window.addEventListener("load", function(event) {
        jQuery(".cfx_form_main,.wpcf7-form,.wpforms-form,.gform_wrapper form").each(function(){
        var form=jQuery(this); 
        var screen_width=""; var screen_height="";
         if(screen_width == ""){
         if(screen){
           screen_width=screen.width;  
         }else{
             screen_width=jQuery(window).width();
         }    }  
          if(screen_height == ""){
         if(screen){
           screen_height=screen.height;  
         }else{
             screen_height=jQuery(window).height();
         }    }
        form.append('<input type="hidden" name="vx_width" value="'+screen_width+'">');
        form.append('<input type="hidden" name="vx_height" value="'+screen_height+'">');
        form.append('<input type="hidden" name="vx_url" value="'+window.location.href+'">');  
        }); 
        
        });
    </script>
    <script type="text/javascript">
        (function() {window.addEventListener("load",function(){var elem = document.getElementById("thegem-preloader-inline-css");setTimeout(function() { if (elem!==null && elem.parentNode!==null) elem.parentNode.removeChild(elem) }, 300); });})();
    </script>
</body> <!-- Mirrored from dtcforce.com/expertise/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2024 00:31:58 GMT -->

</html>