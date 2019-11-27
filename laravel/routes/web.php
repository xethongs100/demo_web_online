<?php
use App\Http\Middleware\CheckLogin;
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

//lấy dữ liệu database load lên trang chủ
Route::get('/','PageController@view_home')->name('trangchu');
//chuyển trang tới trang loại sản phẩm theo id
Route::get('home/{name}/{id}','PageController@type_product')->name('type_product');


//tim kiem san pham
Route::get('/seach','PageController@seach')->name('tim-kiem');

//dang ki
Route::group(['prefix'=>'register'],function(){
	//chuyển trang tới trang đăng kí
	Route::get('new','RegisterController@view_register')->name('view_register');
	// //xử lý đăng kí
	Route::post('register-new','RegisterController@register')->name('xu_ly_register');
});


//dang nhap
Route::group(['prefix'=>'login'],function(){
	//chuyển tới trang đăng nhập
	Route::get('view','LoginController@view_login')->name('view_login');
	// //xu ly dang nhap
	Route::post('login-xu-ly','LoginController@Login')->name('xu_ly_login');
	// //xu ly logout
	Route::get('logout','LoginController@Logout')->name('thoat');
	//lay lai mat khau
	Route::get('reset-password','LoginController@view_reset_pass')->name('view_reset');

	Route::post('reset-password/send','LoginController@sendMail')->name('send_mail');

	Route::get('reset-password/resert/{code}','LoginController@view_new_pass')->name('re_password');

	Route::post('reset-password/resert/{id}','LoginController@NewPass')->name('new_password');

	Route::get('auth/facebook', 'SocialController@redirectToProvider')->name('facebook.login') ;
	
	Route::get('auth/facebook/callback', 'SocialController@handleProviderCallback');
});


//gio hang
Route::group(['prefix'=>'cart'],function(){
	//them san pham
	Route::get('thêm-sản-phẩm/{id}','CartController@addCart')->name('them_san_pham');
	//danh sach gio hang
	Route::get('gio-hang','CartController@show_cart')->name('danh-sach-sp');
	//cap nhat gio hang
	Route::get('gio-hang/cap-nhat/{id}/{qty}','CartController@updateCart');
	//xoa gio hang
	Route::get('xoa-gio-hang/{id}','CartController@delete_cart')->name('xoa-gio-hang');
	//chuyen toi trang dat hang
	Route::get('dat-hang','CartController@view_dat_hang')->name('view-dat-hang');
	//xu ly dat hang
	Route::post('mua-hang','CartController@xu_ly_dat_hang')->name('mua-hang');
	//chuyen toi trang don mua hang
	Route::get('hoa-don','CartController@view_mua_hang')->name('hoa-don');
	//xoa don hang
	Route::get('hoa-don/{id}','CartController@delete_don_hang')->name('delete-don-hang');

});

//trang ca nhan
Route::group(['prefix'=>'profile','middleware'=>'CheckLogin'],function(){
	Route::get('{id}','ProfileController@view_profile')->name('view_profile');
	Route::post('{id}','ProfileController@change_profile')->name('thay_doi_profile');
	Route::get('change_password/{id}','ProfileController@view_change_password')->name('view_change_pass');
	Route::post('change_password/{id}','ProfileController@xu_ly_change_pass')->name('c_password');
});


Route::group(['prefix'=>'detail'],function(){
	Route::get('san-pham/{id}/{id_type}','PageController@view_chi_tiet_sp')->name('chi_tiet_sp');
	Route::post('comment/{id}/{id_type}/{id_user}','PageController@request_comment')->name('comment');
	Route::get('xoa-comment/{id_comment}/{id_pro}/{id_user}','PageController@xoa_comment')->name('delete-comment');
});


Route::group(['prefix'=>'admin','middleware'=>'CheckLogin'],function(){
	//san pham
	Route::get('danh-sach-product','QuanLyProductController@view_ds_san_pham')->name('view_ds_product');
	Route::get('danh-sach-product/trang-add','QuanLyProductController@view_add')->name('view_add_product');
	Route::post('danh-sach-product/trang-add','QuanLyProductController@add_product')->name('add-product');
	Route::get('danh-sach-product/trang-edit/{id}','QuanLyProductController@edit')->name('view_edit_product');
	Route::post('danh-sach-product/trang-edit/update/{id}','QuanLyProductController@update')->name('update-product');
	// Route::get('danh-sach-produc/delete/{id}','StudentController@delete')->name('delete_pro');

	//comment
	Route::get('danh-sach-comment','QuanLyCommentController@listComment')->name('view_ds_comment');
	Route::get('danh-sach-comment/delete','QuanLyCommentController@listDelComment')->name('view_delete_comment');
	Route::get('danh-sach-comment/store/{id}','QuanLyCommentController@phuc_hoi_comment_delete')->name('phuc_hoi_comment');
	Route::get('danh-sach-comment/delete/{id}','QuanLyCommentController@destroy')->name('xoa_comment');

	//hoa don
	Route::get('danh-sach-hoa-don','QuanLyHoaDonController@view_hoa_don')->name('view_hoa_don');
	Route::get('danh-sach-hoa-don/{id}','QuanLyHoaDonController@xac_nhan')->name('xac-nhan-don-hang');

	//user
	Route::get('danh-sach-user','QuanLyUserController@view_user')->name('dsach-user');
	Route::get('danh-sach-user/detail/{id}','QuanLyUserController@detail')->name('detail_user');
	Route::get('danh-sach-user/edit/{id}','QuanLyUserController@edit')->name('edit_user');
	Route::put('danh-sach-user/update/{id}','QuanLyUserController@update');
	Route::get('danh-sach-user/delete/{id}','QuanLyUserController@destroy')->name('delete_user');

	//loai san pham
	Route::get('danh-sach-loai-san-pham','QuanLyTypeProductController@index')->name('view_loai_sp');
	Route::post('danh-sach-loai-san-pham/them-moi','QuanLyTypeProductController@add_type')->name('them_type');
	Route::get('danh-sach-loai-san-pham/detail/{id}','QuanLyTypeProductController@show')->name('detail_type');
	Route::get('danh-sach-loai-san-pham/edit/{id}','QuanLyTypeProductController@edit')->name('edit_type');
	Route::put('danh-sach-loai-san-pham/update/{id}','QuanLyTypeProductController@update');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
