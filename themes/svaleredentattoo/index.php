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