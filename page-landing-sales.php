<?php
	/*
		Template Name: Sales Landing
    */
    ?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <?php
	
   include('/inc/header-scripts.php');
   wp_head(); 
    
    ?>


</head>

<body <?php body_class(); ?>>
    <div class="header">
        <a id="header-logo" class="navbar-brand" href='<?php echo get_site_url(); ?>'><img src="<?= IMGURL; ?>logo.svg"
                alt="<?php echo get_bloginfo('description'); ?>" /></a>
    </div>

    <div class="content">
        <div class="warning-top">

        </div>

        <div class="content-bg">

            <h1><span>Let’s dive straight into it.</span>
                If you want to <strong>GROW</strong>, you need <strong>SEO</strong>.</h1>
            <div class="box">
                <div class="box-header"><strong>Everyone</strong> is online, everyone
                    is searching for something...</div>
                <p>This presents an opportunity for you,
                    for your business.</p>
            </div>

            <div class="row">
                <div class="col">
                    <p>An opportunity to influence consumer decisions
                        and preferences.</p>
                </div>
                <div class="col">
                    <p>An opportunity to be found when your desired customer is searching for YOU.</p>
                </div>
            </div>

            <div class="content-bottom two-up">
                <div class="container-fluid">

                    <div class="row">

                        <div class="col bg-truth">

                        </div>

                        <div class="col">
                            <div class="extra-padding">
                                <p class="blurb">With billions of searches being conducted
                                    each day on sites like Google, Yahoo, and Bing,
                                    you want to ensure your business
                                    comes out on top.</p>

                                <p>People searching for your services want <strong>immediate results</strong>.
                                    So much so that 75% of people won’t scroll past the first page.</p>

                                <p class="blurb">That’s 75% of people who go to your
                                    competitors and 75% of people whose
                                    business you <span class="brand">lose out on</span>.</p>

                                <p>Your customers are searching
                                    for you, don’t you want to make it
                                    easy to be found.</p>

                                <a href=""><button class="btn btn-primary">Yes, I Want to Be Found</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="landing-module-3">
                <p>And just as people want immediate results,<br />
                    they want immediate access to those results...<br />
                    at their fingertips.</p>
            </div>

            <div class="landing-module-4">
                <div class="arrows">
                    <p>How much time DAILY do you spend on a computer - a desktop or laptop?<br />
                        How much time do you spend on your phone?<br />
                        How much time do your kids spend on their phones?<br />
                        Or your wife?<br />
                        Or your husband?</p>
                </div>
            </div>

            <div class="ribbon">
                <p>It's probably more time than we wish...</p>
            </div>

            <div class="landing-module-5 users">
                <p>Including for ourselves. But you, as a business owner...<br />
                    can take advantage of this</p>

                <img src="<?= IMGURL?>landing-sales/mobile-users.png" alt="" class="mobile-users">
            </div>

            <div class="landing-module-6">
                <div class="list">
                    <p>Mobile users turn to their phone to learn, do, find, or buy something instantly!
                        They’re looking for things such as:</p>

                    <ul class="checks">
                        <li><span>best tacos near me</span></li>
                        <li><span>v-day outfits</span></li>
                        <li><span>how to get rid of carpet stains</span></li>
                        <li><span>top things to do in los angeles</span></li>
                        <li><span>24/7 plumber</span></li>
                    </ul>

                </div>
            </div>

            <div class="yellow">
                <img src="<?=IMGURL?>landing-sales/social-media.png" alt="">
            </div>

            <div class="blue">
                <img src="<?=IMGURL?>landing-sales/social-media-icons.png" alt="">
            </div>


            <div class="landing-module-7">

                <div class="banner">
                    <img src="<?=IMGURL?>landing-sales/touch-points.png"
                        alt="The goal is to be present. Create touch points... 5-7 on average">
                </div>


                <ul class="list-inline list-unstyled">
                    <li><span>Social media posts</span></li>
                    <li><span>Blog posts</span></li>
                    <li><span>Newsletters</span></li>
                    <li><span>Digital Ads</span></li>
                    <li><span>Video marketing</span></li>
                </ul>

                <h2>Every touch point impacts the Customer Buying Experience!</h2>

                <p>The more times a customer comes across your brand, the more chances you
                    have to convince the customer to visit your store or shop your services or products.</p>

                <p>If you’re not already creating these touchpoints, not to worry.
                    You still have the opportunity to be found by potential customers.</p>

                <a href="">
                    <button class="btn btn-primary">Get My Business Found!</button>
                </a>
            </div>
        </div>
    </div>


    <?php wp_footer(); ?>
    <?php
/**
 *
 * DO NOT WRITE JAVASCRIPT HERE
 *
 */
?>
</body>

</html>