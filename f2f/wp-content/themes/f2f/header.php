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
        <meta name="description" content="F2F Solutions is one the best software company in coimbatore and dedicated to provide services and solutions to our clients need to meet their business challenges and goals">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="software company in coimbatore,software company,f2f solutions">
        <meta name="csrf-token" content="ebWVNyG1CmcLKjOdsnai5f1nmTp2jM1pFmEfacj3">
        <meta name="author" content="f2fsolution">
        <meta name="copyright" content="F2F Solutions | 2015 - 2018">
        <meta name="robots" content="all">
        <title>Software Company in Coimbatore :: F2F Solutions</title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
       <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/f2f/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/f2f/css/bootstrap.min.css">
        <script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/f2f/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/f2f/js/bootstrap.min.js?ver=4.9.10"></script>

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



                        <style>
                            .fa {
                                margin-left: -12px;
                                margin-right: 8px;
                            }
                            .modal-content {
                                position: relative;
                                background-color: #353568 !important;}
                            .modal-header {
                                padding: 0px !important;
                                border-bottom: 1px solid #353568 !important;
                            }
                            .modal-footer {
                                padding: 4px !important;
                                text-align: right !important;
                                border-top: 1px solid #353568 !important;
                            }
                            .modal-header .close {
                                margin-top: 1px !important;
                            }
                            .close {
                                float: right;
                                font-size: 21px;
                                font-weight: 700;
                                line-height: 1;
                                color: #fff;
                                text-shadow: 0 1px 0 #fff;
                                filter: alpha(opacity=20);
                                opacity: .7;
                            }
                            .form-group {
                                margin-bottom: 7px !important;
                            }
                        </style>

                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog"style="margin-top:10%;">

                                <!-- Modal content-->
                                <div class="modal-content" style="width:80%; border:4px solid white;">
                                    <div class="modal-header">
                                        <button type="button" id="" class="close" data-dismiss="modal"style="padding-right:12px;padding-top:22px;" ">&times;</button>
                                        <h4 class="modal-title" style="text-align:center !important; background-color:#353568 !important; height:67px;"><img src="https://f2fsolutions.co.in/wp-content/uploads/2019/07/login-logo.png" style="width:154px; margin-top:14px;" alt="" data-no-retina="">
                                        </h4>
                                    </div>
                                    <div class="modal-body bom">

                                        <form id="signin_form" class="login-form form-horizontal" method="POST" action="">
                                            <div class="row"><br/>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-8">
                                                    <input class="form-control placeholder-no-fix gray" style="margin-top:-30px;" value="" type="" autocomplete="off" placeholder="Username" class="autofocus"  name="username" tabindex="1">
                                                </div><br/><br/>
                                                <div class="col-md-2"></div>
                                                <span  class="password_error" style="color:red; float:left !important;"></span >
                                                <div class="col-md-8">

                                                    <input type="password" style="margin-top:-38px;" name="password"  tabindex="2" class="form-control placeholder-no-fix" value="" autocomplete="off" placeholder="Password">
                                                </div>
                                                <div class="col-md-2"></div> <div class="col-md-2"></div>
                                                <div class="col-md-8">
                                                    <fieldset class="form-group row">
                                                        <div class="col-md-6 col-xs-12 text-xs-center text-sm-left skin skin-square">
                                                            <fieldset>
                                                                <input type="checkbox" name="remember" value=""  tabindex="-1" class="chk-remember" style="position:relative;top:1px;"><label for="remember-me" class=""style="color:white;"> Remember Me</label>
                                                            </fieldset>
                                                        </div>
                                                        <!--<div class="col-md-6 col-xs-12 float-sm-left text-xs-center text-sm-right"><a tabindex="-1" href="javascript:" class="card-link "style="color:white; font-size:14px;">Forgot Password?</a>
                                                        </div>-->
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-md-2"></div>
                                            <span class="username_error" style="color:red; float:left !important; margin-top: 0px;"></span >
                                            <p style="width:66%; margin:0 auto;">
                                                <button type="button"  onclick="save_signin()" tabindex="3" class="btn btn-primary btn-lg btn-block login_submit"width="48%"><i class="ft-unlock  "></i> Login</button>
                                                <button type="button" id="close_modal" class="btn btn-danger btn-lg btn-block" tabindex="4" data-dismiss="modal" style="margin-top:4px;">Close</button>
                                            </p>
                                        </form>

                                    </div>
                                    <div class="modal-footer">
                                    </div>
                                </div>

                            </div>
                        </div>
                        
                        <!-- #page -->
                        <div id="page" class="site">
                            <!-- #content -->
                            <div id="content" class="site-content">

                       
                                <script>

                                    $(document).ready(function () {

                                        setInterval(function () {
                                                $('body').css('padding-right','0'); 
                                            }, 1000);

                                        var option_text = '';
                                        option_text += '<li style=""><a data-toggle="modal" data-target="#myModal" href="javascript:" onclick="login_modal()">Employee Login</a></li>';

                                        $('#menu-header-menu').append(option_text);
                                    });
                                   
                                   
                                    function Base64(data) {

                                        var Base64 = {_keyStr: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=", encode: function (e) {
                                                var t = "";
                                                var n, r, i, s, o, u, a;
                                                var f = 0;
                                                e = Base64._utf8_encode(e);
                                                while (f < e.length) {
                                                    n = e.charCodeAt(f++);
                                                    r = e.charCodeAt(f++);
                                                    i = e.charCodeAt(f++);
                                                    s = n >> 2;
                                                    o = (n & 3) << 4 | r >> 4;
                                                    u = (r & 15) << 2 | i >> 6;
                                                    a = i & 63;
                                                    if (isNaN(r)) {
                                                        u = a = 64
                                                    } else if (isNaN(i)) {
                                                        a = 64
                                                    }
                                                    t = t + this._keyStr.charAt(s) + this._keyStr.charAt(o) + this._keyStr.charAt(u) + this._keyStr.charAt(a)
                                                }
                                                return t
                                            }, decode: function (e) {
                                                var t = "";
                                                var n, r, i;
                                                var s, o, u, a;
                                                var f = 0;
                                                        e = e.replace(/++[++^A-Za-z0-9+/=]/g, ""); while (f < e.length) {
                                                    s = this._keyStr.indexOf(e.charAt(f++));
                                                    o = this._keyStr.indexOf(e.charAt(f++));
                                                    u = this._keyStr.indexOf(e.charAt(f++));
                                                    a = this._keyStr.indexOf(e.charAt(f++));
                                                    n = s << 2 | o >> 4;
                                                    r = (o & 15) << 4 | u >> 2;
                                                    i = (u & 3) << 6 | a;
                                                    t = t + String.fromCharCode(n);
                                                    if (u != 64) {
                                                        t = t + String.fromCharCode(r)
                                                    }
                                                    if (a != 64) {
                                                        t = t + String.fromCharCode(i)
                                                    }
                                                }
                                                t = Base64._utf8_decode(t);
                                                return t
                                            }, _utf8_encode: function (e) {
                                                e = e.toString().replace(/\r\n/g, "n");
                                                var t = "";
                                                for (var n = 0; n < e.length; n++) {
                                                    var r = e.charCodeAt(n);
                                                    if (r < 128) {
                                                        t += String.fromCharCode(r)
                                                    } else if (r > 127 && r < 2048) {
                                                        t += String.fromCharCode(r >> 6 | 192);
                                                        t += String.fromCharCode(r & 63 | 128)
                                                    } else {
                                                        t += String.fromCharCode(r >> 12 | 224);
                                                        t += String.fromCharCode(r >> 6 & 63 | 128);
                                                        t += String.fromCharCode(r & 63 | 128)
                                                    }
                                                }
                                                return t
                                            }, _utf8_decode: function (e) {
                                                var t = "";
                                                var n = 0;
                                                var r = c1 = c2 = 0;
                                                while (n < e.length) {
                                                    r = e.charCodeAt(n);
                                                    if (r < 128) {
                                                        t += String.fromCharCode(r);
                                                        n++
                                                    } else if (r > 191 && r < 224) {
                                                        c2 = e.charCodeAt(n + 1);
                                                        t += String.fromCharCode((r & 31) << 6 | c2 & 63);
                                                        n += 2
                                                    } else {
                                                        c2 = e.charCodeAt(n + 1);
                                                        c3 = e.charCodeAt(n + 2);
                                                        t += String.fromCharCode((r & 15) << 12 | (c2 & 63) << 6 | c3 & 63);
                                                        n += 3
                                                    }
                                                }
                                                return t
                                            }}

                                        if (data)
                                            return Base64.encode(data);
                                    }
                                    function save_signin()
                                    {
                                       $('.autofocus').focus();
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
                                            $("#signin_form [class='username_error']").append('Username and password is required.');
                                            $('#menu-item-8522').addClass('rt-mega-menu-open');
                                            return false;
                                        }
                                        
                                        var baseURL = "https://scribal.f2fsolutions.co.in";
                                        var _token = $('meta[name="csrf-token"]').attr('content');

                                        let
                                        headers = new Headers();
                                                headers.append('Content-Type', 'application/json');
                                        headers.append('Accept', 'application/json');
                                        headers.append('Access-Control-Allow-Origin', "https://cors-anywhere.herokuapp.com/");
                                        headers.append('Access-Control-Allow-Credentials', 'true');
                                        headers.append('GET', 'POST', 'OPTIONS');

                                        headers.append('Authorization', 'Basic ' + Base64(username + ":" + password));
                                        $('.login_submit').find('i').addClass('fa fa-spinner fa-spin');
                                                const proxyurl = "https://cors-anywhere.herokuapp.com/";
                                                const url = baseURL + '/api/webservices/user_login?username=' + username + '&password=' + password + '&_token=' + _token;
                                                fetch(proxyurl + url).then(response => response.json()).then(function (result) {

                                            $('.login_submit').find('i').removeClass('fa fa-spinner fa-spin');
                                            $("#signin_form [class='username_error']").empty();
                                            $("#signin_form [name='username']").val('');
                                            $("#signin_form [name='password']").val('');
                                            
                                            if (result.status == "user_name_exists")
                                            {
                                                $("#signin_form [class='username_error']").append(result.data);
                                            }
                                            if (result.status == "status_not_active")
                                            {
                                                $("#signin_form [class='username_error']").append(result.data);
                                            }
                                            if (result.status == "invalid_credentials")
                                            {
                                                $("#signin_form [class='username_error']").append(result.data);
                                            }
                                            if (result.status == true)
                                            {
                                                
                                                window.open(result.url);
                                               $('#myModal').toggle();
                                                $(".modal-backdrop").remove();
                                                $('#myModal').removeClass('in');
                                                                        
                                            }
                                            // Create and append the li's to the ul
                                        })
                                                .catch(function (error) {
                                                    alert(error);
                                                })

                                    }


                                    
                                </script>


