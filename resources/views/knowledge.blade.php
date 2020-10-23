@extends('master')
@section('header')
@section('title','Knowledge Books')

<div class="container ontainer-carousel text-center pt-5 bg-light">
		<h3>Knowledge Books</h3>
		<hr class="divider">
		<div class="container">
			<div class="row">
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
								<img src="{{asset('mytemplateassets/image/knowledge18.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">The Question</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
								<p class="size">The Art</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
						<div class="card bg-light">
							<div class="card_img bg-info">
								<img src="{{asset('mytemplateassets/image/knowledge8.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">Knowledge 2020</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
						<div class="card bg-light">
							<div class="card_img bg-info">
								<img src="{{asset('mytemplateassets/image/knowledge7.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">The Map</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
						<div class="card bg-light">
							<div class="card_img bg-info">
								<img src="{{asset('mytemplateassets/image/knowledge6.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">Basic Science</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
						<div class="card bg-light">
							<div class="card_img bg-info">
								<img src="{{asset('mytemplateassets/image/knowledge5.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">Generation</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
						<div class="card bg-light">
							<div class="card_img bg-info">
								<img src="{{asset('mytemplateassets/image/knowledge4.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">1 Paper</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
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
								<img src="{{asset('mytemplateassets/image/knowledge20.png')}}" class="img-fluid">
							</div>
							<div class="col-md-6">
								<h4>Book Infomations</h4><br>
								<p>Book Name: Knowledge is Power</p><br>
								<p>Book Price: 700 MMk</p><br>
								<p>Category: Knowledge Book</p><br>
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