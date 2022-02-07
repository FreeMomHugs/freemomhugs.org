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

<?php
$menu_name = 'Primary';
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
$menu = wp_get_nav_menu_object($menu_name);
$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
?>

<!-- Navigation -->
<ul class="navbar-nav ml-auto">
	<?php
	$count = 0;
	$submenu = false;

	foreach( $menuitems as $item ):
	// set up title and url
	$title = $item->title;
	$link = $item->url;

	// item does not have a parent so menu_item_parent equals 0 (false)
	if ( !$item->menu_item_parent ):

	// save this id for later comparison with sub-menu items
	$parent_id = $item->ID;

    ?>

    <li class="nav-item">
        <a href="<?php echo $link; ?>" class="nav-link" title="<?php echo $title; ?>">
			<?php echo $title; ?>
        </a>
		<?php endif; ?>

	    <?php if ( $parent_id == $item->menu_item_parent ): ?>
            <?php if ( !$submenu ): $submenu = true; ?>
            <ul class="sub-menu">
                <?php endif; ?>
                <li class="item">
                    <a href="<?php echo $link; ?>" class="title"><?php echo $title; ?></a>
                </li>
        <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
            </ul>
            <?php $submenu = false; endif; ?>

	    <?php endif; ?>

		<?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
        </li>
		<?php $submenu = false; endif; ?>

		<?php $count++; endforeach; ?>

</ul>

            <!-- Button -->
            <a class="navbar-btn btn btn-sm btn-black lift ml-auto mr-3" data-formId="8370" target="_blank">
                Donate
            </a>

        </div>

    </div>
</nav>
