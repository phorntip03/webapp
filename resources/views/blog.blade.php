@extends('layout.frontend.master')

@section('content')

<section class="section page-title">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 m-auto">
				<!-- Page Title -->
				<h1>Blog</h1>
				<!-- Page Description -->
				<p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta.</p>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->

<!--======================================
=            Featured Article            =
=======================================-->
<section class="section featured-article">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<article class="featured">
					<!-- Image -->
					<div class="image">
						<a href="blog-single.html"><img class="img-fluid" src="{{asset('asset/frontend/images/feature/featured-article.jpg')}}" alt="featured-article"></a>
					</div>
					<!-- written-content -->
					<div class="content">
						<!-- Post Title -->
						<h2><a href="blog-single.html">Introducing New IOS App</a></h2>
						<!-- Tags -->
						<ul class="list-inline post-tag">
							<li class="list-inline-item">
								<img class="img-fluid" src="{{asset('asset/frontend/images/testimonial/feature-testimonial-thumb.jpg')}}" alt="author-thumb">
							</li>
							<li class="list-inline-item">
								<a href="#">Thomas Johnson</a>
							</li>
							<li class="list-inline-item">
								August 8, 2017
							</li>
						</ul>
						<!-- Post Body -->
						<p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed,convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat.Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis</p>
						<a class="btn btn-main-sm" href="blog-single.html">Read more</a>
					</div>
				</article>
			</div>
		</div>
	</div>
</section>

<!--====  End of Featured Article  ====-->
<section class="post-grid section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<!-- Post -->
<article class="post-sm">
	<!-- Post Image -->
	<div class="post-thumb">
		<a href="blog-single.html"><img class="w-100" src="{{asset('asset/frontend/images/blog/post-01.jpg')}}" alt="Post-Image"></a>		
	</div>
	<!-- Post Title -->
	<div class="post-title">
		<h3><a href="blog-single.html">Innovation distinguishes between a leader and a follower.</a></h3>
	</div>
	<!-- Post Meta -->
	<div class="post-meta">
		<ul class="list-inline post-tag">
			<li class="list-inline-item">
				<img src="{{asset('asset/frontend/images/testimonial/feature-testimonial-thumb.jpg')}}" alt="author-thumb">
			</li>
			<li class="list-inline-item">
				<a href="#">Thomas Johnson</a>
			</li>
			<li class="list-inline-item">
				August 8, 2017
			</li>
		</ul>
	</div>
	<!-- Post Details -->
	<div class="post-details">
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
	</div>
</article>
			</div>
			<div class="col-lg-4 col-md-6">
				<!-- Post -->
<article class="post-sm">
	<!-- Post Image -->
	<div class="post-thumb">
		<a href="blog-single.html"><img class="w-100" src="{{asset('asset/frontend/images/blog/post-02.jpg')}}" alt="Post-Image"></a>		
	</div>
	<!-- Post Title -->
	<div class="post-title">
		<h3><a href="blog-single.html">Design is not just what it looks like and feels like. Design is how it works.</a></h3>
	</div>
	<!-- Post Meta -->
	<div class="post-meta">
		<ul class="list-inline post-tag">
			<li class="list-inline-item">
				<img src="{{asset('asset/frontend/images/testimonial/feature-testimonial-thumb.jpg')}}" alt="author-thumb">
			</li>
			<li class="list-inline-item">
				<a href="#">Thomas Johnson</a>
			</li>
			<li class="list-inline-item">
				August 8, 2017
			</li>
		</ul>
	</div>
	<!-- Post Details -->
	<div class="post-details">
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
	</div>
</article>
			</div>
			<div class="col-lg-4 col-md-6">
				<!-- Post -->
<article class="post-sm">
	<!-- Post Image -->
	<div class="post-thumb">
		<a href="blog-single.html"><img class="w-100" src="{{asset('asset/frontend/images/blog/post-03.jpg')}}" alt="Post-Image"></a>		
	</div>
	<!-- Post Title -->
	<div class="post-title">
		<h3><a href="blog-single.html">Design is not just what it looks like and feels like. Design is how it works.</a></h3>
	</div>
	<!-- Post Meta -->
	<div class="post-meta">
		<ul class="list-inline post-tag">
			<li class="list-inline-item">
				<img src="{{asset('asset/frontend/images/testimonial/feature-testimonial-thumb.jpg')}}" alt="author-thumb">
			</li>
			<li class="list-inline-item">
				<a href="#">Thomas Johnson</a>
			</li>
			<li class="list-inline-item">
				August 8, 2017
			</li>
		</ul>
	</div>
	<!-- Post Details -->
	<div class="post-details">
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
	</div>
</article>
			</div>
			<div class="col-lg-4 col-md-6">
				<!-- Post -->
<article class="post-sm">
	<!-- Post Image -->
	<div class="post-thumb">
		<a href="blog-single.html"><img class="w-100" src="{{asset('asset/frontend/images/blog/post-01.jpg')}}" alt="Post-Image"></a>		
	</div>
	<!-- Post Title -->
	<div class="post-title">
		<h3><a href="blog-single.html">Innovation distinguishes between a leader and a follower.</a></h3>
	</div>
	<!-- Post Meta -->
	<div class="post-meta">
		<ul class="list-inline post-tag">
			<li class="list-inline-item">
				<img src="{{asset('asset/frontend/images/testimonial/feature-testimonial-thumb.jpg')}}" alt="author-thumb">
			</li>
			<li class="list-inline-item">
				<a href="#">Thomas Johnson</a>
			</li>
			<li class="list-inline-item">
				August 8, 2017
			</li>
		</ul>
	</div>
	<!-- Post Details -->
	<div class="post-details">
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
	</div>
</article>
			</div>
			<div class="col-lg-4 col-md-6">
				<!-- Post -->
<article class="post-sm">
	<!-- Post Image -->
	<div class="post-thumb">
		<a href="blog-single.html"><img class="w-100" src="{{asset('asset/frontend/images/blog/post-02.jpg')}}" alt="Post-Image"></a>		
	</div>
	<!-- Post Title -->
	<div class="post-title">
		<h3><a href="blog-single.html">Design is not just what it looks like and feels like. Design is how it works.</a></h3>
	</div>
	<!-- Post Meta -->
	<div class="post-meta">
		<ul class="list-inline post-tag">
			<li class="list-inline-item">
				<img src="{{asset('asset/frontend/images/testimonial/feature-testimonial-thumb.jpg')}}" alt="author-thumb">
			</li>
			<li class="list-inline-item">
				<a href="#">Thomas Johnson</a>
			</li>
			<li class="list-inline-item">
				August 8, 2017
			</li>
		</ul>
	</div>
	<!-- Post Details -->
	<div class="post-details">
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
	</div>
</article>
			</div>
			<div class="col-lg-4 col-md-6">
				<!-- Post -->
<article class="post-sm">
	<!-- Post Image -->
	<div class="post-thumb">
		<a href="blog-single.html"><img class="w-100" src="{{asset('asset/frontend/images/blog/post-03.jpg')}}" alt="Post-Image"></a>		
	</div>
	<!-- Post Title -->
	<div class="post-title">
		<h3><a href="blog-single.html">Design is not just what it looks like and feels like. Design is how it works.</a></h3>
	</div>
	<!-- Post Meta -->
	<div class="post-meta">
		<ul class="list-inline post-tag">
			<li class="list-inline-item">
				<img src="{{asset('asset/frontend/images/testimonial/feature-testimonial-thumb.jpg')}}" alt="author-thumb">
			</li>
			<li class="list-inline-item">
				<a href="#">Thomas Johnson</a>
			</li>
			<li class="list-inline-item">
				August 8, 2017
			</li>
		</ul>
	</div>
	<!-- Post Details -->
	<div class="post-details">
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
	</div>
</article>
			</div>
			<div class="col-12">
				<!-- Call to action Community -->
<div class="cta-community shadow">
	<div class="row align-items-center">
		<div class="col-lg-9 text-center text-lg-left">
			<div class="content">
				<!-- Title -->
				<h2>Ready To Join Our Community?</h2>
				<!-- Description -->
				<p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat. </p>
			</div>
		</div>
		<div class="col-lg-3 text-center text-lg-right mt-4 mt-lg-0">
			<div class="action-button">
				<!-- Call Button -->
				<a href="contact.html" class="btn btn-main-sm">Join now</a>
			</div>
		</div>
	</div>
</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<!-- Post -->
<article class="post-sm">
	<!-- Post Image -->
	<div class="post-thumb">
		<a href="blog-single.html"><img class="w-100" src="{{asset('asset/frontend/images/blog/post-01.jpg')}}" alt="Post-Image"></a>		
	</div>
	<!-- Post Title -->
	<div class="post-title">
		<h3><a href="blog-single.html">Innovation distinguishes between a leader and a follower.</a></h3>
	</div>
	<!-- Post Meta -->
	<div class="post-meta">
		<ul class="list-inline post-tag">
			<li class="list-inline-item">
				<img src="{{asset('asset/frontend/images/testimonial/feature-testimonial-thumb.jpg')}}" alt="author-thumb">
			</li>
			<li class="list-inline-item">
				<a href="#">Thomas Johnson</a>
			</li>
			<li class="list-inline-item">
				August 8, 2017
			</li>
		</ul>
	</div>
	<!-- Post Details -->
	<div class="post-details">
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
	</div>
</article>
			</div>
			<div class="col-lg-4 col-md-6">
				<!-- Post -->
<article class="post-sm">
	<!-- Post Image -->
	<div class="post-thumb">
		<a href="blog-single.html"><img class="w-100" src="{{asset('asset/frontend/images/blog/post-02.jpg')}}" alt="Post-Image"></a>		
	</div>
	<!-- Post Title -->
	<div class="post-title">
		<h3><a href="blog-single.html">Design is not just what it looks like and feels like. Design is how it works.</a></h3>
	</div>
	<!-- Post Meta -->
	<div class="post-meta">
		<ul class="list-inline post-tag">
			<li class="list-inline-item">
				<img src="{{asset('asset/frontend/images/testimonial/feature-testimonial-thumb.jpg')}}" alt="author-thumb">
			</li>
			<li class="list-inline-item">
				<a href="#">Thomas Johnson</a>
			</li>
			<li class="list-inline-item">
				August 8, 2017
			</li>
		</ul>
	</div>
	<!-- Post Details -->
	<div class="post-details">
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
	</div>
</article>
			</div>
			<div class="col-lg-4 col-md-6">
				<!-- Post -->
<article class="post-sm">
	<!-- Post Image -->
	<div class="post-thumb">
		<a href="blog-single.html"><img class="w-100" src="{{asset('asset/frontend/images/blog/post-03.jpg')}}" alt="Post-Image"></a>		
	</div>
	<!-- Post Title -->
	<div class="post-title">
		<h3><a href="blog-single.html">Design is not just what it looks like and feels like. Design is how it works.</a></h3>
	</div>
	<!-- Post Meta -->
	<div class="post-meta">
		<ul class="list-inline post-tag">
			<li class="list-inline-item">
				<img src="{{asset('asset/frontend/images/testimonial/feature-testimonial-thumb.jpg')}}" alt="author-thumb">
			</li>
			<li class="list-inline-item">
				<a href="#">Thomas Johnson</a>
			</li>
			<li class="list-inline-item">
				August 8, 2017
			</li>
		</ul>
	</div>
	<!-- Post Details -->
	<div class="post-details">
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
	</div>
</article>
			</div>
			<div class="col-12">
				<!-- Pagination -->
				<nav class="pagination-nav">
				  <ul class="pagination">
				    <li class="page-item active"><a class="page-link" href="#">1</a></li>
				    <li class="page-item"><a class="page-link" href="#">2</a></li>
				    <li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item">
				      <a class="page-link" href="#" aria-label="Next">
				        <span aria-hidden="true"><i class="ti-angle-right"></i></span>
				        <span class="sr-only">Next</span>
				      </a>
				    </li>
				  </ul>
				</nav>
			</div>
		</div>
	</div>
</section>


@endsection