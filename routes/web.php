<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.index');
});

Route::get('/shop', function () {
    return view('user.pages.shop');
});

Route::get('/blog', function () {
    return view('user.pages.blog');
});

Route::get('/contact', function () {
    return view('user.pages.contact');
});

Route::get('/about', function () {
    return view('user.pages.about');
});

Route::get('/product/single', function () {
    return view('user.pages.product_view');
});

Route::get('/product/view', function () {
    return view('user.pages.product_view');
});

Route::get('/blog/view', function () {
    return view('user.pages.blog_view');
});

Auth::routes(['verify' =>true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/password/change', 'HomeController@changePassword')->name('password.change');
Route::post('/password/update', 'HomeController@updatePassword')->name('password.update');
Route::get('/user/logout', 'HomeController@logout')->name('user.logout');


// Admin authentication routes
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.auth.login');
Route::post('admin', 'Admin\LoginController@login');
Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/reset/password/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/update/reset', 'Admin\ResetPasswordController@reset')->name('admin.reset.update');
Route::get('/admin/Change/Password','AdminController@ChangePassword')->name('admin.password.change');
Route::post('/admin/password/update','AdminController@Update_pass')->name('admin.password.update'); 
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');

 /* Admin section routes */

 // Categories
 Route::group(['prefix' => 'admin',  'middleware' => 'auth:admin'], function()
 {
    // Admin pages routes
    Route::get('/home', 'AdminController@index')->name('admin.home');

    // Admin categories routes
    Route::get('/categories', 'Admin\Category\CategoryController@category')->name('categories');
    Route::post('/store/category', 'Admin\Category\CategoryController@storecategory')->name('store.category');
    Route::get('/delete/category/{id}', 'Admin\Category\CategoryController@Deletecategory');
    Route::get('/edit/category/{id}', 'Admin\Category\CategoryController@Editcategory');
    Route::post('/update/category/{id}', 'Admin\Category\CategoryController@Updatecategory');

    // Admin sub categories routes
    Route::get('/sub/category', 'Admin\Category\SubCategoryController@subcategories')->name('sub.categories');
    Route::post('/store/subcat', 'Admin\Category\SubCategoryController@storesubcat')->name('store.subcategory');
    Route::get('/delete/subcategory/{id}', 'Admin\Category\SubCategoryController@DeleteSubcat');
    Route::get('/edit/subcategory/{id}', 'Admin\Category\SubCategoryController@EditSubcat');
    Route::post('/update/subcategory/{id}', 'Admin\Category\SubCategoryController@UpdateSubcat');

    // Coupon routes
    Route::get('/sub/coupon/', 'Admin\Category\CouponController@Coupon')->name('admin.coupon');
    Route::post('/store/coupon/', 'Admin\Category\CouponController@StoreCoupon')->name('store.coupon');
    Route::get('/delete/coupon/{id}', 'Admin\Category\CouponController@DeleteCoupon');
    Route::get('/edit/coupon/{id}', 'Admin\Category\CouponController@EditCoupon');
    Route::post('/update/coupon/{id}', 'Admin\Category\CouponController@UpdateCoupon');

    // Newsletter routes
    Route::get('/newsletter', 'Admin\Category\NewsletterController@Newsletter')->name('admin.newsletters');
    Route::get('/delete/sub/{id}', 'Admin\Category\NewsletterController@DeleteSub');

    // Product Routes
    Route::get('/product/all', 'Admin\ProductController@index')->name('all.product');
    Route::get('/product/add', 'Admin\ProductController@create')->name('add.product');
    Route::post('/store/product', 'Admin\ProductController@store')->name('store.product');

    Route::get('/inactive/product/{id}', 'Admin\ProductController@inactive');
    Route::get('/active/product/{id}', 'Admin\ProductController@active');
    Route::get('/delete/product/{id}', 'Admin\ProductController@deleteProduct');
    Route::get('/view/product/{id}', 'Admin\ProductController@viewProduct');
    Route::get('/edit/product/{id}', 'Admin\ProductController@EditProduct');

    Route::post('/update/product/withoutphoto/{id}', 'Admin\ProductController@UpdateProductWithoutPhoto');
    Route::post('/update/product/photo/{id}', 'Admin\ProductController@UpdateProductPhoto');

    // Show product subcategory with ajax
    Route::get('/get/subcategory/{category_id}', 'Admin\ProductController@GetSubcat');

    // Admin Blog Category
    Route::get('/blog/category/list', 'Admin\PostController@BlogCatList')->name('add.blog.categorylist');
    Route::post('/store/blog', 'Admin\PostController@BlogCatStore')->name('store.blog.category');
    Route::get('/delete/blogcategory/{id}', 'Admin\PostController@deleteBlogCat');
    Route::get('/edit/blogcategory/{id}', 'Admin\PostController@EditBlogCat');
    Route::post('/update/blog/category/{id}', 'Admin\PostController@UpdateBlogCat');

    // Admin Blog Post
    Route::get('/add/post', 'Admin\PostController@Create')->name('add.blogpost');
    Route::get('/all/post', 'Admin\PostController@index')->name('all.blogpost');
    Route::post('/store/post', 'Admin\PostController@store')->name('store.post');
    Route::get('/delete/post/{id}', 'Admin\PostController@deletePost');
    Route::get('/edit/post/{id}', 'Admin\PostController@EditPost');
    Route::post('/update/post/{id}', 'Admin\PostController@UpdatePost');



 });
 /* End Admin section routes */

 
    //FRONTEND ROUTES
    Route::post('store/newsletter', 'UserController@StoreNewsletter')->name('store.newsletter');


    // Add wishlist
    Route::get('add/wishlist/{id}','WishlistController@addWishlist');

    // Add to cart
    Route::get('add/to/cart/{id}','CartController@AddCart');
    Route::get('check','CartController@check');

    Route::get('product/cart','CartController@ShowCart')->name('show.cart');
    Route::get('remove/cart/{rowId}','CartController@removeCart');
    Route::post('update/cart/item','CartController@UpdateCart')->name('update.cartitem');

    Route::get('/cart/product/view/{id}','CartController@ViewProduct');
    Route::post('insert/into/cart/','CartController@insertCart')->name('insert.into.cart');
    
    Route::get('product/details/{id}/{product_name}','ProductController@ProductView');
    
    Route::post('cart/product/add/{id}','ProductController@AddCart');
    Route::get('check','ProductController@check');

