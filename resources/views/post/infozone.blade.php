<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Author Meta -->
	<meta name="author" content="codepixer">

	<!-- Meta Description -->
	<meta name="description" content="">

	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	
	<!-- meta character set -->
	<meta charset="UTF-8">

	<!-- Site Title -->
	<title>CyberPersona InfoZone</title>

	<!-- Favicons -->
	<link href="{{ asset('assets/images/head-Icon.ico') }}" rel="icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

	   <!-- Vendor CSS Files -->
	<link href="{{ asset('assets/vendor/blog/css/linearicons.cs') }}" rel="stylesheet">
	   <link href="{{ asset('assets/vendor/blog/css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/blog/css/magnific-popup.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/blog/css/nice-select.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/blog/css/animate.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/blog/css/owl.carousel.css') }}" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="{{ asset('assets/css/subinfozone.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/footerinfo.css') }}" rel="stylesheet">

</head>

<body>

	 <!-- ======= Header ======= -->
	@include('post.header')

  <main id="main">

	<!-- ======= Breadcrumbs ======= -->
	<section id="breadcrumbs" class="breadcrumbs">
		<div class="container">

  <br>
		  <ol>
			<li><a href="{{ url('home') }}">Home</a></li>
			<li>Information Zone</li>
			<br>
		  </ol>
		  <h1>Latest Info</h1>
  
		</div>
	  </section><!-- End Breadcrumbs -->

	<div class="section-title">
	  </div>

	 
	<!-- Start main body Area -->
		<div class="container box_1170">
			<div class="row">
				<div class="col-lg-8 post-list">
					<!-- Start Post Area -->
					<section class="post-area">

						<div class="single-post-item">
							<figure>
								<img class="post-img img-fluid" src="{{ asset('assets/images/blog/posts/' .$infozonepost[0]->post_image) }}" alt="">
							</figure>
							<h3>
								<a  href="{{ url('detailhelpline') }}"> {{ $infozonepost[0]->post_tittle }}</a>
							</h3>
							<p> {{ $infozonepost[0]->post_content }} </p>
							<a href="{{ url('detailhelpline') }}"  class="primary-btn text-uppercase mt-15">continue Reading</a>
							<div class="post-box">
								<div class="d-flex">
									<div>
										<a href="#">
											<img src="{{ asset('assets/images/blog/author/' .$infozonepost[0]->post_author_image) }}" alt="" width="40px">
										</a>
									</div>
									<div class="post-meta">
										<div class="meta-head">
											<a href="#">{{ $infozonepost[0]->post_author_name}}</a>
										</div>
										<div class="meta-details">
											<ul>
												<li>
													<a href="#">
														<span class="fa fa-calendar"></span>
														{{ $infozonepost[0]->post_date->format('d/m/Y')}}
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-picture-o"></span>
														{{ $infozonepost[0]->post_category}}
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-eye"></span>
														{{ $infozonepost[0]->post_users_views}}
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="single-post-item">
							<figure>
								<img class="post-img img-fluid" src="{{ asset('assets/images/blog/posts/' .$infozonepost[1]->post_image) }}" alt="">
							</figure>
							<br>
							<br>
							<br>
							<h3>
								<a  href="{{ url('detailpersonality') }}"> {{ $infozonepost[1]->post_tittle }}</a>
							</h3>
							<p> {{ $infozonepost[1]->post_content }} </p>
							<a href="{{ url('detailpersonality') }}"  class="primary-btn text-uppercase mt-15">continue Reading</a>
							<div class="post-box">
								<div class="d-flex">
									<div>
										<a href="#">
											<img src="{{ asset('assets/images/blog/author/' .$infozonepost[1]->post_author_image) }}" alt="" width="40px">
										</a>
									</div>
									<div class="post-meta">
										<div class="meta-head">
											<a href="#">{{ $infozonepost[1]->post_author_name}}</a>
										</div>
										<div class="meta-details">
											<ul>
												<li>
													<a href="#">
														<span class="fa fa-calendar"></span>
														{{ $infozonepost[1]->post_date->format('d/m/Y')}}
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-picture-o"></span>
														{{ $infozonepost[1]->post_category}}
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-eye"></span>
														{{ $infozonepost[1]->post_users_views}}
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="single-post-item">
							<figure>
								<img class="post-img img-fluid" src="{{ asset('assets/images/blog/posts/' .$infozonepost[2]->post_image) }}" alt="">
							</figure>
							<h3>
								<a  href="{{ url('detailcyberthreats') }}"> {{ $infozonepost[2]->post_tittle }}</a>
							</h3>
							<p> {{ $infozonepost[2]->post_content }} </p>
							<a href="{{ url('detailcyberthreats') }}"  class="primary-btn text-uppercase mt-15">continue Reading</a>
							<div class="post-box">
								<div class="d-flex">
									<div>
										<a href="#">
											<img src="{{ asset('assets/images/blog/author/' .$infozonepost[2]->post_author_image) }}" alt="" width="40px">
										</a>
									</div>
									<div class="post-meta">
										<div class="meta-head">
											<a href="#">{{ $infozonepost[2]->post_author_name}}</a>
										</div>
										<div class="meta-details">
											<ul>
												<li>
													<a href="#">
														<span class="fa fa-calendar"></span>
														{{ $infozonepost[2]->post_date->format('d/m/Y')}}
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-picture-o"></span>
														{{ $infozonepost[2]->post_category}}
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-eye"></span>
														{{ $infozonepost[2]->post_users_views}}
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>


				
			

					</section>
					<!-- Start Post Area -->
				</div>


				<div class="col-lg-4 sidebar">
					<div class="single-widget search-widget">
						<form class="example" action="infozone" method="GET" style="margin:auto;max-width:300px">
							<input type="text" placeholder="Search Posts" name="search">
							<button type="submit" name="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>


<div class="single-widget popular-posts-widget">
	<h4 class="title"> <i class="bi bi-search"></i>
						Popular Posts</h4>
						@foreach($infozonepost as $infozonepostdata)
						<div class="blog-list ">
							<div class="single-popular-post d-flex flex-row">
								<div class="popular-thumb"> 
									<img class="img-fluid" src="{{ asset('assets/images/blog/posts/' .$infozonepostdata->post_widget_image) }}"  width="100px" alt="">
								</div>
								<div class="popular-details">
									<a href="#"> 
										<h4>{{ $infozonepostdata->post_widget_name}}</h4>
									</a> 
									<p class="text-uppercase">02 hours ago</p>
								</div>
							</div>
						</div>
						@endforeach	
					</div>



					<div class="single-widget category-widget">
						<h4 class="title">Post Categories</h4>
						@foreach($infozonepost as $infozonepostdata)
						<ul>
							<li><a href="#" class="justify-content-between align-items-center d-flex">
									<p>{{ $infozonepostdata->post_category }}</p> <span>{{ $infozonepostdata->post_category_num}}</span>
								</a></li>
						</ul>
						@endforeach		
					</div>

					</div>
			</div>
		</div>
	</section>
	<!-- Start main body Area -->


  <!-- ======= Footer ======= -->
  @include('post.footer')



  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="{{ asset('assets/vendor/blog/js/jquery-2.2.4.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	crossorigin="anonymous"></script>
	<script src="{{ asset('assets/vendor/blog/js/bootstrap.min.js') }}"></script>
	<script src="https://kit.fontawesome.com/e4154820db.js" crossorigin="anonymous"></script>
	<script src="{{ asset('assets/vendor/blog/js/easing.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/blog/js/hoverIntent.js') }}"></script>
	<script src="{{ asset('assets/vendor/blog/js/superfish.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/blog/js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/blog/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/blog/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/blog/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/blog/js/waypoints.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/blog/js/mail-script.js') }}"></script>
	<script src="{{ asset('assets/vendor/blog/js/main.js') }}"></script>

	  <!-- Template Main JS File -->
	<script src="{{ asset('assets/js/infomain.js') }}"></script>

	
  </body>

  </html>

