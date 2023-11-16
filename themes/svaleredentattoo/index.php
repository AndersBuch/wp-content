<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
</head>
<body>
<?php
$args = array(
    'theme_location' => 'main_menu', // Use the menu location you registered in functions.php
    'menu_class'     => 'nav-menu',   // Replace with your menu class
);

wp_nav_menu($args);
?>

<?php

// the post loop
if ( have_posts() ) {
while ( have_posts() ) {
    the_post();
// Post Content here
    the_content();

    }   // end while

} // end if

?>

</body>
</html>