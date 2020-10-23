@extends('master')
@section('header')
@section('title','Free Books')

<div class="container ontainer-carousel text-center pt-5 bg-light">
		<h3>Free Books</h3>
		<hr class="divider">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
								<p class="size">The Fault</p>
								<button class="btn btn-outline-secondary btn-block">For Free</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
								<p class="size">The Cureat Get</p>
								<button class="btn btn-outline-secondary btn-block">For Free</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
								<p class="size">Science 1</p>
								<button class="btn btn-outline-secondary btn-block">For Free</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
								<p class="size">The war worlds</p>
								<button class="btn btn-outline-secondary btn-block">For Free</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
						<div class="card bg-light">
							<div class="card_img bg-info">
								<img src="{{asset('mytemplateassets/image/knowledge2.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">General 2020</p>
								<button class="btn btn-outline-secondary btn-block">For Free</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
						<div class="card bg-light">
							<div class="card_img bg-info">
								<img src="{{asset('mytemplateassets/image/education2.png')}}" class="image card-img-top border px-4" alt="...">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
						<div class="card bg-light">
							<div class="card_img bg-info">
								<img src="{{asset('mytemplateassets/image/action3.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">Revenge</p>
								<button class="btn btn-outline-secondary btn-block">For Free</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
						<div class="card bg-light">
							<div class="card_img bg-info">
								<img src="{{asset('mytemplateassets/image/horror3.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">The Dark Stuff</p>
								<button class="btn btn-outline-secondary btn-block">For Free</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
						<div class="card bg-light">
							<div class="card_img bg-info">
								<img src="{{asset('mytemplateassets/image/romance3.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">Work Remenber</p>
								<button class="btn btn-outline-secondary btn-block">For Free</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
						<div class="card bg-light">
							<div class="card_img bg-info">
								<img src="{{asset('mytemplateassets/image/classic3.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">Aravion Nights</p>
								<button class="btn btn-outline-secondary btn-block">For Free</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
						<div class="card bg-light">
							<div class="card_img bg-info">
								<img src="{{asset('mytemplateassets/image/funny3.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">Crazy Rich</p>
								<button class="btn btn-outline-secondary btn-block">For Free</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
						<div class="card bg-light">
							<div class="card_img bg-info">
								<img src="{{asset('mytemplateassets/image/knowledge3.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">General 2021</p>
								<button class="btn btn-outline-secondary btn-block">For Free</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
						<div class="card bg-light">
							<div class="card_img bg-info">
								<img src="{{asset('mytemplateassets/image/education3.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">Children Books</p>
								<button class="btn btn-outline-secondary btn-block">For Free</button>
							</div>
						</div>
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
								<img src="{{asset('mytemplateassets/image/action1.png')}}" class="img-fluid">
							</div>
							<div class="col-md-6">
								<h4>Book Infomations</h4><br>
								<p>Book Name: Final Evolutiont</p><br>
								<p>Book Price: 0 MMk</p><br>
								<p>Category: Action Book</p><br>
							<!-- <div class="form-group">
								<label for="qty">Day </label>
								<input type="number" name="" id="qty" class="form-control w-50">
							</div> -->
							<button class="btn btn-outline-secondary">For Free</button>
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