<?php
/*
 * Template Name: Homepage
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colition Technologies</title>
    <!-- <script src="https://kit.fontawesome.com/your-font-awesome-kit.js"></script> -->
    <?php wp_head(); ?>
</head>

<body>
    <div class="top-header">
        <div class="top-header-content">
            <div class="call-us"><span>CALL US NOW!</span>
                <?php
                $phone = esc_html(get_option('phone'));
                if (!empty($phone)) {
                    echo $phone = esc_html($phone);
                } else {
                    echo '385.154.11.28.38';
                } ?>
            </div>
            <div class="login-signup"><a href="#"><span>LOGIN</span></a><a href="#">SIGNUP</a></div>
        </div>
    </div>
    <header>
        <div class="header-content">
            <div class="logo">
                <?php
                $logo = esc_attr(get_option('logo'));
                $site_url = site_url();
                if (!empty($logo)) {
                    echo '<a href="'. $site_url .'"><img src="' . $logo . '" alt="Logo" width="100px;"></a>';
                } else {
                    echo 'YOUR LOGO';
                }
                ?>
            </div>
            <nav>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'main-menu',
                        'menu_class' => 'main-menu',
                        'container' => false,
                        'depth' => 2, // Allow 2 levels of submenus
                    )
                );
                ?>
            </nav>
        </div>
    </header>
    <!-- ... -->
    <main>
        <div class="breadcrumb">Home / Who we are / <span>Contact</span></div>
        <h1>Contact</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam posuere ipsum nec velit mattis elementum.
            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas eu placerat
            metus, eget placerat libero.</p>

        <div class="contact-section">
            <div class="contact-form">
                <h2>CONTACT US</h2>
                <hr class="bd">
                <?php echo do_shortcode('[contact-form-7 id="727c1d4" title="Contact form 1"]'); ?>
                <!-- <form>
                    <input type="text" placeholder="Name *" required>
                    <input type="tel" placeholder="Phone *" required>
                    <input type="email" placeholder="Email *" required>
                    <textarea placeholder="Message *" required></textarea>
                    <button type="submit">SUBMIT</button>
                </form> -->
            </div>
            <div class="reach-us">
                <h2>REACH US</h2>
                <hr class="bd">
                <p class="address">
                    <?php
                    $address = esc_html(get_option('address'));
                    if (!empty($address)) {
                        echo $address = esc_html($address);
                    } else {
                        echo 'Coalition Skill Test
                        535 La Plata Street
                        4200 Argentina';
                    } ?>
                </p>

                
                <p>Phone:
                    <?php
                    $phone = esc_html(get_option('phone'));
                    if (!empty($phone)) {
                        echo $phone = esc_html($phone);
                    } else {
                        echo '385.154.11.28.38';
                    } ?><br>
                    Fax:
                    <?php
                    $fax = esc_html(get_option('fax'));
                    if (!empty($fax)) {
                        echo $fax = esc_html($fax);
                    } else {
                        echo '385.154.11.28.38';
                    } ?>
                    <?php echo esc_html(get_option('fax')); ?>
                </p>
                <div class="social-icons">
                    <?php
                    $facebook = esc_url(get_option('facebook'));
                    $twitter = esc_url(get_option('twitter'));
                    $linkedin = esc_url(get_option('linkedin'));
                    $pinterest = esc_url(get_option('pinterest'));

                    if (!empty($facebook)) {
                        echo '<a href="' . $facebook . '" target="_blank"><i class="fab fa-facebook-f"></i></a>';
                    }
                    if (!empty($twitter)) {
                        echo '<a href="' . $twitter . '" target="_blank"><i class="fab fa-twitter"></i></a>';
                    }
                    if (!empty($linkedin)) {
                        echo '<a href="' . $linkedin . '" target="_blank"><i class="fab fa-linkedin-in"></i></a>';
                    }
                    if (!empty($pinterest)) {
                        echo '<a href="' . $pinterest . '" target="_blank"><i class="fab fa-pinterest-p"></i></a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- Footer content here -->
    </footer>
</body>

</html>