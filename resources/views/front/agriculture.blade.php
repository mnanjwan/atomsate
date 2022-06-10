            @extends("layouts.master")

            @section("title")
                ATOM
            @endsection

            @section("content")

			<!-- SINGLE PROJECT-1
			============================================= -->
			<section id="project-1" class="bg-snow wide-60 inner-page-hero single-project division">
				<div class="container">
					<div class="row">


						<!-- PROJECT DISCRIPTION -->
						<div class="col-lg-10 offset-lg-1">
							<div class="project-description">
								<!-- PROJECT TITLE -->
								<div class="project-title">
									<!-- Title -->
									<h2 class="h4-xl">Agriculture</h2>
								</div>


								<!-- PROJECT TEXT -->
								<div class="project-txt">

									<!-- Image -->
					 				<div class="project-inner-img mb-50">
										<img class="img-fluid" src="{{asset('frontAssets/images/dashboard-040.png')}}" alt="project-preview" />
									</div>

									<!-- Text -->
									<p class="p-lg">Agricultural economics, study of the allocation, distribution, and utilization of the resources used, along with the commodities produced, by farming. Agricultural economics plays a role in the economics of development, for a continuous level of farm surplus is one of the wellsprings of technological and commercial growth.
									</p>

									<!-- Small Title -->
									<h5 class="h5-md mt-25 mb-20">Overview & Challenge</h5>

									<!-- Text -->
									<p class="p-lg">The effects of climate change affect farmers’ ability to grow the food we all need. Increasingly volatile weather and more extreme events – like floods and droughts – change growing seasons, limit the availability of water, allow weeds, pests and fungi to thrive, and can reduce crop productivity.
									</p>

									<!-- Text -->
									<p class="p-lg">Agriculture remains an important source of livelihood for the majority of Africans, but the sector is still very unproductive. Despite huge agricultural potential, sub-Saharan African countries have not yet benefited from it and experienced the highest prevalence of undernourishment worldwide. As a result, countries import increasingly more agricultural products than they export, putting additional strain on scarce foreign exchange reserves.
									</p>

									<!-- PROJECT IMAGES -->
									<div class="row d-flex align-items-center project-inner-img">

										<!-- IMAGE #1 -->
										<div class="col-md-6">
											<div class="project-image top-img">
												<div class="hover-overlay">
													<a class="image-link" href="{{asset('frontAssets/images/projects/project-02.jpg')}}" title="">
														<img class="img-fluid" src="{{asset('frontAssets/images/projects/project-02.jpg')}}" alt="p_image" />
														<div class="item-overlay"></div>
													</a>
												</div>
											</div>
										</div>

										<!-- IMAGE #2 -->
										<div class="col-md-6">
											<div class="project-image">
												<div class="hover-overlay">
													<a class="image-link" href="{{asset('frontAssets/images/projects/project-06.jpeg')}}" title="">
														<img class="img-fluid" src="{{asset('frontAssets/images/projects/project-06.jpeg')}}" alt="p_image" />
														<div class="item-overlay"></div>
													</a>
												</div>
											</div>
										</div>

									</div>	<!-- END PROJECT IMAGES -->

									<!-- Small Title -->
									<h5 class="h5-md mb-20">Project Summary</h5>

									<!-- List -->
									<ul class="simple-list">

										<li class="list-item">
											<p class="p-md"><span class="txt-500">Rice Farming</span> Rice cultivation is well-suited to countries and regions with low labor costs and high rainfall, as it is labor-intensive to cultivate and requires ample water. However, rice can be grown practically anywhere, even on a steep hill or mountain area with the use of water-controlling terrace systems.
											</p>
										</li>

										<li class="list-item">
											<p class="p-lg"><span class="txt-500">Egg Farming</span> Egg farming is the practice of raising birds—such as chickens, ducks, and geese—to produce eggs for human use. The eggs used for eating are known as table eggs, but fertilized eggs can be hatched in order to grow chickens for their meat or other purposes.
											</p>
										</li>

									</ul>

									<!-- IMAGE -->
								<!-- 	<div class="project-image project-inner-img video-preview"> -->

										<!-- Play Icon -->
										<!-- <a class="video-popup1" href="https://www.youtube.com/embed/SZEflIVnhH8">
											<div class="video-btn video-btn-xl bg-pink ico-90">
												<div class="video-block-wrapper"><span class="flaticon-play-button"></span></div>
											</div>
										</a> -->

										<!-- Preview Image -->
					 					<!-- <img class="img-fluid" src="images/dashboard-07.png" alt="video-preview">

									</div>	 -->

									<!-- PRICING TABLES -->


									<div class="row justify-content-center">
										<div class="col-lg-10 col-xl-8">
											<div class="section-title title-02 mb-85">

												<!-- Title -->
												<h2 class="h2-xs" style="margin: 50px; font-size: 2em">Agriculture Investments Plan</h2>

											</div>
										</div>
									</div>
									<div class="pricing-2-row pc-25">
										<div class="row row-cols-1 row-cols-md-3">


											<!-- BASIC PLAN -->
											<div class="col">
												<div class="pricing-2-table bg-white mb-40 wow fadeInUp">

													<!-- Plan Price -->
													<div class="pricing-plan">

														<!-- Plan Title -->
														<div class="pricing-plan-title">
															<h5 class="h5-xs">Sliver</h5>
															<h6 class="h6-sm bg-lightgrey">10% ROI</h6>
														</div>

														<!-- Price -->
														<sup class="dark-color">$</sup>
														<span class="dark-color">200</span>
														<!-- <sup class="validity dark-color"><span>.99</span> / month</sup> -->
														<p class="p-md">GP 1 | Regular Investor</p>

													</div>

													<!-- Plan Features  -->
													<!-- <ul class="features">
														<li><p class="p-md"><span>25</span> Projects</p></li>
														<li><p class="p-md"><span>10</span> mySQL Database</p></li>
														<li><p class="p-md"><span>25 GB</span> of Storage</p></li>
														<li><p class="p-md"><span>Premium</span> Support</p></li>
													</ul> -->

													<!-- Pricing Plan Button -->
													<a href="{{ url('/interest') }}" class="btn btn-sm btn-tra-grey tra-skyblue-hover">Select Plan</a>

												</div>
											</div>	<!-- END BASIC PLAN -->



											<div class="col">
												<div class="pricing-2-table bg-white mb-40 wow fadeInUp">

													<!-- Plan Price -->
													<div class="pricing-plan">

														<!-- Plan Title -->
														<div class="pricing-plan-title">
															<h5 class="h5-xs">Diamond</h5>
															<h6 class="h6-sm bg-lightgrey">10% ROI</h6>
														</div>

														<!-- Price -->
														<sup class="dark-color">$</sup>
														<span class="dark-color">1000</span>
														<!-- <sup class="validity dark-color"><span>.99</span> / month</sup> -->
														<p class="p-md">GP 1 | Regular Investor</p>

													</div>

													<!-- Plan Features  -->
													<!-- <ul class="features">
														<li><p class="p-md"><span>25</span> Projects</p></li>
														<li><p class="p-md"><span>10</span> mySQL Database</p></li>
														<li><p class="p-md"><span>25 GB</span> of Storage</p></li>
														<li><p class="p-md"><span>Premium</span> Support</p></li>
													</ul> -->

													<!-- Pricing Plan Button -->
													<a href="#" class="btn btn-sm btn-tra-grey tra-skyblue-hover">Select Plan</a>

												</div>
											</div>	<!-- END BASIC PLAN -->


											<!-- ADVANCED PLAN -->
											<div class="col">
												<div class="pricing-2-table bg-white mb-40 wow fadeInUp">

													<!-- Plan Price  -->
													<div class="pricing-plan highlight">

														<!-- Plan Title -->
														<div class="pricing-plan-title">
															<h5 class="h5-xs">Platinum</h5>
															<h6 class="h6-sm bg-grey black-color">10% ROI</h6>
														</div>

														<!-- Price -->
														<sup class="dark-color">$</sup>
														<span class="dark-color">1500</span>
														<!-- <sup class="validity dark-color"><span>.99</span> / month</sup> -->
														<p class="p-md">PLATINUM INVESTOR</p>
													</div>

													<!-- Plan Features  -->
													<!-- <ul class="features">
														<li><p class="p-md"><span>Unlimited</span> Projects</p></li>
														<li><p class="p-md"><span>50</span> mySQL Database</p></li>
														<li><p class="p-md"><span>500 GB</span> of Storage</p></li>
														<li><p class="p-md"><span>VIP</span> Support</p></li>
													</ul> -->

													<!-- Pricing Plan Button -->
													<a href="#" class="btn btn-sm btn-grey black-color tra-grey-hover">Select Plan</a>

												</div>
											</div>	<!-- END ADVANCED PLAN -->

											<div class="col-md-8" >
												<div class="pricing-2-table bg-white mb-40 text-center wow fadeInUp">

													<!-- Plan Price  -->
													<div class="pricing-plan highlight">

														<!-- Plan Title -->
														<div class="pricing-plan-title">
															<h5 class="h5-xs">Advanced</h5>
															<h6 class="h6-sm bg-skyblue white-color">Popular</h6>
														</div>

														<!-- Price -->
														<sup class="dark-color">$</sup>
														<span class="dark-color">15</span>
														<sup class="validity dark-color"><span>.99</span> / month</sup>
														<p class="p-md">Billed as $199 per year</p>
													</div>

													<!-- Plan Features  -->
													<ul class="features">
														<li><p class="p-md"><span>Unlimited</span> Projects</p></li>
														<li><p class="p-md"><span>50</span> mySQL Database</p></li>
														<li><p class="p-md"><span>500 GB</span> of Storage</p></li>
														<li><p class="p-md"><span>VIP</span> Support</p></li>
													</ul>

													<!-- Pricing Plan Button -->
													<a href="#" class="btn btn-sm btn-skyblue tra-grey-hover">Select Plan</a>

												</div>
											</div>	<!-- END ADVANCED PLAN -->


										</div>
									</div>	<!-- END PRICING TABLES -->

									<!-- Small Title -->
									<h5 class="h5-md mt-25 mb-20">Solution & Results</h5>

									<!-- Text -->
									<p class="p-lg">Aliqum mullam blandit tempor sapien gravida donec ipsum porta justo. Velna vitae
									   auctor congue magna nihil impedit ligula risus. Mauris donec ociis et magnis sapien sagittis
									   sapien sem congue tempor gravida and donec enim ipsum porta justo integer velna and purus efficitur ipsum primis in cubilia laoreet augue egestas luctus donec purus and blandit sodales
									   in cubilia laoreet augue donec, dictum tempor
									</p>

									<!-- List -->
									<ul class="simple-list">

										<li class="list-item">
											<p class="p-lg">Donec dolor magna, suscipit in magna dignissim, porttitor hendrerit diam.
											   Nunc gravida ultrices felis eget faucibus. Praesent aliquet tempus, blandit posuere ligula varius congue cursus
											</p>
										</li>

										<li class="list-item">
											<p class="p-lg">Nulla tincidunt volutpat tincidunt. Pellentesque habitant morbi tristique
											   senectus et netus and famesa malesuada augue suscipit, luctus neque purus ipsum neque dolor primis egestas luctus donec
											</p>
										</li>

									</ul>


								</div>	<!-- END PROJECT TEXT -->


								<!-- MORE PROJECTS BUTTON -->
								<div class="more-projects text-end">
									<a href="projects.html"><h3 class="h3-md txt-400">More Projects</h3></a>
								</div>


							</div>
						</div>	<!-- END PROJECT DISCRIPTION -->


					</div>	  <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END SINGLE PROJECT-1 -->



            @endsection
