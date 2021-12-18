<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package unbound
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="F2F Solutions is dedicated to provide services and solutions to our clients need to meet their business challenges and goals">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="F2F Solutions, f2fsolution, f2f technologies, F2F, f2f, F2F Solutions, F2F Solutions,f2f technology,f2fsolution.com, f2fsolution.com,f2fsolution.in, www.f2fsolution.com, f2fsolution coimbatore, f2fsolution cbe, f2fsolution it company, f2fsolution,f2fsolution, f2fsolution software company,software,coimbatore,software company coimbatore,f2fsolution, f2fsolution software solutions, f2f solutions coimbatore, f2fsolution, F2F Solutions software,F2F Solutions coimbatore,F2F Solution coimbatore,">
        <meta name="csrf-token" content="ebWVNyG1CmcLKjOdsnai5f1nmTp2jM1pFmEfacj3">
        <meta name="author" content="f2fsolution">
        <meta name="copyright" content="F2F Solutions | 2015 - 2018">
        <meta name="robots" content="all">
        <title>Software Company in Coimbatore - F2F Solutions</title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <?php wp_head(); ?>
        <style>
            .flexbox-container {
                margin-left:307px;
            }
            .form-title clr {
                font-size:28px;
                color:white;
            }
            .modal-title {
                text-align:center !important;
            }
            .clr {
                color:white;
            }
        </style>
    </head>

    <?php
    $data_nicescroll_cursorcolor = (!empty(unbound_global_var('scrollbar_color', 'color', true)) ) ? unbound_global_var('scrollbar_color', 'color', true) : '';
    $data_nicescroll_cursorwidth = (!empty(unbound_global_var('scrollbar_width', 'width', true)) ) ? unbound_global_var('scrollbar_width', 'width', true) : '';
    $scrollbar_switch = (!empty(unbound_global_var('scrollbar_switch', '', false)) ) ? 'infinity-scroll' : '';
    ?>


    <?php if (( 'default' != get_post_meta(get_the_id(), 'selectheader', true) ) && ( get_post_meta(get_the_id(), 'selectheader', true) )) { ?>
        <body <?php echo esc_html($scrollbar_switch); ?> <?php body_class(); ?> data-header-style="header-style-<?php echo esc_attr(get_post_meta(get_the_id(), 'selectheader', true)); ?>" data-nicescroll-cursorcolor="<?php echo esc_attr($data_nicescroll_cursorcolor); ?>" data-nicescroll-cursorwidth="<?php echo esc_attr($data_nicescroll_cursorwidth); ?>">
        <?php } elseif (( unbound_global_var('header-style', '', false))) { ?>
        <body <?php echo esc_html($scrollbar_switch); ?> <?php body_class(); ?> data-header-style="<?php echo esc_attr(unbound_global_var('header-style', '', false)); ?>" data-nicescroll-cursorcolor="<?php echo esc_attr($data_nicescroll_cursorcolor); ?>" data-nicescroll-cursorwidth="<?php echo esc_attr($data_nicescroll_cursorwidth); ?>">
        <?php } else { ?>
        <body <?php echo esc_html($scrollbar_switch); ?> <?php body_class(); ?> data-nicescroll-cursorcolor="09276f" data-nicescroll-cursorwidth="10px">
        <?php } ?>


        <?php
        if (!is_user_logged_in() && !empty(unbound_global_var('coming_soon_switch', '', false))) {
            include get_parent_theme_file_path('coming-soon.php');
            die;
        } elseif (!is_user_logged_in() && !empty(unbound_global_var('maintenance_mode_switch', '', false))) {
            include get_parent_theme_file_path('maintenance.php');
            die;
        } elseif (!is_user_logged_in() && !empty(unbound_global_var('coming_soon_switch', '', false)) && !empty(unbound_global_var('maintenance_mode_switch', '', false))) {
            include get_parent_theme_file_path('coming-soon.php');
            die;
        }
        ?>

        <?php if (unbound_global_var('preloader_switch', '', false)) { ?>
            <!-- preloader -->
            <div class="preloader" data-preloader-timeout="<?php echo esc_attr(unbound_global_var('preloader_timeout', '', false)); ?>">
                <div class="table">
                    <div class="table-cell">
                        <?php
                        if (!empty(unbound_global_var('preloader_style', '', false))) {
                            include get_parent_theme_file_path('inc/preloader/' . unbound_global_var('preloader_style', '', false) . '.php');
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- preloader -->
        <?php } ?>

        <!-- overlay -->
        <div class="overlay"></div>
        <!-- overlay -->

        <!-- scrollup -->
        <?php if (unbound_global_var('scroll_to_top_switch', '', false)) { ?>
            <?php if (!empty(unbound_global_var('scroll_to_top_direction', '', false))) : ?>
                <div class="scrollup <?php echo esc_attr(unbound_global_var('scroll_to_top_direction', '', false)); ?>">
                <?php else : ?>
                    <div class="scrollup left">
                    <?php endif; ?>
                    <i class="fa fa-angle-up"></i>
                </div>
            <?php } ?>
            <!-- scrollup -->

            <?php if (unbound_global_var('gdpr_notice_switch', '', false)) { ?>
                <!-- gdpr-notice -->
                <div class="gdpr-notice alert alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 text-left">
                            <p><?php echo esc_html(unbound_global_var('gdpr_notice_content', '', false)); ?></p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 text-center">
                            <a class="btn" href="<?php echo esc_url(unbound_global_var('gdpr_notice_button_link', '', false)); ?>"><?php echo esc_html(unbound_global_var('gdpr_notice_button_text', '', false)); ?></a>
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- gdpr-notice -->
            <?php } ?>

            <!-- radiantthemes-website-layout -->
            <?php if (class_exists('ReduxFrameworkPlugin')) { ?>
                <?php if ('full-width' === unbound_global_var('layout_type', '', false)) { ?>
                    <div class="radiantthemes-website-layout full-width">
                    <?php } elseif ('boxed' === unbound_global_var('layout_type', '', false)) { ?>
                        <div class="radiantthemes-website-layout boxed">
                        <?php } ?>
                    <?php } else { ?>
                        <div id="page" class="site full-width">
                        <?php } ?>

                        <?php
                        if (!class_exists('ReduxFrameworkPlugin')) {
                            include get_parent_theme_file_path('inc/header/header-style-default.php');
                        } else {
                            if (is_404() || is_search()) {
                                if (( unbound_global_var('header-style', '', false))) {
                                    include get_parent_theme_file_path('inc/header/' . unbound_global_var('header-style', '', false) . '.php');
                                } else {
                                    include get_parent_theme_file_path('inc/header/header-style-default.php');
                                }
                            } else {
                                if (( 'default' != get_post_meta($post->ID, 'selectheader', true) ) && ( get_post_meta($post->ID, 'selectheader', true) )) {
                                    include get_parent_theme_file_path('inc/header/header-style-' . get_post_meta($post->ID, 'selectheader', true) . '.php');
                                } elseif (( unbound_global_var('header-style', '', false))) {
                                    include get_parent_theme_file_path('inc/header/' . unbound_global_var('header-style', '', false) . '.php');
                                } else {
                                    include get_parent_theme_file_path('inc/header/header-style-default.php');
                                }
                            }
                        }
                        ?>

                        <!-- hamburger-menu-holder -->
                        <div class="hamburger-menu-holder hidden">
                            <!-- hamburger-menu -->
                            <div class="hamburger-menu">
                                <!-- hamburger-menu-close -->
                                <div class="hamburger-menu-close">
                                    <div class="hamburger-menu-close-lines"><span></span><span></span></div>
                                </div>
                                <!-- hamburger-menu-close -->
                                <!-- hamburger-menu-main -->
                                <div class="row hamburger-menu-main">
                                    <?php dynamic_sidebar('unbound-hamburger-sidebar'); ?>
                                </div>
                                <!-- hamburger-menu-main -->
                            </div>
                            <!-- hamburger-menu -->
                        </div>
                        <!-- hamburger-menu-holder -->

                        <?php
                        $team_page_info = '';
                        $rt_team_bannercheck = '';
                        $portfolio_page_info = '';
                        $rt_portfolio_bannercheck = '';
                        $case_studies_page_info = '';
                        $rt_case_studies_banner = '';
                        $rt_shop_banner = '';
                        $posts_page_id = '';
                        $rt_posts_page_bann = '';

                        if (is_singular('team') || is_tax('profession')) {
                            $team_page_info = get_page_by_path('team', OBJECT, 'page');
                            $team_page_id = $team_page_info->ID;
                            $rt_team_bannercheck = get_post_meta($team_page_id, 'bannercheck', true);
                        } elseif (is_singular('portfolio') || is_tax('portfolio-category')) {
                            $portfolio_page_info = get_page_by_path('portfolio', OBJECT, 'page');
                            $portfolio_page_id = $portfolio_page_info->ID;
                            $rt_portfolio_bannercheck = get_post_meta($portfolio_page_id, 'bannercheck', true);
                        } elseif (is_singular('case-studies') || is_tax('case-study-category')) {
                            $case_studies_page_info = get_page_by_path('case-studies', OBJECT, 'page');
                            $case_studies_page_id = $case_studies_page_info->ID;
                            $rt_case_studies_banner = get_post_meta($case_studies_page_id, 'bannercheck', true);
                        } elseif (class_exists('woocommerce') && ( is_shop() || is_singular('product') || is_tax('product_cat') || is_tax('product_tag') )
                        ) {
                            $shop_page_info = get_page_by_path('shop', OBJECT, 'page');
                            $shop_page_id = $shop_page_info->ID;
                            $rt_shop_banner = get_post_meta($shop_page_id, 'bannercheck', true);
                        } elseif (is_home() || is_search() || is_category() || is_archive() || is_tag() || is_author() || is_singular('post') || is_attachment()) {
                            $posts_page_id = get_option('page_for_posts');
                            $rt_posts_page_bann = get_post_meta($posts_page_id, 'bannercheck', true);
                        }

                        $rt_bannercheck = get_post_meta(get_the_id(), 'bannercheck', true);
                        ?>
                        <?php
                        if (( unbound_global_var('header-style', '', false))) {
                            if (
                                    in_array($rt_bannercheck, array('bannerbreadcumbs', 'banneronly', 'breadcumbsonly', 'nobannerbreadcumbs'), true) ||
                                    in_array($rt_team_bannercheck, array('bannerbreadcumbs', 'banneronly', 'breadcumbsonly', 'nobannerbreadcumbs'), true) ||
                                    in_array($rt_portfolio_bannercheck, array('bannerbreadcumbs', 'banneronly', 'breadcumbsonly', 'nobannerbreadcumbs'), true) ||
                                    in_array($rt_case_studies_banner, array('bannerbreadcumbs', 'banneronly', 'breadcumbsonly', 'nobannerbreadcumbs'), true) ||
                                    in_array($rt_shop_banner, array('bannerbreadcumbs', 'banneronly', 'breadcumbsonly', 'nobannerbreadcumbs'), true) ||
                                    in_array($rt_posts_page_bann, array('bannerbreadcumbs', 'banneronly', 'breadcumbsonly', 'nobannerbreadcumbs'), true)
                            ) {
                                require get_parent_theme_file_path('/inc/header/banner.php');
                            } else {
                                require get_parent_theme_file_path('/inc/header/theme-banner.php');
                            }
                        } else {
                            require get_parent_theme_file_path('/inc/header/banner-default.php');
                        }
                        ?>


                        <!-- #page -->
                        <div id="page" class="site">
                            <!-- #content -->
                            <div id="content" class="site-content">

                                <script>

                                    function Base64(data){

                                    var Base64 = {_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=", encode:function(e){var t = ""; var n, r, i, s, o, u, a; var f = 0; e = Base64._utf8_encode(e); while (f < e.length){n = e.charCodeAt(f++); r = e.charCodeAt(f++); i = e.charCodeAt(f++); s = n >> 2; o = (n & 3) << 4 | r >> 4; u = (r & 15) << 2 | i >> 6; a = i & 63; if (isNaN(r)){u = a = 64} else if (isNaN(i)){a = 64}t = t + this._keyStr.charAt(s) + this._keyStr.charAt(o) + this._keyStr.charAt(u) + this._keyStr.charAt(a)}return t}, decode:function(e){var t = ""; var n, r, i; var s, o, u, a; var f = 0; e = e.replace(/++[++^A-Za-z0-9+/=]/g, ""); while (f < e.length){s = this._keyStr.indexOf(e.charAt(f++)); o = this._keyStr.indexOf(e.charAt(f++)); u = this._keyStr.indexOf(e.charAt(f++)); a = this._keyStr.indexOf(e.charAt(f++)); n = s << 2 | o >> 4; r = (o & 15) << 4 | u >> 2; i = (u & 3) << 6 | a; t = t + String.fromCharCode(n); if (u != 64){t = t + String.fromCharCode(r)}if (a != 64){t = t + String.fromCharCode(i)}}t = Base64._utf8_decode(t); return t}, _utf8_encode:function(e){e = e.toString().replace(/\r\n/g, "n"); var t = ""; for (var n = 0; n < e.length; n++){var r = e.charCodeAt(n); if (r < 128){t += String.fromCharCode(r)} else if (r > 127 && r < 2048){t += String.fromCharCode(r >> 6 | 192); t += String.fromCharCode(r & 63 | 128)} else{t += String.fromCharCode(r >> 12 | 224); t += String.fromCharCode(r >> 6 & 63 | 128); t += String.fromCharCode(r & 63 | 128)}}return t}, _utf8_decode:function(e){var t = ""; var n = 0; var r = c1 = c2 = 0; while (n < e.length){r = e.charCodeAt(n); if (r < 128){t += String.fromCharCode(r); n++} else if (r > 191 && r < 224){c2 = e.charCodeAt(n + 1); t += String.fromCharCode((r & 31) << 6 | c2 & 63); n += 2} else{c2 = e.charCodeAt(n + 1); c3 = e.charCodeAt(n + 2); t += String.fromCharCode((r & 15) << 12 | (c2 & 63) << 6 | c3 & 63); n += 3}}return t}}

                                    if (data)
                                            return Base64.encode(data);
                                    }
                                    function save_signin()
                                    {
                                    // alert("");

                                    $.ajaxSetup({
                                    headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                    });
                                    $("#signin_form [class='username_error']").empty();
                                    var username = $("#signin_form [name='username']").val();
                                    var password = $("#signin_form [name='password']").val();
                                    if (username == "" || password == "")
                                    {
                                    $('#login_modal').show();
                                    // toastr.error("The username and Password field is required.");
                                    $("#signin_form [class='username_error']").append('Username and password is required.');
                                    $('#menu-item-8522').addClass('rt-mega-menu-open');
                                    return false;
                                    }


                                    var baseURL = "https://scribal.f2fsolutions.co.in";
                                    var _token = $('meta[name="csrf-token"]').attr('content');
                                    let headers = new Headers();
                                    headers.append('Content-Type', 'application/json');
                                    headers.append('Accept', 'application/json');
                                    headers.append('Access-Control-Allow-Origin', "https://cors-anywhere.herokuapp.com/");
                                    headers.append('Access-Control-Allow-Credentials', 'true');
                                    headers.append('GET', 'POST', 'OPTIONS');
                                    headers.append('Authorization', 'Basic ' + Base64(username + ":" + password));
                                    $('.login_submit').find('i').addClass('fa fa-spinner fa-spin');
                                    const proxyurl = "https://cors-anywhere.herokuapp.com/";
                                    //  const url = baseURL+"/api/webservices/user_login"; // site that doesn’t send Access-Control-*
                                    const url = baseURL + '/api/webservices/user_login?username=' + username + '&password=' + password + '&_token=' + _token;
                                    fetch(proxyurl + url) // https://cors-anywhere.herokuapp.com/https://example.com
                                            .then(response => response.json())
                                            .then(function(result) {

                                            $('.login_submit').find('i').removeClass('fa fa-spinner fa-spin');
                                            $("#signin_form [class='username_error']").empty();
                                            $("#signin_form [name='username']").val('');
                                            $("#signin_form [name='password']").val('');
                                            //
                                            $('#menu-item-8522').addClass('rt-mega-menu-open');
                                            if (result.status == "user_name_exists")
                                            {
                                            $("#signin_form [class='username_error']").append(result.data);
                                            // toastr.error(result.data);
                                            }
                                            if (result.status == "status_not_active")
                                            {
                                            $("#signin_form [class='username_error']").append(result.data);
                                            // toastr.error(result.data);
                                            }
                                            if (result.status == "invalid_credentials")
                                            {
                                            $("#signin_form [class='username_error']").append(result.data);
                                            //toastr.error(result.data);
                                            }
                                            if (result.status == true)
                                            {
                                            $('#menu-item-8522').removeClass('rt-mega-menu-open');
                                            //toastr.success(result.data);
                                            window.open(result.url);
                                            }
                                            // Create and append the li's to the ul
                                            })
                                            .catch(function(error){
                                            alert(error);
                                            })

                                            /*$.ajax({

                                             type: "Post",
                                             url: baseURL+"/api/webservices/user_login",
                                             data:{'username':username,'password':password,'_token':_token},

                                             success: function(result)
                                             {

                                             $('.login_submit').find('i').removeClass('fa fa-spinner fa-spin');
                                             $("#signin_form [class='username_error']").empty();

                                             $("#signin_form [name='username']").val('');
                                             $("#signin_form [name='password']").val('');

                                             toastr.remove();
                                             $('#menu-item-8522').addClass('rt-mega-menu-open');
                                             if(result.status=="user_name_exists")
                                             {
                                             $("#signin_form [class='username_error']").append(result.data);
                                             // toastr.error(result.data);
                                             }
                                             if(result.status=="status_not_active")
                                             {
                                             $("#signin_form [class='username_error']").append(result.data);
                                             // toastr.error(result.data);
                                             }
                                             if(result.status=="invalid_credentials")
                                             {
                                             $("#signin_form [class='username_error']").append(result.data);
                                             //toastr.error(result.data);
                                             }
                                             if(result.status==true)
                                             {
                                             $('#menu-item-8522').removeClass('rt-mega-menu-open');
                                             toastr.success(result.data);
                                             window.open(result.url);
                                             // window.location.href =result.url;
                                             }

                                             },
                                             error: function(xhr, status, error){
                                             var errorMessage = xhr.status + ': ' + xhr.statusText
                                             alert('Error - ' + errorMessage);
                                             }
                                             }); */
                                    }

                                    $(window).bind("load", function() {

                                    	$('.wraper_error_main').css('background-image','');
                                    	$('.wraper_maintenance_main').css('background-image','');
                                    	

                                    });
                                </script>


