<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <?php
    wp_head();
    ?>
</head>

<body>
    <div class="header">
        <?php wp_nav_menu(array('theme-location' => 'Primary_menu')) ?>
        <?php
        if (is_page('about')) {
            the_title();
        }
        ?>
        <?php if (is_front_page()): ?>
            <div class="home-banner">Welcome to our homepage!</div>
        <?php else: ?>
            <div class="inner-banner">Welcome to our site!</div>
        <?php endif; ?>

        <!-- <nav>
            <ul>
                <li>home</li>
                <li>home</li>
                <li>home</li>
            </ul>
        </nav> -->
    </div>
</body>

</html>