@extends('master')
@section('header')
@section('title','Newarrivel')

<div class="container ontainer-carousel text-center pt-5 bg-light">
		<h3>New Arrival Books</h3>
		<hr class="divider">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
								<p class="size">The longest ride</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
								<p class="size">Knowledge Power</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
								<p class="size">The minus Faction</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
								<p class="size">Love Stories</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
								<p class="size">Home Sweet Motel</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
								<p class="size">Knowledge Action</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
								<p class="size">The end of Loneliness</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
								<p class="size">A murder of Quality</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
								<p class="size">The Equation</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
								<p class="size">Humman Biology</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
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
								<img src="{{asset('mytemplateassets/image/action20.png')}}" class="img-fluid">
							</div>
							<div class="col-md-6">
								<h4>Book Infomations</h4><br>
								<p>Book Name: In sleep's Clothing</p><br>
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