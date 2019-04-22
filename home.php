<?php get_header(); ?>
<div class="top-banner " style="background-image: url('https://www.agims.com/wp-content/uploads/2018/12/blog-banner.jpg')">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1><strong>Our Blog</strong></h1>

				<a href="/contact-us/"><button class="btn btn-success">Contact Us</button></a>

			</div>
		</div>
	</div>
</div>
<ul class="google-colors">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ul>
<section id="main">
	<div class="container">
		<div class="row">
			<div class="col">
                <div class="content page-content">
                    <div class="row">
                        <?php get_template_part('template-parts/content/content', 'archive'); ?>
                    </div>
<?php if(have_posts()) : ?>
                    <div class="row">
                        <div class="col-sm-6 text-sm-left text-xs-center">
                            <?php previous_posts_link( 'Newer posts' ); ?>
                        </div>
                        <div class="col-sm-6 text-sm-right text-xs-center">
                            <?php next_posts_link( 'Older posts' ); ?>
                        </div>
                    </div>
<?php endif; ?>
                </div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>