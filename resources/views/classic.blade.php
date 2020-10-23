@extends('master')
@section('header')
@section('title','Classic Books')

<div class="container ontainer-carousel text-center pt-5 bg-light">
		<h3>Classic Books</h3>
		<hr class="divider">
		<div class="container">
			<div class="row">
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
								<img src="{{asset('mytemplateassets/image/classic19.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">Wondarland</p>
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
								<p class="size">A Murder</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
								<p class="size">Huckleberry Finn</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
								<p class="size">Awrinkle in time</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
								<p class="size">Don quirote</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
						<div class="card bg-light">
							<div class="card_img bg-info">
								<img src="{{asset('mytemplateassets/image/classic8.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">The Creat Critsby</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
						<div class="card bg-light">
							<div class="card_img bg-info">
								<img src="{{asset('mytemplateassets/image/classic7.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">The Night Manager</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
						<div class="card bg-light">
							<div class="card_img bg-info">
								<img src="{{asset('mytemplateassets/image/classic6.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">Harry Potter</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
						<div class="card bg-light">
							<div class="card_img bg-info">
								<img src="{{asset('mytemplateassets/image/classic5.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">Sherlock Holmes</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
						<div class="card bg-light">
							<div class="card_img bg-info">
								<img src="{{asset('mytemplateassets/image/classic4.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">Grimm's</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
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
								<p class="size">Arabion Nights</p>
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
								<p class="size">The War World</p>
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
								<p class="size">The Great Gets</p>
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
								<img src="{{asset('mytemplateassets/image/classic20.png')}}" class="img-fluid">
							</div>
							<div class="col-md-6">
								<h4>Book Infomations</h4><br>
								<p>Book Name: Paradise Last</p><br>
								<p>Book Price: 700 MMk</p><br>
								<p>Category: Classic Book</p><br>
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