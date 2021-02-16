<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP-FreeMomHugs
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
    <!-- Funraise Donate -->
    <script>
        (function(f,u,n,r,a,i,s,e){var data={window:window,document:document,tag:"script",data:"funraise",orgId:f,uri:u,common:n,client:r,script:a};var scripts;var funraiseScript;data.window[data.data]=data.window[data.data]||[];if(data.window[data.data].scriptIsLoading||data.window[data.data].scriptIsLoaded)return;data.window[data.data].loading=true;data.window[data.data].push("init",data);scripts=data.document.getElementsByTagName(data.tag)[0];funraiseScript=data.document.createElement(data.tag);funraiseScript.async=true;funraiseScript.src=data.uri+data.common+data.script+"?orgId="+data.orgId;scripts.parentNode.insertBefore(funraiseScript,scripts)})('ac466c9f-c8bb-4a53-a71f-f3cc66a34e9f','https://assets.funraise.io','/widget/common/2.0','/widget/client','/inject-form.js');
    </script>
    <script>
        window.funraise.push('create', { form: 8370 });
    </script>




</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">

	<header id="masthead" class="site-header">

        <!-- NAVBAR
================================================== -->
        <nav class="navbar navbar-expand-lg navbar-light sticky-top">
            <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="<?php echo get_bloginfo('wpurl');?>">

                <img src="<?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                echo $image[0];
                ?>" class="navbar-brand-img" alt="...">
            </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">

                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fe fe-x"></i>
                </button>

                <!-- Navigation -->
                <ul class="navbar-nav ml-auto">
                    <?php
                    $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
                    // This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);

                    $menuID = $menuLocations['primary']; // Get the *primary* menu ID
                    $menuID = "Primary";
                    $primaryNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location.
                    foreach ( $primaryNav as $navItem ) {

                        echo '<li class="nav-item">
                                <a class="nav-link" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>
                              </li>';

                    }
                    ?>
                </ul>

                <!-- Button -->
                <a class="navbar-btn btn btn-sm btn-primary lift ml-auto" data-formId="8370" target="_blank">
                    Donate
                </a>

            </div>

            </div>
        </nav>
	</header><!-- #masthead -->
