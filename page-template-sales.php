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

		<section class="row">
			<div class="col-12">
				<img src="<?php echo get_template_directory_uri(); ?>/images/hero-image.jpg" alt="buddy system weight loss challenge">
			</div>
		</section>

		<section class="row">
			<article class="col-12">
				<div class="container">
					<div class="row">
						<div class="col-8 mx-auto py-5">
							<img src="<?php echo get_template_directory_uri(); ?>/images/video-placeholer.jpg"/>
						</div>
					</div>
					<div class="row">
						<div class="col-12 text-center">
							<p class="px-4">
								Greetings Future Buddy's! Will you join me in a <span>30-day weight loss challenge?</span> The plan is super simple and easy to follow. You can begin your challenge at anytime. Many Buddy's have reported <span>losing up to 15 pounds</span>. Are you up for the challenge? I sure hope so!
								You can begin this challenge once you send a one time payment of $20.00 to CashApp or PayPal along with submitting your email. Upon receipt <span>I will perosnally email the information material</span> to begin the challenge. You will also receive an invite to the private Facebook group for Buddy Sytem Weight Loss Challenge.
							</p>
							<p>
								Remember there are no diet pills, drinks, smoothies or mixtures. All you need is plain everyday food from the grocery store.
							</p>
						</div>
					</div> <!-- text row -->
					<div class="row images">
						<img class="position-absolute top w-auto ribbon_img" src="<?php echo bloginfo( 'template_url' ); ?>/images/ribbon.png"/>
						<div class="col-5 mx-auto">
							<div class="row images_wrap left">
								<div class="col-6 mx-auto">
									<img src="<?php echo bloginfo( 'template_url' ); ?>/images/front-before.jpg"/>
								</div>
								<div class="col-6 mx-auto">
									<img src="<?php echo bloginfo( 'template_url' ); ?>/images/front-after.jpg"/>
								</div>
							</div>
						</div>
						<div class="col-5 mx-auto">
							<div class="row images_wrap right">
								<div class="col-6 mx-auto">
									<img src="<?php echo bloginfo( 'template_url' ); ?>/images/side-before.jpg"/>
								</div>
								<div class="col-6 mx-auto">
									<img src="<?php echo bloginfo( 'template_url' ); ?>/images/side-after.jpg"/>
								</div>
							</div>
						</div>
					</div> <!-- images row -->
					<div class="row">
						<div class="col-12 text-center">
							<h2>Want to lost 15 Pounds</h2>
							<p>Join our 30-day weight loss challenge!</p>
							<a class="button red" href="#payment_form">Join Now</a>
						</div>
					</div>
				</div>
			</article>
		</section>
		<section id="payment_form">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<h2>Payment Methods</h2>
						<h3>Once materials are emailed, no refund will be permitted.</h3>
						<p>
							<span>It is currently not possible to pay with CashApp online.</span> However, if you would like to pay with CashApp, Select CashApp at the top of the form on the right, submit your information then send $20 to Username: Whatever.
						</p>
						<p>
							<span>IMPORTANT: Please don't forget to include your email in the notes when you send your payment so I know that you have paid.</span>
						</p>
					</div>
					<div class="col-6">
						<?php if ($paymentType == "") : ?>
							<form id="myForm" name="myForm" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">

								<input type="hidden" name="action" value="info_submit_form">
								<input type="hidden" name="paymentType" value="cashapptype" id="payment_type">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" id="name" name="name">
									<div class="error">
										<p>Please enter your name</p>
									</div>
								</div>
								<div class="form-group">
									<label for="email">Email address</label>
									<input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
									<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
									<div id="emailError">
										<p>Please enter a valid email address.</p>
									</div>
								</div>
								<div class="form-group">
									<div class="form-check form-check-inline">
										<input class="form-check-input paypal" type="radio" name="paymentOptions" id="paypal" value="paypal" checked>
										<label class="form-check-label" for="paypal">Pay With PayPal</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="paymentOptions"  id="cashapp" value="cashapp">
										<label class="form-check-label" for="cashapp">Pay With CashApp</label>
									</div>
								</div>

								<div class="form-group submit_wrap">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>



								<section class="payment_container">
									<div class="paypal payment" id="paypal-button-container"></div>

									<div id="cash-app-container" class="cashapp payment">
										<p>You have selected the cash app method</p>
									</div>
								</section>

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

											/*document.querySelector('#name').addEventListener('change', function(event) {
												if(event.target.value !== "") {
													submit = true;
												}
											});

											if (submit === true) {
												actions.enable();
											} else {
												inputError.style.display = 'block';
											}*/

										},

										/*onClick: function() {
											let email = document.valueOf('#email');
											let name = document.valueOf('#name');

											if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) || (name === "")) {
												document.querySelector('#email_error').classList.remove('hidden');
											}
										},*/
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
														value: '30.00'
													}
												}]
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
								<h3>Thank you for submitting your information for the Buddy System Challenge!</h3>
								<p>You selected to pay with CashApp. Please be sure to send your payment in CashApp to username.</p>
								<h4>IMPORTANT: Do not forget to include the email you submitted in the form so I know who the payment is from.</h4>
								<p>Once I receive the payment I will email you the Buddy System PDF and an invite to our private Facebook group!</p>
								<p>Thank You!</p>
							<?php  else : ?>
								<h3>Thank you for submitting your information for the Buddy System Challenge!</h3>
								<p>You will get an email from me shortly with the PDF and an invite to our private Facebook group!</p>
							<?php endif; ?>

						<?php endif; ?>
					</div>
				</div><!-- two column payment section -->
			</div><!-- container -->
		</section>

		<section>
			<div class="container">
				<div class="row">
					<article class="col-6 mx-auto my-5 text-center">
						<h2>Success Stories</h2>
						<img src="<?php echo bloginfo( 'template_url' ); ?>/images/video-placeholer-success.jpg"/>
						<h3>George Jetson</h3>
					</article>
				</div>
			</div>
		</section>

		<section class="book_section">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere inventore nam optio! Dicta eaque eligendi nemo nobis obcaecati officia</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid at commodi corporis dignissimos dolor ea fugit iusto labore modi nemo nesciunt officia quia quisquam, reiciendis reprehenderit sequi sit voluptatem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam atque ducimus eius eos harum inventore laudantium pariatur, provident, quisquam reprehenderit sit suscipit tempora. Ad aliquam doloribus earum perspiciatis quaerat..</p>
						<a class="button red" href="#payment_form">Download Now</a>
					</div>
					<div class="col-6 text-center">
						<img class="w-auto mx-auto" src="<?php echo bloginfo( 'template_url' ); ?>/images/book-cover.png"/>
					</div>
				</div>
			</div>
		</section><!-- book_section -->

		<section>
			<div class="container">
				<div class="row">
					<article class="col-6 mx-auto my-5 text-center">
						<h2>Daily Fitness Thoughts</h2>
						<img src="<?php echo bloginfo( 'template_url' ); ?>/images/video-placeholer-success.jpg"/>
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, molestiae, optio. Adipis</h3>
					</article>
				</div>
			</div>
		</section><!-- daily thoughts section -->

</main>

<?php get_footer(); ?>
