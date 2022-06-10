<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;


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

//// AdminController:
Route::post('admin_index',[LoginController::class,'authlogin'])->name('admin_index');
Route::get('logout_admin',[AdminController::class,'authlogout'])->name('logout_admin');
Route::get('/admin.login',[LoginController::class,'pagelogin'])->name('admin.login');
//
Route::get('/admin.index',[AdminController::class,'pageindex']);
//User:
Route::get('delete_user/{id}',[AdminController::class,'delete_user'])->name('delete_user');
Route::get('table_user',[AdminController::class,'table_user'])->name('page_user');
// Order:
Route::get('delete_order/{id}',[AdminController::class,'delete_order'])->name('delete_order');
Route::get('table_order',[AdminController::class,'table_order'])->name('page_order');
// Add, Edit, Delete: Comment
Route::get('delete_comment/{id}',[AdminController::class,'delete_comment'])->name('delete_comment');
Route::get('table_comment',[AdminController::class,'table_comment'])->name('page_comment');
// Add, Edit, Delete: Product
Route::post('edit_product/{id}',[AdminController::class,'postedit_product'])->name('postedit_product');
Route::get('edit_product/{id}',[AdminController::class,'getedit_product'])->name('getedit_product');
Route::get('delete_product/{id}',[AdminController::class,'delete_product'])->name('delete_product');
Route::post('add_products',[AdminController::class,'add_products'])->name('add_products');
Route::get('add_product',[AdminController::class,'gettable_product'])->name('add_product');
Route::get('table_product',[AdminController::class,'table_product'])->name('page_product');
// Add, Edit, Delete: Catalog
Route::get('table_catalog',[AdminController::class,'table_catalog'])->name('page_catalog');
Route::get('delete_catalog/{id}',[AdminController::class,'delete_catalog'])->name('delete_catalog');
Route::get('edit_catalog/{id}',[AdminController::class,'getedit_catalog'])->name('getedit_catalog');
Route::post('edit_catalog/{id}',[AdminController::class,'postedit_catalog'])->name('postedit_catalog');
Route::post('add_catalog',[AdminController::class,'add_catalog'])->name('add_catalog');

//// HomeController:
Route::post('review',[HomeController::class,'comment_rating'])->name('save_review');
Route::get('review/{id}',[HomeController::class,'getreview'])->name('review');
Route::get('history/{id}',[HomeController::class,'gethistory'])->name('history');
Route::get('/home.order_history',[HomeController::class,'history']);
Route::post('checkcart',[HomeController::class,'postcheckout'])->name('checkcart');
// Add, Delete: Cart
Route::get('delcartone/{id}',[HomeController::class,'getDeltoCartOne'])->name('xoamotgiohang');
Route::get('delcart/{id}',[HomeController::class,'getDeltoCart'])->name('xoagiohang');
Route::get('addcart/{id}',[HomeController::class,'getAddtoCart'])->name('themgiohang');
// Signup, Login, Logout: User
Route::get('logout_index',[HomeController::class,'logout'])->name('logout_index');
Route::post('login_index',[HomeController::class,'login'])->name('login_index');
Route::post('login_signup',[HomeController::class,'sinup'])->name('login_signup');
//
Route::get('/',[HomeController::class,'indexNew']);
Route::get('/home.index',[HomeController::class,'indexNew']);
Route::get('/home.shop',[HomeController::class,'shop']);
Route::get('/home.my-seach',[HomeController::class,'my_seach']);
Route::get('/home.product-single',[HomeController::class,'product_single']);

Route::get('/{page?}',[HomeController::class,'index']);