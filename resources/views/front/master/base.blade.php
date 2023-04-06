
<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>PT. Vascomm Solusi Teknologi</title>
	<meta name="description" content="PT. Vascomm Solusi Teknologi">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="shortcut icon" href="https://vascomm.co.id/package/img/favicon.png">
  
	<link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/front/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/front/css/themify-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/front/css/elegant.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/front/css/jquery.mmenu.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/front/css/jquery-ui.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/front/css/perfect-scrollbar.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/front/css/venobox.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/front/css/slick.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/front/css/slick-theme.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/front/css/cssanimation.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/front/css/animate.css') }}" />	
	<link rel="stylesheet" href="{{ asset('assets/front/css/helper.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/front/css/responsive.css') }}">
	@yield('css')
</head>

<body>
	@include('front.master.components.header')
	
	@yield('content')
	
	@include('front.master.components.footer')
	
	<!-- Modal -->
	<div class="modal fade" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-4">
							<div class="tab-content">
								<div id="product-1" class="tab-pane fade in show active">
									<div class="product-details-thumb">
										<img src="{{ asset('assets/front/images/products/product-details/1.jpg') }}" alt="" />
									</div>
								</div>
								<div id="product-2" class="tab-pane fade">
									<div class="product-details-thumb">
										<img src="{{ asset('assets/front/images/products/product-details/2.jpg') }}" alt="" />
									</div>
								</div>
								<div id="product-3" class="tab-pane fade">
									<div class="product-details-thumb">
										<img src="{{ asset('assets/front/images/products/product-details/3.jpg') }}" alt="" />
									</div>
								</div>
							</div>
							<ul class="nav nav-tabs products-nav-tabs horizontal quick-view mt-10">
								<li><a class="active" data-toggle="tab" href="#product-1"><img src="{{ asset('assets/front/images/products/product-details/thumb-1.jpg') }}" alt="" /></a></li>
								<li><a data-toggle="tab" href="#product-2"><img src="{{ asset('assets/front/images/products/product-details/thumb-2.jpg') }}" alt="" /></a></li>
								<li><a data-toggle="tab" href="#product-3"><img src="{{ asset('assets/front/images/products/product-details/thumb-3.jpg') }}" alt="" /></a></li>
							</ul>
						</div>
						<div class="col-lg-8">
							<div class="row">
								<div class="col-lg-8">
									<div class="product-details-desc">
										<h2>Apple The New MacBook Retina 2016 MLHA2 12 inches</h2>
										<ul>
											<li>1.6 GHz dual-core Intel Core i5 (Turbo Boost up to 2.7 GHz) with 3 MB shared L3 cache 8 GB of 1600 MHz LPDDR3 RAM; 128 GB PCIe-based flash storage</li>
											<li>13.3-Inch (diagonal) LED-backlit Glossy Widescreen Display, 1440 x 900 resolution Intel HD Graphics 6000</li>
											<li>OS X El Capitan, Up to 12 Hours of Battery Life Macbook Air does not have a Retina display on any model.</li>
										</ul>
										<div class="product-meta">
											<ul class="list-none">
												<li>SKU: 00012 <span>|</span></li>
												<li>Categories:
													<a href="#">Tech</a>
													<a href="#">Macbook</a>
													<a href="#">Laptop</a>
													<span>|</span>
												</li>
												<li>Tags:
													<a href="#">Tech,</a>
													<a href="#">Apple</a>
												</li>
											</ul>
										</div>
										<div class="social-icons style-5">
											<span>Share Link:</span>
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-twitter"></i></a>
											<a href="#"><i class="fa fa-google-plus"></i></a>
											<a href="#"><i class="fa fa-rss"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="product-action stuck text-left">
										<div class="free-delivery">
											<a href="#"><i class="ti-truck"></i> Free Delivery</a>
										</div>
										<div class="product-price-rating">
											<div>
												<del>629.99</del>
											</div>
											<span>$495.00</span>
											<div class="pull-right">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
											</div>
										</div>
										<div class="product-colors mt-20">
											<label>Select Color:</label>
											<ul class="list-none">
												<li>Red</li>
												<li>Black</li>
												<li>Blue</li>
											</ul>
											
										</div>
										<div class="product-quantity mt-15">
											<label>Quatity:</label>
											<input type="number" value="1" />
										</div>
										<div class="add-to-get mt-50">
											<a href="#" class="add-to-cart">Add to Cart</a>
											<a href="#" class="add-to-cart compare">+ ADD to Compare</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="{{ asset('assets/front/js/vendor/modernizr-3.6.0.min.js') }}"></script>
	<script src="{{ asset('assets/front/js/vendor/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/front/js/jquery.mmenu.js') }}"></script>
	<script src="{{ asset('assets/front/js/jquery.easing.min.js') }}"></script>
	<script src="{{ asset('assets/front/js/perfect-scrollbar.min.js') }}"></script>
	<script src="{{ asset('assets/front/js/slick.min.js') }}"></script>
	<script src="{{ asset('assets/front/js/letteranimation.min.js') }}"></script>
	<script src="{{ asset('assets/front/js/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('assets/front/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('assets/front/js/venobox.min.js') }}"></script>
	<script src="{{ asset('assets/front/js/plugins.js') }}"></script>
	<script src="{{ asset('assets/front/js/main.js') }}"></script>
	@include('sweetalert::alert')
	@yield('js')

</body>

</html>