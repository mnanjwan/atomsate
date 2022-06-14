            @extends('layouts.master')

            @section("title")
                ATOM
            @endsection

            @section('content')

            @include('sweetalert::alert')

			<!-- CONTACTS-2
			============================================= -->
			<section id="contacts-2" class="bg-snow wide-50 inner-page-hero contacts-section division">
				<div class="container">


					<!-- SECTION TITLE -->
					<div class="row justify-content-center">
						<div class="col-md-10 col-lg-8">
							<div class="section-title title-02 mb-80">

								<!-- Title -->
								<h2 class="h2-xs">Getting Started</h2>

								<!-- Text -->
								<!-- <p class="p-xl">Aliquam a augue suscipit, luctus neque purus ipsum neque at dolor primis libero
								   tempus, blandit and cursus varius and magnis sapien
								</p>	 -->

							</div>
						</div>
					</div>


			 		<!-- CONTACT FORM -->
				 	<div class="row justify-content-center">
				 		<div class="col-lg-10 col-xl-8">
				 			<div class="form-holder">



								<form name="contactform" action="{{ url('interest/store') }}" wire:submit.prevent="store" method="POST" enctype="multipart/form-data" class="row contact-form">
                                    {{@csrf_field()}}
									<!-- Form Select -->
                                    <div>
                                        @if (session()->has('message'))
                                            <div class="alert alert-success">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                    </div>
									<div class="col-md-12 input-subject">
										<p class="p-lg">INVERTSTMENT TYPE: </p>
										<span>Choose a section, you want to invest in: </span>
										<select class="form-control investment_category" name="investment_category" aria-label="Default select example">
                                            <option disabled selected>Select<option>
									    	<option value="Agriculture">Agriculture<option>
											<option value="Tronet">Tronet</option>
											<option value="Real Estate">Real Estate</option>
											<option value="Atom Brains & Hammaz">Atom Brains & Hammaz</option>
											<option value="Atom UBA">Atom UBA</option>
											<option value="Other">Other</option>
									    </select>
									</div>

									<!-- Contact Form Input -->
									<div class="col-md-4">
										<p class="p-lg">First Name: </p>
										<small>Please enter your First name: </small>
										<input type="text" name="firstname" class="form-control firstname" placeholder="Your Name*">
									</div>
									<div class="col-md-4">
										<p class="p-lg">Middle Name: </p>
										<small>Please enter your Middle name: </small>
										<input type="text" name="secondname" class="form-control secondname" placeholder="Your Name*">
									</div>
									<div class="col-md-4">
										<p class="p-lg">Last Name: </p>
										<small>Please enter your Last name: </small>
										<input type="text" name="thirdname" class="form-control thirdname" placeholder="Your Name*">
									</div>

									<div  class="col-md-12">
										<p class="p-lg">Your Email Address: </p>
										<span>Please carefully check your email address for accuracy</span>
										<input type="text" name="email" class="form-control email" placeholder="Email Address*">
									</div>

									<div class="col-md-6">
										<p class="p-lg">Phone: </p>
										<small>Please enter your Phone Number: </small>
										<input type="text" name="phone" class="form-control phone" placeholder="Your Name*">
									</div>

									<div class="col-md-6">
										<p class="p-lg">Date of Birth: </p>
										<small>Please enter your date of birth: </small>
										<input type="date" name="dob" class="form-control dob" placeholder="Your Name*">
									</div>

									<div class="col-md-6">
										<p class="p-lg">Select Gender: </p>
										<small>Please enter choose your gender: </small>
										<div class="form-check">
										  <input class="form-check-input" type="radio" value="Male" name="gender" id="gender">
										  <label class="form-check-label" for="flexRadioDefault1">
										   Male
										  </label>
										</div>
										<div class="form-check">
										  <input class="form-check-input" type="radio" value="Female" name="gender" id="gender">
										  <label class="form-check-label" for="flexRadioDefault2">
										    Female
										  </label>
										</div>
									</div>

									<div class="col-md-6 input-subject">
										<p class="p-lg">Country: </p>
										<span>Please select your country: </span>
										<select class="form-control country" name="country" aria-label="Default select example">
									    	<option disabled selected>Select<option>
											<option value="Nigeria">Nigeria</option>
											<option value="USA">USA</option>
											<option value="Ghana">Ghana</option>
											<option value="Cyprus">Cyprus</option>
											<option value="Other">Other</option>
									    </select>
									</div>

									<div class="col-md-12 input-subject">
										<p class="p-lg">Desired Investment Amount: </p>
										<span>How much are you inversting in ATOM: </span>
										<select class="form-control amount" name="amount" aria-label="Default select example">
									    	<option disabled selected>Select<option>
											<option value="100">$100</option>
											<option value="500">$500</option>
											<option value="1000">$1000</option>
											<option value="2000">$2000</option>
											<option value="3000">$3000</option>
									    </select>
									</div>

									<div class="col-md-12">
										<p class="p-lg">Note: </p>
										<span>Will you like to communicate any Information to our Support team. Be VERY precise!</span>
										<textarea class="form-control message" name="note" rows="6" placeholder="I desire..."></textarea>
									</div>

									<!-- Contact Form Button -->
									<div class="col-md-12 mt-15 form-btn text-right">
										<button type="submit" class="btn btn-skyblue tra-grey-hover submit">Submit Request</button>
									</div>

									<!-- Contact Form Message -->
									<div class="col-lg-12 contact-form-msg">
										<span class="loading"></span>
									</div>

								</form>
				 			</div>
				 		</div>
				 	</div>	   <!-- END CONTACT FORM -->


				</div>	   <!-- End container -->
			</section>	<!-- END CONTACTS-2 -->




			<!-- DIVIDER LINE -->
			<hr class="divider">




			<!-- CALL TO ACTION-8
			============================================= -->
			<section id="cta-8" class="bg-snow wide-100 cta-section division">
				<div class="container">
					<div class="cta-8-wrapper pc-25">
						<div class="row row-cols-1 row-cols-md-2">


							<!-- BOX #1 -->
		 					<div class="col">
		 						<a href="pricing.html">
			 						<div class="cta-box cta-top-box bg-white wow fadeInUp">

			 							<!-- Icon -->
			 							<div class="cta-ico">
			 								<div class="ico-60"><span class="flaticon-wallet"></span></div>
										</div>

										<!-- Text -->
										<div class="cta-txt">

											<!-- Title -->
											<h5 class="h5-md">View Pricing</h5>

											<!-- Text -->
											<p class="p-lg">ATOM INVESTMENT Price List
											</p>

										</div>

			 						</div>
			 					</a>
		 					</div>		<!-- END BOX #1 -->


		 					<!-- BOX #2 -->
		 					<div class="col">
		 						<a href="faqs.html">
			 						<div class="cta-box bg-white wow fadeInUp">

			 							<!-- Icon -->
			 							<div class="cta-ico">
			 								<div class="ico-60"><span class="flaticon-help"></span></div>
										</div>

										<!-- Text -->
										<div class="cta-txt">

											<!-- Title -->
											<h5 class="h5-md">Read the FAQs</h5>

											<!-- Text -->
											<p class="p-lg">Get answers to Questions on your mind
											</p>

										</div>

			 						</div>
			 					</a>
		 					</div>	<!-- END BOX #2 -->


		 				</div>   <!-- End cta-8-wrapper -->
		 			</div>    <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END CALL TO ACTION-8 -->




			<!-- DIVIDER LINE -->
			<hr class="divider">




            @endsection
