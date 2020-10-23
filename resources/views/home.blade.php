@extends('master')
@section('header')
@section('title','Book Library')

	<div class="container my-5 bg-light">
		<div class="row">
			<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 my-5 ">
				<h5>Types of Book</h5>
				<hr>
				<nav>
					<a href="{{route('horrorpage')}}" class="nav-link">Horror</a>
					<a href="{{route('actionpage')}}" class="nav-link">Action</a>
					<a href="{{route('romancepage')}}" class="nav-link">Romance</a>
					<a href="{{route('classicpage')}}" class="nav-link">Classic</a>
					<a href="{{route('funnypage')}}" class="nav-link">Funny</a>
					<a href="{{route('knowledgepage')}}" class="nav-link">Knowledge</a>
					<a href="{{route('educationpage')}}" class="nav-link">Education</a>
					<div class="vl"></div>
				</nav>
			</div>
			

			<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">

				<h4 class="text-center pt-4">New Arrival Books</h4>
				<hr class="divider">
				<div class="container my-4 p-4 color">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/horror20.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">House Of Fear</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/action20.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">In Sleep's Clothing</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/romance20.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">The Longest Ride</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/classic20.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Paradise Lost</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/funny20.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">The curious</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/knowledge20.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Knowledge is Power</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/education20.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Biology Collection</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/horror19.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">ANNA Dress</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/action19.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">The Minus Faction</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/romance19.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Naughty Love stories</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/classic19.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Wondorland</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/funny19.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Home Sweet Model</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				<div class="text-right pt-4 pr-3">
					<button class="btn btn-outline-info"><a href="{{route('newarrivelpage')}}">See More >></a></button>
				</div>
				</div>

				<h4 class="text-center pt-4">Free Books</h4>
				<hr class="divider">
				<div class="container my-4 p-4 color">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/action1.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Final Evolution</p>
													<button class="btn btn-outline-secondary btn-block">For Free</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/horror1.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Naomi's Room</p>
													<button class="btn btn-outline-secondary btn-block">For Free</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/romance1.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">The fault in slorks</p>
													<button class="btn btn-outline-secondary btn-block">For Free</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/classic1.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">The Cireat Gats</p>
													<button class="btn btn-outline-secondary btn-block">For Free</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/funny1.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Short Stories</p>
													<button class="btn btn-outline-secondary btn-block">For Free</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/knowledge1.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Unusual</p>
													<button class="btn btn-outline-secondary btn-block">For Free</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/education1.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Science 2</p>
													<button class="btn btn-outline-secondary btn-block">For Free</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/horror2.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">The Reddening</p>
													<button class="btn btn-outline-secondary btn-block">For Free</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/action2.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Tentn Man Dolon</p>
													<button class="btn btn-outline-secondary btn-block">For Free</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/romance2.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Me Before You</p>
													<button class="btn btn-outline-secondary btn-block">For Free</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/classic2.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">The War Worlds</p>
													<button class="btn btn-outline-secondary btn-block">For Free</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/funny2.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Best Jokers</p>
													<button class="btn btn-outline-secondary btn-block">For Free</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				<div class="text-right pt-4 pr-3">
					<button class="btn btn-outline-info"><a href="{{route('freepage')}}">See More >></a></button>
				</div>
				</div>

				<h4 class="text-center pt-4">Horror Books</h4>
				<hr class="divider">
				<div class="container my-4 p-4 color">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/horror20.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">House of fear</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/horror19.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">ANNA Dress</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/horror18.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Teacher's Pet</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/horror17.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Siren and Specter</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/horror16.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Hide and Seek</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/horror15.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">The Deep</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/horror14.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">The Ghosh Files</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/horror13.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Abnormal Beyond</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/horror12.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Little Girls</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/horror11.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Gideon</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/horror10.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">The Carrow Haunt</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/horror9.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">The Rapping</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				<div class="text-right pt-4 pr-3">
					<button class="btn btn-outline-info"><a href="{{route('horrorpage')}}">See More >></a></button>
				</div>
				</div>

				<h4 class="text-center pt-4">Action Books</h4>
				<hr class="divider">
				<div class="container my-4 p-4 color">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/action20.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">In Sleep's Clothing</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/action19.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">The Minus Faction</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/action18.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">City of Bones</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/action17.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">The Lost Partrol</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/action16.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Flame Seer</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/action15.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">BANK!</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/action14.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">The Lives We Lost</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/action13.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">The Daybreak</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/action12.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">A Civil Action</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/action11.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Soldier Son</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/action10.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">She's Gone</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/action9.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Passion To Action</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				<div class="text-right pt-4 pr-3">
					<button class="btn btn-outline-info"><a href="{{route('actionpage')}}">See More >></a></button>
				</div>
				</div>

				<h4 class="text-center pt-4">Romance Books</h4>
				<hr class="divider">
				<div class="container my-4 p-4 color">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/romance20.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">The longest Ride</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/romance19.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Naughty Love Stories</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/romance18.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">The end of loneliness</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/romance17.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Sand Dollar</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/romance16.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Romeo and Juliet</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/romance15.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">One Day</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/romance14.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">The Sun is also astor</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/romance13.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Second Change of love</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/romance12.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">A lot like love</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/romance11.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Awork to remenber2</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/romance10.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Awork to Remenber1</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/romance9.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Jude Devoraux</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				<div class="text-right pt-4 pr-3">
					<button class="btn btn-outline-info"><a href="{{route('romancepage')}}">See More >></a></button>
				</div>
				</div>

				<h4 class="text-center pt-4">Classic Books</h4>
				<hr class="divider">
				<div class="container my-4 p-4 color">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/classic20.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Poradise Lost</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/classic19.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Wonderland</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/classic18.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">A murder of quality</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/classic17.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Gritty</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/classic16.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Herman Melville</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/classic15.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Drocula</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/classic14.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Huckleberry finn</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/classic13.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">A wrinklein time</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/classic12.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Don Quixote</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/classic11.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Emily Bronte</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/classic10.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">East of Eden</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/classic9.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">The Book Thief</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				<div class="text-right pt-4 pr-3">
					<button class="btn btn-outline-info"><a href="{{route('classicpage')}}">See More >></a></button>
				</div>
				</div>

				<h4 class="text-center pt-4">Funny Books</h4>
				<hr class="divider">
				<div class="container my-4 p-4 color">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/funny20.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">The Curious</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/funny19.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Home sweet motel</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/funny18.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Mindy Kaling</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/funny17.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">+300 Best Jokers</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/funny16.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Minecarlt Memes</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/funny15.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Tina Fey</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/funny14.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">No Laan's Man</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/funny13.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Travel Book</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/funny12.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Worst best man</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/funny11.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Games</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/funny10.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Funniest</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/funny9.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Comedy Writing</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				<div class="text-right pt-4 pr-3">
					<button class="btn btn-outline-info"><a href="{{route('funnypage')}}">See More >></a></button>
				</div>
				</div>
				
				<h4 class="text-center pt-4">Knowledge Books</h4>
				<hr class="divider">
				<div class="container my-4 p-4 color">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/knowledge20.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Knowledge is Power</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/knowledge19.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Knowledge in Action</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/knowledge18.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">The equation</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/knowledge17.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Knowledge Pearls</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/knowledge16.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">The Holy</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/knowledge15.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Teacher Knowledge</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/knowledge14.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">The art</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/knowledge13.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Knowledge Quest</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/knowledge12.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Knowledge Gap</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/knowledge11.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Power Knowledge</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/knowledge10.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Theory Knowledge</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/knowledge9.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Hidden Sacred</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				<div class="text-right pt-4 pr-3">
					<button class="btn btn-outline-info"><a href="{{route('knowledgepage')}}">See More >></a></button>
				</div>
				</div>

				<h4 class="text-center pt-4">Education Books</h4>
				<hr class="divider">
				<div class="container my-4 p-4 color">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/education20.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Biology Collection</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/education19.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">School Physics</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/education18.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Hummon Biology</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/education17.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Mapping Biology</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/education16.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Science 1996</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/education15.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Biology Teaching</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/education14.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Biology-3</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/education13.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Advance Biology</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="container">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/education12.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Biology-2</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/education11.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Science Grade-3</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/education10.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Science Quarter</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
											<div class="card bg-light">
												<div class="card_img bg-info">
													<img src="{{asset('mytemplateassets/image/education9.png')}}" class="image card-img-top border px-4" alt="...">
													<div class="add_button" data-target="#detailModal" data-toggle="modal">
														<span class="btn fa-stack fa-lg" title="View Detail">
															<i class="fas fa-circle fa-stack-2x"></i>
															<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
														</span>
													</div>
												</div>

												<div class="card-body text-center">
													<p class="size">Ready For--3</p>
													<button class="btn btn-outline-secondary btn-block">Borrow</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				<div class="text-right pt-4 pr-3">
					<button class="btn btn-outline-info"><a href="{{route('educationpage')}}">See More >></a></button>
				</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Detail Modal -->
	<div class="modal fade" id="detailModal">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<h3>Book Detail</h3>
					<button class="close" data-dismiss="modal">
						<span>&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<img src="{{asset('mytemplateassets/image/action20.png')}}" class="img-fluid">
							</div>
							<div class="col-md-6">
								<h4>Book Infomations</h4><br>
								<p>Book Name: In Sleep's Clothing</p><br>
								<p>Book Price: 700 MMk</p><br>
								<p>Category: Action Book</p><br>
							<!-- <div class="form-group">
								<label for="qty">Day </label>
								<input type="number" name="" id="qty" class="form-control w-50">
							</div> -->
							<button class="btn btn-outline-secondary">Borrow</button>
							<button class="btn btn-outline-secondary">Add To Cart</button>

						</div>
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<button class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
			</div>

			</div>
		</div>
	</div>

@endsection
