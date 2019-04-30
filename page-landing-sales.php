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

    <div class="content">


        <div class="content-top">
            <div class="header">
                <a id="header-logo" class="navbar-brand" href='<?php echo get_site_url(); ?>'><img
                        src="<?= IMGURL; ?>logo.svg" alt="<?php echo get_bloginfo('description'); ?>" /></a>
            </div>
            <div class="warning-top">
                <img class="warning-sign" src="<?=IMGURL?>landing-sales/warning-realness.png"
                    alt="Warning Realness Ahead">
            </div>

            <div class="content-bg">

                <h1>
                    <span><strong>Let’s dive straight into it.</strong></span>
                    <strong>
                        If you want to <em>GROW</em>, you need <em>SEO</em>.
                    </strong>
                </h1>
                <div class="box">
                    <div class="box-header"><strong>Everyone</strong> is online, everyone<br />
                        is searching for something...</div>
                    <p>This presents an opportunity for you,<br />
                        for your business.</p>
                </div>

                <div class="row checkmarks">
                    <div class="col checkmark">
                        <p>An opportunity to influence consumer decisions
                            and preferences.</p>
                    </div>
                    <div class="col checkmark">
                        <p>An opportunity to be found when your desired customer is searching for YOU.</p>
                    </div>
                </div>

                <div class="two-up">
                    <div class="container-fluid">

                        <div class="row">

                            <div class="col bg-truth">

                            </div>

                            <div class="col">
                                <div class="extra-padding">
                                    <p class="blurb">With billions of searches being conducted<br class="d-md-block">
                                        each day on sites like Google, Yahoo, and Bing,
                                        you want to ensure your business<br class="d-md-block">
                                        comes out on top.</p>

                                    <p>People searching for your services want <strong>immediate results</strong>.<br
                                            class="d-md-block">
                                        So much so that 75% of people won’t scroll past the first page.</p>

                                    <p class="blurb second">That’s 75% of people who go to your
                                        competitors and 75% of people whose
                                        business you <span class="brand">lose out on</span>.</p>

                                    <p>Your customers are searching<br class="d-md-block">
                                        for you, don’t you want to make it<br class="d-md-block">
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

            </div>
        </div>
        <!-- content top -->
        <div class="content-bottom">

            <div class="landing-module-4">
                <div class="arrows">
                    <p>How much time <strong>DAILY</strong> do you spend on a computer - a desktop or laptop?<br />
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
                    <p class="blurb">Mobile users turn to their phone to learn, do, find, or buy something instantly!
                        <br class="d-md-block">
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

                <p>The more times a customer comes across your brand, the more chances you<br class="d-md-block">
                    have to convince the customer to visit your store or shop your services or products.</p>

                <p class="blurb">If you’re not already creating these touchpoints, not to worry.<br class="d-md-block">
                    You still have the opportunity to be found by potential customers.</p>

                <a href="">
                    <button class="btn btn-primary">Get My Business Found!</button>
                </a>
            </div>

            <div class="landing-module-8">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-4 flex-col">
                            <div>
                                <h2>The Reality Is<br class="d-md-block">
                                    People Do Research<br class="d-md-block">
                                    Before They Buy</h2>

                                <p>82% of smartphone users consult their phones on purchases they are about to make
                                    in-store
                                    and 45% read reviews before making a purchase.
                                    <br />
                                    <br />
                                    -The Robo Economy</p>
                            </div>
                        </div>
                        <div class="col d-flex">
                            <img src="<?=IMGURL?>landing-sales/pi-chart.svg"
                                alt="Smartphone users consult their phones on purchases.">
                        </div>
                    </div>
                </div>

                <div class="landing-module-9">
                    <div class="container">

                        <div class="row">
                            <div class="col text-center">

                                <img src="<?=IMGURL?>landing-sales/what-if.svg" alt="What if">

                                <p>You're in an industry where people don't research - such as an: <br
                                        class="d-md-block"><span class="brand">HVAC company</span>, or
                                    <span class="brand">emergency roof repair?</span>
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="container flush-box landing-text-box">
                        <div class="row">
                            <div class="col">
                                <h2>Then it is EVEN <strong>MORE</strong> important<br class="d-md-block">
                                    to be on the top of page one.</h2>
                                <p>Most people will probably see the top rankers in the maps listing, and choose who
                                    they call based on the review<br class="d-md-block">
                                    count and star rating they have.</p>

                                <a href="">
                                    <button class="btn btn-primary">I Am A Service Business! Help!</button>
                                </a>

                                <div class="ribbon">
                                    Which Brings Us To, Our Next Little Secret…
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="landing-module-10">

            </div>
            <div class="ribbon gray">
                <p>The fact is&mdash; <strong>your customers are talking.</strong>
            </div>

            <div class="landing-module-11 landing-text-box">
                <p class="blurb">They’re tweeting about your product, commenting on your blog, and reviewing you<br
                        class="d-md-block">
                    on Google and Facebook.</p>

                <p><strong>The goal is to <em>make sure</em> they’re saying good things.</strong>
                    One bad review can bring down your average substantially.</p>

                <a href="">
                    <button class="btn btn-primary">
                        Start Managing Your Online Reputation
                    </button>
                </a>
            </div>

            <div class="landing-module-12">
                <div class="ribbon ribbon-black">
                    <p>Now, here’s the part you’re<br class="d-md-block">
                        going to love… <span>$$$</span></p>
                </div>



                <div class="two-up">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col blue">
                                <div class="cutout">
                                    <!-- <img src="<?=IMGURL?>landing-sales/cutout-guy.png" alt=""> -->
                                </div>
                            </div>
                            <div class="col yellow">

                                <div class="extra-padding">
                                    <p class="blurb">SEO, Searches, Reviews, and<br class="d-md-block">
                                        Mobile Strategies are all part of<br class="d-md-block">
                                        the digital paradigm.<br class="d-md-block">
                                        <br class="d-md-block">
                                        Meaning they’re all attainable<br class="d-md-block">
                                        and cost effective!
                                    </p>

                                    <p>Unlike Traditional Marketing, digital marketing<br class="d-md-block">
                                        measures your return on investment.</p>

                                    <div class="border-split">
                                        <p>With traditional marketing, customers <strong>
                                                will still<br class="d-md-block">
                                                <em>Google</em> you before they call or visit
                                            </strong> your store.
                                        </p>
                                    </div>

                                    <p>The first place they will turn to is that powerful little search bar.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="landing-module-13 ">

                <div class="landing-text-box">
                    <p class="blurb">
                        Whether they’re searching on Google, Yahoo, or<br class="d-md-block">
                        Bing- it is imperative for your website to show up on<br class="d-md-block"> the first page of
                        the search results.
                    </p>
                </div>

                <div class="four-up">
                    <div class="container">

                        <div class="row">
                            <div class="col dark-gray">
                                <div class="extra-padding">
                                    <h2>Don’t have a website? <br class="d-md-block">Let’s Get Real</h2>

                                    <p>If you want your business to grow and stand<br class="d-md-block">
                                        out from your competition, you need a website<br class="d-md-block">
                                        ASAP, let us repeat that&hellip;</p>

                                    <p>But not just any website, a professional one - a<br class="d-md-block">
                                        responsive,
                                        lead-capturing,
                                        sales-increasing,<br class="d-md-block">
                                        Search Engine Optimized website.</p>
                                </div>
                            </div>
                            <div class="col bg-1">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col bg-2"></div>
                            <div class="col gray">
                                <div class="extra-padding">
                                    <h2>Again with the SEO?<br class="d-md-block">
                                        Yup! Let those three little letters sink in.</h2>
                                    <p>SEO is your primary source of website traffic.<br class="d-md-block">
                                        It produces organic results and authentic visitors.</p>

                                    <img src="<?=IMGURL?>landing-sales/aka-leads.png" alt="AKA Leads">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col ribbon black">
                                <div class="">
                                    <p>
                                        The better optimized your site is for SEO, the more visible your website
                                        becomes.<br class="d-md-block">
                                        Which in turn means, increased visitors and engagement for your business.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="landing-module-14">
                    <div class="container">
                        <div class="row">
                            <div class="col flush-box landing-text-box gray">
                                <h2>The Perks!</h2>

                                <p>SEO is relatively cheap and a long term strategy.
                                    Plus, it aids customer trust and credibility.</p>

                                <a href="">
                                    <button class="btn btn-primary">
                                        Start Reaching More Customers Today!
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="landing-module-15">

                    <div class="container">
                        <img src="<?=IMGURL?>landing-sales/immediate.svg" alt="" height="124">

                        <p>Maybe you know you need SEO - and you want to hit that longer term strategy, but<br
                                class="d-md-block"> you also
                            want
                            more business NOW.
                        </p>
                    </div>

                </div>

                <div class="landing-module-16">
                    <div class="ribbon blue">
                        <h2>Alright, deal! We’ve got you on that too!</h2>
                    </div>

                    <div class="black">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="extra-padding">
                                        <p>From who visits your site,<br class="d-md-block">
                                            to specific locations<br class="d-md-block">
                                            and even which terms people<br class="d-md-block">
                                            are searching for!</p>
                                    </div>
                                </div>
                                <div class="col map">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="yellow">
                        <img height="431" src="<?=IMGURL?>landing-sales/everypiece.svg"
                            alt="And not only is it more immediate, but you can control it.">
                    </div>
                </div>

                <div class="landing-module-18">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <img height="161" src="<?=IMGURL?>landing-sales/not-convinced.svg" alt="NOT CONVINCED YET?!
 HERE - CHECK IT OUT...">

                                <p class="blurb">With digital advertising, you’re not just throwing a<br
                                        class="d-md-block">
                                    net hoping to catch a fish.</p>

                                <p>You are reaching people who are actively searching for your services. </p>

                                <div class="img-container">
                                    <img src="<?=IMGURL?>landing-sales/svg-map.svg" alt="You decide who
    sees your ads.">


                                    <p class="blurb bottom-blurb">You are in <strong>control</strong> opportunities<br
                                            class="d-md-block">
                                        are <strong>endless.</strong> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="landing-module-19">
                    <div class="ribbon black">
                        <img src="<?=IMGURL?>landing-sales/advertise-digitally.svg"
                            alt="Not sure how to advertise digitally?" height="124">
                    </div>
                    <div class="ribbon">Let’s circle back to the search bar.</div>
                </div>




                <div class="landing-module-20">
                    <div class="container">
                        <div class="row  gray">
                            <div class="col">
                                <div class="extra-padding">
                                    <h2>
                                        Have you ever
                                        <strong>Googled</strong>
                                        something like
                                    </h2>
                                    <p>“air conditioning company” or “roof repair”</p>

                                    <p>and had ads appear at the top of the page, right
                                        before maps and other results?</p>
                                </div>
                            </div>
                            <div class="col bg-ipad">

                            </div>
                        </div>

                        <div class="row  dark-gray">
                            <div class="col">
                                <div class="extra-padding">
                                    <h2>THE ANSWER IS PROBABLY
                                        <span>YES, RIGHT?</span></h2>
                                    <p>These ads are a newer, innovative way of advertising<br class="d-md-block">
                                        your products and services directly to your customers.</p>
                                </div>
                            </div>
                            <div class="col">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="landing-module-21">
                    <div class="ppc-banner">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">

                                </div>

                                <div class="col">
                                    <div class="landing-text-box">
                                        <div class="extra-padding">
                                            <h2>These are called search ads, or<br class="d-md-block">
                                                Pay-Per-Click (PPC) Ads.</h2>

                                            <p>
                                                Pay-per-click advertising works by taking you to the top of search
                                                engine
                                                page<br class="d-md-block">
                                                and earning you higher qualified visitors to your site than you might
                                                get<br class="d-md-block">
                                                organically.
                                                The beauty is- you only pay when your ad gets clicked on.
                                            </p>

                                            <h2 class="blurb">Essentially, <span class="red">you pay for results!</span>
                                            </h2>

                                            <a href="">
                                                <button class="btn btn-primary">
                                                    I Want More Leads Now
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="landing-module-22 yellow">
                    <div class="container">
                        <div class="row">
                            <div class="col">

                                <img src="<?=IMGURL?>landing-sales/advertising-game.svg"
                                    alt="It's time to up your Advertising Game" height="157">

                                <p>We’re not saying you shouldn’t have billboards, radio ads, TV ads - maybe even an ad
                                    in a
                                    magazine.<br class="d-md-block"> But <span class="red">WE ARE</span> saying. You
                                    can’t stop there.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="landing-module-24">
                    <p class="blurb">Just as <span class="brand">SEO</span>, online review management and search ads are
                        essential to<br class="d-md-block"> expand your
                        reach and bring
                        in
                        more customers so are:
                    </p>

                    <ul class="list-inline">
                        <li>
                            Display Ads</li>
                        <li>
                            Remarketing Ads</li>
                        <li>
                            Social Media Ads</li>
                        <li>
                            YouTube Ads</li>
                        </li>
                    </ul>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <div class="social-tab">
                                    <h2>
                                        <div class="icon icon-phone">
                                           
                                        </div>
                                        SOCIAL MEDIA
                                    </h2>

                                    <div class="extra-padding">
                                        <p class="blurb">
                                            Now THIS <strong>is a big one.</strong>
                                        </p>

                                        <p>
                                            Did you know there are 1.1 billion daily
                                            users on Facebook alone? WHAT?!
                                        </p>

                                        <p>
                                            Yeah - that number is ridiculous, and we know not all of them are looking
                                            for
                                            your
                                            business specifically. Probably not even 1/10th of them. However - it does
                                            mean
                                            the
                                            people you ARE trying to reach, can be found there.
                                        </p>

                                        <p>
                                            Not to mention all other social media platforms like instagram swarming with
                                            millions of
                                            potential customers you can reach as long as you’re talking to them, and
                                            offering
                                            them
                                            things they cannot refuse.
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="col">
                                <div class="social-tab">
                                    <h2>YOUTUBE</h2>
                                    <div class="extra-padding">
                                        <p>Imagine your brand, visible to billions of people browsing videos related to
                                            your
                                            products, <span class="blue"><strong>just imagine that</strong></span>...
                                        </p>

                                        <ul class="check-list">
                                            <li>
                                                After Facebook and Google, YouTube
                                                is the <strong>
                                                    3rd most visited website in
                                                    the WORLD!
                                                </strong> </li>

                                            <li>Almost 5 billion videos are watched on
                                                YouTube <strong>every day.</strong></li>

                                            <li>Businesses who take advantage of
                                                YouTube Ads understand the <strong>
                                                    powerful
                                                    tool
                                                </strong> at their hands.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="social-tab">
                                    <h2>REMARKETING</h2>

                                    <div class="extra-padding">
                                        <p>
                                            Ever check out a website, or a product on a site and then all of a sudden an
                                            ad
                                            for
                                            that
                                            company or product <strong>is EVERYWHERE?!</strong>
                                        </p>


                                        <p class="blurb blue">
                                            Yeah - that’s this.
                                        </p>


                                        <p>
                                            And we know it can be annoying,
                                            but we also know that it does help to bring in more business.
                                        </p>

                                        <p>
                                            How can someone say no when they’re constantly reminded how much they
                                            neeeeeeed
                                            that
                                            teeth whitening service.
                                            Or that new kitchen remodel?
                                        </p>

                                        <p>
                                            Top of mind = more sales.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="social-tab sideways">

                                    <h2>Display</h2>
                                    <div class="extra-padding">
                                        <p>Display ads utilize images, banners and more to get your message<br
                                                class="d-md-block">
                                            across. These can show on relevant website across the web, related to<br
                                                class="d-md-block">
                                            your business. Branding. Get your name out there already!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="landing-module-25">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h2>When It Comes to Digital - You Are in Control</h2>
                                <p>Regardless of the type of digital advertising you use, you can be as specific as you
                                    want.</p>

                                <ol class="list-inline">
                                    <li>Target users by their Location, Age, Interest, and Online Behavior.</li>
                                    <li>Choose the dates and times you'd like your ads displayed.</li>
                                    <li>Most importantly, communicate more efficiently.</li>
                                    <li>Alter your ad text any time you want and relay your message at any given time.
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="landing-module-26">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h2>WHY WE DO IT
                                </h2>
                                <p>
                                    What if you could spend more time with your family?
                                    What if you had more time to run your business?
                                    What if your business could be found with a touch
                                    of a button?</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>We focus on your marketing solutions so
                                    that you can focus on what you love.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="landing-module-27">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h2>We are OBSESSED with your growth,
                                    and making you the absolute
                                    best business you can be.</h2>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid yellow">
                        <div class="row">
                            <div class="col">
                                <p>
                                    IT’S THAT SIMPLE
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="landing-module-28">
                    <p>Whether you just launched your ribbon cutting party or have been running your
                        business for over 20 years. We tailor our services to each industry and each client. </p>
                    <p class="blurb">

                        Digital Marketing has taken over, and frankly, if you’re not taking
                        advantage of it... you probably won’t be in business much longer.</p>

                    <a href="">
                        <button class="btn btn-primary">
                            I’m Ready to Start, Send Me Some Pricing!
                        </button>
                    </a>
                </div>

            </div>
            <!-- content bottom -->
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