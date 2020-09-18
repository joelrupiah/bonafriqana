@include('user.partials.pagesheader')
@include('user.partials.blog.blogmainheader')
<section class="blog-post-main">
	<!--/mag-content-->
	<div class="mag-content-inf py-5">
		<div class="container py-lg-5">
			<div class="blog-inner-grids">
				<div class="mag-post-left-hny">
					<div class="mag-hny-content">
						<!--/set-1-->
						<div class="blog-pt-grid-content">
							<div class="maghny-gd-1 blog-pt-grid mb-lg-5 mb-4">

									<a href="#"><img class="img-fluid" src="{{asset('frontend/assets/images/banner3.jpg')}}"
										alt=""></a>

								<div class="entry-meta d-flex mt-3"><span class="entry-author">By <a href="#">
											Admin</a></span><span class="meta-separator">|</span>
									<a href="#">Jan 22, 2020</a><span class="meta-separator">|</span>
                                    <a href="#"> 1 comment</a>
                                </div>
								<h5 class="blog-title mb-3"><a href="#">Standard post with a single
										image,There are many variations that focuses on presenting.</a></h5>
								<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla
									quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu
									mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In
									interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis
									lectus.</p>

								<!--/social-icons-->
								<div class="post-social-box my-lg-5 my-4">
									<a href="#" class="facebook-post">
										<span class="fa fa-facebook" aria-hidden="true"></span>
										<span class="social_info_name">Facebook</span>
									</a>
									<a href="#" class="twitter-post">
										<span class="fa fa-twitter" aria-hidden="true"></span>
										<span class="social_info_name">Facebook</span>
									</a>
									<a href="#" class="google-post">
										<span class="fa fa-google" aria-hidden="true"></span>
									</a>
								</div>
								<!--//social-icons-->
							
					    </div>
				    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</section>

@include('user.partials.footer')
