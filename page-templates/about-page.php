<?php
/**
 * Template Name: Template 2 About 
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
    function getAcfValue($key){
        echo empty(get_field($key)) ? acf_get_field($key)['default_value'] : get_field($key);
    }
    get_header();
?>
<!-- hero banner -->
<main id="primary" class="site-main">
    <div class="hero-banner flex">
        <div class="hero-banner__col1 flex-display-start">
            <h1 class="hero-banner__head"><?php getAcfValue("hero_banner_about");?></h1>     
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
<!-- card section -->
    <div class="card-section">
        <h2 class="card-section__head"><?php getAcfValue("card_heading");?></h2>
        <div class="card-wrapper">
            <!-- first comment card -->
            <div class="card-wrapper__card">
                <p class="card__description"><?php getAcfValue("first_card_description");?></p>     
                <div class="comment-wrapper flex-display-center">
                    <?php $profilepic = get_field('card_picture') ;?>
                    <div class="comment__profile flex-display-center"><img src="<?php echo $profilepic;?>" class="comment-profile"></div>
                    <div class="comment__description">
                        <p class="card__user-name"><?php getAcfValue("card_user_name");?></p>     
                        <p class="card__user-description"><?php getAcfValue("card_user_description");?></h2>   
                    </div>
                </div>
            </div>
            <!-- second comment card -->
            <div class="card-wrapper__card">
                <p class="card__description"><?php getAcfValue("second_card_description");?></p>     
                <div class="comment-wrapper flex-display-center">
                    <?php $profile2 = get_field('card_user_pic2') ;?>
                    <div class="comment__profile flex-display-center"><img src="<?php echo $profile2;?>" class="comment-profile"></div>                        
                    <div class="comment__description">
                        <p class="card__user-name"><?php getAcfValue("card_user_name2");?></p>     
                        <p class="card__user-description"><?php getAcfValue("card_user_description2");?></p>     
                    </div>
                </div>
            </div>
            <!-- third comment card -->
            <div class="card-wrapper__card">
                <p class="card__description"><?php getAcfValue("third_card_description");?></p>     
                <div class="comment-wrapper flex-display-center">
                    <?php $profile3 = get_field('card_user_pic3') ;?>
                    <div class="comment__profile flex-display-center"><img src="<?php echo $profile3;?>" class="comment-profile"></div>
                    <div class="comment__description">
                        <p class="card__user-name"><?php getAcfValue("card_user_name3");?></p>
                        <p class="card__user-description"><?php getAcfValue("card_user_description3");?></p>  
                    </div>
                </div>
            </div>

        </div>
    </div>
<!-- end of card section -->
<!-- information section -->
    <div class="info-section">
        <h2 class="info-section__heading"><?php getAcfValue("info_heading");?></h2>
        <p class="info-section__information"><?php getAcfValue("information_description");?></p>
        <div class="info-section__button-wrap"><a href="#" class="info-section__button">Button</a></div>
    </div>
<!-- end of information section -->

<!-- services section -->
    <div class="services">
        <h2 class="services__head"><?php getAcfValue("services_head");?></h2>     
        <p class="services__subhead"><?php getAcfValue("services_sub_head");?></p>     
        <div class="services__card-wrapper flex-display-center">

            <!-- first card -->
            
            <div class="services__firstcard">
                <div class="services__title-wrapper flex">
                    <div class="services__icon-container flex-display-center">
                        <?php $servicesicon = get_field('services_icon') ;?><img src="<?php echo $servicesicon ?>" class="services__img">
                    </div>
                    <div class="services__title-container flex-display-start">
                        <h3 class="services__title"><?php getAcfValue("services_title");?></h3>     
                    </div>
                </div>

                <div class="services__description-wrapper">
                    <p class="services__desc"><?php getAcfValue("services_description");?></p>     
                </div>

                <div class="services__link-text-warapper">
                <p class="services__link"> <a href="#"><?php getAcfValue("services_link");?> <span>&#8594;</a></p>
                </div>
            </div>
            
            <!-- second card -->

            <div class="services__secondcard">
                <div class="services__title-wrapper flex">
                    <div class="services__icon-container flex-display-center">
                        <?php $servicesicon2 = get_field('services_icon2') ;?><img src="<?php echo $servicesicon2 ?>" class="services__img">
                    </div>
                    <div class="services__title-container flex-display-start">
                        <h3 class="services__title"><?php getAcfValue("services_title2");?></h3>                       
                    </div>
                </div>

                <div class="services__description-wrapper">
                    <p class="services__desc"><?php getAcfValue("services_description2");?></p>
                </div>

                <div class="services__link-text-warapper">
                    <p class="services__link"> <a href="#"><?php getAcfValue("services_link2");?> <span>&#8594;</a></p>
                </div>
            </div>

            <!-- third card -->

            <div class="services__thirdcard">
                <div class="services__title-wrapper flex">
                    <div class="services__icon-container flex-display-center">
                        <?php $servicesicon3 = get_field('services_icon3') ;?><img src="<?php echo $servicesicon2 ?>" class="services__img">
                    </div>
                    <div class="services__title-container flex-display-start">
                        <h3 class="services__title"><?php getAcfValue("services_title3");?></h3>
                    </div>
                </div>

                <div class="services__description-wrapper">
                    <p class="services__desc"><?php getAcfValue("services_description3");?></p>
                </div>

                <div class="services__link-text-warapper">
                    <p class="services__link"> <a href="#"><?php getAcfValue("services_link3");?> <span>&#8594;</a></p>
                </div>
            </div>

            <!-- fourth card -->

            <div class="services__fourthcard">
                <div class="services__title-wrapper flex">
                    <div class="services__icon-container flex-display-center">
                        <?php $servicesicon4 = get_field('services_icon4') ;?><img src="<?php echo $servicesicon4 ?>" class="services__img">
                    </div>
                    <div class="services__title-container flex-display-start">
                        <h3 class="services__title"><?php echo acf_get_field('services_title4')['default_value']; ?></h3> 
                    </div>
                </div>

                <div class="services__description-wrapper">
                    <p class="services__desc"><?php getAcfValue("services_description4");?></p>
                </div>

                <div class="services__link-text-warapper">
                <p class="services__link"> <a href="#"><?php getAcfValue("services_link4");?> <span>&#8594;</a></p>
                </div>
            </div>
            
        </div>
    </div>

<!-- end of services section -->


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
                        <p class="map__credits-copy">© Copyright 2023 HOA Management</p>      
                    </div>
                    
                    <div class="map__paragraph-container">
                        <p class="map__description"><?php getAcfValue("map_paragraph");?></p>
                        <p class="map__credits">© Copyright 2023 HOA Management</p>       
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
