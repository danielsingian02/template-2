<?php
/**
 * Template Name: Template 2 Home
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wordpress-backend-theme
 */

 function getAcfValue($key)
 {
   echo empty(get_field($key)) ? acf_get_field($key)['default_value'] : get_field($key);
 }

get_header();
?>
<!-- hero banner -->
<main id="primary" class="site-main">
    <div class="hero-banner flex">
        <div class="hero-banner__col1 flex-display-start">
            <h1 class="hero-banner__head"><?php getAcfValue("home_hero_banner");?></h1>        
        </div>

        <div class="hero-banner__col2">
            <div class="hero__form">
                <form action="/action_page.php" method="post">
                <div class="container">
                    <label for="uname" class="hero__form-title"><b>Homeowner Login</b></label>
                    <input type="text" placeholder="Name" name="uname" required>
                    <input type="password" placeholder="Password" name="psw" required>
                    <div class="hero__form-btn-container flex">   
                        <button type="submit">Login</button>
                        <button type="submit">Register</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
<!-- end of hero banner -->

<!-- about section -->
    <div class="about">
        <div class="about__wrap flex">
            <div class="about__col1">
                <h2 class="about__col1__head"><?php getAcfValue("about_us_head");?></h2>     
                <p class="about-col1__intro"><?php getAcfValue("about_us_description");?></p>     
            </div>

            <div class="about__col2">
                <?php $aboutimg = get_field('about_img');?>
                <img src="<?php echo $aboutimg; ?>" class="about__img">
            </div>
        </div>
    </div>
<!-- end of about section-->

<!-- News -->
    <div class="news flex">
        <div class="news__col1">
            <?php $newsimage = get_field('news_image');?>
            <img src="<?php echo $newsimage; ?>" class="news__img">
        </div>

        <div class="news__col2">
            <h2 class="news__newshead"><?php getAcfValue("recent_news");?></h2>
            <p class="news__first-news montserrat-list-news"><?php getAcfValue("first_news");?></p>
            <p class="news__second-news montserrat-list-news"><?php getAcfValue("second_news");?></p>
            <p class="news__third-news montserrat-list-news"><?php getAcfValue("third_news");?></p>
            <div class="news__button-wrap"><a href="#" class="news__button">View More</a></div>

            <h2 class="news__news-minutes-head"><?php getAcfValue("news_minutes");?></h2>
            <p class="news__first-date montserrat-list-news"><?php getAcfValue("first_date");?></p>
            <p class="news__second-date montserrat-list-news"><?php getAcfValue("second_date");?></p>
            <p class="news__third-date montserrat-list-news"><?php getAcfValue("third_date");?></p>
            <p class="news__fourth-date montserrat-list-news"><?php getAcfValue("fourth_date");?></p>
            <div class="news__button-wrap"><a href="#" class="news__button">View More</a></div>
        </div>
    </div>
<!-- end of News -->

<!-- location section -->
    <div class="map flex">
        <div class="map__info-col1 ">
            <?php $maplogo = get_field('map_logo') ;?><img src="<?php echo $maplogo ?>" class="map__logo">
            <div class="map__container-nav-description flex">
                <div class="map__navigation-container">
                    <nav id="site-navigation" class="map__navigation">
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-1',
                                    'menu_id'        => 'map-menu',
                                )
                            );
                        ?>
                    </nav><!-- #site-navigation -->          
                    <p class="map__credits-copy">© Copyright 2023 HOA Management Name Here</p>      
                </div>
                
                <div class="map__paragraph-container">
                    <p class="map__description"><?php getAcfValue("map_paragraph");?></p>
                    <p class="map__credits">© Copyright 2023 HOA Management Name Here</p>    
                </div>
            </div>                 
        </div>     

        <div class="map__location-col2">
            <?php
            /** 
             *  Google Map Link
             * 
             * @string Google Map Embed = google_map_embed
             
            * */      
            $googleMapLink = get_field('google_map_embed') ?: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1663169.1803332209!2d-80.55231773090945!3d35.494947564826745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88541fc4fc381a81%3A0xad3f30f5e922ae19!2sNorth%20Carolina%2C%20USA!5e0!3m2!1sen!2sph!4v1670919995695!5m2!1sen!2sph';
            ?>
            <iframe src="<?php echo $googleMapLink ?>" 
                width="100%" 
                height="450"
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                class="location__iframe">
            </iframe>
        </div>    
    </div>
<!-- end of location section -->
</main><!-- #main -->

<?php

get_footer();
