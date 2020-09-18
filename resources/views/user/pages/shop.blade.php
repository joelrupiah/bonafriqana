@include('user.partials.pagesheader')
@include('user.partials.shop.shopmainheader')
<section class="w3l-ecommerce-main-inn">

	<div class="ecomrhny-content-inf py-5">
		<div class="container py-lg-5">

			<div class="ecommerce-grids row">

				@include('user.partials.shop.sidefilterscategory')

				@include('user.partials.shop.mainshop')

		</div>
	</div>

</section>

@include('user.partials.footer')