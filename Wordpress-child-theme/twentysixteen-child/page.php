<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-sm-7 col-md-8 content_left">

				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();
					// Include the page content template.
					the_content();
					// End of the loop.
				endwhile;
				?>

			</div>
			<div class="col-sm-5 col-md-4">
				<div class="download-book">
					<div class="info">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/book-front.png" width="141" height="211" alt="" />
						<div class="free-book">Download your free e-book</div>
					</div>
					<form class="book_download" id="book_download" action="" method="post">
						<div id="form_fields" class="form">
							<div>
								<label for="Email">Email</label>
								<input type="text" id="email" name="email" placeholder="i.e. email@email.com" value="" >
							</div>

							<div>
								<label for="">First name</label>
								<input type="text" id="firstname" name="firstname" value="">
							</div>

							<div>
								<label for="">Last name</label>
								<input type="text" id="lastname" name="lastname" value="">
							</div>

							<div>
								<label for="">Company name</label>
								<input type="text" id="companyname" name="companyname" value="">
							</div>

							<div>
								<label for="">Phone</label>
								<input type="text" id="phone" name="phone" value="">
							</div>

							<div class="download-btn">
								<input type="submit" name="button" value="Download e-book ">
							</div>

							<div class="download_count">1024 e-books downloaded.</div>
						</div>
						<div id="output" class="form">
						</div>
					</form>
				</div>

			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>

<section class="about-insperity">
	<div class="container">
		<div class="row">
			<div class="col-sm-offset-6 col-sm-6 about-wrap">

				<div class="bg"></div>
				<div class="about-content">
					<?php echo get_page_content(8);?>
				</div><!-- /.about-content -->
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>

<section class="clients">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Some of our amazing clients</h3>

				<div class="clients-logo">
					<?php echo get_page_content(10);?>
				</div><!-- /.clients-logo -->

			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>
<?php get_footer(); ?>
