<meta property="og:url"                content="<?php echo get_the_permalink(); ?>" />
<meta property="og:type"               content="website" />
<?php if (is_front_page()) {
    $title = "Free Mom Hugs";
} else {
    $title = get_the_title();
}
?>
<meta property="og:title"              content="<?php echo $title; ?>" />
<meta property="og:description"        content="<?php echo  get_the_excerpt(); ?>" />
<meta property="og:image"              content="<?php echo the_post_thumbnail_url(); ?>" />