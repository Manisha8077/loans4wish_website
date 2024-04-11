@extends('front_end_layout.home')
@section('content') 

<section class="contact-banner mt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 class="pt-md-5 mb-2">Contact Us</h3>
				<div class="bar m-auto"></div>
			</div>
		</div>
	</div>
</section>
<section class="pt-5 pb-5">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-4 mb-md-0 mb-3">
				<div class="contact-info">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
					<h5 class="mb-0 text-dark">Email Here</h5>
					<a class="" href="mailto:info@myzeon.com"> info@myzeon.com</a>
				</div>
			</div>
			<div class="col-md-4 mb-md-0 mb-3">
				<div class="contact-info">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<h5 class="mb-0 text-dark">Location Here</h5>
					<a class="" href="#">
                A-47, 1st Floor, Sector-2 Noida, Uttar Pradesh 201301</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="contact-info">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<h5 class="mb-0 text-dark">Call Here</h5>
					<a class="" href="tel:0120-4198166"> 0120-4198166</a>
				</div>
			</div>
		</div>

	</div>
</section>
<section class="bg-light pt-5 pb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="heading-title">
          <h5 class="mb-2 font-weight-bold text-dark f-17">Need Any Help? </h5>
          <div class="bar m-auto"></div>
        </div>
				<p class="mt-3 mb-0">For all your queries, you can reach out to our customer care services. We are available 24 hours a day 7 days a week and 365 days.</p>
			</div>
			<div class="col-md-10 offset-md-1 text-center mt-5">
			<form>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" name="" placeholder="Enter Your Name" class="form-control border-0">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="email" name="" placeholder="Enter Your Email Id" class="form-control border-0">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="tel" name="" placeholder="Enter Your Mobile Number" class="form-control border-0">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" name="" placeholder="Enter Your Subject" class="form-control border-0">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<textarea class="form-control border-0" placeholder="Write Your Message..."></textarea>
						</div>
					</div>
					<div class="col-md-12 mt-3">
						<button type="submit" class="btn btn-primary btn-sm">Send Message</button>
					</div>

				</div>
			</form>
		</div>
		</div>
	</div>
</section>
<section>
	<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d56041.95081659882!2d77.23804312384189!3d28.611116850972476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d28.640311999999998!2d77.2731447!4m5!1s0x390cef64f7beb54d%3A0x77c46e503e13d087!2sloans4wish!3m2!1d28.5857596!2d77.31264569999999!5e0!3m2!1sen!2sin!4v1660659882083!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
@endsection