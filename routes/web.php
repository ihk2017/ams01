<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemTypeController;
use App\Http\Controllers\AssetitemController;
use App\Http\Controllers\ItemmodelController;
// use CodexShaper\Permission\Models\Permission;
use CodexShaper\Permission\Facades\Permission;
use App\Http\Controllers\MysinglePaceController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Prosettings\BrandController;


//Frontend routing

// Route::get('/' ,[HomeController::class,'indexx']);
Route::get('/home' , 'App\Http\Controllers\HomeController@home');

Route::get('/' ,[HomeController::class,'index'])->name('index');

Route::get('/logout' , 'App\Http\Controllers\HomeController@logout')->name('logout');



Route::GET('/frontend/single-post/{id}','App\Http\Controllers\MysinglePaceController@mysingle' )->name('my_allsingle_post');
Route::GET('/frontend/contact-us','App\Http\Controllers\ContactController@contactus' )->name('contact_us');

Route::group(['middleware'=>['auth','admin']],function(){
    Route::get('/admin',function(){
    return view('admin.dashboard');
    });

    //index-> function into CategoryController,category_list-> route name from sidebar
    //Category


    Route::GET('/admin/category-list',[CategoryController::class,'index'])->name('all_category');
    Route::GET('/admin/category-add',[CategoryController::class,'create'])->name('add_category');
    Route::post('/admin/store-category',[CategoryController::class,'store'])->name('category_store');
    Route::GET('/admin/category-edit/{id}','App\Http\Controllers\Admin\CategoryController@edit' )->name('category_edit');
    Route::post('/admin/delete-category','App\Http\Controllers\Admin\CategoryController@delete' )->name('category_delete');
    Route::post('/admin/update-category','App\Http\Controllers\Admin\CategoryController@update' )->name('category_update');

    //Post
    Route::GET('/admin/all-posts-list','App\Http\Controllers\Admin\PostController@index' )->name('all_post');
    Route::GET('/admin/post-add','App\Http\Controllers\Admin\PostController@create' )->name('add_post');
    Route::post('/admin/store-post','App\Http\Controllers\Admin\PostController@store' )->name('post_store');
    Route::GET('/admin/post-edit/{id}','App\Http\Controllers\Admin\PostController@edit' )->name('post_edit');
    Route::post('/admin/update-post','App\Http\Controllers\Admin\PostController@update' )->name('post_update');
    Route::post('/admin/delete-post','App\Http\Controllers\Admin\PostController@delete' )->name('post_delete');


    //Personal info entry
    Route::GET('/admin/bio-list','App\Http\Controllers\Admin\BioController@index' )->name('all_bio');
    Route::GET('/admin/bio-add','App\Http\Controllers\Admin\BioController@create' )->name('add_bio');
    Route::post('/admin/store-bio','App\Http\Controllers\Admin\BioController@biostore' )->name('bio_store');
    Route::GET('/admin/bio-edit/{id}','App\Http\Controllers\Admin\BioController@edit' )->name('bio_edit');
    Route::post('/admin/update-bio','App\Http\Controllers\Admin\BioController@update' )->name('bio_update');
    Route::GET('/admin/delete-bio/{id}','App\Http\Controllers\Admin\BioController@delete' )->name('bio_delete');

    //Employee
    Route::GET('/admin/emp-list','App\Http\Controllers\Admin\EmpController@index' )->name('all_emp');
    Route::GET('/admin/emp-add','App\Http\Controllers\Admin\EmpController@create' )->name('add_emp');
    Route::post('/admin/store-img','App\Http\Controllers\Admin\EmpController@imgstore' )->name('img_store');
    Route::GET('/admin/emp-edit/{id}','App\Http\Controllers\Admin\EmpController@edit' )->name('emp_edit');
    Route::post('/admin/update-emp/{id}','App\Http\Controllers\Admin\EmpController@update' )->name('emp_update');
    Route::GET('/admin/delete-emp/{id}','App\Http\Controllers\Admin\EmpController@delete' )->name('emp_delete');

    //Archive
    Route::GET('/admin/personalimage-list','App\Http\Controllers\Admin\ArchiveController@personal' )->name('personal_list');
    Route::GET('/admin/image-add','App\Http\Controllers\Admin\ArchiveController@create' )->name('add_image');
    Route::post('/admin/upload-img','App\Http\Controllers\Admin\ArchiveController@archivestore' )->name('archive_store');


    //UOM
    Route::GET('/admin/uom-list','App\Http\Controllers\Prosettings\UOMController@uom_index' )->name('all_uom');
    Route::GET('/admin/uom-add','App\Http\Controllers\Prosettings\UOMController@uom_create' )->name('add_uom');
    Route::post('/admin/store-uom','App\Http\Controllers\Prosettings\UOMController@store' )->name('uom_store');
    Route::get('/admin/uom-edit/{id}','App\Http\Controllers\Prosettings\UOMController@edit' )->name('uom_edit');
    Route::post('/admin/update-uom/{id}','App\Http\Controllers\Prosettings\UOMController@update' )->name('uom_update');
    Route::post('/admin/delete-uom','App\Http\Controllers\Prosettings\UOMController@delete' )->name('uom_delete');

    //Brand
    Route::GET('/admin/brand-list',[BrandController::class,'brand_index'])->name('all_brand');
    Route::GET('/admin/brand-add',[BrandController::class,'brand_create'])->name('add_brand');
    Route::post('/admin/store-brand',[BrandController::class,'store'])->name('brand_store');
    Route::get('/admin/brand-edit/{id}',[BrandController::class,'edit'])->name('brand_edit');
    Route::post('/admin/update-brand/{id}',[BrandController::class,'update'])->name('brand_update');
    Route::post('/admin/delete-brand',[BrandController::class,'delete'])->name('brand_delete');

    //Item type  itemtype_store
    Route::GET('/admin/itemtype-add',[ItemTypeController::class,'create'])->name('add_itemtype');
    Route::post('/admin/itemtype-store',[ItemTypeController::class,'store'])->name('im_store');
    Route::GET('/admin/itemType-list',[ItemTypeController::class,'index'])->name('itemtype_list');
    Route::get('/admin/itemType-edit/{id}',[ItemTypeController::class,'edit'])->name('itemtype_edit');
    Route::post('/admin/update-itemType/{id}',[ItemTypeController::class,'update'])->name('itemType_update');
    Route::post('/admin/delete-itemtype',[ItemTypeController::class,'delete'])->name('itemtype_delete');

    //Item Model
    Route::GET('/admin/item-model-add',[ItemmodelController::class,'create'])->name('add_itemmodel');
    Route::post('/admin/store-itemmodel',[ItemmodelController::class,'store'])->name('itemmodel_store');
    Route::GET('/admin/item-model-list',[ItemmodelController::class,'index'])->name('item_model_list');
    Route::GET('/admin/item-model-edit/{id}',[ItemmodelController::class,'edit'])->name('itemmodel_edit');
    Route::post('/admin/update-itemmodel/{id}',[ItemmodelController::class,'update'])->name('itemmodel_update');
    Route::post('/admin/delete-item-model',[ItemmodelController::class,'delete'])->name('itemmodel_delete');

    //Item setup
    Route::GET('/admin/item-add',[AssetitemController::class,'create'] )->name('add_item');
    Route::post('/admin/store-item',[AssetitemController::class,'store'] )->name('item_store');
    Route::GET('/admin/item-list',[AssetitemController::class,'index'] )->name('item_list');
    Route::GET('/admin/item-edit/{id}',[AssetitemController::class,'edit'] )->name('item_edit');
    Route::post('/admin/update-item/{id}',[AssetitemController::class,'update'] )->name('item_update');
    Route::post('/admin/delete-item',[AssetitemController::class,'delete'] )->name('item_delete');

    //Users info

    Route::GET('/admin/system-user-list',[UserController::class,'index'] )->name('user_list');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});


Route::group(['prefix' => config('permission.prefix'),'middleware'=>['role:admin']], function () {
    Permission::routes();
});
