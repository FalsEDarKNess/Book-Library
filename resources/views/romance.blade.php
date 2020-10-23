@extends('master')
@section('header')
@section('title','Romance Books')

<div class="container ontainer-carousel text-center pt-5 bg-light">
		<h3>Romance Books</h3>
		<hr class="divider">
		<div class="container">
			<div class="row">
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
								<p class="size">The Longest Ride</p>
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
								<img src="{{asset('mytemplateassets/image/romance18.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">End Loneliness</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
								<p class="size">The Sun</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
								<p class="size">Second chance</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
								<p class="size">A lot Like Love</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
								<p class="size">Awork remenber 2</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
								<p class="size">Awork remenber 1</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
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
								<p class="size">Jude Deverause</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
						<div class="card bg-light">
							<div class="card_img bg-info">
								<img src="{{asset('mytemplateassets/image/romance8.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">Until Love</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
						<div class="card bg-light">
							<div class="card_img bg-info">
								<img src="{{asset('mytemplateassets/image/romance7.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">25 Arranged</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
						<div class="card bg-light">
							<div class="card_img bg-info">
								<img src="{{asset('mytemplateassets/image/romance6.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">You are Password</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
						<div class="card bg-light">
							<div class="card_img bg-info">
								<img src="{{asset('mytemplateassets/image/romance5.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">Can love happen</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6 py-4">
					<div class="card">
						<div class="card bg-light">
							<div class="card_img bg-info">
								<img src="{{asset('mytemplateassets/image/romance4.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">The Notebook</p>
								<button class="btn btn-outline-secondary btn-block">Borrow</button>
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
								<p class="size">Awork Remenber</p>
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
								<img src="{{asset('mytemplateassets/image/romance1.png')}}" class="image card-img-top border px-4" alt="...">
								<div class="add_button" data-target="#detailModal" data-toggle="modal">
									<span class="btn fa-stack fa-lg" title="View Detail">
										<i class="fas fa-circle fa-stack-2x"></i>
										<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</div>
							</div>

							<div class="card-body text-center">
								<p class="size">The fault</p>
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
								<img src="{{asset('mytemplateassets/image/romance20.png')}}" class="img-fluid">
							</div>
							<div class="col-md-6">
								<h4>Book Infomations</h4><br>
								<p>Book Name: The Longest Ride</p><br>
								<p>Book Price: 700 MMk</p><br>
								<p>Category: Romance Book</p><br>
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