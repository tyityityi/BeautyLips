<?php
use Illuminate\Support\Facades\Input as input;
use App\customer;
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



Auth::routes();


Route::get('/', "ProductController@index")->name('index');
Route::get('/productdetail/{id}',"ProductController@show");



Route::get('/productlist',"ProductListController@index");

Route::get('/productlist/brand/{brand}',"ProductListController@showBrand");
Route::get('/productlist/lip/{lip}',"ProductListController@showLip");
Route::get('/productlist/texture/{texture}',"ProductListController@showTexture");




Route::get('/productadding/index',"ProductAddingController@index")->name('ProductAdding');;
Route::post('/productadding/store',"ProductAddingController@store");

Route::get('/purchaseOrder',"PurchaseOrderController@index");

Route::get('/purchaseOrder/status/currentP',"PurchaseOrderController@currentP");
Route::get('/purchaseOrder/status/shipped',"PurchaseOrderController@shipped");



Route::get('/purchaseOrderDetail/{PONum}',"PurchaseOrderController@show");
Route::put('/purchaseOrderDetail/{PONum}',"PurchaseOrderController@update");




//---------------------------------------------------------------------


Route::get('/vendorPurchaseOrder',"VendorPurchaseOrderController@index");
Route::get('/VendorPurchaseOrderDetail/{PONum}',"VendorPurchaseOrderController@show");
Route::put('/VendorPurchaseOrderDetail/{PONum}',"VendorPurchaseOrderController@update");
Route::get('/vendorPurchaseOrder/status/holdP',"VendorPurchaseOrderController@holdP");
Route::get('/vendorPurchaseOrder/status/pendingtP',"VendorPurchaseOrderController@pendingtP");
Route::get('/vendorPurchaseOrder/status/pastP',"VendorPurchaseOrderController@pastP");











Route::resource('shopping_carts', 'ShoppingcartController');
Route::resource('purchase_orders', 'PurchaseOrderController');
Route::resource('product_reviews', 'ProductReviewController');

Route::post('/product_reviews/{PONum}{productID}',"ProductReviewController@pass");

Route::get('/vendorCenter',function(){
	return view('VendorCenter');
});

Route::get('/purchaseOrderProcessing',function(){
	return view('PurchaseOrderProcessing');
});


Route::get('/success',function(){
	return view('success');
});


/*
E1 Browse the product catalog
E2 Find products by searching keywords in product names 
or by an unique product ID
E3 Add a new product(name, brand, tetxure, shade, price and a thumbnail image)
E4 upload 1-4 detail images
E5 edit information of a product in a product detail page.
They can change product name, brand... Also add or remove
*/
Route::get('/vendorCenter',"VendorCenterController@index")->name('vendorCenter');

Route::get('/vendorCenter/Brand/{brand}',function($brand){
    $url = "";
	$products = App\product::where('brand',$brand)->paginate(6);
	return view('BrandProductListForVendor',compact('products','url'));
});

Route::get('/vendorCenter/Lip/{lip}',function($lip){
    $url = "";
	$products = App\product::where('lip',$lip)->paginate(6);
	return view('LipProductListForVendor',compact('products','url'));
});

Route::get('/vendorCenter/Texture/{texture}',function($texture){
    $url = "";
	$products = App\product::where('texture',$texture)->paginate(6);
	return view('TextureProductListForVendor',compact('products','url'));
});

Route::get('/productedit/{id}',function($id){
	$product = App\product::where('productID',$id)->first();
	$dImages = App\detail_image::where('productID',$id)->get();
	return view('ProductEdit',compact('product','dImages'));
})->name('productedit');

Route::post('/productedit/store',"ProductEditController@store");

Route::get('/productadding/index',"ProductAddingController@index")->name('ProductAdding');

Route::post('/productadding/store',"ProductAddingController@store");

Route::post('/productedit/destroy',"ProductEditController@destroy");

Route::prefix('vendor')->group(function(){
	Route::get('/login','Auth\VendorLoginController@showLoginForm')->name('vendor.login');
	Route::post('/login','Auth\VendorLoginController@login')->name('vendor.login.submit');
	Route::get('/', 'VendorController@index')->name('vendor.dashboard');
});

//---------------------------------------------------------------------

Route::get('/notification',"NotificationController@index");
Route::get('/notification/update/{id}',"NotificationController@update");
Route::get('/notification/get',"NotificationController@get");