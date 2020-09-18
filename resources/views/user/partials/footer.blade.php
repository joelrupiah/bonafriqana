
  <section class="w3l-footer-22">
    <!-- footer-22 -->
    <div class="footer-hny py-5">
        <div class="container py-lg-5">
            <div class="text-txt row">
                <div class="left-side col-lg-4">
                    <h3><a class="logo-footer" href="index.html">
                          Bonafri<span class="lohny">q</span>ana</a></h3>
                    <!-- if logo is image enable this   
                                  <a class="navbar-brand" href="#index.html">
                                      <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                                  </a> -->
                    <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur.Vivamus
                        a ligula quam. Ut blandit eu leo non suscipit. </p>
                    <ul class="social-footerhny mt-lg-5 mt-4">

                        <li><a class="facebook" href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                        </li>
                        <li><a class="twitter" href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                        </li>
                        <li><a class="google" href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                        </li>
                        <li><a class="instagram" href="#"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                        </li>
                    </ul>
                </div>

                <div class="right-side col-lg-8 pl-lg-5">
                    <h4>Women's Day Special Offer
                      All Branded Sandals are Flat 50% Discount</h4>
                    <div class="sub-columns">
                        <div class="sub-one-left">
                            <h6>Useful Links</h6>
                            <div class="footer-hny-ul">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms and Conditions</a></li>
                                    <li><a href="contact.html">Support</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="sub-two-right">
                            <h6>Our Store</h6>
                            <p class="mb-5">49436 Broaddus Honey Court Avenue, Madisonville KY 95020, United States of America</p>

                            <h6>We accept:</h6>
                            <ul>
                                <li><a class="pay-method" href="#"><span class="fa fa-cc-visa"
                                            aria-hidden="true"></span></a>
                                </li>
                                <li><a class="pay-method" href="#"><span class="fa fa-cc-mastercard"
                                            aria-hidden="true"></span></a>
                                </li>
                                <li><a class="pay-method" href="#"><span class="fa fa-cc-paypal"
                                            aria-hidden="true"></span></a>
                                </li>
                                <li><a class="pay-method" href="#"><span class="fa fa-cc-amex"
                                            aria-hidden="true"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="below-section row">
                <div class="columns col-lg-6">
                    <ul class="jst-link">
                        <li><a href="#">Privacy Policy </a> </li>
                        <li><a href="#">Term of Service</a></li>
                        <li><a href="contact.html">Customer Care</a> </li>
                    </ul>
                </div>
                <div class="columns col-lg-6 text-lg-right">
                    <p>© 2020 Bonafriqana. All rights reserved.
                    </p>
                </div>
                <button onclick="topFunction()" id="movetop" title="Go to top">
                    <span class="fa fa-angle-double-up"></span>
                </button>
            </div>
        </div>
    </div>
    <!-- //titels-5 -->
    <!-- move top -->

    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->
</section>


</body>

</html>

<script src="{{asset('frontend/assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery-2.1.4.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>

    // Toastr 

   @if (Session::has('message'))
       var type = "{{ Session::get('alert-type', 'info', 'success', 'warning', 'error')}}"
       switch (type) {
           case 'info':
               toastr.info("{{ Session::get('message')}}");
               break;
           case 'success':
               toastr.success("{{ Session::get('message')}}");
               break;
           case 'warning':
               toastr.warning("{{ Session::get('message')}}");
               break;
           case 'error':
               toastr.error("{{ Session::get('message')}}");
               break;
       
           default:
               break;
       }
    @endif

    // End Toastr

</script>

<!--/login-->
<script>
    /*  $(document).ready(function () {
          $(".button-log a").click(function () {
              $(".overlay-login").fadeToggle(200);
              $(this).toggleClass('btn-open').toggleClass('btn-close');
          });
      });
      $('.overlay-close1').on('click', function () {
          $(".overlay-login").fadeToggle(200);
          $(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
          open = false;
      });*/
</script>
<!--//login-->
<script>
// optional
      $('#customerhnyCarousel').carousel({
              interval: 5000
  });
</script>

<script src="{{asset('frontend/assets/js/jquery.flexslider.js')}}"></script>
<!-- single -->
<script src="{{asset('frontend/assets/js/imagezoom.js')}}"></script>

<script>
    // Can also be used with $(document).ready()
    $(window).load(function () {
      $('.flexslider1').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
      });
    });
   </script>

<!-- cart-js -->
<script src="{{asset('frontend/assets/js/minicart.js')}}"></script>
<script>
   transmitv.render();

   transmitv.cart.on('transmitv_checkout', function (evt) {
       var items, len, i;

       if (this.subtotal() > 0) {
           items = this.items();

           for (i = 0, len = items.length; i < len; i++) {}
       }
   });
</script>
<!-- //cart-js -->

<script src="{{asset('frontend/assets/js/jquery-ui.js')}}"></script>
<script>
//<![CDATA[ 
$(window).load(function () {
  $("#slider-range").slider({
    range: true,
    min: 0,
    max: 9000,
    values: [50, 6000],
    slide: function (event, ui) {
      $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
    }
  });
  $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

}); //]]>
</script>
<!-- //price range (top products) -->

<!--pop-up-box-->
<script src="{{asset('frontend/assets/js/jquery.magnific-popup.js')}}"></script>
<!--//pop-up-box-->
<script>
$(document).ready(function () {
  $('.popup-with-zoom-anim').magnificPopup({
    type: 'inline',
    fixedContentPos: false,
    fixedBgPos: true,
    overflowY: 'auto',
    closeBtnInside: true,
    preloader: false,
    midClick: true,
    removalDelay: 300,
    mainClass: 'my-mfp-zoom-in'
  });

});
</script>
<!--//search-bar-->
<!-- disable body scroll which navbar is in active -->

<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>

<!-- Categories product display -->
<script type="text/javascript">

$(document).ready(function(){
    $('.cat_product').on('click', function(e){
        e.preventDefault();
        var id = $(this).data('id');
        alert('category');
    });
});

</script>

<!-- ADD TO CART WITHOUT AJAX -->
<script type="text/javascript">

    /*$(document).ready(function(){
        $('.addcart').on('click', function(){
            var id = $(this).data('id');
            // alert(id)
            if (id) 
            {
                $.ajax({
                    url: "{{ url('add/to/cart/') }}/"+id,
                    type: "GET",
                    dataType: "json",
                    success: function (data) 
                    {
                        const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                        })

                        if ($.isEmptyObject(data.error)) 
                        {

                            Toast.fire({
                            icon: 'success',
                            title: data.success
                            })
                            
                        }
                        else
                        {
                            Toast.fire({
                            icon: 'error',
                            title: data.success
                            })
                        }
                    },
                });
            }
            else
            {
                alert('danger');
            }
        });
    });*/

</script>

<!-- ADD TO CART WITHOUT AJAX -->
<script type="text/javascript">

function productview(id)
{
    $.ajax({
        url: "{{ url('/cart/product/view') }}/"+id,
        type: "GET",
        dataType: "json",
        success: function(data)
        {
            $('#pname').text(data.product.product_name);
            $('#pimage').attr('src',data.product.image_one);
            $('#pcode').text(data.product.product_code);
            $('#pcat').text(data.product.category_name);
            $('#psub').text(data.product.subcategory_name);
            $('#product_id').val(data.product.id);

            var d = $('select[name="color"]').empty();
            $.each(data.color,function(key,value){
                $('select[name="color"]').append( '<option value="'+value+'">'+value+'</option>')
            });

            var d = $('select[name="size"]').empty();
            $.each(data.size,function(key,value){
                $('select[name="size"]').append( '<option value="'+value+'">'+value+'</option>')
            });

        }
    })
}

</script>

<!-- WISHLIST -->
<script type="text/javascript">

    $(document).ready(function(){
        $('.addwishlist').on('click', function(){
            var id = $(this).data('id');
            if (id) 
            {
                $.ajax({
                    url: "{{ url('add/wishlist/') }}/"+id,
                    type: "GET",
                    dataType: "json",
                    success: function (data) 
                    {
                        const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                        })

                        if ($.isEmptyObject(data.error)) 
                        {

                            Toast.fire({
                            icon: 'success',
                            title: data.success
                            })
                            
                        }
                        else
                        {
                            Toast.fire({
                            icon: 'error',
                            title: data.success
                            })
                        }
                    },
                });
            }
            else
            {
                alert('danger');
            }
        });
    });

</script>
<!-- disable body scroll which navbar is in active -->
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>

