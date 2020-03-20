<?php

/**
 * Template Name: Sales Page
 *
 * The template for displaying diet challenge sales page.
 *
 *
 * @package boiler
 */

get_header();

$paymentType = (isset($_GET['paymentType']) ? $_GET['paymentType'] : "");

?>
<main class="wrapper">

		<section class="row hero">
			<div class="col-12 col-md-6 mr-auto text-center">
				<?php $headerQuote = get_field('header_quote');

				if ($headerQuote) : ?>
					<h3>"<?php echo $headerQuote; ?>"</h3>
				<?php endif; ?>

				<h2 class="text-uppercase my-3 my-md-5">Hello Buddy!</h2>
				<img class="w-25 d-block mx-auto" src="<?php echo bloginfo( 'template_url' ); ?>/images/logo-30-days.png" alt="waterfall"/>
				<h4 class="text-uppercase my-4">Buddy System</h4>
				<h4 class="red text-uppercase mb-3">Weight Loss</h4>
				<h2 class="text-uppercase no_italics">Challenge</h2>
			</div>
		</section>

		<section class="row intro_section">
			<article class="col-12">
				<div class="container">

					<?php $introSection = get_field('introduction_section');
						if($introSection) :
					?>

							<div class="row">
								<div class="col-10 col-md-8 col-lg-6 mx-auto py-5">
									<!--<div class="video_wrapper">-->
										<!--<iframe src="https://www.youtube.com/embed/i3CuqiJ0k4A" frameborder="0" allowfullscreen></iframe>-->
									<?php echo $introSection['introduction_video']; ?>
									<!--</div>-->
								</div>
							</div>
							<div class="row">
								<div class="col-12 text-center">

									<p class="px-4">
										<?php echo $introSection['introduction_text']; ?>
									</p>
									<p>
										<?php echo $introSection['introduction_sub_text']; ?>
									</p>

								</div>
							</div> <!-- text row -->
						<?php endif; ?>

					<div class="row images">
						<img class="position-absolute top ribbon_img" src="<?php echo bloginfo( 'template_url' ); ?>/images/ribbon.png"/>
						<div class="col-5 mx-auto">
							<div class="row images_wrap left">
								<div class="col-6 pr-1 pr-md-2 mx-auto">
									<img src="<?php echo bloginfo( 'template_url' ); ?>/images/front-before.jpg"/>
									<p>Before</p>
								</div>
								<div class="col-6 pl-1 pl-md-2 mx-auto">
									<img src="<?php echo bloginfo( 'template_url' ); ?>/images/front-after.jpg"/>
									<p class="after">After</p>
								</div>
							</div>
						</div>
						<div class="col-5 mx-auto">
							<div class="row images_wrap right">
								<div class="col-6 pr-1 pr-md-2 mx-auto">
									<img src="<?php echo bloginfo( 'template_url' ); ?>/images/side-before.jpg"/>
									<p>Before</p>
								</div>
								<div class="col-6 pl-1 pl-md-2 mx-auto">
									<img src="<?php echo bloginfo( 'template_url' ); ?>/images/side-after.jpg"/>
									<p class="after">After</p>
								</div>
							</div>
						</div>
					</div> <!-- images row -->
					<div class="row images_text">
						<div class="col-12 text-center">
							<h2>Want to lose up to 15 Pounds?</h2>
							<p>Join our 30-day weight loss challenge!</p>
							<a class="button red mt-2 mt-md-3 w-25" href="#payment_form">Join Now</a>
						</div>
					</div>
				</div>
			</article>
		</section>
		<section id="payment_form">
			<div class="container">
				<div class="row d-flex justify-content-center align-content-center flex-row">
					<div class="col-12 col-md-6 d-flex flex-column py-5 px-4 pr-md-5 pl-md-0 mb-2 my-md-auto">
						<h2>Payment Methods</h2>
						<h3>Once materials are emailed, no refund will be permitted.</h3>
						<p>
							<span>It is currently not possible to pay with CashApp online.</span> However, if you would like to pay with CashApp, Select CashApp at the top of the form on the right, submit your information then send $20 to Username: <span>$desi800</span>.
						</p>
						<p class="yellow">
							Disclaimer: Results may vary, consult your physician before beginning, no refunds after start up materials are emailed, no liablity.
						</p>
					</div>
					<div class="col-12 col-md-6 d-flex flex-column my-auto px-4 px-md-0">
						<?php if ($paymentType == "") : ?>
							<form id="myForm" name="myForm" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">

								<div class="form-group tabs">
									<div class="form-check m-0 active form-check-inline">
										<input class="form-check-input paypal" type="radio" name="paymentOptions" id="paypal" value="paypal" checked hidden>
										<label class="form-check-label" for="paypal"><img src="<?php echo bloginfo( 'template_url' ); ?>/images/logo-paypal.png" alt="paypal logo"/></label>
									</div>
									<div class="form-check cashapp m-0 form-check-inline">
										<input class="form-check-input" type="radio" name="paymentOptions"  id="cashapp" value="cashapp" hidden>
										<label class="form-check-label" for="cashapp"><img src="<?php echo bloginfo( 'template_url' ); ?>/images/logo-cashapp.png" alt="cash app logo"/></label>
									</div>
								</div>

								<div class="row input_wrap">
									<div class="col-12">
										<input type="hidden" name="action" value="info_submit_form">
										<input type="hidden" name="paymentType" value="cashapptype" id="payment_type">
										<div class="form-group">
											<label for="name">Name</label>
											<input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
											<div class="error my-4">
												<p>Please enter your name</p>
											</div>
										</div>
										<div class="form-group mt-4">
											<label class="mb-0" for="email">E-mail address</label><br>
											<input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter Your Email Address" required>
											<div id="emailError" class="my-4">
												<p>Please enter a valid email address.</p>
											</div>
											<small id="emailHelp" class="form-text text-muted">You must include a valid email before clicking on payment button.</small><br>
											<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
										</div>

										<div class="form-group submit_wrap">
											<button type="submit" class="button red my-4">Submit</button>
											<h4>
												<span>IMPORTANT:</span> After Submitting The Form, Send Your <span>$20.00 Payment</span> to CashApp Username: <span>$desi800</span> Please don't forget to include your email in the notes when you send your payment or you may not receive your information.
											</h4>
										</div>

										<section class="payment_container">
											<div class="paypal payment mt-4" id="paypal-button-container"></div>

											<div id="cash-app-container" class="cashapp payment"></div>
										</section>
									</div>
								</div>

								<script>

									paypal.Buttons({

										// onInit is called when the button first renders
										onInit: function (data, actions) {

											let emailError = document.getElementById('emailError');

											// Disable the buttons
											actions.disable();
											//let submit = false;
											// Listen for changes
											document.querySelector('#email').addEventListener('change', function(event) {
												if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(event.target.value)) {
													actions.enable();
													emailError.style.display = 'none';
												} else {
													emailError.style.display = 'block';
												}
											});

										},

										style: {
											shape: 'rect',
											color: 'gold',
											layout: 'vertical',
											label: 'paypal',

										},
										createOrder: function(data, actions) {
											return actions.order.create({
												purchase_units: [{
													amount: {
														value: '20.00',
													},
												}],
												"application_context" : {
													shipping_preference:"NO_SHIPPING"
												}
											});
										},
										onApprove: function(data, actions) {
											return actions.order.capture().then(function(details) {

												let paymentType = document.getElementById("payment_type");

												console.log(details.status + " " + details.payer.name.given_name);
												if(details.status === "COMPLETED") {
													paymentType.value = "paypaltype";
													document.getElementById("myForm").submit();
												}

												//alert('Transaction completed by ' + details.payer.name.given_name + '!');
											});
										}
									}).render('#paypal-button-container');
								</script>
							</form>
						<?php else :

							if ($paymentType == "cashapptype") :
								?>
								<div class="row confirmation">
									<div class="col-12 m-auto">
										<?php $cashAppConfirm = get_field('cashapp_confirmation');
											if($cashAppConfirm) :
										?>
											<h3><?php echo $cashAppConfirm['line_one']?></h3>
											<p><?php echo $cashAppConfirm['line_two']?></p>
											<h4><?php echo $cashAppConfirm['line_three']?></h4>
											<h5><?php echo $cashAppConfirm['line_four']?></h5></div>
									<?php endif; ?>
								</div>
							<?php  else : ?>
								<div class="row confirmation">
									<div class="col-12 m-auto">
										<?php $payPalConfirm = get_field('paypal_confirmation');
											if($payPalConfirm) :
										?>
												<h3><?php echo $payPalConfirm['line_one']?></h3>
												<h5><?php echo $payPalConfirm['line_two']?></h5>

											<?php endif; ?>
									</div>
								</div>

							<?php endif; ?>

						<?php endif; ?>
					</div>
				</div><!-- two column payment section -->
			</div><!-- container -->
		</section>

		<!--<section class="success_stories text-center">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2 class="mb-4">Success Stories</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-10 col-md-8 col-lg-6 mx-auto">
						<img src="<?php /*echo bloginfo( 'template_url' ); */?>/images/video-placeholer-success.jpg"/>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<h3 class="mt-4">George Jetson</h3>
					</div>
				</div>
			</div>
		</section>-->

		<section class="book_section">
			<div class="container">
				<div class="row d-flex justify-content-center align-content-center flex-row">

					<?php $bookSection = get_field('book_section');
						if ($bookSection) :
					?>
							<div class="col-12 col-md-6 d-flex flex-column mb-5 my-md-auto py-5 py-md-0">

								<h2 class="mb-4">
									<?php echo $bookSection['heading']; ?>
								</h2>

								<p class="mb-4">
									<?php echo $bookSection['description']; ?>
								</p>

								<ol>
									<?php if ( have_rows( 'book_section' ) ) : ?>
										<?php while ( have_rows('book_section' ) ) : the_row(); ?>
											<?php if ( have_rows( 'list' ) ) : ?>
												<?php while ( have_rows( 'list' ) ) : the_row(); ?>
													<li>
														<p>
															<?php echo get_sub_field('item_text'); ?>
														</p>
													</li>
												<?php endwhile; ?>
											<?php endif; ?>
										<?php endwhile; ?>
									<?php endif; ?>
								</ol>
								<a class="button red text-center mx-auto mx-md-0" href="#payment_form">Get Yours Now!</a>
							</div>

						<?php endif; ?>

					<div class="col-4 col-md-6 text-center d-flex flex-column my-auto">
						<img class="mx-auto" src="<?php echo bloginfo( 'template_url' ); ?>/images/book-cover.png"/>
					</div>
				</div>
			</div>
		</section><!-- book_section -->

	<?php $weeklyTalk = get_field('weekly_talk_section');
		if ($weeklyTalk && $weeklyTalk['video'] !== "" && $weeklyTalk['quote'] !== "") :
	?>
			<section class="daily_thoughts text-center">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h2 class="mb-4">Weekly Buddy Talk</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-10 col-md-8 col-lg-6 mx-auto">
							<!--<img src="<?php /*echo bloginfo( 'template_url' ); */?>/images/video-placeholer-success.jpg"/>-->
							<?php echo $weeklyTalk['video'];?>
						</div>
					</div>
					<div class="row">
						<div class="col-9 col-md-6 mx-auto">
							<h3 class="mt-5 d-inline-block">
								<?php echo $weeklyTalk['quote'];?>
							</h3>
						</div>
					</div>
				</div>
			</section><!--weekly talk section -->

		<?php endif; ?>

</main>

<?php get_footer(); ?>
