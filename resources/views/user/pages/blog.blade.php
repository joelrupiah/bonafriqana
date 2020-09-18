@include('user.partials.pagesheader')
@include('user.partials.blog.blogmainheader')
<section class="blog-post-main">
	<!--/mag-content-->
	<div class="mag-content-inf py-5">
		<div class="container py-lg-5 px-lg-5">
			<div class="blog-inner-grids row">
				<div class="mag-post-left-hny col-lg-8">
					<div class="mag-hny-content">
						<!--/set-1-->
						<div class="blog-pt-grid-content">
							<div class="maghny-gd-1 blog-pt-grid mb-5">
								<a href="{{url('/blog/view')}}"><img class="img-fluid mt-2" src="{{asset('frontend/assets/images/bg2.jpg')}}"
										alt=""></a>

								<div class="entry-meta d-flex mt-3"><span class="entry-author">By <a href="#">
											Admin</a></span><span class="meta-separator">|</span>
									<a href="{{url('/blog/view')}}">Jan 22, 2020</a><span class="meta-separator">|</span>
									<a href="{{url('/blog/view')}}"> 0 comment</a></div>
								<h5 class="blog-title"><a href="{{url('/blog/view')}}">Standard post with a single
										image,There are many variations that focuses on presenting.</a></h5>
								<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla
									quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu
									mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In
									interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis
									lectus.</p>



								<a href="{{url('/blog/view')}}" class="read-more btn ">Read More</a>
							</div>
							<div class="maghny-gd-1 blog-pt-grid mb-5">
								<a href="{{url('/blog/view')}}"><img class="img-fluid mt-2" src="{{asset('frontend/assets/images/bg3.jpg')}}"
										alt=""></a>

								<div class="entry-meta d-flex mt-3"><span class="entry-author">By <a href="#">
											Admin</a></span><span class="meta-separator">|</span>
									<a href="{{url('/blog/view')}}">Jan 22, 2020</a><span class="meta-separator">|</span>
									<a href="{{url('/blog/view')}}"> 2 comment</a></div>
								<h5 class="blog-title"><a href="{{url('/blog/view')}}">Standard post with a single
										image,There are many variations that focuses on presenting.</a></h5>
								<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla
									quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu
									mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In
									interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis
									lectus.</p>

								<a href="{{url('/blog/view')}}" class="read-more btn ">Read More</a>
							</div>
							<div class="maghny-gd-1 blog-pt-grid mb-5">
								<a href="{{url('/blog/view')}}"><img class="img-fluid mt-2" src="{{asset('frontend/assets/images/bg4.jpg')}}"
										alt=""></a>

								<div class="entry-meta d-flex mt-3"><span class="entry-author">By <a href="#">
											Admin</a></span><span class="meta-separator">|</span>
									<a href="{{url('/blog/view')}}">Jan 22, 2020</a><span class="meta-separator">|</span>
									<a href="{{url('/blog/view')}}"> 3 comment</a></div>
								<h5 class="blog-title"><a href="{{url('/blog/view')}}">Standard post with a single
										image,There are many variations that focuses on presenting.</a></h5>
								<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla
									quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu
									mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In
									interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis
									lectus.</p>



								<a href="{{url('/blog/view')}}" class="read-more btn ">Read More</a>
							</div>

						</div>
						<!--//set-1-->

					</div>
					<!--//mag-hny-content-4-->
				</div>
				@include('user.partials.blog.blogsidecontent')
			</div>
			<!--/pagination-->
			<div class="pagination mt-lg-0 mt-4">
				<ul>
					<li class="prev"><a href="#page-number"><span class="fa fa-angle-double-left"></span></a></li>
					<li><a href="#page-number" class="active">1</a></li>
					<li><a href="#page-number">2</a></li>
					<li><a href="#page-number">3</a></li>
					<li><a href="#page-number">4</a></li>
					<li><a href="#page-number">5</a></li>
					<li class="next"><a href="#page-number"><span class="fa fa-angle-double-right"></span></a></li>
				</ul>
			</div>
			<!--//pagination-->

		</div>
	</div>
	<!--//mag-content-->
</section>

@include('user.partials.footer')