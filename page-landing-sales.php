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

                <div class="two-up">
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

            </div>
        </div>
        <!-- content top -->
        <div class="content-bottom">

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

            <div class="landing-module-8">
                <div class="container">
                    <div class="row">
                        <div class="col flex-col">
                            <h2>The Reality Is
                                People Do Research
                                Before They Buy</h2>

                            <p>82% of smartphone users consult their phones on purchases they are about to make in-store
                                and 45% read reviews before making a purchase.
                                <br />

                                -The Robo Economy</p>
                        </div>
                        <div class="col">
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

                                <p>You're in an industry where people don't research - such as an: HVAC company, or
                                    emergency roof repair?</p>
                            </div>

                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h2>Then it is EVEN MORE important
                                    to be on the top of page one.</h2>
                                <p>Most people will probably see the top rankers in the maps listing, and choose who
                                    they call based on the review
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
            <div class="gray">
                <p>The fact is&mdash; your customers are talking.</p>
            </div>

            <div class="landing-module-11">
                <p>They’re tweeting about your product, commenting on your blog, and reviewing you
                    on Google and Facebook.</p>

                <p>The goal is to make sure they’re saying good things. One bad review can bring down your average
                    substantially.</p>

                <a href="">
                    <button class="btn btn-primary">
                        Start Managing Your Online Reputation
                    </button>
                </a>
            </div>

            <div class="landing-module-12">
                <p>Now, here’s the part you’re
                    going to love… $$$</p>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col">

                        </div>
                        <div class="col">

                            <p class="blurb">SEO, Searches, Reviews, and
                                Mobile Strategies are all part of
                                the digital paradigm.
                            </p>

                            <p class="blurb">Meaning they’re all attainable
                                and cost effective!</p>

                            <p>Unlike Traditional Marketing, digital marketing
                                measures your return on investment.</p>

                            <p>With traditional marketing, customers will still
                                Google you before they call or visit your store.</p>

                            <p>The first place they will turn to is that powerful little search bar.</p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="landing-module-13">

                <p>
                    Whether they’re searching on Google, Yahoo, or
                    Bing- it is imperative for your website to show up on the first page of the search results.
                </p>

                <div class="container">

                    <div class="row">
                        <div class="col">
                            <h2>Don’t have a website? Let’s Get Real</h2>

                            <p>If you want your business to grow and stand
                                out from your competition, you need a website
                                ASAP, let us repeat that&hellip;</p>

                            <p>But not just any website, a professional one - a responsive, lead-capturing,
                                sales-increasing,
                                Search Engine Optimized website.</p>
                        </div>
                        <div class="col">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col">
                            <h2>Again with the SEO?
                                Yup! Let those three little letters sink in.</h2>
                            <p>SEO is your primary source of website traffic.
                                It produces organic results and authentic visitors.</p>

                            <img src="<?=IMGURL?>landing-sales/aka-leads.png" alt="AKA Leads">
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <p>The better optimized your site is for SEO, the more visible your website becomes.
                                Which in turn means, increased visitors and engagement for your business.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="landing-module-14">
                <div class="container">
                    <div class="row">
                        <div class="col">
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
                    <p>Looking for something a little more</p>
                    <p class="large">IMMEDIATE?</p>
                    <p>Maybe you know you need SEO - and you want to hit that longer term strategy, but you also want
                        more business NOW.
                    </p>
                </div>

            </div>

            <div class="landing-module-16">
                <div class="blue">
                    <h2>Alright, deal! We’ve got you on that too!</h2>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <p>From who visits your site,
                                to specific locations
                                and even which terms people
                                are searching for!</p>
                        </div>
                        <div class="col map">

                        </div>
                    </div>
                </div>
            </div>

            <div class="landing-module-17">
                <div class="container-fluid yellow">
                    <div class="row">
                        <div class="col">
                            <p>And not only is it <strong>more immediate</strong>
                                but you can <strong>control it</strong>
                                <p class="large">EVERY. PIECE.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="landing-module-18">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2>NOT CONVINCED YET?!
                                <span>HERE - CHECK IT OUT...</span>
                            </h2>

                            <p class="blurb">With digital advertising, you’re not just throwing a
                                net hoping to catch a fish.</p>

                            <p>You are reaching people who are actively searching for your services. </p>

                            <img src="<?=IMGURL?>landing-sales/svg-map.svg" alt="You decide who
sees your ads.">


                            <p>You are in control & the opportunities
                                are endless. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="landing-module-19">
                <p>Not Sure How to ADVERTISE DIGITALLY?</p>
            </div>

            <div class="ribbon">Let’s circle back to the search bar.</div>


            <div class="landing-module-20">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2>
                                Have you ever
                                Googled something like
                            </h2>
                            <p>“air conditioning company” or “roof repair”</p>

                            <p>and had ads appear at the top of the page, right
                                before maps and other results?</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p>THE ANSWER IS PROBABLY
                                YES, RIGHT?</p>
                            <p>These ads are a newer, innovative way of advertising
                                your products and services directly to your customers.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="landing-module-21">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2>PAY-PER-CLICK</h2>
                            <h3>(PPC) Ads</h3>
                        </div>

                        <div class="col">
                            <h2>These are called search ads, or
                                Pay-Per-Click (PPC) Ads.</h2>

                            <p>
                                Pay-per-click advertising works by taking you to the top of search engine page
                                and earning you higher qualified visitors to your site than you might get organically.
                                The beauty is- you only pay when your ad gets clicked on.

                            </p>

                            <p>Essentially, you pay for results!</p>

                            <a href="">
                                <button class="btn btn-primary">
                                    I Want More Leads Now
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="landing-module-22">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2><span>
                                    It’s Time to Up Your
                                </span>

                                ADVERTISING GAME
                            </h2>
                            <p>We’re not saying you shouldn’t have billboards, radio ads, TV ads - maybe even an ad in a
                                magazine But WE ARE saying. You can’t stop there.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="landing-module-24">
                <p>Just as SEO, online review management and search ads are essential to expand your reach and bring in
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

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2>SOCIAL MEDIA</h2>

                            <p>
                                Now THIS is a big one.
                            </p>

                            <p>
                                Did you know there are 1.1 billion daily
                                users on Facebook alone? WHAT?!
                            </p>

                            <p>
                                Yeah - that number is ridiculous, and we know not all of them are looking for your
                                business specifically. Probably not even 1/10th of them. However - it does mean the
                                people you ARE trying to reach, can be found there.
                            </p>

                            <p>
                                Not to mention all other social media platforms like instagram swarming with millions of
                                potential customers you can reach as long as you’re talking to them, and offering them
                                things they cannot refuse.
                            </p>

                        </div>

                        <div class="col">
                            <h2>YOUTUBE</h2>
                            <p>Imagine your brand, visible to billions of people browsing videos related to your
                                products, just imagine that...
                            </p>

                            <ul>
                                <li>
                                    After Facebook and Google, YouTube
                                    is the 3rd most visited website in
                                    the WORLD! </li>

                                <li>Almost 5 billion videos are watched on
                                    YouTube every day. </li>

                                <li>Businesses who take advantage of
                                    YouTube Ads understand the powerful
                                    tool at their hands.
                                </li>
                            </ul>
                        </div>

                        <div class="col">
                            <h2>REMARKETING</h2>

                            <p>
                                Ever check out a website, or a product on a site and then all of a sudden an ad for that
                                company or product is EVERYWHERE?!
                            </p>

                            <h2>
                                Yeah - that’s this.
                            </h2>

                            <p>
                                And we know it can be annoying,
                                but we also know that it does help to bring in more business.
                            </p>

                            <p>
                                How can someone say no when they’re constantly reminded how much they neeeeeeed that
                                teeth whitening service.
                                Or that new kitchen remodel?
                            </p>

                            <p>
                                Top of mind = more sales.
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h2>Display</h2>

                            <p>Display ads utilize images, banners and more to get your message
                                across. These can show on relevant website across the web, related to
                                your business. Branding. Get your name out there already!</p>
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
                                <li>Alter your ad text any time you want and relay your message at any given time.</li>
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