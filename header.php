<?php
/**
 * Pro WP header file
 */
?>
<!DOCTYPE html>
<html lang="en">
    <html class="no-js"<?php language_attributes(  );?>>
<head>
    <meta charset="<?php bloginfo('charset');?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <h1>
            <a href="<?php echo home_url(); ?>">
                Pro WP Theme Development
</a>
</h1>
    
</body>
</html> 